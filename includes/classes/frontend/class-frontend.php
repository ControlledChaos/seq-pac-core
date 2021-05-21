<?php
/**
 * Frontend class
 *
 * @package    SPR_Core
 * @subpackage Classes
 * @category   Front
 * @since      1.0.0
 */

namespace SPR_Core\Classes\Front;

// Restrict direct access.
if ( ! defined( 'ABSPATH' ) ) {
	die;
}

class Frontend {

	/**
	 * Constructor method
	 *
	 * @since  1.0.0
	 * @access public
	 * @return self
	 */
	public function __construct() {

		// Remove unpopular meta tags.
		add_action( 'init', [ $this, 'head_cleanup' ] );

		// Remove system versions from stylesheets and scripts.
		add_filter( 'style_loader_src', [ $this, 'remove_versions' ], 999 );
		add_filter( 'script_loader_src', [ $this, 'remove_versions' ], 999 );

		// Disable emoji script.
		add_action( 'init', [ $this, 'disable_emojis' ] );

		// Deregister Dashicons for users not logged in.
		add_action( 'wp_enqueue_scripts', [ $this, 'deregister_dashicons' ] );

		// Remove admin menu items.
		add_action( 'admin_bar_menu', [ $this, 'remove_toolbar_items' ], 999 );

		// Enqueue scripts.
		add_action( 'wp_enqueue_scripts', [ $this, 'scripts' ] );

		// Enqueue styles.
		add_action( 'wp_enqueue_scripts', [ $this, 'styles' ] );
	}

	/**
	 * Clean up meta tags from the <head>
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function head_cleanup() {

		remove_action( 'wp_head', 'rsd_link' );
		remove_action( 'wp_head', 'wlwmanifest_link' );
		remove_action( 'wp_head', 'wp_generator' );
	}

	/**
	 * Remove system versions
	 *
	 * Removes the system versions from stylesheet and script inks
	 * in the head. The versions are a potential security risk,
	 * indicating which version of the system to attack, and force
	 * browsers to download new scripts when the system updates.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  string $src Path to the file.
	 * @return null
	 */
	public function remove_versions( $src ) {

		if ( strpos( $src, '?ver=' ) ) {
			$src = remove_query_arg( 'ver', $src );
		}
		return $src;
	}

	/**
	 * Disable emoji script
	 *
	 * Emojis will still work in modern browsers. This removes the script
	 * that makes emojis work in old browser.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function disable_emojis() {
		remove_action( 'admin_print_styles', 'print_emoji_styles' );
		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
		remove_action( 'wp_print_styles', 'print_emoji_styles' );
		remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
		remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
		remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	}

	/**
	 * Deregister Dashicons for users not logged in.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function deregister_dashicons() {

		if ( ! is_user_logged_in() ) {
			wp_deregister_style( 'dashicons' );
		}
	}

	/**
	 * Remove admin menu items
	 *
	 * @see Message in `Admin/remove_menu_items()` docblock.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object $wp_admin_bar The WP_Admin_Bar class.
	 * @return void
	 *
	 * @todo Make this optional.
	 */
	public function remove_toolbar_items( $wp_admin_bar ) {

		// Get data for Greg Sweet.
		$user_name  = get_user_by( 'login', 'CCDzine' );
		$user_email = get_user_by( 'email', 'greg@ccdzine.com' );

		// Remove system logo link.
		$wp_admin_bar->remove_node( 'wp-logo' );

		// Remove the search icon & form.
		$wp_admin_bar->remove_menu( 'search' );

		// Remove if not Greg Sweet or a user with `develop` capabilities.
		if ( ! current_user_can( 'develop' ) || ! $user_name || ! $user_email ) {

			// Remove link to Themes page.
			$wp_admin_bar->remove_node( 'themes' );
		}
	}

	/**
	 * Enqueue scripts
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function scripts() {

		// Script suffix.
		if ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) {
			$suffix = '';
		} else {
			$suffix = '.min';
		}

		// Lightbox.
		wp_enqueue_script( SPRC_CONFIG['admin_slug'] . '-lightbox', SPRC_URL . '/assets/js/lightbox' . $suffix . '.js', [ 'jquery' ], null, true );

		// Slider.
		wp_enqueue_script( SPRC_CONFIG['admin_slug'] . '-slider', SPRC_URL . '/assets/js/slider' . $suffix . '.js', [ 'jquery' ], null, true );
	}

	/**
	 * Enqueue styles
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function styles() {

		// Script suffix.
		if ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) {
			$suffix = '';
		} else {
			$suffix = '.min';
		}

		// Lightbox.
		wp_enqueue_style( SPRC_CONFIG['admin_slug'] . '-lightbox', SPRC_URL . '/assets/css/lightbox' . $suffix . '.css', [], null, 'all' );

		// Slider.
		wp_enqueue_style( SPRC_CONFIG['admin_slug'] . '-slider', SPRC_URL . '/assets/css/slider' . $suffix . '.css', [], null, 'all' );
	}
}
