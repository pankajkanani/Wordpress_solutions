<?php

add_action('admin_menu', 'backerei_theme_options');
function backerei_theme_options() {
	add_theme_page('Theme options', 'Theme Options ', 'manage_options', 'backerei_theme_setting', 'backerei_display');
}
 
/**
 * Retrieves theme options if they exist or returns default values if not
 *
 * @since Backerei 1.0
 *
 * @return array of Backereis.
 */

 function backerei_getoptions() {
	 if( get_option( 'backerei_options' ) === false ) {
		$backerei_options['header_image_path'] = '';
		$backerei_options['header_favicon_icon_path'] = '';
		$backerei_options['header_global_code'] = '';
		$backerei_options['header_code'] = '';
		$backerei_options['footer_image_path'] = '';
		$backerei_options['copy_right'] = '';
		$backerei_options['design_development'] = '';
		$backerei_options['footer_code'] = '';
		$backerei_options['facebook'] = '';
		$backerei_options['twitter'] = '';
		$backerei_options['linkedin'] = '';
		$backerei_options['instagram'] = '';
		$backerei_options['google_plus'] = '';
		$backerei_options['custom_option1'] = '';
		$backerei_options['custom_option2'] = '';
	 }
	 else {
		$backerei_options = get_option( 'backerei_options' );
		if( !isset( $backerei_options['header_image_path'] )  ){
			$backerei_options['header_image_path'] = "";
		}
		if( !isset( $backerei_options['header_favicon_icon_path'] ) ){
			$backerei_options['header_favicon_icon_path'] = "";
		}
		if( !isset( $backerei_options['header_global_code'] ) ){
			$backerei_options['header_global_code'] = "";
		}
		if( !isset( $backerei_options['header_code'] ) ){
			$backerei_options['header_code'] = "";
		}
		if( !isset( $backerei_options['footer_image_path'] ) ){
			$backerei_options['footer_image_path'] = "";
		}
		if( !isset( $backerei_options['copy_right'] ) ){
			$backerei_options['copy_right'] = "";
		}
		if( !isset( $backerei_options['design_development'] ) ){
			$backerei_options['design_development'] = "";
		}
		if( !isset( $backerei_options['footer_code'] ) ){
			$backerei_options['footer_code'] = "";
		}
		if( !isset( $backerei_options['facebook'] ) ){
			$backerei_options['facebook'] = "";
		}
		if( !isset( $backerei_options['twitter'] ) ){
			$backerei_options['twitter'] = "";
		}
		if( !isset( $backerei_options['linkedin'] ) ){
			$backerei_options['linkedin'] = "";
		}
		if( !isset( $backerei_options['instagram'] ) ){
			$backerei_options['instagram'] = "";
		}
		if( !isset( $backerei_options['pintrest'] ) ){
			$backerei_options['pintrest'] = "";
		}
		if( !isset( $backerei_options['google_plus'] ) ){
			$backerei_options['google_plus'] = "";
		}
		if( !isset( $backerei_options['custom_option1'] ) ){
			$backerei_options['custom_option1'] = "";
		}
		if( !isset( $backerei_options['custom_option2'] ) ){
			$backerei_options['custom_option2'] = "";
		}
	 }
	 return $backerei_options;
	 
 }

 function backerei_display() {
	if( isset( $_GET[ 'tab' ] ) ) {  
		$active_tab = $_GET[ 'tab' ];  
    } else {
		$active_tab = 'tab_header';
	} 
 ?>
	<div class="wrap">
        <h1 class="main-title">Backerei Option Settings</h1>
		<p class="description" >Add backerei theme options </p>
            <?php settings_errors(); ?> 
		<h2 class="nav-tab-wrapper"> 
                <a href="?page=backerei_theme_setting&tab=tab_header" class="nav-tab <?php echo $active_tab == 'tab_header' ? 'nav-tab-active' : ''; ?>">Header Section</a>  
                <a href="?page=backerei_theme_setting&tab=tab_social" class="nav-tab <?php echo $active_tab == 'tab_social' ? 'nav-tab-active' : ''; ?>">Social Media Section</a> 
                <!-- <a href="?page=backerei_theme_setting&tab=tab_footer" class="nav-tab <?php echo $active_tab == 'tab_footer' ? 'nav-tab-active' : ''; ?>">Footer Section</a> 
                <a href="?page=backerei_theme_setting&tab=tab_global" class="nav-tab <?php echo $active_tab == 'tab_global' ? 'nav-tab-active' : ''; ?>">Global Section</a>  --> 
        </h2>
        <div class="custom_option">
        	
			<form method="post" action="options.php"  class="customtheme"> 
				<?php
					settings_fields( 'backerei_options' ); 
					
					if( $active_tab == 'tab_header' ) {  
					echo '<div class="active">';	
						do_settings_sections( 'backerei_headersection' );
					echo '</div>';
					echo '<div class="deactive" style="display:none;">';
						do_settings_sections( 'backerei_footersection' );
						do_settings_sections( 'backerei_socialmedia' );
						do_settings_sections( 'backerei_globalsection' );
					echo '</div>';	
					} elseif( $active_tab == 'tab_footer' )  {
					echo '<div class="active">';	
						do_settings_sections( 'backerei_footersection' );
					echo '</div>';
					echo '<div class="deactive" style="display:none;">';
						do_settings_sections( 'backerei_headersection' );
						do_settings_sections( 'backerei_socialmedia' );
						do_settings_sections( 'backerei_globalsection' );
					echo '</div>';		
					} elseif($active_tab == 'tab_social' )  {
					echo '<div class="active">';	
						do_settings_sections( 'backerei_socialmedia' );
					echo '</div>';
					echo '<div class="deactive" style="display:none;">';
						do_settings_sections( 'backerei_footersection' );
						do_settings_sections( 'backerei_headersection' );
						do_settings_sections( 'backerei_globalsection' );
					echo '</div>';	
					} elseif($active_tab == 'tab_global' )  {
					echo '<div class="active">';	
						do_settings_sections( 'backerei_globalsection' );
					echo '</div>';
					echo '<div class="deactive" style="display:none;">';
						do_settings_sections( 'backerei_footersection' );
						do_settings_sections( 'backerei_socialmedia' );
						do_settings_sections( 'backerei_headersection' );
					echo '</div>';	
					}
				?>
				<input type="submit" name="submit" value="Save Setting" class="button-primary" />
			</form> 
		</div>
	</div>
 <?php }

 add_action( 'admin_init', 'backerei_register_settings' );

 function backerei_register_settings(){
	/**
	 * Registers Header section for Custom theme option
	 */
	register_setting( 'backerei_options', 'backerei_options', 'backerei_validate_options' );
	
	/**
	 * Add a settings header section
	 */
	add_settings_section( 'backerei_section', 'Header Section', 'backerei_headertext', 'backerei_headersection' );
	
	/**
	 * Adds a setting field  header logo image selection
	 */
	add_settings_field( 'backerei_headerlogo', 'Header Logo', 'backerei_headerlogo', 'backerei_headersection', 'backerei_section' );
	
	/**
	 * Adds a setting field  Favicon Icon image selection
	 */
	//add_settings_field( 'backerei_faviconicon', 'Favicon Icon', 'backerei_faviconicon', 'backerei_headersection', 'backerei_section' );
	
	/**
	 * Adds a settings footer section
	 */
	add_settings_section( 'backerei_section', 'Footer Section', 'backerei_footertext', 'backerei_footersection' );
	
	/**
	 * Adds a setting field  Footer logo image selection
	 */
	add_settings_field( 'backerei_footerlogo', 'Footer Logo', 'backerei_footerlogo', 'backerei_footersection', 'backerei_section' );
	
	/**
	 * Adds a setting field  Footer Copy right text selection	
	 */
	add_settings_field( 'backerei_copyrighttext', 'Footer Copy Right Text', 'backerei_copyrighttext', 'backerei_footersection', 'backerei_section' );
	
	/**
	 * Adds a setting field  Footer design & develop text selection
	 */
	add_settings_field( 'backerei_designdevelopmenttext', 'Design & Development Text', 'backerei_designdevelopmenttext', 'backerei_footersection', 'backerei_section' );
	
	/**
	 * Adds a settings social media section
	 */
	add_settings_section( 'backerei_section', 'Social Media', 'backerei_socialmediatext', 'backerei_socialmedia' );
	
	/**
	 * Adds a setting field  facebook link
	 */
	add_settings_field( 'backerei_facebooklink', 'Facebook', 'backerei_facebooklink', 'backerei_socialmedia', 'backerei_section' );
	
	/**
	 * Adds a setting field  twitter link
	 */
	add_settings_field( 'backerei_twitterlink', 'Twitter', 'backerei_twitterlink', 'backerei_socialmedia', 'backerei_section' );
	
	/**
	 * Adds a setting field  linkedin link
	 */
	add_settings_field( 'backerei_linkedinlink', 'Linkedin', 'backerei_linkedinlink', 'backerei_socialmedia', 'backerei_section' );
	
	/**
	 * Adds a setting field  instagram link
	 */
	add_settings_field( 'backerei_instagramlink', 'Instagram', 'backerei_instagramlink', 'backerei_socialmedia', 'backerei_section' );
	
	/**
	 * Adds a setting field  pintrest link
	 */
	add_settings_field( 'backerei_pintrestlink', 'pintrest', 'backerei_pintrestlink', 'backerei_socialmedia', 'backerei_section' );
	
	/**
	 * Adds a setting field  google plus link
	 */
	add_settings_field( 'backerei_googlepluslink', 'Google +', 'backerei_googlepluslink', 'backerei_socialmedia', 'backerei_section' );
	
	/**
	 * Adds a setting field  Custom Option link
	 */
	add_settings_field( 'backerei_customoption1link', 'Custom 1', 'backerei_customoption1link', 'backerei_socialmedia', 'backerei_section' );
	
	/**
	 * Adds a setting field  Custom Option link
	 */
	add_settings_field( 'backerei_customoption2link', 'Custom 2', 'backerei_customoption2link', 'backerei_socialmedia', 'backerei_section' );
	
	/**
	 * Add a settings Global section
	 */
	add_settings_section( 'backerei_section', 'Global Section', 'backerei_globaltext', 'backerei_globalsection' );
	
	/**
	 * Adds a setting field  header google analytical code selection
	 */
	add_settings_field( 'backerei_globalheadercode', 'Google Analytical Code', 'backerei_globalheadercode', 'backerei_headersection', 'backerei_section' );
	
	/**
	 * Adds a setting field  other header code selection
	 */
	add_settings_field( 'backerei_otherheadercode', 'Other Code <br/>add to header.php', 'backerei_otherheadercode', 'backerei_headersection', 'backerei_section' );
	
	/**
	 * Adds a setting field  other footer code selection
	 */
	add_settings_field( 'backerei_otherfootercode', 'Other Code </br>add to footer.php', 'backerei_otherfootercode', 'backerei_globalsectionbackerei_globalsection', 'backerei_section' );
}


