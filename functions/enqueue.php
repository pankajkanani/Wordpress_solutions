<?php

/**
 * Enqueue scripts and styles.
 *
 * @since themename 1.0
 */


/*
**
** "wp_enqueue_scripts" is used for frontend file
**
*/
add_action('wp_enqueue_scripts', 'themename_frontend_scripts');

function themename_frontend_scripts() {
	// Load our main stylesheet.
	wp_enqueue_style( 'themename-style', get_stylesheet_uri(), array(), '1.0.2', 'all' ); // style.css file enquque here.
	wp_enqueue_style( 'themename_custom_style', get_template_directory_uri().'/css/app.css' ); // apply your css file.
	wp_enqueue_script( 'themename_js', get_template_directory_uri().'/css/app.js', array() ); // apply your js file.
	wp_enqueue_style( 'themename_font_awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' ); // // apply CDN css link.
	
	wp_enqueue_style( 'themename-iconic-bootstrap', get_template_directory_uri() . '/assets/css/open-iconic-bootstrap.css', array(), 'v4.0.0', 'all' );
	wp_enqueue_script( 'themename_bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', array('jquery'), 'v4.0.0', true );
}


/*
**
** "admin_enqueue_scripts" is used for backend file
**
*/
add_action('admin_enqueue_scripts', 'themename_admin_scripts');

function themename_admin_scripts() {
	// Load our theme stylesheet.
	wp_enqueue_media(); // this is for media file 
	wp_enqueue_script( 'theme_setting', get_theme_file_uri( '/assets/js/themesetting.js' ), array(), '1.0', true ); // add your custom css/js file 
	
}
?>
