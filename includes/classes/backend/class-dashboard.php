<?php
/**
 * Dashboard class
 *
 * @package    SPR_Core
 * @subpackage Classes
 * @category   Admin
 * @since      1.0.0
 */

namespace SPR_Core\Classes\Admin;
use SPR_Core\Classes as Classes;

// Restrict direct access.
if ( ! defined( 'ABSPATH' ) ) {
	die;
}

class Dashboard extends Classes\Base {

	/**
	 * Constructor method
	 *
	 * @since  1.0.0
	 * @access public
	 * @return self
	 */
	public function __construct() {

		// Run the parent constructor method.
		parent :: __construct();

		// Remove widgets.
		add_action( 'wp_dashboard_setup', [ $this, 'remove_widgets' ] );

		// Print styles & scripts to the head.
		add_action( 'admin_head', [ $this, 'admin_head' ] );

		// Custom Welcome panel.
		remove_action( 'welcome_panel', 'wp_welcome_panel' );
		add_action( 'welcome_panel', [ $this, 'welcome_panel' ], 25 );

		// Enqueue dashboard assets.
		add_action( 'admin_enqueue_scripts', [ $this, 'assets' ] );

		// Add custom post types & taxonomies to the summary.
		add_action( 'dashboard_glance_items', [ $this, 'summary' ] );
	}

	/**
	 * Remove widgets
	 *
	 * @since  1.0.0
	 * @access public
	 * @global array wp_meta_boxes The metaboxes array holds all the widgets for wp-admin.
	 * @return void
	 */
	public function remove_widgets() {

		global $wp_meta_boxes;

		// WordPress news.
		unset( $wp_meta_boxes['dashboard']['side']['core']['dashboard_primary'] );

		// ClassicPress petitions.
		unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_petitions'] );

		/**
		 * Hide At a Glance for those that can edit theme options because
		 * this is the capability needed to run the `welcome_panel` hook.
		 * So this will display At a Glance to those who cannot view the
		 * welcome panel.
		 */
		if ( current_user_can( 'edit_theme_options' ) ) {
			unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now'] );
		}

		// Site Health.
		if ( defined( 'SPRC_ALLOW_SITE_HEALTH' ) && ! SPRC_ALLOW_SITE_HEALTH ) {
			remove_meta_box( 'dashboard_site_health', 'dashboard', 'normal' );
		}

		// PHP update nag.
		unset( $wp_meta_boxes['dashboard']['normal']['high']['dashboard_php_nag'] );
	}

	/**
	 * Enqueue admin scripts
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function assets() {

		// Get the screen ID to target the Dashboard.
		$screen = get_current_screen();

		// Enqueue only on the Dashboard screen.
		if ( $screen->id == 'dashboard' ) {
			wp_enqueue_style( SPRC_CONFIG['admin_slug'] . '-welcome', SPRC_URL .  'assets/css/welcome.min.css', [], null, 'screen' );
		}
	}

	/**
	 * Get the custom Welcome panel
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function welcome_panel() {

		// Look first in the active theme for a welcome panel template.
		$welcome = locate_template( 'template-parts/admin/welcome-panel.php' );

		if ( ! empty( $welcome ) ) {
			get_template_part( 'template-parts/admin/welcome-panel' );
		} else {
			include_once SPRC_PATH . 'views/backend/widgets/welcome-panel.php';
		}
	}

	/**
	 * Print styles & scripts to the head
	 *
	 * @since  1.0.0
	 * @access public
	 * @return string Returns the styles & scripts.
	 */
	public function admin_head() {

		$print = '
			<style>
				/*
				* Welcome panel user dismiss option
				* is disabled in the Customizer
				*/
				a.welcome-panel-close, #wp_welcome_panel-hide, .metabox-prefs label[for="wp_welcome_panel-hide"] {
					display: none !important;
				}
				.welcome-panel {
					display: block !important;
				}
			</style>
			';
		$print .= '
			<script></script>
			';

		/**
		 * If the At a Glance widget is removed,
		 * don't display the widgets container.
		 */
		if ( current_user_can( 'edit_theme_options' ) ) {
			$print .= '
			<style>#dashboard-widgets { display: none; }</style>
			';
		}

		// Print the styles & scripts.
		echo $print;
	}

	/**
	 * Add custom post types to dashboard summary
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function summary() {

		// Post type query arguments.
		$args = [
			'public'   => true,
			'_builtin' => false
		];

		// The type of output to return, either 'names' or 'objects'.
		$output = 'object';

		// The operator (and/or) to use with multiple $args.
		$operator = 'and';

		// Get post types according to above.
		$post_types = get_post_types( $args, $output, $operator );

		// Prepare an entry for each post type matching the query.
		foreach ( $post_types as $post_type ) {

			// Count the number of posts.
			$count = wp_count_posts( $post_type->name );

			// Get the number of published posts.
			$number = number_format_i18n( $count->publish );

			// Get the plural or single name based on the count.
			$name = _n( $post_type->labels->singular_name, $post_type->labels->name, intval( $count->publish ) );

			// Supply an edit link if the user can edit posts.
			if ( current_user_can( 'edit_posts' ) ) {
				echo sprintf(
					'<li class="post-count %1s-count"><a href="edit.php?post_type=%2s">%3s %4s</a></li>',
					$post_type->name,
					$post_type->name,
					$number,
					$name
				);

			// Otherwise just the count and post type name.
			} else {
				echo sprintf(
					'<li class="post-count %1s-count">%2s %3s</li>',
					$post_type->name,
					$number,
					$name
				);

			}
		}
	}
}
