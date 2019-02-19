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
				<h1 class="type-page-title"><?php _e(the_title(), 'nexus'); ?></h1>
			</div>
			<section class="contact-page-form">
		 	    <div class="form-contact">
                    <h2 class="form-title"><?php _e('Send Us A Message', 'nexus'); ?></h2>
                    <?php the_content(); ?>
                </div>
                <div class="contact-info">
                    <h2 class="info-title"><?php _e('Nexus in Canada', 'nexus'); ?></h2>
                    <p class="cta-info"><?php _e('Come and give us a visit and talk to our advisors!', 'nexus'); ?></p>
                    <ul>
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <p>970 Burrard St<br><?php _e('Room 119 - 1st Floor', 'nexus'); ?><br>Vancouver, BC - V6Z 2R4</p>
                                <img class="map-info" src=<?php echo get_template_directory_uri().'/assets/images/map-nexus.png'; ?> >
                                <a href="https://www.google.ca/maps/place/Nexus+Intercambio/@49.2779062,-123.129072,14.75z/data=!4m5!3m4!1s0x0:0xa6fd4d36bf8969be!8m2!3d49.2812913!4d-123.1253663">Open in Google Maps</a>
                            </div>
                        </li>
                        <li>
                            <i class="fas fa-phone"></i>
                            <p class="phone-info"> +1 604 288-0787</p>
                        </li>
                        <li>
                            <i class="far fa-hourglass"></i>
                            <p class="hours-info"><?php _e('Mon - Fri', 'nexus'); ?> <span>9am to 5pm</span></p>
                        </li>
                    </ul>
                </div>
            </section>
            <section class="start-journey-section">
			    <h2 class="start-title"><?php _e("Can't find what you're looking for?", 'nexus'); ?></h2>
			    <p class="start-description"><?php _e('We have more to offer', 'nexus'); ?></p>
			    <a class="contact-btn join-footer"><?php _e('Join Nexus Club', 'nexus'); ?></a>
		</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
