<?php

/**
 * Enqueue scripts and styles.
 *
 * @since themename 1.0
 */

function themename_frontend_scripts() {
	// Load our main stylesheet.
	wp_enqueue_style( 'themename-style', get_stylesheet_uri(), array(), '1.0.2', 'all' );
	wp_enqueue_style( 'themename_custom_style', get_template_directory_uri().'/dist/app.css' );
	wp_enqueue_script( 'themename_js', get_template_directory_uri().'/dist/app.js', array() );
	wp_enqueue_style( 'themename_font_awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'themename_woocommerce_css', get_template_directory_uri().'/dist/woocommerce.css' );
	wp_enqueue_style( 'themename-iconic-bootstrap', get_template_directory_uri() . '/assets/css/open-iconic-bootstrap.css', array(), 'v4.0.0', 'all' );
	wp_enqueue_script( 'themename_bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', array('jquery'), 'v4.0.0', true );
}
add_action('wp_enqueue_scripts', 'themename_frontend_scripts');

function themename_admin_scripts() {
	// Load our theme stylesheet.
	wp_enqueue_media();
	wp_enqueue_script( 'theme_setting', get_theme_file_uri( '/assets/js/themesetting.js' ), array(), '1.0', true );
	
}
add_action('admin_enqueue_scripts', 'themename_admin_scripts');
?>
