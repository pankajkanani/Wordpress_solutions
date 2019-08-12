<?php 
add_action( 'admin_init', 'register_myheader_settings' );
function register_myheader_settings() 
{
    register_setting( 'my-own-theme-options-for-header', 'my_favicon_icon' );  
    register_setting( 'my-own-theme-options-for-header', 'logo_image' );
    register_setting( 'my-own-theme-options-for-header', 'menu_icon' );
    register_setting( 'my-own-theme-options-for-header', 'top_header_telephone' );
    register_setting( 'my-own-theme-options-for-header', 'top_header_find_us_text' );
    register_setting( 'my-own-theme-options-for-header', 'top_header_find_us_link' );
}
function header_section_options_page() {
?>

<div class="wrap">
    <h2>Header Section</h2>
    <?php settings_errors(); ?> 
    <form method="post" action="options.php">
        <?php settings_fields( 'my-own-theme-options-for-header' ); ?>
        <?php do_settings_sections( 'my-own-theme-options-for-header' ); ?>
        <?php include('bootstrap_theme_includes.php'); ?>
        <br />
        <div class="row">
            
            <div class="col-md-8">
                <!-- <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Top Header Options</h3>
                    </div>
                    <div class="panel-body">
                        
                        <label for="top_header_telephone">Telephone</label>
                        <input id="top_header_telephone" type="text" name="top_header_telephone" value="<?php echo get_option('top_header_telephone'); ?>" class="form-control" />
                        <br />
                        <br />
                        <label for="top_header_find_us_text">Where to find us Text</label>
                        <input id="top_header_find_us_text" type="text" name="top_header_find_us_text" value="<?php echo get_option('top_header_find_us_text'); ?>" class="form-control" />
                        <br />
                        <br />
                        <label for="top_header_find_us_link">Where to find us Link</label>
                        <input id="top_header_find_us_link" type="text" name="top_header_find_us_link" value="<?php echo get_option('top_header_find_us_link'); ?>" class="form-control" />
                    </div>
                </div> -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Header Options</h3>
                    </div>
                    
                    <div class="panel-body">
                        <label style="width: 100%;" for="upload_image">Logo Image</label>
                        <?php echo my_image_uploader('logo_image', 'Upload Image'); ?>
                        <br />
                        <br />
                        <label style="width: 100%;" for="upload_image">Favicon Icon</label>                            
                        <?php echo my_image_uploader('my_favicon_icon', 'Upload Image'); ?>
                        <br />
                        <br />
                        <label style="width: 100%;" for="upload_image">Menu Icon</label>                            
                        <?php echo my_image_uploader('menu_icon', 'Menu Icon'); ?>
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
