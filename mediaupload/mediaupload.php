<?php

// Add this javascript in js file and change the button id and source id
jQuery(document).ready(function($){
	jQuery('#fileupload_8 input:file').click(function(e){
		e.preventDefault();
		var request_uploader = wp.media({
			title: 'Select or upload header a logo',
			button: { text: 'Select Header Logo' },
			multiple: false
		}).on('select', function(){
			var attachment = request_uploader.state().get('selection').first().toJSON();
			jQuery('#imageurl').val(attachment.url);
			
		}).open();
		
	});
});	


// Enqueue this function in functions.php
function qouterequest_admin_scripts() {
	// Load our theme stylesheet.
	wp_enqueue_media();
	wp_enqueue_script( 'theme_setting', get_theme_file_uri( '/assets/js/customqoute.js' ), array(), '1.0', true );
	//wp_enqueue_style( 'theme_css', get_theme_file_uri( '/assets/js/themesetting.css' ));
}
add_action('wp_enqueue_scripts', 'qouterequest_admin_scripts');



?>