<?php
/**
 * Nexus Intercambio functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package nexus_Theme
 */

if ( ! function_exists( 'nexus_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function nexus_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html( 'Primary Menu' ),
	) );

	// Switch search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
endif; // nexus_setup
add_action( 'after_setup_theme', 'nexus_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function nexus_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'nexus_content_width', 640 );
}
add_action( 'after_setup_theme', 'nexus_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function nexus_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html( 'Sidebar' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'nexus_widgets_init' );

/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function nexus_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
	if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}
add_filter( 'stylesheet_uri', 'nexus_minified_css', 10, 2 );

/**
 * Enqueue scripts and styles.
 */
function nexus_scripts() {
	wp_enqueue_style( 'red-starter-style', get_stylesheet_uri() );
	wp_enqueue_style( 'owl.carousel.min', get_template_directory_uri() . '/lib/owl.carousel.min.css' );
	wp_enqueue_style( 'owl.theme.default.min', get_template_directory_uri() . '/lib/owl.theme.default.min.css' );

	wp_enqueue_script('jquery');


	wp_enqueue_script( 'owl.carousel', get_template_directory_uri() . '/lib/owl.carousel.js', array('jquery'), '20130115', true );
	wp_enqueue_script( 'selectric', get_template_directory_uri() . '/lib/jquery.selectric.min.js', array('jquery'), '20130115', true );

	wp_enqueue_script( 'nexus-script', get_template_directory_uri() . '/build/js/nexus-script.min.js', array(), '20130115', true );
	

	wp_enqueue_script( 'font-awesome-cdn', 'https://use.fontawesome.com/9420eb347a.js', array(), 4.7, true);

	wp_enqueue_script( 'red-starter-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	if(function_exists('rest_url')){
		wp_enqueue_script( 'nexus_api', get_template_directory_uri(). '/build/js/api.min.js', array(), false, true);
		wp_localize_script( 'nexus_api', 'api_vars', array(
			'root_url' => esc_url_raw( rest_url() ),
			'home_url' => esc_url_raw( home_url() ),
			'nonce'    => wp_create_nonce( 'wp_rest' )
		) );
	}
}
add_action( 'wp_enqueue_scripts', 'nexus_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Removes error for Windows: 
 * Notice: ob_end_flush(): failed to send buffer of zlib output compression (1) functions.php on line 3728.
 */
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );
 

//Faq Single h1 Title first word select function
function pixelninja_spanify_title($title) {

  $title_words = explode(' ', get_the_title());
  if (count($title_words) > 1) {


		$title_words[0] = '<span class="title-span">' . $title_words[0] . '</span>';
	
    return implode(' ', $title_words);
  } else {

    return get_the_title();
	}

}
function pixelninja_single_cat_title() {
	echo pixelninja_spanify_title(single_cat_title('', true));
}