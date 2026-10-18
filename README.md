# The First

A lean base **parent** block theme for full site editing (FSE) WordPress sites. Each client project runs as a child theme on top of it.

**Requires:** WordPress 6.9+ (for the core Time to Read block), PHP 8.0+ · **Tested up to:** WordPress 7.1

## Principles

- **Presentation only.** The theme handles design, templates and patterns. Security hardening, SEO meta and structured data, caching and asset tweaks belong in plugins, because theme-level code switches off when the theme changes and conflicts with those plugins. See [Recommended plugin stack](#recommended-plugin-stack).
- **theme.json first.** Colors, type, spacing, element and block styles all live in `theme.json`, so the Site Editor's Global Styles can change any of them. `style.css` (about 3 KB) holds only what `theme.json` can't express, and `assets/css/layout.css` (about 5 KB) holds the breakpoints. Both are inlined into the page, so they don't block rendering.
- **Core Web Vitals first.** No theme JavaScript. One self-hosted, preloaded font file. Zero layout shift. Per-block CSS loads only on pages that use the block (core behavior for block themes). See [Performance](#performance-core-web-vitals).
- **SEO-friendly markup.** Real landmarks (`header`/`main`/`footer`/`aside`), one `h1` per template, sensible heading levels in patterns, and no meta output, so it never clashes with Yoast or Rank Math.
- **Accessible by default.** Color pairs meet WCAG 2.2 AA contrast, focus outlines are always visible, and FAQs use native `<details>`.
- **WPCS clean.** All PHP passes WordPress Coding Standards (`composer lint`).

## Structure

```
the-first/
├── style.css               Theme header + rules theme.json can't express
├── assets/css/layout.css   Breakpoints, page gutters, grids, sidebar layout
├── theme.json              Design tokens, element and block styles
├── functions.php           Stylesheet enqueue, editor styles, font preload,
│                           comment-form heading level
├── styles/blocks/          Block style variations (theme.json partials)
├── templates/              index, home, single, single-with-sidebar, page,
│                           page-full-width ("Wide Page"), page-no-title,
│                           archive, search, 404
├── parts/                  header, footer, sidebar
├── patterns/               13 inserter patterns + hidden template patterns
├── assets/fonts/inter/     Inter variable WOFF2 (roman + italic, Latin) + OFL licence
├── assets/images/          SVG placeholders used by patterns (< 1 KB total)
├── composer.json           Dev tooling (WPCS, PHPCompatibility)
└── phpcs.xml.dist          Coding-standards ruleset
```

## Templates

| Template | Use |
|---|---|
| `home` / `index` | Blog listing: responsive grid, up to 3 columns |
| `single` | Post: category, title, date/author/reading time, content, tags, prev/next, comments |
| `single-with-sidebar` | **Post with Sidebar**: content + 48px gap + 300px sidebar from 1024px; the sidebar drops below the article on smaller screens |
| `page` | Title, featured image, content |
| `page-no-title` | **Page (No Title)**: for landing pages that start with a hero pattern |
| `page-full-width` | **Wide Page**: regular blocks span the wide width (1200px) instead of 760px |
| `archive`, `search` | Text-first post lists with pagination and a no-results state |
| `404` | Message, search form, link home |

Page and post templates (except Post with Sidebar) allow full-width (`alignfull`) blocks, and stacked full-width sections sit flush against each other.

Template strings and links live in hidden patterns (`patterns/hidden-*.php`, `template-*.php`). That keeps them translatable and builds URLs with `home_url()`, so subdirectory installs work.

## Patterns

All patterns appear in the inserter under core categories (Banners, Services, Testimonials, and so on).

| Pattern | Slug |
|---|---|
| Hero: centered (dark) | `the-first/hero-home` |
| Hero: text and image | `the-first/hero-split` |
| Features / services grid | `the-first/features-grid` |
| Stats | `the-first/stats` |
| Testimonials | `the-first/testimonials` |
| Pricing table | `the-first/pricing` |
| FAQ (accordion) | `the-first/faq` |
| Team | `the-first/team` |
| Logo cloud | `the-first/logo-cloud` |
| Call to action: banner | `the-first/cta-banner` |
| Contact | `the-first/contact-section` |
| About: introduction | `the-first/about-intro` |
| Latest posts | `the-first/featured-posts` |
| Footer | `the-first/footer` (also offered when replacing the footer part) |

Notes:
- **Hero patterns contain the page's `h1`.** Use them with the **Page (No Title)** template, otherwise the page has two `h1`s.
- Pattern links point to `/contact/`, `/services/`, `/about/` and `/blog/`. Create those pages or edit the links.
- FAQ structured data comes from your SEO plugin (for example, Yoast's FAQ block), not the theme.

## Block style variations

Defined as JSON in `styles/blocks/`. They appear in the block's **Styles** panel and can be restyled in Global Styles:

| Block | Variation |
|---|---|
| Group, Column | Card, Highlighted |
| List | Checkmark |
| Image | Shadow |
| Separator | Thick |

Button **Outline** uses core's own variation, styled in `theme.json`.

## Design tokens

| Color slug | Default | Use |
|---|---|---|
| `base` | `#FFFFFF` | Page background |
| `base-2` | `#F7F7F5` | Section backgrounds |
| `contrast` | `#1A1A1A` | Text, buttons, dark bands |
| `contrast-2` | `#4A4A4A` | Secondary text |
| `primary` | `#1A3353` | Links, hero background |
| `primary-light` | `#2A4F80` | Gradient endpoint |
| `accent` | `#C2412A` | Eyebrows, categories, CTA band (5.1:1 on white) |
| `accent-light` | `#FF8066` | Accent text on dark backgrounds |
| `muted` | `#6B6B6B` | Meta text (≥ 4.9:1 on `base` and `base-2`) |
| `line` | `#E2E2E2` | Borders and dividers |

Font sizes: `xs` (13px), `sm` (15px), `md` (body: 18px mobile → 20px desktop), `lg`, `xl`, `2xl` … `5xl`, `huge`, all fluid from `md` up. Body line-height is 1.6. Two families: Inter and the system monospace stack. Spacing: `10`–`100`, fluid from `60` up.

### Gotchas when editing tokens

1. **Digit slugs are kebab-cased in CSS variable names.** Slug `4xl` becomes `--wp--preset--font-size--4-xl` and the class `has-4-xl-font-size`. In `theme.json` *style values*, write `var:preset|font-size|4-xl`. In block *attributes*, use the slug as is: `"fontSize":"4xl"`.
2. **Don't name a color slug `border`.** It generates `.has-border-color`, which collides with core's border-support class. That's why the divider color is called `line`.

## Fonts

**Inter** (variable, weights 100–900) ships in `assets/fonts/inter/` under the SIL Open Font License. It's registered in `theme.json`, so it appears in Global Styles and the editor.

- **Latin subset only** (48 KB roman, 52 KB italic). It covers Western European languages and €. For Cyrillic, Greek or Vietnamese sites, add that subset's WOFF2 as an extra `fontFace` entry in the child theme.
- **The italic file downloads only on pages that use italics.**
- **The roman file is preloaded** and uses `font-display: swap`. A metric-matched fallback (`Inter Fallback`, resized Arial in `style.css`) keeps the swap from shifting layout.
- **Changing the font in a child theme:** add the WOFF2 files and a `fontFamilies` entry to the child `theme.json`, set `styles.typography.fontFamily`, and repoint the preload:

```php
add_filter( 'the_first_preload_fonts', function () {
	return array( get_theme_file_uri( 'assets/fonts/brand/Brand-Variable.woff2' ) ); // or array() to disable.
} );
```

## Breakpoints and layout

Breakpoints are **600 / 768 / 1024 / 1280**, the same on every site (decided 16 Oct 2026 from a survey of 19 large news and blog sites). `theme.json` can't hold breakpoints, and CSS custom properties don't work in media queries, so the four widths live in **one file: `assets/css/layout.css`**.

| Band | Viewport | Layout |
|---|---|---|
| Phone | < 600 | 1 column, 16px gutter, Navigation overlay menu |
| Large phone / small tablet | 600–767 | 1 column, 24px gutter, post cards 2 across |
| Tablet | 768–1023 | 1 column, content centred at max 760px, cards 2–3 across |
| Laptop | 1024–1279 | Content + 48px gap + 300px sidebar (fluid, 24px gutters) |
| Desktop | ≥ 1280 | Container at its 1200px max: content 852 + 48 + sidebar 300 |

Measured in a browser (Post with Sidebar, logged out):

| | 390 | 600 | 768 | 1024 | 1280 | 1440 |
|---|---|---|---|---|---|---|
| Gutter | 16 | 24 | 24 | 24 | 40 (centred) | 120 (centred) |
| Content column | 358 | 552 | 720 | 628 | 852 | 852 |
| Text measure | 358 | 552 | 720 | 628 | 760 | 760 |
| Sidebar | below | below | below | 300 | 300 | 300 |
| Body size | 18.1px | 18.5px | 18.9px | 19.4px | 20px | 20px |

Rules the theme follows:
- **No Columns block in templates or patterns.** Core Columns stacks below 782px, not 768, so layouts use Group blocks with grid layout instead, and the theme's breakpoints control them. Remove Columns from your writers' block list in your editorial setup; the theme doesn't restrict blocks.
- **No sticky header.**
- **Reserved space everywhere:** a fixed 73px header (logo capped at 40px), 16:9 featured images served at full size (Google Discover wants ≥1200px wide), and fixed aspect ratios on card images.
- The Navigation overlay below 600px is core's breakpoint, and it matches the spec.

### Grids

Grids opt in with a class on the grid Group or Post Template:

| Class | <600 | 600–767 | 768–1023 | ≥1024 | Used by |
|---|---|---|---|---|---|
| `the-first-grid-2` | 1 | 1 | 1 | 2 | Split hero, about, contact |
| `the-first-grid-3` | 1 | 1 | 3 | 3 | Latest posts |
| `the-first-grid-3-wide` | 1 | 1 | 1 | 3 | Pricing, testimonials |
| `the-first-grid-2-3` | 1 | 2 | 2 | 3 | Features, blog grid |
| `the-first-grid-4` | 1 | 2 | 2 | 4 | Team, stats |

Remove the class (Block settings → Advanced → Additional CSS class) to use the editor's own grid controls instead.

## Performance (Core Web Vitals)

Measured with Lighthouse 12 (mobile profile, simulated slow 4G, 4× CPU slowdown), median of 3 runs, logged out, WordPress 7.1.3. The test server was a local Playground running PHP in WebAssembly, so time to first byte was about 800ms. A cached production host is typically about 100ms, so real-world LCP should be lower.

| Page | Performance | Accessibility | Best practices | SEO | LCP | CLS | TBT |
|---|---|---|---|---|---|---|---|
| Landing (hero + features) | 99 | 100 | 100 | 92* | 1.84s | 0 | 0ms |
| Blog index | 99 | 100 | 100 | 91* | 1.84s | 0 | 0ms |
| Single post | 98 | 100 | 100 | 92* | 2.11s | 0 | 0ms |
| Post with Sidebar | 98 | 100** | 100 | 92* | 2.11s | 0 | 0ms |

\* The only SEO deduction is the missing meta description, which is the SEO plugin's job.
\** Measured after fixing the comment-form heading level (it was 98 before).

Thresholds for "good": LCP ≤ 2.5s, CLS ≤ 0.1, INP ≤ 200ms (TBT is the lab proxy for INP).

What keeps the vitals good in production:
- **LCP:** use a page cache. The first featured or hero image automatically gets `fetchpriority="high"`, and images further down are lazy-loaded (both core behavior). Both theme stylesheets are inlined, so they don't block rendering.
- **CLS:** upload images through the Media Library, which adds `width`/`height` attributes. The font swap is metric-matched.
- **INP:** the theme ships no JavaScript. Watch what plugins add.
- The emoji script (about 15 KB) is core's. Remove it with your performance plugin.

## Child themes (one per client project)

```
wp-content/themes/client-name/
├── style.css
├── theme.json      Only the tokens you're changing; WordPress merges it over the parent
└── functions.php   Optional
```

`style.css`:

```css
/*
Theme Name: Client Name
Template:   the-first
Version:    1.0.0
*/
```

The parent always loads its own stylesheet. If the child has CSS of its own, enqueue it from the child's `functions.php`:

```php
add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'client-name', get_stylesheet_uri(), array( 'the-first-style' ), wp_get_theme()->get( 'Version' ) );
} );
```

A child theme can override any template, part or pattern by adding a file with the same path.

## Recommended plugin stack

The theme deliberately leaves these out:

| Need | Typical choice |
|---|---|
| SEO meta, sitemaps, schema, breadcrumbs | Yoast SEO or Rank Math |
| Security hardening (XML-RPC, headers, login, user enumeration) | Wordfence / Solid Security, or a site mu-plugin |
| Page cache, asset cleanup (emoji, embeds, dashicons) | Host cache + WP Rocket / Perfmatters / LiteSpeed Cache |
| Forms | Gravity Forms, WPForms or Fluent Forms |

Also set these in `wp-config.php`, not the theme: `DISALLOW_FILE_EDIT`, `WP_POST_REVISIONS`, `FORCE_SSL_ADMIN`.

## Submitting to WordPress.org

```bash
composer zip          # builds dist/the-first-<version>.zip, leaving out everything in .distignore
```

The ZIP holds only theme files: no `vendor/`, Composer or PHPCS files, `bin/`, dotfiles, `README.md` or `CHANGELOG.md`. WordPress.org reads `readme.txt` (description, FAQ, changelog, copyright and the licences of bundled resources).

Checked on 2026-10-18 against the built ZIP:

| Check | Result |
|---|---|
| Theme Check plugin (what the upload runs) | Passed all 9,275 tests; one INFO note confirming the single text domain `the-first` |
| WPCS + PHPCompatibility (PHP 8.0+, WP 6.9+) | 0 errors, 0 warnings |
| Block validation on 6.9.10 (minimum) and 7.1.3 (tested up to) | 0 invalid blocks, no missing blocks |
| PHP notices with `WP_DEBUG` on (all templates, logged in and out, editor and Site Editor) | None on 6.9.10 or 7.1.3 |
| Theme Unit Test data (57 posts + pages + archives at 390px and 1280px) | No overflow and no PHP notices; untitled posts linked from listings via their dates |
| Third-party requests at runtime | None (font self-hosted; the only external link is the footer credit) |
| Licences | GPLv2+ theme; Inter under OFL (accepted for fonts); images and screenshot are original |
| Tags | Only official tags from the WordPress.org feature list |

Before submitting:
- **Name:** a theme called "First" (`first`) already exists, so "The First" risks a "too similar" rejection. A rename touches the text domain, `the_first_` prefixes, `the-first/` pattern slugs and `the-first-` CSS classes.
- Keep `Tested up to` at the current WordPress major when you submit.

## Development

```bash
composer install     # WPCS + PHPCompatibility
composer lint        # phpcs, must report 0 errors
composer lint:fix    # phpcbf auto-fixes
```

Before releasing, insert every pattern in the editor and check that none shows "This block contains unexpected or invalid content". Hand-written block markup must match exactly what the block's settings would produce.

## License

GNU General Public License v2 or later. See `LICENSE`.
