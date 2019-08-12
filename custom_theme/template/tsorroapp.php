<?php

/**
 * Template name: tsorro app
 *
 * 
 *
 * @package WordPress
 */

get_header(); 
?>
    <section class="tsorro_app_page">
        <?php
        $banner_section = get_field('banner_section');  
        if( $banner_section ): ?>
            <div class="tsorro_app_banner" style="background: url(<?php echo $banner_section['background']['url'];?>) no-repeat;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 col-sm-6 col-xs-12">
                                <h1><?php echo $banner_section['title'];?></h1>
                            </div>
                            <div class="col-md-7 col-sm-6 col-xs-12">
                                <div class="img_tag"><img src="<?php echo $banner_section['side_image']['url'];?>" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
        <?php endif; ?>
            

            <div class="tsorro_app_middle">

                <div class="right_sticky_menu sticky">
                    <ul>
                        <li><a class="active" href="#download_app">App herunterladen</a></li>
                        <li><a href="#registration_seconds">Registrierung – <br>In Sekunden!</a></li>
                        <li><a href="#choice_divisions">Wahl der bevorzugten <br>Unternehmensbereiche</a></li>
                        <li><a href="#fee_availability">Honorar & Verfügbarkeit <br>In Real-Time</a></li>
                        <li><a href="#swipe_apply_finger">Swipe right! Bewerben <br>mit dem Zeigefinger</a></li>
                        <li><a href="#cv_automatically">Wir parsen <br>den CV automatisch!</a></li>
                        <li><a href="#video_tutorials">Videotutorials <br>auf einen Blick</a></li>
                    </ul>
                </div>

                <?php
                $middle_section = get_field('middle_section');  
                if( $middle_section ): ?>
                <div id="download_app" class="download_app_row app_row_sub">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <h2><?php echo $middle_section['title']; ?></h2>
                                <p><?php echo $middle_section['content']; ?></p>
                                <div class="img_tag">
                                    <img src="<?php echo $middle_section['bottom_image']['url']; ?>" alt="">
                                    <div class="small_img"><img src="<?php echo $middle_section['side_image']['url']; ?>" alt=""></div>
                                    <div class="get_app_btn">
                                        <img src="<?php echo $middle_section['button_image']['url']; ?>" alt="">
                                    </div>
                                </div>
                                <div class="wiset_app">
                                    <a href="<?php echo $middle_section['app_store_link']['url']; ?>" target="_blank"><img src="<?php echo $middle_section['app_store_icon']['url']; ?>" alt=""></a>
                                    <a href="<?php echo $middle_section['google_play_link']['url']; ?>" target="_blank"><img src="<?php echo $middle_section['google_play_icon']['url']; ?>" alt=""></a>                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <?php
                $middle_section_1 = get_field('middle_section_1');  
                if( $middle_section_1 ): ?>
                <div class="app_row_sub" id="registration_seconds">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <h2><span class="number_sect">01 /</span> <?php echo $middle_section_1['title']; ?></h2>
                                <div class="img_tag">
                                    <img src="<?php echo $middle_section_1['bottom_image']['url']; ?>" alt="">
                                    <div class="small_img"><img src="<?php echo $middle_section_1['side_image']['url']; ?>" alt=""></div>
                                    <div class="go_work_btn"><a href="#app_video_open"><img src="<?php echo $middle_section_1['button_image']['url']; ?>" alt=""></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="app_video_open" id="app_video_open">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="video_tag">
                                        <!--                                        <img src="images/img12.jpg" alt="">-->
                                        <iframe width="100%" height="650" src="<?php echo $middle_section_1['youtube_video_link']['url']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                    <h3><?php echo $middle_section_1['youtube_video_title']; ?></h3>
                                </div>
                            </div>
                        </div>
                        <div class="back_app"><a href="#registration_seconds"><img src="<?php echo get_template_directory_uri(); ?>/images/back_app.png" alt=""></a></div>
                    </div>
                </div>
                <?php endif; ?>

                <?php
                $middle_section_2 = get_field('middle_section_2');  
                if( $middle_section_2 ): 
                ?>
                <div class="app_row_sub" id="choice_divisions">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <h2><span class="number_sect">02 /</span> <?php echo $middle_section_2['title']; ?></h2>
                                <div class="img_tag">
                                    <img src="<?php echo $middle_section_2['bottom_image']['url']; ?>" alt="">
                                    <div class="small_img"><img src="<?php echo $middle_section_2['side_image']['url']; ?>" alt=""></div>
                                    <div class="go_work_btn"><a href="#app_video_open_2"><img src="<?php echo $middle_section_2['button_image']['url']; ?>" alt=""></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="app_video_open" id="app_video_open_2">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="video_tag">
                                        <!--                                        <img src="images/img12.jpg" alt="">-->
                                        <iframe width="100%" height="650" src="<?php echo $middle_section_2['youtube_video_link']['url']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                    <h3><?php echo $middle_section_2['youtube_video_title']; ?></h3>
                                </div>
                            </div>
                        </div>
                        <div class="back_app"><a href="#choice_divisions"><img src="<?php echo get_template_directory_uri(); ?>/images/back_app.png" alt=""></a></div>
                    </div>
                </div>
                <?php endif; ?>

                <?php
                $middle_section_3 = get_field('middle_section_3');  
                if( $middle_section_3 ): ?>
                <div class="app_row_sub" id="fee_availability">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <h2><span class="number_sect">03 /</span> <?php echo $middle_section_3['title']; ?></h2>
                                <div class="img_tag">
                                    <img src="<?php echo $middle_section_3['bottom_image']['url']; ?>" alt="">
                                    <div class="small_img"><img src="<?php echo $middle_section_3['side_image']['url']; ?>" alt=""></div>
                                    <div class="go_work_btn"><a href="#app_video_open_3"><img src="<?php echo $middle_section_3['button_image']['url']; ?>" alt=""></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="app_video_open" id="app_video_open_3">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="video_tag">
                                        <!--                                        <img src="images/img12.jpg" alt="">-->
                                        <iframe width="100%" height="650" src="<?php echo $middle_section_3['youtube_video_link']['url']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                    <h3><?php echo $middle_section_3['youtube_video_title']; ?></h3>
                                </div>
                            </div>
                        </div>
                        <div class="back_app"><a href="#fee_availability"><img src="<?php echo get_template_directory_uri(); ?>/images/back_app.png" alt=""></a></div>
                    </div>
                </div>
                <?php endif; ?>

                <?php
                $middle_section_4 = get_field('middle_section_4');  
                if( $middle_section_4 ): 
                ?>
                <div class="app_row_sub" id="swipe_apply_finger">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <h2><span class="number_sect">04 /</span> <?php echo $middle_section_4['title']; ?></h2>
                                <div class="img_tag">
                                    <img src="<?php echo $middle_section_4['bottom_image']['url']; ?>" alt="">
                                    <div class="small_img"><img src="<?php echo $middle_section_4['side_image']['url']; ?>" alt=""></div>
                                    <div class="go_work_btn"><a href="#app_video_open_4"><img src="<?php echo $middle_section_4['button_image']['url']; ?>" alt=""></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="app_video_open" id="app_video_open_4">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="video_tag">
                                        <!--                                        <img src="images/img12.jpg" alt="">-->
                                        <iframe width="100%" height="650" src="<?php echo $middle_section_4['youtube_video_link']['url']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                    <h3><?php echo $middle_section_4['youtube_video_title']; ?></h3>
                                </div>
                            </div>
                        </div>
                        <div class="back_app"><a href="#swipe_apply_finger"><img src="<?php echo get_template_directory_uri(); ?>/images/back_app.png" alt=""></a></div>
                    </div>
                </div>
                <?php endif; ?>

                <?php
                $middle_section_5 = get_field('middle_section_5');  
                if( $middle_section_5 ): ?>    
                <div class="app_row_sub" id="cv_automatically">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <h2><span class="number_sect">05 /</span> <?php echo $middle_section_5['title']; ?></h2>
                                <div class="img_tag">
                                    <img src="<?php echo $middle_section_5['bottom_image']['url']; ?>" alt="">
                                    <div class="small_img"><img src="<?php echo $middle_section_5['side_image']['url']; ?>" alt=""></div>
                                    <div class="go_work_btn"><a href="#app_video_open_5"><img src="<?php echo $middle_section_5['button_image']['url']; ?>" alt=""></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="app_video_open" id="app_video_open_5">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="video_tag">
                                        <!--                                        <img src="images/img12.jpg" alt="">-->
                                        <iframe width="100%" height="650" src="<?php echo $middle_section_5['youtube_video_link']['url']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                    <h3><?php echo $middle_section_5['youtube_video_title']; ?></h3>
                                </div>
                            </div>
                        </div>
                        <div class="back_app"><a href="#cv_automatically"><img src="<?php echo get_template_directory_uri(); ?>/images/back_app.png" alt=""></a></div>
                    </div>
                </div>
                <?php endif; ?>

                <div class="app_video_tutorials app_row_sub" id="video_tutorials" style="background: url(http://192.168.0.106/tsorro/wp-content/uploads/2019/07/bg2.jpg) no-repeat">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <h2><span class="number_sect">06 /</span> <?php echo get_field('middle_section_6'); ?></h2>
                                <div class="middle_tutorials_list">
                                <?php
                                if( have_rows('video_tutorials') ):
                                    while ( have_rows('video_tutorials') ) : the_row();
                                        $video_image = get_sub_field('image'); 
                                        $video_title = get_sub_field('title'); 
                                        ?>

                                        <div class="tutorials_box">
                                            <div class="mobile_tag">
                                                <img src="<?php echo $video_image['url']; ?>" alt="">
                                                <div class="overly">
                                                    <h3><?php echo $video_title; ?></h3>
                                                    <span class="icon"><a href="#"><img src="http://192.168.0.106/tsorro/wp-content/uploads/2019/07/icon1.png" alt=""></a></span>
                                                </div>
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

                <div class="close_line_big sticky-stopper"><img src="http://192.168.0.106/tsorro/wp-content/uploads/2019/07/close_line.png" alt=""></div>

            </div>
        </section>
<?php               
get_footer();
?>  