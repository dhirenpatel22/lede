# Lede theme: project notes

Block theme for WordPress.org. Repo: `dhirenpatel22/lede`. Local folder: `~/Developer/Github/exivon-tech/the-first`.
Slug, text domain and folder are `lede`. The function prefix is `lede_`.

## Current status (2026-11-19)

- **Live on WordPress.org:** https://wordpress.org/themes/lede/ (approved on ticket #299422). SVN holds `2.0.0/` and `2.0.1/`.
- **2.0.2** is merged to `main` and tagged, but not on SVN yet. The tag-triggered deploy (`.github/workflows/deploy.yml`)
  fails at `svn commit` with `E175013: Access to '/!svn/me' forbidden` (HTTP 403: the server refuses the write,
  which points at commit permission rather than a wrong password). Dhiren is resolving SVN access.
- Branch flow: feature branches off `develop` → PR into `develop` → release PR `develop` → `main` → push tag `X.Y.Z`.
- `.github/workflows/lint.yml` runs on every PR: phpcs, JSON validity, style.css/readme.txt header match,
  and a changelog entry for the current version.

## Roadmap (Dhiren, 2026-11-19)

Goal: the base block theme for blogs that WordPress developers use as the parent of every site.

1. Release fix, CI lint, and a Lighthouse/axe baseline on the Theme Unit Test data.
2. Blog completeness (2.1.0): author template, author bio box after posts, breadcrumbs/related posts only if core supports them.
3. Developer experience: `lede-child` starter, docs for design tokens and overrides, 2–3 style variations.

SEO, security and performance *features* (schema, head cleanup, headers, tuning switches) are plugin territory.
They go into a separate companion plugin, never into this theme.

## Review feedback for 2.0.0, and how 2.0.1 resolves it

| Feedback | Fix in 2.0.1 |
|---|---|
| Tags don't match functionality | Removed `portfolio`, `news` and `custom-colors`. Seven of the tags the reviewer cited were never in style.css. |
| `load_theme_textdomain()` missing | Now called in `lede_setup()` in `functions.php`. |
| No `languages/` folder or .pot | Added `languages/lede.pot`, generated with `wp i18n make-pot`. Regenerate it whenever strings change. |
| Business content in patterns (pricing, team, testimonials, contact, about) | Every pattern now uses neutral placeholders ("Plan one", "Price", "Name", "Role", "Add a quote here.", "Feature one"). Dhiren chose to keep the patterns with placeholder text rather than remove them. |
| Hardcoded mailto, tel and address | Removed. Pattern buttons use `#`, not `/contact/`, `/about/` or `/services/`. "View all posts" links to the posts page (`page_for_posts`) or `home_url('/')`. |
| Screenshot didn't match the activated theme | Retaken: a 1200x900 capture of a fresh install with the theme just activated (the Blog front page with "Hello world!"). |

Other 2.0.1 changes:
- The theme description no longer claims "business templates".
- The blog heading (`patterns/hidden-blog-heading.php`) is now `alignwide`, so it lines up with the post grid.

## STRICT RULE: updates must not change existing sites (Dhiren, 2026-11-23)

A Lede update must not change how any existing site that uses Lede (directly or as a parent theme) looks or behaves. **If a change would affect existing sites, don't implement it in Lede.** No exceptions for "small" visual tweaks.

- Treat as affecting existing sites: any change to theme.json defaults (palette values, typography, spacing, element and block styles), style.css or layout.css rules that match existing markup, the rendered HTML of templates, parts and template-referenced patterns (hidden-*, footer, query grids), template or part structure, default template choice, PHP output on the front end, and removing or renaming slugs, classes, filters or presets.
- Allowed: new opt-in things that render nothing until a site chooses them (new patterns in the inserter, new style variations, new templates a user must pick), docs, readme, description, screenshot and translations. New front-end behaviour only behind `lede_show_starter_extras()` (set on activation from 2.2.0, so updated sites never get it).
- Editing an existing inserter pattern file is fine: patterns are copied into content on insert, so existing pages don't change. Template-referenced patterns are not: they render live.
- Child themes inherit element/block styles and parent CSS even with their own palettes, so "the child overrides it" is not a defence.
- Verify every release: render the same pages with the previous release and the new one on an updated site (no activation flag) and diff the front-end HTML. Only `ver=` query strings may differ. Any other difference blocks the release.

## Rules to keep (WordPress.org required page, checked 2026-11-08)

- Patterns must be presentation only: no real-looking business data, contact details, names, prices or stats.
  Links to pages that may not exist are not allowed either. Use placeholders and `#`.
- Every visible string goes through gettext with the `lede` domain. Text in `.html` templates is exempt, so keep text in patterns.
- Only claim tags that the code implements, using the definitions on the official tags page.
  - Allowed subject tags: blog, e-commerce, education, entertainment, food-and-drink, holiday, news, photography and portfolio (3 at most).
- The screenshot must be no larger than 1200x900, at 4:3, and must show what users see right after activation.
- No remote resources, CDNs or plugin-territory features.
- The zip must not contain hidden files, `.sh`, `.xml`, `.zip` or other banned file types (handled by `.distignore`).
- There are no current WPTRT rules specific to pattern content. Reviewers judge patterns under "presentation vs. plugin territory".

## Deferred to later versions (Dhiren: "no enhancements in the fix version")

- News-specific templates, if the `news` tag should come back.
- Global Styles style variations, if `style-variations` is wanted.
- Reworked business patterns.

## How to verify before each upload

- `composer install` (dev tools), then `vendor/bin/phpcs`. This runs the full `WordPress` standard plus PHPCompatibilityWP; 2.0.1 has 0 issues.
- Local WordPress: Docker Desktop is not installed; use Colima.
  - `colima start` switches the Docker context to `colima`. Afterwards run `docker context use desktop-linux`.
  - Pass `DOCKER_CONFIG=<temp dir with {}>` and `DOCKER_HOST=unix://$HOME/.colima/default/docker.sock`. The real `~/.docker/config.json` uses the `desktop` credential helper, so pulls fail without this.
  - Use `docker-compose` (the standalone binary). Services: `wordpress:php8.3` + `mariadb:11` + `wordpress:cli-php8.3`.
  - Mount `dist/lede` read-only into `wp-content/themes/lede`.
  - Set `WORDPRESS_DEBUG=1`, and send `WP_DEBUG_LOG` to `/tmp/debug.log`.
- Install the `theme-check` plugin and run `wp theme-check run lede`. 2.0.1 shows only an INFO note.
- Import the Theme Unit Test data (`WordPress/theme-test-data` on GitHub) with `wordpress-importer`.
  - Crawl every permalink, then check HTTP codes and the debug log.
  - The 301s on attachment pages come from core and are expected.
- Screenshot: run headless Chrome with `--window-size=1200,900 --force-device-scale-factor=1` on a fresh install with the theme activated.
  - Headless Chrome has a 500px minimum viewport. For phone widths, use CDP `Emulation.setDeviceMetricsOverride`.

## Conventions

- Update `readme.txt` (Changelog) and `CHANGELOG.md` with every change, and bump `Version` in `style.css`.
- Commit identity is the logged-in user, `Dhiren <dhirenpatel22@gmail.com>`. No Claude co-author or session lines in commits or PRs. Commit only when asked.
- Keep this file out of the zip; it is listed in `.distignore`.
