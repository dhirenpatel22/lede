<?php
/**
 * Title: Sidebar
 * Slug: the-first/hidden-sidebar
 * Categories: text
 * Inserter: no
 *
 * @package TheFirst
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:pattern {"slug":"the-first/hidden-search"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2,"fontSize":"lg"} -->
<h2 class="wp-block-heading has-lg-font-size"><?php esc_html_e( 'Recent posts', 'the-first' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:latest-posts {"displayPostDate":true,"fontSize":"sm"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":2,"fontSize":"lg"} -->
<h2 class="wp-block-heading has-lg-font-size"><?php esc_html_e( 'Categories', 'the-first' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:categories {"showPostCounts":true,"fontSize":"sm"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