//Header Logo Function 
function backerei_headerlogo () {
	$options = backerei_getoptions();	
	$backerei_headerlogo = $options['header_image_path'];
?>
	<p>
		<input id="upload_header_image_button" type="button" value="Media Library" class="button-secondary" />
		<input id="backerei_header_logo_image" class="regular-text code" type="text" name="backerei_options[header_image_path]" value="<?php echo esc_attr($backerei_headerlogo); ?>" readonly>
		<!-- <span class="notice-shortcode">
			<?php esc_html_e('Use this shortcode for header logo','backerei'); ?>
			<b>
				<?php echo htmlspecialchars("<?php backerei_showheaderlogo(); ?>"); ?>
			</b>
		</span> -->
	</p>
	<p class="description"><?php esc_html_e('Enter an image URL or use an image from media library.', 'backerei'); ?></p> 
	<?php if(empty($backerei_headerlogo)) { 
		} else { ?>
	<img id="backerei_customtheme_admin_preview" alt="header-logo" width="200" src="<?php echo $backerei_headerlogo; ?>" /></span>
	<?php }
}

//Header Logo Function 
function backerei_faviconicon () {
	$options = backerei_getoptions();	
	$backerei_faviconicon = $options['header_favicon_icon_path'];
?>
	<p>
		<input id="upload_favicon_icon_button" type="button" value="Media Library" class="button-secondary" />
		<input id="backerei_favicon_icon_image" class="regular-text code" type="text" name="backerei_options[header_favicon_icon_path]" value="<?php echo esc_attr($backerei_faviconicon); ?>">
		<!-- <span class="notice-shortcode"><?php esc_html_e('Use this shortcode for favicon icon','backerei'); ?> <b><?php echo htmlspecialchars("<?php backerei_showfaviconicon(); ?>"); ?></b></span> -->
	</p>
	<p class="description"><?php esc_html_e('Enter an image URL or use an image from media library.', 'backerei' ); ?></p> 
	<?php if(empty($backerei_faviconicon)) { 
		} else { ?>
	<img id="backerei_favicon_admin_preview" alt="favicon-icon" src="<?php echo $backerei_faviconicon; ?>" /></span>
	<?php }
}

