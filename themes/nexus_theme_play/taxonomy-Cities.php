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
			<div class="search-city-container-tax">
                    <select class="prg-type-select-tax">
                        <option value=""><?php _e('Choose city', 'nexus'); ?></option>
                        <?php 
                                                       
                                $types = get_terms([
                                    'taxonomy' => 'Cities',
                                    'hide_empty' => false
                                ]);

                            foreach($types as $type) :

                        ?>
                        <option value=<?php echo $type->name; ?>><?php echo $type->name; ?></option>


                            <?php endforeach; ?>
                    </select>
                <button class="tax-programs-btn"><?php _e('Change City', 'nexus'); ?></button>
			</div>
			<button class="advanced-filters"><?php _e('Advanced Filters', 'nexus'); ?><i class="fas fa-angle-double-down"></i></button>

			<?php $tax = $wp_query->get_queried_object(); ?>
			
			<form id="filter" class="filters-container" action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST">
				<select class="city-selector" name="cityfilter">
					<option selected value="<?php echo $tax->slug; ?>">Toronto</option>
				</select>
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
				$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

				$obj = $wp_query->get_queried_object();

				$args= array(
					'posts_per_page' => 9,
					'paged' => $paged,
					'tax_query' => array(
						array(
							'taxonomy' => 'Cities',
							'field' => 'slug',
							'terms' => $obj->name
							)
						)	
					);

				// query_posts($args);
				$queryProg = new WP_query($args);
						
				while ($queryProg->have_posts() ) : $queryProg->the_post(); ?>

				<?php 
					$postID = get_the_ID();
					$prog_type = wp_get_post_terms($postID, 'programsTypes');
					$feat = CFS()->get('featured');
					
					if($feat == false) { ?>						
						<div class="type-prog-container">
							<a href=<?php the_permalink(); ?>>
								<?php the_post_thumbnail(); ?>
								<div class="program-info-div">
									<p class="prog-school-single"><?php echo _e($prog_type[0]->name, 'nexus'); ?></p>
									<p class="prog-name-single"><?php _e(the_title(), 'nexus'); ?></p>
									<p class="prog-school"><?php echo CFS()->get('school'); ?></p>
								</div>
							</a>
						</div>
					<?php } else { ?>
						<div class="type-prog-container featured">
							<a href=<?php the_permalink(); ?>>
								<?php the_post_thumbnail(); ?>
								<div class="program-info-div">
									<p class="prog-school-single"><?php _e($prog_type[0]->name, 'nexus'); ?></p>
									<p class="prog-name-single"><?php _e(the_title(), 'nexus'); ?></p>
									<p class="prog-school"><?php _e(CFS()->get('school'), 'nexus'); ?></p>
								</div>
								<p id="feat-label"><?php _e('Featured', 'nexus'); ?></p>
							</a>
						</div>
					<?php } ?>	

						
				<?php 
					
					endwhile; 
					
				?>
			</div>
			<?php echo get_the_posts_pagination(); ?>
			<section class="start-journey-section">
				<h1 class="start-title"><?php _e("Can't find what you're looking for?", 'nexus'); ?></h1>
				<p class="start-description"><?php _e('Let us help you fin the perfect fit!', 'nexus'); ?></p>
				<a class="contact-btn contact-trigger"><?php _e('Contact us', 'nexus'); ?></a>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
