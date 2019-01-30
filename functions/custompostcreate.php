<?php
// Register Custom Post Type award
// Post Type Key: award
function create_award_cpt() {

	$labels = array(
		'name' => __( 'Awards', 'Post Type General Name', 'backerei' ),
		'singular_name' => __( 'Award', 'Post Type Singular Name', 'backerei' ),
		'menu_name' => __( 'Award', 'backerei' ),
		'name_admin_bar' => __( 'award', 'backerei' ),
		'archives' => __( 'Award Archives', 'backerei' ),
		'attributes' => __( 'Award Attributes', 'backerei' ),
		'parent_item_colon' => __( 'Parent Award:', 'backerei' ),
		'all_items' => __( 'All Awards', 'backerei' ),
		'add_new_item' => __( 'Add New Award', 'backerei' ),
		'add_new' => __( 'Add New', 'backerei' ),
		'new_item' => __( 'New Award', 'backerei' ),
		'edit_item' => __( 'Edit Award', 'backerei' ),
		'update_item' => __( 'Update Award', 'backerei' ),
		'view_item' => __( 'View Award', 'backerei' ),
		'view_items' => __( 'View Awards', 'backerei' ),
		'search_items' => __( 'Search Award', 'backerei' ),
		'not_found' => __( 'Not found', 'backerei' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'backerei' ),
		'featured_image' => __( 'Featured Image', 'backerei' ),
		'set_featured_image' => __( 'Set featured image', 'backerei' ),
		'remove_featured_image' => __( 'Remove featured image', 'backerei' ),
		'use_featured_image' => __( 'Use as featured image', 'backerei' ),
		'insert_into_item' => __( 'Insert into Award', 'backerei' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Award', 'backerei' ),
		'items_list' => __( 'Awards list', 'backerei' ),
		'items_list_navigation' => __( 'Awards list navigation', 'backerei' ),
		'filter_items_list' => __( 'Filter Awards list', 'backerei' ),
	);
	$args = array(
		'label' => __( 'Award', 'backerei' ),
		'description' => __( '', 'backerei' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-awards',
		'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'author', 'page-attributes', 'post-formats', ),
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
	register_post_type( 'award', $args );

}
add_action( 'init', 'create_award_cpt', 0 );