<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nexus_theme_scratch
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="canonical" href="https://nexuseducanada.com">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'nexus_theme_scratch' ); ?></a>

	<header  class="site-header">
		<?php 
			if(is_user_logged_in()) { 
				$current_user = wp_get_current_user();		
		?>
				
			<p class="login-link"><a class="search-link" href="/../search/"><?php _e('Search', 'nexus'); ?></a><?php _e('Hello' ,'nexus'); ?>, <?php echo $current_user->user_login; ?><a href=<?php echo wp_logout_url( get_permalink() ); ?>>Logout</a></p>
				

		<?php } else { ?>
			<div class="links-header">
				<a class="search-link" href="../search/">Search</a>
				<a href="#" class="join-link"><?php _e('Join Nexus Club', 'nexus'); ?></a>
				<a href="#" class="log-in-link"><?php _e('Log In', 'nexus'); ?></a>
			</div>

		<?php } ?>
		<section class="header-content">
			
		<div class="white-overlay-menu"></div>
			
			<a class="nexuslogo-link" href=<?php echo esc_url( home_url( '/' ) ); ?> ><img alt="nexus logo" class="nexuslogo" src=<?php echo get_template_directory_uri().'/assets/images/logoNexus-amy.png' ?>></a>
			<nav id="site-navigation" class="main-navigation">
				<a class="menu-btn-active"><i class="fas fa-bars"></i></a>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
			</nav> 
		</section>

	</header><!-- #masthead -->
	<div id="content" class="site-content">
