<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package nexus_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function nexus_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'nexus_body_classes' );

// this function initializes the iframe elements 
function allow_post_tags( $allowedposttags ){
	$allowedposttags['iframe'] = array(
	'src' => true,
	'width' => true,
	'height' => true,
	'class' => true,
	'frameborder' => true,
	'webkitAllowFullScreen' => true,
	'mozallowfullscreen' => true,
	'allowFullScreen' => true
	);
	return $allowedposttags;
}
add_filter('wp_kses_allowed_html','allow_post_tags', 1);