<?php
/**
 * Title: Home intro
 * Slug: lede/hidden-home-intro
 * Categories: banner
 * Inserter: no
 * Description: Hero and features shown above the latest posts, only when the homepage displays the latest posts.
 *
 * @package Lede
 */

// Sites with a static homepage, and the Posts page, get the plain post list.
if ( ! ( is_front_page() && is_home() ) ) {
	return;
}
?>
<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull"><!-- wp:pattern {"slug":"lede/hero-home"} /-->

<!-- wp:pattern {"slug":"lede/features-grid"} /--></div>
<!-- /wp:group -->
