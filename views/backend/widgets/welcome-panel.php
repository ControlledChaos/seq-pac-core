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
$listing = get_post_type_object( 'listing' );
$rental  = get_post_type_object( 'rental' );

?>
<div id="sprc-dashboard-website-content" class="sprc-dashboard-content-wrapper">

	<header class="sprc-dashboard-section-header">
		<h2><?php _e( 'Manage Website Content', 'spr-core' ); ?></h2>
	</header>

	<ul class="sprc-dashboard-actions">
		<li>
			<h3><?php _e( 'Images & Video', 'spr-core' ); ?></h3>
			<div class="sprc-dashboard-actions-icon media-icon"><span class="dashicons dashicons-format-image"></span></div>
			<p>
				<a href="<?php echo admin_url( 'media-new.php' ); ?>"><?php _e( 'Add New', 'spr-core' ); ?></a>
				<a href="<?php echo admin_url( 'upload.php' ); ?>"><?php _e( 'Manage', 'spr-core' ); ?></a>
			</p>
		</li>
		<li>
			<h3><?php _e( 'Sale Listings', 'spr-core' ); ?></h3>
			<div class="sprc-dashboard-actions-icon listing-icon"><span class="dashicons <?php echo $listing->menu_icon; ?>"></span></div>
			<p>
				<a href="<?php echo admin_url( 'post-new.php?post_type=listing' ); ?>"><?php _e( 'Add New', 'spr-core' ); ?></a>
				<a href="<?php echo admin_url( 'edit.php?post_type=listing' ); ?>"><?php _e( 'Manage', 'spr-core' ); ?></a>
			</p>
		</li>
		<li>
			<h3><?php _e( 'Rental Listings', 'spr-core' ); ?></h3>
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

<?php
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
) :

?>
<div id="sprc-dashboard-integrated-content" class="sprc-dashboard-content-wrapper">

	<header class="sprc-dashboard-section-header">
		<h2><?php _e( 'Manage Integrated Content', 'spr-core' ); ?></h2>
	</header>

	<ul class="sprc-dashboard-actions">
		<li>
			<h3><?php _e( 'MLS Integration', 'spr-core' ); ?></h3>
			<div class="sprc-dashboard-actions-icon idx-widgets-icon"><span class="dashicons dashicons-migrate"></span></div>
			<p>
				<a href="<?php echo admin_url( 'widgets.php' ); ?>"><?php _e( 'Manage Widgets', 'spr-core' ); ?></a>
			</p>
		</li>
		<li>
			<h3><?php _e( 'MLS Neighborhoods', 'spr-core' ); ?></h3>
			<div class="sprc-dashboard-actions-icon idx-neighborhoods-icon"><span class="dashicons dashicons-admin-multisite"></span></div>
			<p>
				<a href="<?php echo admin_url( 'admin.php?page=fmc_admin_neighborhood' ); ?>"><?php _e( 'Add Neighborhood', 'spr-core' ); ?></a>
			</p>
		</li>
		<li>
			<h3><?php _e( 'MLS Settings', 'spr-core' ); ?></h3>
			<div class="sprc-dashboard-actions-icon idx-settings-icon"><span class="dashicons dashicons-admin-settings"></span></div>
			<p>
				<a href="<?php echo admin_url( 'admin.php?page=fmc_admin_settings' ); ?>"><?php _e( 'Manage Settings', 'spr-core' ); ?></a>
			</p>
		</li>
		<li>
			<h3><?php _e( 'MLS Plugin Support', 'spr-core' ); ?></h3>
			<div class="sprc-dashboard-actions-icon contact-icon"><span class="dashicons dashicons-welcome-learn-more"></span></div>
			<p>
				<a href="<?php echo esc_url( 'https://fbsidx.com/plugin/examples/' ); ?>" target="_blank" rel="noopener noreferrer nofollow"><?php _e( 'Examples', 'spr-core' ); ?></a>
				<a href="<?php echo esc_url( 'https://fbsidx.com/plugin/documentation/' ); ?>" target="_blank" rel="noopener noreferrer nofollow"><?php _e( 'Documentation', 'spr-core' ); ?></a>
			</p>
		</li>
	</ul>
</div>
<?php endif; ?>
