<?php
$footerText = 'UI/UX Pro Max v' . UIUX_VERSION . ' &middot; <a href="?page=home">ViaVi Forge</a>';
?>

<div class="page">

<div class="hero">
  <div class="hero-tag">UI/UX Pro Max · Design Intelligence</div>
  <h1>Find den rigtige stil<br><span>til dit næste projekt.</span></h1>
  <p class="hero-sub">Søg og filtrer i den komplette database. Kopiér AI-prompts direkte til Claude Code.</p>
  <div class="stats-row">
    <div class="stat"><div class="stat-n">67</div><div class="stat-l">Design styles</div></div>
    <div class="stat"><div class="stat-n">96</div><div class="stat-l">Farvepaletter</div></div>
    <div class="stat"><div class="stat-n">57</div><div class="stat-l">Font-par</div></div>
  </div>
</div>

<div class="wrap">
  <div class="toolbar">
    <div class="tabs">
      <button class="tab on t-styles" onclick="setTab('s',this)">Design styles</button>
      <button class="tab t-colors" onclick="setTab('c',this)">Farvepaletter</button>
      <button class="tab t-typo" onclick="setTab('t',this)">Font-par</button>
      <button class="tab t-motion" onclick="setTab('m',this)">Motion <span style="font-size:10px;opacity:.5">JS</span></button>
    </div>
    <div class="search-wrap">
      <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><path stroke-linecap="round" d="M21 21l-4.35-4.35"/></svg>
      <input id="q" type="text" placeholder="S&oslash;g efter stil, produkt, stemning..." oninput="render()">
    </div>
    <div class="filter-row" id="filters"></div>
    <span class="cnt" id="cnt"></span>
  </div>
  <div class="grid" id="grid"></div>
</div>

</div>

<script>
var TAB='s';

