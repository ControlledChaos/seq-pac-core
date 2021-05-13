<?php
/**
 * Register plugin classes
 *
 * The autoloader registers plugin classes for later use.
 *
 * @package    SPR_Core
 * @subpackage Includes
 * @category   Classes
 * @since      1.0.0
 */

namespace SPR_Core;

// Restrict direct access.
if ( ! defined( 'ABSPATH' ) ) {
	die;
}

/**
 * Class files
 *
 * Defines the class directories and file prefixes.
 *
 * @since 1.0.0
 * @var   array Defines an array of class file paths.
 */
define( 'SPRC_CLASS', [
	'core'     => SPRC_PATH . 'includes/classes/core/class-',
	'settings' => SPRC_PATH . 'includes/classes/settings/class-',
	'tools'    => SPRC_PATH . 'includes/classes/tools/class-',
	'media'    => SPRC_PATH . 'includes/classes/media/class-',
	'users'    => SPRC_PATH . 'includes/classes/users/class-',
	'vendor'   => SPRC_PATH . 'includes/classes/vendor/class-',
	'admin'    => SPRC_PATH . 'includes/classes/backend/class-',
	'front'    => SPRC_PATH . 'includes/classes/frontend/class-',
	'general'  => SPRC_PATH . 'includes/classes/class-',
] );

/**
 * Classes namespace
 *
 * @since 1.0.0
 * @var   string Defines the namespace of class files.
 */
define( 'SPRC_CLASS_NS', __NAMESPACE__ . '\Classes' );

/**
 * Array of classes to register
 *
 * When you add new classes to your version of this plugin you may
 * add them to the following array rather than requiring the file
 * elsewhere. Be sure to include the precise namespace.
 *
 * SAMPLES: Uncomment sample classes to load them.
 *
 * @since 1.0.0
 * @var   array Defines an array of class files to register.
 */
