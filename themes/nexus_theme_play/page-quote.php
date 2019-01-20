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
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
