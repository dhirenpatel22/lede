# Lede Child (starter)

A starting point for a site built on Lede. Copy this folder, rename it, and change only what the site needs.

## Start a new site

```bash
cp -R starter/lede-child ~/path/to/wp-content/themes/client-name
cd ~/path/to/wp-content/themes/client-name
# Rename the theme, text domain, handle and function prefix:
sed -i '' -e 's/Lede Child/Client Name/' -e 's/lede-child/client-name/g' -e 's/lede_child_/client_name_/g' -e 's/Lede_Child/Client_Name/g' style.css functions.php
```

On Linux, use `sed -i` without the `''`. Then activate the child theme. Lede must be installed as well.

## What goes where

| Change | Where |
|---|---|
| Colors, fonts, sizes, spacing, block styles | `theme.json` |
| A template, part or pattern | Same path as the parent: `templates/single.html`, `parts/header.html`, `patterns/footer.php`. The child's file replaces the parent's. |
| CSS that `theme.json` can't express | `style.css` (enqueued by `functions.php`) |
| Behavior: custom post types, SEO, security, integrations | A plugin or a site mu-plugin, never the theme |

## Rules that save debugging time

1. **Presets replace, they don't merge.** If the child `theme.json` sets `settings.color.palette`, it replaces the parent's whole palette. Lede's patterns use every slug (`base`, `base-2`, `contrast`, `contrast-2`, `primary`, `primary-light`, `accent`, `accent-light`, `muted`, `line`), so keep all ten and change the values. This starter ships with the full palette for that reason. Font families, font sizes and spacing sizes behave the same way: copy the parent's full list before you edit it.
2. **Keep contrast.** `muted` and `accent` must stay at 4.5:1 or more on `base` and `base-2`.
3. **Changing the body font:** add the WOFF2 files under `assets/fonts/`, add the family (with the parent's Inter and System Mono entries) to `settings.typography.fontFamilies`, set `styles.typography.fontFamily`, and repoint the preload so the parent doesn't preload Inter:

   ```php
   add_filter( 'lede_preload_fonts', function () {
   	return array( get_theme_file_uri( 'assets/fonts/brand/Brand-Variable.woff2' ) ); // Or array() for no preload.
   } );
   ```

4. **Overriding a pattern:** add a pattern file with the same `Slug:` header (copying the parent file to the same path is easiest). The child's pattern wins, and templates that reference the slug use it.
5. **New patterns don't appear until the pattern cache resets.** WordPress caches a theme's pattern list until its `Version` changes. Bump `Version` in `style.css`, or set `define( 'WP_DEVELOPMENT_MODE', 'theme' );` in `wp-config.php` while developing (remove it before launch).

See the parent's README for the design tokens, breakpoints and grid classes.
