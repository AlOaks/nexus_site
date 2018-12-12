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
				<h1><?php single_term_title(); ?></h1>
				<p><?php _e(term_description(), 'nexus'); ?></p>
			</div>
			<form id="filter" class="filters-container" action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST">
				<select class="location-selector" name="categoryfilter">
					<option selected><?php _e('Type of Program', 'nexus'); ?></option>
					<?php 

                                $types = get_terms([
                                    'taxonomy' => 'programsTypes',
                                    'hide_empty' => false
                                ]);

                            foreach($types as $type) : ?> 

                        <option value=<?php echo $type->slug; ?>><?php echo $type->name; ?></option>       

                        <?php endforeach; ?>
				</select>
				<select class="duration-selector" name="duration-select">
					<option value="999" selected><?php _e('Duration', 'nexus'); ?></option>
					<option value="4"><?php _e('Up to 3 months', 'nexus'); ?></option>
					<option value="7"><?php _e('Up to 6 months', 'nexus'); ?></option>
					<option value="12"><?php _e('Up to 12 months', 'nexus'); ?></option>
					<option value="13"><?php _e('More than 12 months', 'nexus'); ?></option>
				</select>
				<button class="apply-filters-btn"><?php _e('Apply Filters', 'nexus'); ?></button>
				<input type="hidden" name="action" value="myfilter">
			</form>
			<div class="type-programs-container">
				<?php

							
				while (have_posts() ) : the_post(); ?>

				<?php 
					$postID = get_the_ID();
					$prog_type = wp_get_post_terms($postID, 'programsTypes');
					
					
				?>						
					<div class="type-prog-container">
						<a href=<?php the_permalink(); ?>>
							<?php the_post_thumbnail(); ?>
							<p class="prog-school-single"><?php echo _e($prog_type[0]->name, 'nexus'); ?></p>
							<p class="prog-name-single"><?php _e(the_title(), 'nexus'); ?></p>
							<p class="prog-city-single"><?php echo CFS()->get('duration').' Months'; ?></p>
						</a>
					</div>

				<?php endwhile; 
				wp_reset_query();
				?>
			</div>
			<div id="more_programs">More Programs</div>
			<section class="start-journey-section">
				<h1 class="start-title"><?php _e("Can't find what you're looking for?", 'nexus'); ?></h1>
				<p class="start-description"><?php _e('Let us help you fin the perfet fit!', 'nexus'); ?></p>
				<a class="contact-btn"><?php _e('Contact us', 'nexus'); ?></a>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
