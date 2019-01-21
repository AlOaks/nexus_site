<?php
/**
 * nexus_theme_scratch functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package nexus_theme_scratch
 */

if ( ! function_exists( 'nexus_theme_scratch_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function nexus_theme_scratch_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on nexus_theme_scratch, use a find and replace
		 * to change 'nexus_theme_scratch' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'nexus_theme_scratch', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'nexus_theme_scratch' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'nexus_theme_scratch_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'nexus_theme_scratch_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function nexus_theme_scratch_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'nexus_theme_scratch_content_width', 640 );
}
add_action( 'after_setup_theme', 'nexus_theme_scratch_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function nexus_theme_scratch_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'nexus_theme_scratch' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'nexus_theme_scratch' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'nexus_theme_scratch_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function nexus_theme_scratch_scripts() {


	wp_enqueue_script('general-js', get_template_directory_uri().'/build/js/general.min.js', array('jquery'), null, true);
	wp_enqueue_style( 'nexus_theme_scratch-style', get_stylesheet_uri() );
	wp_enqueue_script('ajax-js', get_template_directory_uri().'/build/js/ajax-call.min.js', array('jquery'), null, true);
	wp_enqueue_script('ajax-pagination', get_template_directory_uri().'/build/js/ajax-pagination.min.js', array('jquery'), null, true);
	wp_enqueue_script( 'nexus_theme_scratch-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'nexus_theme_scratch-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );


	wp_localize_script( 'general-js', 'nexus_vars', array(
		'rest_url' => esc_url_raw( rest_url() ),
		'wpapi_nonce' => wp_create_nonce( 'wp_rest' ),
		'post_id' => get_the_ID(),
	) );

	wp_localize_script('ajax-pagination', 'ajaxpagination', array(
		'ajaxurl' => admin_url('admin-ajax.php'),
	));

	wp_localize_script('general-js', 'prices_vars', array(
		'price4' => CFS()->get('price_4'),
		'price8' => CFS()->get('price_8'),
		'price12' => CFS()->get('price_12'),
		'price24' => CFS()->get('price_24'),
	));


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'nexus_theme_scratch_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function custom_excerpt_length( $length ) {
	return 15;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

remove_filter( 'the_content', 'wpautop' );

function more_post_ajax(){
    $offset = $_POST["offset"];
    $ppp = $_POST["ppp"];
    header("Content-Type: text/html");

    $args = array(
        'posts_per_page' => $ppp,
		'offset' => $offset,
		'post_type' => 'post'
	);
	

	query_posts($args);
	while (have_posts()) { the_post(); 

		$video = CFS()->get('post_video');
		$title = get_the_title();
		$excerpt = get_the_excerpt();
		$img = get_the_post_thumbnail();

		
		if (!empty($video)) { ?>
			<div class="video-container">
				<div class="post-video"><?php echo $video ?></div>
				<h1 class="video-title"><?php echo $title ?></h1>
			</div>
		<?php	
		} else if(empty($video)) {
		?>
			<div class="post-container">
				<?php echo $img; ?>
				<h1 class="post-title"><?php echo $title; ?></h1>
				<p class="post-excerpt"><?php echo $excerpt; ?></p>
				<a class="post-link" href="<?php echo the_permalink(); ?>">Read</a>
			</div>
		<?php
		}  

	exit;
	}
}

add_action('wp_ajax_nopriv_more_post_ajax', 'more_post_ajax'); 
add_action('wp_ajax_more_post_ajax', 'more_post_ajax');


function misha_filter_function() {

	$filter = $_POST['categoryfilter'];
	$cityfilter = $_POST['cityfilter'];
	
	$args = array(
		'post_type' => 'programs',
		'orderby' => 'date',
		'order' => $_POST['date']
	);

	if ( isset( $_POST['categoryfilter'] ) )
		$args['tax_query'] = array(
			array(
				'taxonomy' => 'programsTypes',
				'field' => 'slug',
				'terms' => $filter	
			),
			array(
				'taxonomy' => 'Cities',
				'field' => 'slug',
				'terms' => $cityfilter
			)

		);


	if ( isset( $_POST['duration-select'] ) && $_POST['duration-select'] ) 
		$args['meta_query'] = array( 'relation' => 'AND');
	

	if ( isset( $_POST['duration-select'] ) && $_POST['duration-select'] < 13) 
	    $args['meta_query'][] = array(
			'key' => 'duration',
			'value' => $_POST['duration-select'],
			'type' => 'numeric',
			'compare' => '<'
		);

	// if ( isset( $duration ) && $duration >= 13) 
	// 	$args['meta_query'][] = array(
	// 		'meta_key' => 'duration',
	// 		'meta_value' => $duration,
	// 		'meta_type' => 'numeric',
	// 		'compare' => '>='
	// );
	

	$query = new WP_query($args);

	if($query->have_posts()) : 

		while( $query->have_posts() ): $query->the_post();
		
		$postID = get_the_ID();
		$prog_type = wp_get_post_terms($postID, 'programsTypes');			
		$feat = CFS()->get('featured'); 
					
					if($feat == false) { ?>						
						<div class="type-prog-container">
							<a href=<?php the_permalink(); ?>>
								<?php the_post_thumbnail(); ?>
								<div class="program-info-div">
									<p class="prog-school-single"><?php echo _e($prog_type[0]->name, 'nexus'); ?></p>
									<p class="prog-name-single"><?php _e(the_title(), 'nexus'); ?></p>
									<p class="prog-school"><?php echo CFS()->get('school'); ?></p>
									<p class="prog-city-single"><?php echo CFS()->get('duration').' Months'; ?></p>
								</div>
							</a>
						</div>
					<?php } else { ?>
						<div class="type-prog-container featured">
							<a href=<?php the_permalink(); ?>>
								<?php the_post_thumbnail(); ?>
								<div class="program-info-div">
									<p class="prog-school-single"><?php echo _e($prog_type[0]->name, 'nexus'); ?></p>
									<p class="prog-name-single"><?php _e(the_title(), 'nexus'); ?></p>
									<p class="prog-school"><?php echo CFS()->get('school'); ?></p>
									<p class="prog-city-single"><?php echo CFS()->get('duration').' Months'; ?></p>
								</div>
								<p id="feat-label"><?php _e('Featured', 'nexus'); ?></p>
							</a>
						</div>
					<?php } ?>		
				<?php endwhile; 
				wp_reset_postdata();

	else : ?>
	<div class="no-programs">
		<p class="no-programs-title">No Programs Found!</p>
		<h2 class="no-programs-head"><span>We're sorry!</span> Please, contact us to help you find the perfect fit for you!</h2>
		<a class="contact-btn">Book Consult</a>
	</div>

	<?php 
	endif;
	die();
}

add_action('wp_ajax_myfilter', 'misha_filter_function'); 
add_action('wp_ajax_nopriv_myfilter', 'misha_filter_function');


function update_postviews($postid) {
	if (function_exists('wpp_get_views')) {
			$post_views7 = wpp_get_views( $postid, 'weekly' );
			if ( ! update_post_meta ($postid, 'postviews_7days', $post_views7) ) {
				   add_post_meta($postid, 'postviews_7days', $post_views7, true );
				   }
		   }
   }
   
add_action('wpp_update_views','update_postviews');


function more_post_club(){
    $offset = $_POST["offset"];
    $ppp = $_POST["ppp"];
    header("Content-Type: text/html");

    $args = array(
        'posts_per_page' => $ppp,
		'offset' => $offset,
		'post_type' => 'premium_content'
	);

	
	$premposts = new WP_query($args);

	while ( $premposts->have_posts() ): $premposts->the_post();

		$video = CFS()->get('post_video');
		$title = get_the_title();
		$excerpt = get_the_excerpt();
		$img = get_the_post_thumbnail();

		if (!empty($video)) { ?>
			<div class="video-container">
				<div class="post-video"><?php echo $video ?></div>
				<h1 class="video-title"><?php echo $title ?></h1>
			</div>
		<?php	
		} else if(empty($video)) {
		?>
			<div class="post-container">
				<?php echo $img; ?>
				<h1 class="post-title"><?php echo $title; ?></h1>
				<p class="post-excerpt"><?php echo $excerpt; ?></p>
				<a class="post-link" href="<?php echo the_permalink(); ?>">Read</a>
			</div>
		<?php
		}  

	endwhile;

	wp_reset_query();
	}


add_action('wp_ajax_nopriv_more_post_ajax', 'more_post_club'); 
add_action('wp_ajax_more_post_ajax', 'more_post_club');

   