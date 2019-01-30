<?php
/**
 * Template name: FrontPage
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


			<section class="hero-image">
				<div class="hero-overlay"></div>
				<!-- <video class="hero-video" loop autoplay muted preload="true" playsinline="true" poster="video.jpg">
					<source src="https://www.youtube.com/watch?v=5lWkZ-JaEOc">
				</video> -->
				<div class="hero-label-div">
					<h1 class="hero-label"><?php _e('Want to', 'nexus'); ?> <br><span><?php _e('STUDY ABROAD?' ,'nexus'); ?> </span></h1>
					<h2 class="hero-label"><?php _e('Come to Canada.', 'nexus'); ?></h2>
				</div>
			</section>


			<section class="program-selectors">
				<div class="programs-form">
					<select class="selector program-types">
						<option class="prog-type" value="Choose type of program" selected><?php _e('Choose City', 'nexus'); ?></option>
						<?php 
						
						$progCities = get_terms([
							'taxonomy' => 'Cities',
							'hide_empty' => false
						]);

							foreach($progCities as $progCity) : ?>
								<option class='prog-type' value="<?php echo $progCity->name; ?>"><?php _e($progCity->name, 'nexus'); ?></option>
							
						<?php
							endforeach;
						?>
					</select>
					<button class="submit-btn-front"><?php _e('Search Programs', 'nexus'); ?></button>
				</div>
			</section>

			
			<section class="front-page-description">
				<p>
					<?php echo get_the_content(); ?>
				</p>
			</section>



			<section class="why-nexus-section">
				<h1 class="why-title"><?php _e('Why hire Nexus?', 'nexus'); ?></h1>
				<div class="why-items-container">
				<button class="why-btn-left why-btn"><i class="fas fa-chevron-left"></i></button>
				<button class="why-btn-right why-btn"><i class="fas fa-chevron-right"></i></button>
					<div class="why-item">
					<img alt="trophy icon" src=<?php echo get_template_directory_uri().'/assets/images/expert.png'; ?> >
						<h3 class="why-item-title"><?php _e('Experts in Education', 'nexus'); ?></h3>
						<p class="why-paragraph"><?php _e('Thanks to our years of experience, we have experts in education ready to advise you. We´ll gladly help you with any questions you have!', 'nexus'); ?></p>
					</div>
					<div class="why-item">
					<img alt="books icon" src=<?php echo get_template_directory_uri().'/assets/images/programs.png'; ?> >
						<h3 class="why-item-title"><?php _e('Program Variety', 'nexus'); ?></h3>
						<p class="why-paragraph"><?php _e('We have hundreds of different programs! From English for basic levels to post-doctoral programs. Check them out!', 'nexus'); ?></p>
					</div>
					<div class="why-item">
					<img alt="hospital icon" src=<?php echo get_template_directory_uri().'/assets/images/health.png'; ?> >
						<h3 class="why-item-title"><?php _e('Health Insurance', 'nexus'); ?></h3>
						<p class="why-paragraph"><?php _e("Your health is as important for us as it is to you! That's why Nexus offers one of the most complete student health insurances in Canada.", 'nexus'); ?></p>
					</div>
					<div class="why-item">
						<img alt="house icon" src=<?php echo get_template_directory_uri().'/assets/images/accommodation.png'; ?> >
						<h3 class="why-item-title"><?php _e('Accommodation', 'nexus'); ?></h3>
						<p class="why-paragraph"><?php _e('Having a good accommodation, according to your needs and preferences, is part of a successful experience abroad.', 'nexus'); ?></p>
					</div>
					<div class="why-item">
						<img alt="passport icon" src=<?php echo get_template_directory_uri().'/assets/images/visa.png'; ?> >
						<h3 class="why-item-title"><?php _e('Visa Procedure', 'nexus'); ?></h3>
						<p class="why-paragraph"><?php _e('Need a visa to study abroad? Don’t worry, we got you covered! Just pick the program you like the most and we´ll do the rest.', 'nexus'); ?></p>
					</div>
				</div>
				<a class="get-quote-btn menu-item-51 menu-item-25" href="#"><?php _e('Book Consultation', 'nexus'); ?></a>
			</section>

			<section class="why-canada-section">
				<h2 class="why-canada-title"><?php _e('Why Canada?', 'nexus'); ?></h2>
				<button class="slider-btn btn-lft">></button>
                <button class="slider-btn btn-right"><</button>
				<div class="slider-canada desktop-slider">			
					<?php 
						$infoDesk = CFS()->get('infographics');

						foreach($infoDesk as $desk) {
							echo '<img class="slider-item" src="'.$desk['infographic'].'" />';
						}
							
					?>
				</div>
				
			</section>

			<section class="curious-section">
				<h3 class="curious-title"><?php _e('Curious About Canada?', 'nexus'); ?></h3>
				<a class="visit-faq-btn" href="../faq"><?php _e('Visit FAQ Section', 'nexus'); ?></a>
			</section>


			<section class="choose-city-section">
					<h1 class="choose-title"><?php _e('Choose a City', 'nexus'); ?></h1>
					<div class="cities-container-front">
						<a href="cities/vancouver/" class="city-link-front fifty-div vancouver">
							<div class="city-container-frontpage van-div">
								<div class="black-ovrlay-city"></div>
								<h2 class="city-name-front">Vancouver</h2>
							</div>
						</a>
						<a href="cities/montreal/" class="city-link-front fifty-div montreal">
							<div class="city-container-frontpage mon-div">
								<div class="black-ovrlay-city"></div>
								<h2 class="city-name-front">Montreal</h2>
							</div>
						</a>
						<a href="cities/toronto/" class="city-link-front fifty-div toronto">
							<div class="city-container-frontpage toro-div">
								<div class="black-ovrlay-city"></div>
								<h2 class="city-name-front">Toronto</h2>
							</div>
						</a>
						<a href="cities/ottawa/" class="city-link-front fifty-div ottawa">
							<div class="city-container-frontpage otta-div">
								<div class="black-ovrlay-city"></div>
								<h2 class="city-name-front">Ottawa</h2>
							</div>
						</a>
						<a href="cities/calgary/"  class="city-link-front fifty-div calgary">
							<div class="city-container-frontpage cal-div">
								<div class="black-ovrlay-city"></div>
								<h2 class="city-name-front">Calgary</h2>
							</div>
						</a>					
						<a href="cities/victoria/" class="city-link-front fifty-div victoria">
							<div class="city-container-frontpage vic-div">
								<div class="black-ovrlay-city"></div>
								<h2 class="city-name-front">Victoria</h2>
							</div>
						</a>
						<a href="cities/whistler/" class="city-link-front fifty-div winnipeg">
							<div class="city-container-frontpage winni-div">
								<div class="black-ovrlay-city"></div>
								<h2 class="city-name-front">Whistler</h2>
							</div>
						</a>
						<a href="cities/halifax/" class="city-link-front fifty-div winnipeg">
							<div class="city-container-frontpage hali-div">
								<div class="black-ovrlay-city"></div>
								<h2 class="city-name-front">Halifax</h2>
							</div>
						</a>
					</div>
					<a class="visit-faq-btn" href="../faq"><?php _e('Visit FAQ Section', 'nexus'); ?></a>
			</section>	

			<section class="reviews-section">
				<h1 class="reviews-title"><?php _e("Student's Review", 'nexus'); ?></h1>
				<div class="reviews-slider">
				
					<div class="review-container">
						<img class="review-img" src=<?php echo get_template_directory_uri()."/assets/images/photo_review.png"; ?> />
						<p class="review-content"><span class="quote">"</span>I'd like to thank Nexus for all the help<span class="text-gone">, attention and patience with me both before and during my trip.
						This exchange in Vancouver was undoubtedly one of the best experiences I have ever had in my life, 
						and all of your help was instrumental in making this trip even more wonderful!</span><span class="unquote">"</span></p>
					</div>
					<div class="review-container">
						<img class="review-img" src=<?php echo get_template_directory_uri()."/assets/images/photo_review.png"; ?> />
						<p class="review-content"><span class="quote">"</span>I'd like to thank Nexus for all the help<span class="text-gone">, attention and patience with me both before and during my trip.
						This exchange in Vancouver was undoubtedly one of the best experiences I have ever had in my life, 
						and all of your help was instrumental in making this trip even more wonderful!</span><span class="unquote">"</span></p></p>
					</div>
					<div class="review-container">
						<img class="review-img" src=<?php echo get_template_directory_uri()."/assets/images/photo_review.png"; ?> />
						<p class="review-content"><span class="quote">"</span>I'd like to thank Nexus for all the help<span class="text-gone">, attention and patience with me both before and during my trip.
						This exchange in Vancouver was undoubtedly one of the best experiences I have ever had in my life, 
						and all of your help was instrumental in making this trip even more wonderful!</span><span class="unquote">"</span></p></p>
					</div>
					
				</div>
			</section>
			<section class="start-journey-section">
				<h1 class="start-title"><?php _e('Start Your Journey', 'nexus'); ?></h1>
				<p class="start-description"><?php _e('Let us help you find your path to success', 'nexus'); ?></p>
				<a class="contact-btn start-trigger"><?php _e('Contact Us', 'nexus'); ?></a>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
