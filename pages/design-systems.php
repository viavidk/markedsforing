<?php
$footerText = '69 design systemer &middot; <a href="?page=home">ViaVi Forge v' . FORGE_VERSION . '</a> &middot; Data fra <a href="https://github.com/VoltAgent/awesome-design-md" target="_blank" rel="noopener">awesome-design-md</a>';
?>

<div class="page">

<div class="hero">
  <span class="hero-tag">awesome-design-md &middot; 69 systemer</span>
  <h1>Vælg dit <span class="gb">design system.</span></h1>
  <p class="hero-sub">Drop én fil i dit projekt — Claude læser den og bygger UI der matcher det præcise visuelle udtryk fra verdens bedste produkter.</p>
</div>

<div class="what-section">
  <div class="what-grid">
    <div class="what-card">
      <h3>
        <svg width="14" height="14" fill="none" stroke="var(--brand)" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25z"/></svg>
        Hvad er DESIGN.md?
      </h3>
      <p>En plain-text markdown-fil der beskriver et komplet design system — farver, typografi, komponenter, spacing og animationer. Claude og andre AI-agenter læser den og genererer konsistent UI uden du behøver forklare stilen igen og igen.</p>
      <table class="what-table">
        <tr><th>Fil</th><th>Hvem læser den</th><th>Hvad den definerer</th></tr>
        <tr><td>AGENTS.md</td><td>Coding agents</td><td>Hvordan projektet bygges</td></tr>
        <tr><td>DESIGN.md</td><td>Design agents</td><td>Hvordan det skal se ud</td></tr>
      </table>
    </div>
    <div class="what-card">
      <h3>
        <svg width="14" height="14" fill="none" stroke="var(--ok)" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 7.5l3 2.25-3 2.25m4.5 0h3m-9 8.25h13.5A2.25 2.25 0 0021 18V6a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 6v12a2.25 2.25 0 002.25 2.25z"/></svg>
        Sådan bruger du det
      </h3>
      <p>Find et design system herunder og klik <strong style="color:var(--tp)">Preview</strong> for at se light/dark mockup. Kopier kommandoen og kør den i din <strong style="color:var(--tp)">projektrod</strong> — DESIGN.md hentes og erstatter den eksisterende.</p>
      <div class="install-row">
        <span><span style="color:var(--tm)">~/mit-projekt $</span> npx getdesign@latest add <span style="color:var(--accent2)">[navn]</span></span>
      </div>
      <div class="forge-tip">
        <strong>Forge-tip:</strong> Vælg design system direkte når du kører <span class="mono">forge</span> — hentes automatisk ved oprettelse.
      </div>
    </div>
  </div>
</div>

<div class="toolbar">
  <div class="search-wrap">
    <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><path stroke-linecap="round" d="m21 21-4.35-4.35"/></svg>
    <input type="text" id="search" placeholder="Søg design system..." oninput="doFilter()">
  </div>
  <div class="cat-scroll" id="cats"></div>
  <span class="result-count" id="rcount"></span>
</div>

<div class="grid" id="grid"></div>

</div>

<!-- MODAL -->
<div class="modal-overlay" id="modal" onclick="closeModal(event)">
  <div class="modal">
    <div class="modal-header">
      <div class="modal-dot" id="mdot"></div>
      <span class="modal-title" id="mtitle"></span>
      <span class="modal-sub" id="msub"></span>
      <div class="modal-tabs">
        <button class="modal-tab active" id="tab-dark" onclick="setTab('dark')">Dark</button>
        <button class="modal-tab" id="tab-light" onclick="setTab('light')">Light</button>
      </div>
      <button class="modal-close" onclick="closeModalDirect()">
        <svg width="12" height="12" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" d="M6 18L18 6M6 6l12 12"/></svg>
      </button>
    </div>
    <div class="modal-body">
      <div class="modal-npx">
        <span id="mnpx"></span>
        <button class="cbtn" onclick="copyNpx()">Kopiér</button>
      </div>
      <div id="preview-container"></div>
    </div>
  </div>
</div>

<script>
const CATS = [
  'All',
  'AI & LLM Platforms',
  'Developer Tools & IDEs',
  'Backend, Database & DevOps',
  'Productivity & SaaS',
  'Design & Creative Tools',
  'Fintech & Crypto',
  'E-commerce & Retail',
  'Media & Consumer Tech',
  'Automotive'
];