S=[{"no":"1","name":"Minimalism & Swiss Style","type":"General","keywords":"Clean, simple, spacious, functional, white space, high contrast, geometric, sans-serif","bestFor":"Enterprise apps, dashboards, SaaS platforms, professional tools","dark":"✓ Full","perf":"⚡ Excellent","era":"1950s Swiss","complexity":"Low","prompt":"Design a minimalist landing page. Use: white space, geometric layouts, sans-serif fonts, high contrast, grid-based structure, essential elements only. Avoid shadows and gradients. Focus on clarity and functionality."},{"no":"2","name":"Neumorphism","type":"General","keywords":"Soft UI, embossed, debossed, subtle depth, rounded 12-16px, monochromatic","bestFor":"Health/wellness apps, meditation platforms, fitness trackers","dark":"◐ Partial","perf":"⚡ Good","era":"2020s Modern","complexity":"Medium","prompt":"Create a neumorphic UI with soft 3D effects. Use light pastels, rounded corners (12-16px), subtle soft shadows (multiple layers), no hard lines, monochromatic color scheme. Embossed/debossed effect on interactive elements."},{"no":"3","name":"Glassmorphism","type":"General","keywords":"Frosted glass, transparent, blurred background, layered, vibrant background","bestFor":"Modern SaaS, financial dashboards, lifestyle apps, modal overlays","dark":"✓ Full","perf":"⚠ Good","era":"2020s Modern","complexity":"Medium","prompt":"Design a glassmorphic interface with frosted glass effect. Use backdrop blur (10-20px), translucent overlays (rgba 10-30% opacity), vibrant background colors, subtle borders, light source reflection, layered depth."},{"no":"4","name":"Brutalism","type":"General","keywords":"Raw, unpolished, stark, high contrast, visible borders, asymmetric, anti-design","bestFor":"Design portfolios, counter-culture brands, editorial/media sites","dark":"✓ Full","perf":"⚡ Excellent","era":"1950s Brutalist","complexity":"Low","prompt":"Create a brutalist design with raw, stark aesthetic. Use pure primary colors (red, blue, yellow), black & white, no smooth transitions (instant), sharp corners, bold large typography, visible grid lines, default system fonts."},{"no":"5","name":"3D & Hyperrealism","type":"General","keywords":"Depth, realistic textures, 3D models, spatial navigation, tactile","bestFor":"Gaming, product showcase, immersive experiences, high-end e-commerce","dark":"◐ Partial","perf":"❌ Poor","era":"2020s Modern","complexity":"High","prompt":"Build an immersive 3D interface using realistic textures, 3D models, complex shadows, realistic lighting, parallax scrolling (3-5 layers), physics-based motion. Include skeuomorphic elements with tactile detail."},{"no":"6","name":"Vibrant & Block-based","type":"General","keywords":"Bold, energetic, playful, block layout, geometric shapes, high color contrast","bestFor":"Startups, creative agencies, gaming, social media, youth-focused","dark":"✓ Full","perf":"⚡ Good","era":"2020s Modern","complexity":"Medium","prompt":"Design an energetic, vibrant interface with bold block layouts, geometric shapes, high color contrast, large typography (32px+), animated background patterns, duotone effects. Use 4-6 contrasting colors."},{"no":"7","name":"Dark Mode (OLED)","type":"General","keywords":"Dark theme, deep black, midnight blue, eye-friendly, OLED, night mode","bestFor":"Night-mode apps, coding platforms, entertainment, OLED devices","dark":"✓ Only","perf":"⚡ Excellent","era":"2020s Modern","complexity":"Low","prompt":"Create an OLED-optimized dark interface with deep black (#000000), dark grey (#121212), midnight blue accents. Use minimal glow effects, vibrant neon accents, high contrast text. Optimize for eye comfort and OLED power saving."},{"no":"8","name":"Accessible & Ethical","type":"General","keywords":"High contrast, large text 16px+, keyboard navigation, WCAG, screen reader","bestFor":"Government, healthcare, education, inclusive products, legal compliance","dark":"✓ Full","perf":"⚡ Excellent","era":"Universal","complexity":"Low","prompt":"Design with WCAG AAA compliance. Include: high contrast (7:1+), large text (16px+), keyboard navigation, screen reader compatibility, focus states visible (3-4px ring), semantic HTML, ARIA labels, 44x44px touch targets."},{"no":"9","name":"Claymorphism","type":"General","keywords":"Soft 3D, chunky, playful, toy-like, bubbly, thick borders, double shadows","bestFor":"Educational apps, children's apps, SaaS platforms, creative tools","dark":"◐ Partial","perf":"⚡ Good","era":"2020s Modern","complexity":"Medium","prompt":"Design a playful, toy-like interface with soft 3D, chunky elements, bubbly aesthetic, rounded edges (16-24px), thick borders (3-4px), double shadows (inner + outer), pastel colors, smooth animations."},{"no":"10","name":"Aurora UI","type":"General","keywords":"Vibrant gradients, Northern Lights effect, mesh gradient, luminous, atmospheric","bestFor":"Modern SaaS, creative agencies, branding, music platforms, hero sections","dark":"✓ Full","perf":"⚠ Good","era":"2020s Modern","complexity":"Medium","prompt":"Create a vibrant gradient interface inspired by Northern Lights with mesh gradients, smooth color blends, flowing animations. Use complementary color pairs (blue-orange, purple-yellow), iridescent effects."},{"no":"11","name":"Retro-Futurism","type":"General","keywords":"Vintage sci-fi, 80s aesthetic, neon glow, CRT scanlines, pixel art, cyberpunk","bestFor":"Gaming, entertainment, music platforms, tech brands, nostalgic","dark":"✓ Dark focused","perf":"⚠ Moderate","era":"1980s Retro","complexity":"Medium","prompt":"Build a retro-futuristic (cyberpunk/vaporwave) interface with neon colors (blue, pink, cyan), deep black background, 80s aesthetic, CRT scanlines, glitch effects, neon glow text/borders, monospace fonts."},{"no":"12","name":"Flat Design","type":"General","keywords":"2D, minimalist, bold colors, no shadows, clean lines, simple shapes","bestFor":"Web apps, mobile apps, startup MVPs, SaaS, dashboards","dark":"✓ Full","perf":"⚡ Excellent","era":"2010s Modern","complexity":"Low","prompt":"Create a flat, 2D interface with bold colors, no shadows/gradients, clean lines, simple geometric shapes, icon-heavy, typography-focused, minimal ornamentation. Use 4-6 solid, bright colors."},{"no":"13","name":"Skeuomorphism","type":"General","keywords":"Realistic texture, depth, 3D appearance, real-world metaphors, gradients, tactile","bestFor":"Legacy apps, gaming, immersive storytelling, luxury products","dark":"◐ Partial","perf":"❌ Poor","era":"2007-2012 iOS","complexity":"High","prompt":"Design a realistic, textured interface with 3D depth, real-world metaphors (leather, wood, metal), complex gradients (8-12 stops), realistic shadows, grain/texture overlays, tactile press animations."},{"no":"14","name":"Liquid Glass","type":"General","keywords":"Flowing glass, morphing, smooth transitions, fluid effects, translucent, iridescent","bestFor":"Premium SaaS, high-end e-commerce, creative platforms, luxury portfolio","dark":"✓ Full","perf":"⚠ Moderate","era":"2020s Modern","complexity":"High","prompt":"Create a premium liquid glass effect with morphing shapes, flowing animations, chromatic aberration, iridescent gradients, smooth 400-600ms transitions. Use SVG morphing, dynamic blur, fluid color transitions."},{"no":"15","name":"Motion-Driven","type":"General","keywords":"Animation-heavy, microinteractions, scroll effects, parallax, entrance animations","bestFor":"Portfolio sites, storytelling platforms, entertainment apps","dark":"✓ Full","perf":"⚠ Good","era":"2020s Modern","complexity":"High","prompt":"Build an animation-heavy interface with scroll-triggered animations, microinteractions, parallax scrolling (3-5 layers), smooth transitions (300-400ms), entrance animations, page transitions."},{"no":"16","name":"Micro-interactions","type":"General","keywords":"Small animations, gesture-based, tactile feedback, subtle, contextual","bestFor":"Mobile apps, touchscreen UIs, productivity tools, consumer apps","dark":"✓ Full","perf":"⚡ Excellent","era":"2020s Modern","complexity":"Medium","prompt":"Design with delightful micro-interactions: small 50-100ms animations, gesture-based responses, tactile feedback, loading spinners, success/error states, subtle hover effects."},{"no":"17","name":"Inclusive Design","type":"General","keywords":"Accessible, color-blind friendly, high contrast, haptic feedback, voice","bestFor":"Public services, education, healthcare, government, finance","dark":"✓ Full","perf":"⚡ Excellent","era":"Universal","complexity":"Low","prompt":"Design for universal accessibility: high contrast (7:1+), large text (16px+), keyboard-only navigation, screen reader optimization, WCAG AAA compliance, symbol-based color indicators."},{"no":"18","name":"Zero Interface","type":"General","keywords":"Minimal visible UI, voice-first, gesture-based, AI-driven, invisible controls","bestFor":"Voice assistants, AI platforms, smart home, contextual computing","dark":"✓ Full","perf":"⚡ Excellent","era":"2020s AI-Era","complexity":"Low","prompt":"Create a voice-first, gesture-based, AI-driven interface with minimal visible UI, progressive disclosure, voice recognition UI, gesture detection, AI predictions, smart suggestions."},{"no":"19","name":"Soft UI Evolution","type":"General","keywords":"Evolved soft UI, better contrast, modern aesthetics, subtle depth, accessible","bestFor":"Modern enterprise apps, SaaS platforms, health/wellness, business tools","dark":"✓ Full","perf":"⚡ Excellent","era":"2020s Modern","complexity":"Medium","prompt":"Design evolved neumorphism with improved contrast (WCAG AA+), modern aesthetics, subtle depth, accessibility focus. Use soft shadows with better color hierarchy, improved focus states, modern 200-300ms animations."},{"no":"20","name":"Hero-Centric Design","type":"Landing Page","keywords":"Large hero section, compelling headline, high-contrast CTA, product showcase","bestFor":"SaaS landing pages, product launches, B2B platforms, tech companies","dark":"✓ Full","perf":"⚡ Good","era":"2020s Modern","complexity":"Medium","prompt":"Design a hero-centric landing page. Use: full-width hero section, compelling headline (60-80 chars), high-contrast CTA button, product screenshot or video, value proposition above fold."},{"no":"21","name":"Conversion-Optimized","type":"Landing Page","keywords":"Form-focused, minimalist, single CTA focus, high contrast, urgency elements","bestFor":"E-commerce, free trial signups, lead generation, SaaS pricing pages","dark":"✓ Full","perf":"⚡ Excellent","era":"2020s Modern","complexity":"Medium","prompt":"Design a conversion-optimized landing page. Use: single primary CTA, minimal distractions, trust badges, urgency elements (limited time), social proof (testimonials), form above fold."},{"no":"22","name":"Feature-Rich Showcase","type":"Landing Page","keywords":"Multiple feature sections, grid layout, benefit cards, visual demonstrations","bestFor":"Enterprise SaaS, software tools landing pages, complex products","dark":"✓ Full","perf":"⚡ Good","era":"2020s Modern","complexity":"Medium","prompt":"Design a feature showcase landing page. Use: grid layout for features (3-4 columns), feature cards with icons, benefit-focused copy, alternating sections, comparison tables, interactive demos."},{"no":"23","name":"Minimal & Direct","type":"Landing Page","keywords":"Minimal text, white space heavy, single column, direct messaging","bestFor":"Simple service pages, indie products, consulting, micro SaaS","dark":"✓ Full","perf":"⚡ Excellent","era":"2020s Modern","complexity":"Medium","prompt":"Design a minimal direct landing page. Use: single column layout, maximum white space, essential content only, one CTA, clean typography, no decorative elements, fast loading, direct messaging."},{"no":"24","name":"Social Proof-Focused","type":"Landing Page","keywords":"Testimonials prominent, client logos, case studies, reviews, user count","bestFor":"B2B SaaS, professional services, premium products, established brands","dark":"✓ Full","perf":"⚡ Good","era":"2020s Modern","complexity":"Medium","prompt":"Design a social proof landing page. Use: testimonials with photos, client logos grid, case study cards, review ratings (stars), user count metrics, success stories, trust indicators."},{"no":"25","name":"Interactive Product Demo","type":"Landing Page","keywords":"Embedded product mockup/video, interactive walkthrough, step-by-step","bestFor":"SaaS platforms, software products, developer tools, productivity apps","dark":"✓ Full","perf":"⚠ Good","era":"2020s Modern","complexity":"Medium","prompt":"Design an interactive demo landing page. Use: embedded product mockup, video walkthrough, step-by-step guide, hover-to-reveal features, live demo button, screenshot carousel."},{"no":"26","name":"Trust & Authority","type":"Landing Page","keywords":"Certificates/badges, expert credentials, case studies with metrics","bestFor":"Healthcare, financial services, enterprise software, premium products","dark":"✓ Full","perf":"⚡ Excellent","era":"2020s Modern","complexity":"Medium","prompt":"Design a trust-focused landing page. Use: certification badges, security indicators, expert credentials, industry awards, case study metrics, compliance logos (GDPR, SOC2), guarantee badges."},{"no":"27","name":"Storytelling-Driven","type":"Landing Page","keywords":"Narrative flow, visual story progression, section transitions, brand journey","bestFor":"Brand/startup stories, mission-driven products, premium lifestyle","dark":"✓ Full","perf":"⚠ Moderate","era":"2020s Modern","complexity":"Medium","prompt":"Design a storytelling landing page. Use: narrative flow sections, scroll-triggered reveals, chapter-like structure, emotional imagery, brand journey visualization, founder story, timeline progression."},{"no":"28","name":"Data-Dense Dashboard","type":"BI/Analytics","keywords":"Multiple charts/widgets, data tables, KPI cards, minimal padding, grid","bestFor":"Business intelligence, financial analytics, enterprise reporting","dark":"✓ Full","perf":"⚡ Excellent","era":"2020s Modern","complexity":"Medium","prompt":"Design a data-dense dashboard. Use: multiple chart widgets, KPI cards row, data tables with sorting, minimal padding (8-12px), efficient grid layout, filter sidebar, maximum information density."},{"no":"29","name":"Heat Map Style","type":"BI/Analytics","keywords":"Color-coded grid/matrix, geographical heat maps, correlation, intensity","bestFor":"Geographical analysis, performance matrices, user behavior heatmaps","dark":"✓ Full","perf":"⚡ Excellent","era":"2020s Modern","complexity":"Medium","prompt":"Design a heatmap visualization. Use: color gradient scale (cool to hot), cell-based grid, intensity legend, hover tooltips, geographic or matrix layout, divergent color scheme for +/- values."},{"no":"30","name":"Executive Dashboard","type":"BI/Analytics","keywords":"High-level KPIs, large key metrics, minimal detail, summary, trends","bestFor":"C-suite dashboards, business summary, decision-maker dashboards","dark":"✓ Full","perf":"⚡ Excellent","era":"2020s Modern","complexity":"Medium","prompt":"Design an executive dashboard. Use: large KPI cards (4-6 max), trend sparklines, high-level summary only, clean layout with white space, traffic light indicators, at-a-glance insights."},{"no":"31","name":"Real-Time Monitoring","type":"BI/Analytics","keywords":"Live data updates, status indicators, alert notifications, streaming data","bestFor":"System monitoring, DevOps dashboards, real-time analytics, stock market","dark":"✓ Full","perf":"⚡ Good","era":"2020s Modern","complexity":"Medium","prompt":"Design a real-time monitoring dashboard. Use: live status indicators (pulsing), streaming charts, alert notifications, connection status, auto-refresh indicators, critical alerts prominent."},{"no":"32","name":"Drill-Down Analytics","type":"BI/Analytics","keywords":"Hierarchical data, expandable sections, interactive drill-down, breadcrumb","bestFor":"Sales analytics, product analytics, funnel analysis, multi-dimensional data","dark":"✓ Full","perf":"⚡ Good","era":"2020s Modern","complexity":"Medium","prompt":"Design a drill-down analytics dashboard. Use: breadcrumb navigation, expandable sections, summary-to-detail flow, back button prominent, level indicators, hierarchical data display."},{"no":"33","name":"Comparative Analysis Dashboard","type":"BI/Analytics","keywords":"Side-by-side comparisons, period-over-period, A/B test results, delta","bestFor":"Period-over-period reporting, A/B test dashboards, market comparison","dark":"✓ Full","perf":"⚡ Excellent","era":"2020s Modern","complexity":"Medium","prompt":"Design a comparison dashboard. Use: side-by-side metrics, period selectors, delta indicators (+/-), benchmark lines, A/B comparison tables, winning/losing highlights, percentage change badges."},{"no":"34","name":"Predictive Analytics","type":"BI/Analytics","keywords":"Forecast lines, confidence intervals, trend projections, AI-driven insights","bestFor":"Forecasting dashboards, anomaly detection, trend prediction, AI-powered","dark":"✓ Full","perf":"⚠ Good","era":"2020s Modern","complexity":"Medium","prompt":"Design a predictive analytics dashboard. Use: forecast lines (dashed), confidence intervals (shaded bands), trend projections, anomaly highlights, scenario toggles, AI insight cards."},{"no":"35","name":"User Behavior Analytics","type":"BI/Analytics","keywords":"Funnel visualization, user flow, conversion tracking, engagement, cohort","bestFor":"Conversion funnel analysis, user journey tracking, cohort analysis","dark":"✓ Full","perf":"⚡ Good","era":"2020s Modern","complexity":"Medium","prompt":"Design a user behavior analytics dashboard. Use: funnel visualization, user flow diagrams (Sankey), conversion metrics, engagement heatmaps, cohort tables, retention curves."},{"no":"36","name":"Financial Dashboard","type":"BI/Analytics","keywords":"Revenue metrics, profit/loss, budget tracking, financial ratios, portfolio","bestFor":"Financial reporting, accounting dashboards, portfolio tracking, budget","dark":"✓ Full","perf":"⚡ Excellent","era":"2020s Modern","complexity":"Medium","prompt":"Design a financial dashboard. Use: revenue/expense charts, profit margins, budget vs actual, cash flow waterfall, financial ratios, audit trail table, currency formatting."},{"no":"37","name":"Sales Intelligence Dashboard","type":"BI/Analytics","keywords":"Deal pipeline, sales metrics, territory performance, leaderboard, win-loss","bestFor":"CRM dashboards, sales management, opportunity tracking, quota planning","dark":"✓ Full","perf":"⚡ Good","era":"2020s Modern","complexity":"Medium","prompt":"Design a sales intelligence dashboard. Use: pipeline funnel, deal cards (kanban), quota gauges, leaderboard table, territory map, win/loss ratios, forecast accuracy, activity timeline."},{"no":"38","name":"Neubrutalism","type":"General","keywords":"Bold borders, black outlines, primary colors, thick shadows, flat, 45deg","bestFor":"Gen Z brands, startups, creative agencies, Figma-style, Notion-style","dark":"✓ Full","perf":"⚡ Excellent","era":"2020s Modern","complexity":"Low","prompt":"Design a neubrutalist interface. Use: high contrast, hard black borders (3px+), bright pop colors, no blur, sharp or slightly rounded corners, bold typography, hard shadows (offset 4px 4px)."},{"no":"39","name":"Bento Box Grid","type":"General","keywords":"Modular cards, asymmetric grid, varied sizes, Apple-style, dashboard tiles","bestFor":"Dashboards, product pages, portfolios, Apple-style marketing, feature showcases","dark":"✓ Full","perf":"⚡ Excellent","era":"2020s Apple","complexity":"Low","prompt":"Design a Bento Box grid layout. Use: modular cards with varied sizes (1x1, 2x1, 2x2), Apple-style aesthetic, rounded corners (16-24px), soft shadows, clean hierarchy, neutral backgrounds."},{"no":"40","name":"Y2K Aesthetic","type":"General","keywords":"Neon pink, chrome, metallic, bubblegum, iridescent, glossy, retro-futurism","bestFor":"Fashion brands, music platforms, Gen Z brands, entertainment","dark":"◐ Partial","perf":"⚠ Good","era":"Y2K 2000s","complexity":"Medium","prompt":"Design a Y2K aesthetic interface. Use: neon pink/cyan colors, chrome/metallic textures, bubblegum gradients, glossy buttons, iridescent effects, 2000s futurism, star/sparkle decorations."},{"no":"41","name":"Cyberpunk UI","type":"General","keywords":"Neon, dark mode, terminal, HUD, sci-fi, glitch, dystopian, matrix, tech noir","bestFor":"Gaming platforms, crypto apps, sci-fi applications, developer tools","dark":"✓ Only","perf":"⚠ Moderate","era":"2020s Cyberpunk","complexity":"Medium","prompt":"Design a cyberpunk interface. Use: neon colors on dark (#0D0D0D), terminal/HUD aesthetic, glitch effects, scanlines overlay, matrix green accents, monospace fonts, angular shapes, dystopian tech feel."},{"no":"42","name":"Organic Biophilic","type":"General","keywords":"Nature, organic shapes, green, sustainable, rounded, flowing, wellness, earthy","bestFor":"Wellness apps, sustainability brands, eco products, health apps, meditation","dark":"✓ Full","perf":"⚡ Excellent","era":"2020s Sustainable","complexity":"Low","prompt":"Design a biophilic organic interface. Use: nature-inspired colors (greens, browns), organic curved shapes, rounded corners (16-24px), natural textures (wood, stone), flowing SVG elements, wellness aesthetic."},{"no":"43","name":"AI-Native UI","type":"General","keywords":"Chatbot, conversational, voice, assistant, agentic, ambient, minimal chrome","bestFor":"AI products, chatbots, voice assistants, copilots, AI-powered tools","dark":"✓ Full","perf":"⚡ Excellent","era":"2020s AI-Era","complexity":"Low","prompt":"Design an AI-native interface. Use: minimal chrome, conversational layout, streaming text area, typing indicators (3-dot pulse), context cards, subtle AI accent color (#6366F1), clean input field."},{"no":"44","name":"Memphis Design","type":"General","keywords":"80s, geometric, playful, postmodern, shapes, patterns, squiggles, triangles","bestFor":"Creative agencies, music sites, youth brands, event promotion, portfolios","dark":"✓ Full","perf":"⚡ Excellent","era":"1980s Postmodern","complexity":"Medium","prompt":"Design a Memphis style interface. Use: bold geometric shapes (triangles, squiggles, circles), bright clashing colors, 80s postmodern aesthetic, playful patterns, dotted textures, asymmetric layouts."},{"no":"45","name":"Vaporwave","type":"General","keywords":"Synthwave, retro-futuristic, 80s-90s, neon, glitch, sunset gradient, dreamy","bestFor":"Music platforms, gaming, creative portfolios, entertainment, artistic","dark":"✓ Dark focused","perf":"⚠ Moderate","era":"1980s-90s Retro","complexity":"Medium","prompt":"Design a vaporwave aesthetic interface. Use: sunset gradients (pink/cyan/purple), 80s-90s nostalgia, glitch effects, Greek statue imagery, palm trees, grid patterns, neon glow, retro-futuristic feel."},{"no":"46","name":"Dimensional Layering","type":"General","keywords":"Depth, overlapping, z-index, layers, 3D, shadows, elevation, floating cards","bestFor":"Dashboards, card layouts, modals, navigation, product showcases, SaaS","dark":"✓ Full","perf":"⚠ Good","era":"2020s Modern","complexity":"Medium","prompt":"Design with dimensional layering. Use: z-index depth (multiple layers), overlapping cards, elevation shadows (4 levels), floating elements, parallax depth, backdrop blur for hierarchy."},{"no":"47","name":"Exaggerated Minimalism","type":"General","keywords":"Bold minimalism, oversized typography, high contrast, negative space","bestFor":"Fashion, architecture, portfolios, agency landing pages, luxury brands","dark":"✓ Full","perf":"⚡ Excellent","era":"2020s Modern","complexity":"Low","prompt":"Design with exaggerated minimalism. Use: oversized typography (clamp 3rem-12rem), extreme negative space, black/white primary, single accent color only, bold statements, minimal elements."},{"no":"48","name":"Kinetic Typography","type":"General","keywords":"Motion text, animated type, moving letters, typing effect, morphing, scroll","bestFor":"Hero sections, marketing sites, video platforms, storytelling, portfolios","dark":"✓ Full","perf":"⚠ Moderate","era":"2020s Modern","complexity":"High","prompt":"Design with kinetic typography. Use: animated text, scroll-triggered reveals, typing effects, letter-by-letter animations, morphing text, gradient text fills, oversized hero text."},{"no":"49","name":"Parallax Storytelling","type":"General","keywords":"Scroll-driven, narrative, layered scrolling, immersive, cinematic, chapters","bestFor":"Brand storytelling, product launches, case studies, portfolios, annual reports","dark":"✓ Full","perf":"❌ Poor","era":"2020s Modern","complexity":"High","prompt":"Design a parallax storytelling page. Use: scroll-driven narrative, layered backgrounds (3-5 layers), fixed/sticky sections, cinematic transitions, progressive disclosure, full-screen chapters."},{"no":"50","name":"Swiss Modernism 2.0","type":"General","keywords":"Grid system, Helvetica, modular, asymmetric, international style, rational","bestFor":"Corporate sites, architecture, editorial, SaaS, museums, professional services","dark":"✓ Full","perf":"⚡ Excellent","era":"1950s Swiss + 2020s","complexity":"Low","prompt":"Design with Swiss Modernism 2.0. Use: strict grid system (12 columns), Helvetica/Inter fonts, mathematical spacing, asymmetric balance, high contrast, minimal decoration, single accent color."},{"no":"51","name":"HUD / Sci-Fi FUI","type":"General","keywords":"Futuristic, technical, wireframe, neon, data, transparency, iron man, sci-fi","bestFor":"Sci-fi games, space tech, cybersecurity, movie props, immersive dashboards","dark":"✓ Full","perf":"⚠ Moderate","era":"2010s Sci-Fi","complexity":"High","prompt":"Design a futuristic HUD/FUI. Use: thin lines (1px), neon cyan/blue on black, technical markers, decorative brackets, data visualization, monospaced tech fonts, glowing elements, transparency."},{"no":"52","name":"Pixel Art","type":"General","keywords":"Retro, 8-bit, 16-bit, gaming, blocky, nostalgic, pixelated, arcade","bestFor":"Indie games, retro tools, creative portfolios, nostalgia marketing, Web3/NFT","dark":"✓ Full","perf":"⚡ Excellent","era":"1980s Arcade","complexity":"Medium","prompt":"Design a pixel art inspired interface. Use: pixelated fonts, 8-bit or 16-bit aesthetic, sharp edges (image-rendering: pixelated), limited color palette, blocky UI elements, retro gaming feel."},{"no":"53","name":"Bento Grids","type":"General","keywords":"Apple-style, modular, cards, organized, clean, hierarchy, grid, rounded soft","bestFor":"Product features, dashboards, personal sites, marketing summaries, galleries","dark":"✓ Full","perf":"⚡ Excellent","era":"2020s Apple/Linear","complexity":"Low","prompt":"Design a Bento Grid layout. Use: modular grid system, rounded corners (16-24px), different card sizes (1x1, 2x1, 2x2), card-based hierarchy, soft backgrounds (#F5F5F7), subtle borders, Apple-style."},{"no":"55","name":"Spatial UI (VisionOS)","type":"General","keywords":"Glass, depth, immersion, spatial, translucent, gaze, gesture, apple vision-pro","bestFor":"Spatial computing apps, VR/AR interfaces, futuristic dashboards","dark":"✓ Full","perf":"⚠ Moderate","era":"2024 Spatial Era","complexity":"High","prompt":"Design a VisionOS-style spatial interface. Use: frosted glass panels, depth layers, translucent backgrounds (15-30% opacity), vibrant colors for active states, gaze-hover effects, floating windows."},{"no":"56","name":"E-Ink / Paper","type":"General","keywords":"Paper-like, matte, high contrast, texture, reading, calm, monochrome","bestFor":"Reading apps, digital newspapers, minimal journals, distraction-free writing","dark":"❌ Low","perf":"⚡ Excellent","era":"2020s Digital Well-being","complexity":"Low","prompt":"Design an e-ink/paper style interface. Use: high contrast black on off-white, paper texture, no animations (instant transitions), reading-focused, minimal UI chrome, distraction-free, calm aesthetic."},{"no":"57","name":"Gen Z Chaos / Maximalism","type":"General","keywords":"Chaos, clutter, stickers, raw, collage, mixed media, loud, internet culture","bestFor":"Gen Z lifestyle brands, music artists, creative portfolios, viral marketing","dark":"✓ Full","perf":"⚠ Poor","era":"2023+ Internet Core","complexity":"High","prompt":"Design a Gen Z chaos maximalist interface. Use: clashing bright colors, sticker overlays, collage aesthetic, raw/unpolished feel, mixed media, ironic elements, loud typography, internet culture references."},{"no":"58","name":"Biomimetic / Organic 2.0","type":"General","keywords":"Nature-inspired, cellular, fluid, breathing, generative, algorithms, life-like","bestFor":"Sustainability tech, biotech, advanced health, generative art platforms","dark":"✓ Full","perf":"⚠ Moderate","era":"2024+ Generative","complexity":"High","prompt":"Design a biomimetic organic interface. Use: cellular/fluid shapes, breathing animations, generative patterns, bioluminescent colors, physics-based movement, nature algorithms, life-like elements."},{"no":"59","name":"Anti-Polish / Raw Aesthetic","type":"General","keywords":"Hand-drawn, collage, scanned textures, unfinished, imperfect, authentic, sketch","bestFor":"Creative portfolios, artist sites, indie brands, handmade products","dark":"✓ Full","perf":"⚡ Excellent","era":"2025+ Anti-Digital","complexity":"Low","prompt":"Design with anti-polish raw aesthetic. Use: hand-drawn elements, scanned textures, unfinished look, paper/pencil textures, collage style, authentic imperfection, sketch marks, tape/sticker overlays."},{"no":"60","name":"Tactile Digital / Deformable UI","type":"General","keywords":"Jelly buttons, chrome, clay, squishy, deformable, bouncy, physical, tactile","bestFor":"Modern mobile apps, playful brands, entertainment, gaming UI, consumer products","dark":"✓ Full","perf":"⚠ Good","era":"2025+ Tactile Era","complexity":"Medium","prompt":"Design a tactile deformable interface. Use: jelly/squishy buttons, press deformation effect, bounce-back animations, chrome/clay materials, spring physics, haptic-like feedback, material response."},{"no":"61","name":"Nature Distilled","type":"General","keywords":"Muted earthy, skin tones, wood, soil, sand, terracotta, warmth, organic","bestFor":"Wellness brands, sustainable products, artisan goods, organic food, spa/beauty","dark":"◐ Partial","perf":"⚡ Excellent","era":"2025+ Handmade Warmth","complexity":"Low","prompt":"Design with nature distilled aesthetic. Use: muted earthy colors (terracotta, sand, olive), organic materials feel, warm tones, handmade warmth, natural textures, artisan quality, sustainable vibe."},{"no":"62","name":"Interactive Cursor Design","type":"General","keywords":"Custom cursor, cursor as tool, hover effects, cursor feedback, pointer transform","bestFor":"Creative portfolios, interactive experiences, agency sites, product showcases","dark":"✓ Full","perf":"⚡ Good","era":"2025+ Interactive","complexity":"Medium","prompt":"Design with interactive cursor effects. Use: custom cursor, cursor morphing on hover, magnetic cursor pull, cursor trails, blend mode cursors, click feedback animations, cursor as interaction tool."},{"no":"63","name":"Voice-First Multimodal","type":"General","keywords":"Voice UI, multimodal, audio feedback, conversational, hands-free, ambient","bestFor":"Voice assistants, accessibility apps, hands-free tools, smart home, automotive","dark":"✓ Full","perf":"⚡ Excellent","era":"2025+ Voice Era","complexity":"Medium","prompt":"Design a voice-first multimodal interface. Use: voice waveform visualization, listening state indicator, speaking animation, minimal visible UI, audio feedback cues, hands-free optimized, conversational flow."},{"no":"64","name":"3D Product Preview","type":"General","keywords":"360 product view, rotatable, zoomable, touch-to-spin, AR preview, configurator","bestFor":"E-commerce, furniture, fashion, automotive, electronics, jewelry","dark":"◐ Partial","perf":"❌ Poor","era":"2025+ E-commerce 3D","complexity":"High","prompt":"Design a 3D product preview interface. Use: 360° rotation, drag-to-spin, pinch-to-zoom, AR preview button, material/color switcher, hotspot annotations, orbit controls, product configurator."},{"no":"65","name":"Gradient Mesh / Aurora Evolved","type":"General","keywords":"Complex gradients, mesh gradients, multi-color blend, aurora, flowing colors","bestFor":"Hero sections, creative brands, music platforms, fashion, lifestyle, premium","dark":"✓ Full","perf":"⚠ Good","era":"2025+ Gradient Evolution","complexity":"Medium","prompt":"Design with gradient mesh aurora effect. Use: multi-color mesh gradients, flowing color transitions, aurora/northern lights feel, iridescent overlays, holographic shimmer, prismatic effects."},{"no":"66","name":"Editorial Grid / Magazine","type":"General","keywords":"Magazine layout, asymmetric grid, editorial typography, pull quotes, drop caps","bestFor":"News sites, blogs, magazines, editorial content, long-form articles, journalism","dark":"✓ Full","perf":"⚡ Excellent","era":"2020s Editorial Digital","complexity":"Low","prompt":"Design an editorial magazine layout. Use: asymmetric grid, pull quotes, drop caps, multi-column text, large imagery, bylines, section dividers, print-inspired typography, article hierarchy."},{"no":"67","name":"Chromatic Aberration / RGB Split","type":"General","keywords":"RGB split, color fringing, glitch, retro tech, VHS, analog error, distortion","bestFor":"Music platforms, gaming, tech brands, creative portfolios, nightlife","dark":"✓ Dark preferred","perf":"⚠ Good","era":"2020s Retro-Tech","complexity":"Medium","prompt":"Design with chromatic aberration RGB split effect. Use: color channel offset (R/G/B), glitch aesthetic, retro tech feel, VHS error look, lens distortion, scan lines, noise overlay, analog imperfection."},{"no":"68","name":"Vintage Analog / Retro Film","type":"General","keywords":"Film grain, VHS, cassette tape, polaroid, analog warmth, faded colors, light leaks","bestFor":"Photography portfolios, music/vinyl brands, vintage fashion, nostalgia marketing","dark":"◐ Partial","perf":"⚡ Good","era":"1970s-90s Analog Revival","complexity":"Medium","prompt":"Design with vintage analog film aesthetic. Use: film grain overlay, faded/desaturated colors, warm sepia tones, light leaks, VHS tracking effect, polaroid frame, analog warmth, nostalgic photography feel."}];