define( 'SPRC_CLASSES', [

	// Base class.
	SPRC_CLASS_NS . '\Base' => SPRC_CLASS['general'] . 'base.php',

	// Core classes.
	SPRC_CLASS_NS . '\Core\Editor_Options'     => SPRC_CLASS['core'] . 'editor-options.php',
	SPRC_CLASS_NS . '\Core\Type_Tax'           => SPRC_CLASS['core'] . 'type-tax.php',
	SPRC_CLASS_NS . '\Core\Register_Type'      => SPRC_CLASS['core'] . 'register-type.php',
	SPRC_CLASS_NS . '\Core\Register_Listing'   => SPRC_CLASS['core'] . 'register-listing.php',
	SPRC_CLASS_NS . '\Core\Register_Rental'    => SPRC_CLASS['core'] . 'register-rental.php',
	SPRC_CLASS_NS . '\Core\Register_Admin'     => SPRC_CLASS['core'] . 'register-admin.php',
	SPRC_CLASS_NS . '\Core\Register_Site_Help' => SPRC_CLASS['core'] . 'register-site-help.php',
	SPRC_CLASS_NS . '\Core\Register_Tax'       => SPRC_CLASS['core'] . 'register-tax.php',
	SPRC_CLASS_NS . '\Core\Register_Location'  => SPRC_CLASS['core'] . 'register-location.php',
	SPRC_CLASS_NS . '\Core\Register_Types'     => SPRC_CLASS['core'] . 'register-types.php',
	SPRC_CLASS_NS . '\Core\Types_Taxes_Order'  => SPRC_CLASS['core'] . 'types-taxes-order.php',
	SPRC_CLASS_NS . '\Core\Taxonomy_Templates' => SPRC_CLASS['core'] . 'taxonomy-templates.php',
	SPRC_CLASS_NS . '\Core\Remove_Blog'        => SPRC_CLASS['core'] . 'remove-blog.php',
	SPRC_CLASS_NS . '\Core\Remove_Customizer'  => SPRC_CLASS['core'] . 'remove-customizer.php',

	// Settings classes.
	SPRC_CLASS_NS . '\Settings\Settings'     => SPRC_CLASS['settings'] . 'settings.php',

	// Tools classes.
	SPRC_CLASS_NS . '\Tools\Tools'            => SPRC_CLASS['tools'] . 'tools.php',
	SPRC_CLASS_NS . '\Tools\Disable_FloC'     => SPRC_CLASS['tools'] . 'disable-google-floc.php',
	SPRC_CLASS_NS . '\Tools\RTL_Test'         => SPRC_CLASS['tools'] . 'rtl-test.php',
	SPRC_CLASS_NS . '\Tools\Customizer_Reset' => SPRC_CLASS['tools'] . 'customizer-reset.php',

	// Media classes.
	SPRC_CLASS_NS . '\Media\Media'               => SPRC_CLASS['media'] . 'media.php',
	SPRC_CLASS_NS . '\Media\Register_Media_Type' => SPRC_CLASS['media'] . 'register-media-type.php',

	// Users classes.
	SPRC_CLASS_NS . '\Users\Users'           => SPRC_CLASS['users'] . 'users.php',
	SPRC_CLASS_NS . '\Users\User_Roles_Caps' => SPRC_CLASS['users'] . 'user-roles-caps.php',
	SPRC_CLASS_NS . '\Users\User_Toolbar'    => SPRC_CLASS['users'] . 'user-toolbar.php',
	SPRC_CLASS_NS . '\Users\User_Avatars'    => SPRC_CLASS['users'] . 'user-avatars.php',

	// Vendor classes.
	SPRC_CLASS_NS . '\Vendor\Plugin'        => SPRC_CLASS['vendor'] . 'plugin.php',
	// SPRC_CLASS_NS . '\Vendor\Sample_Plugin' => SPRC_CLASS['vendor'] . 'sample-plugin.php',
	SPRC_CLASS_NS . '\Vendor\ACF'           => SPRC_CLASS['vendor'] . 'acf.php',
	SPRC_CLASS_NS . '\Vendor\ACFE'          => SPRC_CLASS['vendor'] . 'acfe.php',
	SPRC_CLASS_NS . '\Vendor\ACF_Columns'   => SPRC_CLASS['vendor'] . 'acf-columns.php',
	SPRC_CLASS_NS . '\Vendor\Add_ACF_Options'       => SPRC_CLASS['vendor'] . 'add-acf-options.php',
	SPRC_CLASS_NS . '\Vendor\Add_ACF_Suboptions'    => SPRC_CLASS['vendor'] . 'add-acf-suboptions.php',
	// SPRC_CLASS_NS . '\Vendor\Sample_ACF_Options'    => SPRC_CLASS['vendor'] . 'sample-acf-options.php',
	// SPRC_CLASS_NS . '\Vendor\Sample_ACF_Suboptions' => SPRC_CLASS['vendor'] . 'sample-acf-suboptions.php',

	// Backend/admin classes,
	SPRC_CLASS_NS . '\Admin\Admin'                   => SPRC_CLASS['admin'] . 'admin.php',
	SPRC_CLASS_NS . '\Admin\Add_Page'                => SPRC_CLASS['admin'] . 'add-page.php',
	SPRC_CLASS_NS . '\Admin\Add_Subpage'             => SPRC_CLASS['admin'] . 'add-subpage.php',
	SPRC_CLASS_NS . '\Admin\Admin_Settings_Page'     => SPRC_CLASS['admin'] . 'admin-settings-page.php',
	SPRC_CLASS_NS . '\Admin\Add_Settings_Page'       => SPRC_CLASS['admin'] . 'add-settings-page.php',
	SPRC_CLASS_NS . '\Admin\Admin_ACF_Settings_Page' => SPRC_CLASS['admin'] . 'admin-acf-settings-page.php',
	SPRC_CLASS_NS . '\Admin\Content_Settings'        => SPRC_CLASS['admin'] . 'content-settings.php',
	SPRC_CLASS_NS . '\Admin\Manage_Website_Page'     => SPRC_CLASS['admin'] . 'manage-website-page.php',
	SPRC_CLASS_NS . '\Admin\User_Colors'             => SPRC_CLASS['admin'] . 'user-colors.php',
	SPRC_CLASS_NS . '\Admin\Dashboard'               => SPRC_CLASS['admin'] . 'dashboard.php',
	SPRC_CLASS_NS . '\Admin\Posts_List_Table'        => SPRC_CLASS['admin'] . 'posts-list-table.php',

	// Frontend classes.
	SPRC_CLASS_NS . '\Front\Frontend'       => SPRC_CLASS['front'] . 'frontend.php',
	SPRC_CLASS_NS . '\Front\Title_Filter'   => SPRC_CLASS['front'] . 'title-filter.php',
	SPRC_CLASS_NS . '\Front\Content_Filter' => SPRC_CLASS['front'] . 'content-filter.php',

	// General/miscellaneous classes.

] );

/**
 * Autoload class files
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
spl_autoload_register(
	function ( string $class ) {
		if ( isset( SPRC_CLASSES[ $class ] ) ) {
			require SPRC_CLASSES[ $class ];
		}
	}
);
