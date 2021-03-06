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
		'show_in_rest'			=> true,
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
function premium_posts() {

	$labels = array(
		'name'                  => _x( 'Premium Content', 'Post Type General Name', 'nexus_theme' ),
		'singular_name'         => _x( 'Premium Content', 'Post Type Singular Name', 'nexus_theme' ),
		'menu_name'             => __( 'Premium Content', 'nexus_theme' ),
		'name_admin_bar'        => __( 'Premium Blog', 'nexus_theme' ),
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
		'label'                 => __( 'Premium Content', 'nexus_theme' ),
		'description'           => __( 'The section for all Premium content', 'nexus_theme' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments'),
		'taxonomies'            => array('category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'				=> 'dashicons-awards',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'premium_content', $args );

}
add_action( 'init', 'premium_posts', 0 );

// Register Custom Post Type
function team_member_pt() {

	$labels = array(
		'name'                  => _x( 'Team Members', 'Post Type General Name', 'nexus' ),
		'singular_name'         => _x( 'Team Member', 'Post Type Singular Name', 'nexus' ),
		'menu_name'             => __( 'Team Members', 'nexus' ),
		'name_admin_bar'        => __( 'Team', 'nexus' ),
		'archives'              => __( 'Team Archives', 'nexus' ),
		'attributes'            => __( 'Team Attributes', 'nexus' ),
		'parent_item_colon'     => __( 'Parent Item:', 'nexus' ),
		'all_items'             => __( 'All Members', 'nexus' ),
		'add_new_item'          => __( 'Add New Member', 'nexus' ),
		'add_new'               => __( 'Add New', 'nexus' ),
		'new_item'              => __( 'New Member', 'nexus' ),
		'edit_item'             => __( 'Edit Member', 'nexus' ),
		'update_item'           => __( 'Update Member', 'nexus' ),
		'view_item'             => __( 'View Member', 'nexus' ),
		'view_items'            => __( 'View Members', 'nexus' ),
		'search_items'          => __( 'Search Member', 'nexus' ),
		'not_found'             => __( 'Not found', 'nexus' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'nexus' ),
		'featured_image'        => __( 'Member Photo', 'nexus' ),
		'set_featured_image'    => __( 'Set Member Photo', 'nexus' ),
		'remove_featured_image' => __( 'Remove Member Photo', 'nexus' ),
		'use_featured_image'    => __( 'Use as Member Photo', 'nexus' ),
		'insert_into_item'      => __( 'Insert into Member', 'nexus' ),
		'uploaded_to_this_item' => __( 'Uploaded to thisMember', 'nexus' ),
		'items_list'            => __( 'Team Navigation', 'nexus' ),
		'items_list_navigation' => __( 'Team List Navigation', 'nexus' ),
		'filter_items_list'     => __( 'Filter Team List', 'nexus' ),
	);
	$args = array(
		'label'                 => __( 'Team Member', 'nexus' ),
		'description'           => __( 'Team Member Description', 'nexus' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
		'menu_icon'				=> 'dashicons-universal-access-alt'
	);
	register_post_type( 'team', $args );

}
add_action( 'init', 'team_member_pt', 0 );

// Register Custom Post Type
function featured_programs() {

	$labels = array(
		'name'                  => _x( 'MIP Schools', 'Post Type General Name', 'nexus' ),
		'singular_name'         => _x( 'Featured Program', 'Post Type Singular Name', 'nexus' ),
		'menu_name'             => __( 'MIP Schools', 'nexus' ),
		'name_admin_bar'        => __( 'MIP Schools', 'nexus' ),
		'archives'              => __( 'Page Archives', 'nexus' ),
		'attributes'            => __( 'Page Attributes', 'nexus' ),
		'parent_item_colon'     => __( 'Parent Item:', 'nexus' ),
		'all_items'             => __( 'All Schools', 'nexus' ),
		'add_new_item'          => __( 'Add New School', 'nexus' ),
		'add_new'               => __( 'Add New', 'nexus' ),
		'new_item'              => __( 'New Page', 'nexus' ),
		'edit_item'             => __( 'Edit Page', 'nexus' ),
		'update_item'           => __( 'Update Page', 'nexus' ),
		'view_item'             => __( 'View Page', 'nexus' ),
		'view_items'            => __( 'View Pages', 'nexus' ),
		'search_items'          => __( 'Search Page', 'nexus' ),
		'not_found'             => __( 'Not found', 'nexus' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'nexus' ),
		'featured_image'        => __( 'Featured Program Image', 'nexus' ),
		'set_featured_image'    => __( 'Set Hero Image', 'nexus' ),
		'remove_featured_image' => __( 'Remove Hero Image', 'nexus' ),
		'use_featured_image'    => __( 'Use as Hero Image', 'nexus' ),
		'insert_into_item'      => __( 'Insert into page', 'nexus' ),
		'uploaded_to_this_item' => __( 'Uploaded to this page', 'nexus' ),
		'items_list'            => __( 'Pages list', 'nexus' ),
		'items_list_navigation' => __( 'Page list navigation', 'nexus' ),
		'filter_items_list'     => __( 'Filter Pages List', 'nexus' ),
	);
	$args = array(
		'label'                 => __( 'Featured Program', 'nexus' ),
		'description'           => __( 'Marketing Incentive Program Schools', 'nexus' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
		'menu_icon'				=> 'dashicons-welcome-widgets-menus'
	);
	register_post_type( 'featured_programs', $args );

}
add_action( 'init', 'featured_programs', 0 );

// Register Custom Post Type
function student_reviews() {

	$labels = array(
		'name'                  => _x( 'Student Reviews', 'Post Type General Name', 'nexus' ),
		'singular_name'         => _x( 'Student Review', 'Post Type Singular Name', 'nexus' ),
		'menu_name'             => __( 'Student Reviews', 'nexus' ),
		'name_admin_bar'        => __( 'Student Reviews', 'nexus' ),
		'archives'              => __( 'Page Archives', 'nexus' ),
		'attributes'            => __( 'Page Attributes', 'nexus' ),
		'parent_item_colon'     => __( 'Parent Item:', 'nexus' ),
		'all_items'             => __( 'All Reviews', 'nexus' ),
		'add_new_item'          => __( 'Add New Review', 'nexus' ),
		'add_new'               => __( 'Add New', 'nexus' ),
		'new_item'              => __( 'New Review', 'nexus' ),
		'edit_item'             => __( 'Edit Review', 'nexus' ),
		'update_item'           => __( 'Update Review', 'nexus' ),
		'view_item'             => __( 'View Review', 'nexus' ),
		'view_items'            => __( 'View Reviews', 'nexus' ),
		'search_items'          => __( 'Search Review', 'nexus' ),
		'not_found'             => __( 'Not found', 'nexus' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'nexus' ),
		'featured_image'        => __( 'Student Photo', 'nexus' ),
		'set_featured_image'    => __( 'Set Photo', 'nexus' ),
		'remove_featured_image' => __( 'Remove Student Photo', 'nexus' ),
		'use_featured_image'    => __( 'Use as Photo', 'nexus' ),
		'insert_into_item'      => __( 'Insert into page', 'nexus' ),
		'uploaded_to_this_item' => __( 'Uploaded to this page', 'nexus' ),
		'items_list'            => __( 'Pages list', 'nexus' ),
		'items_list_navigation' => __( 'Page list navigation', 'nexus' ),
		'filter_items_list'     => __( 'Filter Pages List', 'nexus' ),
	);
	$args = array(
		'label'                 => __( 'Student Review', 'nexus' ),
		'description'           => __( 'Students Review', 'nexus' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-nametag',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'student_reviews', $args );

}
add_action( 'init', 'student_reviews', 0 );

// Register Custom Post Type
function schools_nexus() {

	$labels = array(
		'name'                  => _x( 'Schools', 'Post Type General Name', 'nexus' ),
		'singular_name'         => _x( 'School', 'Post Type Singular Name', 'nexus' ),
		'menu_name'             => __( 'Schools', 'nexus' ),
		'name_admin_bar'        => __( 'Schools', 'nexus' ),
		'archives'              => __( 'Schools Archives', 'nexus' ),
		'attributes'            => __( 'School Attributes', 'nexus' ),
		'parent_item_colon'     => __( 'Parent Item:', 'nexus' ),
		'all_items'             => __( 'All Schools', 'nexus' ),
		'add_new_item'          => __( 'Add New School', 'nexus' ),
		'add_new'               => __( 'Add New', 'nexus' ),
		'new_item'              => __( 'New School', 'nexus' ),
		'edit_item'             => __( 'Edit School', 'nexus' ),
		'update_item'           => __( 'Update School', 'nexus' ),
		'view_item'             => __( 'View School', 'nexus' ),
		'view_items'            => __( 'View Schools', 'nexus' ),
		'search_items'          => __( 'Search School', 'nexus' ),
		'not_found'             => __( 'Not found', 'nexus' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'nexus' ),
		'featured_image'        => __( 'School Image', 'nexus' ),
		'set_featured_image'    => __( 'Set Image', 'nexus' ),
		'remove_featured_image' => __( 'Remove Image', 'nexus' ),
		'use_featured_image'    => __( 'Use as Image', 'nexus' ),
		'insert_into_item'      => __( 'Insert into School', 'nexus' ),
		'uploaded_to_this_item' => __( 'Uploaded to School', 'nexus' ),
		'items_list'            => __( 'School List', 'nexus' ),
		'items_list_navigation' => __( 'School List Navigation', 'nexus' ),
		'filter_items_list'     => __( 'Filter items list', 'nexus' ),
	);
	$args = array(
		'label'                 => __( 'School', 'nexus' ),
		'description'           => __( 'Schools On Promotion', 'nexus' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
		'menu_icon'				=> 'dashicons-admin-home'
	);
	register_post_type( 'schools', $args );

}
add_action( 'init', 'schools_nexus', 0 );