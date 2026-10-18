<?php
/**
 * Title: Footer
 * Slug: lede/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 *
 * @package Lede
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|60"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"line","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-line-color has-contrast-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60","padding":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group alignwide" style="padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:site-title {"level":0,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}}} /-->

<!-- wp:site-tagline {"fontSize":"sm"} /--></div>
<!-- /wp:group -->

<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"border":{"top":{"color":"#ffffff26","style":"solid","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|50"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide" style="border-top-color:#ffffff26;border-top-style:solid;border-top-width:1px;padding-top:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"fontSize":"xs"} -->
<p class="has-xs-font-size">&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"xs"} -->
<p class="has-xs-font-size">
<?php
/* translators: %s: WordPress link. */
printf( esc_html__( 'Powered by %s', 'lede' ), '<a href="' . esc_url( __( 'https://wordpress.org', 'lede' ) ) . '" rel="nofollow">WordPress</a>' );
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
