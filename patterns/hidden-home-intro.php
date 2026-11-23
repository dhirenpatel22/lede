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

// Only on sites that activated Lede from 2.2.0 on, and only when the latest
// posts are the homepage. Updated sites, static homepages and the Posts page
// get the plain post list.
if ( ! ( lede_show_starter_extras() && is_front_page() && is_home() ) ) {
	return;
}
?>
<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0","margin":{"top":"calc(-1 * var(--wp--preset--spacing--80))","bottom":"var:preset|spacing|80"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="margin-top:calc(-1 * var(--wp--preset--spacing--80));margin-bottom:var(--wp--preset--spacing--80)"><!-- wp:pattern {"slug":"lede/hero-home"} /-->

<!-- wp:pattern {"slug":"lede/features-grid"} /--></div>
<!-- /wp:group -->
