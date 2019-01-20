<?php
/**
 * Template Name: Quote
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nexus_theme_scratch
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="page-title-container">
				<h1 class="type-page-title"><?php _e(the_title(), 'nexus'); ?></h1>
			</div>
			<div class="quote-page-form">
		<?php while ( have_posts() ) : the_post(); ?>
			

		 	<?php the_content(); ?>
			
		<?php
		endwhile; // End of the loop.
		?>
			</div>
			<section class="start-journey-section">
				<h1 class="start-title"><?php _e("Can't find what you're looking for?", 'nexus'); ?></h1>
				<p class="start-description"><?php _e('We have more to offer', 'nexus'); ?></p>
				<a class="contact-btn"><?php _e('Join Nexus Club', 'nexus'); ?></a>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
