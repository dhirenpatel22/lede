<?php
/**
 * Title: Blog heading
 * Slug: lede/hidden-blog-heading
 * Categories: posts
 * Inserter: no
 *
 * @package Lede
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><?php esc_html_e( 'Blog', 'lede' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted","fontSize":"lg"} -->
<p class="has-muted-color has-text-color has-lg-font-size"><?php esc_html_e( 'Thoughts, notes, and ideas.', 'lede' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
