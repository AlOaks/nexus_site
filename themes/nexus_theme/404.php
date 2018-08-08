<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package nexus_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="hero-404"> <!-- Hero image 404.SCSS line 10 -->
				<section class="error-404 not-found">  <!-- White background with opacitiy and text - 404.SCSS @ line 25 -->
					<header class="page-header">
						<h1 class="page-title"><?php echo esc_html( 'Page Not Found' ); ?></h1>
					</header><!-- .page-header -->

					<div class="page-content">
						<p><?php echo esc_html( 'Not to worry, visit the Nexus homepage by clicking the button below' ); ?></p>

						<div class="return-home"> <!-- Home button - 404.scss starting @ line 48 -->
							<a class= "home-button" href="<?php echo home_url() ?>">Home</a>
						</div>

					</div><!-- .page-content -->
				</section><!-- .error-404 -->
			</div> <!-- hero-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