//Header Google Analytical Function
function backerei_globalheadercode() {
	$options = backerei_getoptions();
	$backerei_headerglobalcode = $options['header_global_code']; ?>
	<textarea class="text-box"  rows="8" placeholder="Google analytical Code" name="backerei_options[header_global_code]" ><?php echo htmlspecialchars($backerei_headerglobalcode); ?></textarea>
	<p class="description"><?php esc_html_e('Add your Google Analytics code here.', 'backerei'); ?></p>
<?php
}

//Header Another Code Function
function backerei_otherheadercode() {
	$options = backerei_getoptions();
	$backerei_headerothercode = $options['header_code']; ?>
	<textarea class="text-box"  rows="8" name="backerei_options[header_code]" ><?php echo htmlspecialchars($backerei_headerothercode); ?></textarea>
	<p class="description"><?php esc_html_e('Any custom code that needs to be added to header.php', 'backerei'); ?></p>
<?php
}

//Footer Logo Function  
function backerei_footerlogo() {
	$options = backerei_getoptions();
	$backerei_footerlogo = $options['footer_image_path'];
?>
	<p>
		<input id="upload_footer_image_button" type="button" value="Media Library" class="button-secondary" />
		<input id="backerei_footer_logo_image" class="regular-text code" type="text" name="backerei_options[footer_image_path]" value="<?php echo esc_attr($backerei_footerlogo); ?>"> 
		<!-- <?php echo '<span class="notice-shortcode">Use this shortcode for footer logo <b>'. htmlspecialchars("<?php backerei_showfooterlogo(); ?>") . '</b> .</span>';  ?> -->
	</p>
	<p class="description"><?php esc_html_e('Enter an image URL or use an image from media library.', 'backerei'); ?></p> 
	<?php if(empty($backerei_footerlogo)) { 
		} else { ?>
	<img id="backerei_customtheme_footer_admin_preview" alt="footer-logo" src="<?php echo $backerei_footerlogo; ?>" /></span>
	<?php }

}

