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
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'nexus_theme_scratch' ); ?></a>

	<header id="masthead" class="site-header">
		<?php 
			if(is_user_logged_in()) { 
				$current_user = get_currentuserinfo();		
		?>

			<p class="login-link"><?php _e('Hello' ,'nexus'); ?>, <?php echo $current_user->user_login; ?> </p>
		
		<?php } else { ?>
			
			<a class="login-link join-link"><?php _e('Join Nexus Club', 'nexus'); ?></a>
		

		<?php } ?>
		<section class="header-content">
		
			<a href=<?php echo esc_url( home_url( '/' ) ); ?> ><img class="nexuslogo" src=<?php echo get_template_directory_uri().'/assets/images/nexus_logo_04.png' ?>></a>
			<nav id="site-navigation" class="main-navigation">
			<a class="menu-btn-active"><i class="fas fa-bars"></i></a>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
			</nav><!-- #site-navigation -->
		</section>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
