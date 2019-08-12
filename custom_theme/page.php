<?php get_header();?>
<div class="subpage_title">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
	<div class="wrapper">
    	<div class="content-left">
               
        	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            
            	<h2 class="title"><?php the_title(); ?></h2>  
                <?php the_content(); ?>  
                          
            <?php endwhile; else: ?>    
                    
            	<div class="error"><?php _e('Not found.'); ?></div> 
                           
            <?php endif; ?>
            
        </div>
        <!-- <div class="content-right">        	
			<?php get_sidebar(); ?>
        </div>
        <div class="clear"></div> -->
    </div>
</div><!-- EOF : content ID -->

<?php get_footer(); ?>