//Footer Copyright Text Funxtion
function backerei_copyrighttext() {
	$options = backerei_getoptions();
	$backerei_copyright = $options['copy_right'];
?>
	<p><input class="text-box" type="text" placeholder="&copy; 2018 Wordpress" name="backerei_options[copy_right]" value="<?php echo esc_attr($backerei_copyright); ?>">
	<!-- <span class="notice-shortcode"><?php esc_html_e( 'Use this shortcode for copy right text', 'backerei' ); ?><b> <?php echo htmlspecialchars("<?php backerei_copyright(); ?>"); ?></b> </span> --></p>
<?php
}

//Footer Design & Development Text Funxtion
function backerei_designdevelopmenttext() {
$options = backerei_getoptions();
	$backerei_designdevelopent = $options['design_development'];
?>
<p>
	<input class="text-box" type="text" placeholder="Design & Developed By Vishit Shah" name="backerei_options[design_development]" value="<?php echo esc_attr($backerei_designdevelopent); ?>">
	<!-- <span class="notice-shortcode"><?php esc_html_e( 'Use this shortcode for design & development text.', 'backerei' ); ?><b><?php echo htmlspecialchars("<?php backerei_designdevelopent(); ?>"); ?></b></span> -->
</p>
<?php
}

//Footer Another Code Function
function backerei_otherfootercode(){
	$options = backerei_getoptions();
	$backerei_footerglobalcode = $options['footer_code']; ?>
	<textarea class="text-box" cols="10" rows="8" name="backerei_options[footer_code]" ><?php echo htmlspecialchars($backerei_footerglobalcode); ?></textarea>
	<p class="description"><?php esc_html_e('Any custom code that needs to be added to footer.php', 'backerei'); ?></p>
<?php
}

