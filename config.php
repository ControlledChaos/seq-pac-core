<?php
/**
 * Plugin configuration
 *
 * The constants defined here do not override any default behavior
 * or default user interfaces. However, the corresponding behavior
 * can be overridden in the system config file (e.g. `wp-config`,
 * `app-config` ).
 *
 * The reason for using constants in the config file rather than
 * in a settings file is to prevent site administrators wrongly
 * or incorrectly configuring the site built by developers.
 *
 * @package    SPR_Core
 * @subpackage Configuration
 * @category   Core
 * @since      1.0.0
 */

namespace SPR_Core;

// Alias namespaces.
use SPR_Core\Classes as Classes;

// Restrict direct access.
if ( ! defined( 'ABSPATH' ) ) {
	die;
}

/**
 * Constant: Plugin version
 *
 * Keeping the version at 1.0.0 as this is a starter plugin but
 * you may want to start counting as you develop for your use case.
 *
 * Remember to find and replace the `@version x.x.x` in docblocks.
 *
 * @since 1.0.0
 * @var   string The latest plugin version.
 */
define( 'SPRC_VERSION', '1.0.0' );

/**
 * Plugin name
 *
 * @since 1.0.0
 * @var   string The name of the plugin.
 */
if ( ! defined( 'SPRC_NAME' ) ) {
	define( 'SPRC_NAME', __( 'Sequoia Pacific Realty Core', 'spr-core' ) );
}

/**
 * Constant: Plugin folder path
 *
 * @since 1.0.0
 * @var   string The filesystem directory path (with trailing slash)
 *               for the plugin __FILE__ passed in.
 */
define( 'SPRC_PATH', plugin_dir_path( __FILE__ ) );

/**
 * Constant: Plugin folder URL
 *
 * @since 1.0.0
 * @var   string The URL directory path (with trailing slash)
 *               for the plugin __FILE__ passed in.
 */
define( 'SPRC_URL', plugin_dir_url( __FILE__ ) );

/**
 * PHP version check
 *
 * Stop here if the minimum PHP version is not met.
 * The following array definitions wi break sites
 * running older PHP versions.
 *
 * @since  1.0.0
 * @return void
 */
if ( ! Classes\php()->version() ) {
	return;
}

/**
 * Constant: Plugin configuration.
 *
 * @since 1.0.0
 * @var   array Plugin identification, support, settings.
 */
if ( ! defined( 'SPRC_CONFIG' ) ) {

	define( 'SPRC_CONFIG', [

		/**
		 * Plugin version
		 *
		 * @since 1.0.0
		 * @var   string The latest plugin version.
		 */
		'version' => SPRC_VERSION,

		/**
		 * Required PHP version
		 *
		 * @since 1.0.0
		 * @var   string The minimum required PHP version.
		 */
		'php_version' => Classes\php()->minimum(),

		/**
		 * Plugin name
		 *
		 * Remember to replace in the plugin header.
		 *
		 * @since 1.0.0
		 * @var   string The name of the plugin.
		 */
		'name' => SPRC_NAME,

		/**
		 * Developer name
		 *
		 * @since 1.0.0
		 * @var   string The name of the developer/agency.
		 */
		'dev_name' => __( 'Controlled Chaos', 'spr-core' ),

		/**
		 * Developer URL
		 *
		 * @since 1.0.0
		 * @var   string The URL of the developer/agency.
		 */
		'dev_url' => esc_url( 'https://ccdzine.com/' ),

		/**
		 * Developer email
		 *
		 * @since 1.0.0
		 * @var   string The URL of the developer/agency.
		 */
		'dev_email' => sanitize_email( 'greg@ccdzine.com' ),

		/**
		 * Plugin URL
		 *
		 * @since 1.0.0
		 * @var   string The URL of the plugin.
		 */
		'plugin_url' => esc_url( 'https://github.com/ControlledChaos/spr-core' ),

		/**
		 * Universal slug
		 *
		 * This URL slug is used for various plugin admin & settings pages.
		 *
		 * The prefix will change in your search & replace in renaming the plugin.
		 * Change the second part of the define(), here as 'spr-core',
		 * to your preferred page slug.
		 *
		 * @since 1.0.0
		 * @var   string The URL slug of the admin pages.
		 */
		'admin_slug' => 'spr-core',

		/**
		 * Allow Site Health
		 *
		 * @since 1.0.0
		 * @var   boolean Whether to allow the Site Health feature.
		 */
		'site_health' => false,

		/**
		 * Allow links manager
		 *
		 * @since 1.0.0
		 * @var   boolean Whether to allow the links manager feature.
		 */
		'links_manager' => false,

		/**
		 * Allow Customizer
		 *
		 * @since 1.0.0
		 * @var   boolean Whether to allow the Customizer.
		 */
		'customizer' => true,

		/**
		 * User admin color picker
		 *
		 * @since 1.0.0
		 * @var   boolean Whether to allow admin color pickers.
		 */
		'color_picker' => true
	] );
}

/**
 * Developer name
 *
 * @since 1.0.0
 * @var   string The name of the developer/agency.
 */
if ( ! defined( 'SPRC_DEV_NAME' ) ) {
	define( 'SPRC_DEV_NAME', SPRC_CONFIG['dev_name'] );
}

/**
 * Developer URL
 *
 * @since 1.0.0
 * @var   string The URL of the developer/agency.
 */
if ( ! defined( 'SPRC_DEV_URL' ) ) {
	define( 'SPRC_DEV_URL', SPRC_CONFIG['dev_url'] );
}

/**
 * Developer email
 *
 * @since 1.0.0
 * @var   string The URL of the developer/agency.
 */
if ( ! defined( 'SPRC_DEV_EMAIL' ) ) {
	define( 'SPRC_DEV_EMAIL', SPRC_CONFIG['dev_email'] );
}

/**
 * Plugin URL
 *
 * @since 1.0.0
 * @var   string The URL of the plugin.
 */
if ( ! defined( 'SPRC_PLUGIN_URL' ) ) {
	define( 'SPRC_PLUGIN_URL', SPRC_CONFIG['plugin_url'] );
}

/**
 * Allow Site Health
 *
 * @since 1.0.0
 * @var   boolean Whether to allow the Site Health feature.
 */
if ( ! defined( 'SPRC_ALLOW_SITE_HEALTH' ) ) {
	define( 'SPRC_ALLOW_SITE_HEALTH', SPRC_CONFIG['site_health'] );
}

/**
 * Allow links manager
 *
 * @since 1.0.0
 * @var   boolean Whether to allow the links manager feature.
 */
if ( ! defined( 'SPRC_ALLOW_LINKS_MANAGER' ) ) {
	define( 'SPRC_ALLOW_LINKS_MANAGER', SPRC_CONFIG['links_manager'] );
}

/**
 * Allow Customizer
 *
 * @since 1.0.0
 * @var   boolean Whether to allow the Customizer.
 */
if ( ! defined( 'SPRC_ALLOW_CUSTOMIZER' ) ) {
	define( 'SPRC_ALLOW_CUSTOMIZER', SPRC_CONFIG['customizer'] );
}

/**
 * User admin color picker
 *
 * @since 1.0.0
 * @var   boolean Whether to allow admin color pickers.
 */
if ( ! defined( 'SPRC_ALLOW_ADMIN_COLOR_PICKER' ) ) {
	define( 'SPRC_ALLOW_ADMIN_COLOR_PICKER', SPRC_CONFIG['color_picker'] );
}