const SYSTEMS = [
  {id:'claude',      name:'Claude',       cat:'AI & LLM Platforms',          desc:'Warm terracotta accent, clean editorial layout',                         accent:'#d97706', bgD:'#0a0a0e', bgL:'#fafaf8', txD:'#f5f0eb', txL:'#1c1917', sfD:'#161612', sfL:'#f0ece6'},
  {id:'cohere',      name:'Cohere',       cat:'AI & LLM Platforms',          desc:'Vibrant gradients, data-rich dashboard aesthetic',                       accent:'#39d3c3', bgD:'#08090d', bgL:'#ffffff', txD:'#e8f0fe', txL:'#0d1117', sfD:'#0f1018', sfL:'#f0f4ff'},
  {id:'elevenlabs',  name:'ElevenLabs',   cat:'AI & LLM Platforms',          desc:'Dark cinematic UI, audio-waveform aesthetics',                           accent:'#f5c542', bgD:'#0a0a0a', bgL:'#ffffff', txD:'#f0f0f0', txL:'#111111', sfD:'#151515', sfL:'#f5f5f5'},
  {id:'minimax',     name:'Minimax',      cat:'AI & LLM Platforms',          desc:'Bold dark interface with neon accents',                                  accent:'#06b6d4', bgD:'#060810', bgL:'#f8faff', txD:'#e0eaff', txL:'#0f1020', sfD:'#0c0e1c', sfL:'#edf0ff'},
  {id:'mistral.ai',  name:'Mistral AI',   cat:'AI & LLM Platforms',          desc:'French-engineered minimalism, purple-toned',                             accent:'#8b5cf6', bgD:'#09080f', bgL:'#faf9ff', txD:'#ede9fe', txL:'#1e1b2e', sfD:'#110f1e', sfL:'#f0eeff'},
  {id:'ollama',      name:'Ollama',       cat:'AI & LLM Platforms',          desc:'Terminal-first, monochrome simplicity',                                  accent:'#d1d5db', bgD:'#0a0a0a', bgL:'#ffffff', txD:'#f5f5f5', txL:'#111111', sfD:'#141414', sfL:'#f5f5f5'},
  {id:'opencode.ai', name:'OpenCode AI',  cat:'AI & LLM Platforms',          desc:'Developer-centric dark theme',                                           accent:'#3b82f6', bgD:'#080c14', bgL:'#f8faff', txD:'#e0eaff', txL:'#0f172a', sfD:'#0d1220', sfL:'#eef2ff'},
  {id:'replicate',   name:'Replicate',    cat:'AI & LLM Platforms',          desc:'Clean white canvas, code-forward',                                       accent:'#000000', bgD:'#0f0f0f', bgL:'#ffffff', txD:'#f5f5f5', txL:'#111111', sfD:'#1a1a1a', sfL:'#fafafa'},
  {id:'runwayml',    name:'RunwayML',     cat:'AI & LLM Platforms',          desc:'Cinematic dark UI, media-rich layout',                                   accent:'#ec4899', bgD:'#070709', bgL:'#ffffff', txD:'#fce7f3', txL:'#0f0a14', sfD:'#0f0e14', sfL:'#fdf2f8'},
  {id:'together.ai', name:'Together AI',  cat:'AI & LLM Platforms',          desc:'Technical, blueprint-style design',                                      accent:'#2563eb', bgD:'#060912', bgL:'#f8faff', txD:'#dbeafe', txL:'#0c1224', sfD:'#0a0e1e', sfL:'#eff4ff'},
  {id:'voltagent',   name:'VoltAgent',    cat:'AI & LLM Platforms',          desc:'Void-black canvas, emerald accent, terminal-native',                     accent:'#10b981', bgD:'#040404', bgL:'#f8fffe', txD:'#d1fae5', txL:'#052e16', sfD:'#090909', sfL:'#ecfdf5'},
  {id:'x.ai',        name:'xAI',          cat:'AI & LLM Platforms',          desc:'Stark monochrome, futuristic minimalism',                                accent:'#e5e7eb', bgD:'#000000', bgL:'#ffffff', txD:'#f9fafb', txL:'#000000', sfD:'#111111', sfL:'#f5f5f5'},
  {id:'cursor',      name:'Cursor',       cat:'Developer Tools & IDEs',       desc:'Sleek dark interface, gradient accents',                                 accent:'#a855f7', bgD:'#08060e', bgL:'#faf8ff', txD:'#ede9fe', txL:'#1e0a3c', sfD:'#100c1c', sfL:'#f3f0ff'},
  {id:'expo',        name:'Expo',         cat:'Developer Tools & IDEs',       desc:'Dark theme, tight letter-spacing, code-centric',                         accent:'#b4c0ff', bgD:'#000000', bgL:'#ffffff', txD:'#ffffff', txL:'#000000', sfD:'#0d0d0d', sfL:'#f5f5f5'},
  {id:'lovable',     name:'Lovable',      cat:'Developer Tools & IDEs',       desc:'Playful gradients, friendly dev aesthetic',                              accent:'#f97316', bgD:'#09080c', bgL:'#fffbf8', txD:'#fff7ed', txL:'#1c0a00', sfD:'#120f10', sfL:'#fff3e8'},
  {id:'raycast',     name:'Raycast',      cat:'Developer Tools & IDEs',       desc:'Sleek dark chrome, vibrant gradient accents',                            accent:'#ff6363', bgD:'#050508', bgL:'#f9f9fb', txD:'#f5f5ff', txL:'#111118', sfD:'#0c0c12', sfL:'#f3f3f8'},
  {id:'superhuman',  name:'Superhuman',   cat:'Developer Tools & IDEs',       desc:'Premium dark UI, keyboard-first, purple glow',                           accent:'#7c3aed', bgD:'#050507', bgL:'#f9f9fe', txD:'#ede9fe', txL:'#1e1b4b', sfD:'#0c0b14', sfL:'#f0eeff'},
  {id:'vercel',      name:'Vercel',       cat:'Developer Tools & IDEs',       desc:'Black and white precision, Geist font',                                  accent:'#171717', bgD:'#000000', bgL:'#ffffff', txD:'#ffffff', txL:'#171717', sfD:'#111111', sfL:'#fafafa'},
  {id:'warp',        name:'Warp',         cat:'Developer Tools & IDEs',       desc:'Dark IDE-like interface, block-based command UI',                         accent:'#01d2c3', bgD:'#060a0a', bgL:'#f0fffe', txD:'#ccfbf1', txL:'#032020', sfD:'#0a1212', sfL:'#e6fffd'},
  {id:'clickhouse',  name:'ClickHouse',   cat:'Backend, Database & DevOps',   desc:'Yellow-accented, technical documentation style',                         accent:'#ffca28', bgD:'#0a0800', bgL:'#fffef5', txD:'#fef9e7', txL:'#1a1500', sfD:'#140f00', sfL:'#fffde0'},
  {id:'composio',    name:'Composio',     cat:'Backend, Database & DevOps',   desc:'Modern dark with colorful integration icons',                            accent:'#6366f1', bgD:'#08080f', bgL:'#f9f9ff', txD:'#e0e7ff', txL:'#1e1b4b', sfD:'#0f0f1c', sfL:'#eff0ff'},
  {id:'hashicorp',   name:'HashiCorp',    cat:'Backend, Database & DevOps',   desc:'Enterprise-clean, black and white',                                      accent:'#000000', bgD:'#0a0a0a', bgL:'#ffffff', txD:'#f0f0f0', txL:'#111111', sfD:'#141414', sfL:'#f5f5f5'},
  {id:'mongodb',     name:'MongoDB',      cat:'Backend, Database & DevOps',   desc:'Green leaf branding, developer documentation focus',                     accent:'#00ed64', bgD:'#001308', bgL:'#f0fff6', txD:'#dcfce7', txL:'#002014', sfD:'#001a0a', sfL:'#e6ffed'},
  {id:'posthog',     name:'PostHog',      cat:'Backend, Database & DevOps',   desc:'Playful hedgehog branding, developer-friendly dark UI',                  accent:'#f54e00', bgD:'#0a0600', bgL:'#fffaf7', txD:'#fff7ed', txL:'#1a0800', sfD:'#140900', sfL:'#fff3ea'},
  {id:'sanity',      name:'Sanity',       cat:'Backend, Database & DevOps',   desc:'Red accent, content-first editorial layout',                             accent:'#f03e2f', bgD:'#080606', bgL:'#fff8f8', txD:'#fee2e2', txL:'#1c0a0a', sfD:'#110808', sfL:'#ffecec'},
  {id:'sentry',      name:'Sentry',       cat:'Backend, Database & DevOps',   desc:'Dark dashboard, data-dense, pink-purple accent',                         accent:'#7c3aed', bgD:'#06040f', bgL:'#faf8ff', txD:'#ede9fe', txL:'#1e0a3c', sfD:'#0c0a18', sfL:'#f3f0ff'},
  {id:'supabase',    name:'Supabase',     cat:'Backend, Database & DevOps',   desc:'Dark emerald theme, code-first',                                         accent:'#3ecf8e', bgD:'#020a06', bgL:'#f0fff8', txD:'#d1fae5', txL:'#052e1e', sfD:'#040e08', sfL:'#e6ffed'},
  {id:'cal',         name:'Cal.com',      cat:'Productivity & SaaS',          desc:'Clean neutral UI, developer-oriented simplicity',                        accent:'#111827', bgD:'#0a0a0b', bgL:'#ffffff', txD:'#f9fafb', txL:'#111827', sfD:'#141416', sfL:'#f9fafb'},
  {id:'intercom',    name:'Intercom',     cat:'Productivity & SaaS',          desc:'Friendly blue palette, conversational UI patterns',                      accent:'#1f8ded', bgD:'#060c14', bgL:'#f0f8ff', txD:'#dbeafe', txL:'#0c1c36', sfD:'#0a121e', sfL:'#e8f3ff'},
  {id:'linear.app',  name:'Linear',       cat:'Productivity & SaaS',          desc:'Ultra-minimal, precise, purple accent',                                  accent:'#5e6ad2', bgD:'#08080c', bgL:'#fafafa', txD:'#e8e9f4', txL:'#1a1a2e', sfD:'#0f0f16', sfL:'#f4f4f8'},
  {id:'mintlify',    name:'Mintlify',     cat:'Productivity & SaaS',          desc:'Clean, green-accented, reading-optimized',                               accent:'#16a34a', bgD:'#060a07', bgL:'#f8fff9', txD:'#dcfce7', txL:'#052e16', sfD:'#0a0f0a', sfL:'#efffef'},
  {id:'notion',      name:'Notion',       cat:'Productivity & SaaS',          desc:'Warm minimalism, serif headings, soft surfaces',                         accent:'#2382e2', bgD:'#111110', bgL:'#ffffff', txD:'#f5f4f0', txL:'#37352f', sfD:'#191919', sfL:'#f7f6f3'},
  {id:'resend',      name:'Resend',       cat:'Productivity & SaaS',          desc:'Minimal dark theme, monospace accents',                                  accent:'#f9f9f9', bgD:'#000000', bgL:'#ffffff', txD:'#f9f9f9', txL:'#000000', sfD:'#0d0d0d', sfL:'#fafafa'},
  {id:'semrush',     name:'SEMrush',      cat:'Productivity & SaaS',          desc:'Data-rich marketing analytics, orange accent',                           accent:'#ff6329', bgD:'#08070a', bgL:'#fff9f7', txD:'#fff7ed', txL:'#1a0800', sfD:'#110b08', sfL:'#fff3ea'},
  {id:'zapier',      name:'Zapier',       cat:'Productivity & SaaS',          desc:'Warm orange, friendly illustration-driven',                              accent:'#ff4a00', bgD:'#0a0600', bgL:'#fffbf8', txD:'#fff7ed', txL:'#1c0800', sfD:'#140900', sfL:'#fff0e8'},
  {id:'airtable',    name:'Airtable',     cat:'Design & Creative Tools',      desc:'Colorful, friendly, structured data aesthetic',                          accent:'#2d7ff9', bgD:'#06080f', bgL:'#f5f8ff', txD:'#dbeafe', txL:'#0c1a3c', sfD:'#0a0e18', sfL:'#eaf0ff'},
  {id:'clay',        name:'Clay',         cat:'Design & Creative Tools',      desc:'Organic shapes, soft gradients, art-directed layout',                    accent:'#a78bfa', bgD:'#080610', bgL:'#faf8ff', txD:'#ede9fe', txL:'#200a40', sfD:'#0f0c1a', sfL:'#f5f0ff'},
  {id:'figma',       name:'Figma',        cat:'Design & Creative Tools',      desc:'Vibrant multi-color, playful yet professional',                           accent:'#f24e1e', bgD:'#1e1e1e', bgL:'#ffffff', txD:'#ffffff', txL:'#1e1e1e', sfD:'#2c2c2c', sfL:'#f5f5f5'},
  {id:'framer',      name:'Framer',       cat:'Design & Creative Tools',      desc:'Bold black and blue, motion-first, design-forward',                      accent:'#0055ff', bgD:'#040408', bgL:'#f8f8ff', txD:'#e0e8ff', txL:'#000820', sfD:'#08080e', sfL:'#eef0ff'},
  {id:'miro',        name:'Miro',         cat:'Design & Creative Tools',      desc:'Bright yellow accent, infinite canvas aesthetic',                        accent:'#ffd900', bgD:'#050505', bgL:'#ffffff', txD:'#f9f9f9', txL:'#050505', sfD:'#0d0d0d', sfL:'#f5f5f5'},
  {id:'webflow',     name:'Webflow',      cat:'Design & Creative Tools',      desc:'Blue-accented, polished marketing site aesthetic',                       accent:'#4353ff', bgD:'#08080f', bgL:'#f8f8ff', txD:'#e0e4ff', txL:'#0c0e28', sfD:'#0e0e1c', sfL:'#eef0ff'},
  {id:'coinbase',    name:'Coinbase',     cat:'Fintech & Crypto',             desc:'Clean blue identity, trust-focused, institutional feel',                 accent:'#0052ff', bgD:'#040810', bgL:'#f5f8ff', txD:'#dbeafe', txL:'#001440', sfD:'#080c1a', sfL:'#eaf0ff'},
  {id:'kraken',      name:'Kraken',       cat:'Fintech & Crypto',             desc:'Purple-accented dark UI, data-dense dashboards',                         accent:'#5741d9', bgD:'#08060f', bgL:'#f8f6ff', txD:'#ede9fe', txL:'#180a40', sfD:'#0f0c1c', sfL:'#f2eeff'},
  {id:'revolut',     name:'Revolut',      cat:'Fintech & Crypto',             desc:'Sleek dark interface, gradient cards, fintech precision',                 accent:'#0075eb', bgD:'#060810', bgL:'#f5f8ff', txD:'#dbeafe', txL:'#001230', sfD:'#0a0c18', sfL:'#eaf2ff'},
  {id:'stripe',      name:'Stripe',       cat:'Fintech & Crypto',             desc:'Signature purple gradients, weight-300 elegance',                        accent:'#635bff', bgD:'#09080f', bgL:'#f9f8ff', txD:'#e8e4ff', txL:'#1c1460', sfD:'#100e1a', sfL:'#f3f0ff'},
  {id:'wise',        name:'Wise',         cat:'Fintech & Crypto',             desc:'Bright green accent, friendly and clear',                                accent:'#00b67a', bgD:'#040d08', bgL:'#f0fff8', txD:'#d1fae5', txL:'#003320', sfD:'#06100a', sfL:'#e8ffed'},
  {id:'binance',     name:'Binance',      cat:'Fintech & Crypto',             desc:'Bold Binance Yellow on monochrome, trading-floor urgency',                accent:'#f0b90b', bgD:'#0b0900', bgL:'#fffef5', txD:'#fef9e7', txL:'#1a1500', sfD:'#141000', sfL:'#fffde0'},
  {id:'mastercard',  name:'Mastercard',   cat:'Fintech & Crypto',             desc:'Warm cream canvas, orbital pill shapes, editorial warmth',                accent:'#eb5757', bgD:'#141413', bgL:'#f3f0ee', txD:'#f5f0eb', txL:'#141413', sfD:'#1e1e1c', sfL:'#ece9e6'},
  {id:'airbnb',      name:'Airbnb',       cat:'E-commerce & Retail',          desc:'Warm coral accent, photography-driven, rounded UI',                      accent:'#ff5a5f', bgD:'#080604', bgL:'#fff8f8', txD:'#fff1f2', txL:'#1c0606', sfD:'#100908', sfL:'#ffecec'},
  {id:'shopify',     name:'Shopify',      cat:'E-commerce & Retail',          desc:'Dark-first cinematic, neon green accent, ultra-light display type',       accent:'#36f4a4', bgD:'#02090a', bgL:'#f0fff8', txD:'#d1fae5', txL:'#031a10', sfD:'#061a1c', sfL:'#e6fff4'},
  {id:'nike',        name:'Nike',         cat:'E-commerce & Retail',          desc:'Monochrome UI, massive uppercase Futura, full-bleed photography',         accent:'#111111', bgD:'#111111', bgL:'#ffffff', txD:'#ffffff', txL:'#111111', sfD:'#1e1e1e', sfL:'#fafafa'},
  {id:'meta',        name:'Meta',         cat:'E-commerce & Retail',          desc:'Photography-first, binary light/dark surfaces, Meta Blue CTAs',           accent:'#0064e0', bgD:'#1c1e21', bgL:'#ffffff', txD:'#e4e6eb', txL:'#1c1e21', sfD:'#242526', sfL:'#f0f2f5'},
  {id:'apple',       name:'Apple',        cat:'Media & Consumer Tech',        desc:'Premium white space, SF Pro, cinematic imagery',                         accent:'#0071e3', bgD:'#000000', bgL:'#f5f5f7', txD:'#f5f5f7', txL:'#1d1d1f', sfD:'#1d1d1f', sfL:'#ffffff'},
  {id:'ibm',         name:'IBM',          cat:'Media & Consumer Tech',        desc:'Carbon design system, structured blue palette',                          accent:'#0f62fe', bgD:'#161616', bgL:'#ffffff', txD:'#f4f4f4', txL:'#161616', sfD:'#262626', sfL:'#f4f4f4'},
  {id:'nvidia',      name:'NVIDIA',       cat:'Media & Consumer Tech',        desc:'Green-black energy, technical power aesthetic',                          accent:'#76b900', bgD:'#000000', bgL:'#f8fff0', txD:'#f0f0f0', txL:'#1a2600', sfD:'#0d0d0d', sfL:'#edf7e0'},
  {id:'pinterest',   name:'Pinterest',    cat:'Media & Consumer Tech',        desc:'Red accent, masonry grid, image-first',                                  accent:'#e60023', bgD:'#080404', bgL:'#ffffff', txD:'#fff0f0', txL:'#111111', sfD:'#100606', sfL:'#fff5f5'},
  {id:'spacex',      name:'SpaceX',       cat:'Media & Consumer Tech',        desc:'Stark black and white, full-bleed imagery, futuristic',                  accent:'#c8c8c8', bgD:'#000000', bgL:'#ffffff', txD:'#f5f5f5', txL:'#000000', sfD:'#0d0d0d', sfL:'#f5f5f5'},
  {id:'spotify',     name:'Spotify',      cat:'Media & Consumer Tech',        desc:'Vibrant green on dark, bold type, album-art-driven',                     accent:'#1db954', bgD:'#000000', bgL:'#ffffff', txD:'#ffffff', txL:'#000000', sfD:'#121212', sfL:'#f8f8f8'},
  {id:'uber',        name:'Uber',         cat:'Media & Consumer Tech',        desc:'Bold black and white, tight type, urban energy',                         accent:'#000000', bgD:'#000000', bgL:'#ffffff', txD:'#ffffff', txL:'#000000', sfD:'#141414', sfL:'#f5f5f5'},
  {id:'theverge',    name:'The Verge',    cat:'Media & Consumer Tech',        desc:'Acid-mint and ultraviolet accents, Manuka display type',                   accent:'#3cffd0', bgD:'#131313', bgL:'#ffffff', txD:'#f5f5f5', txL:'#131313', sfD:'#2d2d2d', sfL:'#f5f5f5'},
  {id:'vodafone',    name:'Vodafone',     cat:'Media & Consumer Tech',        desc:'Monumental uppercase display, Vodafone Red chapter bands',                 accent:'#e60000', bgD:'#0a0000', bgL:'#ffffff', txD:'#fff0f0', txL:'#1a0000', sfD:'#140000', sfL:'#fff5f5'},
  {id:'wired',       name:'WIRED',        cat:'Media & Consumer Tech',        desc:'Paper-white broadsheet density, custom serif, ink-blue links',             accent:'#057dbc', bgD:'#1a1a1a', bgL:'#ffffff', txD:'#f5f5f5', txL:'#1a1a1a', sfD:'#2a2a2a', sfL:'#fafafa'},
  {id:'playstation', name:'PlayStation',  cat:'Media & Consumer Tech',        desc:'Three-surface channel layout, cyan hover-scale interaction',               accent:'#0070cc', bgD:'#000000', bgL:'#f5f8ff', txD:'#e0eaff', txL:'#000000', sfD:'#1a1a1a', sfL:'#eaf0ff'},
  {id:'bmw',         name:'BMW',          cat:'Automotive',                   desc:'Dark premium surfaces, precise German engineering aesthetic',             accent:'#1c69d4', bgD:'#080a10', bgL:'#f5f8ff', txD:'#e0eaff', txL:'#0a1428', sfD:'#0e1220', sfL:'#eaf0ff'},
  {id:'ferrari',     name:'Ferrari',      cat:'Automotive',                   desc:'Chiaroscuro editorial, Ferrari Red with extreme sparseness',              accent:'#da291c', bgD:'#000000', bgL:'#ffffff', txD:'#f5f5f5', txL:'#000000', sfD:'#0d0d0d', sfL:'#f5f5f5'},
  {id:'lamborghini', name:'Lamborghini',  cat:'Automotive',                   desc:'True black cathedral, gold accent, LamboType Neo-Grotesk',               accent:'#d4a843', bgD:'#000000', bgL:'#fafaf8', txD:'#f5f0e8', txL:'#0a0800', sfD:'#0a0a08', sfL:'#f5f0e8'},
  {id:'renault',     name:'Renault',      cat:'Automotive',                   desc:'Vivid aurora gradients, zero-radius buttons',                             accent:'#efdf00', bgD:'#040408', bgL:'#f8f8ff', txD:'#f0f0ff', txL:'#040408', sfD:'#08080e', sfL:'#f0f0ff'},
  {id:'tesla',       name:'Tesla',        cat:'Automotive',                   desc:'Radical subtraction, cinematic full-viewport photography',                accent:'#cc0000', bgD:'#000000', bgL:'#ffffff', txD:'#f5f5f5', txL:'#171a20', sfD:'#0d0d0d', sfL:'#f5f5f5'},
  {id:'bugatti',     name:'Bugatti',      cat:'Automotive',                   desc:'Cinema-black canvas, monochrome austerity, monumental display type',       accent:'#999999', bgD:'#000000', bgL:'#ffffff', txD:'#ffffff', txL:'#000000', sfD:'#0d0d0d', sfL:'#f5f5f5'},
];

