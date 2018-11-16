<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...



// Register Custom Taxonomy Team types
// // Register Custom Taxonomy
function province_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Cities', 'Taxonomy General Name', 'nexus_theme_play' ),
		'singular_name'              => _x( 'City', 'Taxonomy Singular Name', 'nexus_theme_play' ),
		'menu_name'                  => __( 'City', 'nexus_theme_play' ),
		'all_items'                  => __( 'All Cities', 'nexus_theme_play' ),
		'parent_item'                => __( 'Parent Item', 'nexus_theme_play' ),
		'parent_item_colon'          => __( 'Parent Item:', 'nexus_theme_play' ),
		'new_item_name'              => __( 'New Citie Name', 'nexus_theme_play' ),
		'add_new_item'               => __( 'Add New City', 'nexus_theme_play' ),
		'edit_item'                  => __( 'Edit City', 'nexus_theme_play' ),
		'update_item'                => __( 'Update City', 'nexus_theme_play' ),
		'view_item'                  => __( 'View City', 'nexus_theme_play' ),
		'separate_items_with_commas' => __( 'Separate Cities with commas', 'nexus_theme_play' ),
		'add_or_remove_items'        => __( 'Add or remove Cities', 'nexus_theme_play' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'nexus_theme_play' ),
		'popular_items'              => __( 'Popular Cities', 'nexus_theme_play' ),
		'search_items'               => __( 'Search Cities', 'nexus_theme_play' ),
		'not_found'                  => __( 'Not Found', 'nexus_theme_play' ),
		'no_terms'                   => __( 'No Cities', 'nexus_theme_play' ),
		'items_list'                 => __( 'Cities List', 'nexus_theme_play' ),
		'items_list_navigation'      => __( 'Cities List Nagivation', 'nexus_theme_play' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'query_var'					 => true,
		'show_tagcloud'              => true,
		'show_in_rest'				 => true,
		'rest_base'             	 => 'cities',
		'rest_controller_class' 	 => 'WP_REST_Terms_Controller',
	);
	register_taxonomy( 'Cities', array ( 'programs' ), $args );

}
add_action( 'init', 'province_taxonomy', 0 );

function programs_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Program Types', 'Taxonomy General Name', 'nexus_theme_play' ),
		'singular_name'              => _x( 'Program Type', 'Taxonomy Singular Name', 'nexus_theme_play' ),
		'menu_name'                  => __( 'Program Type', 'nexus_theme_play' ),
		'all_items'                  => __( 'All Program Types', 'nexus_theme_play' ),
		'parent_item'                => __( 'Parent Item', 'nexus_theme_play' ),
		'parent_item_colon'          => __( 'Parent Item:', 'nexus_theme_play' ),
		'new_item_name'              => __( 'New Program Type Name', 'nexus_theme_play' ),
		'add_new_item'               => __( 'Add New Program Type', 'nexus_theme_play' ),
		'edit_item'                  => __( 'Edit Program Type', 'nexus_theme_play' ),
		'update_item'                => __( 'Update Program Type', 'nexus_theme_play' ),
		'view_item'                  => __( 'View Program Type', 'nexus_theme_play' ),
		'separate_items_with_commas' => __( 'Separate Program Types with commas', 'nexus_theme_play' ),
		'add_or_remove_items'        => __( 'Add or remove Program Types', 'nexus_theme_play' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'nexus_theme_play' ),
		'popular_items'              => __( 'Popular Program Types', 'nexus_theme_play' ),
		'search_items'               => __( 'Search Program Types', 'nexus_theme_play' ),
		'not_found'                  => __( 'Not Found', 'nexus_theme_play' ),
		'no_terms'                   => __( 'No Program Types', 'nexus_theme_play' ),
		'items_list'                 => __( 'Program Types List', 'nexus_theme_play' ),
		'items_list_navigation'      => __( 'Program Types List Nagivation', 'nexus_theme_play' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'show_in_rest'				 => true,
		'query_var'					 => true,
		'rest_base'             	 => 'programsTypes',
		'rest_controller_class' 	 => 'WP_REST_Terms_Controller',

	);
	register_taxonomy( 'programsTypes', array ( 'programs' ), $args );

}
add_action( 'init', 'programs_taxonomy', 0 );