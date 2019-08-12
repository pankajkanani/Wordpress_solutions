<?php

/**
 * Template name: Register Page
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 */

get_header(); 
?>
    <section class="register_page">
    <?php
    $banner_section = get_field('banner_section');  
    if( $banner_section ): ?>
        <div class="register_banner" style="background: url(<?php echo $banner_section['background_image']['url']; ?>) no-repeat;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h1><?php echo $banner_section['title']; ?></h1>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    
        
        <div class="register_middle">
            <div class="top_text">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <?php $middle_icon =  get_field('register_middle_icon'); ?>
                            <span class="small_icon"><img src="<?php echo $middle_icon['url']; ?>" alt=""></span>
                            <p><?php echo get_field('register_middle'); ?></p>                            
                        </div>
                    </div>
                </div>
            </div>

            <?php
            $registration_cv = get_field('registration_cv');  
            if( $registration_cv ): ?>
            <div class="registration_cv">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <h2><?php echo $registration_cv['title']; ?></h2>
                            <h4><?php echo $registration_cv['sub_title']; ?></h4>
                            <span class="close_icon"><img src="<?php echo get_template_directory_uri(); ?>/images/close_line4.png" alt=""></span>

                            <div id="cv_click" class="cv_click">
                                <h3><?php echo $registration_cv['cv_title']; ?></h3>
                                <span class="pen"><img src="<?php echo $registration_cv['cv_icon']['url']; ?>" alt=""></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            <?php
            $registration_form = get_field('registration_form');  
            if( $registration_form ): ?>
            <div class="registration_form">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="title_form">
                                <span class="icon"><img src="http://192.168.0.106/tsorro/wp-content/uploads/2019/07/icon2.png" alt=""></span>
                                <h4>Bitte die folgenden Angaben* eintragen und Ihren aktuellen Lebenslauf hochladen.</h4>
                            </div>
                            <?php echo do_shortcode('[contact-form-7 id="490" title="Register"]'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </section>
<?php               
get_footer();
?>  