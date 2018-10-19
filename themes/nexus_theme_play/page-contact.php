<?php
/**
 * Template Name: Contact
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
            <div class="page-title-container">
                <h1 class="contact-header">Contact</h1>
            </div>
            <div class="contact-form-container">
                <h1 class="contact-form-title">Send Us A Message</h1>
                <?php 
                    while (have_posts() ): the_post();
                        the_content();

                    endwhile; 
                ?>
            </div>
            <div class="nexus-information">
                <h1 class="info-title">Nexus in Canada</h1>
                <p class="info-description">Come and give us a visit and talk to our exchange experts or ask for a quote here</p>
                <div class="info-container">
                    <div class="info-item">
                        <i class="fas fa-map-marker"></i>
                        <div class="address-map-container">
                            <p class="address-info">970 Burrard St<br> Room 119 - 1st floor<br> Vancouver, BC - V6Z 2R4</p>
                            <img class="nexus-map" src=<?php echo get_template_directory_uri().'/assets/images/map-nexus.png'; ?> />
                            <a class="open-in-maps-link" href="https://www.google.ca/maps/place/Nexus+Intercambio/@49.2810287,-123.1265783,14.75z/data=!4m5!3m4!1s0x0:0xa6fd4d36bf8969be!8m2!3d49.2812913!4d-123.1253663">Open in Google Maps</a>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-phone"></i>
                        <p class="phone-number">+1 (604) 288-0787</p>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-hourglass-half"></i>
                        <p class="work-hours">Monday to Friday<br>9am to 5pm</p>
                    </div>
                </div>
            </div>
            <section class="start-journey-section">
				<h1 class="start-title">Questions?</h1>
				<p class="start-description">We've got you covered</p>
				<a class="contact-btn">See FAQ</a>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
