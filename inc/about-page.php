<?php
/**
 * Appearance > About Lede: getting started and where to get help.
 *
 * Core admin markup only (no theme CSS or JS), no remote requests,
 * no stored options and no tracking parameters on links.
 *
 * @package Lede
 */

defined( 'ABSPATH' ) || exit;

/**
 * Adds the About Lede page under Appearance.
 */
function lede_add_about_page(): void {
	add_theme_page(
		__( 'About Lede', 'lede' ),
		__( 'About Lede', 'lede' ),
		'edit_theme_options',
		'lede-about',
		'lede_render_about_page'
	);
}
add_action( 'admin_menu', 'lede_add_about_page' );

/**
 * Renders the About Lede page.
 */
function lede_render_about_page(): void {
	if ( ! current_user_can( 'edit_theme_options' ) ) {
		return;
	}

	$version     = wp_get_theme( get_template() )->get( 'Version' );
	$repo_url    = 'https://github.com/dhirenpatel22/lede';
	$contact_url = 'https://www.dhirenpatel.me/contact/';
	?>
	<div class="wrap">
		<h1>
			<?php
			/* translators: %s: theme version number. */
			printf( esc_html__( 'About Lede %s', 'lede' ), esc_html( $version ) );
			?>
		</h1>
		<p><?php esc_html_e( 'Lede is a fast, accessible block theme for blogs, and a clean parent for child themes.', 'lede' ); ?></p>

		<h2><?php esc_html_e( 'Getting started', 'lede' ); ?></h2>
		<ul class="ul-disc">
			<li><?php esc_html_e( 'Change colours, fonts and layout in Appearance > Editor > Styles. Lede comes with four style variations: Dark, Editorial, Forest and Plum.', 'lede' ); ?></li>
			<li><?php esc_html_e( 'Add sections such as a hero, features, FAQ or pricing from the Lede pattern categories in the block inserter.', 'lede' ); ?></li>
			<li><?php esc_html_e( 'For a sidebar on posts, choose the Post with Sidebar template when you edit a post.', 'lede' ); ?></li>
			<li>
				<?php
				printf(
					/* translators: %s: link to the starter child theme on GitHub. */
					esc_html__( 'Building a child theme? Start from the %s.', 'lede' ),
					'<a href="' . esc_url( $repo_url . '/tree/main/starter/lede-child' ) . '">' . esc_html__( 'starter child theme on GitHub', 'lede' ) . '</a>'
				);
				?>
			</li>
		</ul>
		<p><a class="button button-primary" href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>"><?php esc_html_e( 'Open the Site Editor', 'lede' ); ?></a></p>

		<h2><?php esc_html_e( 'Help and support', 'lede' ); ?></h2>
		<p>
			<?php
			printf(
				/* translators: %s: link to the GitHub issues page. */
				esc_html__( 'Found a bug or have a question about the theme? %s with your WordPress version and the steps to reproduce it.', 'lede' ),
				'<a href="' . esc_url( $repo_url . '/issues' ) . '">' . esc_html__( 'Open an issue on GitHub', 'lede' ) . '</a>'
			);
			?>
		</p>
		<p>
			<?php
			printf(
				/* translators: %s: link to the theme developer's contact page. */
				esc_html__( 'Need help with your website? I’m Dhiren Patel, the developer of Lede, and I build and look after WordPress sites. %s', 'lede' ),
				'<a href="' . esc_url( $contact_url ) . '">' . esc_html__( 'Get in touch', 'lede' ) . '</a>'
			);
			?>
		</p>
	</div>
	<?php
}
