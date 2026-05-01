// hero-particle-field.js — WebGL dot-matrix partikelfelt til hero-sektion
// Erstatter den tidligere 2D Canvas dot-grid pulse.
// Kald initHeroParticleField(canvasElement) — returnerer { destroy } eller null
// hvis WebGL ikke er tilgængeligt (i hvilket tilfælde et CSS-fallback anvendes).

import * as THREE from 'https://cdn.jsdelivr.net/npm/three@0.160/+esm';

// ────────────────────────────────────────────────────────────────────────────
// Shaders
// ────────────────────────────────────────────────────────────────────────────

const VERT = /* glsl */`
  uniform float u_time;
  uniform vec2  u_mouse;
  uniform float u_dpr;
  attribute vec3  color;
  attribute float distFromCenter;
  varying vec3  v_color;
  varying float v_distFromCenter;
  varying float v_wave;

  void main() {
    v_color           = color;
    v_distFromCenter  = distFromCenter;

    vec3 pos = position;

    // Bølge-felt: to overlejrede sinusbølger giver organisk, koherent flow
    // (ikke per-partikel støj — alle dots følger samme bølgefront)
    float w1 = sin(position.x * 0.012 + position.y * 0.008 + u_time * 1.2);
    float w2 = sin(position.x * 0.006 - position.y * 0.014 + u_time * 0.85);

    // Forskydning af partikel-position — markante bølger, organisk flow
    pos.x += w1 * 15.0 + w2 * 7.0;
    pos.y += w2 * 15.0 + w1 * 7.0;

    // Bølge-værdi til fragment-shader (range -1..1)
    v_wave = (w1 + w2) * 0.5;

    // Subtle pointer parallax (max ~3% af viewport-størrelse i pixels)
    pos.x += u_mouse.x * 30.0;
    pos.y += u_mouse.y * 30.0;

    gl_Position = projectionMatrix * modelViewMatrix * vec4(pos, 1.0);

    // Bølge-puls i størrelse: dots på bølgekam = større, dots i bølgedal = mindre
    // Det gør bølgen visuelt læsbar selv ved subtile forskydninger
    float wavePulse = 0.5 + 0.5 * v_wave;
    float baseSize  = mix(1.5, 4.0, smoothstep(0.0, 1.0, wavePulse * (1.0 - distFromCenter)));
    gl_PointSize = baseSize * u_dpr;
  }
`;

const FRAG = /* glsl */`
  varying vec3  v_color;
  varying float v_distFromCenter;
  varying float v_wave;

  void main() {
    // Hver partikel: blød rund disc
    vec2 uv = gl_PointCoord - 0.5;
    float r = length(uv) * 2.0;
    float dotAlpha = 1.0 - smoothstep(0.55, 1.0, r);

    // Global radial fade fra center
    float globalFade = 1.0 - smoothstep(0.55, 1.0, v_distFromCenter);

    // Bølge-modulation af alpha — dots på bølgekam skinner stærkere
    float waveBoost = 0.6 + 0.4 * (0.5 + 0.5 * v_wave);

    float alpha = dotAlpha * globalFade * 0.85 * waveBoost;
    if (alpha < 0.001) discard;

    gl_FragColor = vec4(v_color, alpha);
  }
`;

// ────────────────────────────────────────────────────────────────────────────
// Konfiguration
// ────────────────────────────────────────────────────────────────────────────

const COLORS = [
  new THREE.Color(0x7C6AF0), // --brand
  new THREE.Color(0xE879A0), // --accent
  new THREE.Color(0x38BDF8), // --accent2
];

const DOT_SPACING_DESKTOP = 28;
const DOT_SPACING_MOBILE  = 38; // ~40 % færre partikler

// ────────────────────────────────────────────────────────────────────────────
// Public API
// ────────────────────────────────────────────────────────────────────────────

