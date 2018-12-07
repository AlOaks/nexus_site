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
				<h1><?php _e('Ottawa', 'nexus'); ?></h1>
				<p><?php _e(term_description(), 'nexus'); ?></p>
			</div>
			<div class="filters-container">
				<select class="location-selector">
					<option value="" selected><?php _e('Type of Program', 'nexus'); ?></option>
					<?php 

                                $types = get_terms([
                                    'taxonomy' => 'programsTypes',
                                    'hide_empty' => false
                                ]);

                            foreach($types as $type) : ?> 

                        <option value=<?php echo $type->name; ?>><?php echo $type->name; ?></option>       

                        <?php endforeach; ?>
				</select>
				<select class="duration-selector">
					<option value="" selected><?php _e('Duration', 'nexus'); ?></option>
					<option value="3"><?php _e('1-3 months', 'nexus'); ?></option>
					<option value="6"><?php _e('4-6 months', 'nexus'); ?></option>
					<option value="12"><?php _e('7-12 months', 'nexus'); ?></option>
					<option value="13"><?php _e('More than 12 months', 'nexus'); ?></option>
				</select>
				<button class="apply-filters-btn"><?php _e('Apply Filters', 'nexus'); ?></button>
			</div>
			<div class="type-programs-container">
				<?php

				$args = array(
					'posts_per_page' => 6,
					'post_type' => 'programs',
					'tax_query' => array(
						array(
						'taxonomy' => 'Cities',
						'field' => 'slug',
						'terms' => 'ottawa'
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
				<p class="start-description"><?php _e('Let us help you fin the perfet fit!', 'nexus'); ?></p>
				<a class="contact-btn"><?php _e('Contact us', 'nexus'); ?></a>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
