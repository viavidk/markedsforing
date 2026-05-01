<!DOCTYPE html>
<html lang="da">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($title) ?></title>
<link href="https://fonts.googleapis.com/css2?family=Geist:wght@300;400;500;600;700&family=Geist+Mono:wght@400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/app.css">
<?php if ($page === 'home'): ?>
<link rel="stylesheet" href="assets/css/home.css">
<?php elseif ($page === 'design-systems'): ?>
<link rel="stylesheet" href="assets/css/design-systems.css">
<?php elseif ($page === 'ui-ux-browser'): ?>
<link rel="stylesheet" href="assets/css/ui-ux-browser.css">
<?php elseif ($page === 'claude-code'): ?>
<link rel="stylesheet" href="assets/css/claude-code.css">
<?php endif; ?>
</head>
<body>

<div id="sp"></div>
<?php if ($page !== 'ui-ux-browser'): ?>
<div class="mesh"><div class="orb o1"></div><div class="orb o2"></div></div>
<div class="noise"></div>
<?php endif; ?>

<nav class="nav">
  <div class="nav-inner">
    <div class="ldot"></div>
    <a href="?page=home" class="nav-logo">forge</a>
    <span class="nav-ver">v<?= FORGE_VERSION ?></span>
    <div class="nav-sep"></div>
    <div class="nav-links">
      <a href="?page=home" class="nav-link<?= $page === 'home' ? ' active' : '' ?>">Hjem</a>
      <a href="?page=claude-code" class="nav-link<?= $page === 'claude-code' ? ' active' : '' ?>">Claude Code</a>
      <a href="?page=ui-ux-browser" class="nav-link<?= $page === 'ui-ux-browser' ? ' active' : '' ?>">UI/UX Browser</a>
      <a href="?page=design-systems" class="nav-link<?= $page === 'design-systems' ? ' active' : '' ?>">Design Systems</a>
    </div>
  </div>
  <a href="https://github.com/viavidk/forge" target="_blank" rel="noopener" class="btn bp" style="font-size:13px;padding:8px 18px">
    <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 00-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0020 4.77 5.07 5.07 0 0019.91 1S18.73.65 16 2.48a13.38 13.38 0 00-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 005 4.77a5.44 5.44 0 00-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 009 18.13V22"/></svg>
    GitHub
  </a>
</nav>
