<?php 
    /*Include google map function*/
    include ("theme_custom_functions/my_map.php");
    /*end of Include google map function*/


// Latest post shortcode function start here
function latest_news($atts, $content = null) {

    extract(shortcode_atts(array(
        'title'   => '',
        'post_type'   => '',
        'image' => ''
    ), $atts));

     $args=array('post_type'=> $post_type,'order'=> 'Desc', 'posts_per_page'=> 3);

       $query=new WP_Query($args);

        if( $query->have_posts()): ?>
        	<section class="our_competences">
	            <div class="container-fluid">
	            	<div class="title_tag">
	                    <h2><?php echo get_field('latest_post_title'); ?></h2>
	                </div>
	                <div class="row">
	                    
	                    <?php 
	                    	$count = 0;		
				            while( $query->have_posts()): $query->the_post();
				        ?>
					        <div class="col-md-4 col-sm-4 col-xs-12">
			                    <div class="competences_box">
		                            <div class="img_tag">
		                                <a href="<?php echo get_the_permalink(get_the_ID()); ?>"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt=""></a>
		                            </div>
		                            <div class="text_bottom">
		                                <h3><a href="<?php echo get_the_permalink(get_the_ID()); ?>"><?php echo get_the_title(get_the_ID()); ?></a></h3>
		                                <p><?php echo wp_trim_words( get_the_content(get_the_ID()), 20, '...' );  ?></p>
		                            </div>
		                        </div>
		                    </div>
		                    <?php endwhile; ?>
	            	</div>
	            </div>
	        </section>
		<?php
	        endif;
	    wp_reset_query();    

}
// Latest post shortcode function end here

add_shortcode('latest_news', 'latest_news');

?>
