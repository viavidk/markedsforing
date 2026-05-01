# ViaVi Forge — Marketing Site

Marketing-siden for [ViaVi Forge](https://github.com/viavidk/forge) — PHP-scaffolderen til Claude Code-projekter.

## Sider

| Route | Fil | Indhold |
|---|---|---|
| `/?page=home` | `pages/home.php` | Forside — installationsflow, capabilities, hooks |
| `/?page=claude-code` | `pages/claude-code.php` | Claude Code i praksis |
| `/?page=design-systems` | `pages/design-systems.php` | Design systems-oversigt |
| `/?page=ui-ux-browser` | `pages/ui-ux-browser.php` | UI/UX Pro Max browser |

## Stack

PHP 8.1+ · ingen framework · ingen afhængigheder · Tailwind via Play CDN

## Lokal opsætning

```bash
php -S localhost:8080
```

Åbn `http://localhost:8080`.

## Struktur

```
assets/css/      # Side-specifik CSS
assets/js/       # Hero particle field animation
includes/        # header.php + footer.php
pages/           # En fil pr. side
config.php       # FORGE_VERSION + UIUX_VERSION konstanter
index.php        # Router — ?page= parameter
```

## Version

Opdatér `config.php` når Forge får ny version:

```php
const FORGE_VERSION = '3.6.6';
```
