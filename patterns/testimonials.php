<?php
/**
 * Title: Testimonials
 * Slug: lede/testimonials
 * Categories: testimonials
 * Keywords: testimonials, reviews, quotes, social proof
 * Viewport Width: 1400
 * Description: Three client quotes in cards.
 *
 * @package Lede
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:paragraph {"align":"center","textColor":"accent","fontSize":"sm","style":{"typography":{"fontWeight":"700","letterSpacing":"0.12em","textTransform":"uppercase"}}} -->
<p class="has-text-align-center has-accent-color has-text-color has-sm-font-size" style="font-weight:700;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e( 'Testimonials', 'lede' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'What clients say', 'lede' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"contrast-2","fontSize":"lg"} -->
<p class="has-text-align-center has-contrast-2-color has-text-color has-lg-font-size"><?php esc_html_e( 'Real words from real people. Replace these with quotes from your clients.', 'lede' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"lede-grid-3-wide","layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"18rem"}} -->
<div class="wp-block-group alignwide lede-grid-3-wide">
<!-- wp:group {"className":"is-style-card","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-card"><!-- wp:quote {"className":"is-style-plain"} -->
<blockquote class="wp-block-quote is-style-plain"><!-- wp:paragraph {"fontSize":"lg"} -->
<p class="has-lg-font-size"><?php esc_html_e( 'They understood the brief immediately and delivered ahead of schedule. Our enquiries doubled in three months.', 'lede' ); ?></p>
<!-- /wp:paragraph --><cite><?php esc_html_e( 'Alex Morgan, Founder, Northwind', 'lede' ); ?></cite></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-card","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-card"><!-- wp:quote {"className":"is-style-plain"} -->
<blockquote class="wp-block-quote is-style-plain"><!-- wp:paragraph {"fontSize":"lg"} -->
<p class="has-lg-font-size"><?php esc_html_e( 'Clear communication, no surprises, and a site our team actually enjoys updating.', 'lede' ); ?></p>
<!-- /wp:paragraph --><cite><?php esc_html_e( 'Priya Shah, Marketing Lead, Fieldstone', 'lede' ); ?></cite></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-card","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-card"><!-- wp:quote {"className":"is-style-plain"} -->
<blockquote class="wp-block-quote is-style-plain"><!-- wp:paragraph {"fontSize":"lg"} -->
<p class="has-lg-font-size"><?php esc_html_e( 'The fastest site we have ever had. Our search traffic is up and bounce rate is down.', 'lede' ); ?></p>
<!-- /wp:paragraph --><cite><?php esc_html_e( 'Sam Lee, Director, Harbour and Co.', 'lede' ); ?></cite></blockquote>
<!-- /wp:quote --></div>
<!-- /wp:group -->

</div>
<!-- /wp:group --></div>
<!-- /wp:group -->