let activeCat = 'All';
let currentSystem = null;
let currentTab = 'dark';

function renderCats() {
  document.getElementById('cats').innerHTML = CATS.map(c =>
    `<button class="cat-btn${c===activeCat?' active':''}" onclick="setCat('${c}')">${c}</button>`
  ).join('');
}
function setCat(c) { activeCat = c; renderCats(); doFilter(); }

function doFilter() {
  const q = document.getElementById('search').value.toLowerCase().trim();
  const list = SYSTEMS.filter(s => {
    const matchCat = activeCat === 'All' || s.cat === activeCat;
    const matchQ = !q || s.name.toLowerCase().includes(q) || s.desc.toLowerCase().includes(q) || s.cat.toLowerCase().includes(q);
    return matchCat && matchQ;
  });
  renderCards(list);
  document.getElementById('rcount').textContent = list.length + ' systemer';
}

function renderCards(list) {
  const grid = document.getElementById('grid');
  if (!list.length) {
    grid.innerHTML = '<div class="empty">Ingen design systemer matcher søgningen.</div>';
    return;
  }
  grid.innerHTML = list.map(s => {
    const cmd = `npx getdesign@latest add ${s.id}`;
    return `<div class="card" style="--card-accent:${s.accent}" onclick="openPreview('${s.id}')">
      <div class="card-head">
        <div class="card-swatch" style="background:${s.bgD};border-color:${s.accent}40;box-shadow:inset 0 0 0 3px ${s.accent}30">
          <div style="width:100%;height:100%;border-radius:7px;background:linear-gradient(135deg,${s.accent}40 0%,transparent 70%)"></div>
        </div>
        <span class="card-name">${s.name}</span>
        <span class="card-cat-badge">${shortCat(s.cat)}</span>
      </div>
      <p class="card-desc">${s.desc}</p>
      <div class="card-footer">
        <span class="card-cmd">${cmd}</span>
        <button class="preview-btn" onclick="event.stopPropagation();openPreview('${s.id}')">
          <svg width="10" height="10" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.964-7.178z"/><path stroke-linecap="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
          Preview
        </button>
        <button class="copy-btn" onclick="event.stopPropagation();copyCmd(this,'${cmd}')">Kopiér</button>
      </div>
    </div>`;
  }).join('');
}

