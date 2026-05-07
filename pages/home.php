<?php $footerText = 'forge · bygget med ViaVi Forge v' . FORGE_VERSION . ' · <a href="https://viavi.dk/">viavi.dk</a>'; ?>


<div class="page">

<!-- ═══════════════════════════════ HERO ═══════════════════════════════ -->
<section class="hero">
  <canvas id="hc"></canvas>
  <div class="hero-inner">
    <span class="hero-label fu">ViaVi Forge · viavi.dk</span>
    <h1>Dit næste projekt.<br><span class="gb">Klar på <span id="hero-count">0</span> sekunder.</span></h1>
    <p>&Eacute;n curl installerer Forge. <span class="mono">forge</span> bygger projektet &mdash; mappestruktur, database, login, design system og komplet AI-workflow (workflow-disciplin, code-review, security-audit og stack-validering installeret automatisk). Ingen ops&aelig;tning. Ingen forklaringer.</p>
    <div class="hero-btns">
      <button class="btn bp" onclick="copyInstall(this)">
        <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="9" y="9" width="13" height="13" rx="2"/><path stroke-linecap="round" stroke-linejoin="round" d="M5 15H4a2 2 0 01-2-2V4a2 2 0 012-2h9a2 2 0 012 2v1"/></svg>
        Kopiér install-kommando
      </button>
      <a href="https://github.com/viavidk/forge" target="_blank" rel="noopener" class="btn bs_">GitHub ↗</a>
      <a href="#bunden" class="btn bs_">Har du ikke WSL? ↓</a>
    </div>
  </div>
</section>

<div class="div"></div>

<!-- ═══════════════════════════════ TRE TRIN ═══════════════════════════ -->
<section class="sec" id="trin">
  <span class="sec-tag fu2">Tre trin. Ét projekt.</span>
  <h2 class="sec-h2 fu2" style="transition-delay:.07s">Installér. Kør. Byg.</h2>
  <p class="sec-lead fu2" style="transition-delay:.14s">Har du WSL og Claude Code kørende? Installér Forge med &eacute;n curl-kommando, k&oslash;r <span class="mono">forge</span> &mdash; vælg Hurtigt, Guided eller Avanceret &mdash; og byg.</p>

  <div class="steps">

    <!-- 01 DOWNLOAD -->
    <div class="step fu2" style="transition-delay:.1s">
      <div class="step-line">
        <div class="step-num">01</div>
        <div class="step-conn"></div>
      </div>
      <div class="step-body">
        <div class="step-title">Installér</div>
        <div class="step-desc">Én kommando installerer Forge og tilføjer <span class="mono">forge</span> til din PATH.</div>
        <div class="code-wrap">
          <div class="code-hd">
            <span class="code-lang">bash · WSL terminal</span>
            <button class="cbtn" onclick="copyInstall(this)">Kopiér</button>
          </div>
          <div class="code-bd">
            <pre>curl -fsSL https://raw.githubusercontent.com/viavidk/forge/main/install.sh | bash</pre>
          </div>
        </div>
        <div class="note"><strong>Én gang:</strong> Scriptet kloner Forge til <span class="mono">~/.local/share/forge/</span> og symlinker <span class="mono">forge</span>-kommandoen. Opdatér bagefter med <span class="mono">forge update</span>.</div>
      </div>
    </div>

    <!-- 02 KØR -->
    <div class="step fu2" style="transition-delay:.18s">
      <div class="step-line">
        <div class="step-num">02</div>
        <div class="step-conn"></div>
      </div>
      <div class="step-body">
        <div class="step-title">Kør</div>
        <div class="step-desc">Start Forge &mdash; v&aelig;lg Hurtigt (2 sp&oslash;rgsm&aring;l, ~10 sek), Guided (8 trin, ~1 min) eller Avanceret (alle valg). Guided inkluderer projekttype, design system og MCPs. AI-capabilities installeres automatisk.</div>
        <div class="code-wrap">
          <div class="code-hd">
            <span class="code-lang">bash · WSL terminal</span>
            <button class="cbtn" onclick="copyLine(this,'forge')">Kopiér forge</button>
          </div>
          <div class="code-bd">
            <pre><span class="c"># Gå til den mappe hvor projektet skal oprettes</span>
<span class="kw">cd</span> <span class="arg">~/projects</span>   <span class="c"># eller fx /var/www/html</span>

<span class="kw">forge</span>            <span class="c"># opretter mit-projekt/ her</span></pre>
          </div>
        </div>
        <div class="code-wrap" style="margin-top:10px">
          <div class="code-hd">
            <span class="code-lang">interaktive prompts &middot; Guided mode (8 trin)</span>
          </div>
          <div class="code-bd">
            <pre><span class="c">ViaVi Forge v<?= FORGE_VERSION ?> · viavi.dk
────────────────────────────────</span>
<span class="ts" style="color:var(--ts)">Projektnavn:</span> <span class="arg">mit-projekt</span>

<span class="ts" style="color:var(--ts)">Vælg mode:  1) Hurtigt  2) Guided  3) Avanceret</span>
<span class="ts" style="color:var(--ts)">Mode [1]:</span> <span class="arg">2</span>

<span class="c"># Trin 1 — Projekttype</span>
<span class="ts" style="color:var(--ts)">Hvad bygger du?</span>
  <span style="color:var(--tm)">1) Dashboard / analyse      2) Internt værktøj / admin</span>
  <span style="color:var(--tm)">3) Website                  4) E-commerce</span>
  <span style="color:var(--tm)">5) API / Backend</span>
<span class="ts" style="color:var(--ts)">Type [1]:</span> <span class="arg">3</span>

<span class="c"># Trin 2-5 — Port, routing, Cloudflare, animationer</span>
<span class="ts" style="color:var(--ts)">Lokal port [8080]:</span> <span class="arg">↵</span>
<span class="ts" style="color:var(--ts)">Cloudflare Tunnel? [Y/n]:</span> <span class="arg">Y</span>
<span class="ts" style="color:var(--ts)">Animationer:</span> <span class="arg">1</span>  <span style="color:var(--tm)"># Aceternity + Motion JS</span>

<span class="c"># Trin 6 — DESIGN.md kilde</span>
<span class="ts" style="color:var(--ts)">DESIGN.md kilde:</span>
  <span style="color:var(--tm)">1) awesome-design-md (69 systemer)  2) viavi-design-system</span>
  <span style="color:var(--tm)">3) ui-ux-pro-max                    4) skip</span>
<span class="ts" style="color:var(--ts)">Vælg [1]:</span> <span class="arg">1</span>
<span class="ts" style="color:var(--ts)">Template:</span> <span class="arg">linear.app</span>

<span class="c"># Trin 7 — MCP-servere</span>
<span class="ts" style="color:var(--ts)">ViaVi Skills MCP? [Y/n]:</span> <span class="arg">Y</span>
<span class="ts" style="color:var(--ts)">Context7 MCP? [Y/n]:</span> <span class="arg">Y</span>
<span class="ts" style="color:var(--ts)">Chrome DevTools MCP? [Y/n]:</span> <span class="arg">Y</span>

<span class="c"># Trin 8 — Scaffolding</span>
  ✓ Projektstruktur oprettet
  ✓ Workflow-disciplin konfigureret (.claude/settings.json)
  ✓ 9 AI-capabilities installeret (.claude/agents/)
  ✓ DESIGN.md, CLAUDE.md og commands klar</pre>
          </div>
        </div>
        <div class="note">Forge opretter en ny mappe med projektnavnet der, hvor du st&aring;r. St&aring; i din <span class="mono">~/projects/</span>-mappe &mdash; eller direkte i din webroot hvis du deployer til Apache. <strong>Hurtigt mode</strong> tager ~10 sek (smart defaults), <strong>Guided mode</strong> ~1 min (vist ovenfor).</div>
      </div>
    </div>

    <!-- 03 BYG -->
    <div class="step fu2" style="transition-delay:.26s">
      <div class="step-line">
        <div class="step-num">03</div>
        <div class="step-conn"></div>
      </div>
      <div class="step-body">
        <div class="step-title">Byg</div>
        <div class="step-desc">Gå ind i projektmappen og åbn Claude Code. AI-agenternes instruktioner er klar fra første sekund.</div>
        <div class="code-wrap">
          <div class="code-hd">
            <span class="code-lang">bash · WSL terminal</span>
            <button class="cbtn" onclick="copyLine(this,'cd mit-projekt && claude')">Kopiér</button>
          </div>
          <div class="code-bd">
            <pre><span class="kw">cd</span> <span class="arg">mit-projekt</span> && <span class="kw">claude</span></pre>
          </div>
        </div>
        <div class="note" style="margin-bottom:10px">Claude læser <span class="mono">CLAUDE.md</span> og kender projektet fra sekund ét. Fortæl den hvad systemet skal bygge.</div>
        <div class="note"><strong>Lokal server:</strong> Kør <span class="mono">bash start.sh</span> i en separat terminal. Valgte du Cloudflare Tunnel under opsætningen, starter tunnelen automatisk og URL'en printes i terminalen. Vil du kun køre lokalt bagefter, brug <span class="mono">bash start.sh</span> — vil du aktivere tunnel manuelt, brug <span class="mono">bash start.sh --tunnel</span>.</div>
        <div style="margin-top:16px">
          <div style="font-family:'Geist Mono',monospace;font-size:11px;color:var(--brand);text-transform:uppercase;letter-spacing:.1em;margin-bottom:10px">Eksempel — første prompt til Claude</div>
          <div style="background:var(--elevated);border:1px solid var(--bd);border-radius:10px;padding:20px 22px;position:relative">
            <div style="position:absolute;top:14px;right:14px;width:7px;height:7px;border-radius:50%;background:var(--brand);box-shadow:0 0 10px var(--brand);animation:pdot 2.5s ease-in-out infinite"></div>
            <p style="font-size:14px;line-height:1.8;color:var(--tp);white-space:pre-wrap">Læs CLAUDE.md og DESIGN.md — bekræft du forstår projektet og designsystemet.

Vi skal bygge <span style="color:var(--accent2)">[beskriv hvad systemet skal gøre]</span>

