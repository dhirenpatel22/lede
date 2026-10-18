<?php
/**
 * Title: About: introduction
 * Slug: lede/about-intro
 * Categories: about
 * Keywords: about, bio, introduction, story, profile
 * Viewport Width: 1400
 * Description: Image beside an about heading, two paragraphs and buttons.
 *
 * @package Lede
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">
<!-- wp:group {"align":"wide","className":"lede-grid-2","style":{"spacing":{"blockGap":"var:preset|spacing|80"}},"layout":{"type":"grid","columnCount":2}} -->
<div class="wp-block-group alignwide lede-grid-2"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"1rem"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_parent_theme_file_uri( 'assets/images/placeholder-portrait.svg' ) ); ?>" alt="<?php esc_attr_e( 'Placeholder portrait. Replace with your photo.', 'lede' ); ?>" style="border-radius:1rem;aspect-ratio:4/5;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"accent","fontSize":"sm","style":{"typography":{"fontWeight":"700","letterSpacing":"0.12em","textTransform":"uppercase"}}} -->
<p class="has-accent-color has-text-color has-sm-font-size" style="font-weight:700;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e( 'About us', 'lede' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'A short line about who you are', 'lede' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php esc_html_e( 'Introduce yourself or your company: what you do, who you do it for, and what makes your approach different.', 'lede' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-2"} -->
<p class="has-contrast-2-color has-text-color"><?php esc_html_e( 'Add a second paragraph with a bit of history, a notable result, or the values that guide your work.', 'lede' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Say hello', 'lede' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php esc_html_e( 'Our story', 'lede' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
