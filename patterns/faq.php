<?php
/**
 * Title: FAQ
 * Slug: lede/faq
 * Categories: text
 * Keywords: faq, questions, answers, accordion, help
 * Viewport Width: 1400
 * Description: Frequently asked questions as an accessible accordion.
 *
 * @package Lede
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--90);padding-bottom:var(--wp--preset--spacing--90)">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:paragraph {"align":"center","textColor":"accent","fontSize":"sm","style":{"typography":{"fontWeight":"700","letterSpacing":"0.12em","textTransform":"uppercase"}}} -->
<p class="has-text-align-center has-accent-color has-text-color has-sm-font-size" style="font-weight:700;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e( 'FAQ', 'lede' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Frequently asked questions', 'lede' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"contrast-2","fontSize":"lg"} -->
<p class="has-text-align-center has-contrast-2-color has-text-color has-lg-font-size"><?php esc_html_e( 'Answers to the questions we hear most. Still unsure? Get in touch.', 'lede' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:details -->
<details class="wp-block-details"><summary><?php esc_html_e( 'How long does a typical project take?', 'lede' ); ?></summary><!-- wp:paragraph -->
<p><?php esc_html_e( 'Most websites launch in four to eight weeks, depending on scope and how quickly content is ready.', 'lede' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary><?php esc_html_e( 'Do you offer ongoing support?', 'lede' ); ?></summary><!-- wp:paragraph -->
<p><?php esc_html_e( 'Yes. Every project includes launch support, and we offer monthly care plans for updates, backups and improvements.', 'lede' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary><?php esc_html_e( 'Can I update the website myself?', 'lede' ); ?></summary><!-- wp:paragraph -->
<p><?php esc_html_e( 'Absolutely. Sites are built with the WordPress block editor, so you can edit pages without touching code.', 'lede' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary><?php esc_html_e( 'What do you need from me to get started?', 'lede' ); ?></summary><!-- wp:paragraph -->
<p><?php esc_html_e( 'A short brief, your brand assets and access to any existing accounts. We guide you through the rest.', 'lede' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

</div>
<!-- /wp:group --></div>
<!-- /wp:group -->
