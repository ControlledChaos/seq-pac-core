<?php
/**
 * Custom dashboard panel output
 *
 * @package    SPR_Core
 * @subpackage Views
 * @category   Widgets
 * @since      1.0.0
 */

namespace SPR_Core;

// Get post type objects for labels & icons.
$location = get_post_type_object( 'location' );
$featured = get_post_type_object( 'featured' );
$rental   = get_post_type_object( 'rental' );
$page     = get_post_type_object( 'page' );

/**
 * Content from the FlexMLS MLS plugin
 *
 * Checks to see if the plugin is active.
 *
 * @since 1.0.0
 */
if (
	is_plugin_active( 'flexmls-idx/flexmls_connect.php' ) ||
	is_plugin_active( 'mls-idx/mls-idx.php' )
) {
	$mls_plugin = true;
} else {
	$mls_plugin = false;
}

?>
<div id="sprc-dashboard-integrated-content" class="sprc-dashboard-content-wrapper">

	<header class="sprc-dashboard-section-header">
		<h2><?php _e( 'Manage Website Pages', 'spr-core' ); ?></h2>
	</header>

	<ul class="sprc-dashboard-actions">
		<li>
			<h3><?php echo $featured->labels->menu_name; ?></h3>
			<div class="sprc-dashboard-actions-icon featured-icon"><span class="dashicons <?php echo $featured->menu_icon; ?>"></span></div>
			<p>
				<a href="<?php echo admin_url( 'post-new.php?post_type=featured' ); ?>"><?php _e( 'Add New', 'spr-core' ); ?></a>
				<a href="<?php echo admin_url( 'edit.php?post_type=featured' ); ?>"><?php _e( 'Manage', 'spr-core' ); ?></a>
			</p>
		</li>
		<li>
			<h3><?php echo $location->labels->menu_name; ?></h3>
			<div class="sprc-dashboard-actions-icon location-icon"><span class="dashicons <?php echo $location->menu_icon; ?>"></span></div>
			<p>
				<a href="<?php echo admin_url( 'post-new.php?post_type=location' ); ?>"><?php _e( 'Add New', 'spr-core' ); ?></a>
				<a href="<?php echo admin_url( 'edit.php?post_type=location' ); ?>"><?php _e( 'Manage', 'spr-core' ); ?></a>
			</p>
		</li>
		<li>
			<h3><?php echo $rental->labels->menu_name; ?></h3>
			<div class="sprc-dashboard-actions-icon rental-icon"><span class="dashicons <?php echo $rental->menu_icon; ?>"></span></div>
			<p>
				<a href="<?php echo admin_url( 'post-new.php?post_type=rental' ); ?>"><?php _e( 'Add New', 'spr-core' ); ?></a>
				<a href="<?php echo admin_url( 'edit.php?post_type=rental' ); ?>"><?php _e( 'Manage', 'spr-core' ); ?></a>
			</p>
		</li>
		<?php if ( get_option( 'page_on_front' ) ) : ?>
		<li>
			<h3><?php _e( 'Front Page', 'spr-core' ); ?></h3>
			<div class="sprc-dashboard-actions-icon front-icon"><span class="dashicons dashicons-admin-home"></span></div>
			<p>
				<a href="<?php echo admin_url( 'post.php?post=' . get_option( 'page_on_front' ) . '&action=edit' ); ?>"><?php _e( 'Manage Content', 'spr-core' ); ?></a>
			</p>
		</li>
		<?php endif; ?>
	</ul>
</div>

<div id="sprc-dashboard-website-content" class="sprc-dashboard-content-wrapper">

	<header class="sprc-dashboard-section-header">
		<h2><?php _e( 'Manage Website Content', 'spr-core' ); ?></h2>
	</header>

	<ul class="sprc-dashboard-actions">
		<li>
			<h3><?php _e( 'Media Library', 'spr-core' ); ?></h3>
			<div class="sprc-dashboard-actions-icon media-icon"><span class="dashicons dashicons-format-image"></span></div>
			<p>
				<a href="<?php echo admin_url( 'media-new.php' ); ?>"><?php _e( 'Add New', 'spr-core' ); ?></a>
				<a href="<?php echo admin_url( 'upload.php' ); ?>"><?php _e( 'Manage', 'spr-core' ); ?></a>
			</p>
		</li>
		<li>
			<h3><?php _e( 'Content Widgets', 'spr-core' ); ?></h3>
			<div class="sprc-dashboard-actions-icon widgets-icon"><span class="dashicons dashicons-screenoptions"></span></div>
			<p>
				<a href="<?php echo admin_url( 'widgets.php' ); ?>"><?php _e( 'Manage Widgets', 'spr-core' ); ?></a>
			</p>
		</li>
		<li>
			<h3><?php _e( 'Navigation Menus', 'spr-core' ); ?></h3>
			<div class="sprc-dashboard-actions-icon nav-menus-icon"><span class="dashicons dashicons-menu-alt"></span></div>
			<p>
				<a href="<?php echo admin_url( 'nav-menus.php' ); ?>"><?php _e( 'Manage Menus', 'spr-core' ); ?></a>
			</p>
		</li>
		<li>
			<h3><?php echo $page->labels->menu_name; ?></h3>
			<div class="sprc-dashboard-actions-icon pages-icon"><span class="dashicons <?php echo $page->menu_icon; ?>"></span></div>
			<p>
				<a href="<?php echo admin_url( 'post-new.php?post_type=page' ); ?>"><?php _e( 'Add New', 'spr-core' ); ?></a>
				<a href="<?php echo admin_url( 'edit.php?post_type=page' ); ?>"><?php _e( 'Manage', 'spr-core' ); ?></a>
			</p>
		</li>
	</ul>
</div>
