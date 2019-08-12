<?php 
add_action( 'admin_init', 'register_myfooter_settings' );
function register_myfooter_settings() 
{ 
    register_setting( 'my-own-theme-options-for-footer', 'footer_logo' );
    register_setting( 'my-own-theme-options-for-footer', 'footer_logo_icon' );
    register_setting( 'my-own-theme-options-for-footer', 'footer_logo_icon2' );
    register_setting( 'my-own-theme-options-for-footer', 'my_footer_text' );
    register_setting( 'my-own-theme-options-for-footer', 'my_image2' );  
    register_setting( 'my-own-theme-options-for-footer', 'contact_icon' );  
    register_setting( 'my-own-theme-options-for-footer', 'contact_form' ); 
}
function footer_section_options_page() {
    
?>
<div class="wrap">
    <h2>Footer Section</h2>
    <?php settings_errors(); ?> 
    <form method="post" action="options.php">
        <?php settings_fields( 'my-own-theme-options-for-footer' ); ?>
        <?php do_settings_sections( 'my-own-theme-options-for-footer' ); ?>
        <?php include('bootstrap_theme_includes.php'); ?>
        <br />
        <div class="row">
            
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Footer Sections</h3>
                    </div>
                    <div class="panel-body">
                       <label style="width: 100%;" for="upload_image">Footer Logo</label>
                        <?php echo my_image_uploader('footer_logo', 'Upload Image'); ?>
                        <br />
                        <br />
                        <label style="width: 100%;" for="upload_image">Footer Icon</label>                            
                        <?php echo my_image_uploader('footer_logo_icon', 'Upload Image'); ?>
                        <br />
                        <br />

                        <label style="width: 100%;" for="upload_image">Footer Icon 2</label>                            
                        <?php echo my_image_uploader('footer_logo_icon2', 'Upload Image'); ?>
                        <br />
                        <br />

                        <label for="">Footer Option</label>
                        <?php
                            $content = get_option('my_footer_text');
                            $editor_id = 'my_footer_text';
                            wp_editor( $content, $editor_id );
                        ?>
                        
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Footer Pop-up Contact Form</h3>
                    </div>
                    <div class="panel-body">
                        
                        <label style="width: 100%;" for="upload_image">Contact Icon</label>
                        <?php echo my_image_uploader('contact_icon', 'Contact Icon'); ?>
                        <br />
                        <br />
                        <label for="">Contact Form</label>
                        <?php
                            $contact_form_content = get_option('contact_form');
                            $contact_form_editor_id = 'contact_form';
                            wp_editor( $contact_form_content, $contact_form_editor_id );
                        ?>
                    </div>
                </div> 
            </div>
            
            <?php include 'option_page_sidebar.php'; ?>
            
        </div>
   
        <?php submit_button(); ?>
        
    </form>
</div>
<?php } 
/*My Theme Option*/
?>
