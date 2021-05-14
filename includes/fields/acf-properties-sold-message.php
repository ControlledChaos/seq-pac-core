<?php
/**
 * ACF message for the Properties Sold page template
 *
 * @package    SPR_Core
 * @subpackage Fields
 * @category   ACF
 * @since      1.0.0
 */

namespace SPR_Core\Fields\ACF;

// Restrict direct access.
if ( ! defined( 'ABSPATH' ) ) {
	die;
}

if ( function_exists( 'acf_add_local_field_group' ) ) :

	acf_add_local_field_group( [
		'key'    => 'group_properties_sold_message',
		'title'  => __( 'Properties Sold', 'spr-core' ),
		'fields' => [
			[
				'key'               => 'field_5c9bbf9fbd7ce',
				'label'             => __( 'Archived Listings Template', 'spr-core' ),
				'name'              => '',
				'type'              => 'message',
				'instructions'      => __( '', 'spr-core' ),
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => [
					'width' => '',
					'class' => '',
					'id'    => '',
				],
				'message' => __( '<h3 style ="color: #d00;">Do Not Delete!</h3>
	<p>There is nothing to edit on this page but it is necessary to display the paginated list of archived listings. Each listing displayed by this page has been marked as "Archived" on its edit scree.</p>
	<p>If a listing needs to be removed from this page then it needs to be moved to trash under "Listings" in the admin menu at left.</p>', 'spr-core' ),
				'new_lines' => '',
				'esc_html'  => 0,
			],
		],
		'location' => [
			[
				[
					'param'    => 'post_template',
					'operator' => '==',
					'value'    => 'page-templates/archived-listings.php',
				],
			],
		],
		'menu_order'            => 0,
		'position'              => 'acf_after_title',
		'style'                 => 'seamless',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen'        => [
			0  => 'author',
			1  => 'categories',
			2  => 'comments',
			3  => 'the_content',
			4  => 'discussion',
			5  => 'excerpt',
			6  => 'featured_image',
			7  => 'format',
			8  => 'page_attributes',
			9  => 'permalink',
			10 => 'revisions',
			11 => 'send-trackbacks',
			12 => 'slug',
			13 => 'tags',
		],
		'active'             => true,
		'description'        => __( 'For the Properties Sold page template.', 'spr-core' ),
		'acfe_autosync'      => '',
		'acfe_form'          => 0,
		'acfe_display_title' => '',
		'acfe_meta'          => '',
		'acfe_note'          => '',
	] );
endif;