//Social Media Facebook Function
function backerei_facebooklink() {
	$options = backerei_getoptions();
	$backerei_facebookurl = $options['facebook'];
?>
	<p>
		<input class="text-box" type="text" placeholder="http://facebook.com/yourprofileurl" name="backerei_options[facebook]" value="<?php echo esc_attr($backerei_facebookurl); ?>">
		<!-- <span class="notice-shortcode"><?php esc_html_e('Use this shortcode for Facebook link' ,'backerei'); ?> <b><?php echo htmlspecialchars("<?php backerei_facebook(); ?>"); ?></b></span> -->
	</p>
<?php }

//Social Media Twitter Function
function backerei_twitterlink() {
	$options = backerei_getoptions();
	$backerei_twitterurl = $options['twitter'];
?>
	<p>
		<input class="text-box" type="text" placeholder="http://twitter.com/yourprofileurl" name="backerei_options[twitter]" value="<?php echo esc_attr($backerei_twitterurl); ?>">
		<!-- <span class="notice-shortcode"><?php esc_html_e('Use this shortcode for Twitter link' , 'backerei'); ?> <b><?php echo htmlspecialchars("<?php backerei_twitter(); ?>"); ?></b></span> -->
	</p>
<?php }

//Social Media Linkedin Function
function backerei_linkedinlink() {
	$options = backerei_getoptions();
	$backerei_linkedinurl = $options['linkedin'];
?>
	<p>
		<input class="text-box" type="text" placeholder="https://www.linkedin.com/yourprofileurl" name="backerei_options[linkedin]" value="<?php echo esc_attr($backerei_linkedinurl); ?>">
		<!-- <span class="notice-shortcode"><?php esc_html_e('Use this shortcode for Linkedin link','backerei' );?> <b><?php echo htmlspecialchars("<?php backerei_linkedin(); ?>"); ?></b></span> -->
	</p>
<?php }

//Social Media Instagram Function
function backerei_instagramlink() {
	$options = backerei_getoptions();
	$backerei_instagramurl = $options['instagram'];
?>
	<p>
		<input class="text-box" type="text" placeholder="https://www.instagram.com/yourprofileurl" name="backerei_options[instagram]" value="<?php echo esc_attr($backerei_instagramurl); ?>">
		<!-- <span class="notice-shortcode"><?php esc_html_e('Use this shortcode for Instagram link', 'backerei'); ?> <b><?php echo htmlspecialchars("<?php backerei_instagram(); ?>"); ?></b></span> -->
	</p>
<?php }

