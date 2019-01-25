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

				$duration = CFS()->get('durations');
				$school = CFS()->get('school');
				$price = CFS()->get('price');
				$hrs = CFS()->get('hours');
				$school_info = CFS()->get('school_info');
				$school_vid = CFS()->get('school_video');
				$logo = CFS()->get('logo');

				$postID = get_the_ID();
				$prog_cities = wp_get_post_terms($postID, 'Cities', array('fields' => 'names'));

				$prog_img = get_the_post_thumbnail();

				
				$van_img = get_template_directory_uri().'/assets/images/vancouver.jpg';
				$mon_img = get_template_directory_uri().'/assets/images/montreal.jpg';
				$ott_img = get_template_directory_uri().'/assets/images/ottawa.jpg';
				$win_img = get_template_directory_uri().'/assets/images/winnipeg.jpg';
				$cal_img = get_template_directory_uri().'/assets/images/calgary.jpg';
				$tor_img = get_template_directory_uri().'/assets/images/toronto.jpg';
				$vic_img = get_template_directory_uri().'/assets/images/victoria.jpg';
				
		?>

				<section class="program-hero">
					<a class="backtosearch" href="#"><?php _e('< Back to Programs', 'nexus'); ?></a>
					
					<div class="school-logo-container">
						<img class="school-logo" src=<?php echo $logo; ?> />
					</div>
					<p class="program-name"><?php the_title(); ?></p>
					
					<ul class="program-info">
						<li class="program-info-item">
							<p class="li-title"><?php echo _e('Cities', 'nexus'); ?></p>
							<ul class="cities-list">
							<?php
								foreach($prog_cities as $city) { 
									echo "<li class='cities-single-program'>".$city."</li>";
								}
							?>
							</ul>
						</li>
						<li class="program-info-item">
							<p class="li-title"><?php _e('Hrs/Lessons per week', 'nexus'); ?></p>
							<p class="li-field"><?php echo $hrs; ?></p>
						</li>
						<li class="program-info-item">
                            <?php 
                                $price4 = CFS()->get('price_4');
                                $price8 = CFS()->get('price_8');
                                $price12 = CFS()->get('price_12');
                                $price24 = CFS()->get('price_24');

								
								$postID = get_the_ID();

								$postTerms = get_the_terms($postID, 'programsTypes');

								$programType = $postTerms[0]->slug;

								
							
								
                            ?>
							<p class="li-title"><?php _e('Duration', 'nexus'); ?></p>
                                <?php 
                                    if($programType == 'language' || $programType == 'idioma' || $programType == 'idiomas') { ?>
                                        <select class="duration-selector-single">
                                            <option value='4' selected><?php _e('4 weeks', 'nexus'); ?></option>
                                            <option value='8'><?php _e('8 weeks', 'nexus'); ?></option>
                                            <option value='12'><?php _e('12 weeks', 'nexus'); ?></option>
                                            <option value='24'><?php _e('24 weeks', 'nexus'); ?></option>
                                        </select>
                                
								<?php } else { ?>
										<p class='li-field'><?php _e($duration, 'nexus'); ?></p>
								<?php } ?>
						</li>
						<li class="program-info-item">
							<p class="li-title"><?php _e('Price', 'nexus'); ?></p>

							<?php 
								if($programType == 'language' || $programType == 'idioma' || $programType == 'idiomas') { ?>
									<p class="li-field li-price"></p>
							<?php } else { ?>
									<p class="li-field"><?php echo $price; ?></p>
							<?php } ?>

						</li>
					</ul>
					<p class="disclaimer-accommodation"><?php _e('*For programs longer than 5 months, 4 weeks of accommodation is recommended.', 'nexus'); ?></p>
				</section>

				<section class="about-container school-container">
					<div class="about-school">
						<div class="school-video"><?php echo $school_vid; ?></div>
						<div class="about-school-description">
							<p class="about-school-title"><?php _e('About the School', 'nexus'); ?></p>
							<p class="about-school-desc"><?php echo $school_info; ?></p>
						</div>
					</div>
				</section>

				

				
				<section class="about-container program-container">
					
					<div class="about-program">
						<div class="program-description">
							<p class="about-program-title"><?php _e('About the Program', 'nexus'); ?></p>
							<p><?php the_content(); ?></p>
						</div>
						<?php the_post_thumbnail(); ?>
					</div>
					
				</section>

				<section class="program-details">
					<div class="courses-div">

					<?php if($programType == 'language' || $programType == 'idiomas' || $programType == 'idioma') { ?>
						<h2><?php _e('Courses', 'nexus'); ?></h2>
					<?php } else { ?>
						<h2><?php _e('Curriculum', 'nexus'); ?></h2>
					<?php } ?>
						<ul>
						<?php  
							$coursesLoop = CFS()->get('program_course'); 

							foreach($coursesLoop as $course) {
								echo '<li>'.$course['course'].'</li>';
							}
						?>
						</ul>
					</div>
					<div class="specifications-div">
						<h2><?php _e('Specifications', 'nexus'); ?></h2>
						<ul class="specs-list">
							<?php if($programType == 'language' || $programType == 'idioma') { ?>
							
									<li>
										<i class="far fa-hand-point-right"></i><?php _e('Choose between:', 'nexus'); ?>
										<ul class="intensities-list answer-strong">
											<?php 
												$intensities = CFS()->get('intensities'); 

												foreach($intensities as $intensity) {
													echo '<li>'.$intensity['intensity'].'</li>';
												}
											?>
										</ul>
									</li>
									<li><i class="fas fa-signal"></i><?php _e('English Level Required:', 'nexus'); ?> <span class="answer-strong"><?php _e('Any', 'nexus'); ?></span></li>
									<li><i class="fas fa-clock"></i><?php _e('Processing Time:', 'nexus'); ?> <span class="answer-strong"><?php _e('Avg. 30 days', 'nexus'); ?></span></li>
									<li><i class="fas fa-calendar-alt"></i><?php _e('Starting Dates:', 'nexus'); ?> <span class="answer-strong"><?php _e('Every Monday', 'nexus'); ?></span></li>
							<?php } else { ?>

							<?php 
							
								$level = CFS()->get('level');
								$time = CFS()->get('time');
								$start = CFS()->get('start');
								
								
							?>
										<li><i class="fas fa-signal"></i><?php _e('English Level Required:', 'nexus'); ?> <span class="answer-strong"><?php _e($level, 'nexus'); ?></span></li>
										<li><i class="fas fa-clock"></i><?php _e('Processing Time:', 'nexus'); ?> <span class="answer-strong"><?php _e($time, 'nexus'); ?></span></li>
										<li>
											<i class="fas fa-calendar-alt"></i><?php _e('Starting Dates:', 'nexus'); ?>
											<ul class="answer-strong">
											<?php 
												$dates = CFS()->get('dates'); 
												foreach($dates as $date) {
													echo '<li>'.$date['date'].'</li>';
												}											
											?>
											</ul>
										</li>
							<?php } ?>
										<?php if($programType == 'idiomas' || $programType == 'language') { ?>
											<li><i class="fas fa-home"></i><?php _e( 'Accommodation:' ,'nexus'); ?> <span class="answer-strong accommodation-span"></span></li>
										<?php } else { ?>
											<li><i class="fas fa-home"></i><?php _e( 'Accommodation:', 'nexus'); ?> <span class="answer-strong"><?php _e('4 weeks', 'nexus'); ?></span></li>
										<?php } ?>
											<li><i class="fas fa-medkit"></i><?php _e( 'Health Insurance:', 'nexus'); ?> <span class="answer-strong"><?php _e('Included', 'nexus'); ?></span></li>
						</ul>
					</div>	

				</section>
				<a href="#" class="backtop"><?php _e('Back to Top', 'nexus'); ?></a>
				<div class="apply-div">
					<a class="program-apply-btn"><?php _e('Apply Now', 'nexus'); ?></a>
				</div>
				<?php endwhile; ?>

				

				<section class="student-review">
					<p class="review-title"><?php _e('Student Review', 'nexus'); ?></p>
					<div class="review-container-program">
						<img class="review-img-prg" src=<?php echo get_template_directory_uri().'/assets/images/photo_review.png'; ?> >
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
							$args = array(
								'post_type' => 'programs', 
								'posts_per_page' => 3,
								'orderby' => rand
							);
							$recommended = new WP_query($args);
							


							while( $recommended->have_posts() ) : $recommended-> the_post(); 

								$terms = get_the_terms($recommended->ID, 'programsTypes');
								 foreach($terms as $term) : 

						?>	
							<div class="people-program-container">
								<a href=<?php echo get_the_permalink(); ?> >
								<?php the_post_thumbnail(); ?>
									<div class="people-info-div">
										<p class="people-school-name"><?php echo CFS()->get('school'); ?></p>
										<p class="people-prg-name"><?php the_title(); ?></p>
										<p class="people-prg-category"><?php echo $term->name; ?></p>
									</div>
								</a>
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
