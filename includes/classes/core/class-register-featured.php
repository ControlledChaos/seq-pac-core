<?php
/**
 * Sample class to register a post type
 *
 * Copy this file and rename it to reflect
 * its new class name. Add to the autoloader
 * and intantiate where appropriate.
 *
 * @package    SPR_Core
 * @subpackage Classes
 * @category   Core
 * @since      1.0.0
 */

declare( strict_types = 1 );
namespace SPR_Core\Classes\Core;

// Restrict direct access.
if ( ! defined( 'ABSPATH' ) ) {
	die;
}

class Register_Featured extends Register_Type {

	/**
	 * Post type
	 *
	 * @since  1.0.0
	 * @access protected
	 * @var    string The database name of the post type.
	 */
	protected $type_key = 'featured';

	/**
	 * Singular name
	 *
	 * @since  1.0.0
	 * @access protected
	 * @var    string The singular name of the post type.
	 */
	protected $singular = 'featured listing';

	/**
	 * Plural name
	 *
	 * @since  1.0.0
	 * @access protected
	 * @var    string The plural name of the post type.
	 */
	protected $plural = 'featured listings';

	/**
	 * Menu icon
	 *
	 * @since  1.0.0
	 * @access protected
	 * @var    string The dashicon class for book.
	 */
	protected $menu_icon = 'dashicons-flag';

	/**
	 * Supports
	 *
	 * The built in fields/metaboxes supported by the post type.
	 *
	 * @since  1.0.0
	 * @access protected
	 * @var    array The array of support.
	 */
	protected $supports = [
		'title',
		'editor',
		'thumbnail'
	];

	/**
	 * Supported taxonomies
	 *
	 * @since  1.0.0
	 * @access protected
	 * @var    array The array of supported taxonomies.
	 */
	protected $taxonomies = [
		'type',
		'location',
		'post_tag'
	];

	/**
	 * Settings page
	 *
	 * Add a settings page for the post type.
	 *
	 * @since  1.0.0
	 * @access protected
	 * @var    boolean Whether to create a settings page for this post type.
	 */
	protected $settings_page = false;

	/**
	 * Register priority
	 *
	 * When to register the post type.
	 *
	 * @since  1.0.0
	 * @access protected
	 * @var    integer The numeral to set hook priority.
	 */
	protected $priority = 20;

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
	}

	/**
	 * Rewrite rules
	 *
	 * @since  1.0.0
	 * @access public
	 * @return array Returns the array of rewrite rules.
	 */
	public function rewrite() {

		$rewrite = [
			'slug'       => 'featured',
			'with_front' => true,
			'feeds'      => true,
			'pages'      => true
		];

		return $rewrite;
	}

	/**
	 * New post type options
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  array $args Array of arguments for registering a post type.
	 * @param  string $post_type Post type key.
	 * @return array Returns an array of new option arguments.
	 */
	public function post_type_options( $args, $post_type ) {

		// Only modify this post type.
		if ( $this->type_key != $post_type ) {
			return $args;
		}

		// Sample option.
		$args['menu_position'] = 5;

		return $args;
	}

	/**
	 * Filter post type labels
	 *
	 * @since  1.0.0
	 * @access public
	 * @return mixed Returns new values for array label arguments.
	 */
	public function filter_labels() {

		// New post type labels.
		$labels = [
			'singular_name' => __( 'Featured Listing', 'spr-core' ),
			'menu_name'     => __( 'Featured Listings', 'spr-core' ),
			'add_new'       => __( 'New Featured', 'spr-core' ),
		];

		return $labels;
	}

	/**
	 * Rewrite post type labels
	 *
	 * @since  1.0.0
	 * @access public
	 * @return mixed Returns new values for array label keys.
	 */
	public function rewrite_labels() {

		// Post type.
		$post_type = $this->type_key;
		$type_obj  = get_post_type_object( $post_type );

		// New post type labels.
		$type_obj->labels->singular_name =  __( 'Featured Listing', 'spr-core' );
		$type_obj->labels->menu_name     = __( 'Featured Listings', 'spr-core' );
		$type_obj->labels->add_new       = __( 'New Featured', 'spr-core' );
	}
}