export function initHeroParticleField(canvasEl) {
  if (!canvasEl) return null;

  // 1. Forsøg at oprette WebGL renderer; falder tilbage til CSS hvis det fejler
  let renderer;
  try {
    renderer = new THREE.WebGLRenderer({
      canvas: canvasEl,
      alpha: true,
      antialias: true,
      powerPreference: 'high-performance',
    });
    if (!renderer.getContext()) throw new Error('No WebGL context');
  } catch (e) {
    applyCSSFallback(canvasEl);
    return null;
  }

  const dpr = Math.min(window.devicePixelRatio || 1, 2);
  renderer.setPixelRatio(dpr);
  renderer.setClearColor(0x000000, 0); // gennemsigtig — lader hero-bg skinne igennem

  const scene = new THREE.Scene();

  // Orthographic camera der arbejder direkte i pixels
  let W = canvasEl.clientWidth  || window.innerWidth;
  let H = canvasEl.clientHeight || window.innerHeight;
  const camera = new THREE.OrthographicCamera(-W / 2, W / 2, H / 2, -H / 2, -1000, 1000);

  const uniforms = {
    u_time:  { value: 0 },
    u_mouse: { value: new THREE.Vector2(0, 0) },
    u_dpr:   { value: dpr },
  };

  const material = new THREE.ShaderMaterial({
    vertexShader:   VERT,
    fragmentShader: FRAG,
    uniforms,
    transparent: true,
    depthWrite:  false,
    blending:    THREE.AdditiveBlending,
  });

  let geometry = null;
  let points   = null;

  function buildGrid() {
    if (geometry) {
      scene.remove(points);
      geometry.dispose();
    }

    W = canvasEl.clientWidth  || window.innerWidth;
    H = canvasEl.clientHeight || window.innerHeight;

    camera.left   = -W / 2;
    camera.right  =  W / 2;
    camera.top    =  H / 2;
    camera.bottom = -H / 2;
    camera.updateProjectionMatrix();

    const isMobile = window.innerWidth < 768;
    const spacing  = isMobile ? DOT_SPACING_MOBILE : DOT_SPACING_DESKTOP;

    const cols = Math.ceil(W / spacing) + 1;
    const rows = Math.ceil(H / spacing) + 1;
    const N    = cols * rows;

    const positions       = new Float32Array(N * 3);
    const colors          = new Float32Array(N * 3);
    const distFromCenter  = new Float32Array(N);

    const offX    = (W % spacing) / 2 - W / 2;
    const offY    = (H % spacing) / 2 - H / 2;
    const maxDist = Math.hypot(W * 0.6, H * 0.6);

    for (let r = 0; r < rows; r++) {
      for (let c = 0; c < cols; c++) {
        const i    = r * cols + c;
        const x    = offX + c * spacing;
        const y    = -offY - r * spacing; // +Y up i ortho-cam
        const dist = Math.hypot(x, y) / maxDist;

        positions[i * 3 + 0] = x;
        positions[i * 3 + 1] = y;
        positions[i * 3 + 2] = 0;

        // Vælg farve baseret på radial afstand — matcher eksisterende 2D-version
        const colIdx = dist < 0.35 ? 0 : (dist < 0.65 ? 1 : 2);
        const col    = COLORS[colIdx];
        colors[i * 3 + 0] = col.r;
        colors[i * 3 + 1] = col.g;
        colors[i * 3 + 2] = col.b;

        distFromCenter[i] = Math.min(dist, 1);
      }
    }

    geometry = new THREE.BufferGeometry();
    geometry.setAttribute('position',       new THREE.BufferAttribute(positions, 3));
    geometry.setAttribute('color',          new THREE.BufferAttribute(colors, 3));
    geometry.setAttribute('distFromCenter', new THREE.BufferAttribute(distFromCenter, 1));

    points = new THREE.Points(geometry, material);
    scene.add(points);
  }

  function setSize() {
    renderer.setSize(W, H, false);
  }

  buildGrid();
  setSize();

  // ────────────────────────────────────────────────────────────────────────
  // prefers-reduced-motion: render et frame, lyt på toggle
  // ────────────────────────────────────────────────────────────────────────
  const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');

  // ────────────────────────────────────────────────────────────────────────
  // IntersectionObserver: pause rAF når hero ikke er i viewport
  // ────────────────────────────────────────────────────────────────────────
  let visible = true;
  const heroEl = canvasEl.parentElement || canvasEl;
  const io = new IntersectionObserver(
    (entries) => { visible = entries[0].isIntersecting; },
    { threshold: 0.01 }
  );
  io.observe(heroEl);

  // ────────────────────────────────────────────────────────────────────────
  // Pointer parallax — kun på enheder med fin pointer (ikke touch-only)
  // ────────────────────────────────────────────────────────────────────────
  const isTouchOnly = window.matchMedia('(hover: none) and (pointer: coarse)').matches;

  function onMouseMove(e) {
    const rect = canvasEl.getBoundingClientRect();
    const nx = ((e.clientX - rect.left) / rect.width) * 2 - 1;
    const ny = -(((e.clientY - rect.top) / rect.height) * 2 - 1);
    // Clamp så pointer udenfor canvas ikke giver vilde værdier
    uniforms.u_mouse.value.set(
      Math.max(-1, Math.min(1, nx)),
      Math.max(-1, Math.min(1, ny))
    );
  }
  if (!isTouchOnly) {
    window.addEventListener('mousemove', onMouseMove, { passive: true });
  }

  // ────────────────────────────────────────────────────────────────────────
  // Resize-listener — debounced
  // ────────────────────────────────────────────────────────────────────────
  let resizeTimer = null;
  function onResize() {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(() => {
      buildGrid();
      setSize();
      // Render et frame straks så reducedMotion også opdateres ved resize
      renderer.render(scene, camera);
    }, 100);
  }
  window.addEventListener('resize', onResize, { passive: true });

  // ────────────────────────────────────────────────────────────────────────
  // Animation-loop
  // ────────────────────────────────────────────────────────────────────────
  let raf   = null;
  let lastT = performance.now();

  function tick(t) {
    if (reducedMotion.matches) {
      // reduceret motion: render én gang, ingen næste frame
      renderer.render(scene, camera);
      raf = null;
      return;
    }
    if (!visible) {
      // Ude af viewport — vent uden at advance time eller render
      raf = requestAnimationFrame(tick);
      return;
    }
    const dt = Math.min((t - lastT) / 1000, 0.1); // clamp dt mod tab-switch hop
    lastT = t;
    uniforms.u_time.value += dt;
    renderer.render(scene, camera);
    raf = requestAnimationFrame(tick);
  }

  function start() {
    if (raf) return;
    lastT = performance.now();
    raf = requestAnimationFrame(tick);
  }

  // Reagér på reducedMotion toggle (DevTools eller OS-indstilling)
  function onReducedMotionChange() {
    if (reducedMotion.matches) {
      if (raf) {
        cancelAnimationFrame(raf);
        raf = null;
      }
      renderer.render(scene, camera);
    } else {
      start();
    }
  }
  // Modern browsers
  if (reducedMotion.addEventListener) {
    reducedMotion.addEventListener('change', onReducedMotionChange);
  } else if (reducedMotion.addListener) {
    reducedMotion.addListener(onReducedMotionChange); // legacy Safari
  }

  // Initial render
  if (reducedMotion.matches) {
    renderer.render(scene, camera);
  } else {
    start();
  }

  // ────────────────────────────────────────────────────────────────────────
  // Cleanup
  // ────────────────────────────────────────────────────────────────────────
  function destroy() {
    if (raf) cancelAnimationFrame(raf);
    if (resizeTimer) clearTimeout(resizeTimer);
    window.removeEventListener('resize', onResize);
    if (!isTouchOnly) window.removeEventListener('mousemove', onMouseMove);
    if (reducedMotion.removeEventListener) {
      reducedMotion.removeEventListener('change', onReducedMotionChange);
    } else if (reducedMotion.removeListener) {
      reducedMotion.removeListener(onReducedMotionChange);
    }
    io.disconnect();
    if (geometry) geometry.dispose();
    material.dispose();
    renderer.dispose();
    // forceContextLoss frigiver GPU-ressourcer på alle implementationer
    const gl = renderer.getContext();
    const ext = gl && gl.getExtension('WEBGL_lose_context');
    if (ext) ext.loseContext();
  }

  return { destroy };
}

// ────────────────────────────────────────────────────────────────────────────
// CSS-fallback hvis WebGL ikke er tilgængelig
// ────────────────────────────────────────────────────────────────────────────

function applyCSSFallback(canvasEl) {
  canvasEl.style.display = 'none';
  const heroEl = canvasEl.parentElement;
  if (!heroEl) return;
  // Læg en gradient som baggrund så hero ikke står tom
  heroEl.style.backgroundImage = [
    'radial-gradient(circle at 50% 45%, rgba(124,106,240,0.10) 0%, transparent 35%)',
    'radial-gradient(circle at 70% 60%, rgba(232,121,160,0.06) 0%, transparent 30%)',
    'radial-gradient(circle at 30% 70%, rgba(56,189,248,0.06) 0%, transparent 35%)',
  ].join(',');
}
