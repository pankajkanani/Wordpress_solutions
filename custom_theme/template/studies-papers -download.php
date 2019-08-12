<?php

/**
 * Template name: Studies Papers Download
 *
 * 
 *
 * @package WordPress
 */

get_header(); 
?>
    <section class="studies_papers">
        <?php
        $banner_section = get_field('banner_section');  
        if( $banner_section ): ?>
        <div class="studies_banner" style="background: url(<?php echo $banner_section['background']['url']; ?>) no-repeat;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <h1><?php echo $banner_section['title']; ?></h1>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="img_tag"><img src="<?php echo $banner_section['side_image']['url']; ?>" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>

        
        <div class="studies_middle">
            <?php
            $middle_section = get_field('middle_section');  
            if( $middle_section ): ?>

            <div class="top_text">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <span class="small_icon"><img src="<?php echo $middle_section['icon']['url']; ?>" alt=""></span>
                            <p><?php echo $middle_section['content']; ?></p>                            
                            <div class="close_icon"><img src="<?php echo get_template_directory_uri(); ?>/images/close_line3.png" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            <?php
            $product_box = get_field('product_box');  
            if( $product_box ): ?>
            <div class="product_box">
                <div class="logo_text"><img src="<?php echo $product_box['icon']['url']; ?>" alt=""></div>
                <img src="<?php echo $product_box['background']['url']; ?>" alt="">
            </div>
            <?php endif; ?>


            <div class="topic_section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-11 col-md-offset-1 col-sm-12 col-xs-12">
                            <h2><?php echo get_field('topic_section'); ?></h2>
                        </div>
                    </div>
                </div>
                

                <div class="access_study">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <?php
                                    if( have_rows('access_study_list') ):
                                        while ( have_rows('access_study_list') ) : the_row();
                                            $title = get_sub_field('title');
                                            $pdflink = get_sub_field('pdf_file');
                                            $pdftitle = get_sub_field('pdf_title');
                                            ?>
                                                <div class="access_study_list">
                                                    <div class="left_text">
                                                        <span class="icon"><i class="far fa-copy"></i></span>
                                                        <p><?php echo $title; ?>
                                                    </div>
                                                    <div class="download_option">
                                                        <a href="<?php echo $pdflink; ?>"><i class="fas fa-cloud-download-alt"></i><?php echo $pdftitle; ?></a>
                                                    </div>
                                                </div>
                                            <?php 
                                        endwhile;
                                    else :
                                    endif;
                                ?>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="access_study">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <?php
                                    if( have_rows('access_study_list_2') ):
                                        while ( have_rows('access_study_list_2') ) : the_row();
                                            $title = get_sub_field('title');
                                            $pdflink = get_sub_field('pdf_file');
                                            $pdftitle = get_sub_field('pdf_title');
                                            ?>
                                                <div class="access_study_list">
                                                    <div class="left_text">
                                                        <span class="icon"><i class="far fa-copy"></i></span>
                                                        <p><?php echo $title; ?>
                                                    </div>
                                                    <div class="download_option">
                                                        <a href="<?php echo $pdflink; ?>"><i class="fas fa-cloud-download-alt"></i><?php echo $pdftitle; ?></a>
                                                    </div>
                                                </div>
                                            <?php 
                                        endwhile;
                                    else :
                                    endif;
                                ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="close_line_big"><img src="<?php echo get_template_directory_uri(); ?>/images/close_line4.png" alt=""></div>
        </div>
    </section>
<?php               
get_footer();
?>  