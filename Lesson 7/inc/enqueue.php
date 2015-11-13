<?php

/*
	
@package sunsettheme
	
	========================
		ADMIN ENQUEUE FUNCTIONS
	========================
*/

function sunset_load_admin_scripts( $hook ){
	
	if( 'toplevel_page_alecaddd_sunset' != $hook ){ return; }
	
	wp_register_style( 'sunset_admin', get_template_directory_uri() . '/css/sunset.admin.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'sunset_admin' );
	
	wp_enqueue_media();
	
	wp_register_script( 'sunset-admin-script', get_template_directory_uri() . '/js/sunset.admin.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'sunset-admin-script' );
	
}
add_action( 'admin_enqueue_scripts', 'sunset_load_admin_scripts' );