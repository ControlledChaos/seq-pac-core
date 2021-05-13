<?php
/**
 * Settings for drag & drop custom post and taxonomy orders.
 *
 * @package    SPR_Core
 * @subpackage Views
 * @category   Forms
 * @since      1.0.0
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Get the custom sort order options.
$sprc_order_options = get_option( 'sprc_order_options' );

// Set variable for array of registered public post types.
if ( isset( $sprc_order_options['objects'] ) ) {
    $sprc_order_post_types = $sprc_order_options['objects'];

// Return empty array if no registered public tpost types.
} else {
    $sprc_order_post_types = [];
}

// Set variable for array of registered public taxonomies.
if ( isset( $sprc_order_options['tags'] ) ) {
    $sprc_order_taxonomies = $sprc_order_options['tags'];

// Return empty array if no registered public taxonomies.
} else {
    $sprc_order_taxonomies = [];
} ?>
<div class="wrap">
    <h1><?php _e( 'Posts & Taxonomies Sort Orders', 'spr-core' ); ?></h1>
    <p class="description"><?php _e( 'Add drag & drop sort order functionality to post types and taxonomies.', 'spr-core' ); ?></p>
    <hr />
    <p><?php _e( 'When posts and taxonomies are selected for custom sort order functionality, the table rows on their respective admin management screen can be dragged up or down.', 'spr-core' ); ?></p>
    <p><?php _e( 'The order you set on the admin management screens will automatically set the order of the posts in the blog index pages and in archive pages.', 'spr-core' ); ?></p>
    <?php if ( isset( $_GET['msg'] ) ) : ?>
        <div id="message" class="notice notice-success is-dismissible">
            <?php if ( $_GET['msg'] == 'updated' ) {
                echo sprintf(
                    '<p>%1s</p>',
                    __( 'Settings saved.', 'spr-core' )
                );
            } ?>
        </div>
    <?php endif; ?>
    <form method="post">
        <?php if ( function_exists( 'wp_nonce_field' ) ) { wp_nonce_field( 'sprc_posts_order_nonce' ); } ?>
        <div id="posts_order_select">
            <table class="form-table">
                <tbody>
                    <tr valign="top">
                        <th scope="row"><?php _e( 'Check to Sort Post Types', 'spr-core' ) ?></th>
                        <td>
                            <label><input type="checkbox" id="sprc_order_check_all_post_types"> <?php _e( 'Check All', 'spr-core' ) ?></label><br>
                            <?php
                            // Get all registered public post types.
                            $post_types = get_post_types(
                                [
                                    'show_ui'      => true,
                                    'show_in_menu' => true,
                                ],
                                'objects'
                            );

                            // Add a checkbox for each post type found.
                            foreach ( $post_types as $post_type ) :

                                // Ignore the Attachment (media) post type.
                                if ( $post_type->name == 'attachment' ) {
                                    continue;
                                } ?>
                                <label><input type="checkbox" name="objects[]" value="<?php echo $post_type->name; ?>" <?php
                                    if ( isset( $sprc_order_post_types ) && is_array( $sprc_order_post_types ) ) {
                                        if ( in_array( $post_type->name, $sprc_order_post_types ) ) {
                                            echo 'checked="checked"';
                                        }
                                    }
                                    ?>>&nbsp;<?php echo $post_type->label; ?></label><br>
                            <?php endforeach; ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div id="terms_order_select">
            <table class="form-table">
                <tbody>
                    <tr valign="top">
                        <th scope="row"><?php _e( 'Check to Sort Taxonomies', 'spr-core' ) ?></th>
                        <td>
                            <label><input type="checkbox" id="sprc_order_check_all_taxonomies"> <?php _e( 'Check All', 'spr-core' ) ?></label><br>
                            <?php
                            // Get all registered public taxonomies.
                            $taxonomies = get_taxonomies(
                                [
                                    'show_ui' => true,
                                ],
                                'objects'
                            );

                            // Add a checkbox for each taxonomy found.
                            foreach ( $taxonomies as $taxonomy ) :

                                // Ignore the taxonomy used for post formats.
                                if ( $taxonomy->name == 'post_format' ) {
                                    continue;
                                } ?>
                                <label><input type="checkbox" name="tags[]" value="<?php echo $taxonomy->name; ?>" <?php
                                    if ( isset( $sprc_order_taxonomies ) && is_array( $sprc_order_taxonomies ) ) {
                                        if ( in_array( $taxonomy->name, $sprc_order_taxonomies ) ) {
                                            echo 'checked="checked"';
                                        }
                                    } ?>>&nbsp;<?php echo $taxonomy->label ?></label><br>
                            <?php endforeach; ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p class="submit">
            <input type="submit" class="button-primary" name="sprc_posts_order_submit" value="<?php _e( 'Save Changes', 'spr-core' ); ?>">
        </p>
    </form>
</div>
<script>
( function ($) {

    // Handle the Check All input for post types.
    $( '#sprc_order_check_all_post_types' ).on( 'click', function () {
        var items = $( '#posts_order_select input' );
        if ( $(this).is( ':checked' ) ) {
            $(items).prop( 'checked', true );
        } else {
            $(items).prop( 'checked', false );
        }
    });

    // Handle the Check All input for taxonomies.
    $( '#sprc_order_check_all_taxonomies' ).on( 'click', function () {
        var items = $( '#terms_order_select input' );
        if ( $(this).is( ':checked' ) ) {
            $(items).prop( 'checked', true );
        } else {
            $(items).prop( 'checked', false );
        }
    });
})(jQuery)
</script>