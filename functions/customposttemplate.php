<?php
/**
 * Template Name: Team Page
 *
 * this page show all post here.
 *
 * @package WordPress
 * @subpackage backerei
 * @since backerei 1.0
*/

get_header(); ?>


<div class="container">
	<div class="row">
		<div class="col-md-12 ">
			<div id="primary" class="content-area">
				<main id="main" class="site-main">
					
					<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$args = array(
							'post_type' => 'team', 
							'posts_per_page' => 7, 
							'paged' => $paged, 
							'order' => 'ASC' 
						);
						query_posts($args); 
					?>		
					<div class="team">
						
						<?php // Start the loop 
							if ( have_posts() ) : 
								while (have_posts()) : the_post(); 
									the_post_thumbnail('medium');
									the_title();
									the_content();
								endwhile; 
							
						
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
					
				
					 		else : ?>
								<p>Post not found</p>
							
								<?php 
							endif; ?>
					</div>

				</main><!-- #main -->
			</div><!-- #primary -->
		</div>	<!-- /.col-md-9 -->
	</div><!-- /.row -->
</div><!-- /.container -->

<?php
get_footer();