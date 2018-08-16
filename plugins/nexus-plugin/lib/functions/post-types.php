<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...

// Register Custom Post Type
// Register Custom Post Type
function nexus_programs() {

	$labels = array(
		'name'                  => _x( 'Programs', 'Post Type General Name', 'nexus_theme' ),
		'singular_name'         => _x( 'Program', 'Post Type Singular Name', 'nexus_theme' ),
		'menu_name'             => __( 'Programs', 'nexus_theme' ),
		'name_admin_bar'        => __( 'Programs', 'nexus_theme' ),
		'archives'              => __( 'Program Archives', 'nexus_theme' ),
		'attributes'            => __( 'Program Attributes', 'nexus_theme' ),
		'parent_item_colon'     => __( 'Parent Item:', 'nexus_theme' ),
		'all_items'             => __( 'All Programs', 'nexus_theme' ),
		'add_new_item'          => __( 'Add New Program', 'nexus_theme' ),
		'add_new'               => __( 'Add New', 'nexus_theme' ),
		'new_item'              => __( 'New Program', 'nexus_theme' ),
		'edit_item'             => __( 'Edit Program', 'nexus_theme' ),
		'update_item'           => __( 'Update Program', 'nexus_theme' ),
		'view_item'             => __( 'View Program', 'nexus_theme' ),
		'view_items'            => __( 'View Programs', 'nexus_theme' ),
		'search_items'          => __( 'Search Program', 'nexus_theme' ),
		'not_found'             => __( 'Not found', 'nexus_theme' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'nexus_theme' ),
		'featured_image'        => __( 'Program Image', 'nexus_theme' ),
		'set_featured_image'    => __( 'Set Program Image', 'nexus_theme' ),
		'remove_featured_image' => __( 'Remove Program Image', 'nexus_theme' ),
		'use_featured_image'    => __( 'Use a Program Image', 'nexus_theme' ),
		'insert_into_item'      => __( 'Insert into Program', 'nexus_theme' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Program', 'nexus_theme' ),
		'items_list'            => __( 'Programs List', 'nexus_theme' ),
		'items_list_navigation' => __( 'Programs list navigation', 'nexus_theme' ),
		'filter_items_list'     => __( 'Filter Programs list', 'nexus_theme' ),
	);
	$args = array(
		'label'                 => __( 'Program', 'nexus_theme' ),
		'description'           => __( 'Add a new Program', 'nexus_theme' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'				=> 'dashicons-welcome-learn-more',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'programs', $args );

}
add_action( 'init', 'nexus_programs', 0 );

// Register Custom Post Type
function restricted_posts() {

	$labels = array(
		'name'                  => _x( 'Restricted Posts', 'Post Type General Name', 'nexus_theme' ),
		'singular_name'         => _x( 'Restricted Post', 'Post Type Singular Name', 'nexus_theme' ),
		'menu_name'             => __( 'Restricted Posts', 'nexus_theme' ),
		'name_admin_bar'        => __( 'Restricted Blog', 'nexus_theme' ),
		'archives'              => __( 'Blog Archives', 'nexus_theme' ),
		'attributes'            => __( 'Blog Attributes', 'nexus_theme' ),
		'parent_item_colon'     => __( 'Parent Item:', 'nexus_theme' ),
		'all_items'             => __( 'All Posts', 'nexus_theme' ),
		'add_new_item'          => __( 'Add New Post', 'nexus_theme' ),
		'add_new'               => __( 'Add New', 'nexus_theme' ),
		'new_item'              => __( 'New Post', 'nexus_theme' ),
		'edit_item'             => __( 'Edit Post', 'nexus_theme' ),
		'update_item'           => __( 'Update Post', 'nexus_theme' ),
		'view_item'             => __( 'View Post', 'nexus_theme' ),
		'view_items'            => __( 'View Posts', 'nexus_theme' ),
		'search_items'          => __( 'Search Post', 'nexus_theme' ),
		'not_found'             => __( 'Not found', 'nexus_theme' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'nexus_theme' ),
		'featured_image'        => __( 'Post Image', 'nexus_theme' ),
		'set_featured_image'    => __( 'Set post image', 'nexus_theme' ),
		'remove_featured_image' => __( 'Remove post image', 'nexus_theme' ),
		'use_featured_image'    => __( 'Use as post image', 'nexus_theme' ),
		'insert_into_item'      => __( 'Insert into post', 'nexus_theme' ),
		'uploaded_to_this_item' => __( 'Uploaded to this post', 'nexus_theme' ),
		'items_list'            => __( 'Posts list', 'nexus_theme' ),
		'items_list_navigation' => __( 'Posts list navigation', 'nexus_theme' ),
		'filter_items_list'     => __( 'Filter Posts list', 'nexus_theme' ),
	);
	$args = array(
		'label'                 => __( 'Restricted Post', 'nexus_theme' ),
		'description'           => __( 'The section for all restricted content', 'nexus_theme' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'				=> 'dashicons-lock',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'restricted_blog', $args );

}
add_action( 'init', 'restricted_posts', 0 );