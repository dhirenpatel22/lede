<?php
/**
 * Title: Comments
 * Slug: lede/hidden-comments
 * Categories: posts
 * Inserter: no
 *
 * @package Lede
 */

?>
<!-- wp:comments {"style":{"spacing":{"margin":{"top":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-comments" style="margin-top:var(--wp--preset--spacing--80)"><!-- wp:comments-title {"level":2,"fontSize":"2xl"} /-->

<!-- wp:comment-template -->
<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:avatar {"size":40,"style":{"border":{"radius":"50%"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:comment-author-name /-->

<!-- wp:comment-date /--></div>
<!-- /wp:group -->

<!-- wp:comment-content /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"fontSize":"sm","layout":{"type":"flex"}} -->
<div class="wp-block-group has-sm-font-size"><!-- wp:comment-reply-link /-->

<!-- wp:comment-edit-link /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:comment-template -->

<!-- wp:comments-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:comments-pagination-previous /-->

<!-- wp:comments-pagination-numbers /-->

<!-- wp:comments-pagination-next /-->
<!-- /wp:comments-pagination -->

<!-- wp:post-comments-form /--></div>
<!-- /wp:comments -->
