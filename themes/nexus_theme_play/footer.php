<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nexus_theme_scratch
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">

			<section class="start-journey-section">
				<h1 class="start-title">Start Your Journey</h1>
				<p class="start-description">Let us help you find your path to success</p>
				<button class="contact-btn">Contact Us</button>
			</section>

			<section class="general-info">
				<div class="why-nexus-footer info-div">
					<h2 class="why-nexus-title-footer footer-title">Why Nexus?</h2>
					<p class="why-nexus-desc-footer">
						Our passion is helping our clients to learn how to
						prepare a powerful action plan and execute their life-changing
						journey of living in Canada.
					</p>
				</div>

				<div class="nexus-social info-div">
					<h2 class="social-title-footer footer-title">Stay Connected</h2>
					<div class="social-logos-container">
						<a href="https://www.facebook.com"><img class="social-logo" src=<?php echo get_template_directory_uri().'/assets/images/face_logo1@3x.png'; ?> /></a>
						<a href="https://www.twitter.com"><img class="social-logo" src=<?php echo get_template_directory_uri().'/assets/images/twitter_logo1@3x.png'; ?> /></a>
						<a href="https://www.youtube.com"><img class="social-logo" src=<?php echo get_template_directory_uri().'/assets/images/youtube_logo1@3x.png'; ?> /></a>
						<a href="https://www.instagram.com"><img class="social-logo" src=<?php echo get_template_directory_uri().'/assets/images/instagram@3x.png'; ?> /></a>
					</div>
					<button class="join-nexus-fam-btn">Join Nexus Family</button>
				</div>

				<div class="contact-footer info-div">
					<h2 class="contact-title-footer footer-title">Contact Us</h2>
					<a class="address-nexus" href="https://www.google.ca/maps/place/Nexus+Intercambio/@49.2779062,-123.129072,14.75z/data=!4m5!3m4!1s0x0:0xa6fd4d36bf8969be!8m2!3d49.2812913!4d-123.1253663">119-970 Burard St Vancouver, BC V6Z 2R4</a>
					<p class="office-hours">Office hours: Monday - Friday, 9am - 5pm PST</p>
					<a class="phone">(604)288-6787</a>
				</div>
			</section>

			<section class="footer-copy">
				<p class="copyright">© Copyright @ Nexus Exchange 2018</p>
				
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>

			</section>

		</div><!-- .site-info1 -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
