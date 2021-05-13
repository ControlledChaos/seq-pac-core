<?php
/**
 * Form fields for admin settings menu tab
 *
 * @package    SPR_Core
 * @subpackage Views
 * @category   Forms
 * @since      1.0.0
 */

namespace SPR_Core\Views\Admin;
use SPR_Core\Classes\Admin as Admin;

// Instance of the Manage_Website_Page class.
$page = new Admin\Admin_Settings_Page;


settings_fields( 'sprc-site-admin-menu' );
do_settings_sections( 'sprc-site-admin-menu' );

