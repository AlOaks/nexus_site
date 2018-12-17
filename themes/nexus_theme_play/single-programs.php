<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package nexus_theme_scratch
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<?php
		while ( have_posts() ) : the_post(); 

				$duration = CFS()->get('duration');
				$school = CFS()->get('school');
				$price = CFS()->get('price');
				$hrs = CFS()->get('hours');
				$school_info = CFS()->get('school_info');
				$school_vid = CFS()->get('school_video');
				$logo = CFS()->get('logo');

				$postID = get_the_ID();
				$prog_city = wp_get_post_terms($postID, 'Cities');

				$city_name = $prog_city[0]->name;



				$van_img = get_template_directory_uri().'/assets/images/vancouver.jpg';
				$mon_img = get_template_directory_uri().'/assets/images/montreal.jpg';
				$ott_img = get_template_directory_uri().'/assets/images/ottawa.jpg';
				$win_img = get_template_directory_uri().'/assets/images/winnipeg.jpg';
				$cal_img = get_template_directory_uri().'/assets/images/calgary.jpg';
				$tor_img = get_template_directory_uri().'/assets/images/toronto.jpg';
				$vic_img = get_template_directory_uri().'/assets/images/victoria.jpg';
				
		?>

				<section class="program-hero">
					<img class="school-logo" src=<?php echo $logo; ?> />
					<p class="program-name"><?php the_title(); ?></p>
					<ul class="program-info">
						<li class="program-info-item">
							<p class="li-title"><?php _e('Price', 'nexus'); ?></p>
							<p class="li-field"><?php echo $price; ?></p>
						</li>
						<li class="program-info-item">
							<p class="li-title"><?php _e('Duration', 'nexus'); ?></p>
							<p class="li-field"><?php echo $duration; ?> months</p>
						</li>
						<li class="program-info-item">
							<p class="li-title"><?php echo _e('City', 'nexus'); ?></p>
							<p class="li-field"><?php echo _e($city_name, 'nexus'); ?></p>
						</li>
						<li class="program-info-item">
							<p class="li-title"><?php _e('Hrs / Week', 'nexus'); ?></p>
							<p class="li-field"><?php echo $hrs; ?></p>
						</li>
					</ul>
				</section>
				

				<section class="about-container program-container">
					
					<div class="about-program">
						<div class="program-description">
							<p class="about-program-title"><?php _e('About Program', 'nexus'); ?></p>
							<?php the_content(); ?>
						</div>
						<?php the_post_thumbnail(); ?>
					</div>
					
					<a class="program-apply-btn"><?php _e('Apply Now', 'nexus'); ?></a>
				</section>

				<section class="about-container school-container">
					<div class="about-school">
						<div class="school-video"><?php echo $school_vid; ?></div>
						<div class="about-school-description">
							<p class="about-school-title"><?php echo $school; ?></p>
							<p class="about-school-desc"><?php echo $school_info; ?></p>
						</div>
					</div>
					<a class="explore-more"><?php _e('Explore Other Programs', 'nexus'); ?></a>
				</section>

				<section class="about-container city-container">
					<div class="about-city">
						<div class="city-description">
							<p class="about-city-title"><?php echo $prog_city[0]->name; ?></p>
							<p class="city-description"><?php echo _e($prog_city[0]->description, 'nexus'); ?></p>
						</div>
						<img class="city-img" src=<?php
								if ($city_name == 'Vancouver') { 
									echo $van_img;
								} else if ($city_name == 'Toronto') {
									echo $tor_img;
								} else if ($city_name == 'Montreal') {
									echo $mon_img;
								} else if ($city_name == 'Ottawa') {
									echo $ott_img;
								} else if ($city_name == 'Calgary') {
									echo $cal_img;
								} else if ($city_name == 'Victoria') {
									echo $vic_img;
								} else if ($city_name == 'Winnipeg') {
									echo $win_img;
								}
							?>
						>
					</div>
				</section>

				<?php endwhile; ?>

				<section class="student-review">
					<p class="review-title"><?php _e('Student Review', 'nexus'); ?></p>
					<div class="review-container-program">
						<img class="review-img-prg" src=<?php echo get_template_directory_uri().'/assets/images/photo-review@3x.png'; ?> >
						<p class="review-paragraph">
							<i class='fas fa-quote-left'></i>
							<?php _e('When I started the UX Professional Program I appreciated that it wasn’t all lecture-style teaching, and involved a lot of interactive learning. 
							Also, the projects were with real businesses.', 'nexus'); ?>
							<i class="fas fa-quote-right"></i>
						</p>
					</div>
				</section>

				<section class="people-likes">
					<p class="people-title"><?php _e('People Also Like', 'nexus'); ?></p>
					<div class="programs-container-people">
					<button class="peo-btn-left peo-btn"><i class="fas fa-chevron-left"></i></button>
					<button class="peo-btn-right peo-btn"><i class="fas fa-chevron-right"></i></button>
						<?php 
							$args = array('post_type' => 'programs', 'posts_per_page' => 3);
							$recommended = new WP_query($args);
							


							while( $recommended->have_posts() ) : $recommended-> the_post(); 

								$terms = get_the_terms($recommended->ID, 'programsTypes');
								 foreach($terms as $term) : 

						?>	
							<div class="people-program-container">
								<?php the_post_thumbnail(); ?>
								<p class="people-school-name"><?php echo CFS()->get('school'); ?></p>
								<p class="people-prg-name"><a href=<?php echo get_the_permalink(); ?>><?php the_title(); ?></a></p>
								<p class="people-prg-category"><?php echo $term->name; ?></p>
							</div>
						<?php		
							endforeach;	

							endwhile; // End of the loop.
						?>
					</div>			
				</section>

		<section class="start-journey-section">
			<h1 class="start-title"><?php _e('Start Your Journey', 'nexus'); ?></h1>
			<p class="start-description"><?php _e('Let us help you find your path to success.', 'nexus'); ?></p>
			<a class="contact-btn start-trigger"><?php _e('Contact Us', 'nexus'); ?></a>
		</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
