<?php

/**
 * Template name: Latest News
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 */



get_header(); 
?>
    <section class="heading_pages">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h1>LATEST NEWS</h1>
                </div>
            </div>
        </div>
    </section>
    <section>
            
        <?php
        /*pass your search string here example like this ( 's'=>'test' ) */
       $args=array('post_type'=> 'latest-news','order'=> 'ASC', 'posts_per_page'=> -1);

       $query=new WP_Query($args);

        if( $query->have_posts()): 
            $count = 0;		
            while( $query->have_posts()): $query->the_post();
                $count++;
            	if ($count%2 == 1) { ?>
                    <div class="news_list">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 col-md-push-8 col-sm-12 col-xs-12">
                                    <div class="img_tag">
                                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                                    </div>
                                </div>
                                <div class="col-md-8 col-md-pull-4 col-sm-12 col-xs-12">
                                    <div class="middle_in">
                                        <h2><?php echo get_the_title(); ?></h2>
                                        <span class="date"><?php echo get_the_date('d/m/Y'  ); ?></span>
                                        <p><?php echo get_the_excerpt(); ?></p>
                                        <div>
                                            <a class="btn_sub" href="<?php echo get_permalink(); ?>">READ MORE <i class="fas fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php }else{ ?>
                <div class="news_list">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">
                                <div class="img_tag">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-12 col-xs-12">
                                <div class="middle_in">
                                    <h2><?php echo get_the_title(); ?></h2>
                                    <span class="date"><?php echo get_the_date('d/m/Y'); ?></span>
                                    <p><?php echo get_the_excerpt(); ?></p>
                                    <div>
                                        <a class="btn_sub" href="<?php echo get_permalink(); ?>">READ MORE <i class="fas fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php } 
            endwhile; 
        else:
        endif;
        ?>
    </section>
    <?php               

get_footer();

?>