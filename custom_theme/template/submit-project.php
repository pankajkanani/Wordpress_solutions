<?php

/**
 * Template name: Submit Project
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 */



get_header(); 
?>
    <!-- Become expert Start -->
        <div class="subpage_title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <p><?php echo get_field('header_content'); ?></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- submit-project Start -->
        <section class="submit_project">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h2><?php echo get_field('title'); ?></h2>
                        <h4><?php echo get_field('sub_title'); ?></h4>
                        <span class="close_icon"><img src="<?php echo get_template_directory_uri(); ?>/images/close_line1.png" alt=""></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <?php echo do_shortcode('[contact-form-7 id="455" title="Submit Project"]'); ?>
                    </div>
                </div>
            </div>
        </section>
<?php               
get_footer();
?>  