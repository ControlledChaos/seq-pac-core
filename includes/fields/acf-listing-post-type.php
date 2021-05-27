<?php
/**
 * ACF fields for the listing post type
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

	acf_add_local_field_group( array(
		'key' => 'group_listing_post_type',
		'title' => 'Listings',
		'fields' => array(
			array(
				'key' => 'field_5c9b80cd78791',
				'label' => 'Listing Status',
				'name' => 'spl_listing_status',
				'type' => 'button_group',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'acfe_field_group_condition' => 0,
				'required_message' => '',
				'choices' => array(
					'active' => 'Active',
					'pending' => 'Pending',
					'archived' => 'Archived',
				),
				'allow_null' => 0,
				'default_value' => 'active',
				'layout' => 'horizontal',
				'return_format' => 'value',
			),
			array(
				'key' => 'field_5c8f91c37c8a8',
				'label' => 'Location',
				'name' => '',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'acfe_field_group_condition' => 0,
				'required_message' => '',
				'placement' => 'top',
				'endpoint' => 0,
				'no_preference' => 0,
			),
			array(
				'key' => 'field_5c8f8ffd0cda5',
				'label' => 'Location',
				'name' => 'spl_location',
				'type' => 'taxonomy',
				'instructions' => 'Optional. May differ from the post office address. This works like a category and will be used to sort listings.',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'acfe_field_group_condition' => 0,
				'required_message' => '',
				'taxonomy' => 'category',
				'field_type' => 'multi_select',
				'allow_null' => 0,
				'add_term' => 1,
				'save_terms' => 1,
				'load_terms' => 0,
				'return_format' => 'object',
				'acfe_bidirectional' => array(
					'acfe_bidirectional_enabled' => '0',
					'acfe_bidirectional_related' => '',
				),
				'min' => '',
				'max' => '',
				'multiple' => 0,
			),
			array(
				'key' => 'field_5c8f8f9a0cda2',
				'label' => 'Street Address',
				'name' => 'spl_street_address',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '40',
					'class' => '',
					'id' => '',
				),
				'acfe_field_group_condition' => 0,
				'required_message' => '',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5c8f8fb50cda3',
				'label' => 'Number or Suite',
				'name' => 'spl_suite',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '10',
					'class' => '',
					'id' => '',
				),
				'acfe_field_group_condition' => 0,
				'required_message' => '',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5c8f90670cda6',
				'label' => 'City or Post Office',
				'name' => 'spl_post_office',
				'type' => 'text',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '25',
					'class' => '',
					'id' => '',
				),
				'acfe_field_group_condition' => 0,
				'required_message' => '',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5c8f90b00cda7',
				'label' => 'ZIP Code',
				'name' => 'spl_zip_code',
				'type' => 'text',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '25',
					'class' => '',
					'id' => '',
				),
				'acfe_field_group_condition' => 0,
				'required_message' => '',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5c8f92257c8a9',
				'label' => 'Price & Description',
				'name' => '',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'acfe_field_group_condition' => 0,
				'required_message' => '',
				'placement' => 'top',
				'endpoint' => 0,
				'no_preference' => 0,
			),
			array(
				'key' => 'field_5c8f968f433d9',
				'label' => 'Price',
				'name' => 'spl_sale_price',
				'type' => 'text',
				'instructions' => 'Enter only the number. Currency characters will be added automatically.',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '50',
					'class' => '',
					'id' => '',
				),
				'acfe_field_group_condition' => 0,
				'required_message' => '',
				'default_value' => '',
				'placeholder' => '500,000',
				'prepend' => '$',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5c8f8e42849e5',
				'label' => 'Listing Type',
				'name' => 'spl_listing_type',
				'type' => 'taxonomy',
				'instructions' => 'What type of property is this? You may enter more than one for multi-use properties.',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '50',
					'class' => '',
					'id' => '',
				),
				'acfe_field_group_condition' => 0,
				'required_message' => '',
				'taxonomy' => 'category',
				'field_type' => 'multi_select',
				'allow_null' => 0,
				'add_term' => 0,
				'save_terms' => 1,
				'load_terms' => 1,
				'return_format' => 'object',
				'acfe_bidirectional' => array(
					'acfe_bidirectional_enabled' => '0',
					'acfe_bidirectional_related' => '',
				),
				'min' => '',
				'max' => '',
				'multiple' => 0,
			),
			array(
				'key' => 'field_5c8f92f57c8ab',
				'label' => 'Summary',
				'name' => 'spl_summary',
				'type' => 'textarea',
				'instructions' => 'Enter a brief summary of the property. This will be used in list views, for search engines, and when shared in social media and some email clients.',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'acfe_field_group_condition' => 0,
				'required_message' => '',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => 6,
				'new_lines' => '',
				'acfe_textarea_code' => 0,
			),
			array(
				'key' => 'field_5c8f924e7c8aa',
				'label' => 'Description',
				'name' => 'spl_description',
				'type' => 'wysiwyg',
				'instructions' => 'Enter the detailed description of the property.',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'acfe_field_group_condition' => 0,
				'required_message' => '',
				'default_value' => '',
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => 0,
				'delay' => 0,
				'acfe_wysiwyg_height' => 300,
				'acfe_wysiwyg_min_height' => 300,
				'acfe_wysiwyg_max_height' => '',
				'acfe_wysiwyg_valid_elements' => '',
				'acfe_wysiwyg_custom_style' => '',
				'acfe_wysiwyg_disable_wp_style' => 0,
				'acfe_wysiwyg_autoresize' => 0,
				'acfe_wysiwyg_disable_resize' => 0,
				'acfe_wysiwyg_remove_path' => 0,
				'acfe_wysiwyg_menubar' => 0,
				'acfe_wysiwyg_transparent' => 0,
				'acfe_wysiwyg_merge_toolbar' => 0,
				'acfe_wysiwyg_custom_toolbar' => 0,
				'acfe_wysiwyg_toolbar_buttons' => array(
					'acfe_wysiwyg_toolbar_1' => array(
						array(
							'acfe_wysiwyg_toolbar_row' => 'formatselect',
						),
						array(
							'acfe_wysiwyg_toolbar_row' => 'bold',
						),
						array(
							'acfe_wysiwyg_toolbar_row' => 'italic',
						),
						array(
							'acfe_wysiwyg_toolbar_row' => 'underline',
						),
						array(
							'acfe_wysiwyg_toolbar_row' => 'bullist',
						),
						array(
							'acfe_wysiwyg_toolbar_row' => 'numlist',
						),
						array(
							'acfe_wysiwyg_toolbar_row' => 'alignleft',
						),
						array(
							'acfe_wysiwyg_toolbar_row' => 'aligncenter',
						),
						array(
							'acfe_wysiwyg_toolbar_row' => 'alignright',
						),
						array(
							'acfe_wysiwyg_toolbar_row' => 'link',
						),
						array(
							'acfe_wysiwyg_toolbar_row' => 'unlink',
						),
						array(
							'acfe_wysiwyg_toolbar_row' => 'wp_adv',
						),
						array(
							'acfe_wysiwyg_toolbar_row' => 'spellchecker',
						),
						array(
							'acfe_wysiwyg_toolbar_row' => '|',
						),
						array(
							'acfe_wysiwyg_toolbar_row' => 'fmc_button',
						),
						'acfcloneindex' => array(
							'acfe_wysiwyg_toolbar_row' => '',
						),
					),
					'acfe_wysiwyg_toolbar_2' => array(
						array(
							'acfe_wysiwyg_toolbar_row' => 'nonbreaking',
						),
						array(
							'acfe_wysiwyg_toolbar_row' => 'hr',
						),
						array(
							'acfe_wysiwyg_toolbar_row' => 'cut',
						),
						array(
							'acfe_wysiwyg_toolbar_row' => 'copy',
						),
						array(
							'acfe_wysiwyg_toolbar_row' => 'paste',
						),
						array(
							'acfe_wysiwyg_toolbar_row' => 'pastetext',
						),
						array(
							'acfe_wysiwyg_toolbar_row' => 'removeformat',
						),
						array(
							'acfe_wysiwyg_toolbar_row' => 'charmap',
						),
						array(
							'acfe_wysiwyg_toolbar_row' => 'undo',
						),
						array(
							'acfe_wysiwyg_toolbar_row' => 'redo',
						),
						'acfcloneindex' => array(
							'acfe_wysiwyg_toolbar_row' => '',
						),
					),
					'acfe_wysiwyg_toolbar_3' => array(
						'acfcloneindex' => array(
							'acfe_wysiwyg_toolbar_row' => '',
						),
					),
					'acfe_wysiwyg_toolbar_4' => array(
						'acfcloneindex' => array(
							'acfe_wysiwyg_toolbar_row' => '',
						),
					),
				),
			),
			array(
				'key' => 'field_5c926b6fbd959',
				'label' => 'Property Details',
				'name' => '',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'acfe_field_group_condition' => 0,
				'required_message' => '',
				'placement' => 'top',
				'endpoint' => 0,
				'no_preference' => 0,
			),
			array(
				'key' => 'field_5c926c08bd95d',
				'label' => 'Square Footage',
				'name' => 'spl_square_footage',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '25',
					'class' => '',
					'id' => '',
				),
				'acfe_field_group_condition' => 0,
				'required_message' => '',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5c926c29bd95e',
				'label' => 'Acreage',
				'name' => 'spl_acreage',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '25',
					'class' => '',
					'id' => '',
				),
				'acfe_field_group_condition' => 0,
				'required_message' => '',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5c93fe96b52cf',
				'label' => 'Parcels',
				'name' => 'spl_parcels',
				'type' => 'number',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '25',
					'class' => '',
					'id' => '',
				),
				'acfe_field_group_condition' => 0,
				'required_message' => '',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
			array(
				'key' => 'field_5c926e052c371',
				'label' => 'Year Built',
				'name' => 'spl_year_built',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '25',
					'class' => '',
					'id' => '',
				),
				'acfe_field_group_condition' => 0,
				'required_message' => '',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5c93fdf000237',
				'label' => 'Stories',
				'name' => 'spl_stories',
				'type' => 'number',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '25',
					'class' => '',
					'id' => '',
				),
				'acfe_field_group_condition' => 0,
				'required_message' => '',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
			array(
				'key' => 'field_5c926b85bd95a',
				'label' => 'Bedrooms',
				'name' => 'spl_bedrooms',
				'type' => 'number',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '25',
					'class' => '',
					'id' => '',
				),
				'acfe_field_group_condition' => 0,
				'required_message' => '',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => 0,
				'max' => '',
				'step' => 1,
			),
			array(
				'key' => 'field_5c926badbd95b',
				'label' => 'Bathrooms',
				'name' => 'spl_bathrooms',
				'type' => 'number',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '25',
					'class' => '',
					'id' => '',
				),
				'acfe_field_group_condition' => 0,
				'required_message' => '',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => 0,
				'max' => '',
				'step' => 1,
			),
			array(
				'key' => 'field_5c926e2d2c372',
				'label' => 'Garage Spaces',
				'name' => 'spl_garage_spaces',
				'type' => 'number',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '25',
					'class' => '',
					'id' => '',
				),
				'acfe_field_group_condition' => 0,
				'required_message' => '',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => 1,
			),
			array(
				'key' => 'field_5c94008a31743',
				'label' => 'Cooling',
				'name' => 'spl_cooling',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '25',
					'class' => '',
					'id' => '',
				),
				'acfe_field_group_condition' => 0,
				'required_message' => '',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5c94009731744',
				'label' => 'Heating',
				'name' => 'spl_heating',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '25',
					'class' => '',
					'id' => '',
				),
				'acfe_field_group_condition' => 0,
				'required_message' => '',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5c9400a331745',
				'label' => 'Fireplace',
				'name' => 'spl_fireplace',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '25',
					'class' => '',
					'id' => '',
				),
				'acfe_field_group_condition' => 0,
				'required_message' => '',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5c9400f631746',
				'label' => 'Pool',
				'name' => 'spl_pool',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '25',
					'class' => '',
					'id' => '',
				),
				'acfe_field_group_condition' => 0,
				'required_message' => '',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5c8f93dd26177',
				'label' => 'Images & Videos',
				'name' => '',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'acfe_field_group_condition' => 0,
				'required_message' => '',
				'placement' => 'top',
				'endpoint' => 0,
				'no_preference' => 0,
			),
			array(
				'key' => 'field_5c8f93f626178',
				'label' => 'Featured Image',
				'name' => 'spl_featured_image',
				'type' => 'image',
				'instructions' => 'Image must be a minimum of 1280 pixels wide for attractive appearance. This will be used in list views and on the front page, if it is a featured listing.',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'acfe_field_group_condition' => 0,
				'required_message' => '',
				'uploader' => '',
				'acfe_thumbnail' => 0,
				'return_format' => 'array',
				'preview_size' => 'medium',
				'library' => 'all',
				'min_width' => 1280,
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
			),
			array(
				'key' => 'field_5c8f945126179',
				'label' => 'Image Gallery',
				'name' => 'spl_image_gallery',
				'type' => 'gallery',
				'instructions' => 'Images must be a minimum of 640 pixels wide but larger is better.',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'acfe_field_group_condition' => 0,
				'required_message' => '',
				'return_format' => 'array',
				'preview_size' => 'medium',
				'insert' => 'append',
				'library' => 'all',
				'min' => '',
				'max' => '',
				'min_width' => 640,
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
			),
			array(
				'key' => 'field_5c8f94e90c585',
				'label' => 'Videos',
				'name' => 'spl_videos',
				'type' => 'repeater',
				'instructions' => 'Click the "Add Video" button.',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'acfe_field_group_condition' => 0,
				'required_message' => '',
				'acfe_repeater_stylised_button' => 0,
				'collapsed' => 'field_5c8f96590c587',
				'min' => 0,
				'max' => 0,
				'layout' => 'row',
				'button_label' => 'Add Video',
				'sub_fields' => array(
					array(
						'key' => 'field_5c8f96590c587',
						'label' => 'Video Heading',
						'name' => 'spl_video_heading',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'acfe_field_group_condition' => 0,
						'required_message' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array(
						'key' => 'field_5c8f95a00c586',
						'label' => 'Video Embed',
						'name' => 'spl_video_embed',
						'type' => 'oembed',
						'instructions' => 'Paste in the URL of the video.',
						'required' => 1,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'acfe_field_group_condition' => 0,
						'required_message' => '',
						'width' => 1280,
						'height' => 720,
					),
				),
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'listing',
				),
			),
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'rental',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'acf_after_title',
		'style' => 'seamless',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => array(
			0 => 'the_content',
		),
		'active' => true,
		'description' => '',
		'acfe_autosync' => '',
		'acfe_form' => 0,
		'acfe_display_title' => '',
		'acfe_meta' => '',
		'acfe_note' => '',
	) );
endif;
