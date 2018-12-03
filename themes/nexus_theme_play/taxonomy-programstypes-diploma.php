<?php
/**
 * The template for displaying archive pages
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
				<h1><?php _e('Diploma', 'nexus'); ?></h1>
				<p><?php _e(term_description(), 'nexus'); ?></p>
			</div>
			<div class="type-programs-container">
				<?php

				$args = array(
					'posts_per_page' => 6,
					'post_type' => 'programs',
					'tax_query' => array(
						array(
						'taxonomy' => 'programsTypes',
						'field' => 'slug',
						'terms' => 'diploma'
						)	
					)
				);

				$certificates = new WP_query($args);
							/* Start the Loop */
				while ($certificates->have_posts() ) : $certificates->the_post(); ?>

					<div class="type-prog-container">
						<a href=<?php the_permalink(); ?>>
							<?php the_post_thumbnail(); ?>
							<p class="prog-school-single"><?php echo CFS()->get('school'); ?></p>
							<p class="prog-name-single"><?php _e(the_title(), 'nexus'); ?></p>
							<p class="prog-city-single"><?php echo CFS()->get('city'); ?></p>
						</a>
					</div>

				<?php endwhile; 
				?>
			</div>
			<section class="start-journey-section">
				<h1 class="start-title"><?php _e("Can't find what you're looking for?", 'nexus'); ?></h1>
				<p class="start-description"><?php _e('We have more to offer', 'nexus'); ?></p>
				<a class="contact-btn"><?php _e('Contact us', 'nexus'); ?></a>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
