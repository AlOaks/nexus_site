<?php
/**
 * Template name: Home
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
				<h1 class="hero-label">Dreaming of <br><span>Canada?</span> <br>We will make your dream come true.</h1>
			</section>


			<section class="program-selectors">
				<form class="programs-form">
					<select class="selector program-types">
						<option value="Choose type of program" selected>Choose type of program</option>
						<?php 
						
						$progTypes = get_the_terms('programs', 'programs-types');

						var_dump($progTypes);

						?>
					</select>
					<select class="selector cities">
						<option value="Choose location" selected>Choose location</option>
						
					</select>
					<input class="submit" type="submit" value="See Schools on Promotion" >
				</form>
			</section>


			<section class="why-nexus-section">
				<h1 class="why-title">Why use Nexus?</h1>
				<div class="why-items-container">
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
				<button class="get-quote-btn">Get Quote</button>
			</section>

			<section class="why-canada-section">
				<h1 class="why-canada-title">Why Canada?</h1>
				<button class="slider-btn btn-lft">></button>
                <button class="slider-btn btn-right"><</button>
				<div class="slider-canada">			
					<img class="slider-item" src=<?php echo get_template_directory_uri().'/assets/images/blog_photo_post01@3x.png' ?>>
					<img class="slider-item" src=<?php echo get_template_directory_uri().'/assets/images/blog_photo_post02@3x.png' ?>>
					<img class="slider-item" src=<?php echo get_template_directory_uri().'/assets/images/blog_photo_post03@3x.png' ?>>
				</div>
			</section>

			<section class="curious-section">
				<h1 class="curious-title">Curious About Canada?</h1>
				<button class="visit-faq-btn">Visit FAQ Section</button>
			</section>


			<section class="choose-city-section">
				<div class="choose-map">
					<h1 class="choose-title">Choose a City</h1>
					<i class="fas fa-map-marker-alt mark1"></i>
					<i class="fas fa-map-marker-alt mark2"></i>
					<i class="fas fa-map-marker-alt mark3"></i>
					<i class="fas fa-map-marker-alt mark4"></i>
					<i class="fas fa-map-marker-alt mark5"></i>
					<i class="fas fa-map-marker-alt mark6"></i>
					<button class="visit-faq-btn choose-faq-btn">Visit FAQ Section</button>
				</div>
			</section>	

			<section class="reviews-section">
				<h1 class="reviews-title">Student's Review</h1>
				<div class="reviews-slider">
				
					<div class="review-container">
						<img class="review-img" src=<?php echo get_template_directory_uri()."/assets/images/photo_review.png"; ?> />
						<p class="review-content"><span class="quote">"</span>I'd like to thank Nexus for all the help, attention and patience with me both before and during my trip. 
						This exchange in Vancouver was undoubtedly one of the best experiences I have ever had in my life, 
						and all of your help was instrumental in making this trip even more wonderful!<span class="unquote">"</span></p>
					</div>
					<div class="review-container">
						<img class="review-img" src=<?php echo get_template_directory_uri()."/assets/images/photo_review.png"; ?> />
						<p class="review-content"><span class="quote">"</span>I'd like to thank Nexus for all the help, attention and patience with me both before and during my trip. 
						This exchange in Vancouver was undoubtedly one of the best experiences I have ever had in my life, 
						and all of your help was instrumental in making this trip even more wonderful!<span class="unquote">"</span></p></p>
					</div>
					<div class="review-container">
						<img class="review-img" src=<?php echo get_template_directory_uri()."/assets/images/photo_review.png"; ?> />
						<p class="review-content"><span class="quote">"</span>I'd like to thank Nexus for all the help, attention and patience with me both before and during my trip. 
						This exchange in Vancouver was undoubtedly one of the best experiences I have ever had in my life, 
						and all of your help was instrumental in making this trip even more wonderful!<span class="unquote">"</span></p></p>
					</div>
					
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
