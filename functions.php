<?php
/**
 * The First functions and definitions.
 *
 * Presentation only. Security hardening, SEO and performance tuning belong
 * in plugins so they survive theme switches and don't conflict with them.
 *
 * @package TheFirst
 */

defined( 'ABSPATH' ) || exit;

/**
 * Registers theme supports not enabled by default for block themes.
 */
function the_first_setup(): void {
	add_theme_support( 'wp-block-styles' );
	add_editor_style( array( 'style.css', 'assets/css/layout.css' ) );
}
add_action( 'after_setup_theme', 'the_first_setup' );

/**
 * Enqueues the parent theme stylesheets.
 *
 * Uses parent URIs explicitly so a child theme's files never replace them.
 * Child themes enqueue their own stylesheet. Both files are small enough for
 * core to inline (styles_inline_size_limit), so neither blocks rendering.
 */
function the_first_enqueue_styles(): void {
	$version = wp_get_theme( get_template() )->get( 'Version' );

	$styles = array(
		'the-first-style'  => 'style.css',
		'the-first-layout' => 'assets/css/layout.css',
	);

	foreach ( $styles as $handle => $file ) {
		wp_enqueue_style( $handle, get_parent_theme_file_uri( $file ), array(), $version );
		wp_style_add_data( $handle, 'path', get_parent_theme_file_path( $file ) );
	}
}
add_action( 'wp_enqueue_scripts', 'the_first_enqueue_styles' );

/**
 * Preloads the body font so text renders in it on first paint.
 *
 * Child themes that change the body font should filter this list
 * (return an empty array to disable), or the preloaded file is wasted.
 */
function the_first_preload_fonts(): void {
	$fonts = apply_filters(
		'the_first_preload_fonts',
		array( get_parent_theme_file_uri( 'assets/fonts/inter/Inter-Variable.woff2' ) )
	);

	foreach ( (array) $fonts as $font ) {
		printf(
			'<link rel="preload" href="%s" as="font" type="font/woff2" crossorigin>' . "\n",
			esc_url( $font )
		);
	}
}
add_action( 'wp_head', 'the_first_preload_fonts', 1 );

/**
 * Makes the comment form title an h2 (core default: h3).
 *
 * With no comments there's no "N responses" h2, so an h3 would follow the
 * post's h1 directly and break heading order.
 *
 * @param array $defaults Comment form defaults.
 * @return array
 */
function the_first_comment_form_defaults( array $defaults ): array {
	$defaults['title_reply_before'] = '<h2 id="reply-title" class="comment-reply-title">';
	$defaults['title_reply_after']  = '</h2>';
	return $defaults;
}
add_filter( 'comment_form_defaults', 'the_first_comment_form_defaults' );
