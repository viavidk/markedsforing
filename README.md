# ViaVi Forge — Marketing Site · v1.0.0

Marketing-siden for [ViaVi Forge](https://github.com/viavidk/forge) — PHP-scaffolderen til Claude Code-projekter.

## Installér / opdatér

Gå til den mappe filen skal ligge i, og kør:

```bash
curl -fsSL https://raw.githubusercontent.com/viavidk/markedsforing/main/update.sh | bash
```

Scriptet gør `git clone` første gang og `git pull` ved efterfølgende kørsler.

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

| Konstant | Betydning |
|---|---|
| `SITE_VERSION` | Marketingsidens egen version |
| `FORGE_VERSION` | Hvilken Forge-version siden omtaler |
| `UIUX_VERSION` | UI/UX Pro Max-version |

Opdatér `config.php` når Forge eller siden får ny version:

```php
const SITE_VERSION  = '1.0.0';
const FORGE_VERSION = '3.6.6';
```
