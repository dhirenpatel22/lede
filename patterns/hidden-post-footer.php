<?php
/**
 * Title: Post footer
 * Slug: lede/hidden-post-footer
 * Categories: posts
 * Inserter: no
 *
 * @package Lede
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60","margin":{"top":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--70)"><!-- wp:post-terms {"term":"post_tag","separator":"  ","prefix":"<?php echo esc_attr__( 'Tagged: ', 'lede' ); ?>"} /-->

<!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"},"fontSize":"sm"} -->
<div class="wp-block-group has-sm-font-size"><!-- wp:post-navigation-link {"type":"previous","showTitle":true,"arrow":"arrow"} /-->

<!-- wp:post-navigation-link {"showTitle":true,"arrow":"arrow"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
