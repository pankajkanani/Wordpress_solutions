<?php
add_action( 'admin_init', 'register_mysocial_settings' );
function register_mysocial_settings() 
{ 
    register_setting( 'my-own-theme-options-for-social', 'developermode' );
    register_setting( 'my-own-theme-options-for-social', 'facebook_val' );
    register_setting( 'my-own-theme-options-for-social', 'my_facebook_text' );
    register_setting( 'my-own-theme-options-for-social', 'twitter_val' );
    register_setting( 'my-own-theme-options-for-social', 'my_twitter_text' );
    register_setting( 'my-own-theme-options-for-social', 'instagram_val' );
    register_setting( 'my-own-theme-options-for-social', 'youtube_val' );
}
function social_links_options_page() {
?>

<div class="wrap">
    <h2>Social Links</h2>
    <?php settings_errors(); ?> 
    <form method="post" action="options.php">
        <?php settings_fields( 'my-own-theme-options-for-social' ); ?>
        <?php do_settings_sections( 'my-own-theme-options-for-social' ); ?>
        <?php include('bootstrap_theme_includes.php'); ?>
        <br />
        <div class="row">
            
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Social Links</h3>
                    </div>
                    <div class="panel-body">
                        
                        <label for="facebook_val">Facebook</label>
                        <input id="facebook_val" type="text" name="facebook_val" value="<?php echo get_option('facebook_val'); ?>" class="form-control" />
                        <label for="">Facebook Content</label>
                        <?php
                            $content = get_option('my_facebook_text');
                            $editor_id = 'my_facebook_text';
                            wp_editor( $content, $editor_id );
                        ?>
                        <br />
                        
                        <label for="twitter_val">Twitter</label>
                        <input id="twitter_val" type="text" name="twitter_val" value="<?php echo get_option('twitter_val'); ?>" class="form-control" />
                        
                        <br />
                        <label for="">Twitter Content</label>
                        <?php
                            $content = get_option('my_twitter_text');
                            $editor_id = 'my_twitter_text';
                            wp_editor( $content, $editor_id );
                        ?>

                        <br />

                        <label for="instagram_val">Instagram</label>
                        <input id="instagram_val" type="text" name="instagram_val" value="<?php echo get_option('instagram_val'); ?>" class="form-control" />
                        
                        <br />
                        
                        <label for="youtube_val">Youtube</label>
                        <input id="youtube_val" type="text" name="youtube_val" value="<?php echo get_option('youtube_val'); ?>" class="form-control" />
                        
                        <?php if(get_option('developermode')=='enable' OR $_GET['developermode']=='enable') { ?>
                        <br />
                        
                        <label for="developermode">
                            Developer Mode
                            <br />
                            <input style="margin: 0px;" <?php if(get_option('developermode')=='enable') { ?> checked="checked" <?php } ?> type="checkbox" name="developermode" id="developermode" value="enable" />
                            <span style="font-weight: normal;">Enable</span>
                        </label>
                        <?php } ?>
                        
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