C=[{"no":"1","product":"SaaS (General)","primary":"#2563EB","secondary":"#3B82F6","cta":"#F97316","bg":"#F8FAFC","text":"#1E293B","notes":"Trust blue + orange CTA"},{"no":"2","product":"Micro SaaS","primary":"#6366F1","secondary":"#818CF8","cta":"#10B981","bg":"#F5F3FF","text":"#1E1B4B","notes":"Indigo primary + emerald CTA"},{"no":"3","product":"E-commerce","primary":"#059669","secondary":"#10B981","cta":"#F97316","bg":"#ECFDF5","text":"#064E3B","notes":"Success green + urgency orange"},{"no":"4","product":"E-commerce Luxury","primary":"#1C1917","secondary":"#44403C","cta":"#CA8A04","bg":"#FAFAF9","text":"#0C0A09","notes":"Premium dark + gold accent"},{"no":"5","product":"Service Landing Page","primary":"#0EA5E9","secondary":"#38BDF8","cta":"#F97316","bg":"#F0F9FF","text":"#0C4A6E","notes":"Sky blue trust + warm CTA"},{"no":"6","product":"B2B Service","primary":"#0F172A","secondary":"#334155","cta":"#0369A1","bg":"#F8FAFC","text":"#020617","notes":"Professional navy + blue CTA"},{"no":"7","product":"Financial Dashboard","primary":"#0F172A","secondary":"#1E293B","cta":"#22C55E","bg":"#020617","text":"#F8FAFC","notes":"Dark bg + green indicators"},{"no":"8","product":"Analytics Dashboard","primary":"#1E40AF","secondary":"#3B82F6","cta":"#F59E0B","bg":"#F8FAFC","text":"#1E3A8A","notes":"Blue data + amber highlights"},{"no":"9","product":"Healthcare App","primary":"#0891B2","secondary":"#22D3EE","cta":"#059669","bg":"#ECFEFF","text":"#164E63","notes":"Calm cyan + health green"},{"no":"10","product":"Educational App","primary":"#4F46E5","secondary":"#818CF8","cta":"#F97316","bg":"#EEF2FF","text":"#1E1B4B","notes":"Playful indigo + energetic orange"},{"no":"11","product":"Creative Agency","primary":"#EC4899","secondary":"#F472B6","cta":"#06B6D4","bg":"#FDF2F8","text":"#831843","notes":"Bold pink + cyan accent"},{"no":"12","product":"Portfolio / Personal","primary":"#18181B","secondary":"#3F3F46","cta":"#2563EB","bg":"#FAFAFA","text":"#09090B","notes":"Monochrome + blue accent"},{"no":"13","product":"Gaming","primary":"#7C3AED","secondary":"#A78BFA","cta":"#F43F5E","bg":"#0F0F23","text":"#E2E8F0","notes":"Neon purple + rose action"},{"no":"14","product":"Government / Public Service","primary":"#0F172A","secondary":"#334155","cta":"#0369A1","bg":"#F8FAFC","text":"#020617","notes":"High contrast navy + blue"},{"no":"15","product":"Fintech / Crypto","primary":"#F59E0B","secondary":"#FBBF24","cta":"#8B5CF6","bg":"#0F172A","text":"#F8FAFC","notes":"Gold trust + purple tech"},{"no":"16","product":"Social Media App","primary":"#E11D48","secondary":"#FB7185","cta":"#2563EB","bg":"#FFF1F2","text":"#881337","notes":"Vibrant rose + engagement blue"},{"no":"17","product":"Productivity Tool","primary":"#0D9488","secondary":"#14B8A6","cta":"#F97316","bg":"#F0FDFA","text":"#134E4A","notes":"Teal focus + action orange"},{"no":"18","product":"Design System","primary":"#4F46E5","secondary":"#6366F1","cta":"#F97316","bg":"#EEF2FF","text":"#312E81","notes":"Indigo brand + doc hierarchy"},{"no":"19","product":"AI / Chatbot Platform","primary":"#7C3AED","secondary":"#A78BFA","cta":"#06B6D4","bg":"#FAF5FF","text":"#1E1B4B","notes":"AI purple + cyan interactions"},{"no":"20","product":"NFT / Web3 Platform","primary":"#8B5CF6","secondary":"#A78BFA","cta":"#FBBF24","bg":"#0F0F23","text":"#F8FAFC","notes":"Purple tech + gold value"},{"no":"21","product":"Creator Economy","primary":"#EC4899","secondary":"#F472B6","cta":"#F97316","bg":"#FDF2F8","text":"#831843","notes":"Creator pink + engagement orange"},{"no":"22","product":"Sustainability / ESG","primary":"#059669","secondary":"#10B981","cta":"#0891B2","bg":"#ECFDF5","text":"#064E3B","notes":"Nature green + ocean blue"},{"no":"23","product":"Remote Work / Collaboration","primary":"#6366F1","secondary":"#818CF8","cta":"#10B981","bg":"#F5F3FF","text":"#312E81","notes":"Calm indigo + success green"},{"no":"24","product":"Mental Health App","primary":"#8B5CF6","secondary":"#C4B5FD","cta":"#10B981","bg":"#FAF5FF","text":"#4C1D95","notes":"Calming lavender + wellness green"},{"no":"25","product":"Pet Tech App","primary":"#F97316","secondary":"#FB923C","cta":"#2563EB","bg":"#FFF7ED","text":"#9A3412","notes":"Playful orange + trust blue"},{"no":"26","product":"Smart Home / IoT","primary":"#1E293B","secondary":"#334155","cta":"#22C55E","bg":"#0F172A","text":"#F8FAFC","notes":"Dark tech + status green"},{"no":"27","product":"EV / Charging Ecosystem","primary":"#0891B2","secondary":"#22D3EE","cta":"#22C55E","bg":"#ECFEFF","text":"#164E63","notes":"Electric cyan + eco green"},{"no":"28","product":"Subscription Box","primary":"#D946EF","secondary":"#E879F9","cta":"#F97316","bg":"#FDF4FF","text":"#86198F","notes":"Excitement purple + urgency orange"},{"no":"29","product":"Podcast Platform","primary":"#1E1B4B","secondary":"#312E81","cta":"#F97316","bg":"#0F0F23","text":"#F8FAFC","notes":"Dark audio + warm accent"},{"no":"30","product":"Dating App","primary":"#E11D48","secondary":"#FB7185","cta":"#F97316","bg":"#FFF1F2","text":"#881337","notes":"Romantic rose + warm orange"},{"no":"31","product":"Micro-Credentials / Badges","primary":"#0369A1","secondary":"#0EA5E9","cta":"#CA8A04","bg":"#F0F9FF","text":"#0C4A6E","notes":"Trust blue + achievement gold"},{"no":"32","product":"Knowledge Base / Docs","primary":"#475569","secondary":"#64748B","cta":"#2563EB","bg":"#F8FAFC","text":"#1E293B","notes":"Neutral grey + link blue"},{"no":"33","product":"Hyperlocal Services","primary":"#059669","secondary":"#10B981","cta":"#F97316","bg":"#ECFDF5","text":"#064E3B","notes":"Location green + action orange"},{"no":"34","product":"Beauty / Spa / Wellness","primary":"#EC4899","secondary":"#F9A8D4","cta":"#8B5CF6","bg":"#FDF2F8","text":"#831843","notes":"Soft pink + lavender luxury"},{"no":"35","product":"Luxury / Premium Brand","primary":"#1C1917","secondary":"#44403C","cta":"#CA8A04","bg":"#FAFAF9","text":"#0C0A09","notes":"Premium black + gold accent"},{"no":"36","product":"Restaurant / Food Service","primary":"#DC2626","secondary":"#F87171","cta":"#CA8A04","bg":"#FEF2F2","text":"#450A0A","notes":"Appetizing red + warm gold"},{"no":"37","product":"Fitness / Gym App","primary":"#F97316","secondary":"#FB923C","cta":"#22C55E","bg":"#1F2937","text":"#F8FAFC","notes":"Energy orange + success green"},{"no":"38","product":"Real Estate / Property","primary":"#0F766E","secondary":"#14B8A6","cta":"#0369A1","bg":"#F0FDFA","text":"#134E4A","notes":"Trust teal + professional blue"},{"no":"39","product":"Travel / Tourism Agency","primary":"#0EA5E9","secondary":"#38BDF8","cta":"#F97316","bg":"#F0F9FF","text":"#0C4A6E","notes":"Sky blue + adventure orange"},{"no":"40","product":"Hotel / Hospitality","primary":"#1E3A8A","secondary":"#3B82F6","cta":"#CA8A04","bg":"#F8FAFC","text":"#1E40AF","notes":"Luxury navy + gold service"},{"no":"41","product":"Wedding / Event Planning","primary":"#DB2777","secondary":"#F472B6","cta":"#CA8A04","bg":"#FDF2F8","text":"#831843","notes":"Romantic pink + elegant gold"},{"no":"42","product":"Legal Services","primary":"#1E3A8A","secondary":"#1E40AF","cta":"#B45309","bg":"#F8FAFC","text":"#0F172A","notes":"Authority navy + trust gold"},{"no":"43","product":"Insurance Platform","primary":"#0369A1","secondary":"#0EA5E9","cta":"#22C55E","bg":"#F0F9FF","text":"#0C4A6E","notes":"Security blue + protected green"},{"no":"44","product":"Banking / Finance","primary":"#0F172A","secondary":"#1E3A8A","cta":"#CA8A04","bg":"#F8FAFC","text":"#020617","notes":"Trust navy + premium gold"},{"no":"45","product":"E-learning / Online Course","primary":"#0D9488","secondary":"#2DD4BF","cta":"#F97316","bg":"#F0FDFA","text":"#134E4A","notes":"Progress teal + achievement orange"},{"no":"46","product":"Non-profit / Charity","primary":"#0891B2","secondary":"#22D3EE","cta":"#F97316","bg":"#ECFEFF","text":"#164E63","notes":"Compassion blue + action orange"},{"no":"47","product":"Music Streaming","primary":"#1E1B4B","secondary":"#4338CA","cta":"#22C55E","bg":"#0F0F23","text":"#F8FAFC","notes":"Dark audio + play green"},{"no":"48","product":"Video Streaming / OTT","primary":"#0F0F23","secondary":"#1E1B4B","cta":"#E11D48","bg":"#000000","text":"#F8FAFC","notes":"Cinema dark + play red"},{"no":"49","product":"Job Board / Recruitment","primary":"#0369A1","secondary":"#0EA5E9","cta":"#22C55E","bg":"#F0F9FF","text":"#0C4A6E","notes":"Professional blue + success green"},{"no":"50","product":"Marketplace (P2P)","primary":"#7C3AED","secondary":"#A78BFA","cta":"#22C55E","bg":"#FAF5FF","text":"#4C1D95","notes":"Trust purple + transaction green"},{"no":"51","product":"Logistics / Delivery","primary":"#2563EB","secondary":"#3B82F6","cta":"#F97316","bg":"#EFF6FF","text":"#1E40AF","notes":"Tracking blue + delivery orange"},{"no":"52","product":"Agriculture / Farm Tech","primary":"#15803D","secondary":"#22C55E","cta":"#CA8A04","bg":"#F0FDF4","text":"#14532D","notes":"Earth green + harvest gold"},{"no":"53","product":"Construction / Architecture","primary":"#64748B","secondary":"#94A3B8","cta":"#F97316","bg":"#F8FAFC","text":"#334155","notes":"Industrial grey + safety orange"},{"no":"54","product":"Automotive / Car Dealership","primary":"#1E293B","secondary":"#334155","cta":"#DC2626","bg":"#F8FAFC","text":"#0F172A","notes":"Premium dark + action red"},{"no":"55","product":"Photography Studio","primary":"#18181B","secondary":"#27272A","cta":"#F8FAFC","bg":"#000000","text":"#FAFAFA","notes":"Pure black + white contrast"},{"no":"56","product":"Coworking Space","primary":"#F59E0B","secondary":"#FBBF24","cta":"#2563EB","bg":"#FFFBEB","text":"#78350F","notes":"Energetic amber + booking blue"},{"no":"57","product":"Cleaning Service","primary":"#0891B2","secondary":"#22D3EE","cta":"#22C55E","bg":"#ECFEFF","text":"#164E63","notes":"Fresh cyan + clean green"},{"no":"58","product":"Home Services","primary":"#1E40AF","secondary":"#3B82F6","cta":"#F97316","bg":"#EFF6FF","text":"#1E3A8A","notes":"Professional blue + urgent orange"},{"no":"59","product":"Childcare / Daycare","primary":"#F472B6","secondary":"#FBCFE8","cta":"#22C55E","bg":"#FDF2F8","text":"#9D174D","notes":"Soft pink + safe green"},{"no":"60","product":"Senior Care / Elderly","primary":"#0369A1","secondary":"#38BDF8","cta":"#22C55E","bg":"#F0F9FF","text":"#0C4A6E","notes":"Calm blue + reassuring green"},{"no":"61","product":"Medical Clinic","primary":"#0891B2","secondary":"#22D3EE","cta":"#22C55E","bg":"#F0FDFA","text":"#134E4A","notes":"Medical teal + health green"},{"no":"62","product":"Pharmacy / Drug Store","primary":"#15803D","secondary":"#22C55E","cta":"#0369A1","bg":"#F0FDF4","text":"#14532D","notes":"Pharmacy green + trust blue"},{"no":"63","product":"Dental Practice","primary":"#0EA5E9","secondary":"#38BDF8","cta":"#FBBF24","bg":"#F0F9FF","text":"#0C4A6E","notes":"Fresh blue + smile yellow"},{"no":"64","product":"Veterinary Clinic","primary":"#0D9488","secondary":"#14B8A6","cta":"#F97316","bg":"#F0FDFA","text":"#134E4A","notes":"Caring teal + warm orange"},{"no":"65","product":"Florist / Plant Shop","primary":"#15803D","secondary":"#22C55E","cta":"#EC4899","bg":"#F0FDF4","text":"#14532D","notes":"Natural green + floral pink"},{"no":"66","product":"Bakery / Cafe","primary":"#92400E","secondary":"#B45309","cta":"#F8FAFC","bg":"#FEF3C7","text":"#78350F","notes":"Warm brown + cream white"},{"no":"67","product":"Coffee Shop","primary":"#78350F","secondary":"#92400E","cta":"#FBBF24","bg":"#FEF3C7","text":"#451A03","notes":"Coffee brown + warm gold"},{"no":"68","product":"Brewery / Winery","primary":"#7C2D12","secondary":"#B91C1C","cta":"#CA8A04","bg":"#FEF2F2","text":"#450A0A","notes":"Deep burgundy + craft gold"},{"no":"69","product":"Airline","primary":"#1E3A8A","secondary":"#3B82F6","cta":"#F97316","bg":"#EFF6FF","text":"#1E40AF","notes":"Sky blue + booking orange"},{"no":"70","product":"News / Media Platform","primary":"#DC2626","secondary":"#EF4444","cta":"#1E40AF","bg":"#FEF2F2","text":"#450A0A","notes":"Breaking red + link blue"},{"no":"71","product":"Magazine / Blog","primary":"#18181B","secondary":"#3F3F46","cta":"#EC4899","bg":"#FAFAFA","text":"#09090B","notes":"Editorial black + accent pink"},{"no":"72","product":"Freelancer Platform","primary":"#6366F1","secondary":"#818CF8","cta":"#22C55E","bg":"#EEF2FF","text":"#312E81","notes":"Creative indigo + hire green"},{"no":"73","product":"Consulting Firm","primary":"#0F172A","secondary":"#334155","cta":"#CA8A04","bg":"#F8FAFC","text":"#020617","notes":"Authority navy + premium gold"},{"no":"74","product":"Marketing Agency","primary":"#EC4899","secondary":"#F472B6","cta":"#06B6D4","bg":"#FDF2F8","text":"#831843","notes":"Bold pink + creative cyan"},{"no":"75","product":"Event Management","primary":"#7C3AED","secondary":"#A78BFA","cta":"#F97316","bg":"#FAF5FF","text":"#4C1D95","notes":"Excitement purple + action orange"},{"no":"76","product":"Conference / Webinar","primary":"#1E40AF","secondary":"#3B82F6","cta":"#22C55E","bg":"#EFF6FF","text":"#1E3A8A","notes":"Professional blue + join green"},{"no":"77","product":"Membership / Community","primary":"#7C3AED","secondary":"#A78BFA","cta":"#22C55E","bg":"#FAF5FF","text":"#4C1D95","notes":"Community purple + join green"},{"no":"78","product":"Newsletter Platform","primary":"#0369A1","secondary":"#0EA5E9","cta":"#F97316","bg":"#F0F9FF","text":"#0C4A6E","notes":"Trust blue + subscribe orange"},{"no":"79","product":"Digital Products","primary":"#6366F1","secondary":"#818CF8","cta":"#22C55E","bg":"#EEF2FF","text":"#312E81","notes":"Digital indigo + buy green"},{"no":"80","product":"Church / Religious Org","primary":"#7C3AED","secondary":"#A78BFA","cta":"#CA8A04","bg":"#FAF5FF","text":"#4C1D95","notes":"Spiritual purple + warm gold"},{"no":"81","product":"Sports Team / Club","primary":"#DC2626","secondary":"#EF4444","cta":"#FBBF24","bg":"#FEF2F2","text":"#7F1D1D","notes":"Team red + championship gold"},{"no":"82","product":"Museum / Gallery","primary":"#18181B","secondary":"#27272A","cta":"#F8FAFC","bg":"#FAFAFA","text":"#09090B","notes":"Gallery black + white space"},{"no":"83","product":"Theater / Cinema","primary":"#1E1B4B","secondary":"#312E81","cta":"#CA8A04","bg":"#0F0F23","text":"#F8FAFC","notes":"Dramatic dark + spotlight gold"},{"no":"84","product":"Language Learning App","primary":"#4F46E5","secondary":"#818CF8","cta":"#22C55E","bg":"#EEF2FF","text":"#312E81","notes":"Learning indigo + progress green"},{"no":"85","product":"Coding Bootcamp","primary":"#0F172A","secondary":"#1E293B","cta":"#22C55E","bg":"#020617","text":"#F8FAFC","notes":"Terminal dark + success green"},{"no":"86","product":"Cybersecurity Platform","primary":"#00FF41","secondary":"#0D0D0D","cta":"#FF3333","bg":"#000000","text":"#E0E0E0","notes":"Matrix green + alert red"},{"no":"87","product":"Developer Tool / IDE","primary":"#1E293B","secondary":"#334155","cta":"#22C55E","bg":"#0F172A","text":"#F8FAFC","notes":"Code dark + run green"},{"no":"88","product":"Biotech / Life Sciences","primary":"#0EA5E9","secondary":"#0284C7","cta":"#10B981","bg":"#F0F9FF","text":"#0C4A6E","notes":"DNA blue + life green"},{"no":"89","product":"Space Tech / Aerospace","primary":"#F8FAFC","secondary":"#94A3B8","cta":"#3B82F6","bg":"#0B0B10","text":"#F8FAFC","notes":"Star white + launch blue"},{"no":"90","product":"Architecture / Interior","primary":"#171717","secondary":"#404040","cta":"#D4AF37","bg":"#FFFFFF","text":"#171717","notes":"Minimal black + accent gold"},{"no":"91","product":"Quantum Computing","primary":"#00FFFF","secondary":"#7B61FF","cta":"#FF00FF","bg":"#050510","text":"#E0E0FF","notes":"Quantum cyan + interference purple"},{"no":"92","product":"Biohacking / Longevity","primary":"#FF4D4D","secondary":"#4D94FF","cta":"#00E676","bg":"#F5F5F7","text":"#1C1C1E","notes":"Bio red/blue + vitality green"},{"no":"93","product":"Autonomous Systems","primary":"#00FF41","secondary":"#008F11","cta":"#FF3333","bg":"#0D1117","text":"#E6EDF3","notes":"Terminal green + alert red"},{"no":"94","product":"Generative AI Art","primary":"#18181B","secondary":"#3F3F46","cta":"#EC4899","bg":"#FAFAFA","text":"#09090B","notes":"Canvas neutral + creative pink"},{"no":"95","product":"Spatial / Vision OS","primary":"#FFFFFF","secondary":"#E5E5E5","cta":"#007AFF","bg":"#888888","text":"#000000","notes":"Glass white + system blue"},{"no":"96","product":"Climate Tech","primary":"#059669","secondary":"#10B981","cta":"#FBBF24","bg":"#ECFDF5","text":"#064E3B","notes":"Nature green + solar gold"}];

