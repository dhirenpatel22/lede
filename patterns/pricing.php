<?php
/**
 * Title: Pricing table
 * Slug: the-first/pricing
 * Categories: call-to-action, services
 * Keywords: pricing, plans, packages, tiers, price
 * Viewport Width: 1400
 * Description: Three pricing tiers with feature lists and buttons.
 *
 * @package TheFirst
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:paragraph {"align":"center","textColor":"accent","fontSize":"sm","style":{"typography":{"fontWeight":"700","letterSpacing":"0.12em","textTransform":"uppercase"}}} -->
<p class="has-text-align-center has-accent-color has-text-color has-sm-font-size" style="font-weight:700;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e( 'Pricing', 'the-first' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Simple, transparent pricing', 'the-first' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"contrast-2","fontSize":"lg"} -->
<p class="has-text-align-center has-contrast-2-color has-text-color has-lg-font-size"><?php esc_html_e( 'Pick the package that fits. Every plan includes hosting setup and launch support.', 'the-first' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"the-first-grid-3-wide","layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"}} -->
<div class="wp-block-group alignwide the-first-grid-3-wide">
<!-- wp:group {"className":"is-style-card","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-card"><!-- wp:heading {"level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size"><?php esc_html_e( 'Starter', 'the-first' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"4xl","style":{"typography":{"fontWeight":"700","lineHeight":"1"}}} -->
<p class="has-4-xl-font-size" style="font-weight:700;line-height:1">$1,500</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"sm"} -->
<p class="has-contrast-2-color has-text-color has-sm-font-size"><?php esc_html_e( 'For small sites that need to look professional fast.', 'the-first' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-checkmark","fontSize":"sm"} -->
<ul class="wp-block-list is-style-checkmark has-sm-font-size"><!-- wp:list-item -->
<li><?php esc_html_e( 'Up to 5 pages', 'the-first' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Mobile-first design', 'the-first' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Basic SEO setup', 'the-first' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( '2 weeks support', 'the-first' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Get started', 'the-first' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-card","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-card"><!-- wp:heading {"level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size"><?php esc_html_e( 'Business', 'the-first' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"4xl","style":{"typography":{"fontWeight":"700","lineHeight":"1"}}} -->
<p class="has-4-xl-font-size" style="font-weight:700;line-height:1">$4,500</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"sm"} -->
<p class="has-contrast-2-color has-text-color has-sm-font-size"><?php esc_html_e( 'Our most popular package for growing businesses.', 'the-first' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-checkmark","fontSize":"sm"} -->
<ul class="wp-block-list is-style-checkmark has-sm-font-size"><!-- wp:list-item -->
<li><?php esc_html_e( 'Up to 15 pages', 'the-first' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Custom design system', 'the-first' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Blog and lead forms', 'the-first' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Performance tuning', 'the-first' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( '3 months support', 'the-first' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-buttons"><!-- wp:button {"width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Get started', 'the-first' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-card","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-card"><!-- wp:heading {"level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size"><?php esc_html_e( 'Custom', 'the-first' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"4xl","style":{"typography":{"fontWeight":"700","lineHeight":"1"}}} -->
<p class="has-4-xl-font-size" style="font-weight:700;line-height:1"><?php esc_html_e( 'Let\'s talk', 'the-first' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"sm"} -->
<p class="has-contrast-2-color has-text-color has-sm-font-size"><?php esc_html_e( 'Larger builds, integrations or ongoing retainers.', 'the-first' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-checkmark","fontSize":"sm"} -->
<ul class="wp-block-list is-style-checkmark has-sm-font-size"><!-- wp:list-item -->
<li><?php esc_html_e( 'Unlimited pages', 'the-first' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Integrations and APIs', 'the-first' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Dedicated project lead', 'the-first' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Priority support', 'the-first' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Get started', 'the-first' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

</div>
<!-- /wp:group --></div>
<!-- /wp:group -->
