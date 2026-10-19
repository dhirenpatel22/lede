<?php
/**
 * Title: Contact
 * Slug: lede/contact-section
 * Categories: contact
 * Keywords: contact, email, phone, address, get in touch
 * Viewport Width: 1400
 * Description: Contact details beside an intro and a button.
 *
 * @package Lede
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"}}},"backgroundColor":"base-2","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">
<!-- wp:group {"align":"wide","className":"lede-grid-2","style":{"spacing":{"blockGap":"var:preset|spacing|80"}},"layout":{"type":"grid","columnCount":2}} -->
<div class="wp-block-group alignwide lede-grid-2"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Let\'s talk', 'lede' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"contrast-2","fontSize":"lg"} -->
<p class="has-contrast-2-color has-text-color has-lg-font-size"><?php esc_html_e( 'Have a project in mind or a question? Send a message and we will get back to you within one business day.', 'lede' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="mailto:hello@example.com"><?php esc_html_e( 'Email us', 'lede' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"is-style-card","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-card"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"md"} -->
<h3 class="wp-block-heading has-md-font-size"><?php esc_html_e( 'Email', 'lede' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><a href="mailto:hello@example.com"><?php esc_html_e( 'hello@example.com', 'lede' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"md"} -->
<h3 class="wp-block-heading has-md-font-size"><?php esc_html_e( 'Phone', 'lede' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><a href="tel:+10000000000"><?php esc_html_e( '+1 (000) 000-0000', 'lede' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"fontSize":"md"} -->
<h3 class="wp-block-heading has-md-font-size"><?php esc_html_e( 'Office', 'lede' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( '123 Example Street, City, Country', 'lede' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
