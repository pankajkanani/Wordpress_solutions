<!-- Footer -->
        <div class="contact_btn">
            <img src="<?php echo get_option('contact_icon'); ?>" alt="Chat">
        </div>

        <div class="contactform_overlay">

            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="logo_in">
                            <a href="index.html" title="logo"><img src="<?php echo get_option('logo_image'); ?>" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <?php $form = get_option('contact_form'); ?>
                        <?php echo do_shortcode($form); ?>
                    </div>
                </div>
            </div>

            <span class="close_form"><img src="http://192.168.0.106/tsorro/wp-content/uploads/2019/07/close_btn.png" alt="Close"></span>
        </div>
        <?php if(is_home() || is_front_page()){ ?>
            <footer class="footer_front">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            
                            <div class="footer_box"><?php dynamic_sidebar( 'footer-sidebar-column-one' ); ?></div>
                            <div class="footer_box"><?php dynamic_sidebar( 'footer-sidebar-column-two' ); ?></div>
                            <div class="footer_box"><?php dynamic_sidebar( 'footer-sidebar-column-three' ); ?></div>
                            <div class="footer_box"><?php dynamic_sidebar( 'footer-sidebar-column-four' ); ?></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="copy_right">
                                <p><span class="icon"><img src="<?php echo get_option('footer_logo'); ?>" alt=""></span><?php echo get_option('my_footer_text'); ?></p>
                                <?php 
                                    wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => 'site_link' ) );
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        <?php } else { ?>
            <?php 

            if (get_field('footer_color') == 'Blue') {
                $footer_color = 'blue';
            } else {
                $footer_color = '';
            }
             ?>
            <footer class="footer_sub <?php echo $footer_color; ?>">
                <div class="container">
                    <div class="row">

                        <div class="col-md-9 col-sm-9 col-xs-12">

                            <div class="footer_box"><?php dynamic_sidebar( 'footer-2-column-one' ); ?></div>
                            <div class="footer_box"><?php dynamic_sidebar( 'footer-2-column-two' ); ?></div>
                            <div class="footer_box"><?php dynamic_sidebar( 'footer-2-column-three' ); ?></div>
                            <div class="footer_box"><?php dynamic_sidebar( 'footer-2-column-four' ); ?></div>
                            <div class="footer_box"><?php dynamic_sidebar( 'footer-2-column-five' ); ?></div>

                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12 social_link">
                            
                            <div class="footer_box"><?php dynamic_sidebar( 'footer-2-column-six' ); ?></div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="copy_right">
                                <p><span class="icon"><img src="<?php echo get_option('footer_logo_icon2'); ?>" alt=""></span><?php echo get_option('my_footer_text'); ?></p>
                                <?php 
                                    wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => 'site_link' ) );
                                ?>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </footer>

        <?php } ?>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
        <script src="js/jquery.counterup.min.js" type="text/javascript"></script>

        <?php wp_footer(); ?>
    </body>
</html>