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
				$city = CFS()->get('city');
				$school_info = CFS()->get('school_info');
				$school_vid = CFS()->get('school_video');
				$logo = CFS()->get('logo');

				$van = _e('The perfect balanced between nature and urban lifestyle! Parks, gardens and beaches make up this city. With plenty of things to do around the city its ranked as one of the best places to live all over the world. no matter the time of year Vancouver has it all!', 'nexus');
				$montreal = _e('With a little more than 1.5 million inhabitants, is called the Paris of the Americas. And the reasons go beyond the French, language that is also spoken in the bilingual city. Montreal maintains not only the architecture style, but it also keeps the culture that will make you feel as if you´re living in Europe.', 'nexus');
				$ottawa = _e('The capital of Canada! Ottawa has an impressive cultural offer, a variety of museums available for those who reside in this city. Like almost all cities in Canada, it has parks where you can do different activities both in summer and in winter. If you want to live in a quiet city, Ottawa is the most appropriate', 'nexus');
				$winni = _e('Winnipeg, the capital of Manitoba. This city is famous for its lakes and numerous parks. You can also find a lot of museums, theaters, places with incredibles historic value and more. Commonly visited when traveling from coast to coast in Canada, it is almost half of the Canadian territory.', 'nexus');
				$victoria = _e('The capital of British Columbia! Located on the huge island of Vancouver, Victoria is a beautiful city to explore. They call it "city of the gardens" for its floral wealth. It is the city with the best climate in Canada, during the summer it is mild and in the winter the temperatures oscillate from 0 to 10 degrees Celsius. Excellent for practicing all kinds of sports especially those that are outdoors.', ' nexus');
				$calgary = _e('It is one of the most dynamic cities in Canada. It is located one hour from the Rocky Mountains, in the province of Alberta. Calgary is a vibrant business center. Summer is mild and winter is cold, with occasional warmer periods. The lifestyle of this city is ideal for active people, and during the summer you can participate in the Stampede, the largest rodeo in the world.', 'nexus');
				$toronto = _e('If you want live in a modern city, Toronto is the place to go! Located in Ontario it is the most cosmopolitan, a city of modern buildings where people from all over the world coexist. It is the financial center of the country and also the largest city , with a population of more than 2.5 million inhabitants.', 'nexus');

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
							<p class="li-field"><?php echo $duration; ?></p>
						</li>
						<li class="program-info-item">
							<p class="li-title"><?php _e('City', 'nexus'); ?></p>
							<p class="li-field"><?php echo $city; ?></p>
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
							<p class="about-city-title"><?php echo $city; ?></p>
							<p class="city-description">
							<?php 
							if ($city == 'Vancouver') { 
									echo $van;
								} else if ($city == 'Toronto') {
									echo $toronto;
								} else if ($city == 'Montreal') {
									echo $montreal;
								} else if ($city == 'Ottawa') {
									echo $ottawa;
								} else if ($city == 'Calgary') {
									echo $calgary;
								} else if ($city == 'Victoria') {
									echo $victoria;
								} else if ($city == 'Winnipeg') {
									echo $winni;
								}
							 ?>
							</p>
						</div>
						<img class="city-img" src=<?php
							if ($city == 'Vancouver') { 
										echo $van_img;
									} else if ($city == 'Toronto') {
										echo $tor_img;
									} else if ($city == 'Montreal') {
										echo $mon_img;
									} else if ($city == 'Ottawa') {
										echo $ott_img;
									} else if ($city == 'Calgary') {
										echo $cal_img;
									} else if ($city == 'Victoria') {
										echo $vic_img;
									} else if ($city == 'Winnipeg') {
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
