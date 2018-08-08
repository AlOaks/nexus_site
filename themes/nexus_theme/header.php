<?php
/**
 * The header for our theme.
 *
 * @package nexus_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
<!-- ##### Main logo, change in header.scss line 27 ###### -->
					<a href="<?php echo home_url();?> " class="header-logo"><img src="<?php echo get_template_directory_uri()?>/assets/images/nexus_logo_mobile@3x.png" alt="Nexus"></a>

					<div class="full-screen-links">
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
						<a href="<?php echo home_url(); ?>/consult/"><button class="book-consult-header">Book Consult</button></a>
					</div>
					
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>

				</nav><!-- #site-navigation -->

				<div class="menu-content">
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?><br>
						<a href="<?php echo home_url(); ?>/consult/"><button class="book-consult-header">Book Consult</button></a>
				</div>

			</header><!-- #masthead -->

			<div id="content" class="site-content">
