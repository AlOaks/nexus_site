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


			<section class="why-nexus">
				<h1 class="why-title">Why use Nexus?</h1>
				<div class="why-items-container">
					<div class="why-item">
						<img class="why-icon" src="">
						<p class="why-paragraph"></p>
					</div>
					<div class="why-item">
						<img class="why-icon" src="">
						<p class="why-paragraph"></p>
					</div>
					<div class="why-item">
						<img class="why-icon" src="">
						<p class="why-paragraph"></p>
					</div>
					<div class="why-item">
						<img class="why-icon" src="">
						<p class="why-paragraph"></p>
					</div>
					<div class="why-item">
						<img class="why-icon" src="">
						<p class="why-paragraph"></p>
					</div>
				</div>
				<button class="get-quote-btn">Get Quote</button>
			</section>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