T=[{"no":"1","name":"Classic Elegant","category":"Serif + Sans","heading":"Playfair Display","body":"Inter","mood":"elegant, luxury, sophisticated, timeless, premium","bestFor":"Luxury brands, fashion, spa, beauty, editorial, magazines","url":"https://fonts.google.com/share?selection.family=Inter:wght@300;400;500;600;700|Playfair+Display:wght@400;500;600;700"},{"no":"2","name":"Modern Professional","category":"Sans + Sans","heading":"Poppins","body":"Open Sans","mood":"modern, professional, clean, corporate, friendly","bestFor":"SaaS, corporate sites, business apps, startups, professional services","url":"https://fonts.google.com/share?selection.family=Open+Sans:wght@300;400;500;600;700|Poppins:wght@400;500;600;700"},{"no":"3","name":"Tech Startup","category":"Sans + Sans","heading":"Space Grotesk","body":"DM Sans","mood":"tech, startup, innovative, bold, futuristic","bestFor":"Tech companies, startups, SaaS, developer tools, AI products","url":"https://fonts.google.com/share?selection.family=DM+Sans:wght@400;500;700|Space+Grotesk:wght@400;500;600;700"},{"no":"4","name":"Editorial Classic","category":"Serif + Serif","heading":"Cormorant Garamond","body":"Libre Baskerville","mood":"editorial, classic, literary, traditional, refined","bestFor":"Publishing, blogs, news sites, literary magazines, book covers","url":"https://fonts.google.com/share?selection.family=Cormorant+Garamond:wght@400;500;600;700|Libre+Baskerville"},{"no":"5","name":"Minimal Swiss","category":"Sans + Sans","heading":"Inter","body":"Inter","mood":"minimal, clean, swiss, functional, neutral, professional","bestFor":"Dashboards, admin panels, documentation, enterprise apps","url":"https://fonts.google.com/share?selection.family=Inter:wght@300;400;500;600;700"},{"no":"6","name":"Playful Creative","category":"Display + Sans","heading":"Fredoka","body":"Nunito","mood":"playful, friendly, fun, creative, warm, approachable","bestFor":"Children's apps, educational, gaming, creative tools","url":"https://fonts.google.com/share?selection.family=Fredoka:wght@400;500;600;700|Nunito:wght@300;400;500;600;700"},{"no":"7","name":"Bold Statement","category":"Display + Sans","heading":"Bebas Neue","body":"Source Sans 3","mood":"bold, impactful, strong, dramatic, headlines","bestFor":"Marketing sites, portfolios, agencies, event pages, sports","url":"https://fonts.google.com/share?selection.family=Bebas+Neue|Source+Sans+3:wght@300;400;500;600;700"},{"no":"8","name":"Wellness Calm","category":"Serif + Sans","heading":"Lora","body":"Raleway","mood":"calm, wellness, health, relaxing, natural, organic","bestFor":"Health apps, wellness, spa, meditation, yoga","url":"https://fonts.google.com/share?selection.family=Lora:wght@400;500;600;700|Raleway:wght@300;400;500;600;700"},{"no":"9","name":"Developer Mono","category":"Mono + Sans","heading":"JetBrains Mono","body":"IBM Plex Sans","mood":"code, developer, technical, precise, hacker","bestFor":"Developer tools, documentation, code editors, tech blogs","url":"https://fonts.google.com/share?selection.family=IBM+Plex+Sans:wght@300;400;500;600;700|JetBrains+Mono:wght@400;500;600;700"},{"no":"10","name":"Retro Vintage","category":"Display + Serif","heading":"Abril Fatface","body":"Merriweather","mood":"retro, vintage, nostalgic, dramatic, decorative","bestFor":"Vintage brands, breweries, restaurants, creative portfolios","url":"https://fonts.google.com/share?selection.family=Abril+Fatface|Merriweather:wght@300;400;700"},{"no":"11","name":"Geometric Modern","category":"Sans + Sans","heading":"Outfit","body":"Work Sans","mood":"geometric, modern, clean, balanced, contemporary","bestFor":"General purpose, portfolios, agencies, modern brands","url":"https://fonts.google.com/share?selection.family=Outfit:wght@300;400;500;600;700|Work+Sans:wght@300;400;500;600;700"},{"no":"12","name":"Luxury Serif","category":"Serif + Sans","heading":"Cormorant","body":"Montserrat","mood":"luxury, high-end, fashion, elegant, refined, premium","bestFor":"Fashion brands, luxury e-commerce, jewelry, high-end services","url":"https://fonts.google.com/share?selection.family=Cormorant:wght@400;500;600;700|Montserrat:wght@300;400;500;600;700"},{"no":"13","name":"Friendly SaaS","category":"Sans + Sans","heading":"Plus Jakarta Sans","body":"Plus Jakarta Sans","mood":"friendly, modern, saas, clean, approachable","bestFor":"SaaS products, web apps, dashboards, B2B, productivity tools","url":"https://fonts.google.com/share?selection.family=Plus+Jakarta+Sans:wght@300;400;500;600;700"},{"no":"14","name":"News Editorial","category":"Serif + Sans","heading":"Newsreader","body":"Roboto","mood":"news, editorial, journalism, trustworthy, readable","bestFor":"News sites, blogs, magazines, journalism, content-heavy sites","url":"https://fonts.google.com/share?selection.family=Newsreader:wght@400;500;600;700|Roboto:wght@300;400;500;700"},{"no":"15","name":"Handwritten Charm","category":"Script + Sans","heading":"Caveat","body":"Quicksand","mood":"handwritten, personal, friendly, casual, warm","bestFor":"Personal blogs, invitations, creative portfolios, lifestyle","url":"https://fonts.google.com/share?selection.family=Caveat:wght@400;500;600;700|Quicksand:wght@300;400;500;600;700"},{"no":"16","name":"Corporate Trust","category":"Sans + Sans","heading":"Lexend","body":"Source Sans 3","mood":"corporate, trustworthy, accessible, readable, professional","bestFor":"Enterprise, government, healthcare, finance, accessibility","url":"https://fonts.google.com/share?selection.family=Lexend:wght@300;400;500;600;700|Source+Sans+3:wght@300;400;500;600;700"},{"no":"17","name":"Brutalist Raw","category":"Mono + Mono","heading":"Space Mono","body":"Space Mono","mood":"brutalist, raw, technical, monospace, minimal, stark","bestFor":"Brutalist designs, developer portfolios, experimental, tech art","url":"https://fonts.google.com/share?selection.family=Space+Mono:wght@400;700"},{"no":"18","name":"Fashion Forward","category":"Sans + Sans","heading":"Syne","body":"Manrope","mood":"fashion, avant-garde, creative, bold, artistic, edgy","bestFor":"Fashion brands, creative agencies, art galleries, design studios","url":"https://fonts.google.com/share?selection.family=Manrope:wght@300;400;500;600;700|Syne:wght@400;500;600;700"},{"no":"19","name":"Soft Rounded","category":"Sans + Sans","heading":"Varela Round","body":"Nunito Sans","mood":"soft, rounded, friendly, approachable, warm, gentle","bestFor":"Children's products, pet apps, friendly brands, wellness","url":"https://fonts.google.com/share?selection.family=Nunito+Sans:wght@300;400;500;600;700|Varela+Round"},{"no":"20","name":"Premium Sans","category":"Sans + Sans","heading":"Satoshi","body":"General Sans","mood":"premium, modern, clean, sophisticated, versatile","bestFor":"Premium brands, modern agencies, SaaS, portfolios, startups","url":"https://fonts.google.com/share?selection.family=DM+Sans:wght@400;500;700"},{"no":"21","name":"Vietnamese Friendly","category":"Sans + Sans","heading":"Be Vietnam Pro","body":"Noto Sans","mood":"vietnamese, international, readable, clean, multilingual","bestFor":"Vietnamese sites, multilingual apps, international products","url":"https://fonts.google.com/share?selection.family=Be+Vietnam+Pro:wght@300;400;500;600;700|Noto+Sans:wght@300;400;500;600;700"},{"no":"22","name":"Japanese Elegant","category":"Serif + Sans","heading":"Noto Serif JP","body":"Noto Sans JP","mood":"japanese, elegant, traditional, modern, multilingual","bestFor":"Japanese sites, restaurants, cultural sites, anime/manga","url":"https://fonts.google.com/share?selection.family=Noto+Sans+JP:wght@300;400;500;700|Noto+Serif+JP:wght@400;500;600;700"},{"no":"23","name":"Korean Modern","category":"Sans + Sans","heading":"Noto Sans KR","body":"Noto Sans KR","mood":"korean, modern, clean, professional, multilingual","bestFor":"Korean sites, K-beauty, K-pop, Korean businesses","url":"https://fonts.google.com/share?selection.family=Noto+Sans+KR:wght@300;400;500;700"},{"no":"24","name":"Chinese Traditional","category":"Serif + Sans","heading":"Noto Serif TC","body":"Noto Sans TC","mood":"chinese, traditional, elegant, cultural, multilingual","bestFor":"Traditional Chinese sites, cultural content, Taiwan/Hong Kong","url":"https://fonts.google.com/share?selection.family=Noto+Sans+TC:wght@300;400;500;700|Noto+Serif+TC:wght@400;500;600;700"},{"no":"25","name":"Chinese Simplified","category":"Sans + Sans","heading":"Noto Sans SC","body":"Noto Sans SC","mood":"chinese, simplified, modern, professional, multilingual","bestFor":"Simplified Chinese sites, mainland China market, business apps","url":"https://fonts.google.com/share?selection.family=Noto+Sans+SC:wght@300;400;500;700"},{"no":"26","name":"Arabic Elegant","category":"Serif + Sans","heading":"Noto Naskh Arabic","body":"Noto Sans Arabic","mood":"arabic, elegant, traditional, cultural, RTL","bestFor":"Arabic sites, Middle East market, Islamic content, bilingual","url":"https://fonts.google.com/share?selection.family=Noto+Naskh+Arabic:wght@400;500;600;700|Noto+Sans+Arabic:wght@300;400;500;700"},{"no":"27","name":"Thai Modern","category":"Sans + Sans","heading":"Noto Sans Thai","body":"Noto Sans Thai","mood":"thai, modern, readable, clean, multilingual","bestFor":"Thai sites, Southeast Asia, tourism, Thai restaurants","url":"https://fonts.google.com/share?selection.family=Noto+Sans+Thai:wght@300;400;500;700"},{"no":"28","name":"Hebrew Modern","category":"Sans + Sans","heading":"Noto Sans Hebrew","body":"Noto Sans Hebrew","mood":"hebrew, modern, RTL, clean, professional","bestFor":"Hebrew sites, Israeli market, Jewish content, bilingual","url":"https://fonts.google.com/share?selection.family=Noto+Sans+Hebrew:wght@300;400;500;700"},{"no":"29","name":"Legal Professional","category":"Serif + Sans","heading":"EB Garamond","body":"Lato","mood":"legal, professional, traditional, trustworthy, formal","bestFor":"Law firms, legal services, contracts, formal documents","url":"https://fonts.google.com/share?selection.family=EB+Garamond:wght@400;500;600;700|Lato:wght@300;400;700"},{"no":"30","name":"Medical Clean","category":"Sans + Sans","heading":"Figtree","body":"Noto Sans","mood":"medical, clean, accessible, professional, healthcare","bestFor":"Healthcare, medical clinics, pharma, health apps","url":"https://fonts.google.com/share?selection.family=Figtree:wght@300;400;500;600;700|Noto+Sans:wght@300;400;500;700"},{"no":"31","name":"Financial Trust","category":"Sans + Sans","heading":"IBM Plex Sans","body":"IBM Plex Sans","mood":"financial, trustworthy, professional, corporate, banking","bestFor":"Banks, finance, insurance, investment, fintech, enterprise","url":"https://fonts.google.com/share?selection.family=IBM+Plex+Sans:wght@300;400;500;600;700"},{"no":"32","name":"Real Estate Luxury","category":"Serif + Sans","heading":"Cinzel","body":"Josefin Sans","mood":"real estate, luxury, elegant, sophisticated, property","bestFor":"Real estate, luxury properties, architecture, interior design","url":"https://fonts.google.com/share?selection.family=Cinzel:wght@400;500;600;700|Josefin+Sans:wght@300;400;500;600;700"},{"no":"33","name":"Restaurant Menu","category":"Serif + Sans","heading":"Playfair Display SC","body":"Karla","mood":"restaurant, menu, culinary, elegant, foodie, hospitality","bestFor":"Restaurants, cafes, food blogs, culinary, hospitality","url":"https://fonts.google.com/share?selection.family=Karla:wght@300;400;500;600;700|Playfair+Display+SC:wght@400;700"},{"no":"34","name":"Art Deco","category":"Display + Sans","heading":"Poiret One","body":"Didact Gothic","mood":"art deco, vintage, 1920s, elegant, decorative, gatsby","bestFor":"Vintage events, art deco themes, luxury hotels, cocktails","url":"https://fonts.google.com/share?selection.family=Didact+Gothic|Poiret+One"},{"no":"35","name":"Magazine Style","category":"Serif + Sans","heading":"Libre Bodoni","body":"Public Sans","mood":"magazine, editorial, publishing, refined, journalism","bestFor":"Magazines, online publications, editorial content, journalism","url":"https://fonts.google.com/share?selection.family=Libre+Bodoni:wght@400;500;600;700|Public+Sans:wght@300;400;500;600;700"},{"no":"36","name":"Crypto / Web3","category":"Sans + Sans","heading":"Orbitron","body":"Exo 2","mood":"crypto, web3, futuristic, tech, blockchain, digital","bestFor":"Crypto platforms, NFT, blockchain, web3, futuristic tech","url":"https://fonts.google.com/share?selection.family=Exo+2:wght@300;400;500;600;700|Orbitron:wght@400;500;600;700"},{"no":"37","name":"Gaming Bold","category":"Display + Sans","heading":"Russo One","body":"Chakra Petch","mood":"gaming, bold, action, esports, competitive, energetic","bestFor":"Gaming, esports, action games, competitive sports","url":"https://fonts.google.com/share?selection.family=Chakra+Petch:wght@300;400;500;600;700|Russo+One"},{"no":"38","name":"Indie / Craft","category":"Display + Sans","heading":"Amatic SC","body":"Cabin","mood":"indie, craft, handmade, artisan, organic, creative","bestFor":"Craft brands, indie products, artisan, handmade, organic","url":"https://fonts.google.com/share?selection.family=Amatic+SC:wght@400;700|Cabin:wght@400;500;600;700"},{"no":"39","name":"Startup Bold","category":"Sans + Sans","heading":"Clash Display","body":"Satoshi","mood":"startup, bold, modern, innovative, confident, dynamic","bestFor":"Startups, pitch decks, product launches, bold brands","url":"https://fonts.google.com/share?selection.family=Outfit:wght@400;500;600;700|Rubik:wght@300;400;500;600;700"},{"no":"40","name":"E-commerce Clean","category":"Sans + Sans","heading":"Rubik","body":"Nunito Sans","mood":"ecommerce, clean, shopping, product, retail, conversion","bestFor":"E-commerce, online stores, product pages, retail, shopping","url":"https://fonts.google.com/share?selection.family=Nunito+Sans:wght@300;400;500;600;700|Rubik:wght@300;400;500;600;700"},{"no":"41","name":"Academic / Research","category":"Serif + Sans","heading":"Crimson Pro","body":"Atkinson Hyperlegible","mood":"academic, research, scholarly, accessible, readable","bestFor":"Universities, research papers, academic journals, educational","url":"https://fonts.google.com/share?selection.family=Atkinson+Hyperlegible:wght@400;700|Crimson+Pro:wght@400;500;600;700"},{"no":"42","name":"Dashboard Data","category":"Mono + Sans","heading":"Fira Code","body":"Fira Sans","mood":"dashboard, data, analytics, code, technical, precise","bestFor":"Dashboards, analytics, data visualization, admin panels","url":"https://fonts.google.com/share?selection.family=Fira+Code:wght@400;500;600;700|Fira+Sans:wght@300;400;500;600;700"},{"no":"43","name":"Music / Entertainment","category":"Display + Sans","heading":"Righteous","body":"Poppins","mood":"music, entertainment, fun, energetic, bold, performance","bestFor":"Music platforms, entertainment, events, festivals","url":"https://fonts.google.com/share?selection.family=Poppins:wght@300;400;500;600;700|Righteous"},{"no":"44","name":"Minimalist Portfolio","category":"Sans + Sans","heading":"Archivo","body":"Space Grotesk","mood":"minimal, portfolio, designer, creative, clean, artistic","bestFor":"Design portfolios, creative professionals, minimalist brands","url":"https://fonts.google.com/share?selection.family=Archivo:wght@300;400;500;600;700|Space+Grotesk:wght@300;400;500;600;700"},{"no":"45","name":"Kids / Education","category":"Display + Sans","heading":"Baloo 2","body":"Comic Neue","mood":"kids, education, playful, friendly, colorful, learning","bestFor":"Children's apps, educational games, kid-friendly content","url":"https://fonts.google.com/share?selection.family=Baloo+2:wght@400;500;600;700|Comic+Neue:wght@300;400;700"},{"no":"46","name":"Wedding / Romance","category":"Script + Serif","heading":"Great Vibes","body":"Cormorant Infant","mood":"wedding, romance, elegant, script, invitation, feminine","bestFor":"Wedding sites, invitations, romantic brands, bridal","url":"https://fonts.google.com/share?selection.family=Cormorant+Infant:wght@300;400;500;600;700|Great+Vibes"},{"no":"47","name":"Science / Tech","category":"Sans + Sans","heading":"Exo","body":"Roboto Mono","mood":"science, technology, research, data, futuristic, precise","bestFor":"Science, research, tech documentation, data-heavy sites","url":"https://fonts.google.com/share?selection.family=Exo:wght@300;400;500;600;700|Roboto+Mono:wght@300;400;500;700"},{"no":"48","name":"Accessibility First","category":"Sans + Sans","heading":"Atkinson Hyperlegible","body":"Atkinson Hyperlegible","mood":"accessible, readable, inclusive, WCAG, dyslexia-friendly","bestFor":"Accessibility-critical sites, government, healthcare, inclusive","url":"https://fonts.google.com/share?selection.family=Atkinson+Hyperlegible:wght@400;700"},{"no":"49","name":"Sports / Fitness","category":"Sans + Sans","heading":"Barlow Condensed","body":"Barlow","mood":"sports, fitness, athletic, energetic, condensed, action","bestFor":"Sports, fitness, gyms, athletic brands, competition","url":"https://fonts.google.com/share?selection.family=Barlow+Condensed:wght@400;500;600;700|Barlow:wght@300;400;500;600;700"},{"no":"50","name":"Luxury Minimalist","category":"Serif + Sans","heading":"Bodoni Moda","body":"Jost","mood":"luxury, minimalist, high-end, sophisticated, refined","bestFor":"Luxury minimalist brands, high-end fashion, premium products","url":"https://fonts.google.com/share?selection.family=Bodoni+Moda:wght@400;500;600;700|Jost:wght@300;400;500;600;700"},{"no":"51","name":"Tech / HUD Mono","category":"Mono + Mono","heading":"Share Tech Mono","body":"Fira Code","mood":"tech, futuristic, hud, sci-fi, data, monospaced","bestFor":"Sci-fi interfaces, developer tools, cybersecurity, dashboards","url":"https://fonts.google.com/share?selection.family=Fira+Code:wght@300;400;500;600;700|Share+Tech+Mono"},{"no":"52","name":"Pixel Retro","category":"Display + Sans","heading":"Press Start 2P","body":"VT323","mood":"pixel, retro, gaming, 8-bit, nostalgic, arcade","bestFor":"Pixel art games, retro websites, creative portfolios","url":"https://fonts.google.com/share?selection.family=Press+Start+2P|VT323"},{"no":"53","name":"Neubrutalist Bold","category":"Display + Sans","heading":"Lexend Mega","body":"Public Sans","mood":"bold, neubrutalist, loud, strong, geometric, quirky","bestFor":"Neubrutalist designs, Gen Z brands, bold marketing","url":"https://fonts.google.com/share?selection.family=Lexend+Mega:wght@100..900|Public+Sans:wght@100..900"},{"no":"54","name":"Academic / Archival","category":"Serif + Serif","heading":"EB Garamond","body":"Crimson Text","mood":"academic, old-school, university, research, traditional","bestFor":"University sites, archives, research papers, history","url":"https://fonts.google.com/share?selection.family=Crimson+Text:wght@400;600;700|EB+Garamond:wght@400;500;600;700;800"},{"no":"55","name":"Spatial Clear","category":"Sans + Sans","heading":"Inter","body":"Inter","mood":"spatial, legible, glass, system, clean, neutral","bestFor":"Spatial computing, AR/VR, glassmorphism interfaces","url":"https://fonts.google.com/share?selection.family=Inter:wght@300;400;500;600"},{"no":"56","name":"Kinetic Motion","category":"Display + Mono","heading":"Syncopate","body":"Space Mono","mood":"kinetic, motion, futuristic, speed, wide, tech","bestFor":"Music festivals, automotive, high-energy brands","url":"https://fonts.google.com/share?selection.family=Space+Mono:wght@400;700|Syncopate:wght@400;700"},{"no":"57","name":"Gen Z Brutal","category":"Display + Sans","heading":"Anton","body":"Epilogue","mood":"brutal, loud, shouty, meme, internet, bold","bestFor":"Gen Z marketing, streetwear, viral campaigns","url":"https://fonts.google.com/share?selection.family=Anton|Epilogue:wght@400;500;600;700"}];

