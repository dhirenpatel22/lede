=== Lede ===
Contributors: dhirenpatel22
Requires at least: 7.0
Tested up to: 7.1
Requires PHP: 8.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A fast, accessible block theme for blogs, publishers and business sites.

== Description ==

Lede is a lightweight block theme for full site editing. It's built for speed and readability: no theme JavaScript, one self-hosted variable font, and zero layout shift.

It includes blog templates, plus a post layout with a 300px sidebar. Patterns cover heroes, features, stats, testimonials, pricing, FAQ, team, logo cloud, calls to action, contact and latest posts. Layouts switch at fixed breakpoints (600, 768, 1024 and 1280px).

Style variations: Dark, Editorial (Source Serif 4 headings) and two color palettes, Forest and Plum. Every palette is checked against the color pairs the patterns use.

Colors meet WCAG 2.2 AA contrast, focus outlines are always visible, and every string is translatable.

== Frequently Asked Questions ==

= How do I show a sidebar on posts? =

Edit a post and choose the "Post with Sidebar" template. To make it the default, edit the Single Posts template in the Site Editor, or copy single-with-sidebar.html to single.html in a child theme.

= Does the theme add SEO tags or security features? =

No. Those belong in plugins so they keep working if you change themes. The theme outputs clean, semantic markup that works with any SEO plugin.

== Changelog ==

= 2.1.0 - 2026-11-20 =
* Requires WordPress 7.0 (core Breadcrumbs block).
* Added breadcrumbs above the title on posts, pages, archives and author archives.
* Added an author archive template (avatar, name, bio) and an author box after each post.
* Added style variations: Dark, Editorial (Source Serif 4 headings) and the Forest and Plum color palettes.
* Post grids load a 768px featured image instead of the full-size file.
* Single posts show the category in the breadcrumb trail instead of a label above the title.
* The header menu wraps instead of widening the page when it has many items, and the site title no longer wraps beside a long menu.
* Theme URI points to the theme's home page on dhirenpatel.me.

= 2.0.1 - 2026-11-08 =
* Replaced business content in the patterns with neutral placeholder text. Removed the hardcoded email, phone and address.
* Pattern buttons no longer link to pages that may not exist (/contact/, /about/, /services/); the latest posts pattern links to the posts page.
* Loads the text domain and ships languages/lede.pot.
* Removed the portfolio, news and custom-colors tags.
* The blog heading on the front page now lines up with the post grid.
* New screenshot captured from the theme as activated.

= 2.0.0 - 2026-10-18 =
* Renamed from "The First" to "Lede".
* Rebuilt as a lean block theme: new patterns, templates, breakpoints and self-hosted Inter font.
* Fixed comments display, heading sizes, block validation, contrast and full-width alignment.
* Fixed Theme Unit Test edge cases: long words, captions, embeds, deep comment threads and untitled posts.
* Requires WordPress 6.9.
* Removed plugin-territory code (security, SEO and performance tweaks).

= 1.0.0 =
* Initial release.

== Copyright ==

Lede WordPress Theme, Copyright 2026 Dhiren Patel.
Lede is distributed under the terms of the GNU GPL.

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

Inter font
Copyright 2016 The Inter Project Authors (https://github.com/rsms/inter)
License: SIL Open Font License, Version 1.1, https://openfontlicense.org
Source: https://github.com/rsms/inter
Files: assets/fonts/inter/Inter-Variable.woff2, assets/fonts/inter/Inter-Variable-Italic.woff2

Source Serif 4 font (Editorial style variation)
Copyright 2014-2023 Adobe (http://www.adobe.com/), with Reserved Font Name 'Source'
License: SIL Open Font License, Version 1.1, https://openfontlicense.org
Source: https://github.com/adobe-fonts/source-serif
Files: assets/fonts/source-serif-4/SourceSerif4-Variable.woff2

Placeholder images (assets/images/placeholder-landscape.svg, placeholder-portrait.svg, placeholder-logo.svg)
Copyright 2026 Dhiren Patel. Created for this theme.
License: GPLv2 or later, https://www.gnu.org/licenses/gpl-2.0.html

Screenshot (screenshot.png)
Copyright 2026 Dhiren Patel. Captured from the theme's default front page; contains no third-party images.
License: GPLv2 or later, https://www.gnu.org/licenses/gpl-2.0.html
