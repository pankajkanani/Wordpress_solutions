<?php

/**
 * Template name: Become expert
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 */



get_header(); 
?>
    <!-- Become expert Start -->
        <section class="become_expert_page">
            <?php
            $banner_section = get_field('banner_section');  
            if( $banner_section ): 
            ?>
                <div class="become_expert_banner" style="background: url(<?php echo $banner_section['background']['url']; ?>) no-repeat;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7 col-sm-7 col-xs-12">
                                <h1><?php echo $banner_section['title']; ?></h1>
                                <p><?php echo $banner_section['description']; ?></p>
                                <div class="wiset">
                                    <a href="<?php echo $banner_section['appstore_link']['url']; ?>" target="_blank"><img src="<?php echo $banner_section['appstore_logo']['url']; ?>" alt=""></a>
                                    <a href="<?php echo $banner_section['googlestore_link']['url']; ?>" target="_blank"><img src="<?php echo $banner_section['google_logo']['url']; ?>" alt=""></a>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-5 col-xs-12">
                                <div class="img_tag"><img src="<?php echo $banner_section['image']['url']; ?>" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>



            <div class="become_expert_middle">

                <?php
                $middle_section_1 = get_field('middle_section_1');  
                if( $middle_section_1 ): 
                ?>
                <div class="yours_tsorro_profile">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="content_info">
                                    <div class="logo_icon"><img src="<?php echo $middle_section_1['icon']['url']; ?>" alt=""></div>
                                    <h2><?php echo $middle_section_1['title']; ?></h2>
                                    <p><?php echo $middle_section_1['content']; ?></p>
                                </div>
                                <div class="img_tag">
                                    <img src="<?php echo $middle_section_1['side_image']['url']; ?>" alt="">
                                </div>
                            </div>
                            <div class="img_mobi col-md-12 col-sm-12 col-xs-12">
                                <div class="img_mobi"><img src="<?php echo $middle_section_1['bottom_image']['url']; ?>" alt=""></div>
                                <div class="get_the_app"><a href="<?php echo $middle_section_1['button_link']['url']; ?>"><img src="<?php echo $middle_section_1['button_image']['url']; ?>" alt=""></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="next_down"><a href="<?php echo $middle_section_1['next_id']; ?>"><img src="<?php echo $middle_section_1['next_arrow']['url']; ?>" alt=""></a></div>
                </div>
                <?php endif; ?>

                <?php
                $middle_section_2 = get_field('middle_section_2');  
                if( $middle_section_2 ): 
                ?>
                <div id="profile_project" class="profile_project">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="content_info">
                                    <div class="logo_icon"><img src="<?php echo $middle_section_2['icon']['url']; ?>" alt=""></div>
                                    <h2><?php echo $middle_section_2['title']; ?></h2>
                                    <div class="list_info">
                                        <?php echo $middle_section_2['content']; ?>
                                    </div>
                                </div>
                                <div class="img_tag">
                                    <img src="<?php echo $middle_section_2['side_image']['url']; ?>" alt="">
                                    <div class="get_the_app"><a href="<?php echo $middle_section_1['button_link']['url']; ?>"><img src="<?php echo $middle_section_1['button_image']['url']; ?>" alt=""></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="next_down"><a href="<?php echo $middle_section_2['next_id']; ?>"><img src="<?php echo $middle_section_2['next_arrow']['url']; ?>" alt=""></a></div>
                </div>
                <?php endif; ?>
                <?php
                $video_tutorial = get_field('video_tutorial');  
                if( $video_tutorial ): 
                ?>
                <div id="video_tutorials" class="video_tutorials">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="titie_info">
                                    <h2><?php echo $video_tutorial['title']; ?></h2>
                                    <p><?php echo $video_tutorial['sub_title']; ?></p>
                                </div>

                                <div class="middle_tutorials_list">


                                    <!-- <div class="tutorials_box">
                                        <div class="mobile_tag">
                                            <img src="http://192.168.0.106/tsorro/wp-content/uploads/2019/07/mobile1.png" alt="">
                                            <div class="overly">
                                                <h3>Video-tutorial</h3>
                                                <span class="icon"><a href="#"><img src="http://192.168.0.106/tsorro/wp-content/uploads/2019/07/icon1.png" alt=""></a></span>
                                            </div>
                                        </div>
                                        <div class="titile_here">
                                            Registrierung
                                        </div>
                                    </div>
                                    <div class="tutorials_box">
                                        <div class="mobile_tag">
                                            <img src="http://192.168.0.106/tsorro/wp-content/uploads/2019/07/mobile2.png" alt="">
                                            <div class="overly">
                                                <h3>Video-tutorial</h3>
                                                <span class="icon"><a href="#"><img src="http://192.168.0.106/tsorro/wp-content/uploads/2019/07/icon1.png" alt=""></a></span>
                                            </div>
                                        </div>
                                        <div class="titile_here">
                                            Unternehmensbereiche auswählen
                                        </div>
                                    </div>
                                    <div class="tutorials_box">
                                        <div class="mobile_tag">
                                            <img src="http://192.168.0.106/tsorro/wp-content/uploads/2019/07/mobile3.png" alt="">
                                            <div class="overly">
                                                <h3>Video-tutorial</h3>
                                                <span class="icon"><a href="#"><img src="http://192.168.0.106/tsorro/wp-content/uploads/2019/07/icon1.png" alt=""></a></span>
                                            </div>
                                        </div>
                                        <div class="titile_here">
                                            Honorar & Verfügbarkeit
                                        </div>
                                    </div>
                                    <div class="tutorials_box">
                                        <div class="mobile_tag">
                                            <img src="http://192.168.0.106/tsorro/wp-content/uploads/2019/07/mobile4.png" alt="">
                                            <div class="overly">
                                                <h3>Video-tutorial</h3>
                                                <span class="icon"><a href="#"><img src="http://192.168.0.106/tsorro/wp-content/uploads/2019/07/icon1.png" alt=""></a></span>
                                            </div>
                                        </div>
                                        <div class="titile_here">
                                            Bewerben mit zeigefinger
                                        </div>
                                    </div>
                                    <div class="tutorials_box">
                                        <div class="mobile_tag">
                                            <img src="http://192.168.0.106/tsorro/wp-content/uploads/2019/07/mobile5.png" alt="">
                                            <div class="overly">
                                                <h3>Video-tutorial</h3>
                                                <span class="icon" data-toggle="modal" data-target="#video_modal"><a href="javascript:void(0)"><img src="http://192.168.0.106/tsorro/wp-content/uploads/2019/07/icon1.png" alt=""></a></span>
                                            </div>
                                            <div class="modal fade video_modal" id="video_modal" role="dialog">
                                                <div class="modal-dialog">
                                                    
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <iframe height="400" src="https://www.youtube.com/embed/jssO8-5qmag" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="titile_here">
                                            CV automatisch erstellen
                                        </div>
                                    </div> -->
                                    <?php

                                    // check if the repeater field has rows of data
                                    if( have_rows('video_tutorials') ):
                                        $count = 0;
                                        
                                        while ( have_rows('video_tutorials') ) : the_row();
                                             $mobile_image = get_sub_field('image');
                                             $mobile_title = get_sub_field('title');
                                             $video_title = get_sub_field('video_title');
                                             $video_link = get_sub_field('video_link');

                                            ?>
                                            <div class="tutorials_box">
                                                <div class="mobile_tag">
                                                    <img src="<?php echo $mobile_image['url']; ?>" alt="">
                                                    <div class="overly">
                                                        <h3><?php echo $video_title; ?></h3>
                                                        <span class="icon" data-toggle="modal" data-target="#video_<?php echo $count;?>"><a href="javascript:void(0)"><img src="<?php echo get_template_directory_uri(); ?>/images/icon1.png" alt=""></a></span>
                                                    </div>
                                                    <div class="modal fade video_modal video_<?php echo $count;?>" id="video_<?php echo $count;?>" role="dialog">
                                                        <div class="modal-dialog">
                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <iframe height="400" src="<?php echo $video_link['url']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="titile_here">
                                                    <?php echo $mobile_title; ?>
                                                </div>
                                            </div>
                                            <!-- <div class="benefits_box <?php echo $clasname[$count];?>">
                                                <h3><?php the_sub_field('title'); ?> <span><?php the_sub_field('sub_title'); ?></span></h3>
                                                <p><?php the_sub_field('content'); ?></p>
                                                <span class="close_icon"><img src="http://192.168.0.106/tsorro/wp-content/uploads/2019/07/close_line1.png" alt=""></span>
                                            </div>  -->
                                            <?php
                                            $count++;
                                        endwhile;
                                    else :
                                    endif;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="next_down"><a href="<?php echo $video_tutorial['next_id']; ?>"><img src="<?php echo $video_tutorial['next_arrow']['url']; ?>" alt=""></a></div>
                </div>
                <?php endif; ?>
                <?php
                $benifits = get_field('benifits');  
                if( $benifits ): 
                ?>
                <div id="tssor_benefits" class="tssor_benefits">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="title_text">
                                    <div class="logo_icon"><img src="<?php echo $benifits['icon']['url']; ?>" alt=""></div>
                                    <h2><?php echo $benifits['title']; ?></h2>
                                </div>
                                <div class="benefits_sub">
                                    <span class="close_center"><img src="<?php echo $benifits['close_icon']['url']; ?>" alt=""></span>
                                <?php

                                    // check if the repeater field has rows of data
                                    if( have_rows('tsorro_benifits') ):
                                        $count = 0;
                                        $clasname = array('one_tab','two_tab','three_tab','four_tab','five_tab','six_tab');
                                        while ( have_rows('tsorro_benifits') ) : the_row();
                                             
                                            ?>
                                            <div class="benefits_box <?php echo $clasname[$count];?>">
                                                <h3><?php the_sub_field('title'); ?> <span><?php the_sub_field('sub_title'); ?></span></h3>
                                                <p><?php the_sub_field('content'); ?></p>
                                                <span class="close_icon"><img src="<?php echo get_template_directory_uri(); ?>/images/close_line1.png" alt=""></span>
                                            </div> 
                                            <?php
                                            $count++;
                                        endwhile;
                                    else :
                                    endif;
                                    ?>
                                
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="next_down"><a href="<?php echo $benifits['next_id']; ?>"><img src="<?php echo $benifits['next_arrow']['url']; ?>" alt=""></a></div>
                </div>
                <?php endif; ?>
                <?php
                $middle_section_3 = get_field('middle_section_3');  
                if( $middle_section_3 ): 
                ?>
                <div id="best_occupation" class="profile_project best_occupation">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="content_info">
                                    <div class="logo_icon"><img src="<?php echo $middle_section_3['icon']['url']; ?>" alt=""></div>
                                    <h2><?php echo $middle_section_3['title']; ?></h2>
                                    <div class="list_info">
                                        <?php echo $middle_section_3['content']; ?>
                                    </div>
                                </div>
                                <div class="img_tag">
                                    <img src="<?php echo $middle_section_3['side_image']['url']; ?>" alt="">
                                    <div class="get_the_app"><a href="<?php echo $middle_section_3['button_link']['url']; ?>"><img src="<?php echo $middle_section_3['button_image']['url']; ?>" alt=""></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="next_down"><a href="<?php echo $middle_section_3['next_id']; ?>"><img src="<?php echo $middle_section_3['next_arrow']['url']; ?>" alt=""></a></div>
                </div>
                <?php endif; ?>
                <?php
                $our_pool = get_field('our_pool');  
                if( $our_pool ): 
                ?>
                <div id="our_pool_experts" class="our_pool_experts" style="background: url(<?php echo get_template_directory_uri(); ?>/images/inner_banner4.jpg)no-repeat">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="title_text">
                                    <div class="logo_icon"><img src="<?php echo $our_pool['icon']['url']; ?>" alt=""></div>
                                    <h2><?php echo $our_pool['title']; ?></h2>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="experts_step_sub">
                                    <?php                                        
                                        if( have_rows('our_pool_experts') ):                                            
                                            while ( have_rows('our_pool_experts') ) : the_row();                                
                                                
                                                ?>
                                                <div class="experts_step">
                                                    <h3><?php echo get_sub_field('title'); ?><span><?php echo get_sub_field('sub_title'); ?></span></h3>
                                                    <span class="close_icon"><img src="<?php echo get_template_directory_uri(); ?>/images/close_line.png" alt=""></span>
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
                <?php endif; ?>
                <div class="close_line"><img src="<?php echo get_template_directory_uri(); ?>/images/close_line.png" alt=""></div>

            </div>

        </section>
<?php               
get_footer();
?>  