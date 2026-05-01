<main>

  <!-- HERO -->
  <section class="cc-hero fu">
    <div class="eyebrow">Feltrapport · april 2026</div>
    <h1>Claude Code <span class="gb">i praksis</span></h1>
    <p class="lead">
      Claude Code er ikke bare en AI der skriver kode — det er en medarbejder du kan sætte i gang, give regler,
      og lade arbejde videre mens du laver noget andet. Her er de funktioner der flytter mest i hverdagen,
      forklaret uden jargon.
    </p>
  </section>

  <!-- 01 MODELLER -->
  <section class="cc-sec fu">
    <div class="cc-sec-head">
      <div class="cc-sec-label">01 · Modeller &amp; tænkning</div>
      <h2>Lad Opus planlægge. Lad Sonnet skrive.</h2>
      <p class="cc-intro">
        Opus er den kloge, eftertænksomme. Sonnet er den hurtige, praktiske.
        Du vinder mest ved at lade dem arbejde sammen — den kloge lægger planen,
        den hurtige gør arbejdet.
      </p>
    </div>

    <div class="mgrid stag">
      <div class="mcard">
        <div class="mlabel">Planlæggeren</div>
        <div class="model">Opus</div>
        <div class="use">Til de opgaver hvor du har brug for gennemtænkte beslutninger og en god plan.</div>
      </div>
      <div class="mcard">
        <div class="mlabel">Byggeren</div>
        <div class="model">Sonnet</div>
        <div class="use">Til selve arbejdet — skrive, ændre, bygge. Hurtig og billig.</div>
      </div>
      <div class="mcard highlight">
        <div class="mlabel">Kombineret</div>
        <div class="model"><span class="cc-cmd">/model opusplan</span></div>
        <div class="use">Én kommando der lader Opus planlægge og Sonnet bygge — helt automatisk. Det bedste af begge verdener.</div>
      </div>
    </div>

    <div class="cc-callout">
      <div class="k">Sådan gør du</div>
      <p>Åbn Claude Code. Skriv <code style="font-family:'Geist Mono',monospace;color:var(--accent)">/model opusplan</code>.
      Beskriv hvad du vil have lavet. Claude laver først en plan — du godkender —
      derefter bliver arbejdet gjort. Ingen overraskelser.</p>
    </div>
  </section>

  <div class="cc-div"></div>

  <!-- 02 DAGLIGE KOMMANDOER -->
  <section class="cc-sec fu">
    <div class="cc-sec-head">
      <div class="cc-sec-label">02 · Daglige kommandoer</div>
      <h2>De seks små genveje der flytter noget</h2>
      <p class="cc-intro">Seks små kommandoer der gør hverdagen nemmere. De fleste handler om at fjerne afbrydelser,
        så du kan arbejde i fred — og få mere ud af Claude med mindre besvær.</p>
    </div>

    <div class="cc-grid g2 stag">
      <div class="lcard">
        <div class="ficon">🔍</div>
        <div class="card-title"><span class="cc-cmd">/ultrareview</span> <span class="cc-badge bbrand">ny</span> <button class="cbtn" onclick="copyCmd(this,'/ultrareview')">Kopiér</button></div>
        <p class="card-desc">Sender dit arbejde til et helt panel af AI-kolleger der hver især gennemgår det
          for fejl og forbedringer. Meget mere grundigt end én enkelt review.</p>
      </div>
      <div class="lcard">
        <div class="ficon">🔓</div>
        <div class="card-title"><span class="cc-cmd">/fewer-permission-prompts</span> <span class="cc-badge bbrand">ny</span> <button class="cbtn" onclick="copyCmd(this,'/fewer-permission-prompts')">Kopiér</button></div>
        <p class="card-desc">Claude lærer hvad du altid siger ja til, og holder op med at spørge om det.
          Men den spørger stadig når noget kunne være farligt.</p>
      </div>
      <div class="lcard">
        <div class="ficon">🖥️</div>
        <div class="card-title"><span class="cc-cmd">/tui fullscreen</span> <button class="cbtn" onclick="copyCmd(this,'/tui fullscreen')">Kopiér</button></div>
        <p class="card-desc">En renere, roligere skærm under lange sessioner. Ingen visuelle spring,
          ingen blink — bare samtalen.</p>
      </div>
      <div class="lcard">
        <div class="ficon">🎯</div>
        <div class="card-title"><span class="cc-cmd">/focus</span> <button class="cbtn" onclick="copyCmd(this,'/focus')">Kopiér</button></div>
        <p class="card-desc">Skjuler alle tekniske detaljer. Du ser kun dit spørgsmål og det færdige svar.
          Som når en kok laver maden i køkkenet, men du kun ser den færdige tallerken komme ud.</p>
      </div>
      <div class="lcard">
        <div class="ficon">📋</div>
        <div class="card-title"><span class="cc-cmd">/recap</span> <button class="cbtn" onclick="copyCmd(this,'/recap')">Kopiér</button></div>
        <p class="card-desc">Et kort resume af hvad I har arbejdet på i dagens samtale. Nyttigt når du har
          været i gang længe og trænger til at få overblikket tilbage.</p>
      </div>
      <div class="lcard">
        <div class="ficon">👥</div>
        <div class="card-title"><span class="cc-cmd">/team-onboarding</span> <button class="cbtn" onclick="copyCmd(this,'/team-onboarding')">Kopiér</button></div>
        <p class="card-desc">Kigger på hvordan du selv arbejder, og laver en velkomst-guide til nye kolleger.
          Det der plejer at tage uger af Slack-beskeder og pairing, kommer de i gang med på minutter.</p>
      </div>
    </div>
  </section>

  <div class="cc-div"></div>

  <!-- 03 REMOTE CONTROL -->
  <section class="cc-sec fu">
    <div class="cc-sec-head">
      <div class="cc-sec-label">03 · Mobil styring</div>
      <h2>Styr din computer fra mobilen</h2>
      <p class="cc-intro">Start en opgave ved skrivebordet. Luk laptoppen. Fortsæt fra sofaen — eller fra toget.
        Din kode bliver på din computer hele tiden. Kun beskederne går gennem mobilen.</p>
    </div>

    <div class="cc-steps stag">
      <div class="cc-step">
        <div class="step-n">01</div>
        <div>
          <div class="step-t">Start en mobilsession</div>
          <div class="step-d">Skriv <code>claude remote-control</code> i din terminal — eller <code>/rc</code> hvis du allerede er i gang. Der kommer en QR-kode frem.</div>
        </div>
      </div>
      <div class="cc-step">
        <div class="step-n">02</div>
        <div>
          <div class="step-t">Scan med Claude-appen</div>
          <div class="step-d">Åbn Claude-appen på din mobil (samme konto som på din computer). Scan QR-koden. Forbindelsen er oprettet.</div>
        </div>
      </div>
      <div class="cc-step">
        <div class="step-n">03</div>
        <div>
          <div class="step-t">Slå notifikationer til</div>
          <div class="step-d">Skriv <code>/config</code> og aktivér <b>Push-beskeder</b>. Så får du besked på mobilen når Claude er færdig med en lang opgave.</div>
        </div>
      </div>
      <div class="cc-step">
        <div class="step-n">04</div>
        <div>
          <div class="step-t">Husk: din computer skal være tændt</div>
          <div class="step-d">Arbejdet foregår på din egen maskine. Lukker du helt ned, stopper sessionen. Men du kan sagtens lukke skærmen og gå væk — så længe computeren ikke går i dvale.</div>
        </div>
      </div>
    </div>
  </section>

  <div class="cc-div"></div>

  <!-- 04 AVANCEREDE -->
  <section class="cc-sec fu">
    <div class="cc-sec-head">
      <div class="cc-sec-label">04 · Avancerede funktioner</div>
      <h2>Her ligger gearene</h2>
      <p class="cc-intro">Det der løfter Claude fra en almindelig assistent til en rigtig medarbejder.
        Hvis du vil automatisere noget af din hverdag, er det her du skal kigge.</p>
    </div>

    <div class="cc-grid g2 stag">
      <div class="fcard">
        <div class="ficon">📐</div>
        <div class="card-title">Plan Mode</div>
        <p class="card-desc">Claude viser dig sin plan før den ændrer noget — ligesom en håndværker der først viser tegningen.
          Du siger ja, nej, eller "prøv noget andet". Ingen overraskelser.</p>
      </div>
      <div class="fcard">
        <div class="ficon">🪝</div>
        <div class="card-title">Faste regler</div>
        <p class="card-desc">Sæt regler op én gang, så følger Claude dem automatisk. Som din opvaskemaskine der selv
          starter tørring efter vask. Fx: tjek altid stavning når en fil gemmes.</p>
      </div>
      <div class="fcard">
        <div class="ficon">⏱️</div>
        <div class="card-title">Tidsplan</div>
        <p class="card-desc">Bed Claude om at gøre noget på bestemte tidspunkter eller med faste mellemrum.
          Som en kalender-påmindelse — men i stedet for at minde dig om det, laver den selv arbejdet.</p>
      </div>
      <div class="fcard">
        <div class="ficon">☁️</div>
        <div class="card-title">Sky-medarbejdere <span class="cc-badge bnew">Ny</span></div>
        <p class="card-desc">Det samme som tidsplan, men arbejdet sker oppe i skyen. Din computer må være slukket —
          opgaven bliver løst alligevel. Som en kollega der møder på kontoret selvom du har fri.</p>
      </div>
      <div class="fcard">
        <div class="ficon">🤖</div>
        <div class="card-title">Auto-mode <span class="cc-badge bbrand">Max plan</span></div>
        <p class="card-desc">Claude får lov at træffe små beslutninger selv uden at spørge. Som når du siger til en kollega:
          "Du må bestille småting uden at spørge — ring hvis det bliver stort." Færre afbrydelser, mere flow.</p>
      </div>
      <div class="fcard">
        <div class="ficon">🧩</div>
        <div class="card-title">Specialist-hjælpere</div>
        <p class="card-desc">Claude kan have små hjælpere med hver deres speciale — én tjekker kvalitet, én skriver tekst,
          én holder styr på data. Den dygtigste og dyreste bliver kun brugt når der virkelig er brug for hende.</p>
      </div>
    </div>
  </section>

  <div class="cc-div"></div>

  <!-- 05 .CLAUDE/ STRUKTUR -->
  <section class="cc-sec fu">
    <div class="cc-sec-head">
      <div class="cc-sec-label">05 · .claude/-mappen</div>
      <h2>Hvor Claude lærer dit projekt at kende</h2>
      <p class="cc-intro">Hvert projekt får en <code>.claude/</code>-mappe der fortæller Claude hvordan din stack ser ud, hvilke regler der gælder, og hvilke specialister den kan kalde p&aring;. Forge fylder den hele op for dig — men du kan ogs&aring; selv tilf&oslash;je flere.</p>
    </div>

    <div class="cc-grid g2 stag">
      <div class="fcard">
        <div class="ficon">⚙️</div>
        <div class="card-title">.claude/settings.json</div>
        <p class="card-desc">Projekt-konfiguration. Her st&aring;r hvilke plugins der er aktive (<code>enabledPlugins</code>), hvilke marketplaces Claude tjekker (<code>extraKnownMarketplaces</code>), og hvilke hooks der er sat op. Forge sætter Superpowers op her automatisk.</p>
      </div>
      <div class="fcard">
        <div class="ficon">🤖</div>
        <div class="card-title">.claude/agents/*.md</div>
        <p class="card-desc">Specialiserede sub-agenter. Hver fil er en agent med eget ekspertise-omr&aring;de — fx <code>db-reviewer.md</code> eller <code>security-auditor.md</code>. Claude kalder dem via Task-v&aelig;rkt&oslash;jet n&aring;r en opgave matcher.</p>
      </div>
      <div class="fcard">
        <div class="ficon">⚡</div>
        <div class="card-title">.claude/skills/*/</div>
        <p class="card-desc">Auto-trigger workflows. Mappe per skill med en <code>SKILL.md</code> der beskriver triggers og handling. Eksempel: <code>pre-commit</code>-skill k&oslash;rer review n&aring;r du siger "klar til commit".</p>
      </div>
      <div class="fcard">
        <div class="ficon">📋</div>
        <div class="card-title">.claude/commands/*.md</div>
        <p class="card-desc">Dine egne slash-kommandoer. Læg en fil ind, og <code>/<filnavn></code> bliver tilg&aelig;ngeligt i Claude Code. Forge giver dig <code>/project:review</code>, <code>/project:fix-issue</code>, <code>/project:deploy</code> og flere.</p>
      </div>
      <div class="fcard">
        <div class="ficon">📐</div>
        <div class="card-title">.claude/rules/*.md</div>
        <p class="card-desc">Altid-aktive regler Claude læser ved hver samtale. Forge inkluderer <code>code-style.md</code>, <code>database.md</code>, <code>testing.md</code> m.fl. — s&aring; review-agenterne har et fælles regelsæt at scoren mod.</p>
      </div>
      <div class="fcard">
        <div class="ficon">📖</div>
        <div class="card-title">CLAUDE.md (i projektrod)</div>
        <p class="card-desc">Projektets manual. Stack, struktur, konventioner, agent-orkestrering. Loader automatisk ved hver samtale — s&aring; Claude ved hvor du er fra sekund &eacute;t. Hold den opdateret manuelt eller via <code>document</code>-skill'en.</p>
      </div>
    </div>

    <div class="cc-callout">
      <div class="k">Praktisk tip</div>
      <p>Du kan kopiere agents og skills mellem projekter — det er bare <code>.md</code>-filer. Hav et "min favorit-agents"-bibliotek og dr&aelig;n det ind n&aring;r du starter et nyt projekt.</p>
    </div>
  </section>

  <div class="cc-div"></div>

  <!-- 06 SUPERPOWERS -->
  <section class="cc-sec fu">
    <div class="cc-sec-head">
      <div class="cc-sec-label">06 · Superpowers plugin</div>
      <h2>Disciplineret workflow før kode</h2>
      <p class="cc-intro">Claude vil gerne springe lige til kode. Superpowers tvinger den igennem en disciplineret flow f&oslash;rst — Clarify, Design, Plan, Code, Verify. Det f&oslash;les langsommere de f&oslash;rste 30 sekunder, men sparer ofte 30 minutters debugging. Plugin af Jesse Vincent (MIT licens), inkluderet automatisk i Forge.</p>
    </div>

    <div class="cc-grid g2 stag" style="grid-template-columns:repeat(5,1fr);gap:8px">
      <div style="background:linear-gradient(135deg,rgba(167,139,250,.08),rgba(167,139,250,.02));border:1px solid rgba(167,139,250,.25);border-radius:10px;padding:16px;text-align:center">
        <div style="font-family:'Geist Mono',monospace;font-size:10px;color:#a78bfa;text-transform:uppercase;letter-spacing:.12em;margin-bottom:8px">1. Clarify</div>
        <p style="font-size:12px;color:var(--ts);line-height:1.55;margin:0">Socratic sp&oslash;rgsm&aring;l f&oslash;r noget kode skrives</p>
      </div>
      <div style="background:linear-gradient(135deg,rgba(167,139,250,.08),rgba(167,139,250,.02));border:1px solid rgba(167,139,250,.25);border-radius:10px;padding:16px;text-align:center">
        <div style="font-family:'Geist Mono',monospace;font-size:10px;color:#a78bfa;text-transform:uppercase;letter-spacing:.12em;margin-bottom:8px">2. Design</div>
        <p style="font-size:12px;color:var(--ts);line-height:1.55;margin:0">Foresl&aring;r arkitektur f&oslash;r implementation</p>
      </div>
      <div style="background:linear-gradient(135deg,rgba(167,139,250,.08),rgba(167,139,250,.02));border:1px solid rgba(167,139,250,.25);border-radius:10px;padding:16px;text-align:center">
        <div style="font-family:'Geist Mono',monospace;font-size:10px;color:#a78bfa;text-transform:uppercase;letter-spacing:.12em;margin-bottom:8px">3. Plan</div>
        <p style="font-size:12px;color:var(--ts);line-height:1.55;margin:0">Bryder arbejdet op i bid-st&oslash;rrelser med TDD</p>
      </div>
      <div style="background:linear-gradient(135deg,rgba(167,139,250,.08),rgba(167,139,250,.02));border:1px solid rgba(167,139,250,.25);border-radius:10px;padding:16px;text-align:center">
        <div style="font-family:'Geist Mono',monospace;font-size:10px;color:#a78bfa;text-transform:uppercase;letter-spacing:.12em;margin-bottom:8px">4. Code</div>
        <p style="font-size:12px;color:var(--ts);line-height:1.55;margin:0">Skriver test f&oslash;rst, derefter implementation</p>
      </div>
      <div style="background:linear-gradient(135deg,rgba(167,139,250,.08),rgba(167,139,250,.02));border:1px solid rgba(167,139,250,.25);border-radius:10px;padding:16px;text-align:center">
        <div style="font-family:'Geist Mono',monospace;font-size:10px;color:#a78bfa;text-transform:uppercase;letter-spacing:.12em;margin-bottom:8px">5. Verify</div>
        <p style="font-size:12px;color:var(--ts);line-height:1.55;margin:0">Code-reviewer agent validerer mod planen</p>
      </div>
    </div>

    <div class="cc-grid g2 stag" style="margin-top:24px">
      <div class="fcard">
        <div class="ficon">🧠</div>
        <div class="card-title">14 skills i pakken</div>
        <p class="card-desc">brainstorming, writing-plans, executing-plans, subagent-driven-development, using-git-worktrees, systematic-debugging, verification-before-completion, writing-skills, red-green-refactor, root-cause-tracing, defense-in-depth, condition-based-waiting, plus en code-reviewer subagent. Hver med en specifik trigger.</p>
      </div>
      <div class="fcard">
        <div class="ficon">🚀</div>
        <div class="card-title">Auto-installeres af Forge</div>
        <p class="card-desc">Forge sætter <code>obra/superpowers-marketplace</code> op i <code>.claude/settings.json</code> n&aring;r du v&aelig;lger "Fuld pakke" eller "Kun Superpowers" i Trin 8. F&oslash;rste gang du &aring;bner projektet med <code>claude</code>, henter Claude Code plugin'et automatisk.</p>
      </div>
      <div class="fcard">
        <div class="ficon">⏭️</div>
        <div class="card-title">Skip n&aring;r det er trivielt</div>
        <p class="card-desc">For sm&aring; opgaver kan du sige "skip clarify" eller "just fix this". Disciplinen er v&aelig;rdifuld for komplekse features — ikke for "ret typo".</p>
      </div>
      <div class="fcard">
        <div class="ficon">📦</div>
        <div class="card-title">Manuel installation</div>
        <p class="card-desc">Bruger du ikke Forge? Tilf&oslash;j <code>{"url":"https://github.com/obra/superpowers-marketplace"}</code> til <code>extraKnownMarketplaces</code> i din <code>.claude/settings.json</code>, og tilf&oslash;j <code>"superpowers"</code> til <code>enabledPlugins</code>.</p>
      </div>
    </div>

    <div class="cc-callout">
      <div class="k">Forfatter og kilde</div>
      <p>Jesse Vincent (<a href="https://github.com/obra/superpowers" target="_blank" rel="noopener" style="color:var(--accent);text-decoration:none">obra/superpowers</a>). MIT licens. Marketplace: <code>obra/superpowers-marketplace</code>.</p>
    </div>
  </section>

  <div class="cc-div"></div>

  <!-- 07 MCPs -->
  <section class="cc-sec fu">
    <div class="cc-sec-head">
      <div class="cc-sec-label">07 · MCP-servere</div>
      <h2>Værktøjer der udvider Claude</h2>
      <p class="cc-intro">MCP (Model Context Protocol) er m&aring;den eksterne v&aelig;rkt&oslash;jer kobles til Claude p&aring;. Live-dokumentation, browser-kontrol, vidensbiblioteker, dit eget filsystem — alt optr&aelig;der som tools Claude kan kalde direkte. Forge sætter de mest nyttige op for dig.</p>
    </div>

    <div class="cc-grid g2 stag">
      <div class="fcard">
        <div class="ficon">📚</div>
        <div class="card-title">context7</div>
        <p class="card-desc">Live, versions-n&oslash;jagtig dokumentation for biblioteker og frameworks. I stedet for at Claude gætter p&aring; udd&aring;dede API'er, sl&aring;r den den faktiske aktuelle dokumentation op. Forge install&eacute;rer denne automatisk hvis du svarer Y i Trin 7.</p>
      </div>
      <div class="fcard">
        <div class="ficon">🔬</div>
        <div class="card-title">chrome-devtools</div>
        <p class="card-desc">Direkte adgang til Chrome via DevTools Protocol. Claude kan navigere, klikke, se konsollogs, tage screenshots — perfekt til E2E-tests og UI-debugging. Bruges af Forge's <code>browser-tester</code>-agent.</p>
      </div>
      <div class="fcard">
        <div class="ficon">🎯</div>
        <div class="card-title">viavi-skills</div>
        <p class="card-desc">Elkj&oslash;p Nordic's interne skill-bibliotek. Team-specifikke patterns, brand-guides og domain-viden — leveret som MCP-tools. Kr&aelig;ver token fra <a href="https://app.viavi.dk/skills" style="color:var(--accent);text-decoration:none">app.viavi.dk/skills</a>.</p>
      </div>
      <div class="fcard">
        <div class="ficon">🖥️</div>
        <div class="card-title">wcgw</div>
        <p class="card-desc">Forbinder Claude Desktop p&aring; Windows til WSL. Lader Claude skrive og k&oslash;re kommandoer i dit Linux-milj&oslash;. Perfekt n&aring;r du arbejder i Claude Desktop og ikke kun terminalen. Konfigureres &eacute;n gang per maskine.</p>
      </div>
    </div>

    <div class="cc-callout">
      <div class="k">Konfiguration</div>
      <p>Project-niveau MCPs lever i <code>.mcp.json</code> i projektroden. User-niveau (globale) lever i <code>~/.claude.json</code>. Forge sætter automatisk projekt-MCPs op baseret p&aring; Trin 7 i Guided mode.</p>
    </div>
  </section>

  <div class="cc-div"></div>

  <!-- 08 KOM I GANG -->
  <section class="cc-sec fu">
    <div class="cc-sec-head">
      <div class="cc-sec-label">08 · Anbefalet rækkefølge</div>
      <h2>Sådan kommer du i gang</h2>
      <p class="cc-intro">Har du en time til at forbedre dit setup? Tag de fem trin i denne rækkefølge.
        Hvert trin giver dig noget du mærker med det samme — og gør det næste trin nemmere.</p>
    </div>

    <div class="cc-steps stag">

      <div class="cc-step">
        <div class="step-n">01</div>
        <div>
          <div class="step-t">Lad to modeller arbejde sammen</div>
          <div class="step-d">Du får samme opgave løst — men hurtigere og billigere — ved at lade den kloge tænke og den hurtige bygge.</div>
          <div class="ba">
            <div class="ba-col before">
              <div class="ba-label">Før</div>
              <p>Én model gør det hele — også det simple arbejde.</p>
              <ul>
                <li>Langsommere end nødvendigt</li>
                <li>Dyrere end nødvendigt</li>
                <li>Rammer grænsen på din plan tidligere</li>
              </ul>
            </div>
            <div class="ba-col after">
              <div class="ba-label">Efter</div>
              <p>Claude deler automatisk opgaven op.</p>
              <ul>
                <li>Den kloge model lægger planen</li>
                <li>Den hurtige model bygger løsningen</li>
                <li>Bedre kvalitet til lavere pris</li>
              </ul>
            </div>
          </div>
          <div class="try">
            <span class="try-label">Skriv i Claude Code</span>
            <span class="try-cmd">/model opusplan</span>
          </div>
        </div>
      </div>

      <div class="cc-step">
        <div class="step-n">02</div>
        <div>
          <div class="step-t">Færre afbrydelser</div>
          <div class="step-d">Claude lærer hvad du altid siger ja til, og holder op med at spørge om det. Men den spørger stadig når noget er farligt.</div>
          <div class="ba">
            <div class="ba-col before">
              <div class="ba-label">Før</div>
              <p>Du bliver afbrudt hele tiden:</p>
              <ul>
                <li>"Må jeg læse denne fil?"</li>
                <li>"Må jeg tjekke mappen?"</li>
                <li>"Må jeg se hvad der står her?"</li>
              </ul>
              <p style="margin-top:10px;color:var(--tm);font-size:12.5px">…30 gange på en time.</p>
            </div>
            <div class="ba-col after">
              <div class="ba-label">Efter</div>
              <p>Claude arbejder uden at afbryde dig.</p>
              <ul>
                <li>Rutine-spørgsmål: svaret er automatisk ja</li>
                <li>Farlige ting (slet, ændr): du bliver spurgt</li>
                <li>Du holder dit flow</li>
              </ul>
            </div>
          </div>
          <div class="try">
            <span class="try-label">Skriv i Claude Code</span>
            <span class="try-cmd">/less-permission-prompts</span>
          </div>
        </div>
      </div>

      <div class="cc-step">
        <div class="step-n">03</div>
        <div>
          <div class="step-t">Få tegningen før hullet</div>
          <div class="step-d">Som en håndværker der først viser dig sin tegning, beskriver Claude hele planen før den ændrer noget. Du godkender — eller afviser — uden at noget er blevet lavet om endnu.</div>
          <div class="scene">
            <div class="scene-label">Sådan føles det</div>
            <p class="you">"Flyt vores kundeoversigt over på den nye platform, og sørg for vi har en backup af det gamle system."</p>
            <div class="claude-block">
              <div class="claude-label">Claude svarer</div>
              <p>Her er min plan:</p>
              <ol>
                <li>Lav en backup af kundelisten som den er nu</li>
                <li>Flyt data over, felt for felt</li>
                <li>Tjek at alt er kommet med korrekt</li>
                <li>Giv dig en rapport over resultatet</li>
              </ol>
              <p>Det tager omkring 3–4 minutter. Skal jeg starte?</p>
            </div>
            <p style="color:var(--ts);font-size:13.5px">Du kan sige ja, nej, eller "prøv noget andet" — uden at en eneste fil er blevet rørt.</p>
          </div>
          <div class="try">
            <span class="try-label">Tryk disse taster</span>
            <span class="try-cmd"><kbd class="kbd">Shift</kbd> + <kbd class="kbd">Tab</kbd></span>
            <span style="font-size:12px;color:var(--tm);font-family:'Geist Mono',monospace">(for at slå Plan Mode til)</span>
          </div>
        </div>
      </div>

      <div class="cc-step">
        <div class="step-n">04</div>
        <div>
          <div class="step-t">Sæt nogle faste regler op</div>
          <div class="step-d">Ligesom din opvaskemaskine selv starter tørringen efter vasken, kan Claude følge regler du har sat op én gang — og så kører det bagefter.</div>
          <div class="scene">
            <div class="scene-label">Eksempler på regler</div>
            <p style="color:var(--ts);font-size:13.5px;margin-bottom:14px">Du sætter reglerne op én gang. Herefter følger Claude dem automatisk.</p>
            <div style="display:flex;flex-direction:column;gap:10px">
              <div style="padding:12px 14px;border-radius:8px;background:var(--base);border:1px solid var(--bs)">
                <p style="font-size:13.5px;margin:0"><b style="color:var(--accent)">Når</b> Claude ændrer en fil <b style="color:var(--accent2)">→</b> tjek automatisk for fejl</p>
              </div>
              <div style="padding:12px 14px;border-radius:8px;background:var(--base);border:1px solid var(--bs)">
                <p style="font-size:13.5px;margin:0"><b style="color:var(--accent)">Når</b> Claude er færdig med en opgave <b style="color:var(--accent2)">→</b> send mig en besked på Teams</p>
              </div>
              <div style="padding:12px 14px;border-radius:8px;background:var(--base);border:1px solid var(--bs)">
                <p style="font-size:13.5px;margin:0"><b style="color:var(--accent)">Før</b> Claude starter på noget nyt <b style="color:var(--accent2)">→</b> læs vores vidensbase først</p>
              </div>
            </div>
          </div>
          <div class="try">
            <span class="try-label">Sig det til Claude</span>
            <span class="try-cmd">"Lav en regel: Send mig en besked på Teams hver gang du er færdig med en opgave"</span>
          </div>
        </div>
      </div>

      <div class="cc-step">
        <div class="step-n">05</div>
        <div>
          <div class="step-t">Din dag starter før du gør</div>
          <div class="step-d">Claude kan arbejde for dig oppe i skyen — også når din computer er slukket, også mens du sover. Perfekt til opgaver der skal ske på faste tidspunkter.</div>
          <div class="scene">
            <div class="scene-label">Et realistisk scenarie</div>
            <p>Du sætter Claude op til at møde på arbejde hver morgen kl. 8 — også weekender, også mens du sover.</p>
            <div class="claude-block">
              <div class="claude-label">Hver morgen kl. 08:00</div>
              <p>Claude tjekker hvad der er sket natten over:</p>
              <ul>
                <li>Nye tickets i Jira</li>
                <li>Vigtige kundehenvendelser</li>
                <li>Fejl eller advarsler i systemet</li>
              </ul>
              <p>Samler det i et kort overblik og sender det til dig på Teams.</p>
            </div>
            <p style="color:var(--ts);font-size:13.5px">Din egen computer kan være helt slukket. Det er ligesom at have en kollega der altid møder tidligere end dig — og har overblikket klar når du tænder maskinen.</p>
          </div>
          <div class="try">
            <span class="try-label">Sig det til Claude</span>
            <span class="try-cmd">"Sæt en daglig opgave op: Hver morgen kl. 8 — tjek nye Jira-tickets og send mig et overblik på Teams"</span>
          </div>
        </div>
      </div>

      <div class="cc-step">
        <div class="step-n">06</div>
        <div>
          <div class="step-t">Tilf&oslash;j Superpowers (anbefalet for komplekse projekter)</div>
          <div class="step-d">Plugin der tvinger Claude igennem en disciplineret workflow f&oslash;r kode skrives — Clarify, Design, Plan, Code, Verify. Sparer ofte 30 minutters debugging for 30 sekunders Clarify. Hvis du bruger Forge, er det allerede installeret.</div>
          <div class="ba">
            <div class="ba-col before">
              <div class="ba-label">Før</div>
              <p>Claude springer lige til kode:</p>
              <ul>
                <li>Misforst&aring;r krav i 1. fors&oslash;g</li>
                <li>Bygger forkert l&oslash;sning</li>
                <li>Du fanger fejlen sent</li>
                <li>Tilbage til start &mdash; debug i timevis</li>
              </ul>
            </div>
            <div class="ba-col after">
              <div class="ba-label">Efter</div>
              <p>Claude clarifier &rarr; designer &rarr; planlægger &rarr; bygger &rarr; verificerer:</p>
              <ul>
                <li>Spr&oslash;ger om uklarheder f&oslash;r kode</li>
                <li>Foresl&aring;r arkitektur du godkender</li>
                <li>TDD-disciplin under bygning</li>
                <li>Code-reviewer subagent validerer mod planen</li>
              </ul>
            </div>
          </div>
          <div class="try">
            <span class="try-label">Manuel installation (uden Forge)</span>
            <span class="try-cmd">Tilf&oslash;j <code style="font-family:'Geist Mono',monospace;color:var(--accent)">{"url":"https://github.com/obra/superpowers-marketplace"}</code> til <code style="font-family:'Geist Mono',monospace;color:var(--accent)">extraKnownMarketplaces</code> i <code style="font-family:'Geist Mono',monospace;color:var(--accent)">.claude/settings.json</code></span>
          </div>
        </div>
      </div>

    </div>

    <div class="cc-callout">
      <div class="k">Næste skridt</div>
      <p>Start med trin 01 i dag. Du mærker forskellen med det samme. De n&aelig;ste trin kan du tage
      n&aring;r du har lyst — de bygger ovenp&aring; hinanden, men hvert trin giver v&aelig;rdi i sig selv. Trin 06 (Superpowers) er s&aelig;rligt v&aelig;rdifuldt for komplekse projekter.</p>
    </div>
  </section>

  <div class="cc-div"></div>

  <!-- 09 COMMANDS OG SKILLS -->
  <section class="cc-sec fu">
    <div class="cc-sec-head">
      <div class="cc-sec-label">09 · Reference</div>
      <h2>Commands og skills</h2>
      <p class="cc-intro">Alle kommandoer og automatiseringer fra denne side samlet på ét sted. Fold ud og brug som opslagstavle.</p>
    </div>

    <div class="accord" id="acc-commands">
      <div class="accord-hd" onclick="toggleAccord('acc-commands')">
        <div>
          <div class="accord-htitle">Commands og skills — komplet oversigt</div>
          <div class="accord-hsub">Kommandoer · Tastaturgenveje · Automatiseringer · Mobilstyring</div>
        </div>
        <div class="accord-ico">
          <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
        </div>
      </div>
      <div class="accord-body">

        <div class="cmd-group">
          <div class="cmd-group-title">Daglige kommandoer</div>
          <div class="cmd-rows">
            <div class="cmd-row">
              <span class="cr-cmd">/model opusplan</span>
              <span class="cr-desc">Lader Opus planlægge og Sonnet bygge automatisk — bedste kvalitet til laveste pris.</span>
              <button class="cbtn" onclick="copyCmd(this,'/model opusplan')">Kopiér</button>
            </div>
            <div class="cmd-row">
              <span class="cr-cmd">/ultrareview</span>
              <span class="cr-desc">Sender dit arbejde til et panel af AI-kolleger der gennemgår det parallelt for fejl og forbedringer.</span>
              <button class="cbtn" onclick="copyCmd(this,'/ultrareview')">Kopiér</button>
            </div>
            <div class="cmd-row">
              <span class="cr-cmd">/less-permission-prompts</span>
              <span class="cr-desc">Reducerer afbrydelser — Claude lærer hvad du altid siger ja til og stopper med at spørge om det.</span>
              <button class="cbtn" onclick="copyCmd(this,'/less-permission-prompts')">Kopiér</button>
            </div>
            <div class="cmd-row">
              <span class="cr-cmd">/tui fullscreen</span>
              <span class="cr-desc">Renere og roligere skærm til lange sessioner — ingen visuelle spring eller blink.</span>
              <button class="cbtn" onclick="copyCmd(this,'/tui fullscreen')">Kopiér</button>
            </div>
            <div class="cmd-row">
              <span class="cr-cmd">/focus</span>
              <span class="cr-desc">Skjuler alle tekniske detaljer — du ser kun dit spørgsmål og det færdige svar.</span>
              <button class="cbtn" onclick="copyCmd(this,'/focus')">Kopiér</button>
            </div>
            <div class="cmd-row">
              <span class="cr-cmd">/recap</span>
              <span class="cr-desc">Kort resume af hvad I har arbejdet på i dagens samtale — giver overblikket tilbage.</span>
              <button class="cbtn" onclick="copyCmd(this,'/recap')">Kopiér</button>
            </div>
            <div class="cmd-row">
              <span class="cr-cmd">/team-onboarding</span>
              <span class="cr-desc">Analyserer din arbejdsmåde og laver en velkomst-guide til nye kolleger på minutter.</span>
              <button class="cbtn" onclick="copyCmd(this,'/team-onboarding')">Kopiér</button>
            </div>
            <div class="cmd-row">
              <span class="cr-cmd">/config</span>
              <span class="cr-desc">Åbner indstillinger — aktivér push-beskeder til mobilen her.</span>
              <button class="cbtn" onclick="copyCmd(this,'/config')">Kopiér</button>
            </div>
          </div>
        </div>

        <div class="cmd-group">
          <div class="cmd-group-title">Mobilstyring</div>
          <div class="cmd-rows">
            <div class="cmd-row">
              <span class="cr-cmd">claude remote-control</span>
              <span class="cr-desc">Starter en mobilsession fra terminalen — viser QR-kode til scanning med Claude-appen.</span>
              <button class="cbtn" onclick="copyCmd(this,'claude remote-control')">Kopiér</button>
            </div>
            <div class="cmd-row">
              <span class="cr-cmd">/rc</span>
              <span class="cr-desc">Kortform for remote-control — brug denne når du allerede er inde i Claude Code.</span>
              <button class="cbtn" onclick="copyCmd(this,'/rc')">Kopiér</button>
            </div>
          </div>
        </div>

        <div class="cmd-group">
          <div class="cmd-group-title">Tastaturgenveje</div>
          <div class="cmd-rows">
            <div class="cmd-row" style="grid-template-columns:220px 1fr">
              <span class="cr-cmd"><kbd class="kbd">Shift</kbd> + <kbd class="kbd">Tab</kbd></span>
              <span class="cr-desc">Slår Plan Mode til og fra — Claude viser sin plan og venter på din godkendelse før noget ændres.</span>
            </div>
          </div>
        </div>

        <div class="cmd-group">
          <div class="cmd-group-title">Skills og automatiseringer</div>
          <div class="skill-rows">
            <div class="skill-row">
              <div class="sr-title">Plan Mode</div>
              <div class="sr-trigger">Aktiver: <kbd class="kbd">Shift</kbd> + <kbd class="kbd">Tab</kbd></div>
              <div class="sr-desc">Claude præsenterer en komplet plan og venter på din godkendelse inden den rører noget. Du kan godkende, afvise eller bede om justeringer.</div>
            </div>
            <div class="skill-row">
              <div class="sr-title">Faste regler (Hooks)</div>
              <div class="sr-trigger">Aktiver: fortæl Claude hvad reglen skal være</div>
              <div class="sr-desc">Regler der køres automatisk — fx "tjek altid for fejl når en fil gemmes" eller "send mig besked på Teams når du er færdig". Sættes op én gang og kører for altid.</div>
            </div>
            <div class="skill-row">
              <div class="sr-title">Tidsplan (lokalt)</div>
              <div class="sr-trigger">Aktiver: "Sæt en daglig opgave op: kl. 8 — [opgave]"</div>
              <div class="sr-desc">Opgaver der kører på din computer på faste tidspunkter eller med faste mellemrum. Computeren skal være tændt.</div>
            </div>
            <div class="skill-row">
              <div class="sr-title">Sky-medarbejdere <span class="cc-badge bnew">Ny</span></div>
              <div class="sr-trigger">Aktiver: "Sæt en sky-opgave op der kører [hvornår]"</div>
              <div class="sr-desc">Som tidsplan, men afvikles i Anthropics sky. Din computer kan være slukket — opgaven løses alligevel. Kræver Max-plan.</div>
            </div>
            <div class="skill-row">
              <div class="sr-title">Auto-mode <span class="cc-badge bbrand">Max plan</span></div>
              <div class="sr-trigger">Aktiver: /config → Auto-mode</div>
              <div class="sr-desc">Claude træffer rutinebeslutninger selv uden at spørge. Spørger kun ved store eller potentielt farlige handlinger. Giver markant færre afbrydelser under lange opgaver.</div>
            </div>
            <div class="skill-row">
              <div class="sr-title">Specialist-hjælpere (Sub-agents)</div>
              <div class="sr-trigger">Aktiver: "Brug en specialist til [opgave]"</div>
              <div class="sr-desc">Claude kan uddelegere delopgaver til specialiserede hj&aelig;lpere med hvert sit ekspertiseomr&aring;de. Den dyreste model bruges kun til det der kr&aelig;ver det. Filer i <code>.claude/agents/</code> definerer dem.</div>
            </div>
          </div>
        </div>

        <div class="cmd-group">
          <div class="cmd-group-title">Plugins (<code>.claude/settings.json</code>)</div>
          <div class="skill-rows">
            <div class="skill-row">
              <div class="sr-title">Superpowers <span class="cc-badge bnew">Forge default</span></div>
              <div class="sr-trigger">Marketplace: <code>obra/superpowers-marketplace</code></div>
              <div class="sr-desc">14 disciplin-skills der tvinger Clarify &rarr; Design &rarr; Plan &rarr; Code &rarr; Verify-flow. Inkluderer brainstorming, writing-plans, executing-plans, systematic-debugging, red-green-refactor og en code-reviewer subagent. Auto-installeret af Forge.</div>
            </div>
            <div class="skill-row">
              <div class="sr-title">Egne plugins</div>
              <div class="sr-trigger">Tilf&oslash;j til <code>extraKnownMarketplaces</code></div>
              <div class="sr-desc">Du kan tilf&oslash;je flere marketplaces ved at appende <code>{"url":"https://github.com/dit-org/dit-marketplace"}</code> til arrayet i <code>.claude/settings.json</code>. Gen&aring;bn Claude Code for at hente plugins.</div>
            </div>
          </div>
        </div>

        <div class="cmd-group">
          <div class="cmd-group-title">MCP-servere (<code>.mcp.json</code>)</div>
          <div class="skill-rows">
            <div class="skill-row">
              <div class="sr-title">context7</div>
              <div class="sr-trigger">URL: <code>https://mcp.context7.com</code></div>
              <div class="sr-desc">Live, versions-n&oslash;jagtig dokumentation for biblioteker. Foresp&oslash;rg via tools <code>resolve-library-id</code> og <code>query-docs</code>.</div>
            </div>
            <div class="skill-row">
              <div class="sr-title">chrome-devtools</div>
              <div class="sr-trigger">Plugin: chrome-devtools-mcp</div>
              <div class="sr-desc">Browser-kontrol via Chrome DevTools Protocol. Tools til navigation, klik, screenshots, console-logs, performance-traces.</div>
            </div>
            <div class="skill-row">
              <div class="sr-title">viavi-skills</div>
              <div class="sr-trigger">URL: <code>https://app.viavi.dk/skills/mcp?token=...</code></div>
              <div class="sr-desc">Elkj&oslash;p Nordic's interne skill-bibliotek. Token kr&aelig;ves. Brug <code>list_skills</code>, <code>get_skill</code>, <code>search_skills</code>.</div>
            </div>
            <div class="skill-row">
              <div class="sr-title">wcgw (Claude Desktop &rarr; WSL)</div>
              <div class="sr-trigger">Konfigureres i <code>claude_desktop_config.json</code></div>
              <div class="sr-desc">Forbinder Claude Desktop p&aring; Windows til WSL. Lader Claude k&oslash;re kommandoer i Linux-milj&oslash;et.</div>
            </div>
          </div>
        </div>

        <div class="cmd-group">
          <div class="cmd-group-title">Forge slash-commands (kun i Forge-projekter)</div>
          <div class="cmd-rows">
            <div class="cmd-row">
              <span class="cr-cmd">/project:review</span>
              <span class="cr-desc">Fuld review p&aring; tv&aelig;rs af alle dimensioner — orchestrerede agenter k&oslash;rer parallelt, blokerer ved CRITICAL.</span>
              <button class="cbtn" onclick="copyCmd(this,'/project:review')">Kopiér</button>
            </div>
            <div class="cmd-row">
              <span class="cr-cmd">/project:fix-issue</span>
              <span class="cr-desc">Retter fund fra seneste review. Critical f&oslash;rst, derefter Major, derefter Minor.</span>
              <button class="cbtn" onclick="copyCmd(this,'/project:fix-issue')">Kopiér</button>
            </div>
            <div class="cmd-row">
              <span class="cr-cmd">/project:new-page <span style="color:var(--accent2)">[navn]</span></span>
              <span class="cr-desc">Opretter controller + view + route. F&oslash;lger MVC-struktur fra CLAUDE.md.</span>
              <button class="cbtn" onclick="copyCmd(this,'/project:new-page ')">Kopiér</button>
            </div>
            <div class="cmd-row">
              <span class="cr-cmd">/project:new-module <span style="color:var(--accent2)">[navn]</span></span>
              <span class="cr-desc">Fuldt feature-modul: plan &rarr; schema &rarr; model &rarr; service &rarr; sider. Venter p&aring; godkendelse af plan.</span>
              <button class="cbtn" onclick="copyCmd(this,'/project:new-module ')">Kopiér</button>
            </div>
            <div class="cmd-row">
              <span class="cr-cmd">/project:db-init</span>
              <span class="cr-desc">Initialiserer databasen fra <code>schema.sql</code>. Verificerer tabeller og admin-bruger.</span>
              <button class="cbtn" onclick="copyCmd(this,'/project:db-init')">Kopiér</button>
            </div>
            <div class="cmd-row">
              <span class="cr-cmd">/project:deploy</span>
              <span class="cr-desc">Produktions-tjekliste. Kontrollerer .env, .htaccess og review-dimensioner.</span>
              <button class="cbtn" onclick="copyCmd(this,'/project:deploy')">Kopiér</button>
            </div>
            <div class="cmd-row">
              <span class="cr-cmd">/project:health</span>
              <span class="cr-desc">Tjekker MCP-servere, agents og CLI-afh&aelig;ngigheder. Verificerer at hele stacken er i drift.</span>
              <button class="cbtn" onclick="copyCmd(this,'/project:health')">Kopiér</button>
            </div>
            <div class="cmd-row">
              <span class="cr-cmd">/project:sanity-check</span>
              <span class="cr-desc">Verificerer dashboard/rapport: matematisk konsistens, business-plausibilitet og krydscheck mod r&aring; API-data.</span>
              <button class="cbtn" onclick="copyCmd(this,'/project:sanity-check')">Kopiér</button>
            </div>
          </div>
        </div>

        <div class="cmd-group">
          <div class="cmd-group-title">Forge CLI (k&oslash;rer i terminalen, ikke i Claude Code)</div>
          <div class="cmd-rows">
            <div class="cmd-row">
              <span class="cr-cmd">forge</span>
              <span class="cr-desc">Hurtigt mode (~10 sek) — opretter projekt med smart defaults.</span>
              <button class="cbtn" onclick="copyCmd(this,'forge')">Kopiér</button>
            </div>
            <div class="cmd-row">
              <span class="cr-cmd">forge --guided</span>
              <span class="cr-desc">Guided mode (9 trin, ~1 min) — incl. agentic disciplin (Trin 8) med 4 valgmuligheder.</span>
              <button class="cbtn" onclick="copyCmd(this,'forge --guided')">Kopiér</button>
            </div>
            <div class="cmd-row">
              <span class="cr-cmd">forge --advanced</span>
              <span class="cr-desc">Avanceret mode — alle valg manuelt, ingen smart defaults.</span>
              <button class="cbtn" onclick="copyCmd(this,'forge --advanced')">Kopiér</button>
            </div>
            <div class="cmd-row">
              <span class="cr-cmd">forge update</span>
              <span class="cr-desc">Henter seneste version af Forge fra GitHub.</span>
              <button class="cbtn" onclick="copyCmd(this,'forge update')">Kopiér</button>
            </div>
            <div class="cmd-row">
              <span class="cr-cmd">forge agents list</span>
              <span class="cr-desc">List alle awesome-agents kategorier (100+ agents fra VoltAgent's bibliotek).</span>
              <button class="cbtn" onclick="copyCmd(this,'forge agents list')">Kopiér</button>
            </div>
            <div class="cmd-row">
              <span class="cr-cmd">forge agents search <span style="color:var(--accent2)">&lt;ord&gt;</span></span>
              <span class="cr-desc">S&oslash;g efter en specifik agent ved navn (fx <code>forge agents search nextjs</code>).</span>
              <button class="cbtn" onclick="copyCmd(this,'forge agents search ')">Kopiér</button>
            </div>
            <div class="cmd-row">
              <span class="cr-cmd">forge agents update</span>
              <span class="cr-desc">Opdat&eacute;r awesome-agents cachen fra GitHub.</span>
              <button class="cbtn" onclick="copyCmd(this,'forge agents update')">Kopiér</button>
            </div>
            <div class="cmd-row">
              <span class="cr-cmd">forge agents cleanup</span>
              <span class="cr-desc">Detekt&eacute;r v3.6.2 agent-dubletter (dry-run). Tilf&oslash;j <code>--apply</code> for at slette med y/N-bekr&aelig;ftelse.</span>
              <button class="cbtn" onclick="copyCmd(this,'forge agents cleanup')">Kopiér</button>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

</main>

<script>
// Reveal animations
(function(){
  var obs = new IntersectionObserver(function(entries){
    entries.forEach(function(e){
      if (!e.isIntersecting) return;
      e.target.classList.add('v');
      if (e.target.classList.contains('stag')) {
        Array.from(e.target.children).forEach(function(c, i){
          c.style.transitionDelay = (i * .09) + 's';
          c.style.opacity = '1';
          c.style.transform = 'none';
        });
      }
      obs.unobserve(e.target);
    });
  }, {threshold: .12});
  document.querySelectorAll('.fu,.stag').forEach(function(el){ obs.observe(el); });
})();

// Accordion
function toggleAccord(id){
  document.getElementById(id).classList.toggle('open');
}

// Simple clipboard with fallback
function ccWrite(text){
  if(navigator.clipboard && window.isSecureContext){
    navigator.clipboard.writeText(text).catch(function(){ ccFallback(text); });
  } else {
    ccFallback(text);
  }
}
function ccFallback(text){
  var ta = document.createElement('textarea');
  ta.value = text;
  ta.style.cssText = 'position:fixed;top:0;left:0;opacity:0';
  document.body.appendChild(ta);
  ta.select();
  try { document.execCommand('copy'); } catch(e){}
  document.body.removeChild(ta);
}

// Copy click — icon buttons on cards
var cpyDone = '<svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="pointer-events:none"><polyline points="3,8.5 7,12 13,4"/></svg>';
function cpyClick(btn, text){
  var orig = btn.innerHTML;
  ccWrite(text);
  btn.innerHTML = cpyDone;
  btn.classList.add('done');
  setTimeout(function(){ btn.innerHTML = orig; btn.classList.remove('done'); }, 1400);
}

// Copy click — accordion cbtn buttons
function copyCmd(btn, text){
  var orig = btn.textContent;
  ccWrite(text);
  btn.textContent = '✓ Kopieret';
  btn.classList.add('ok');
  setTimeout(function(){ btn.textContent = orig; btn.classList.remove('ok'); }, 2000);
}
</script>
