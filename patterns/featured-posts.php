<?php
/**
 * Title: Latest posts
 * Slug: lede/featured-posts
 * Categories: posts
 * Keywords: posts, blog, latest, news, articles
 * Viewport Width: 1400
 * Description: Three most recent posts in a grid with a link to the blog.
 *
 * @package Lede
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">
<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"fontSize":"3xl"} -->
<h2 class="wp-block-heading has-3-xl-font-size"><?php esc_html_e( 'Latest writing', 'lede' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>"><?php esc_html_e( 'View all posts', 'lede' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"className":"lede-grid-3","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"18rem"}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","style":{"border":{"radius":"0.5rem"}}} /-->

<!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"xl"} /-->

<!-- wp:post-date {"isLink":true,"fontSize":"xs"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
