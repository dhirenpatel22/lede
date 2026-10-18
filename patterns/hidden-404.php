<?php
/**
 * Title: 404 content
 * Slug: lede/hidden-404
 * Categories: text
 * Inserter: no
 *
 * @package Lede
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"accent","fontSize":"sm","style":{"typography":{"fontWeight":"700","letterSpacing":"0.12em","textTransform":"uppercase"}}} -->
<p class="has-accent-color has-text-color has-sm-font-size" style="font-weight:700;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e( 'Error 404', 'lede' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><?php esc_html_e( 'Page not found', 'lede' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"lg"} -->
<p class="has-contrast-2-color has-text-color has-lg-font-size"><?php esc_html_e( 'The page you are looking for does not exist or may have moved. Try searching, or head back home.', 'lede' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"lede/hidden-search"} /-->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Back to home', 'lede' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
