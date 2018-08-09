<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...



// Register Custom Taxonomy Team types
// Register Custom Taxonomy
function province_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Provinces', 'Taxonomy General Name', 'nexus_theme' ),
		'singular_name'              => _x( 'Province', 'Taxonomy Singular Name', 'nexus_theme' ),
		'menu_name'                  => __( 'Province', 'nexus_theme' ),
		'all_items'                  => __( 'All Provinces', 'nexus_theme' ),
		'parent_item'                => __( 'Parent Item', 'nexus_theme' ),
		'parent_item_colon'          => __( 'Parent Item:', 'nexus_theme' ),
		'new_item_name'              => __( 'New Province Name', 'nexus_theme' ),
		'add_new_item'               => __( 'Add New Province', 'nexus_theme' ),
		'edit_item'                  => __( 'Edit Province', 'nexus_theme' ),
		'update_item'                => __( 'Update Province', 'nexus_theme' ),
		'view_item'                  => __( 'View Province', 'nexus_theme' ),
		'separate_items_with_commas' => __( 'Separate Provinces with commas', 'nexus_theme' ),
		'add_or_remove_items'        => __( 'Add or remove Provinces', 'nexus_theme' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'nexus_theme' ),
		'popular_items'              => __( 'Popular Provinces', 'nexus_theme' ),
		'search_items'               => __( 'Search Provinces', 'nexus_theme' ),
		'not_found'                  => __( 'Not Found', 'nexus_theme' ),
		'no_terms'                   => __( 'No Provinces', 'nexus_theme' ),
		'items_list'                 => __( 'Provinces List', 'nexus_theme' ),
		'items_list_navigation'      => __( 'Provinces List Nagivation', 'nexus_theme' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'province', array ( 'programs' ), $args );

}
add_action( 'init', 'province_taxonomy', 0 );