Login og brugeradministration er allerede sat op af Forge.</p>
          </div>
        </div>
        <div style="margin-top:12px;background:rgba(52,211,153,.06);border:1px solid rgba(52,211,153,.25);border-radius:8px;padding:13px 18px;font-size:13px;color:var(--ts);line-height:1.7">
          <strong style="color:#34d399">Klar til at erstatte velkomstsiden?</strong> Opret <span style="font-family:'Geist Mono',monospace;font-size:12px;color:var(--accent2)">app/views/index.php</span> — routeren viser den automatisk på <span style="font-family:'Geist Mono',monospace;font-size:12px;color:var(--accent2)">/</span>. Du behøver ikke røre <span style="font-family:'Geist Mono',monospace;font-size:12px;color:var(--accent2)">public/index.php</span>.
        </div>
      </div>
    </div>

  </div>
</section>

<div class="div"></div>

<!-- ═══════════════════════════════ BUNDEN ════════════════════════════ -->
<section class="sec" id="bunden">
  <span class="sec-tag fu2">Forudsætninger</span>
  <h2 class="sec-h2 fu2" style="transition-delay:.07s">Har du ikke WSL endnu?</h2>
  <p class="sec-lead fu2" style="transition-delay:.14s">Forge kræver WSL2 og Claude Code. Brug guiden nedenfor — det tager 10–15 minutter at komme i gang fra bunden.</p>

  <div class="accord fu2" style="transition-delay:.2s" id="acc1">
    <div class="accord-hd" onclick="toggleAccord('acc1')">
      <div>
        <div class="accord-htitle">Kom i gang fra bunden</div>
        <div class="accord-hsub">WSL2 · PHP · Claude Code · MCP (valgfrit)</div>
      </div>
      <div class="accord-ico">
        <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
      </div>
    </div>
    <div class="accord-body">

      <div class="substep">
        <div class="sub-tag">Trin A · Windows PowerShell</div>
        <div class="sub-title">Installér WSL2</div>
        <div class="sub-desc">Åbn PowerShell som administrator og kør:</div>
        <div class="code-wrap">
          <div class="code-hd"><span class="code-lang">powershell · Administrator</span><button class="cbtn" onclick="copyLine(this,'wsl --install')">Kopiér</button></div>
          <div class="code-bd"><pre>wsl --install</pre></div>
        </div>
        <div class="note">Genstart computeren og åbn Ubuntu fra Start-menuen. Opret brugernavn og adgangskode første gang.</div>
      </div>

      <div class="substep">
        <div class="sub-tag">Trin B · WSL terminal</div>
        <div class="sub-title">Installér pakker</div>
        <div class="sub-desc">PHP, SQLite, Git, Composer og cloudflared — alt i én blok:</div>
        <div class="code-wrap">
          <div class="code-hd"><span class="code-lang">bash · WSL terminal</span><button class="cbtn" onclick="copyPre(this)">Kopiér</button></div>
          <div class="code-bd">
            <pre class="copy-target">sudo apt-get update && sudo apt-get install -y \
  php php-cli php-sqlite3 sqlite3 \
  git curl composer \
  python3 python3-pip python3-venv python3-dev

curl -L https://github.com/cloudflare/cloudflared/releases/latest/download/cloudflared-linux-amd64 \
  -o /tmp/cloudflared && sudo install /tmp/cloudflared /usr/local/bin/cloudflared</pre>
          </div>
        </div>
        <div class="note"><strong>cloudflared</strong> giver dig en ekstern URL til din lokale server — ingen konto eller konfiguration kræves. URL'en er unik per session og dør automatisk når <span class="mono">start.sh</span> stoppes.</div>
      </div>

      <div class="substep">
        <div class="sub-tag">Trin C · WSL terminal</div>
        <div class="sub-title">Installér Claude Code</div>
        <div class="sub-desc">Officiel native installer — ingen Node.js krævet, auto-opdaterer i baggrunden:</div>
        <div class="code-wrap">
          <div class="code-hd"><span class="code-lang">bash · WSL terminal</span><button class="cbtn" onclick="copyLine(this,'curl -fsSL https://claude.ai/install.sh | bash')">Kopiér</button></div>
          <div class="code-bd"><pre>curl -fsSL https://claude.ai/install.sh | bash</pre></div>
        </div>
        <div class="note">Log ind første gang med <span class="mono">claude</span> — følg anvisningerne i terminalen.</div>
      </div>

      <div class="substep">
        <div class="sub-tag">Trin D · Valgfrit</div>
        <div class="sub-title">Opsæt MCP til Claude Desktop</div>
        <div class="sub-desc">Installér wcgw og forbind Claude Desktop til WSL med ét script. Kør i WSL-terminalen — scriptet finder selv config-stien (understøtter standard og MSIX-installation):</div>
        <div class="code-wrap">
          <div class="code-hd"><span class="code-lang">bash · WSL terminal</span><button class="cbtn" onclick="copyPre(this)">Kopiér</button></div>
          <div class="code-bd">
            <pre class="copy-target">pip install wcgw --break-system-packages --ignore-installed typing_extensions

WSL_USER=$(whoami)
WINDOWS_USER=$(cmd.exe /c echo %USERNAME% 2>/dev/null | tr -d '\r')
STANDARD="/mnt/c/Users/$WINDOWS_USER/AppData/Roaming/Claude"
MSIX=$(find /mnt/c/Users/$WINDOWS_USER -path "*/Packages/Claude_*/LocalCache/Roaming/Claude" 2>/dev/null | head -1)
if [ -n "$MSIX" ]; then CONFIG_DIR="$MSIX"
elif [ -d "$STANDARD" ]; then CONFIG_DIR="$STANDARD"
else mkdir -p "$STANDARD"; CONFIG_DIR="$STANDARD"; fi
cat > "$CONFIG_DIR/claude_desktop_config.json" << EOF
{
  "mcpServers": {
    "wcgw": {
      "command": "wsl.exe",
      "args": ["-u", "$WSL_USER", "bash", "-c", "/home/$WSL_USER/.local/bin/wcgw_mcp"]
    }
  }
}
EOF
echo "✓ Config skrevet til: $CONFIG_DIR"</pre>
          </div>
        </div>
        <div class="note">
          Scriptet bruger <span class="mono">wsl.exe</span> — Claude Desktop på Windows kalder direkte ind i WSL.<br><br>
          Har du allerede en <span class="mono">mcpServers</span>-blok i din config, tager scriptet den over — flyt eksisterende servere ind manuelt bagefter.<br><br>
          Genstart Claude Desktop — et hammerikon i tekstfeltet bekræfter forbindelsen.
        </div>
      </div>

    </div>
  </div>

  <div style="margin-top:18px;background:linear-gradient(135deg,rgba(124,106,240,.06),rgba(56,189,248,.03));border:1px solid rgba(124,106,240,.2);border-radius:10px;padding:16px 22px;text-align:center" class="fu2">
    <span style="font-size:13px;color:var(--ts);line-height:1.7">N&aring;r WSL2, PHP og Claude Code er p&aring; plads &mdash; <a href="#trin" style="color:var(--brand);text-decoration:none;font-weight:600">g&aring; til trin 01 ovenfor</a> og install&eacute;r Forge.</span>
  </div>
</section>

<div class="div"></div>

