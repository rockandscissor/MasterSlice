<?php
/* Create theme options menu */
function mst_create_menu() {
	add_menu_page('MasterSlice', 'MasterSlice', 'manage_options', 'ms-theme', '', 'none');
	add_submenu_page('ms-theme', 'Theme Settings', 'Settings', 'manage_options', 'ms-theme-settings', '');
}
add_action('admin_menu', 'mst_create_menu');

/* Add MasterSlice icon to admin */
function masterslice_icon() {
	wp_register_style('masterslice_icon', get_stylesheet_directory_uri() . '/assets/css/icon-masterslice.css');
	wp_enqueue_style('masterslice_icon');
}
add_action('admin_enqueue_scripts', 'masterslice_icon');
