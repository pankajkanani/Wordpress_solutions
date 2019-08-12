<?php

/**
 * Template name: About Page
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 */



get_header(); 
?>
    <section class="banner_section">
        <?php
        $banner_section = get_field('banner_section');  
        if( $banner_section ): ?>
            <div class="about_banner" style="background: url(<?php echo $banner_section['background_image']['url']; ?>) no-repeat;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <h1><?php echo $banner_section['title']; ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        
        <?php
        $our_team = get_field('our_team');  
        if( $our_team ): ?>
            <div class="about_middle">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="top_text">
                                <h2><?php echo $our_team['title']; ?></h2>
                                <p><?php echo $our_team['content']; ?></p>                            
                            </div>
                            <div class="our_team">
                                <?php
                                    $args=array('post_type'=> 'teammember','order'=> 'Asc', 'posts_per_page'=> -1);

                                    $query=new WP_Query($args);
                                    if( $query->have_posts()): ?>
                                    <?php 
                                        $count = 0;     
                                        while( $query->have_posts()): $query->the_post();
                                            $count++;
                                            if($count == 7){ ?>
                                                <div class="our_team_box">
                                                    <div class="first">
                                                        <div class="img_atg"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt=""></div>
                                                        <span class="name"><?php echo get_the_title(get_the_ID()); ?></span>
                                                        <span class="post"><?php echo get_field('position', get_the_ID()); ?></span>
                                                        <span class="email"><a href="mailto:<?php echo get_field('email', get_the_ID()); ?>"><?php echo get_field('email', get_the_ID()); ?></a></span>
                                                        <span class="close_line"><img src="http://192.168.0.106/tsorro/wp-content/uploads/2019/07/close_line.png" alt=""></span>
                                                    </div>
                                                    <div class="overly_info">
                                                        <div class="close_info"><img src="http://192.168.0.106/tsorro/wp-content/uploads/2019/07/close_line.png" alt=""></div>
                                                        <h3><?php echo get_field('content_title', get_the_ID()); ?> </h3>
                                                        <p><?php echo get_the_content(); ?></p>
                                                    </div>
                                                    
                                                </div>
                                                <div class="our_team_box active">
                                                        <div class="first">
                                                            <div class="logo_text">
                                                                <img src="<?php echo $our_team['tsorro_logo']['url']; ?>" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                            <?php }
                                            else{ ?>
                                                <div class="our_team_box">
                                                    <div class="first">
                                                        <div class="img_atg"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt=""></div>
                                                        <span class="name"><?php echo get_the_title(get_the_ID()); ?></span>
                                                        <span class="post"><?php echo get_field('position', get_the_ID()); ?></span>
                                                        <span class="email"><a href="mailto:<?php echo get_field('email', get_the_ID()); ?>"><?php echo get_field('email', get_the_ID()); ?></a></span>
                                                        <span class="close_line"><img src="http://192.168.0.106/tsorro/wp-content/uploads/2019/07/close_line.png" alt=""></span>
                                                    </div>
                                                    <div class="overly_info">
                                                        <div class="close_info"><img src="http://192.168.0.106/tsorro/wp-content/uploads/2019/07/close_line.png" alt=""></div>
                                                        <h3><?php echo get_field('content_title', get_the_ID()); ?> </h3>
                                                        <p><?php echo get_the_content(); ?></p>
                                                    </div>
                                                </div>   
                                            <?php }  
                                        endwhile; ?>
                                               
                                    <?php
                                        endif;
                                        wp_reset_query();    
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="close_line"><img src="http://192.168.0.106/tsorro/wp-content/uploads/2019/07/close_line.png" alt=""></div>

            </div>
        <?php endif; ?>
        
    </section>

<?php               
get_footer();

?>  