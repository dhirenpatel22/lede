<?php
/**
 * Lede Child functions.
 *
 * Rename the `lede_child_` prefix and the `lede-child` handle and text domain
 * to the site's own slug.
 *
 * @package Lede_Child
 */

defined( 'ABSPATH' ) || exit;

/**
 * Enqueues this child theme's stylesheet after the parent's.
 *
 * The parent loads its own styles. Delete this function if style.css holds
 * only the theme header.
 */
function lede_child_enqueue_styles(): void {
	wp_enqueue_style(
		'lede-child-style',
		get_stylesheet_uri(),
		array( 'lede-style', 'lede-layout' ),
		wp_get_theme()->get( 'Version' )
	);
	wp_style_add_data( 'lede-child-style', 'path', get_stylesheet_directory() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'lede_child_enqueue_styles' );
