<?php

/**
 * Enqueue scripts and styles.
 *
 * @since backerei 1.0
 */

function backereifleischli_scripts() {
	// Load our main stylesheet.
	wp_enqueue_style( 'backerei-style', get_stylesheet_uri(), array(), '1.0.2', 'all' );

	wp_enqueue_style( 'fleischli_style', get_template_directory_uri().'/dist/app.css' );
	wp_enqueue_script( 'fleischli_js', get_template_directory_uri().'/dist/app.js', array() );

	wp_enqueue_style( 'backerei_font_awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' );
	//wp_enqueue_style( 'backerei_ajax', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js' );
	// Load our bootstrap css and js.
	wp_enqueue_style( 'backerei_woocommerce_css', get_template_directory_uri().'/dist/woocommerce.css' );

	// Load our bootstrap css and js.
	wp_enqueue_style( 'backerei-iconic-bootstrap', get_template_directory_uri() . '/assets/css/open-iconic-bootstrap.css', array(), 'v4.0.0', 'all' );
	wp_enqueue_script( 'backerei_bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', array('jquery'), 'v4.0.0', true );
}
add_action('wp_enqueue_scripts', 'backereifleischli_scripts');

function backereifleischli_admin_scripts() {
	// Load our theme stylesheet.
	wp_enqueue_media();
	wp_enqueue_script( 'theme_setting', get_theme_file_uri( '/assets/js/themesetting.js' ), array(), '1.0', true );
	//wp_enqueue_style( 'theme_css', get_theme_file_uri( '/assets/js/themesetting.css' ));
}
add_action('admin_enqueue_scripts', 'backereifleischli_admin_scripts');
?>
