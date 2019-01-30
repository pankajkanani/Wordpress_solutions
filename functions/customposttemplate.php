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
							endif;
						?>
					</div>

				</main><!-- #main -->
			</div><!-- #primary -->
		</div>	<!-- /.col-md-9 -->
	</div><!-- /.row -->
</div><!-- /.container -->

<?php
get_footer();