<!-- ═══════════════════════════════ HVORFOR ══════════════════════════ -->
<section class="sec" id="hvorfor">
  <span class="sec-tag fu2">Historien bag</span>
  <h2 class="sec-h2 fu2" style="transition-delay:.07s">Mere end et scaffold-tool.</h2>
  <p class="sec-lead fu2" style="transition-delay:.14s">Forge giver Claude hukommelse om din stack, disciplin til at t&aelig;nke f&oslash;r den koder &mdash; og fire automatiske hooks der k&oslash;rer uden du sp&oslash;rger. Det er ikke et starterkit. Det er en ingeni&oslash;r der aldrig sover.</p>

  <div class="stats fu2" style="transition-delay:.2s">
    <div class="stat">
      <div class="sv"><span class="gb">10s</span></div>
      <div class="sl">Fra <span class="mono">forge</span>-kommando til k&oslash;rende projekt med fuld AI-stack</div>
    </div>
    <div class="stat">
      <div class="sv"><span class="gb">4</span></div>
      <div class="sl">Automatiske hooks &mdash; PHP-lint + test runner, security-notices, commit-gate og session-audit &mdash; uden bruger-handling</div>
    </div>
    <div class="stat">
      <div class="sv"><span class="gb">0</span></div>
      <div class="sl">Dubletter p&aring; tv&aelig;rs af alle agent-systemer &mdash; verificeret ved hvert build</div>
    </div>
  </div>

  <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(260px,1fr));gap:10px;margin-top:24px" class="fu2">

    <!-- Superpowers -->
    <div style="background:linear-gradient(135deg,rgba(167,139,250,.1),rgba(167,139,250,.02));border:1px solid rgba(167,139,250,.35);border-radius:10px;padding:14px 18px;display:flex;align-items:center;justify-content:space-between;gap:12px">
      <div>
        <div style="font-family:'Geist Mono',monospace;font-size:12px;color:#a78bfa;margin-bottom:3px">Superpowers</div>
        <div style="font-size:11px;color:var(--tm)">Clarify &rarr; Design &rarr; Plan &rarr; Code &rarr; Verify &mdash; tvinger Claude til at t&aelig;nke f&oslash;r den koder</div>
      </div>
      <span style="font-size:10px;color:#a78bfa;font-family:'Geist Mono',monospace;background:rgba(167,139,250,.12);border:1px solid rgba(167,139,250,.3);padding:2px 8px;border-radius:5px;flex-shrink:0">plugin</span>
    </div>

    <!-- PostToolUse hook -->
    <div style="background:linear-gradient(135deg,rgba(251,191,36,.07),rgba(251,191,36,.01));border:1px solid rgba(251,191,36,.3);border-radius:10px;padding:14px 18px;display:flex;align-items:center;justify-content:space-between;gap:12px">
      <div>
        <div style="font-family:'Geist Mono',monospace;font-size:12px;color:#fbbf24;margin-bottom:3px">post-write hook</div>
        <div style="font-size:11px;color:var(--tm)">Hvert .php-filgem: syntax-tjek + composer test + auth-filer sender security-notice direkte til Claude</div>
      </div>
      <span style="font-size:10px;color:#fbbf24;font-family:'Geist Mono',monospace;background:rgba(251,191,36,.1);border:1px solid rgba(251,191,36,.25);padding:2px 8px;border-radius:5px;flex-shrink:0">auto</span>
    </div>

    <!-- PreToolUse hook -->
    <div style="background:linear-gradient(135deg,rgba(248,113,113,.07),rgba(248,113,113,.01));border:1px solid rgba(248,113,113,.3);border-radius:10px;padding:14px 18px;display:flex;align-items:center;justify-content:space-between;gap:12px">
      <div>
        <div style="font-family:'Geist Mono',monospace;font-size:12px;color:#f87171;margin-bottom:3px">pre-bash hook</div>
        <div style="font-size:11px;color:var(--tm)">git commit blokeres automatisk hvis staged PHP-filer har syntaksfejl &mdash; Claude ser grunden og retter</div>
      </div>
      <span style="font-size:10px;color:#f87171;font-family:'Geist Mono',monospace;background:rgba(248,113,113,.1);border:1px solid rgba(248,113,113,.25);padding:2px 8px;border-radius:5px;flex-shrink:0">auto</span>
    </div>

    <!-- Stop hook -->
    <div style="background:linear-gradient(135deg,rgba(52,211,153,.07),rgba(52,211,153,.01));border:1px solid rgba(52,211,153,.3);border-radius:10px;padding:14px 18px;display:flex;align-items:center;justify-content:space-between;gap:12px">
      <div>
        <div style="font-family:'Geist Mono',monospace;font-size:12px;color:#34d399;margin-bottom:3px">stop hook</div>
        <div style="font-size:11px;color:var(--tm)">Session-afslutning skriver <span style="font-family:'Geist Mono',monospace">sessions/DRAFT.md</span> med git-data og printer rapport med review-anbefalinger</div>
      </div>
      <span style="font-size:10px;color:#34d399;font-family:'Geist Mono',monospace;background:rgba(52,211,153,.1);border:1px solid rgba(52,211,153,.25);padding:2px 8px;border-radius:5px;flex-shrink:0">auto</span>
    </div>

    <!-- Session-start hook -->
    <div style="background:linear-gradient(135deg,rgba(56,189,248,.07),rgba(56,189,248,.01));border:1px solid rgba(56,189,248,.3);border-radius:10px;padding:14px 18px;display:flex;align-items:center;justify-content:space-between;gap:12px">
      <div>
        <div style="font-family:'Geist Mono',monospace;font-size:12px;color:#38bdf8;margin-bottom:3px">session-start hook</div>
        <div style="font-size:11px;color:var(--tm)">Ny Claude-session? Forrige sessions DRAFT.md injiceres automatisk som kontekst &mdash; Claude husker hvad der skete sidst</div>
      </div>
      <span style="font-size:10px;color:#38bdf8;font-family:'Geist Mono',monospace;background:rgba(56,189,248,.1);border:1px solid rgba(56,189,248,.25);padding:2px 8px;border-radius:5px;flex-shrink:0">auto</span>
    </div>

    <!-- Awesome curated agents -->
    <div style="background:linear-gradient(135deg,rgba(56,189,248,.07),rgba(56,189,248,.01));border:1px solid rgba(56,189,248,.3);border-radius:10px;padding:14px 18px;display:flex;align-items:center;justify-content:space-between;gap:12px">
      <div>
        <div style="font-family:'Geist Mono',monospace;font-size:12px;color:#38bdf8;margin-bottom:3px">curated agents</div>
        <div style="font-size:11px;color:var(--tm)">code-reviewer, security-auditor, performance-engineer + type-specifikke &mdash; installeres automatisk</div>
      </div>
      <span style="font-size:10px;color:#38bdf8;font-family:'Geist Mono',monospace;background:rgba(56,189,248,.1);border:1px solid rgba(56,189,248,.25);padding:2px 8px;border-radius:5px;flex-shrink:0">agent</span>
    </div>

    <!-- Forge stack -->
    <div style="background:linear-gradient(135deg,rgba(16,185,129,.07),rgba(16,185,129,.01));border:1px solid rgba(16,185,129,.3);border-radius:10px;padding:14px 18px;display:flex;align-items:center;justify-content:space-between;gap:12px">
      <div>
        <div style="font-family:'Geist Mono',monospace;font-size:12px;color:#10b981;margin-bottom:3px">Forge stack</div>
        <div style="font-size:11px;color:var(--tm)">frontend-reviewer, db-reviewer, data-integrity-auditor &mdash; kender PHP/SQLite/Tailwind-konventionerne</div>
      </div>
      <span style="font-size:10px;color:#10b981;font-family:'Geist Mono',monospace;background:rgba(16,185,129,.1);border:1px solid rgba(16,185,129,.25);padding:2px 8px;border-radius:5px;flex-shrink:0">agent</span>
    </div>

  </div>
</section>

<div class="div"></div>

