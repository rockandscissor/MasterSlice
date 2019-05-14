<?php
/* Option pages */
include_once('option-pages.inc.php');

/* Create theme options menu */
function mst_create_menu() {
	add_menu_page('MasterSlice', 'MasterSlice', 'manage_options', 'mst-theme', 'mst_op_slices', 'none');
	add_submenu_page('mst-theme', 'Slices', 'Slices', 'manage_options', 'mst-theme', 'mst_op_slices');
	add_submenu_page('mst-theme', 'Organisation Details', 'Organisation Details', 'manage_options', 'mst-theme-organisation', 'mst_op_organisation');
	add_submenu_page('mst-theme', 'MasterSlice Settings', 'Settings', 'manage_options', 'mst-theme-settings', 'mst_op_settings');
}
add_action('admin_menu', 'mst_create_menu');

/* Add MasterSlice icon to admin */
function mst_masterslice_icon() {
	wp_register_style('masterslice_icon', get_stylesheet_directory_uri() . '/assets/css/masterslice-icon.css');
	wp_enqueue_style('masterslice_icon');
}
add_action('admin_enqueue_scripts', 'mst_masterslice_icon');

/*  */