// ── FILTERS per tab
var F={s:[],c:[],t:[]};
var FTYPES_S=['General','Landing Page','BI/Analytics'];
var FTYPES_T=['Sans + Sans','Serif + Sans','Display + Sans','Mono + Sans','Serif + Serif','Mono + Mono','Script + Sans','Script + Serif','Display + Serif','Display + Mono'];

function setTab(t,btn){
  TAB=t;
  document.querySelectorAll('.tab').forEach(function(b){b.classList.remove('on')});
  btn.classList.add('on');
  document.getElementById('q').value='';
  if(t==='m'){
    document.getElementById('filters').innerHTML='';
    document.getElementById('cnt').textContent='';
    renderMotion();
    return;
  }
  buildFilters();
  render();
}

function buildFilters(){
  var wrap=document.getElementById('filters');
  wrap.innerHTML='';
  var opts=[];
  if(TAB==='s') opts=FTYPES_S;
  else if(TAB==='t') opts=FTYPES_T;
  else{wrap.innerHTML='';return;}
  opts.forEach(function(o){
    var b=document.createElement('button');
    b.className='fbtn'+(F[TAB].includes(o)?' on':'');
    b.textContent=o;
    b.onclick=function(){
      var idx=F[TAB].indexOf(o);
      if(idx>-1) F[TAB].splice(idx,1); else F[TAB].push(o);
      b.classList.toggle('on');
      render();
    };
    wrap.appendChild(b);
  });
}

function render(){
  window.motionRunning=false;
  var g=document.getElementById('grid');
  g.style.display='';
  g.style.gridTemplateColumns='';
  g.style.padding='';
  document.querySelector('.wrap').classList.remove('motion-mode');
  var q=document.getElementById('q').value.toLowerCase().trim();
  var data=TAB==='s'?S:TAB==='c'?C:T;
  var active=F[TAB];
  var filtered=data.filter(function(r){
    var field=TAB==='s'?r.type:TAB==='t'?r.category:'';
    if(active.length&&!active.includes(field)) return false;
    if(!q) return true;
    return JSON.stringify(r).toLowerCase().includes(q);
  });
  document.getElementById('cnt').textContent=filtered.length+' / '+data.length;
  var g=document.getElementById('grid');
  g.innerHTML='';
  if(!filtered.length){
    g.innerHTML='<div class="empty">Ingen resultater for "'+document.getElementById('q').value+'"</div>';
    return;
  }
  filtered.forEach(function(r){
    var c=document.createElement('div');
    c.className='card';
    if(TAB==='s') c.innerHTML=buildStyle(r);
    else if(TAB==='c') c.innerHTML=buildColor(r);
    else c.innerHTML=buildTypo(r);
    g.appendChild(c);
  });
}

function cxBadge(complexity){
  if(complexity==='Low') return 'badge badge-low';
  if(complexity==='High') return 'badge badge-high';
  return 'badge badge-med';
}

