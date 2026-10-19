<?php
/**
 * Title: Pricing table
 * Slug: lede/pricing
 * Categories: call-to-action, services
 * Keywords: pricing, plans, packages, tiers, price
 * Viewport Width: 1400
 * Description: Three pricing tiers with feature lists and buttons.
 *
 * @package Lede
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:paragraph {"align":"center","textColor":"accent","fontSize":"sm","style":{"typography":{"fontWeight":"700","letterSpacing":"0.12em","textTransform":"uppercase"}}} -->
<p class="has-text-align-center has-accent-color has-text-color has-sm-font-size" style="font-weight:700;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e( 'Pricing', 'lede' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Simple, transparent pricing', 'lede' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"contrast-2","fontSize":"lg"} -->
<p class="has-text-align-center has-contrast-2-color has-text-color has-lg-font-size"><?php esc_html_e( 'Pick the package that fits. Every plan includes hosting setup and launch support.', 'lede' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"lede-grid-3-wide","layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"}} -->
<div class="wp-block-group alignwide lede-grid-3-wide">
<!-- wp:group {"className":"is-style-card","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-card"><!-- wp:heading {"level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size"><?php esc_html_e( 'Starter', 'lede' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"4xl","style":{"typography":{"fontWeight":"700","lineHeight":"1"}}} -->
<p class="has-4-xl-font-size" style="font-weight:700;line-height:1"><?php esc_html_e( '$1,500', 'lede' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"sm"} -->
<p class="has-contrast-2-color has-text-color has-sm-font-size"><?php esc_html_e( 'For small sites that need to look professional fast.', 'lede' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-checkmark","fontSize":"sm"} -->
<ul class="wp-block-list is-style-checkmark has-sm-font-size"><!-- wp:list-item -->
<li><?php esc_html_e( 'Up to 5 pages', 'lede' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Mobile-first design', 'lede' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Basic SEO setup', 'lede' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( '2 weeks support', 'lede' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Get started', 'lede' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-card","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-card"><!-- wp:heading {"level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size"><?php esc_html_e( 'Business', 'lede' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"4xl","style":{"typography":{"fontWeight":"700","lineHeight":"1"}}} -->
<p class="has-4-xl-font-size" style="font-weight:700;line-height:1"><?php esc_html_e( '$4,500', 'lede' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"sm"} -->
<p class="has-contrast-2-color has-text-color has-sm-font-size"><?php esc_html_e( 'Our most popular package for growing businesses.', 'lede' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-checkmark","fontSize":"sm"} -->
<ul class="wp-block-list is-style-checkmark has-sm-font-size"><!-- wp:list-item -->
<li><?php esc_html_e( 'Up to 15 pages', 'lede' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Custom design system', 'lede' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Blog and lead forms', 'lede' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Performance tuning', 'lede' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( '3 months support', 'lede' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-buttons"><!-- wp:button {"width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Get started', 'lede' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-card","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-card"><!-- wp:heading {"level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size"><?php esc_html_e( 'Custom', 'lede' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"4xl","style":{"typography":{"fontWeight":"700","lineHeight":"1"}}} -->
<p class="has-4-xl-font-size" style="font-weight:700;line-height:1"><?php esc_html_e( 'Let\'s talk', 'lede' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"sm"} -->
<p class="has-contrast-2-color has-text-color has-sm-font-size"><?php esc_html_e( 'Larger builds, integrations or ongoing retainers.', 'lede' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-checkmark","fontSize":"sm"} -->
<ul class="wp-block-list is-style-checkmark has-sm-font-size"><!-- wp:list-item -->
<li><?php esc_html_e( 'Unlimited pages', 'lede' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Integrations and APIs', 'lede' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Dedicated project lead', 'lede' ); ?></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><?php esc_html_e( 'Priority support', 'lede' ); ?></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Get started', 'lede' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

</div>
<!-- /wp:group --></div>
<!-- /wp:group -->