function shortCat(c) {
  const map = {
    'AI & LLM Platforms': 'AI & LLM',
    'Developer Tools & IDEs': 'Dev Tools',
    'Backend, Database & DevOps': 'Backend',
    'Productivity & SaaS': 'SaaS',
    'Design & Creative Tools': 'Design',
    'Fintech & Crypto': 'Fintech',
    'E-commerce & Retail': 'E-com',
    'Media & Consumer Tech': 'Media',
    'Automotive': 'Auto'
  };
  return map[c] || c;
}

function copyCmd(btn, text) {
  navigator.clipboard.writeText(text).then(() => {
    btn.textContent = '✓';
    btn.classList.add('ok');
    setTimeout(() => { btn.textContent = 'Kopiér'; btn.classList.remove('ok'); }, 1800);
  });
}
function copyNpx() {
  if (!currentSystem) return;
  const btn = document.querySelector('.modal-npx .cbtn');
  navigator.clipboard.writeText(`npx getdesign@latest add ${currentSystem.id}`).then(() => {
    btn.textContent = 'Kopieret!';
    btn.classList.add('ok');
    setTimeout(() => { btn.textContent = 'Kopiér'; btn.classList.remove('ok'); }, 1800);
  });
}

function openPreview(id) {
  currentSystem = SYSTEMS.find(s => s.id === id);
  if (!currentSystem) return;
  currentTab = 'dark';
  document.getElementById('mdot').style.cssText = `background:${currentSystem.accent};box-shadow:0 0 10px ${currentSystem.accent}80`;
  document.getElementById('mtitle').textContent = currentSystem.name;
  document.getElementById('msub').textContent = currentSystem.desc;
  document.getElementById('mnpx').innerHTML = `<span>npx getdesign@latest add ${currentSystem.id}</span>`;
  document.getElementById('tab-dark').classList.add('active');
  document.getElementById('tab-light').classList.remove('active');
  renderPreview();
  document.getElementById('modal').classList.add('open');
  document.body.style.overflow = 'hidden';
}

