<?php
// Register Custom Post Type Team
// Post Type Key: team
function create_team_cpt() {

	$labels = array(
		'name' => __( 'Team', 'Post Type General Name', 'backerei' ),
		'singular_name' => __( 'Team', 'Post Type Singular Name', 'backerei' ),
		'menu_name' => __( 'Team', 'backerei' ),
		'name_admin_bar' => __( 'Team', 'backerei' ),
		'archives' => __( 'Team Archives', 'backerei' ),
		'attributes' => __( 'Team Attributes', 'backerei' ),
		'parent_item_colon' => __( 'Parent Team:', 'backerei' ),
		'all_items' => __( 'All Team', 'backerei' ),
		'add_new_item' => __( 'Add New Team', 'backerei' ),
		'add_new' => __( 'Add New', 'backerei' ),
		'new_item' => __( 'New Team', 'backerei' ),
		'edit_item' => __( 'Edit Team', 'backerei' ),
		'update_item' => __( 'Update Team', 'backerei' ),
		'view_item' => __( 'View Team', 'backerei' ),
		'view_items' => __( 'View Team', 'backerei' ),
		'search_items' => __( 'Search Team', 'backerei' ),
		'not_found' => __( 'Not found', 'backerei' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'backerei' ),
		'featured_image' => __( 'Featured Image', 'backerei' ),
		'set_featured_image' => __( 'Set featured image', 'backerei' ),
		'remove_featured_image' => __( 'Remove featured image', 'backerei' ),
		'use_featured_image' => __( 'Use as featured image', 'backerei' ),
		'insert_into_item' => __( 'Insert into Team', 'backerei' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Team', 'backerei' ),
		'items_list' => __( 'Team list', 'backerei' ),
		'items_list_navigation' => __( 'Team list navigation', 'backerei' ),
		'filter_items_list' => __( 'Filter Team list', 'backerei' ),
	);
	$args = array(
		'label' => __( 'Team', 'backerei' ),
		'description' => __( '', 'backerei' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-networking',
		'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'author', 'page-attributes', 'post-formats', 'custom-fields', ),
		'taxonomies' => array('Category', ),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'team', $args );

}
add_action( 'init', 'create_team_cpt', 0 );


// Register Taxonomy Category
// Taxonomy Key: category
function create_category_tax() {

	$labels = array(
		'name'              => _x( 'Categories', 'taxonomy general name', 'backerei' ),
		'singular_name'     => _x( 'Category', 'taxonomy singular name', 'backerei' ),
		'search_items'      => __( 'Search Categories', 'backerei' ),
		'all_items'         => __( 'All Categories', 'backerei' ),
		'parent_item'       => __( 'Parent Category', 'backerei' ),
		'parent_item_colon' => __( 'Parent Category:', 'backerei' ),
		'edit_item'         => __( 'Edit Category', 'backerei' ),
		'update_item'       => __( 'Update Category', 'backerei' ),
		'add_new_item'      => __( 'Add New Category', 'backerei' ),
		'new_item_name'     => __( 'New Category Name', 'backerei' ),
		'menu_name'         => __( 'Category', 'backerei' ),
	);
	$args = array(
		'labels' => $labels,
		'description' => __( '', 'backerei' ),
		'hierarchical' => false,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_in_rest' => false,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => false,
	);
	register_taxonomy( 'team_category', array('team', ), $args );

}
add_action( 'init', 'create_category_tax' );


function my_recent_post()
 {
  global $post;

  

  $my_query = new WP_Query( array(
       'post_type' => 'team',
       'posts_per_page' => 3
  ));
  echo '<div class="error_team_section">';
  if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post();
  	?> 
  		<div class="col-md-4 col-sm-12 text-center">
	  	  	<h4 class="designation"><?php echo get_field( "designation" ); ?></h4>
			<h3 class="blog-title team-member-name"><?php the_title(); ?></h3>
			<div> <?php the_post_thumbnail('medium'); ?></div>
		</div>
<?php
  endwhile; endif;
  
  echo '</div>';

  echo '<hr class="error-separator">';
 }
 add_shortcode( 'teamrecent', 'my_recent_post' );

?>