<!-- ═══════════════════════════════ FEATURES ══════════════════════════ -->
<section class="sec" id="features">
  <span class="sec-tag fu2">Hvad du får</span>
  <h2 class="sec-h2 fu2" style="transition-delay:.07s">Bygger. Tjekker. Retter.<br><span class="gsu">Igen og igen.</span></h2>
  <p class="sec-lead fu2" style="transition-delay:.14s">Agenten stopper ikke ved første fungerende implementation. Den looper BUILD → REVIEW → SECURITY → FIX til alle agenter scorer ≥ 8/10. Med Superpowers aktiveret tvinges Claude først igennem Clarify → Design → Plan → Code → Verify før noget skrives.</p>

  <div class="fgrid stag">
    <div class="lcard">
      <div class="ficon">⚡</div>
      <div class="fc-title">Bygger. Tjekker. Retter.</div>
      <div class="fc-desc">Claude stopper ikke ved f&oslash;rste fungerende implementation. Den k&oslash;rer agents p&aring; koden, finder problemerne, retter dem og k&oslash;rer igen &mdash; indtil code review, security og stack-validering alle er tilfredse. Det er ikke en assistent &mdash; det er en ingeni&oslash;r der ikke stopper.</div>
    </div>
    <div class="lcard" style="background:linear-gradient(135deg,rgba(167,139,250,.08),rgba(167,139,250,.02));border-color:rgba(167,139,250,.3)">
      <div class="ficon" style="background:rgba(167,139,250,.12);border-color:rgba(167,139,250,.3)">🧠</div>
      <div class="fc-title">Superpowers-disciplin</div>
      <div class="fc-desc">Plugin der tvinger Claude igennem en struktureret workflow f&oslash;r kode skrives: brainstorming, plan-skabelse, TDD, systematisk debugging og review-mod-plan. 6 skills auto-aktiveret. Sp&aelig;rrer for "skriv bare noget kode" &mdash; tvinger Clarify f&oslash;rst.</div>
    </div>
    <div class="lcard" style="background:linear-gradient(135deg,rgba(251,191,36,.06),rgba(248,113,113,.04));border-color:rgba(251,191,36,.25)">
      <div class="ficon" style="background:rgba(251,191,36,.12);border-color:rgba(251,191,36,.3)">🪝</div>
      <div class="fc-title">Automatiske hooks</div>
      <div class="fc-desc">Fire hooks k&oslash;rer uden du sp&oslash;rger. Hvert .php-filgem validerer syntax, k&oslash;rer <span style="font-family:'Geist Mono',monospace;font-size:11px">composer test</span> og sender security-notice ved auth-filer. <span style="font-family:'Geist Mono',monospace;font-size:11px">git commit</span> blokeres automatisk ved syntaksfejl. Session-afslutning skriver <span style="font-family:'Geist Mono',monospace;font-size:11px">DRAFT.md</span> med &aelig;ndringsoversigt &mdash; og n&aelig;ste session f&aring;r konteksten automatisk.</div>
    </div>
    <div class="lcard" style="background:linear-gradient(135deg,rgba(52,211,153,.06),rgba(56,189,248,.03));border-color:rgba(52,211,153,.25)">
      <div class="ficon" style="background:rgba(52,211,153,.12);border-color:rgba(52,211,153,.3)">🩺</div>
      <div class="fc-title">forge doctor</div>
      <div class="fc-desc">K&oslash;r <span style="font-family:'Geist Mono',monospace;font-size:11px">forge doctor</span> for et komplet helbredstjek: systemmilj&oslash; (PHP, composer, git, sqlite3, node, cloudflared) + projekt (hooks, Superpowers, agents, skills, MCPs, CLAUDE.md, DESIGN.md, .env, database). Printer ✓/⚠/ℹ/✗ per check med installationsvejledning ved fejl.</div>
    </div>
    <div class="lcard">
      <div class="ficon">🔀</div>
      <div class="fc-title">Komplet AI-dækning</div>
      <div class="fc-desc">Code review, security audit, performance, accessibility og PHP/SQLite stack-validering er installeret og konfigureret automatisk. Du beskriver hvad du vil bygge &mdash; Claude bruger de rigtige capabilities uden at du skal v&aelig;lge eller koordinere.</div>
    </div>
    <div class="lcard">
      <div class="ficon">🌍</div>
      <div class="fc-title">Taler dit sprog. Handler selv.</div>
      <div class="fc-desc">Claude svarer p&aring; det sprog du skriver p&aring; &mdash; dansk, svensk, norsk, finsk eller engelsk. Du beh&oslash;ver ikke kende kommandoerne &mdash; beskriv hvad du vil, Claude overss&aelig;tter det til handling.</div>
    </div>
    <div class="lcard" style="background:linear-gradient(135deg,rgba(124,106,240,.1),rgba(232,121,160,.06));border-color:rgba(124,106,240,.3);position:relative;overflow:hidden">
      <div style="position:absolute;top:-12px;right:-12px;display:flex;gap:4px;opacity:.18;pointer-events:none">
        <div style="width:28px;height:28px;border-radius:6px;background:#2563EB"></div>
        <div style="width:28px;height:28px;border-radius:6px;background:#EC4899"></div>
        <div style="width:28px;height:28px;border-radius:6px;background:#F59E0B"></div>
        <div style="width:28px;height:28px;border-radius:6px;background:#059669"></div>
      </div>
      <div style="position:absolute;top:22px;right:-8px;display:flex;gap:4px;opacity:.12;pointer-events:none">
        <div style="width:28px;height:28px;border-radius:6px;background:#7C3AED"></div>
        <div style="width:28px;height:28px;border-radius:6px;background:#0891B2"></div>
        <div style="width:28px;height:28px;border-radius:6px;background:#DC2626"></div>
      </div>
      <div class="ficon" style="background:rgba(124,106,240,.15);border-color:rgba(124,106,240,.3)">🎨</div>
      <div class="fc-title">UI/UX Pro Max</div>
      <div class="fc-desc" style="margin-bottom:12px">Design intelligence direkte i Claude Code. Aktiverer automatisk ved UI-arbejde og validerer kontrast, touch-targets og tilgængelighed inden levering.</div>
      <div style="display:flex;gap:8px;flex-wrap:wrap;margin-bottom:14px">
        <div style="background:rgba(124,106,240,.12);border:1px solid rgba(124,106,240,.2);border-radius:6px;padding:4px 10px;font-size:11px;font-family:'Geist Mono',monospace;color:var(--brand)">67 styles</div>
        <div style="background:rgba(232,121,160,.1);border:1px solid rgba(232,121,160,.2);border-radius:6px;padding:4px 10px;font-size:11px;font-family:'Geist Mono',monospace;color:var(--accent)">96 paletter</div>
        <div style="background:rgba(56,189,248,.1);border:1px solid rgba(56,189,248,.2);border-radius:6px;padding:4px 10px;font-size:11px;font-family:'Geist Mono',monospace;color:var(--accent2)">57 font-par</div>
      </div>
      <a href="?page=ui-ux-browser" class="btn bp" style="font-size:12px;padding:8px 16px;display:inline-flex;align-items:center;gap:7px;text-decoration:none">
        <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><path stroke-linecap="round" d="M21 21l-4.35-4.35"/></svg>
        Browse styles, paletter &amp; Motion
      </a>
    </div>
    <div class="lcard" style="background:linear-gradient(135deg,rgba(56,189,248,.07),rgba(124,106,240,.04));border-color:rgba(56,189,248,.25);position:relative;overflow:hidden">
      <div style="position:absolute;top:-10px;right:-10px;display:flex;gap:3px;opacity:.15;pointer-events:none;flex-wrap:wrap;width:120px">
        <div style="width:22px;height:22px;border-radius:5px;background:#0071e3"></div>
        <div style="width:22px;height:22px;border-radius:5px;background:#635bff"></div>
        <div style="width:22px;height:22px;border-radius:5px;background:#1db954"></div>
        <div style="width:22px;height:22px;border-radius:5px;background:#f0b90b"></div>
        <div style="width:22px;height:22px;border-radius:5px;background:#da291c"></div>
        <div style="width:22px;height:22px;border-radius:5px;background:#3ecf8e"></div>
      </div>
      <div class="ficon" style="background:rgba(56,189,248,.12);border-color:rgba(56,189,248,.3)">🎨</div>
      <div class="fc-title">31 Awesome DESIGN.md</div>
      <div class="fc-desc" style="margin-bottom:12px">V&aelig;lg design system fra verdens bedste produkter &mdash; Apple, Stripe, Linear, Shopify og 28 andre. Drop &eacute;n fil i projektet, Claude bygger UI der matcher pr&aelig;cis den stil.</div>
      <div style="display:flex;gap:8px;flex-wrap:wrap;margin-bottom:14px">
        <div style="background:rgba(56,189,248,.1);border:1px solid rgba(56,189,248,.2);border-radius:6px;padding:4px 10px;font-size:11px;font-family:'Geist Mono',monospace;color:var(--accent2)">31 systemer</div>
        <div style="background:rgba(124,106,240,.1);border:1px solid rgba(124,106,240,.2);border-radius:6px;padding:4px 10px;font-size:11px;font-family:'Geist Mono',monospace;color:var(--brand)">light + dark</div>
        <div style="background:rgba(52,211,153,.08);border:1px solid rgba(52,211,153,.2);border-radius:6px;padding:4px 10px;font-size:11px;font-family:'Geist Mono',monospace;color:var(--ok)">npx install</div>
      </div>
      <a href="?page=design-systems" class="btn bp" style="font-size:12px;padding:8px 16px;display:inline-flex;align-items:center;gap:7px;text-decoration:none">
        <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.964-7.178z"/><path stroke-linecap="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
        Browse design systems
      </a>
    </div>
    <div class="lcard" style="background:linear-gradient(135deg,rgba(232,121,160,.07),rgba(124,106,240,.04));border-color:rgba(232,121,160,.25)">
      <div class="ficon" style="background:rgba(232,121,160,.12);border-color:rgba(232,121,160,.3)">✦</div>
      <div class="fc-title">Motion.js animationer</div>
      <div class="fc-desc" style="margin-bottom:12px">Hardware-accelererede animationer — scroll-triggers, fade-ins, hover-effekter og micro-interactions. Tilgængelig direkte i UI/UX Browser under Motion-fanen. UI/UX Pro Max validerer <span style="font-family:'Geist Mono',monospace;font-size:11px;color:var(--accent2)">prefers-reduced-motion</span> inden levering.</div>
      <a href="?page=ui-ux-browser" class="btn bp" style="font-size:12px;padding:8px 16px;display:inline-flex;align-items:center;gap:7px;text-decoration:none">
        <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5.636 5.636a9 9 0 1012.728 0M12 3v9"/></svg>
        Åbn Motion JS
      </a>
    </div>
    <div class="lcard">
      <div class="ficon">🎨</div>
      <div class="fc-title">Design system inkluderet</div>
      <div class="fc-desc">DESIGN.md definerer et komplet visuelt sprog. Tailwind konfigureret med alle tokens. Frontend-agenten håndhæver mobile-first og WCAG accessibility på alle sider.</div>
    </div>
    <div class="lcard">
      <div class="ficon">🔒</div>
      <div class="fc-title">Produktion fra dag 1</div>
      <div class="fc-desc">bcrypt, CSRF-tokens, prepared statements, session hardening og secrets i .env &mdash; sat op fra f&oslash;rste linje kode. <span style="font-family:'Geist Mono',monospace;font-size:11px">.env.example</span> genereres automatisk med alle standard Forge-variabler. Deployment til Apache er en tjekliste.</div>
    </div>
    <div class="lcard">
      <div class="ficon">📦</div>
      <div class="fc-title">Apache-klar stack</div>
      <div class="fc-desc">PHP/SQLite med korrekte .htaccess-filer, PSR-4 autoload, .gitignore, .editorconfig og Composer klar fra start.</div>
    </div>
    <div class="lcard">
      <div class="ficon">📋</div>
      <div class="fc-title">Levende dokumentation</div>
      <div class="fc-desc">PROJECT.md er genereret fra start med skema, routes og arkitekturbeslutninger. Claude opdaterer den l&oslash;bende som en del af sin workflow &mdash; skifter du AI-system mister du ingen kontekst.</div>
    </div>
  </div>
</section>

<div class="div"></div>

<!-- ═══════════════════════════════ AI-CAPABILITIES ═══════════════════ -->
<section class="sec" id="agenter">
  <span class="sec-tag fu2" style="color:#a78bfa">AI-capabilities</span>
  <h2 class="sec-h2 fu2" style="transition-delay:.07s">Claude kender<br><span class="gsu">din stack.</span></h2>
  <p class="sec-lead fu2" style="transition-delay:.14s">Workflow-disciplin, code-review, security-audit og stack-specifik validering installeres automatisk. Intet at vælge, intet at koordinere &mdash; skriv hvad du vil bygge og det rigtige sker.</p>

  <div style="display:grid;grid-template-columns:repeat(2,1fr);gap:14px;margin-top:48px" class="fu2">

    <!-- WORKFLOW -->
    <div style="background:linear-gradient(135deg,rgba(167,139,250,.08),rgba(167,139,250,.02));border:1px solid rgba(167,139,250,.3);border-radius:12px;padding:24px 26px">
      <h4 style="font-size:17px;font-weight:600;color:var(--tp);margin-bottom:4px">Workflow-disciplin</h4>
      <p style="font-size:13px;color:var(--tm);line-height:1.6;margin-bottom:18px">Clarify &rarr; Design &rarr; Plan &rarr; Code &rarr; Verify. Tvinger en struktureret tilgang f&oslash;r kode skrives &mdash; reducerer debugging markant.</p>
      <ul style="list-style:none;padding:0;margin:0;display:flex;flex-direction:column;gap:8px">
        <li style="font-family:'Geist Mono',monospace;font-size:12px;color:var(--ts)">brainstorming</li>
        <li style="font-family:'Geist Mono',monospace;font-size:12px;color:var(--ts)">writing-plans</li>
        <li style="font-family:'Geist Mono',monospace;font-size:12px;color:var(--ts)">executing-plans</li>
        <li style="font-family:'Geist Mono',monospace;font-size:12px;color:var(--ts)">systematic-debugging</li>
        <li style="font-family:'Geist Mono',monospace;font-size:12px;color:var(--ts)">red-green-refactor</li>
        <li style="font-family:'Geist Mono',monospace;font-size:12px;color:#a78bfa">code-reviewer (automatisk)</li>
      </ul>
    </div>

    <!-- KVALITETSSIKRING -->
    <div style="background:linear-gradient(135deg,rgba(56,189,248,.08),rgba(56,189,248,.02));border:1px solid rgba(56,189,248,.3);border-radius:12px;padding:24px 26px">
      <h4 style="font-size:17px;font-weight:600;color:var(--tp);margin-bottom:4px">Kvalitetssikring</h4>
      <p style="font-size:13px;color:var(--tm);line-height:1.6;margin-bottom:18px">Generelle eksperter der kender god kode p&aring; tv&aelig;rs af sprog og frameworks &mdash; n&aring;r du vil have en second opinion.</p>
      <ul style="list-style:none;padding:0;margin:0;display:flex;flex-direction:column;gap:8px">
        <li style="font-family:'Geist Mono',monospace;font-size:12px;color:var(--ts)">security-auditor</li>
        <li style="font-family:'Geist Mono',monospace;font-size:12px;color:var(--ts)">performance-engineer</li>
        <li style="font-family:'Geist Mono',monospace;font-size:12px;color:var(--ts)">accessibility-tester</li>
        <li style="font-family:'Geist Mono',monospace;font-size:12px;color:var(--ts)">php-pro / sql-pro</li>
        <li style="font-family:'Geist Mono',monospace;font-size:12px;color:var(--ts)">+ type-specifikke</li>
      </ul>
    </div>

    <!-- STACK-VALIDERING -->
    <div style="background:linear-gradient(135deg,rgba(124,106,240,.08),rgba(124,106,240,.02));border:1px solid rgba(124,106,240,.3);border-radius:12px;padding:24px 26px">
      <h4 style="font-size:17px;font-weight:600;color:var(--tp);margin-bottom:4px">Stack-validering</h4>
      <p style="font-size:13px;color:var(--tm);line-height:1.6;margin-bottom:18px">PHP/SQLite-specifik validering med kendskab til Tailwind CDN-patterns, WAL-mode og Forge-konventioner.</p>
      <ul style="list-style:none;padding:0;margin:0;display:flex;flex-direction:column;gap:8px">
        <li style="font-family:'Geist Mono',monospace;font-size:12px;color:var(--ts)">frontend-reviewer</li>
        <li style="font-family:'Geist Mono',monospace;font-size:12px;color:var(--ts)">db-reviewer</li>
        <li style="font-family:'Geist Mono',monospace;font-size:12px;color:var(--ts)">data-integrity-auditor</li>
        <li style="font-family:'Geist Mono',monospace;font-size:12px;color:var(--ts)">browser-tester</li>
        <li style="font-family:'Geist Mono',monospace;font-size:12px;color:var(--ts)">mcp-health-check</li>
      </ul>
    </div>

    <!-- AUTOMATISKE HOOKS -->
    <div style="background:linear-gradient(135deg,rgba(251,191,36,.07),rgba(248,113,113,.04));border:1px solid rgba(251,191,36,.3);border-radius:12px;padding:24px 26px">
      <h4 style="font-size:17px;font-weight:600;color:var(--tp);margin-bottom:4px">Automatiske hooks</h4>
      <p style="font-size:13px;color:var(--tm);line-height:1.6;margin-bottom:18px">K&oslash;rer uden bruger-handling &mdash; Claude Code-event-systemet trigger dem direkte ved filskrivning, bash og session-afslutning.</p>
      <ul style="list-style:none;padding:0;margin:0;display:flex;flex-direction:column;gap:8px">
        <li style="font-family:'Geist Mono',monospace;font-size:12px;color:#fbbf24">post-write <span style="color:var(--ts);font-family:inherit">— PHP-lint + composer test + security-notice</span></li>
        <li style="font-family:'Geist Mono',monospace;font-size:12px;color:#f87171">pre-bash <span style="color:var(--ts);font-family:inherit">— blokerer git commit ved syntaksfejl</span></li>
        <li style="font-family:'Geist Mono',monospace;font-size:12px;color:#34d399">stop <span style="color:var(--ts);font-family:inherit">— skriver DRAFT.md + session-rapport</span></li>
        <li style="font-family:'Geist Mono',monospace;font-size:12px;color:#38bdf8">session-start <span style="color:var(--ts);font-family:inherit">— injecterer forrige sessions kontekst</span></li>
      </ul>
    </div>

  </div>

  <div style="margin-top:20px;background:rgba(124,106,240,.04);border:1px solid rgba(124,106,240,.15);border-radius:10px;padding:14px 22px;font-size:13px;color:var(--ts);line-height:1.7" class="fu2">
    Tilf&oslash;j flere agents: <span class="mono">forge agents search &lt;ord&gt;</span> finder blandt 100+ tilg&aelig;ngelige agents.
  </div>
