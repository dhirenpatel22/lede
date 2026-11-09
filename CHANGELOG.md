# Changelog

## Unreleased

### Fixed
- The header menu wraps onto more lines instead of widening the page when it has many items.
- The site title no longer wraps onto two lines when the header menu is long (600px and up).

### Changed
- Theme URI points to the WordPress.org theme page.

## 2.0.1

Fixes from the WordPress.org theme review.

### Fixed
- Patterns no longer carry business content: pricing, team, testimonials, contact, about, stats, FAQ, features, call to action, heroes and logo cloud use neutral placeholder text. The contact pattern no longer hardcodes `mailto:`, `tel:` or a street address.
- Pattern buttons no longer link to `/contact/`, `/about/` or `/services/`, which don't exist on a new site. "View all posts" links to the posts page (or the home page when none is set) instead of `/blog/`.
- The theme description no longer mentions business templates, which the theme doesn't have.
- `load_theme_textdomain()` is called, and `languages/lede.pot` is included for the `translation-ready` tag.
- Removed the `portfolio` and `news` subject tags (no portfolio or news-specific templates) and the `custom-colors` tag (defined by the tag rules as Customizer/theme-options color controls).
- The blog heading on the front page sat in the 760px content column while the post grid used the 1200px wide column; the heading is now wide-aligned so both start at the same edge.
- `screenshot.png` is a real capture of the default front page after activation.

## 2.0.0

Repositioned as a lean base parent theme. **Breaking** for sites on 1.x: see "Removed".

### Renamed
- **The First → Lede** (WordPress.org already has a theme named "First"). Slug and text domain `lede`; function prefix `lede_`; filter `lede_preload_fonts`; pattern slugs `lede/…`; CSS classes `lede-grid-*`, `lede-with-sidebar`; variable `--lede--gutter`. Child themes need `Template: lede`.

### Fixed
- All visible pattern text is translatable, including placeholder prices, stats, team names, email and phone (WordPress.org i18n requirement).
- Theme Unit Test edge cases: classic `<pre>`, `[caption]` and oEmbed iframes no longer overflow on phones; long unbroken titles wrap; deep comment threads stay readable at 390px; untitled posts are linked from listings via the post date.
- Single posts now display existing comments (the template previously had only the comment form).
- Replaced the non-existent `post-reading-time` block with `core/post-time-to-read`.
- h1–h4 element sizes were 16px: `theme.json` referenced undefined CSS variables for the digit slugs (`2xl`–`5xl`).
- Every template, part and pattern now passes block validation (24 blocks were invalid in the editor).
- Header and footer landmarks were nested (`<header><header>`).
- `alignfull` blocks couldn't break out of the content width on pages and posts.
- Color contrast now meets WCAG 2.2 AA (accent, muted and footer text), and focus outlines are always visible.
- Hard-coded root-relative links are replaced with `home_url()`, so subdirectory installs work.
- The palette slug `border` collided with core's `.has-border-color`; it is renamed to `line`.
- The license file (GPLv3) didn't match the headers (GPLv2+); it is now GPLv2.

### Added
- WordPress.org packaging: `readme.txt` (with resource licences), official tags only, `.distignore` and `bin/build-zip.sh` (`composer zip`). Passes the Theme Check plugin.
- **Fixed breakpoints** 600 / 768 / 1024 / 1280 (`assets/css/layout.css`) and a content + 48px + 300px sidebar layout from 1024px.
- **Self-hosted Inter** variable font (Latin, WOFF2, OFL), preloaded, with a metric-matched fallback so the swap doesn't shift layout.
- Breakpoint grid classes (`lede-grid-*`) so column counts change exactly at the theme breakpoints.
- Patterns: split hero, features/services grid, stats, testimonials, pricing, FAQ, team, logo cloud. Existing patterns were rebuilt.
- **Post with Sidebar** template, which uses the previously unused sidebar part.
- Block style variations as `theme.json` partials: Card, Highlighted, Checkmark, Shadow, Thick.
- Translatable template strings via hidden patterns, and a dynamic copyright year.
- `screenshot.png`, WPCS tooling (`composer lint`) and this changelog.

### Changed
- Typography: body 18px mobile → 20px desktop, line-height 1.6, a re-tuned fluid scale, and two font families (Inter + system mono).
- Content width 760px (was 720). Page gutters 16px below 600px, 24px above.
- Split patterns and the sidebar template use Group grid layouts instead of the Columns block, because Columns stacks at 782px, not 768.
- **No sticky header.** The header has a fixed height.
- Featured images are 16:9 at full size (Google Discover).
- Comment form title is an h2 (fixes heading order on posts without comments).
- Both theme stylesheets are inlined (no render-blocking theme CSS).
- "Full Width Page" is now **Wide Page** (content spans the wide width). Page and post templates now support full-width blocks.
- Fluid spacing for steps `60`–`100`. Responsive auto-grids replace the CSS media-query overrides.
- Requires WordPress 6.9+ (the core Time to Read block first ships in 6.9; verified missing on 6.6). Tested up to 7.1.

### Removed
- All plugin-territory code: security headers, XML-RPC, login-error and author-enumeration filters, emoji/oEmbed/dashicons/jQuery Migrate removal, the `?ver=` stripping, and the `DISALLOW_FILE_EDIT` / `WP_POST_REVISIONS` defines. Use plugins or `wp-config.php` (see README).
- `assets/js/navigation.js` (it conflicted with the core navigation block) and `assets/css/editor-style.css` (it duplicated `theme.json`).
- Classic-theme supports that did nothing in a block theme (post formats, nav menu locations, custom logo, text-domain loading).
- Duplicate block styles for core's own Button "Outline" and Image "Rounded".