// ── Style preview engine ──
// srcdoc mini-page per style category
var SDOC={};
(function(){
  function mk(bg,nav,card,btn,txt,extra){
    return '<!DOCTYPE html><html><head><meta charset="UTF-8"><style>'
      +'*{margin:0;padding:0;box-sizing:border-box}'
      +'body{background:'+bg+';font-family:'+'"Segoe UI",sans-serif'+';overflow:hidden;height:120px;'+extra+'}'
      +'.nav{background:'+nav+';padding:7px 12px;display:flex;align-items:center;gap:8px}'
      +'.logo{width:20px;height:20px;border-radius:4px;background:'+btn+'}'
      +'.nl{height:5px;border-radius:3px;background:'+txt+';opacity:.35}'
      +'.nl1{width:32px}.nl2{width:22px}.nl3{width:22px}'
      +'.content{padding:10px 12px}'
      +'.h1{height:9px;border-radius:4px;background:'+txt+';opacity:.85;width:68%;margin-bottom:6px}'
      +'.h2{height:6px;border-radius:3px;background:'+txt+';opacity:.4;width:48%;margin-bottom:10px}'
      +'.btn{display:inline-block;background:'+btn+';color:#fff;padding:5px 12px;border-radius:6px;font-size:10px;font-weight:600}'
      +card
      +'</style></head><body>'
      +'<div class="nav"><div class="logo"></div><div class="nl nl1"></div><div style="flex:1"></div><div class="nl nl2"></div><div class="nl nl3"></div></div>'
      +'<div class="content"><div class="h1"></div><div class="h2"></div><div class="btn">Get started</div></div>'
      +'</body></html>';
  }

  // Minimalism
  SDOC.minimalism=mk('#ffffff','#fafafa','',
    '#111111','#111111',
    'body{border:1px solid #eee}'+
    '.nav{border-bottom:1px solid #eee;background:#fff}'+
    '.btn{background:#111;border-radius:3px}'+
    '.h1{border-radius:0}'+'.h2{border-radius:0}');

  // Glassmorphism
  SDOC.glass='<!DOCTYPE html><html><head><meta charset="UTF-8"><style>'
    +'*{margin:0;padding:0;box-sizing:border-box}'
    +'body{background:linear-gradient(135deg,#7c3aed 0%,#06b6d4 60%,#ec4899 100%);overflow:hidden;height:120px}'
    +'.nav{background:rgba(255,255,255,.15);backdrop-filter:blur(10px);padding:7px 12px;display:flex;align-items:center;gap:8px;border-bottom:1px solid rgba(255,255,255,.2)}'
    +'.logo{width:20px;height:20px;border-radius:6px;background:rgba(255,255,255,.4)}'
    +'.nl{height:5px;border-radius:3px;background:rgba(255,255,255,.5)}'
    +'.nl1{width:30px}.nl2{width:20px}'
    +'.content{padding:10px 12px}'
    +'.card{background:rgba(255,255,255,.15);backdrop-filter:blur(12px);border:1px solid rgba(255,255,255,.25);border-radius:12px;padding:10px 12px}'
    +'.h1{height:8px;border-radius:4px;background:rgba(255,255,255,.9);width:65%;margin-bottom:6px}'
    +'.h2{height:5px;border-radius:3px;background:rgba(255,255,255,.5);width:45%;margin-bottom:10px}'
    +'.btn{display:inline-block;background:rgba(255,255,255,.25);border:1px solid rgba(255,255,255,.4);backdrop-filter:blur(8px);color:#fff;padding:4px 10px;border-radius:20px;font-size:10px;font-weight:600}'
    +'</style></head><body>'
    +'<div class="nav"><div class="logo"></div><div class="nl nl1"></div><div style="flex:1"></div><div class="nl nl2"></div></div>'
    +'<div class="content"><div class="card"><div class="h1"></div><div class="h2"></div><div class="btn">Get started</div></div></div>'
    +'</body></html>';

  // Brutalism
  SDOC.brutalism='<!DOCTYPE html><html><head><meta charset="UTF-8"><style>'
    +'*{margin:0;padding:0;box-sizing:border-box}'
    +'body{background:#ffffff;overflow:hidden;height:120px;border:3px solid #000}'
    +'.nav{background:#FF0000;border-bottom:3px solid #000;padding:7px 12px;display:flex;align-items:center;gap:8px}'
    +'.logo{width:22px;height:22px;background:#FFFF00;border:2px solid #000}'
    +'.nl{height:6px;background:#000;border:1px solid #000}'
    +'.nl1{width:35px}.nl2{width:25px}'
    +'.content{padding:10px 12px}'
    +'.h1{height:10px;background:#0000FF;width:65%;margin-bottom:5px}'
    +'.h2{height:7px;background:#000;opacity:.6;width:45%;margin-bottom:10px}'
    +'.btn{display:inline-block;background:#FFFF00;border:3px solid #000;color:#000;padding:4px 10px;font-size:10px;font-weight:900;text-transform:uppercase;box-shadow:3px 3px 0 #000}'
    +'</style></head><body>'
    +'<div class="nav"><div class="logo"></div><div class="nl nl1"></div><div style="flex:1"></div><div class="nl nl2"></div></div>'
    +'<div class="content"><div class="h1"></div><div class="h2"></div><div class="btn">GO NOW</div></div>'
    +'</body></html>';

  // Neumorphism
  SDOC.neumorphism='<!DOCTYPE html><html><head><meta charset="UTF-8"><style>'
    +'*{margin:0;padding:0;box-sizing:border-box}'
    +'body{background:#e8e8e8;overflow:hidden;height:120px}'
    +'.nav{background:#e8e8e8;padding:7px 14px;display:flex;align-items:center;gap:8px;box-shadow:0 2px 8px rgba(0,0,0,.08)}'
    +'.logo{width:22px;height:22px;border-radius:8px;background:#e8e8e8;box-shadow:-3px -3px 7px #fff,3px 3px 7px rgba(0,0,0,.18)}'
    +'.nl{height:5px;border-radius:3px;background:#e8e8e8;box-shadow:inset -2px -2px 4px #fff,inset 2px 2px 4px rgba(0,0,0,.15)}'
    +'.nl1{width:32px}.nl2{width:22px}'
    +'.content{padding:12px 14px}'
    +'.card{background:#e8e8e8;border-radius:14px;padding:10px 12px;box-shadow:-5px -5px 12px #fff,5px 5px 12px rgba(0,0,0,.18)}'
    +'.h1{height:7px;border-radius:4px;background:#e8e8e8;box-shadow:inset -2px -2px 4px #fff,inset 2px 2px 4px rgba(0,0,0,.15);width:60%;margin-bottom:6px}'
    +'.h2{height:5px;border-radius:3px;background:#e8e8e8;box-shadow:inset -1px -1px 3px #fff,inset 1px 1px 3px rgba(0,0,0,.12);width:40%;margin-bottom:10px}'
    +'.btn{display:inline-block;background:#e8e8e8;box-shadow:-3px -3px 7px #fff,3px 3px 7px rgba(0,0,0,.2);border-radius:8px;color:#666;padding:5px 12px;font-size:10px;font-weight:600}'
    +'</style></head><body>'
    +'<div class="nav"><div class="logo"></div><div class="nl nl1"></div><div style="flex:1"></div><div class="nl nl2"></div></div>'
    +'<div class="content"><div class="card"><div class="h1"></div><div class="h2"></div><div class="btn">Confirm</div></div></div>'
    +'</body></html>';

  // Dark Mode / OLED
  SDOC.dark=mk('#000000','#111111','',
    '#22C55E','rgba(255,255,255,.9)',
    '.nav{border-bottom:1px solid #222}'+
    '.btn{background:#22C55E;color:#000;border-radius:6px}');

  // Cyberpunk
  SDOC.cyberpunk='<!DOCTYPE html><html><head><meta charset="UTF-8"><style>'
    +'*{margin:0;padding:0;box-sizing:border-box}'
    +'body{background:#0D0D0D;overflow:hidden;height:120px}'
    +'.nav{background:#0D0D0D;border-bottom:1px solid #00FF41;padding:7px 12px;display:flex;align-items:center;gap:8px}'
    +'.logo{width:20px;height:20px;background:#00FF41;clip-path:polygon(50% 0%,100% 50%,50% 100%,0% 50%)}'
    +'.nl{height:4px;background:#00FF41;opacity:.6}'
    +'.nl1{width:32px}.nl2{width:22px}'
    +'.content{padding:10px 12px}'
    +'.h1{height:8px;background:linear-gradient(90deg,#00FF41,#00CFFF);width:65%;margin-bottom:5px;clip-path:polygon(0 0,calc(100% - 6px) 0,100% 100%,0 100%)}'
    +'.h2{height:5px;background:#FF00FF;opacity:.6;width:45%;margin-bottom:10px}'
    +'.btn{display:inline-block;background:transparent;border:1px solid #00FF41;color:#00FF41;padding:4px 10px;font-size:10px;font-weight:600;text-transform:uppercase;letter-spacing:.1em;box-shadow:0 0 8px rgba(0,255,65,.4);clip-path:polygon(0 0,calc(100% - 6px) 0,100% 100%,6px 100%)}'
    +'.scan{position:fixed;top:0;left:0;right:0;bottom:0;background:repeating-linear-gradient(0deg,transparent,transparent 2px,rgba(0,255,65,.03) 2px,rgba(0,255,65,.03) 4px);pointer-events:none}'
    +'</style></head><body>'
    +'<div class="scan"></div>'
    +'<div class="nav"><div class="logo"></div><div class="nl nl1"></div><div style="flex:1"></div><div class="nl nl2"></div></div>'
    +'<div class="content"><div class="h1"></div><div class="h2"></div><div class="btn">ENTER SYSTEM</div></div>'
    +'</body></html>';

  // Claymorphism
  SDOC.clay='<!DOCTYPE html><html><head><meta charset="UTF-8"><style>'
    +'*{margin:0;padding:0;box-sizing:border-box}'
    +'body{background:#FFD6E7;overflow:hidden;height:120px}'
    +'.nav{background:#FFD6E7;padding:7px 12px;display:flex;align-items:center;gap:8px}'
    +'.logo{width:22px;height:22px;border-radius:10px;background:#A8D8EA;border:3px solid #fff;box-shadow:0 4px 0 rgba(0,0,0,.12),0 6px 12px rgba(0,0,0,.1)}'
    +'.nl{height:6px;border-radius:6px;background:#fff;box-shadow:0 2px 0 rgba(0,0,0,.1)}'
    +'.nl1{width:32px}.nl2{width:22px}'
    +'.content{padding:8px 12px}'
    +'.card{background:#A8D8EA;border-radius:20px;border:3px solid #fff;padding:9px 12px;box-shadow:0 6px 0 rgba(0,0,0,.15),0 8px 16px rgba(0,0,0,.1)}'
    +'.h1{height:8px;border-radius:8px;background:#fff;width:62%;margin-bottom:5px;box-shadow:0 2px 0 rgba(0,0,0,.1)}'
    +'.h2{height:6px;border-radius:6px;background:rgba(255,255,255,.6);width:42%;margin-bottom:8px}'
    +'.btn{display:inline-block;background:#FF6B9D;border:3px solid #fff;border-radius:12px;color:#fff;padding:4px 10px;font-size:10px;font-weight:700;box-shadow:0 4px 0 rgba(0,0,0,.15)}'
    +'</style></head><body>'
    +'<div class="nav"><div class="logo"></div><div class="nl nl1"></div><div style="flex:1"></div><div class="nl nl2"></div></div>'
    +'<div class="content"><div class="card"><div class="h1"></div><div class="h2"></div><div class="btn">Let\'s go!</div></div></div>'
    +'</body></html>';

  // Neubrutalism
  SDOC.neubrutalism='<!DOCTYPE html><html><head><meta charset="UTF-8"><style>'
    +'*{margin:0;padding:0;box-sizing:border-box}'
    +'body{background:#fff;overflow:hidden;height:120px}'
    +'.nav{background:#fff;border-bottom:3px solid #000;padding:7px 12px;display:flex;align-items:center;gap:8px}'
    +'.logo{width:22px;height:22px;background:#FFE000;border:2px solid #000;border-radius:4px}'
    +'.nl{height:6px;background:#000;border-radius:2px}'
    +'.nl1{width:32px}.nl2{width:22px}'
    +'.content{padding:10px 12px}'
    +'.card{background:#FFE000;border:3px solid #000;border-radius:4px;padding:9px 12px;box-shadow:4px 4px 0 #000}'
    +'.h1{height:8px;background:#000;width:62%;margin-bottom:5px;border-radius:2px}'
    +'.h2{height:6px;background:#000;opacity:.5;width:40%;margin-bottom:8px;border-radius:2px}'
    +'.btn{display:inline-block;background:#000;color:#FFE000;border:2px solid #000;padding:4px 10px;font-size:10px;font-weight:800;text-transform:uppercase;border-radius:3px;box-shadow:2px 2px 0 #FFE000}'
    +'</style></head><body>'
    +'<div class="nav"><div class="logo"></div><div class="nl nl1"></div><div style="flex:1"></div><div class="nl nl2"></div></div>'
    +'<div class="content"><div class="card"><div class="h1"></div><div class="h2"></div><div class="btn">DO IT NOW</div></div></div>'
    +'</body></html>';

  // Aurora / Gradient
  SDOC.aurora='<!DOCTYPE html><html><head><meta charset="UTF-8"><style>'
    +'*{margin:0;padding:0;box-sizing:border-box}'
    +'body{background:#0a0a14;overflow:hidden;height:120px}'
    +'.bg{position:absolute;inset:0;background:radial-gradient(ellipse at 20% 40%,rgba(124,106,240,.6) 0%,transparent 55%),radial-gradient(ellipse at 80% 60%,rgba(56,189,248,.5) 0%,transparent 55%),radial-gradient(ellipse at 50% 80%,rgba(232,121,160,.4) 0%,transparent 50%)}'
    +'.nav{position:relative;z-index:1;background:rgba(255,255,255,.05);border-bottom:1px solid rgba(255,255,255,.1);padding:7px 12px;display:flex;align-items:center;gap:8px;backdrop-filter:blur(8px)}'
    +'.logo{width:20px;height:20px;border-radius:50%;background:linear-gradient(135deg,#7c6af0,#38bdf8)}'
    +'.nl{height:5px;border-radius:3px;background:rgba(255,255,255,.4)}'
    +'.nl1{width:30px}.nl2{width:20px}'
    +'.content{position:relative;z-index:1;padding:10px 12px}'
    +'.h1{height:8px;border-radius:4px;background:rgba(255,255,255,.85);width:65%;margin-bottom:5px}'
    +'.h2{height:5px;border-radius:3px;background:rgba(255,255,255,.4);width:45%;margin-bottom:10px}'
    +'.btn{display:inline-block;background:linear-gradient(135deg,#7c6af0,#e879a0);color:#fff;padding:5px 12px;border-radius:20px;font-size:10px;font-weight:600}'
    +'</style></head><body>'
    +'<div class="bg"></div>'
    +'<div class="nav"><div class="logo"></div><div class="nl nl1"></div><div style="flex:1"></div><div class="nl nl2"></div></div>'
    +'<div class="content"><div class="h1"></div><div class="h2"></div><div class="btn">Explore</div></div>'
    +'</body></html>';

  // Flat Design
  SDOC.flat=mk('#2196F3','#1976D2','',
    '#FF5722','#ffffff',
    '.nav{border-bottom:none}'+
    '.btn{border-radius:2px;text-transform:uppercase;font-size:9px;letter-spacing:.08em}'+
    '.h1{border-radius:0}.h2{border-radius:0}');

  // Bento Grid
  SDOC.bento='<!DOCTYPE html><html><head><meta charset="UTF-8"><style>'
    +'*{margin:0;padding:0;box-sizing:border-box}'
    +'body{background:#F5F5F7;overflow:hidden;height:120px;padding:8px}'
    +'.grid{display:grid;grid-template-columns:1fr 1fr;grid-template-rows:1fr 1fr;gap:5px;height:104px}'
    +'.tile{border-radius:12px;padding:8px}'
    +'.t1{background:#fff;grid-row:1/3;display:flex;flex-direction:column;justify-content:space-between}'
    +'.t2{background:#1d1d1f}'
    +'.t3{background:#6366f1}'
    +'.h1{height:8px;border-radius:4px;background:#111;width:75%;margin-bottom:4px}'
    +'.h2{height:5px;border-radius:3px;background:#111;opacity:.35;width:55%}'
    +'.dot{width:24px;height:24px;border-radius:50%;background:#6366f1}'
    +'</style></head><body>'
    +'<div class="grid">'
    +'<div class="tile t1"><div class="dot"></div><div><div class="h1"></div><div class="h2"></div></div></div>'
    +'<div class="tile t2"></div>'
    +'<div class="tile t3"></div>'
    +'</div>'
    +'</body></html>';

  // Memphis
  SDOC.memphis='<!DOCTYPE html><html><head><meta charset="UTF-8"><style>'
    +'*{margin:0;padding:0;box-sizing:border-box}'
    +'body{background:#FFEB3B;overflow:hidden;height:120px}'
    +'.nav{background:#FF4081;border-bottom:3px solid #000;padding:7px 12px;display:flex;align-items:center;gap:8px}'
    +'.logo{width:22px;height:22px;background:#00E5FF;border:2px solid #000;border-radius:50%}'
    +'.nl{height:5px;background:#FFEB3B;border:1px solid #000}'
    +'.nl1{width:32px}.nl2{width:22px}'
    +'.content{padding:10px 12px;position:relative}'
    +'.shapes{position:absolute;right:10px;top:5px}'
    +'.tri{width:0;height:0;border-left:12px solid transparent;border-right:12px solid transparent;border-bottom:20px solid #FF4081;display:inline-block}'
    +'.circ{width:16px;height:16px;border-radius:50%;background:#00E5FF;border:2px solid #000;display:inline-block;vertical-align:top;margin-left:5px}'
    +'.h1{height:9px;background:#000;width:60%;margin-bottom:5px}'
    +'.h2{height:6px;background:#000;opacity:.5;width:40%;margin-bottom:8px}'
    +'.btn{display:inline-block;background:#00E5FF;border:2px solid #000;color:#000;padding:4px 10px;font-size:10px;font-weight:800}'
    +'</style></head><body>'
    +'<div class="nav"><div class="logo"></div><div class="nl nl1"></div><div style="flex:1"></div><div class="nl nl2"></div></div>'
    +'<div class="content"><div class="shapes"><div class="tri"></div><div class="circ"></div></div><div class="h1"></div><div class="h2"></div><div class="btn">CLICK!</div></div>'
    +'</body></html>';

  // Organic / Biophilic
  SDOC.organic='<!DOCTYPE html><html><head><meta charset="UTF-8"><style>'
    +'*{margin:0;padding:0;box-sizing:border-box}'
    +'body{background:#d4edda;overflow:hidden;height:120px}'
    +'.nav{background:#a8d5b5;padding:7px 12px;display:flex;align-items:center;gap:8px;border-bottom:1px solid rgba(0,0,0,.08)}'
    +'.logo{width:22px;height:22px;background:#2d8a4e;border-radius:50% 30% 50% 30%}'
    +'.nl{height:5px;border-radius:50%;background:rgba(0,0,0,.25)}'
    +'.nl1{width:30px}.nl2{width:20px}'
    +'.content{padding:10px 12px}'
    +'.card{background:rgba(255,255,255,.6);border-radius:20px 5px 20px 5px;padding:9px 12px;border:1px solid rgba(45,138,78,.2)}'
    +'.h1{height:7px;border-radius:50%;background:#2d8a4e;width:60%;margin-bottom:5px}'
    +'.h2{height:5px;border-radius:50%;background:#2d8a4e;opacity:.4;width:40%;margin-bottom:8px}'
    +'.btn{display:inline-block;background:#2d8a4e;color:#fff;padding:5px 12px;border-radius:50%;font-size:10px;font-weight:600;border-radius:20px}'
    +'</style></head><body>'
    +'<div class="nav"><div class="logo"></div><div class="nl nl1"></div><div style="flex:1"></div><div class="nl nl2"></div></div>'
    +'<div class="content"><div class="card"><div class="h1"></div><div class="h2"></div><div class="btn">Explore</div></div></div>'
    +'</body></html>';

  // Vaporwave / Y2K
  SDOC.vaporwave='<!DOCTYPE html><html><head><meta charset="UTF-8"><style>'
    +'*{margin:0;padding:0;box-sizing:border-box}'
    +'body{background:linear-gradient(180deg,#1a0040 0%,#4a0080 50%,#ff6ec7 100%);overflow:hidden;height:120px}'
    +'.grid{position:absolute;bottom:0;left:0;right:0;height:40px;background:repeating-linear-gradient(90deg,rgba(0,255,255,.3) 0,rgba(0,255,255,.3) 1px,transparent 1px,transparent 24px),repeating-linear-gradient(0deg,rgba(0,255,255,.3) 0,rgba(0,255,255,.3) 1px,transparent 1px,transparent 12px)}'
    +'.nav{position:relative;z-index:1;background:rgba(0,0,0,.3);border-bottom:1px solid #00CFFF;padding:7px 12px;display:flex;align-items:center;gap:8px}'
    +'.logo{width:20px;height:20px;background:linear-gradient(135deg,#ff6ec7,#00CFFF);border-radius:4px}'
    +'.nl{height:4px;background:#00CFFF;opacity:.7}'
    +'.nl1{width:30px}.nl2{width:20px}'
    +'.content{position:relative;z-index:1;padding:10px 12px}'
    +'.h1{height:8px;background:linear-gradient(90deg,#ff6ec7,#00CFFF);width:65%;margin-bottom:5px;border-radius:2px}'
    +'.h2{height:5px;background:rgba(255,255,255,.5);width:45%;margin-bottom:8px}'
    +'.btn{display:inline-block;background:transparent;border:1px solid #ff6ec7;color:#ff6ec7;padding:4px 10px;font-size:10px;letter-spacing:.1em;text-shadow:0 0 8px #ff6ec7;box-shadow:0 0 8px rgba(255,110,199,.3)}'
    +'</style></head><body>'
    +'<div class="grid"></div>'
    +'<div class="nav"><div class="logo"></div><div class="nl nl1"></div><div style="flex:1"></div><div class="nl nl2"></div></div>'
    +'<div class="content"><div class="h1"></div><div class="h2"></div><div class="btn">AESTHETIC</div></div>'
    +'</body></html>';

  // HUD / Sci-Fi
  SDOC.hud='<!DOCTYPE html><html><head><meta charset="UTF-8"><style>'
    +'*{margin:0;padding:0;box-sizing:border-box}'
    +'body{background:#020208;overflow:hidden;height:120px}'
    +'.nav{background:transparent;border-bottom:1px solid rgba(0,255,255,.3);padding:6px 12px;display:flex;align-items:center;gap:8px}'
    +'.logo{width:20px;height:20px;border:1px solid #00FFFF;transform:rotate(45deg)}'
    +'.nl{height:3px;background:#00FFFF;opacity:.6}'
    +'.nl1{width:28px}.nl2{width:18px}'
    +'.bk{position:absolute;top:0;left:0;right:0;bottom:0;background:repeating-linear-gradient(0deg,transparent,transparent 10px,rgba(0,255,255,.02) 10px,rgba(0,255,255,.02) 11px)}'
    +'.content{position:relative;z-index:1;padding:8px 12px}'
    +'.frame{border:1px solid rgba(0,255,255,.3);padding:8px 10px;position:relative}'
    +'.corner{position:absolute;width:6px;height:6px;border-color:#00FFFF;border-style:solid;}'
    +'.tl{top:-1px;left:-1px;border-width:1px 0 0 1px}'
    +'.tr{top:-1px;right:-1px;border-width:1px 1px 0 0}'
    +'.h1{height:6px;background:#00FFFF;width:55%;margin-bottom:5px}'
    +'.h2{height:4px;background:#00FFFF;opacity:.4;width:38%;margin-bottom:8px}'
    +'.btn{display:inline-block;border:1px solid #00FFFF;color:#00FFFF;padding:3px 8px;font-size:9px;letter-spacing:.15em;background:rgba(0,255,255,.08)}'
    +'</style></head><body>'
    +'<div class="bk"></div>'
    +'<div class="nav"><div class="logo"></div><div class="nl nl1"></div><div style="flex:1"></div><div class="nl nl2"></div></div>'
    +'<div class="content"><div class="frame"><div class="corner tl"></div><div class="corner tr"></div><div class="h1"></div><div class="h2"></div><div class="btn">INITIATE</div></div></div>'
    +'</body></html>';

  // AI Native
  SDOC.ai='<!DOCTYPE html><html><head><meta charset="UTF-8"><style>'
    +'*{margin:0;padding:0;box-sizing:border-box}'
    +'body{background:#0f0f1a;overflow:hidden;height:120px}'
    +'.nav{background:rgba(99,102,241,.08);border-bottom:1px solid rgba(99,102,241,.2);padding:7px 12px;display:flex;align-items:center;gap:8px}'
    +'.logo{width:20px;height:20px;border-radius:10px;background:linear-gradient(135deg,#6366f1,#06b6d4)}'
    +'.nl{height:4px;border-radius:3px;background:rgba(255,255,255,.2)}'
    +'.nl1{width:28px}.nl2{width:18px}'
    +'.content{padding:8px 12px}'
    +'.chat{background:rgba(99,102,241,.12);border-radius:12px 12px 12px 3px;padding:7px 10px;margin-bottom:6px;border:1px solid rgba(99,102,241,.2)}'
    +'.cb1{height:5px;border-radius:3px;background:rgba(255,255,255,.6);width:80%;margin-bottom:4px}'
    +'.cb2{height:5px;border-radius:3px;background:rgba(255,255,255,.35);width:55%}'
    +'.dots{display:flex;gap:3px;margin-top:6px}'
    +'.dot{width:5px;height:5px;border-radius:50%;background:#6366f1;animation:pulse 1s ease-in-out infinite}'
    +'.dot:nth-child(2){animation-delay:.2s}.dot:nth-child(3){animation-delay:.4s}'
    +'@keyframes pulse{0%,100%{opacity:.3}50%{opacity:1}}'
    +'</style></head><body>'
    +'<div class="nav"><div class="logo"></div><div class="nl nl1"></div><div style="flex:1"></div><div class="nl nl2"></div></div>'
    +'<div class="content"><div class="chat"><div class="cb1"></div><div class="cb2"></div></div><div class="dots"><div class="dot"></div><div class="dot"></div><div class="dot"></div></div></div>'
    +'</body></html>';

  // Editorial / Magazine
  SDOC.editorial='<!DOCTYPE html><html><head><meta charset="UTF-8"><style>'
    +'*{margin:0;padding:0;box-sizing:border-box}'
    +'body{background:#fafafa;overflow:hidden;height:120px}'
    +'.nav{background:#fafafa;border-bottom:3px solid #111;padding:6px 12px;display:flex;align-items:center;gap:8px}'
    +'.logo{width:60px;height:14px;background:#111}'
    +'.nl{height:4px;background:#111;opacity:.35}'
    +'.nl1{width:25px}.nl2{width:18px}'
    +'.content{padding:8px 12px;display:grid;grid-template-columns:1.6fr 1fr;gap:10px}'
    +'.main .h0{height:11px;background:#111;width:95%;margin-bottom:4px}'
    +'.main .h1{height:7px;background:#111;width:80%;margin-bottom:3px}'
    +'.main .h2{height:5px;background:#111;opacity:.4;width:65%;margin-bottom:8px}'
    +'.main .by{height:4px;background:#111;opacity:.25;width:40%}'
    +'.img{background:#ddd;border-radius:3px}'
    +'</style></head><body>'
    +'<div class="nav"><div class="logo"></div><div style="flex:1"></div><div class="nl nl1"></div><div class="nl nl2"></div></div>'
    +'<div class="content"><div class="main"><div class="h0"></div><div class="h1"></div><div class="h2"></div><div class="by"></div></div><div class="img"></div></div>'
    +'</body></html>';

  // Pixel Art
  SDOC.pixel='<!DOCTYPE html><html><head><meta charset="UTF-8"><style>'
    +'*{margin:0;padding:0;box-sizing:border-box;image-rendering:pixelated}'
    +'body{background:#1a1a2e;overflow:hidden;height:120px;font-family:monospace}'
    +'.nav{background:#16213e;border-bottom:2px solid #e94560;padding:6px 12px;display:flex;align-items:center;gap:8px}'
    +'.logo{width:16px;height:16px;background:#e94560;image-rendering:pixelated}'
    +'.nl{height:4px;background:#e94560;opacity:.7}'
    +'.nl1{width:28px}.nl2{width:20px}'
    +'.content{padding:10px 12px}'
    +'.card{background:#16213e;border:2px solid #e94560;padding:8px 10px}'
    +'.h1{height:6px;background:#e94560;width:65%;margin-bottom:4px}'
    +'.h2{height:4px;background:#0f3460;width:45%;margin-bottom:8px}'
    +'.btn{display:inline-block;background:#e94560;color:#fff;padding:3px 8px;font-size:10px;font-family:monospace;letter-spacing:.1em;border:2px solid #fff}'
    +'</style></head><body>'
    +'<div class="nav"><div class="logo"></div><div class="nl nl1"></div><div style="flex:1"></div><div class="nl nl2"></div></div>'
    +'<div class="content"><div class="card"><div class="h1"></div><div class="h2"></div><div class="btn">[START]</div></div></div>'
    +'</body></html>';

  // Default / fallback
  SDOC.default=mk('var(--base,#0d0d18)','rgba(255,255,255,.05)','',
    '#7c6af0','rgba(255,255,255,.8)',
    '.nav{border-bottom:1px solid rgba(255,255,255,.08)}'+
    '.btn{border-radius:8px}');
})();

