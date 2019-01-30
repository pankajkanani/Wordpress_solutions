<?php
/**
 * Template Name: award Page
 *
 * this page show all post here.
 *
 * @package WordPress
 * @subpackage backerei
 * @since backerei 1.0
*/

get_header(); ?>

<?php $default_sidebar_position = get_theme_mod( 'default_sidebar_position', 'right' ); ?>
<div class="blog-image-banner">
	<?php the_post_thumbnail(); ?>
</div>
<div class="container">
	<div class="row award">
		<div class="col-md-12 ">
			<div id="primary" class="content-area">
				<main id="main" class="site-main">
					<div class="blog-page-titles">
						<h2 class="blog-main-title"><?php echo get_field( "page_title" );?></h2>
						<p class="blog-sub-title"><?php echo get_field( "page_description" );?></p>
					</div>
					<?php 
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$args = array('post_type' => 'award', 'posts_per_page' => 6, 'paged' => $paged, 'order' => 'ASC' );
						query_posts($args); 
					?>		
					<div class="full-size-blog">
						<?php // Start the loop 
							if ( have_posts() ) : 
								while (have_posts()) : the_post(); 
									 ?>
									    <div class="half-blog-inner">
									        <div class="blog-inner-details">
									           <div class="blog-image award-image">
									           		<?php 
									           	if (get_field('embedded_video') != '') {
									           		echo get_field('embedded_video');
									           	} else {?>
									           		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>			
									           	<?php }  	 ?>
									           	</div>
									           	<h3 class="blog-title"><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h3>
									           	<p class="awrd-subtitle"><?php if (get_field( "award_sub_title" )) {
									           		echo get_field( "award_sub_title" );
									           	}  ?></p>
										    </div>      
											<div class="blog-details"><?php 
										        echo '<div class="blog-description">'.the_excerpt().'</div>'; ?>
										    </div>
										    <div class="blog-readmore"><a href="<?php the_permalink(); ?>" >weiter lesen</a></div>
										</div>
							<?php endwhile; ?>
					</div>
					<div class="blog-pagination">
						<?php
							global $wp_query;
							$award_big = 999999999; // need an unlikely integer
							echo paginate_links( array(
								'base' => str_replace( $award_big, '%#%', esc_url( get_pagenum_link( $award_big ) ) ),
								'format' => '?paged=%#%',
								'current' => max( 1, get_query_var('paged') ),
								'total' => $wp_query->max_num_pages,
								'prev_next'          => true,
								'prev_text'          => __('<span class="class="prev_text"><i class="fa fa-caret-left" aria-hidden="true"></i></span>'),
								'next_text'          => __('<span class="next_text"><i class="fa fa-caret-right" aria-hidden="true"></i></span>'),

							) );
						?>					
					</div>
				
					<?php else : ?>
						<p>Post not found</p>
					<?php endif; ?> 
				</main><!-- #main -->
			</div><!-- #primary -->
		</div>	<!-- /.col-md-9 -->
	</div><!-- /.row -->
</div><!-- /.container -->
<?php
get_footer();
?>