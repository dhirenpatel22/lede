# Lede theme: project notes

Block theme for WordPress.org. Repo: `dhirenpatel22/lede`. Local folder: `~/Developer/Github/exivon-tech/the-first`.
Slug, text domain and folder are `lede`. The function prefix is `lede_`.

## Current status (2026-11-08)

- **2.0.0** was submitted to WordPress.org and closed as "not approved" (review feedback below).
- **2.0.1** has every fix in it and is committed on branch `fix/wporg-review-2.0.1` (commit `9d39818`).
  - **Not pushed yet.** The `dhirenci` account got a 403 on `dhirenpatel22/lede`. Push from the `dhirenpatel22` account:
    `git push -u origin fix/wporg-review-2.0.1`
  - After pushing, merge into `develop` (or open a PR).
- The upload zip is built at `dist/lede-2.0.1.zip`. Rebuild it with `bin/build-zip.sh` (`dist/` is gitignored).

## Next steps

1. Push the branch, then merge it.
2. Upload `dist/lede-2.0.1.zip` at https://wordpress.org/themes/upload/. That creates a new ticket at the end of the queue.
3. Add this note on the new ticket:
   > The tags list cited post-formats, sticky-post, style-variations, featured-image-header, flexible-header,
   > front-page-post-form and microformats, which were not in style.css. Removed tags: portfolio, news, custom-colors.

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
- Commit identity is `Dhiren <dhiren@conservativeinstitute.org>`. Commit only when asked.
- Keep this file out of the zip; it is listed in `.distignore`.
