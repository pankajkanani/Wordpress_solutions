<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <link rel="shortcut icon" href="<?php echo get_option('my_favicon_icon'); ?>" type="image/x-icon" />
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <!-- header -->
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="logo">
                            <a href="<?php echo get_site_url(); ?>" title="logo"><img src="<?php echo get_option('logo_image'); ?>" alt=""></a>
                        </div>
                        <div class="header_right">
                            <?php 
                                wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'login_menu' ) );
                            ?>
                            <div class="respo_btn" id="respo_btn"><a href="javascript:void(0)"><img src="<?php echo get_option('menu_icon'); ?>" alt=""></a></div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Header sidebar menu start here -->
            <div class="head_menu" id="head_menu">
                <div class="head_menu_middle">
                    <div class="top_bar">
                        <div class="close_menu"><img src="<?php echo get_template_directory_uri(); ?>/images/menubar_close.png" alt=""></div>
                    </div>
                   <?php wp_nav_menu( array( 'theme_location' => 'sidebar-menu', 'container_class' => 'login_menu' ) ); ?>
                    <div style="transition-delay: 0.8s;" class="bottom_link">
                        <div class="expert_select">
                            <a class="active" href="#">Experten finden</a>
                            <a href="#">Experten finden</a>
                        </div>
                        <div class="lenguas_check">
                            <a href="#">DE</a>
                            <a href="#">EN</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Header sidebar menu end here -->
            
        </header> 