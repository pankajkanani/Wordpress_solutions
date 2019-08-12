<?php

/**
 * Template name: Home page
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 */



get_header(); 
?>
        <!--Banner Section  start here-->
        <?php $banner_section = get_field('banner_section');  
            if( $banner_section ): ?>
                <section class="banner_sect" style="background: url(<?php echo $banner_section['background_image']['url']; ?>) no-repeat;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="midel_cont">
                                    <h1><?php echo $banner_section['title']; ?></h1>
                                    <p><?php echo $banner_section['sub_title']; ?></p>
                                    <div class="experte_list">
                                        <ul>
                                            <li>
                                                <div class="icon">
                                                    <i class="fas fa-male"></i>
                                                </div>
                                                <a class="btns" href="<?php echo $banner_section['button_1']['url']; ?>"><?php echo $banner_section['button_1']['title']; ?></a>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="fas fa-male"></i>
                                                    <i class="fas fa-male"></i>
                                                    <i class="fas fa-male"></i>
                                                </div>
                                                <a class="btns" href="<?php echo $banner_section['button_2']['url']; ?>"><?php echo $banner_section['button_2']['title']; ?></a>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <i class="fas fa-file"></i>
                                                </div>
                                                <a class="btns" href="<?php echo $banner_section['button_3']['url']; ?>"><?php echo $banner_section['button_3']['title']; ?></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endif; ?>
        <!--Banner Section  end here-->
        <!--Image Section  start here-->
        <?php $image_section = get_field('image_section');  
            if( $image_section ): ?>
                <section class="so_geht">
                    <div class="img_section">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="mobile_img">
                                        <img src="<?php echo $image_section['image_1']['url']; ?>" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="so_geht_bt"><a href="<?php echo $image_section['so_geht_link']['url'];  ; ?>"><img src="<?php echo $image_section['image_2']['url']; ?>" alt=""></a></div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <p> <?php echo $image_section['content']; ?></p>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endif; ?>
            <!--Image Section  end here-->

        <section class="satisfied_costumers">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="title_tag">
                            <h2><?php echo get_field('satisfied_costumers_title'); ?></h2>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="owl-carousel owl-theme costumers_logos">
                            <?php

                                // check if the repeater field has rows of data
                                if( have_rows('satisfied_costumers_section') ):

                                    // loop through the rows of data
                                    while ( have_rows('satisfied_costumers_section') ) : the_row();

                                        // display a sub field value
                                        $satisfied_costumers_image = get_sub_field('image');
                                        ?>
                                        <div class="img_tag"><a href="#"><img src="<?php echo $satisfied_costumers_image['url']; ?>" alt=""></a></div>
                                        <?php    
                                    endwhile;

                                else :

                                    // no rows found

                                endif;

                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--How Work Section  start here-->
        <?php $how_work = get_field('how_work');  
            if( $how_work ): ?>
                <section class="how_work">
                    <div class="work_title">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="title_tag">
                                        <h2><?php echo $how_work['title']; ?></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tutorial_sub">
                        <div class="video_tag">
                            <img src="<?php echo $how_work['video_background']['url']; ?>" alt="">
                            <span data-toggle="modal" data-target="#video_modal" class="play_icon"><a href="javascript:void(0)"><img src="<?php echo $how_work['play_icon']['url']; ?>" alt=""></a></span>
                        </div>
                        <div class="tutorial_info">
                            <div>
                                <h3><?php echo $how_work['tutorial_info']; ?></h3>
                                <p><?php echo $how_work['tutorial_content']; ?></p>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endif; ?>
            <!--How Work Section  end here--> 

            <!--Middle Device Section  start here-->
            <?php $middle_devices = get_field('middle_devices');  
            if( $middle_devices ): ?>
                <section class="middle_devices">
                    <div class="img_tag">
                        <div class="container">
                            <img src="<?php echo $middle_devices['middle_image']['url']; ?>" alt="">
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <p><?php echo $middle_devices['middle_content']; ?></p>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endif; ?>
            <!--Middle Device Section end here-->

            <!--Our promise Section start here-->
            <?php $our_promise = get_field('our_promise');  
            if( $our_promise ): ?>
                <section class="our_promise">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="title_tag">
                                    <h2><?php echo $our_promise['title']; ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="our_promise_sub">
                        <?php //print_r($our_promise['promise_box']); 
                        foreach ($our_promise['promise_box'] as $our_promise_box) { ?>
                            <div class="promise_box">
                                <div class="icon"><img src="<?php echo $our_promise_box['icon']['url']; ?>" alt=""></div>
                                <h3><a href="#"><?php echo $our_promise_box['title']; ?></a></h3>
                                <p><?php echo $our_promise_box['content']; ?></p>
                            </div>

                        <?php }  ?>
                        
                    </div>
                </section>
            <?php endif; ?>
            <!--Our promise Section end here-->

            <!--Our completences Section start here-->
            <?php $our_competences = get_field('our_competences');  
            if( $our_competences ): ?>
            <?php echo get_field('our_competences'); ?>
            <?php endif; ?>
            <?php $our_strength = get_field('our_strength');  
            if( $our_strength ): ?>
                <section class="our_strength" style="background: url(<?php echo $our_strength['background']['url']; ?>)no-repeat">

                    <?php //print_r($our_promise['promise_box']); 
                        foreach ($our_strength['our_strenth_box'] as $our_strength_box) { ?>
                            <div class="tags">
                                <h2><span class="counter"><?php echo $our_strength_box['title_count']; ?></span><?php echo $our_strength_box['title_value']; ?></h2>
                                <h4><?php echo $our_strength_box['sub_title']; ?></h4>
                            </div>

                        <?php }  ?>
                </section>
            <?php endif; ?>
            <!--Our completences Section end here-->

            <!--We expert Section start here-->
            <?php $we_excerpt = get_field('we_excerpt');  
            if( $we_excerpt ): ?>
                <section class="we_expert">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="title_tag">
                                    <h2><?php echo $we_excerpt['title']; ?></h2>
                                </div>
                                <p><?php echo $we_excerpt['content']; ?></p>

                                <div class="middle_imgs">
                                    <div class="expert_left">
                                        <img src="<?php echo $we_excerpt['left_image']['url']; ?>" alt="">
                                        <div class="up_text">
                                            <div>
                                                <div class="icon"><img src="<?php echo $we_excerpt['expert_icon']['url']; ?>" alt=""></div>
                                                <h2><?php echo $we_excerpt['expert_title']; ?></h2>
                                                <p><?php echo $we_excerpt['expert_content']; ?></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="expert_right">
                                        <img src="<?php echo $we_excerpt['right_image']['url']; ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endif; ?>
            <!--We expert Section end here-->

            <!--video_modal-->
            <div class="modal fade video_modal" id="video_modal" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
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
<?php               
get_footer();

?>  