function getStyleDoc(name,kw){
  var n=name.toLowerCase(), k=(kw||'').toLowerCase();
  if(n.includes('glass')||n.includes('liquid')||n.includes('spatial')) return SDOC.glass;
  if(n.includes('brutal')&&!n.includes('neu')) return SDOC.brutalism;
  if(n.includes('neubrutalism')||n.includes('neubrutalist')) return SDOC.neubrutalism;
  if(n.includes('neumorphism')||n.includes('soft ui')) return SDOC.neumorphism;
  if(n.includes('clay')) return SDOC.clay;
  if(n.includes('cyberpunk')||n.includes('retro-futur')||k.includes('neon glitch')) return SDOC.cyberpunk;
  if(n.includes('aurora')||n.includes('gradient mesh')) return SDOC.aurora;
  if(n.includes('dark mode')||n.includes('oled')) return SDOC.dark;
  if(n.includes('flat design')) return SDOC.flat;
  if(n.includes('bento')) return SDOC.bento;
  if(n.includes('memphis')) return SDOC.memphis;
  if(n.includes('organic')||n.includes('biophilic')||n.includes('nature')) return SDOC.organic;
  if(n.includes('vaporwave')||n.includes('y2k')) return SDOC.vaporwave;
  if(n.includes('hud')||n.includes('sci-fi')||n.includes('fui')) return SDOC.hud;
  if(n.includes('ai-native')||n.includes('ai native')||n.includes('zero interface')) return SDOC.ai;
  if(n.includes('editorial')||n.includes('magazine')) return SDOC.editorial;
  if(n.includes('pixel')) return SDOC.pixel;
  if(n.includes('minimalism')||n.includes('swiss')||n.includes('modernism')) return SDOC.minimalism;
  return SDOC.aurora; // default uses aurora style
}