//Social Media pintrest Function
function backerei_pintrestlink() {
	$options = backerei_getoptions();
	$backerei_pintresturl = $options['pintrest'];
?>
	<p>
		<input class="text-box" type="text" placeholder="https://www.pintrest.com/yourprofileurl" name="backerei_options[pintrest]" value="<?php echo esc_attr($backerei_pintresturl); ?>">
		<!-- <span class="notice-shortcode"><?php esc_html_e('Use this shortcode for pintrest link', 'backerei'); ?> <b><?php echo htmlspecialchars("<?php backerei_pintrest(); ?>"); ?></b></span> -->
	</p>
<?php }

//Social Media Google Plus Function
function backerei_googlepluslink() {
	$options = backerei_getoptions();
	$backerei_googleplusurl = $options['google_plus'];
?>
	<p>
		<input class="text-box" type="text" placeholder="https://plus.google.com/xxxxxxxxx/posts" name="backerei_options[google_plus]" value="<?php echo esc_attr($backerei_googleplusurl); ?>">
		<!-- <span class="notice-shortcode"><?php esc_html_e('Use this shortcode for Google + link','backerei'); ?> <b><?php echo htmlspecialchars("<?php backerei_googleplus(); ?>"); ?></b> -->
	</p>
<?php }

//Social Media Custom option Function
function backerei_customoption1link() {
	$options = backerei_getoptions();
	$backerei_customoptionurl1 = $options['custom_option1'];
?>
	<p>
		<input class="text-box" type="text" placeholder="http://www.anyurl.com" name="backerei_options[custom_option1]" value="<?php echo esc_attr($backerei_customoptionurl1); ?>">
		<!-- <span class="notice-shortcode"><?php esc_html_e('Use this shortcode for Custom Option link','backerei' ); ?> <b><?php echo htmlspecialchars("<?php backerei_customoption1(); ?>"); ?></b> -->
	</p>
<?php }

//Social Media Custom option Function
function backerei_customoption2link() {
	$options = backerei_getoptions();
	$backerei_customoptionurl2 = $options['custom_option2'];
?>
	<p>
		<input class="text-box" type="text" placeholder="http://www.anyurl.com" name="backerei_options[custom_option2]" value="<?php echo esc_attr($backerei_customoptionurl2); ?>">
	<!-- 	<span class="notice-shortcode"><?php esc_html_e('Use this shortcode for Custom Option link','backerei'); ?> <b><?php echo htmlspecialchars("<?php backerei_customoption2(); ?>"); ?></b> -->
	</p>
<?php }

/**
 * Validates the form submission by user
 *
 * @since Backerei 1.0
 */
function backerei_section($input) {
	$input['header_image_path'] = esc_url( $input['header_image_path'] );
	$input['header_favicon_icon_path'] = esc_url( $input['header_favicon_icon_path'] );
	$input['header_global_code'] = esc_url( $input['header_global_code'] );
	$input['header_code'] = esc_url( $input['header_code'] );
	$input['footer_image_path'] = esc_url( $input['footer_image_path'] );
	$input['copy_right'] = esc_url( $input['copy_right'] );
	$input['design_development'] = esc_url( $input['design_development'] );
	$input['footer_code'] = esc_url( $input['footer_code'] );
	$input['url'] = esc_url( $input['url'] );
	$input['facebook'] = esc_url( $input['facebook'] );
	$input['twitter'] = esc_url( $input['twitter'] );
	$input['linkedin'] = esc_url( $input['linkedin'] );
	$input['instagram'] = esc_url( $input['instagram'] );
	$input['pintrest'] = esc_url( $input['pintrest'] );
	$input['google_plus'] = esc_url( $input['google_plus'] );
	$input['custom_option1'] = esc_url( $input['custom_option1'] );
	$input['custom_option2'] = esc_url( $input['custom_option2'] );
	return $input;
}

/**
 *
 * @since Backerei 1.0
 */
 
