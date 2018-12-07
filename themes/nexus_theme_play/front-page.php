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
				<h1 class="hero-label"><?php _e('Dreaming of', 'nexus'); ?> <br><span><?php _e('Canada?' ,'nexus'); ?> </span> <br><?php _e('We will make your dream come true.', 'nexus'); ?></h1>
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


			<section class="why-nexus-section">
				<h1 class="why-title"><?php _e('Why use Nexus?', 'nexus'); ?></h1>
				<div class="why-items-container">
				<button class="why-btn-left why-btn"><i class="fas fa-chevron-left"></i></button>
				<button class="why-btn-right why-btn"><i class="fas fa-chevron-right"></i></button>
					<div class="why-item">
						<i class="far fa-clock"></i>
						<p class="why-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div class="why-item">
						<i class="fas fa-check-circle"></i>
						<p class="why-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div class="why-item">
						<i class="far fa-clock"></i>
						<p class="why-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div class="why-item">
						<i class="fas fa-check-circle"></i>
						<p class="why-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div class="why-item">
						<i class="far fa-clock"></i>
						<p class="why-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
				<a class="get-quote-btn menu-item-51 menu-item-25">Get Quote</a>
			</section>

			<section class="why-canada-section">
				<h2 class="why-canada-title"><?php _e('Why Canada?', 'nexus'); ?></h2>
				<button class="slider-btn btn-lft">></button>
                <button class="slider-btn btn-right"><</button>
				<div class="slider-canada">			
					<img class="slider-item" src=<?php echo get_template_directory_uri().'/assets/images/blog_photo_post01@3x.png' ?>>
					<img class="slider-item" src=<?php echo get_template_directory_uri().'/assets/images/blog_photo_post02@3x.png' ?>>
					<img class="slider-item" src=<?php echo get_template_directory_uri().'/assets/images/blog_photo_post03@3x.png' ?>>
				</div>
			</section>

			<section class="curious-section">
				<h3 class="curious-title"><?php _e('Curious About Canada?', 'nexus'); ?></h3>
				<a class="visit-faq-btn"><?php _e('Visit FAQ Section', 'nexus'); ?></a>
			</section>


			<section class="choose-city-section">
					<h1 class="choose-title"><?php _e('Choose a City', 'nexus'); ?></h1>
					<div class="cities-container-front">
						<a class="city-link-front fifty-div">
							<div class="city-container-frontpage cal-div">
								<div class="black-ovrlay-city"></div>
								<h2 class="city-name-front">Calgary</h2>
							</div>
						</a>
						<a class="city-link-front fifty-div">
							<div class="city-container-frontpage mon-div">
								<div class="black-ovrlay-city"></div>
								<h2 class="city-name-front">Montreal</h2>
							</div>
						</a>
						<a class="city-link-front fifty-div">
							<div class="city-container-frontpage otta-div">
								<div class="black-ovrlay-city"></div>
								<h2 class="city-name-front">Ottawa</h2>
							</div>
						</a>
						<a class="city-link-front third-div">
							<div class="city-container-frontpage toro-div">
								<div class="black-ovrlay-city"></div>
								<h2 class="city-name-front">Toronto</h2>
							</div>
						</a>
						<a class="city-link-front third-div">
							<div class="city-container-frontpage van-div">
								<div class="black-ovrlay-city"></div>
								<h2 class="city-name-front">Vancouver</h2>
							</div>
						</a>
						<a class="city-link-front third-div">
							<div class="city-container-frontpage vic-div">
								<div class="black-ovrlay-city"></div>
								<h2 class="city-name-front">Victoria</h2>
							</div>
						</a>
						<a class="city-link-front third-div">
							<div class="city-container-frontpage winni-div">
								<div class="black-ovrlay-city"></div>
								<h2 class="city-name-front">Winnipeg</h2>
							</div>
						</a>
					</div>
					<a class="visit-faq-btn choose-faq-btn"><?php _e('Visit FAQ Section', 'nexus'); ?></a>
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