function buildStyle(r){
  var sdoc=getStyleDoc(r.name,r.keywords);
  var uid='si_'+r.no;
  var prev='<div style="width:100%;height:110px;border-radius:10px;overflow:hidden;margin-bottom:10px;border:1px solid var(--bs)">'
    +'<iframe srcdoc="'+sdoc.replace(/"/g,'&quot;').replace(/'/g,'&#39;')+'" style="width:100%;height:100%;border:none;pointer-events:none" scrolling="no" loading="lazy"></iframe>'
    +'</div>';
  return prev
    +'<div class="card-top"><span class="card-name">'+esc(r.name)+'</span>'
    +'<span class="'+cxBadge(r.complexity)+'">'+esc(r.complexity)+'</span></div>'
    +'<div class="card-sub">'+esc(r.bestFor)+'</div>'
    +'<div class="tags">'
    +'<span class="tag tag-brand">'+esc(r.type)+'</span>'
    +'<span class="tag">'+esc(r.era)+'</span>'
    +'<span class="tag">'+esc(r.perf)+'</span>'
    +'</div>'
    +'<div class="divider"></div>'
    +'<div class="prompt-block">'
    +'<div class="prompt-label">AI Prompt · Claude Code</div>'
    +'<div class="prompt-text">'+esc(r.prompt.substring(0,140))+(r.prompt.length>140?'…':'')+'</div>'
    +'<button class="copy-btn" onclick="copyPrompt(this,\''+esc(r.prompt.replace(/'/g,"\\'")+' --stack html-tailwind')+'\')">Kopiér</button>'
    +'</div>';
}


function buildColor(r){
  var cols=[{h:r.primary,l:'Primary'},{h:r.secondary,l:'Secondary'},{h:r.cta,l:'CTA'},{h:r.bg,l:'BG'},{h:r.text,l:'Text'}];
  var sw=cols.map(function(s){
    return '<div class="sw-wrap">'
      +'<div class="sw" style="background:'+s.h+'" title="'+s.h+'" onclick="copySwatch(this,\''+s.h+'\')"></div>'
      +'<div class="sw-label">'+s.l+'</div>'
      +'<div class="hex-tip" id="ht_'+s.h.replace('#','')+'">'+s.h+'</div>'
      +'</div>';
  }).join('');
  var cprompt='Apply the '+r.product+' color palette: primary '+r.primary+', secondary '+r.secondary+', CTA button '+r.cta+', background '+r.bg+', body text '+r.text+'. '+r.notes;
  return '<div class="card-top"><span class="card-name">'+esc(r.product)+'</span></div>'
    +'<div class="swatches">'+sw+'</div>'
    +'<div class="card-sub" style="font-size:11px;font-family:var(--mono)">'+esc(r.notes)+'</div>'
    +'<div class="divider"></div>'
    +'<div class="prompt-block">'
    +'<div class="prompt-label">AI Prompt · Claude Code</div>'
    +'<div class="prompt-text">'+esc(cprompt.substring(0,150))+(cprompt.length>150?'…':'')+'</div>'
    +'<button class="copy-btn" onclick="copyPrompt(this,\''+esc(cprompt.replace(/'/g,"\\'")+' --stack html-tailwind')+'\')">Kopiér</button>'
    +'</div>';
}

var loadedFonts={};
function loadFont(heading,body,cb){
  var key=heading+'|'+body;
  if(loadedFonts[key]){cb();return;}
  loadedFonts[key]=true;
  var enc=function(f){return f.replace(/ /g,'+')};
  var families=[enc(heading)];
  if(body!==heading) families.push(enc(body));
  var link=document.createElement('link');
  link.rel='stylesheet';
  link.href='https://fonts.googleapis.com/css2?family='+families.join('&family=')+'&display=swap';
  link.onload=cb;
  document.head.appendChild(link);
}

function buildTypo(r){
  var uid='fp_'+r.no;
  // Schedule font load
  setTimeout(function(){
    var el=document.getElementById(uid);
    if(!el) return;
    loadFont(r.heading,r.body,function(){
      var h=el.querySelector('.font-h');
      var b=el.querySelector('.font-b');
      if(h) h.style.fontFamily="'"+r.heading+"', serif";
      if(b) b.style.fontFamily="'"+r.body+"', sans-serif";
    });
  },50);
  return '<div class="font-demo" id="'+uid+'">'
    +'<div class="font-h">Aa Bb Cc — 123</div>'
    +'<div class="font-b">The quick brown fox jumps over the lazy dog</div>'
    +'</div>'
    +'<div class="font-pair">'+esc(r.heading)+' / '+esc(r.body)+'</div>'
    +'<div class="card-top"><span class="card-name">'+esc(r.name)+'</span>'
    +'<span class="badge badge-low">'+esc(r.category)+'</span></div>'
    +'<div class="card-sub">'+esc(r.mood)+'</div>'
    +(r.url?'<a class="font-link" href="'+r.url+'" target="_blank" rel="noopener">'
      +'<svg width="11" height="11" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>'
      +'Google Fonts</a>':'')
    +'<div class="divider"></div>'
    +'<div class="prompt-block">'
    +'<div class="prompt-label">AI Prompt · Claude Code</div>'
    +'<div class="prompt-text">Use the '+esc(r.name)+' font pair: '+esc(r.heading)+' for headings, '+esc(r.body)+' for body text. Load both from Google Fonts. Mood: '+esc(r.mood)+'. Best for: '+esc(r.bestFor)+'.</div>'
    +'<button class="copy-btn" onclick="copyPrompt(this,\''+esc('Use the '+r.name+' font pair: '+r.heading+' for headings, '+r.body+' for body text. Load both from Google Fonts. Mood: '+r.mood+'. Best for: '+r.bestFor+'. --stack html-tailwind')+'\')">Kopiér</button>'
    +'</div>';
}

function esc(s){
  if(!s) return '';
  return String(s).replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;').replace(/"/g,'&quot;');
}

function copyPrompt(btn,text){
  navigator.clipboard.writeText(text).then(function(){
    btn.textContent='Kopieret ✓';
    setTimeout(function(){btn.textContent='Kopiér';},1800);
  });
}

function copySwatch(el,hex){
  navigator.clipboard.writeText(hex).then(function(){
    var id=hex.replace('#','');
    var tip=document.getElementById('ht_'+id);
    if(tip){tip.textContent='Kopieret!';tip.classList.add('copied');}
    setTimeout(function(){
      if(tip){tip.textContent=hex;tip.classList.remove('copied');}
    },1600);
  });
}


// ── MOTION TAB ──────────────────────────────────────────────────

var MOTION_LOADED=false;

function renderMotion(){
  window.motionRunning=true;
  var g=document.getElementById('grid');
  g.innerHTML='';
  g.style.display='block';
  g.style.gridTemplateColumns='1fr';
  if(!MOTION_LOADED){
    var s=document.createElement('script');
    s.type='module';
    s.textContent='import{animate,scroll,inView,stagger}from"https://cdn.jsdelivr.net/npm/motion@latest/+esm";window.MA={animate,scroll,inView,stagger};window._motionReady&&window._motionReady();';
    document.head.appendChild(s);
  }
  g.innerHTML=buildMotionPage();
  function runDemos(){
    if(!window.MA){setTimeout(runDemos,60);return;}
    MOTION_LOADED=true;
    var MA=window.MA;

    // 1. Simple animate - bouncing circle
    function loop1(){
      MA.animate('#m1 .blob',{y:[-18,18]},{duration:.9,repeat:Infinity,repeatType:'reverse',ease:'easeInOut'});
    } loop1();

    // 2. Independent transforms - 4 tiles
    var tiles=document.querySelectorAll('#m2 .tile');
    if(tiles.length){
      MA.animate(tiles[0],{scale:[1,.85,1]},{duration:1.6,repeat:Infinity,ease:'easeInOut',delay:0});
      MA.animate(tiles[1],{scale:[1,.85,1]},{duration:1.6,repeat:Infinity,ease:'easeInOut',delay:.2});
      MA.animate(tiles[2],{scale:[1,.85,1]},{duration:1.6,repeat:Infinity,ease:'easeInOut',delay:.4});
      MA.animate(tiles[3],{scale:[1,.85,1]},{duration:1.6,repeat:Infinity,ease:'easeInOut',delay:.6});
    }

    // 3. Spring - card slides up on hover
    var m3card=document.querySelector('#m3 .inner');
    if(m3card){
      m3card.addEventListener('mouseenter',function(){MA.animate(m3card,{y:-10,scale:1.03},{type:'spring',stiffness:300,damping:20});});
      m3card.addEventListener('mouseleave',function(){MA.animate(m3card,{y:0,scale:1},{type:'spring',stiffness:300,damping:25});});
      MA.animate(m3card,{y:[-4,4]},{duration:2,repeat:Infinity,repeatType:'reverse',ease:'easeInOut'});
    }

    // 4. Exit animation - toggle elements
    var m4items=document.querySelectorAll('#m4 .eitem');
    var m4active=[0,1,2];
    function m4remove(){
      if(!window.motionRunning||!m4active.length) return;
      var idx=m4active.shift();
      if(!m4items[idx]) return;
      MA.animate(m4items[idx],{opacity:0,x:60,scale:.85},{duration:.3}).finished.then(function(){
        if(!window.motionRunning) return;
        m4items[idx].style.display='none';
        if(!m4active.length){setTimeout(function(){if(window.motionRunning)m4reset();},600);}
        else{setTimeout(function(){if(window.motionRunning)m4remove();},200);}
      });
    }
    function m4reset(){
      if(!window.motionRunning) return;
      m4active=[0,1,2];
      for(var i=0;i<m4items.length;i++){
        if(!m4items[i]) continue;
        m4items[i].style.display='flex';
        MA.animate(m4items[i],{opacity:[0,1],x:[60,0],scale:[.85,1]},{duration:.3,delay:i*.1});
      }
      setTimeout(m4remove,1200);
    }
    setTimeout(function(){if(window.motionRunning)m4remove();},1200);

    // 5. Scroll-linked progress
    var prog=document.querySelector('#m5 .prog-fill');
    if(prog) MA.scroll(MA.animate(prog,{scaleX:[0,1]},{ease:'linear'}));
    // Local scroll demo inside card
    var localScroll=document.querySelector('#m5 .scroll-demo');
    var localBar=document.querySelector('#m5 .local-bar');
    if(localScroll&&localBar){
      MA.scroll(MA.animate(localBar,{scaleX:[0,1]},{ease:'linear'}),{container:localScroll});
    }

    // 6. inView - items reveal as they enter
    MA.inView('#m6 .iv-item',function(el){
      MA.animate(el,{opacity:[0,1],y:[20,0]},{duration:.5,type:'spring',stiffness:200});
    },{margin:'-20px'});

    // 7. SVG path draw — pathLength API (Motion hybrid)
    (function(){
      var path=document.querySelector('#m7 path');
      if(!path) return;
      function doPath(){
        if(!window.motionRunning) return;
        MA.animate(path,{pathLength:[0,1]},{duration:1.6,ease:'easeInOut'})
          .finished.then(function(){
            if(!window.motionRunning) return;
            setTimeout(function(){
              if(!window.motionRunning) return;
              MA.animate(path,{pathLength:[1,0]},{duration:.9,ease:'easeIn'})
                .finished.then(function(){if(window.motionRunning)setTimeout(doPath,400);});
            },800);
          });
      }
      doPath();
    })();

    // 8. Stagger grid
    var sgItems=document.querySelectorAll('#m8 .sg');
    function doStagger(){
      if(!window.motionRunning) return;
      MA.animate(sgItems,{scale:[0,1],opacity:[0,1]},{delay:MA.stagger(.05),type:'spring',stiffness:300,damping:18})
        .finished.then(function(){if(window.motionRunning)setTimeout(doStagger,1200);});
    }
    setTimeout(function(){if(window.motionRunning)doStagger();},300);

    // 9. Counter — onUpdate callback
    (function(){
      var counter=document.querySelector('#m9 .num');
      if(!counter) return;
      function doCount(){
        if(!window.motionRunning) return;
        MA.animate(0,100,{duration:2.2,ease:'easeOut',onUpdate:function(v){
          if(window.motionRunning) counter.textContent=Math.round(v)+'%';
        }}).finished.then(function(){
          if(window.motionRunning) setTimeout(doCount,1000);
        });
      }
      doCount();
    })();

    // 10. Drag
    var db=document.querySelector('#m10 .dbox');
    if(db){
      var dragging=false,startX=0,currX=0;
      db.addEventListener('mousedown',function(e){dragging=true;startX=e.clientX-currX;db.style.cursor='grabbing';e.preventDefault();});
      document.addEventListener('mousemove',function(e){if(!dragging)return;currX=e.clientX-startX;db.style.transform='translateX('+Math.max(-80,Math.min(80,currX))+'px) rotate('+(currX*.1)+'deg)';});
      document.addEventListener('mouseup',function(){if(!dragging)return;dragging=false;db.style.cursor='grab';currX=0;MA.animate(db,{x:0,rotate:0},{type:'spring',stiffness:350,damping:22});});
    }

    // 11. Keyframe color morph
    MA.animate('#m11 .morph',{
      background:['#7c6af0','#e879a0','#38bdf8','#10b981','#7c6af0'],
      borderRadius:['16px','50%','16px','30% 70% 70% 30% / 50%','16px']
    },{duration:3,repeat:Infinity,ease:'easeInOut'});

    // 12. Clip reveal
    function doClip(){
      if(!window.motionRunning) return;
      var el=document.querySelector('#m12 .reveal');
      if(!el) return;
      MA.animate(el,{clipPath:['inset(0 100% 0 0)','inset(0 0% 0 0)']},{duration:.9,ease:[.22,1,.36,1]})
        .finished.then(function(){
          if(!window.motionRunning) return;
          setTimeout(function(){
            var el2=document.querySelector('#m12 .reveal');
            if(!el2||!window.motionRunning) return;
            MA.animate(el2,{clipPath:['inset(0 0% 0 0)','inset(0 100% 0 0)']},{duration:.5})
              .finished.then(function(){if(window.motionRunning)setTimeout(doClip,500);});
          },1000);
        });
    }
    doClip();
  }
  window._motionReady=runDemos;
  if(window.MA) runDemos();
}

function mcard(id,badge,title,desc,demoHtml,code,prompt){
  return '<div style="background:#111118;border:1px solid rgba(255,255,255,.09);border-radius:18px;overflow:hidden;display:flex;flex-direction:column">'
    +'<div id="'+id+'" style="flex:1;min-height:220px;display:flex;align-items:center;justify-content:center;position:relative;overflow:hidden;padding:20px">'+demoHtml+'</div>'
    +'<div style="padding:22px 24px;border-top:1px solid rgba(255,255,255,.06)">'
    +'<div style="font-size:11px;font-weight:600;text-transform:uppercase;letter-spacing:.1em;color:rgba(255,255,255,.35);margin-bottom:8px;font-family:var(--mono)">'+badge+'</div>'
    +'<div style="font-size:18px;font-weight:700;color:rgba(255,255,255,.92);margin-bottom:8px;letter-spacing:-.02em">'+title+'</div>'
    +'<div style="font-size:13px;color:rgba(255,255,255,.45);line-height:1.65;margin-bottom:14px">'+desc+'</div>'
    +'<details style="margin-top:0">'
    +'<summary style="font-size:11px;color:rgba(255,255,255,.3);cursor:pointer;font-family:var(--mono);list-style:none;display:flex;align-items:center;gap:6px;user-select:none">'
    +'<svg width="10" height="10" viewBox="0 0 10 10" fill="rgba(255,255,255,.3)"><path d="M2 3l3 3 3-3"/></svg>Vis kode</summary>'
    +'<pre style="margin:10px 0 0;padding:12px 14px;background:rgba(0,0,0,.4);border:1px solid rgba(255,255,255,.07);border-radius:8px;font-family:var(--mono);font-size:10.5px;color:rgba(255,255,255,.55);line-height:1.65;overflow-x:auto;white-space:pre">'+code+'</pre>'
    +'</details>'
    +(prompt?'<div class="prompt-block" style="margin-top:14px"><div class="prompt-label">AI Prompt · Claude Code</div><div class="prompt-text">'+esc(prompt.substring(0,180))+(prompt.length>180?'…':'')+'</div><button class="copy-btn" onclick="copyPrompt(this,\''+esc(prompt.replace(/'/g,"\\'")+' --stack html-tailwind')+'\')">Kopiér</button></div>':'')
    +'</div></div>';
}

function buildMotionPage(){
  return '<div style="max-width:1100px;width:100%">'

  // Header
  +'<div style="text-align:center;padding:8px 0 32px">'
  +'<div style="display:inline-flex;align-items:center;gap:8px;background:rgba(16,185,129,.1);border:1px solid rgba(16,185,129,.25);border-radius:999px;padding:5px 14px;font-size:11px;font-family:var(--mono);color:#10b981;font-weight:600;text-transform:uppercase;letter-spacing:.1em;margin-bottom:20px">⚡ Animation Library</div>'
  +'<h2 style="font-size:clamp(28px,5vw,48px);font-weight:800;color:rgba(255,255,255,.92);letter-spacing:-.03em;margin-bottom:14px;line-height:1.1">Animations<br>that move</h2>'
  +'<p style="font-size:15px;color:rgba(255,255,255,.4);max-width:460px;margin:0 auto 24px;line-height:1.7">High-performance web animations via Motion — direkte CDN i dine PHP/HTML-projekter. Ingen build-step.</p>'
  +'<div style="display:flex;gap:10px;justify-content:center;flex-wrap:wrap">'
  +'<a href="https://motion.dev" target="_blank" rel="noopener" style="background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.1);border-radius:8px;padding:8px 18px;font-size:12px;color:rgba(255,255,255,.7);text-decoration:none;font-family:var(--mono)">motion.dev ↗</a>'
  +'<a href="https://motion.dev/docs/quick-start" target="_blank" rel="noopener" style="background:#10b981;border-radius:8px;padding:8px 18px;font-size:12px;color:#000;text-decoration:none;font-family:var(--mono);font-weight:600">Kom i gang →</a>'
  +'</div></div>'

  // Install strip
  +'<div style="background:#111118;border:1px solid rgba(255,255,255,.09);border-radius:12px;padding:14px 18px;margin-bottom:28px;display:flex;align-items:center;gap:12px;overflow:hidden">'
  +'<span style="font-family:var(--mono);font-size:11px;color:rgba(255,255,255,.3);flex-shrink:0">CDN:</span>'
  +'<code style="font-family:var(--mono);font-size:11px;color:#10b981;flex:1;min-width:0;overflow:hidden;text-overflow:ellipsis;white-space:nowrap">import { animate, scroll, inView, stagger } from "https://cdn.jsdelivr.net/npm/motion@latest/+esm"</code>'
  +'<button onclick="navigator.clipboard.writeText(\'import { animate, scroll, inView, stagger } from &quot;https://cdn.jsdelivr.net/npm/motion@latest/+esm&quot;\').then(()=>{this.textContent=\'✓\';setTimeout(()=>this.textContent=\'copy\',1500)})" style="background:none;border:1px solid rgba(255,255,255,.12);border-radius:5px;padding:4px 10px;font-size:10px;color:rgba(255,255,255,.4);cursor:pointer;font-family:var(--mono);flex-shrink:0">copy</button>'
  +'</div>'

  // Cards grid
  +'<div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(min(340px,100%),1fr));gap:14px">'

  // 1. Simple animate
  +mcard('m1','animate()','Simple API',
    'Motion\'s pick-up-and-play API — nem at starte og sjov at mestre.',
    '<div class="blob" style="width:90px;height:90px;border-radius:50%;background:radial-gradient(circle at 30% 30%,#a78bfa,#7c3aed)"></div>',
    "animate('.blob', {\n  y: [-18, 18]\n}, {\n  duration: 0.9,\n  repeat: Infinity,\n  repeatType: 'reverse',\n  ease: 'easeInOut'\n})",
    'Add a looping float animation with Motion.js: animate(el, { y: [-18, 18] }, { duration: 0.9, repeat: Infinity, repeatType: reverse, ease: easeInOut }). Import: import { animate } from "motion@latest/+esm".')

  // 2. Independent transforms
  +mcard('m2','Transform','Independent transforms',
    'Animér x, y, rotate, scale uafhængigt — ingen wrapper-elementer.',
    '<div style="display:grid;grid-template-columns:1fr 1fr;gap:10px;width:120px">'
    +'<div class="tile" style="width:52px;height:52px;background:#6366f1;border-radius:10px"></div>'
    +'<div class="tile" style="width:52px;height:52px;background:#6366f1;border-radius:10px"></div>'
    +'<div class="tile" style="width:52px;height:52px;background:#6366f1;border-radius:10px"></div>'
    +'<div class="tile" style="width:52px;height:52px;background:#6366f1;border-radius:10px"></div></div>',
    "// Hvert element animerer uafhængigt\ntiles.forEach((tile, i) =>\n  animate(tile, { scale: [1, 0.85, 1] }, {\n    duration: 1.6,\n    repeat: Infinity,\n    delay: i * 0.2\n  })\n)",
    'Animate multiple elements independently with Motion.js — each has its own timeline: animate(tile, { scale: [1, 0.85, 1] }, { duration: 1.6, repeat: Infinity, delay: i * 0.2 }). No shared wrapper needed.')

  // 3. Spring
  +mcard('m3','Spring','Physics-based spring',
    'Naturlig, fysisk-baseret bounce — ingen keyframes nødvendigt.',
    '<div class="inner" style="width:100px;height:140px;background:#1e1e2e;border:1px solid rgba(255,255,255,.1);border-radius:16px;cursor:pointer;display:flex;align-items:center;justify-content:center">'
    +'<div style="width:48px;height:48px;background:linear-gradient(135deg,#7c6af0,#e879a0);border-radius:12px"></div></div>',
    "animate(card, { y: -10, scale: 1.03 }, {\n  type: 'spring',\n  stiffness: 300,\n  damping: 20\n})",
    'Add spring hover lift with Motion.js: on mouseenter animate(card, { y: -10, scale: 1.03 }, { type: spring, stiffness: 300, damping: 20 }). On mouseleave snap back: animate(card, { y: 0, scale: 1 }, { type: spring, damping: 25 }).')

  // 4. Exit animation
  +mcard('m4','inView / exit','Exit animation',
    'Animér elementer ud når de fjernes. Klik for at se effekten.',
    '<div style="display:flex;flex-direction:column;gap:8px;width:200px">'
    +'<div class="eitem" style="background:#1e1e2e;border:1px solid rgba(255,255,255,.08);border-radius:10px;padding:10px 14px;display:flex;align-items:center;gap:10px"><div style="width:10px;height:10px;border-radius:50%;background:#e879a0;flex-shrink:0"></div><div style="height:6px;background:rgba(255,255,255,.15);border-radius:3px;flex:1"></div></div>'
    +'<div class="eitem" style="background:#1e1e2e;border:1px solid rgba(255,255,255,.08);border-radius:10px;padding:10px 14px;display:flex;align-items:center;gap:10px"><div style="width:10px;height:10px;border-radius:50%;background:#e879a0;flex-shrink:0"></div><div style="height:6px;background:rgba(255,255,255,.15);border-radius:3px;flex:1;width:60%"></div></div>'
    +'<div class="eitem" style="background:#1e1e2e;border:1px solid rgba(255,255,255,.08);border-radius:10px;padding:10px 14px;display:flex;align-items:center;gap:10px"><div style="width:10px;height:10px;border-radius:50%;background:#e879a0;flex-shrink:0"></div><div style="height:6px;background:rgba(255,255,255,.15);border-radius:3px;flex:1;width:80%"></div></div>'
    +'</div>',
    "// Animér ud før fjernelse\nawait animate(el, {\n  opacity: 0,\n  x: 60,\n  scale: 0.85\n}, { duration: 0.3 }).finished\nel.remove()",
    'Exit-animate elements before removal with Motion.js: animate(el, { opacity: 0, x: 60, scale: 0.85 }, { duration: 0.3 }).finished.then(() => el.remove()). Chain follow-up logic with .finished promise.')

  // 5. Scroll
  +mcard('m5','scroll()','Scroll-linked animation',
    'Binder animationsværdier direkte til scroll-progress. Hardware-accelerated via ScrollTimeline.',
    '<div style="width:100%;display:flex;flex-direction:column;gap:12px;padding:0 8px">'
    +'<div style="font-size:10px;color:rgba(255,255,255,.3);font-family:var(--mono)">Side-scroll progress:</div>'
    +'<div style="height:5px;background:rgba(255,255,255,.06);border-radius:3px;overflow:hidden"><div class="prog-fill" style="height:100%;background:linear-gradient(90deg,#10b981,#38bdf8);transform-origin:left;border-radius:3px"></div></div>'
    +'<div style="font-size:10px;color:rgba(255,255,255,.3);font-family:var(--mono);margin-top:4px">Scrollable container:</div>'
    +'<div class="scroll-demo" style="height:60px;overflow-y:auto;background:rgba(0,0,0,.2);border-radius:8px;padding:8px">'
    +'<div style="height:5px;background:rgba(255,255,255,.06);border-radius:3px;overflow:hidden;position:sticky;top:0"><div class="local-bar" style="height:100%;background:#7c6af0;transform-origin:left;border-radius:3px"></div></div>'
    +'<div style="height:120px;padding-top:8px;font-size:10px;color:rgba(255,255,255,.2);font-family:var(--mono)">← scroll her...</div>'
    +'</div></div>',
    "const anim = animate(bar,\n  { scaleX: [0, 1] },\n  { ease: 'linear' })\n\nscroll(anim)\n// eller med container:\nscroll(anim, { container: el })",
    'Bind animation to scroll progress with Motion.js: const anim = animate(bar, { scaleX: [0, 1] }, { ease: linear }); scroll(anim). For a scrollable container: scroll(anim, { container: el }). Add transform-origin: left to the bar element.')

  // 6. inView
  +mcard('m6','inView()','Scroll-triggered animation',
    'Kald animationer kun når elementer er synlige — bygget på native IntersectionObserver.',
    '<div style="display:flex;flex-direction:column;gap:8px;width:180px">'
    +'<div class="iv-item" style="background:#1e1e2e;border:1px solid rgba(255,255,255,.08);border-radius:8px;padding:9px 12px;opacity:0"><div style="height:6px;background:#7c6af0;border-radius:3px;width:80%"></div></div>'
    +'<div class="iv-item" style="background:#1e1e2e;border:1px solid rgba(255,255,255,.08);border-radius:8px;padding:9px 12px;opacity:0"><div style="height:6px;background:#e879a0;border-radius:3px;width:60%"></div></div>'
    +'<div class="iv-item" style="background:#1e1e2e;border:1px solid rgba(255,255,255,.08);border-radius:8px;padding:9px 12px;opacity:0"><div style="height:6px;background:#38bdf8;border-radius:3px;width:70%"></div></div>'
    +'</div>',
    "inView('.item', (el) => {\n  animate(el, {\n    opacity: [0, 1],\n    y: [20, 0]\n  }, {\n    type: 'spring',\n    stiffness: 200\n  })\n})",
    'Trigger entrance animations when elements scroll into view with Motion.js: inView(el, () => { animate(el, { opacity: [0, 1], y: [20, 0] }, { type: spring, stiffness: 200 }) }, { margin: -20px }). Fires once on entry by default.')

  // 7. SVG path
  +mcard('m7','SVG','Path drawing',
    'Animér SVG-stier med pathLength — Motion\'s officielle draw-on API.',
    '<svg width="160" height="80" viewBox="0 0 160 80"><path d="M10 65 C40 10,60 10,80 40 S120 70,150 20" fill="none" stroke="#7c6af0" stroke-width="3" stroke-linecap="round"/></svg>',
    "animate(path, {\n  pathLength: [0, 1]\n}, {\n  duration: 1.6,\n  ease: 'easeInOut'\n})",
    'Animate SVG path self-drawing with Motion.js pathLength API: animate(path, { pathLength: [0, 1] }, { duration: 1.6, ease: easeInOut }). pathLength is a progress value 0-1 — no getTotalLength() or strokeDashoffset needed. Works on path, circle, ellipse, line, polygon, polyline, rect.')

  // 8. Stagger
  +mcard('m8','stagger()','Staggered animations',
    'Stagger delay per element-index — perfekt til lister, grids og menuer.',
    '<div style="display:grid;grid-template-columns:repeat(4,1fr);gap:7px;width:160px">'
    +'<div class="sg" style="height:36px;background:#7c6af0;border-radius:6px"></div>'
    +'<div class="sg" style="height:36px;background:#e879a0;border-radius:6px"></div>'
    +'<div class="sg" style="height:36px;background:#38bdf8;border-radius:6px"></div>'
    +'<div class="sg" style="height:36px;background:#10b981;border-radius:6px"></div>'
    +'<div class="sg" style="height:36px;background:#10b981;border-radius:6px"></div>'
    +'<div class="sg" style="height:36px;background:#7c6af0;border-radius:6px"></div>'
    +'<div class="sg" style="height:36px;background:#e879a0;border-radius:6px"></div>'
    +'<div class="sg" style="height:36px;background:#38bdf8;border-radius:6px"></div>'
    +'</div>',
    "animate(items, {\n  scale: [0, 1],\n  opacity: [0, 1]\n}, {\n  delay: stagger(0.05),\n  type: 'spring'\n})",
    'Stagger-animate a list or grid with Motion.js: animate(items, { scale: [0, 1], opacity: [0, 1] }, { delay: stagger(0.05), type: spring, stiffness: 300, damping: 18 }). Import stagger alongside animate from motion@latest/+esm.')

  // 9. Counter
  +mcard('m9','onUpdate','Animeret tæller',
    'Brug animate(from, to, { onUpdate }) til at animere tal og custom værdier.',
    '<div style="font-size:52px;font-weight:800;color:rgba(255,255,255,.9);font-family:var(--mono);letter-spacing:-.03em"><span class="num">0</span></div>',
    "animate(0, 100, {\n  duration: 2.2,\n  ease: 'easeOut',\n  onUpdate: (latest) => {\n    el.textContent =\n      Math.round(latest) + '%'\n  }\n})",
    'Animate a number counter with Motion.js: animate(0, 100, { duration: 2.2, ease: easeOut, onUpdate: (latest) => { el.textContent = Math.round(latest) + % } }). animate(from, to, options) animates a single numeric value — onUpdate fires on every frame with the current value.')

  // 10. Drag
  +mcard('m10','Gesture','Drag + spring snap',
    'Træk boksen — den springer tilbage til startposition med spring physics.',
    '<div class="dbox" style="width:70px;height:70px;background:linear-gradient(135deg,#e879a0,#7c6af0);border-radius:16px;cursor:grab;user-select:none;display:flex;align-items:center;justify-content:center">'
    +'<svg width="20" height="20" fill="none" stroke="rgba(255,255,255,.7)" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M7 16V4m0 0L3 8m4-4l4 4M17 8v12m0 0l4-4m-4 4l-4-4"/></svg></div>',
    "// På mouseup → spring snap\nanimate(el, { x: 0, rotate: 0 }, {\n  type: 'spring',\n  stiffness: 350,\n  damping: 22\n})",
    'Add drag with spring snap-back using Motion.js: track mousedown/mousemove to translate the element manually, then on mouseup: animate(el, { x: 0, rotate: 0 }, { type: spring, stiffness: 350, damping: 22 }).')

  // 11. Morph
  +mcard('m11','Keyframes','Shape morph loop',
    'Animer borderRadius og baggrund i keyframes for flydende form-transformationer.',
    '<div class="morph" style="width:90px;height:90px;background:#7c6af0;border-radius:16px"></div>',
    "animate('.shape', {\n  background: ['#7c6af0','#e879a0','#38bdf8'],\n  borderRadius: ['16px','50%','30% 70% 70% 30% / 50%']\n}, {\n  duration: 3,\n  repeat: Infinity,\n  ease: 'easeInOut'\n})",
    'Create a looping shape and color morph with Motion.js keyframes: animate(el, { background: [color1, color2, color3], borderRadius: [16px, 50%, 30% 70% 70% 30%] }, { duration: 3, repeat: Infinity, ease: easeInOut }). Any animatable CSS property works as keyframes.')

  // 12. Clip reveal
  +mcard('m12','CSS','Clip-path reveal',
    'Gardin-effekt med clipPath animation — perfekt til hero-sektioner og billeder.',
    '<div class="reveal" style="width:160px;height:60px;background:linear-gradient(135deg,var(--brand),var(--accent));border-radius:10px;display:flex;align-items:center;justify-content:center;font-size:13px;font-weight:700;color:#fff;letter-spacing:.05em">REVEAL</div>',
    "animate('.el', {\n  clipPath: [\n    'inset(0 100% 0 0)',\n    'inset(0 0% 0 0)'\n  ]\n}, {\n  duration: 0.9,\n  ease: [0.22, 1, 0.36, 1]\n})",
    'Create a curtain reveal with Motion.js clipPath: animate(el, { clipPath: [inset(0 100% 0 0), inset(0 0% 0 0)] }, { duration: 0.9, ease: [0.22, 1, 0.36, 1] }). Perfect for hero sections, images, and text reveals. Repeat in reverse to hide.')

  +'</div>' // end cards grid

  // Footer links
  +'<div style="display:flex;gap:20px;justify-content:center;padding:28px 0 4px;flex-wrap:wrap;border-top:1px solid rgba(255,255,255,.06);margin-top:24px">'
  +'<a href="https://motion.dev/docs/quick-start" target="_blank" rel="noopener" style="color:#10b981;text-decoration:none;font-size:12px;font-family:var(--mono)">Docs ↗</a>'
  +'<a href="https://motion.dev/examples" target="_blank" rel="noopener" style="color:rgba(255,255,255,.4);text-decoration:none;font-size:12px;font-family:var(--mono)">330+ eksempler ↗</a>'
  +'<a href="https://github.com/motiondivision/motion" target="_blank" rel="noopener" style="color:rgba(255,255,255,.4);text-decoration:none;font-size:12px;font-family:var(--mono)">GitHub ↗</a>'
  +'<a href="https://motion.dev/docs/react-animation" target="_blank" rel="noopener" style="color:rgba(255,255,255,.4);text-decoration:none;font-size:12px;font-family:var(--mono)">React guide ↗</a>'
  +'</div>'
  +'</div>';
}



buildFilters();
render();
</script>