</section>

<div class="div"></div>

<!-- ═══════════════════════════════ AUTOMATISK ════════════════════════ -->
<section class="sec" id="automatisk">
  <span class="sec-tag fu2" style="color:#34D399">Automatisk</span>
  <h2 class="sec-h2 fu2" style="transition-delay:.07s">Sker uden<br><span class="gsu">at du spørger.</span></h2>
  <p class="sec-lead fu2" style="transition-delay:.14s">De fleste brugere kalder aldrig en agent direkte. Forge installerer hooks der sikrer det sker alligevel &mdash; Claude fanger fejl og kører reviews i baggrunden.</p>

  <div style="margin-top:40px;display:flex;flex-direction:column;gap:16px">

    <div style="background:linear-gradient(135deg,rgba(52,211,153,.08),rgba(52,211,153,.02));border:1px solid rgba(52,211,153,.3);border-radius:14px;padding:24px 28px;display:grid;grid-template-columns:56px 1fr;gap:20px;align-items:start" class="fu2">
      <div style="width:44px;height:44px;background:rgba(52,211,153,.12);border:1px solid rgba(52,211,153,.3);border-radius:10px;display:flex;align-items:center;justify-content:center;font-size:20px">⚡</div>
      <div>
        <div style="font-size:17px;font-weight:600;color:var(--tp);margin-bottom:6px">PHP-validering i realtid</div>
        <div style="font-size:14px;color:var(--ts);line-height:1.7;margin-bottom:10px">Hvert .php-fil syntaks-tjekkes straks efter gem. Fejlen sendes direkte til Claude som context &mdash; Claude retter den <em>inden du ser det næste svar</em>. Du behøver ikke fortælle Claude at der er en fejl.</div>
        <div style="font-family:'Geist Mono',monospace;font-size:12px;color:#34D399">PostToolUse: Write|Edit &rarr; php -l &rarr; additionalContext til Claude</div>
      </div>
    </div>

    <div style="background:linear-gradient(135deg,rgba(232,121,160,.08),rgba(232,121,160,.02));border:1px solid rgba(232,121,160,.3);border-radius:14px;padding:24px 28px;display:grid;grid-template-columns:56px 1fr;gap:20px;align-items:start" class="fu2">
      <div style="width:44px;height:44px;background:rgba(232,121,160,.12);border:1px solid rgba(232,121,160,.3);border-radius:10px;display:flex;align-items:center;justify-content:center;font-size:20px">🔐</div>
      <div>
        <div style="font-size:17px;font-weight:600;color:var(--tp);margin-bottom:6px">Security-notifikationer</div>
        <div style="font-size:14px;color:var(--ts);line-height:1.7;margin-bottom:10px">Redigerer du <span class="mono">login.php</span>, <span class="mono">AuthController</span>, <span class="mono">session</span>- eller <span class="mono">password</span>-filer? Claude adviseres automatisk om at filen er sikkerhedskritisk og opfordres til at k&oslash;re security-auditor p&aring; &aelig;ndringen.</div>
        <div style="font-family:'Geist Mono',monospace;font-size:12px;color:var(--accent)">PostToolUse: auth/login/session/password &rarr; SECURITY NOTICE til Claude</div>
      </div>
    </div>

    <div style="background:linear-gradient(135deg,rgba(56,189,248,.08),rgba(56,189,248,.02));border:1px solid rgba(56,189,248,.3);border-radius:14px;padding:24px 28px;display:grid;grid-template-columns:56px 1fr;gap:20px;align-items:start" class="fu2" style="transition-delay:.14s">
      <div style="width:44px;height:44px;background:rgba(56,189,248,.12);border:1px solid rgba(56,189,248,.3);border-radius:10px;display:flex;align-items:center;justify-content:center;font-size:20px">🚫</div>
      <div>
        <div style="font-size:17px;font-weight:600;color:var(--tp);margin-bottom:6px">Commit-gate</div>
        <div style="font-size:14px;color:var(--ts);line-height:1.7;margin-bottom:10px">Staged PHP-filer valideres automatisk f&oslash;r <span class="mono">git commit</span> k&oslash;rer. Syntaksfejl blokerer commit'et &mdash; Claude ser blokeringsgrunden, retter koden og fors&oslash;ger igen. Ingen fejlbeh&aelig;ftet kode n&aring;r din git-historik.</div>
        <div style="font-family:'Geist Mono',monospace;font-size:12px;color:var(--accent2)">PreToolUse: git commit &rarr; php -l staged files &rarr; deny med fejlbesked</div>
      </div>
    </div>

    <div style="background:linear-gradient(135deg,rgba(52,211,153,.08),rgba(52,211,153,.02));border:1px solid rgba(52,211,153,.3);border-radius:14px;padding:24px 28px;display:grid;grid-template-columns:56px 1fr;gap:20px;align-items:start" class="fu2">
      <div style="width:44px;height:44px;background:rgba(52,211,153,.12);border:1px solid rgba(52,211,153,.3);border-radius:10px;display:flex;align-items:center;justify-content:center;font-size:20px">📋</div>
      <div>
        <div style="font-size:17px;font-weight:600;color:var(--tp);margin-bottom:6px">Session-audit</div>
        <div style="font-size:14px;color:var(--ts);line-height:1.7;margin-bottom:10px">N&aring;r Claude Code-sessionen afsluttes skrives <span class="mono">sessions/DRAFT.md</span> med git-data (hvilke filer &aelig;ndret, auth-hits, schema-hits) og en rapport printes i terminalen med review-anbefalinger. N&aelig;ste gang du &aring;bner projektet l&aelig;ser session-start hook DRAFT.md og giver Claude konteksten &mdash; ingen tabt tr&aring;d.</div>
        <div style="font-family:'Geist Mono',monospace;font-size:12px;color:#34d399">Stop &rarr; sessions/DRAFT.md &nbsp;·&nbsp; SessionStart &rarr; additionalContext til Claude</div>
      </div>
    </div>

    <div style="background:linear-gradient(135deg,rgba(124,106,240,.08),rgba(124,106,240,.02));border:1px solid rgba(124,106,240,.3);border-radius:14px;padding:24px 28px;display:grid;grid-template-columns:56px 1fr;gap:20px;align-items:start" class="fu2">
      <div style="width:44px;height:44px;background:rgba(124,106,240,.12);border:1px solid rgba(124,106,240,.3);border-radius:10px;display:flex;align-items:center;justify-content:center;font-size:20px">🧪</div>
      <div>
        <div style="font-size:17px;font-weight:600;color:var(--tp);margin-bottom:6px">Test runner efter hvert gem</div>
        <div style="font-size:14px;color:var(--ts);line-height:1.7;margin-bottom:10px">Har projektet et <span class="mono">composer test</span>-script, k&oslash;res det automatisk efter hvert .php-filgem. Fejlende tests sendes som <span class="mono">additionalContext</span> til Claude &mdash; den retter dem inden du ser n&aelig;ste svar. Ingen separat terminal, ingen manuel <span class="mono">composer test</span>.</div>
        <div style="font-family:'Geist Mono',monospace;font-size:12px;color:var(--brand)">PostToolUse: app/*.php &rarr; composer test &rarr; additionalContext ved fejl</div>
      </div>
    </div>

  </div>

  <div style="margin-top:20px;background:rgba(52,211,153,.04);border:1px solid rgba(52,211,153,.15);border-radius:10px;padding:14px 22px;font-size:13px;color:var(--ts);line-height:1.7" class="fu2">
    Hooks er committed til projektet i <span class="mono">.claude/hooks/</span> &mdash; de k&oslash;rer for alle der &aring;bner projektet med Claude Code.
  </div>
</section>

<div class="div"></div>

<!-- ═══════════════════════════════ COMMANDS ══════════════════════════ -->
<section class="sec" id="commands">
  <span class="sec-tag fu2">Commands og skills</span>
  <h2 class="sec-h2 fu2" style="transition-delay:.07s">Hvad du skriver<br><span class="gsu">til Claude.</span></h2>
  <p class="sec-lead fu2" style="transition-delay:.14s">Skriv disse commands direkte i Claude Code. Skills trigger automatisk baseret på kontekst.</p>

  <div style="background:linear-gradient(135deg,rgba(124,106,240,.07),rgba(232,121,160,.04));border:1px solid rgba(124,106,240,.2);border-radius:12px;padding:24px 28px;margin-top:40px" class="fu2">
    <div style="font-family:'Geist Mono',monospace;font-size:11px;font-weight:600;text-transform:uppercase;letter-spacing:.1em;color:var(--brand);margin-bottom:16px">Hvad du kan bede Claude om</div>
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:0" class="cmd-grid">
      <div style="display:flex;flex-direction:column;gap:0">
        <div style="padding:11px 0;border-bottom:1px solid var(--bs);display:flex;gap:16px;align-items:baseline">
          <span style="font-size:12px;color:var(--ts);min-width:220px">"Vi skal bygge [noget nyt]"</span>
          <span style="font-size:12px;color:var(--tp)">→ Laver plan, venter p&aring; godkendelse</span>
        </div>
        <div style="padding:11px 0;border-bottom:1px solid var(--bs);display:flex;gap:16px;align-items:baseline">
          <span style="font-size:12px;color:var(--ts);min-width:220px">"Noget virker ikke"</span>
          <span style="font-size:12px;color:var(--tp)">→ Diagnosticerer og retter selv</span>
        </div>
        <div style="padding:11px 0;border-bottom:1px solid var(--bs);display:flex;gap:16px;align-items:baseline">
          <span style="font-size:12px;color:var(--ts);min-width:220px">"Tjek at det ser godt ud p&aring; mobil"</span>
          <span style="font-size:12px;color:var(--tp)">→ frontend-reviewer + accessibility-tester</span>
        </div>
        <div style="padding:11px 0;display:flex;gap:16px;align-items:baseline">
          <span style="font-size:12px;color:var(--ts);min-width:220px">"Er databasen hurtig nok?"</span>
          <span style="font-size:12px;color:var(--tp)">→ performance-engineer + db-reviewer</span>
        </div>
      </div>
      <div style="display:flex;flex-direction:column;gap:0;padding-left:28px;border-left:1px solid var(--bs)" class="skills-col">
        <div style="padding:11px 0;border-bottom:1px solid var(--bs);display:flex;gap:16px;align-items:baseline">
          <span style="font-size:12px;color:var(--ts);min-width:160px">"Hvad mangler?"</span>
          <span style="font-size:12px;color:var(--tp)">→ Opsummerer og foresl&aring;r n&aelig;ste skridt</span>
        </div>
        <div style="padding:11px 0;border-bottom:1px solid var(--bs);display:flex;gap:16px;align-items:baseline">
          <span style="font-size:12px;color:var(--ts);min-width:160px">"Er det sikkert nok?"</span>
          <span style="font-size:12px;color:var(--tp)">→ security-auditor k&oslash;rer p&aring; koden</span>
        </div>
        <div style="padding:11px 0;border-bottom:1px solid var(--bs);display:flex;gap:16px;align-items:baseline">
          <span style="font-size:12px;color:var(--ts);min-width:160px">Database ikke oprettet</span>
          <span style="font-size:12px;color:var(--tp)">→ K&oslash;rer db-init automatisk</span>
        </div>
        <div style="padding:11px 0;display:flex;gap:16px;align-items:baseline">
          <span style="font-size:12px;color:var(--ts);min-width:160px">"Det er klar til commit"</span>
          <span style="font-size:12px;color:var(--tp)">→ Kører /project:review inden push</span>
        </div>
      </div>
    </div>
    <div style="margin-top:16px;padding-top:16px;border-top:1px solid var(--bs);font-size:12px;color:var(--tm);line-height:1.6">
      Claude siger "Jeg tjekker koden nu" — ikke "Jeg spawner code-reviewer-agenten". Teknisk jargon forbliver under motorhjelmen.
    </div>
  </div>

  <div class="fu2 cmd-cols">

    <div>
      <div style="font-family:'Geist Mono',monospace;font-size:11px;font-weight:600;text-transform:uppercase;letter-spacing:.1em;color:var(--brand);margin-bottom:16px">/project commands</div>
      <div style="display:flex;flex-direction:column;gap:8px">

        <div style="background:var(--surface);border:1px solid var(--bd);border-radius:10px;overflow:hidden">
          <div style="display:flex;align-items:center;justify-content:space-between;padding:12px 16px;border-bottom:1px solid var(--bs)">
            <span style="font-family:'Geist Mono',monospace;font-size:13px;color:var(--brand)">/project:review</span>
            <button class="cbtn" onclick="copyLine(this,'/project:review')">Kopiér</button>
          </div>
          <div style="padding:10px 16px;font-size:12px;color:var(--ts);line-height:1.6">Fuld review på tværs af alle dimensioner. Kører agenter parallelt, blokerer ved CRITICAL.</div>
        </div>

        <div style="background:var(--surface);border:1px solid var(--bd);border-radius:10px;overflow:hidden">
          <div style="display:flex;align-items:center;justify-content:space-between;padding:12px 16px;border-bottom:1px solid var(--bs)">
            <span style="font-family:'Geist Mono',monospace;font-size:13px;color:var(--brand)">/project:fix-issue</span>
            <button class="cbtn" onclick="copyLine(this,'/project:fix-issue')">Kopiér</button>
          </div>
          <div style="padding:10px 16px;font-size:12px;color:var(--ts);line-height:1.6">Retter fund fra seneste review. Critical først, derefter Major, derefter Minor. Kører review igen bagefter.</div>
        </div>

        <div style="background:var(--surface);border:1px solid var(--bd);border-radius:10px;overflow:hidden">
          <div style="display:flex;align-items:center;justify-content:space-between;padding:12px 16px;border-bottom:1px solid var(--bs)">
            <span style="font-family:'Geist Mono',monospace;font-size:13px;color:var(--brand)">/project:new-page <span style="color:var(--accent2)">[navn]</span></span>
            <button class="cbtn" onclick="copyLine(this,'/project:new-page ')">Kopiér</button>
          </div>
          <div style="padding:10px 16px;font-size:12px;color:var(--ts);line-height:1.6">Opretter controller + view + route i én operation. Følger MVC-strukturen i CLAUDE.md.</div>
        </div>

        <div style="background:var(--surface);border:1px solid var(--bd);border-radius:10px;overflow:hidden">
          <div style="display:flex;align-items:center;justify-content:space-between;padding:12px 16px;border-bottom:1px solid var(--bs)">
            <span style="font-family:'Geist Mono',monospace;font-size:13px;color:var(--brand)">/project:new-module <span style="color:var(--accent2)">[navn]</span></span>
            <button class="cbtn" onclick="copyLine(this,'/project:new-module ')">Kopiér</button>
          </div>
          <div style="padding:10px 16px;font-size:12px;color:var(--ts);line-height:1.6">Fuldt feature-modul: plan → schema → model → service → controller + views. Laver en plan og venter på bekræftelse inden den bygger.</div>
        </div>

        <div style="background:var(--surface);border:1px solid var(--bd);border-radius:10px;overflow:hidden">
          <div style="display:flex;align-items:center;justify-content:space-between;padding:12px 16px;border-bottom:1px solid var(--bs)">
            <span style="font-family:'Geist Mono',monospace;font-size:13px;color:var(--brand)">/project:db-init</span>
            <button class="cbtn" onclick="copyLine(this,'/project:db-init')">Kopiér</button>
          </div>
          <div style="padding:10px 16px;font-size:12px;color:var(--ts);line-height:1.6">Initialiserer eller nulstiller databasen fra <span class="mono">schema.sql</span>. Verificerer tabeller og admin-bruger.</div>
        </div>

        <div style="background:var(--surface);border:1px solid var(--bd);border-radius:10px;overflow:hidden">
          <div style="display:flex;align-items:center;justify-content:space-between;padding:12px 16px;border-bottom:1px solid var(--bs)">
            <span style="font-family:'Geist Mono',monospace;font-size:13px;color:var(--brand)">/project:deploy</span>
            <button class="cbtn" onclick="copyLine(this,'/project:deploy')">Kopiér</button>
          </div>
          <div style="padding:10px 16px;font-size:12px;color:var(--ts);line-height:1.6">Produktions-tjekliste. Kører review, checker .env og .htaccess, og outputter hvad der mangler inden go-live.</div>
        </div>

        <div style="background:var(--surface);border:1px solid var(--bd);border-radius:10px;overflow:hidden">
          <div style="display:flex;align-items:center;justify-content:space-between;padding:12px 16px;border-bottom:1px solid var(--bs)">
            <span style="font-family:'Geist Mono',monospace;font-size:13px;color:var(--brand)">/project:setup-python</span>
            <button class="cbtn" onclick="copyLine(this,'/project:setup-python')">Kopiér</button>
          </div>
          <div style="padding:10px 16px;font-size:12px;color:var(--ts);line-height:1.6">Opretter Python venv, installerer <span class="mono">requirements.txt</span> og tilføjer <span class="mono">.venv/</span> til .gitignore.</div>
        </div>

        <div style="background:linear-gradient(135deg,rgba(16,185,129,.07),rgba(56,189,248,.04));border:1px solid rgba(16,185,129,.25);border-radius:10px;overflow:hidden">
          <div style="display:flex;align-items:center;justify-content:space-between;padding:12px 16px;border-bottom:1px solid rgba(16,185,129,.15)">
            <span style="font-family:'Geist Mono',monospace;font-size:13px;color:#10b981">/project:sanity-check</span>
            <button class="cbtn" onclick="copyLine(this,'/project:sanity-check')">Kopiér</button>
          </div>
          <div style="padding:10px 16px;font-size:12px;color:var(--ts);line-height:1.6">Verificerer at data der vises er korrekte: matematisk konsistens, plausibilitet og krydscheck mod r&aring; API-data. Returnerer PASS / WARN / CRITICAL per metrik. Blokerer deling ved CRITICAL.</div>
        </div>

        <div style="background:linear-gradient(135deg,rgba(56,189,248,.06),rgba(124,106,240,.03));border:1px solid rgba(56,189,248,.25);border-radius:10px;overflow:hidden">
          <div style="display:flex;align-items:center;justify-content:space-between;padding:12px 16px;border-bottom:1px solid rgba(56,189,248,.15)">
            <span style="font-family:'Geist Mono',monospace;font-size:13px;color:var(--accent2)">/project:health</span>
            <button class="cbtn" onclick="copyLine(this,'/project:health')">Kopiér</button>
          </div>
          <div style="padding:10px 16px;font-size:12px;color:var(--ts);line-height:1.6">Tjekker MCP-servere, agenter og CLI-afhængigheder. Verificerer at hele Forge-stacken er i drift.</div>
        </div>

        <div style="background:linear-gradient(135deg,rgba(167,139,250,.07),rgba(56,189,248,.03));border:1px solid rgba(167,139,250,.25);border-radius:10px;overflow:hidden">
          <div style="display:flex;align-items:center;justify-content:space-between;padding:12px 16px;border-bottom:1px solid rgba(167,139,250,.15)">
            <span style="font-family:'Geist Mono',monospace;font-size:13px;color:#a78bfa">forge agents <span style="color:var(--accent2)">[list|search|update|cleanup]</span></span>
            <button class="cbtn" onclick="copyLine(this,'forge agents list')">Kopiér</button>
          </div>
          <div style="padding:10px 16px;font-size:12px;color:var(--ts);line-height:1.6">CLI-kommando: <span class="mono">list</span> viser kategorier med cache-dato og antal agents, <span class="mono">search &lt;ord&gt;</span> s&oslash;ger efter agent-navn, <span class="mono">update</span> opdaterer cachen og viser diff (tilf&oslash;jede/fjernede), eller <span class="mono">cleanup</span> rydder agent-dubletter (kr&aelig;ver <span class="mono">--apply</span>).</div>
        </div>

        <div style="background:linear-gradient(135deg,rgba(52,211,153,.07),rgba(56,189,248,.03));border:1px solid rgba(52,211,153,.25);border-radius:10px;overflow:hidden">
          <div style="display:flex;align-items:center;justify-content:space-between;padding:12px 16px;border-bottom:1px solid rgba(52,211,153,.15)">
            <span style="font-family:'Geist Mono',monospace;font-size:13px;color:#34d399">forge doctor</span>
            <button class="cbtn" onclick="copyLine(this,'forge doctor')">Kopiér</button>
          </div>
          <div style="padding:10px 16px;font-size:12px;color:var(--ts);line-height:1.6">16 checks i to sektioner &mdash; <strong>Systemmilj&oslash;:</strong> PHP, composer (med installationskommando), git, sqlite3, node/npx, cloudflared &mdash; <strong>Projekt:</strong> hooks (4/4), Superpowers, agents, skills, MCP-servere (Context7/Chrome/ViaVi), CLAUDE.md, DESIGN.md, .env, database. ✓/⚠/ℹ/✗ pr. check.</div>
        </div>

        <div style="background:linear-gradient(135deg,rgba(56,189,248,.07),rgba(124,106,240,.03));border:1px solid rgba(56,189,248,.25);border-radius:10px;overflow:hidden">
          <div style="display:flex;align-items:center;justify-content:space-between;padding:12px 16px;border-bottom:1px solid rgba(56,189,248,.15)">
            <span style="font-family:'Geist Mono',monospace;font-size:13px;color:var(--accent2)">forge design refresh</span>
            <button class="cbtn" onclick="copyLine(this,'forge design refresh')">Kopiér</button>
          </div>
          <div style="padding:10px 16px;font-size:12px;color:var(--ts);line-height:1.6">Genaf vikler DESIGN.md-valget i et eksisterende projekt. Vælg et nyt design system og bekr&aelig;ft &mdash; DESIGN.md overskrives og Claude bruger det nye system fra n&aelig;ste prompt.</div>
        </div>

        <div style="background:var(--surface);border:1px solid var(--bd);border-radius:10px;overflow:hidden">
          <div style="display:flex;align-items:center;justify-content:space-between;padding:12px 16px;border-bottom:1px solid var(--bs)">
            <span style="font-family:'Geist Mono',monospace;font-size:13px;color:var(--brand)">/project:session-end</span>
            <button class="cbtn" onclick="copyLine(this,'/project:session-end')">Kopiér</button>
          </div>
          <div style="padding:10px 16px;font-size:12px;color:var(--ts);line-height:1.6">Claude skriver en narrativ opsummering af sessionen og gemmer den som <span class="mono">sessions/YYYY-MM-DD-HHMMSS.md</span>. DRAFT.md slettes. Kan tilf&oslash;je en personlig note f&oslash;r gemning.</div>
        </div>

      </div>
    </div>

    <div>
      <div style="font-family:'Geist Mono',monospace;font-size:11px;font-weight:600;text-transform:uppercase;letter-spacing:.1em;color:#a78bfa;margin-bottom:16px">Superpowers · auto-aktiveret</div>
      <div style="display:flex;flex-direction:column;gap:8px">

        <div style="background:linear-gradient(135deg,rgba(167,139,250,.07),rgba(167,139,250,.01));border:1px solid rgba(167,139,250,.25);border-radius:10px;overflow:hidden">
          <div style="display:flex;align-items:center;justify-content:space-between;padding:12px 16px;border-bottom:1px solid rgba(167,139,250,.15)">
            <span style="font-family:'Geist Mono',monospace;font-size:13px;color:#a78bfa">brainstorming</span>
            <span style="font-size:11px;color:#a78bfa;font-family:'Geist Mono',monospace">Superpowers</span>
          </div>
          <div style="padding:10px 16px;font-size:12px;color:var(--ts);line-height:1.6">Aktiveres ved nye features eller &aring;bne sp&oslash;rgsm&aring;l. Tvinger Clarify-fasen inden planlægning starter.</div>
        </div>

        <div style="background:linear-gradient(135deg,rgba(167,139,250,.07),rgba(167,139,250,.01));border:1px solid rgba(167,139,250,.25);border-radius:10px;overflow:hidden">
          <div style="display:flex;align-items:center;justify-content:space-between;padding:12px 16px;border-bottom:1px solid rgba(167,139,250,.15)">
            <span style="font-family:'Geist Mono',monospace;font-size:13px;color:#a78bfa">writing-plans</span>
            <span style="font-size:11px;color:#a78bfa;font-family:'Geist Mono',monospace">Superpowers</span>
          </div>
          <div style="padding:10px 16px;font-size:12px;color:var(--ts);line-height:1.6">Aktiveres n&aring;r Claude skal implementere noget. Skriver en plan og venter p&aring; godkendelse inden kode skrives.</div>
        </div>

        <div style="background:linear-gradient(135deg,rgba(167,139,250,.07),rgba(167,139,250,.01));border:1px solid rgba(167,139,250,.25);border-radius:10px;overflow:hidden">
          <div style="display:flex;align-items:center;justify-content:space-between;padding:12px 16px;border-bottom:1px solid rgba(167,139,250,.15)">
            <span style="font-family:'Geist Mono',monospace;font-size:13px;color:#a78bfa">systematic-debugging</span>
            <span style="font-size:11px;color:#a78bfa;font-family:'Geist Mono',monospace">Superpowers</span>
          </div>
          <div style="padding:10px 16px;font-size:12px;color:var(--ts);line-height:1.6">Aktiveres ved fejl. Hyoptes&aelig;tter, tester og eliminerer &mdash; stopper ikke ved f&oslash;rste "m&aring;ske".</div>
        </div>

        <div style="background:linear-gradient(135deg,rgba(167,139,250,.07),rgba(167,139,250,.01));border:1px solid rgba(167,139,250,.25);border-radius:10px;overflow:hidden">
          <div style="display:flex;align-items:center;justify-content:space-between;padding:12px 16px;border-bottom:1px solid rgba(167,139,250,.15)">
            <span style="font-family:'Geist Mono',monospace;font-size:13px;color:#a78bfa">red-green-refactor</span>
            <span style="font-size:11px;color:#a78bfa;font-family:'Geist Mono',monospace">Superpowers</span>
          </div>
          <div style="padding:10px 16px;font-size:12px;color:var(--ts);line-height:1.6">Aktiveres ved TDD eller refaktorering. Skriver f&oslash;rst failing test, s&aring; implementation, s&aring; cleanup.</div>
        </div>

        <div style="background:linear-gradient(135deg,rgba(167,139,250,.07),rgba(167,139,250,.01));border:1px solid rgba(167,139,250,.25);border-radius:10px;overflow:hidden">
          <div style="display:flex;align-items:center;justify-content:space-between;padding:12px 16px;border-bottom:1px solid rgba(167,139,250,.15)">
            <span style="font-family:'Geist Mono',monospace;font-size:13px;color:#a78bfa">code-reviewer</span>
            <span style="font-size:11px;color:#a78bfa;font-family:'Geist Mono',monospace">Superpowers</span>
          </div>
          <div style="padding:10px 16px;font-size:12px;color:var(--ts);line-height:1.6">Spawner automatisk som subagent efter implementation er f&aelig;rdig &mdash; reviewer koden inden Claude svarer dig.</div>
        </div>

      </div>

      <div style="margin-top:16px;background:linear-gradient(135deg,rgba(124,106,240,.06),rgba(232,121,160,.03));border:1px solid rgba(124,106,240,.15);border-radius:10px;padding:16px 18px">
        <div style="font-family:'Geist Mono',monospace;font-size:11px;font-weight:600;text-transform:uppercase;letter-spacing:.08em;color:var(--brand);margin-bottom:10px">PROJECT.md · din bro til andre AI-systemer</div>
        <div style="font-size:12px;color:var(--ts);line-height:1.7">Genereret fra start med skema, routes og arkitekturvalg. Claude opdaterer den l&oslash;bende som del af sin workflow. Skifter du til Copilot eller Cursor &mdash; se guiden nedenfor.</div>
      </div>

      <div style="font-family:'Geist Mono',monospace;font-size:11px;font-weight:600;text-transform:uppercase;letter-spacing:.1em;color:var(--ts);margin-bottom:16px;margin-top:24px">Rules · altid aktive</div>
      <div style="background:var(--surface);border:1px solid var(--bd);border-radius:10px;padding:16px 18px">
        <div style="display:flex;flex-direction:column;gap:8px">
          <div style="display:flex;justify-content:space-between;align-items:center">
            <span style="font-family:'Geist Mono',monospace;font-size:12px;color:var(--ts)">code-style.md</span>
            <span style="font-size:11px;color:var(--tm)">PHP PSR-12 · strict_types</span>
          </div>
          <div style="height:1px;background:var(--bs)"></div>
          <div style="display:flex;justify-content:space-between;align-items:center">
            <span style="font-family:'Geist Mono',monospace;font-size:12px;color:var(--ts)">javascript.md</span>
            <span style="font-size:11px;color:var(--tm)">fetch · CSRF · no innerHTML</span>
          </div>
          <div style="height:1px;background:var(--bs)"></div>
          <div style="display:flex;justify-content:space-between;align-items:center">
            <span style="font-family:'Geist Mono',monospace;font-size:12px;color:var(--ts)">database.md</span>
            <span style="font-size:11px;color:var(--tm)">WAL · FK · prepared stmts</span>
          </div>
          <div style="height:1px;background:var(--bs)"></div>
          <div style="display:flex;justify-content:space-between;align-items:center">
            <span style="font-family:'Geist Mono',monospace;font-size:12px;color:var(--ts)">api-conventions.md</span>
            <span style="font-size:11px;color:var(--tm)">retry · logging · exceptions</span>
          </div>
          <div style="height:1px;background:var(--bs)"></div>
          <div style="display:flex;justify-content:space-between;align-items:center">
            <span style="font-family:'Geist Mono',monospace;font-size:12px;color:var(--ts)">testing.md</span>
            <span style="font-size:11px;color:var(--tm)">happy + failure paths</span>
          </div>
          <div style="height:1px;background:var(--bs)"></div>
          <div style="display:flex;justify-content:space-between;align-items:center">
            <span style="font-family:'Geist Mono',monospace;font-size:12px;color:var(--ts)">data-formats.md</span>
            <span style="font-size:11px;color:var(--tm)">TOON internt · JSON til browser</span>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<div class="div"></div>

<!-- ═══════════════════════════════ SKIFT AI ══════════════════════════ -->
<section class="sec" id="skift">
  <span class="sec-tag fu2">Skift AI-system</span>
  <h2 class="sec-h2 fu2" style="transition-delay:.07s">Vil du fortsætte i Copilot eller Cursor?</h2>
  <p class="sec-lead fu2" style="transition-delay:.14s">PROJECT.md indeholder alt hvad et nyt AI-system skal vide. Kopier den nyeste version — document-skill'en holder den opdateret automatisk.</p>

  <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:16px;margin-top:40px" class="stag ai-grid">

    <div style="background:var(--surface);border:1px solid var(--bd);border-radius:12px;padding:24px">
      <div style="font-size:22px;margin-bottom:12px">🐙</div>
      <div style="font-size:15px;font-weight:600;color:var(--tp);margin-bottom:8px">GitHub Copilot</div>
      <div style="display:flex;flex-direction:column;gap:8px">
        <div style="display:flex;gap:10px;font-size:13px;color:var(--ts)"><span style="color:var(--brand);font-weight:600;flex-shrink:0">1.</span>Åbn projektmappen i VS Code</div>
        <div style="display:flex;gap:10px;font-size:13px;color:var(--ts)"><span style="color:var(--brand);font-weight:600;flex-shrink:0">2.</span>Opret filen <span class="mono" style="margin:0 3px">.github/copilot-instructions.md</span></div>
        <div style="display:flex;gap:10px;font-size:13px;color:var(--ts)"><span style="color:var(--brand);font-weight:600;flex-shrink:0">3.</span>Kopier alt fra PROJECT.md ind i den</div>
        <div style="display:flex;gap:10px;font-size:13px;color:var(--ts)"><span style="color:var(--brand);font-weight:600;flex-shrink:0">4.</span>Copilot læser den automatisk fremover</div>
      </div>
    </div>

    <div style="background:var(--surface);border:1px solid var(--bd);border-radius:12px;padding:24px">
      <div style="font-size:22px;margin-bottom:12px">⌨️</div>
      <div style="font-size:15px;font-weight:600;color:var(--tp);margin-bottom:8px">Cursor</div>
      <div style="display:flex;flex-direction:column;gap:8px">
        <div style="display:flex;gap:10px;font-size:13px;color:var(--ts)"><span style="color:var(--brand);font-weight:600;flex-shrink:0">1.</span>Åbn projektmappen i Cursor</div>
        <div style="display:flex;gap:10px;font-size:13px;color:var(--ts)"><span style="color:var(--brand);font-weight:600;flex-shrink:0">2.</span>Opret filen <span class="mono" style="margin:0 3px">.cursorrules</span> i roden</div>
        <div style="display:flex;gap:10px;font-size:13px;color:var(--ts)"><span style="color:var(--brand);font-weight:600;flex-shrink:0">3.</span>Kopier alt fra PROJECT.md ind i den</div>
        <div style="display:flex;gap:10px;font-size:13px;color:var(--ts)"><span style="color:var(--brand);font-weight:600;flex-shrink:0">4.</span>Cursor bruger den fra første besked</div>
      </div>
    </div>

    <div style="background:var(--surface);border:1px solid var(--bd);border-radius:12px;padding:24px">
      <div style="font-size:22px;margin-bottom:12px">💬</div>
      <div style="font-size:15px;font-weight:600;color:var(--tp);margin-bottom:8px">ChatGPT eller andet</div>
      <div style="display:flex;flex-direction:column;gap:8px">
        <div style="display:flex;gap:10px;font-size:13px;color:var(--ts)"><span style="color:var(--brand);font-weight:600;flex-shrink:0">1.</span>Åbn PROJECT.md i et tekstprogram</div>
        <div style="display:flex;gap:10px;font-size:13px;color:var(--ts)"><span style="color:var(--brand);font-weight:600;flex-shrink:0">2.</span>Kopier hele indholdet</div>
        <div style="display:flex;gap:10px;font-size:13px;color:var(--ts)"><span style="color:var(--brand);font-weight:600;flex-shrink:0">3.</span>Paste det som første besked i chatten</div>
        <div style="display:flex;gap:10px;font-size:13px;color:var(--ts)"><span style="color:var(--brand);font-weight:600;flex-shrink:0">4.</span>Beskriv derefter hvad du vil bygge</div>
      </div>
    </div>

  </div>

  <div class="note fu2" style="margin-top:20px;transition-delay:.2s">
    <strong>Husk:</strong> document-skill'en opdaterer PROJECT.md automatisk. Kopier altid den version der ligger i din projektmappe — ikke en gammel kopi.
  </div>
</section>

<div class="div"></div>

<!-- ═══════════════════════════════ CTA ══════════════════════════════ -->
<div class="cta-sec fu2">
  <span class="cta-tag">Klar?</span>
  <h2 class="cta-h"><span class="gb">Installér. Kør. Byg.</span></h2>
  <div style="display:flex;gap:12px;justify-content:center;flex-wrap:wrap">
    <button class="btn bp" onclick="copyInstall(this)">
      <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="9" y="9" width="13" height="13" rx="2"/><path stroke-linecap="round" stroke-linejoin="round" d="M5 15H4a2 2 0 01-2-2V4a2 2 0 012-2h9a2 2 0 012 2v1"/></svg>
      Kopiér install-kommando
    </button>
    <a href="https://github.com/viavidk/forge" target="_blank" rel="noopener" class="btn bs_">GitHub ↗</a>
    <a href="#trin" class="btn bs_">Se trinene ↑</a>
  </div>
</div>

</div><!-- /page -->

<script type="module">
import{animate}from'https://cdn.jsdelivr.net/npm/motion@11/+esm';
// Hero count-up — starts after h1 entrance animation (0.2s delay + ~0.5s spring = ~0.9s)
var heroCount=document.getElementById('hero-count');
if(heroCount){
  setTimeout(function(){
    animate(0,10,{duration:1.4,ease:'easeOut',onUpdate:function(v){
      heroCount.textContent=Math.round(v);
    }});
  },900);
}
</script>
<script>
// Scroll reveal
var obs=new IntersectionObserver(e=>{
  e.forEach(entry=>{
    if(!entry.isIntersecting) return;
    const el=entry.target;
    el.classList.add('v');
    if(el.classList.contains('stag')){
      Array.from(el.children).forEach((c,i)=>{
        c.style.transitionDelay=(i*.09)+'s';
        c.style.opacity='1';
        c.style.transform='none';
      });
    }
    obs.unobserve(el);
  });
},{threshold:.1});
document.querySelectorAll('.fu2,.stag').forEach((el,i)=>{
  if(!el.classList.contains('stag') && !el.style.transitionDelay)
    el.style.transitionDelay=((i%5)*.06)+'s';
  obs.observe(el);
});

// Accordion
function toggleAccord(id){
  document.getElementById(id).classList.toggle('open');
}

// Copy helpers
function copyLine(btn,text){
  navigator.clipboard.writeText(text).then(()=>flashOk(btn));
}
function copyPre(btn){
  const pre=btn.closest('.code-wrap').querySelector('.copy-target');
  navigator.clipboard.writeText(pre.textContent.trim()).then(()=>flashOk(btn));
}
function copyInstall(btn){
  navigator.clipboard.writeText('curl -fsSL https://raw.githubusercontent.com/viavidk/forge/main/install.sh | bash').then(()=>flashOk(btn));
}
function flashOk(btn){
  const orig=btn.textContent;
  btn.textContent='✓ Kopieret';
  btn.classList.add('ok');
  setTimeout(()=>{btn.textContent=orig;btn.classList.remove('ok');},2200);
}

// Hero dot-matrix particle field — WebGL via Three.js (initialiseres som ESM nedenfor)
</script>

<script type="module">
import { initHeroParticleField } from './assets/js/hero-particle-field.js?v=<?= FORGE_VERSION ?>-wave';
var hc = document.getElementById('hc');
if (hc) {
  window.__heroParticles = initHeroParticleField(hc);
  // Eksponeret på window for cleanup ved SPA-navigation eller dev-verifikation
}
</script>
