<?php
/**
 * Title: Author header
 * Slug: lede/hidden-author-header
 * Categories: posts
 * Inserter: no
 *
 * Avatar, name and biographical info on author archives. Core's avatar and
 * biography blocks read the author from the query, and the biography renders
 * nothing when the profile has none.
 *
 * @package Lede
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50","margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:avatar {"size":96,"style":{"border":{"radius":"9999px"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:query-title {"type":"archive","showPrefix":false} /-->

<!-- wp:post-author-biography {"textColor":"muted","fontSize":"lg"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
