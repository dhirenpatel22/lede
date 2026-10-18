<?php
/**
 * Title: Hero: text and image
 * Slug: the-first/hero-split
 * Categories: banner, featured
 * Keywords: hero, split, image, intro, landing
 * Viewport Width: 1400
 * Description: Two-column hero with headline, intro and buttons beside an image.
 *
 * @package TheFirst
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">
<!-- wp:group {"align":"wide","className":"the-first-grid-2","style":{"spacing":{"blockGap":"var:preset|spacing|80"}},"layout":{"type":"grid","columnCount":2}} -->
<div class="wp-block-group alignwide the-first-grid-2"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":1,"fontSize":"5xl"} -->
<h1 class="wp-block-heading has-5-xl-font-size"><?php esc_html_e( 'Clear headline that states the outcome you deliver', 'the-first' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"lg"} -->
<p class="has-contrast-2-color has-text-color has-lg-font-size"><?php esc_html_e( 'One or two sentences that expand on the headline and give visitors a reason to keep reading.', 'the-first' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Book a call', 'the-first' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/about/' ) ); ?>"><?php esc_html_e( 'Learn more', 'the-first' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"1rem"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_parent_theme_file_uri( 'assets/images/placeholder-landscape.svg' ) ); ?>" alt="<?php esc_attr_e( 'Placeholder image. Replace with a photo of your work.', 'the-first' ); ?>" style="border-radius:1rem;aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
