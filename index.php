<?php
declare(strict_types=1);

require __DIR__ . '/config.php';

$allowed = ['home', 'design-systems', 'ui-ux-browser', 'claude-code'];
$page    = $_GET['page'] ?? 'home';
if (!in_array($page, $allowed, true)) $page = 'home';

$titles = [
  'home'           => 'forge · ViaVi Forge',
  'design-systems' => 'Design Systems · ViaVi Forge',
  'ui-ux-browser'  => 'UI/UX Pro Max · Design Browser',
  'claude-code'    => 'Claude Code i praksis · ViaVi Forge',
];
$title = $titles[$page];

require __DIR__ . '/includes/header.php';
require __DIR__ . '/pages/' . $page . '.php';
require __DIR__ . '/includes/footer.php';
