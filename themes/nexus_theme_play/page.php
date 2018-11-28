<?php
/**
 * The template for displaying all pages
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
				<h1 class="type-page-title"><?php the_title() ?></h1>
			</div>
		<?php 

			$type = get_the_title();
			$args = array(
				'post_type' => 'programs'
			);

			$prog_query = new WP_query($args);
		
		while ( $prog_query->have_posts() ) : $prog_query->the_post(); ?>
			
		 	<?php the_title(); ?>
			
		<?php
		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