// Show header logo url 
function backerei_showheaderlogo() {
	$options = backerei_getoptions();	
	$backerei_headerimage = $options['header_image_path'];
	if( $backerei_headerimage === "" ) { ?>
		<h2 class="site-title"><a href="" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h2><?php
	}
	else { ?>
			<a class="navbar-brand" href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo $backerei_headerimage; ?>" alt="logo"></a>
		<?php
	}
}
// Show favicon icon url
function backerei_showfaviconicon() {
	$options = backerei_getoptions();	
	$backerei_faviconimage = $options['header_favicon_icon_path'];
	if( $backerei_faviconimage === "" ) { ?>
		<h2 class="site-title"><a href="#" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h2><?php
	}
	else {
		echo $backerei_faviconimage;
	}
}

// Show logo url
function backerei_showfooterlogo() {
	$options = backerei_getoptions();	
	$backerei_footerimage = $options['footer_image_path'];
	?>
	<img src="<?php echo $backerei_footerimage; ?>" alt="<?php bloginfo( 'name' ); ?>">
	<?php
}

// Show coppyright area
function backerei_copyright() {
	$options = backerei_getoptions();	
	$backerei_crtext = $options['copy_right']; ?>
	<?php echo $backerei_crtext; ?><?php 
}


function backerei_designdevelopent() {
	$options = backerei_getoptions();	
	$backerei_ddtext = $options['design_developement']; ?>
	<?php echo $backerei_ddtext; ?><?php 
}

// Show facebook url
function backerei_facebook() {
	$options = backerei_getoptions();
	$backerei_fblink = $options['facebook']; ?>
	<?php echo $backerei_fblink; ?><?php 
}

// Show twitter url
function backerei_twitter() {
	$options = backerei_getoptions();
	$backerei_twlink = $options['twitter']; ?>
	<?php echo $backerei_twlink; ?><?php 
}

// Show linkedin url
function backerei_linkedin() {
	$options = backerei_getoptions();
	$backerei_ldlink = $options['linkedin']; ?>
	<?php echo $backerei_ldlink; ?><?php 
}

// Show instagram url
function backerei_instagram() {
	$options = backerei_getoptions();
	$backerei_iglink = $options['instagram']; ?>
	<?php echo $backerei_iglink; ?><?php 
}

// Show pintrest url
function backerei_pintrest() {
	$options = backerei_getoptions();
	$backerei_pintrestlink = $options['pintrest']; ?>
	<?php echo $backerei_pintrestlink; ?><?php 
}

// Show google plus url
function backerei_googleplus() {
	$options = backerei_getoptions();
	$backerei_gplink = $options['google_plus']; ?>
	<?php echo $backerei_gplink; ?><?php 
}

// Show customoption1 url
function backerei_customoption1() {
	$options = backerei_getoptions();
	$backerei_co1link = $options['custom_option1']; ?>
	<?php echo $backerei_co1link; ?><?php 
}

// Show customoption2 url
function backerei_customoption2() {
	$options = backerei_getoptions();
	$backerei_co1link = $options['custom_option2']; ?>
	<?php echo $backerei_co1link; ?><?php 
}

// This code show in header file
add_action( 'wp_head', 'backerei_globalheader' );
function backerei_globalheader() {
$options = backerei_getoptions();
	$backerei_headergcode = $options['header_global_code']; ?>
	<?php echo $backerei_headergcode; ?><?php 
}

// This code show in header file
add_action( 'wp_head', 'backerei_headercode' );
function backerei_headercode() {
$options = backerei_getoptions();
	$backerei_headerocode = $options['header_code']; ?>
	<?php echo $backerei_headerocode; ?><?php 
}

// This code show in header file
add_action( 'wp_footer', 'backerei_footercode' );
function backerei_footercode() {
$options = backerei_getoptions();
	$backerei_footerocode = $options['footer_code']; ?>
	<?php echo $backerei_footerocode; ?><?php 
}?>