<?php
/**
 * Title: Team
 * Slug: the-first/team
 * Categories: team
 * Keywords: team, people, staff, about, members
 * Viewport Width: 1400
 * Description: Four team members with portrait, name and role.
 *
 * @package TheFirst
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:paragraph {"align":"center","textColor":"accent","fontSize":"sm","style":{"typography":{"fontWeight":"700","letterSpacing":"0.12em","textTransform":"uppercase"}}} -->
<p class="has-text-align-center has-accent-color has-text-color has-sm-font-size" style="font-weight:700;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e( 'Our team', 'the-first' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'The people behind the work', 'the-first' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"contrast-2","fontSize":"lg"} -->
<p class="has-text-align-center has-contrast-2-color has-text-color has-lg-font-size"><?php esc_html_e( 'A small, senior team. You work directly with the people doing the work.', 'the-first' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"the-first-grid-4","layout":{"type":"grid","columnCount":4,"minimumColumnWidth":"14rem"}} -->
<div class="wp-block-group alignwide the-first-grid-4">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"0.75rem"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_parent_theme_file_uri( 'assets/images/placeholder-portrait.svg' ) ); ?>" alt="<?php esc_attr_e( 'Portrait of Jordan Avery', 'the-first' ); ?>" style="border-radius:0.75rem;aspect-ratio:4/5;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size">Jordan Avery</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted","fontSize":"sm"} -->
<p class="has-muted-color has-text-color has-sm-font-size"><?php esc_html_e( 'Founder and Strategy', 'the-first' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"0.75rem"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_parent_theme_file_uri( 'assets/images/placeholder-portrait.svg' ) ); ?>" alt="<?php esc_attr_e( 'Portrait of Casey Rivera', 'the-first' ); ?>" style="border-radius:0.75rem;aspect-ratio:4/5;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size">Casey Rivera</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted","fontSize":"sm"} -->
<p class="has-muted-color has-text-color has-sm-font-size"><?php esc_html_e( 'Design Lead', 'the-first' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"0.75rem"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_parent_theme_file_uri( 'assets/images/placeholder-portrait.svg' ) ); ?>" alt="<?php esc_attr_e( 'Portrait of Taylor Brooks', 'the-first' ); ?>" style="border-radius:0.75rem;aspect-ratio:4/5;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size">Taylor Brooks</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted","fontSize":"sm"} -->
<p class="has-muted-color has-text-color has-sm-font-size"><?php esc_html_e( 'Lead Developer', 'the-first' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:image {"aspectRatio":"4/5","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"0.75rem"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_parent_theme_file_uri( 'assets/images/placeholder-portrait.svg' ) ); ?>" alt="<?php esc_attr_e( 'Portrait of Morgan Ellis', 'the-first' ); ?>" style="border-radius:0.75rem;aspect-ratio:4/5;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"fontSize":"lg"} -->
<h3 class="wp-block-heading has-lg-font-size">Morgan Ellis</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted","fontSize":"sm"} -->
<p class="has-muted-color has-text-color has-sm-font-size"><?php esc_html_e( 'Project Manager', 'the-first' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

</div>
<!-- /wp:group --></div>
<!-- /wp:group -->