function setTab(t) {
  currentTab = t;
  document.getElementById('tab-dark').classList.toggle('active', t==='dark');
  document.getElementById('tab-light').classList.toggle('active', t==='light');
  renderPreview();
}

function renderPreview() {
  const s = currentSystem;
  const dark = currentTab === 'dark';
  const bg    = dark ? s.bgD : s.bgL;
  const tx    = dark ? s.txD : s.txL;
  const sf    = dark ? s.sfD : s.sfL;
  const border= dark ? 'rgba(255,255,255,.08)' : 'rgba(0,0,0,.08)';
  const muted = dark ? 'rgba(255,255,255,.45)' : 'rgba(0,0,0,.45)';
  const txBtnPrimary = isLight(s.accent) ? '#111' : '#fff';

  const swatches = [
    {color: bg,        label: 'BG'},
    {color: sf,        label: 'Surface'},
    {color: s.accent,  label: 'Accent'},
    {color: muted,     label: 'Muted'},
    {color: tx,        label: 'Text'},
  ];

  document.getElementById('preview-container').innerHTML = `
    <div class="preview-frame" style="background:${bg};color:${tx}">
      <div class="pv-nav" style="background:${sf};border-bottom:1px solid ${border}">
        <span class="pv-nav-logo" style="color:${tx}">${s.name}</span>
        <div class="pv-nav-links" style="color:${muted}">
          <span>Docs</span><span>Pricing</span><span>Blog</span>
        </div>
        <div style="padding:5px 14px;background:${s.accent};color:${txBtnPrimary};border-radius:6px;font-size:11px;font-weight:600;cursor:default;margin-left:12px">Get started</div>
      </div>
      <div class="pv-hero">
        <h2 style="color:${tx}">${s.name}<br><span style="color:${s.accent}">Design System</span></h2>
        <p style="color:${muted}">${s.desc}</p>
        <div class="pv-btns">
          <div class="pv-btn-primary" style="background:${s.accent};color:${txBtnPrimary}">Get started</div>
          <div class="pv-btn-secondary" style="border:1px solid ${border};color:${tx}">Learn more</div>
        </div>
      </div>
      <div class="pv-divider" style="background:${tx}"></div>
      <div class="pv-swatches">
        ${swatches.map(sw => `
          <div class="pv-swatch">
            <div class="pv-swatch-dot" style="background:${sw.color}"></div>
            <span style="color:${muted}">${sw.label}</span>
          </div>
        `).join('')}
      </div>
      <div class="pv-cards">
        <div class="pv-card" style="background:${sf};border-color:${border}">
          <div class="pv-card-tag" style="color:${s.accent}">Feature</div>
          <div class="pv-card-title" style="color:${tx}">Typography</div>
          <div class="pv-card-body" style="color:${muted}">Precise type scale with optical sizing at every breakpoint.</div>
        </div>
        <div class="pv-card" style="background:${sf};border-color:${border}">
          <div class="pv-card-tag" style="color:${s.accent}">Component</div>
          <div class="pv-card-title" style="color:${tx}">Spacing</div>
          <div class="pv-card-body" style="color:${muted}">8px base grid with granular scale for precise micro-adjustments.</div>
        </div>
        <div class="pv-card" style="background:${sf};border-color:${border}">
          <div class="pv-card-tag" style="color:${s.accent}">Token</div>
          <div class="pv-card-title" style="color:${tx}">Color Roles</div>
          <div class="pv-card-body" style="color:${muted}">Semantic color tokens with full dark/light surface hierarchy.</div>
        </div>
      </div>
      <div class="pv-input-row">
        <input class="pv-input" style="background:${sf};border-color:${border};color:${tx}" placeholder="Search documentation..." readonly>
        <div class="pv-badge" style="background:${s.accent}22;color:${s.accent};border:1px solid ${s.accent}44">v2.0</div>
        <div class="pv-badge" style="background:${dark?'rgba(255,255,255,.06)':'rgba(0,0,0,.06)'};color:${muted};border:1px solid ${border}">Stable</div>
      </div>
    </div>`;
}

function isLight(hex) {
  const c = hex.replace('#','');
  if (c.length < 6) return false;
  const r = parseInt(c.substr(0,2),16);
  const g = parseInt(c.substr(2,2),16);
  const b = parseInt(c.substr(4,2),16);
  return (r*299 + g*587 + b*114) / 1000 > 155;
}

function closeModal(e) {
  if (e.target === document.getElementById('modal')) closeModalDirect();
}
function closeModalDirect() {
  document.getElementById('modal').classList.remove('open');
  document.body.style.overflow = '';
}
document.addEventListener('keydown', e => { if (e.key === 'Escape') closeModalDirect(); });

renderCats();
doFilter();
</script>
