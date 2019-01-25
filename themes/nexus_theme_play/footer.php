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

			

			<section class="general-info">
				<div class="why-nexus-footer info-div">
					<h2 class="why-nexus-title-footer footer-title"><?php _e('Why Nexus?', 'nexus'); ?></h2>
					<p class="why-nexus-desc-footer">
						<?php _e('Our passion is helping our clients to learn how to
						prepare a powerful action plan and execute their life-changing
						journey of living in Canada.', 'nexus'); ?>
					</p>
				</div>

				<div class="nexus-social info-div">
					<h2 class="social-title-footer footer-title"><?php _e('Stay Connected', 'nexus'); ?></h2>
					<div class="social-logos-container">
						<a target="_blank" href="https://www.facebook.com/nexusintercambio/"><img class="social-logo" src=<?php echo get_template_directory_uri().'/assets/images/facebook.png'; ?> /></a>
						<a target="_blank" href="https://ca.linkedin.com/company/nexus-intercambio"><img class="social-logo" src=<?php echo get_template_directory_uri().'/assets/images/linkedin.png'; ?> /></a>
						<a target="_blank" href="https://www.youtube.com/channel/UC9ZM-YLdyElsYY1Te8lbT3w/featured"><img class="social-logo" src=<?php echo get_template_directory_uri().'/assets/images/youtube.png'; ?> /></a>
						<a target="_blank" href="https://www.instagram.com/nexus.intercambio/"><img class="social-logo" src=<?php echo get_template_directory_uri().'/assets/images/instagram.png'; ?> /></a>
					</div>
					<?php 
					if (is_user_logged_in()) { ?>
						<a class="join-logged-in" href="../nexus-club/"><?php _e('Nexus Club', 'nexus'); ?></a>
					<?php } else { ?>
						<a class="join-nexus-fam-btn"><?php _e('Join Nexus Club','nexus'); ?></a>
					<?php } ?>
				</div>

				<div class="contact-footer info-div">
					<h2 class="contact-title-footer footer-title"><?php _e('Contact Us', 'nexus'); ?></h2>
					<ul>
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <a href="https://www.google.ca/maps/place/Nexus+Intercambio/@49.2779062,-123.129072,14.75z/data=!4m5!3m4!1s0x0:0xa6fd4d36bf8969be!8m2!3d49.2812913!4d-123.1253663">970 Burrard St<br><?php _e('Room 119 - 1st Floor', 'nexus'); ?><br>Vancouver, BC - V6Z 2R4</a>    
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

			<section class="footer-copy">
				<div class="sitemap-item">
					<h4>Sitemap</h4>
					<ul class="site-map">
						<li><a href="../programs"><?php _e('Programs', 'nexus'); ?></a></li>
						<li><a href="../services"><?php _e('Services', 'nexus'); ?></a></li>
						<li><a href="../blog">Blog</a></li>
						<li><a href="../nexus-club">Nexus Club</a></li>
					</ul>
				</div>
				<div class="sitemap-item">
					<h4><?php _e('Cities', 'nexus'); ?></h4>
					<ul class="cities">
						<?php 
						
						$cities = get_terms( array(
								'taxonomy' => 'Cities',
								'hide_empty' => false
							));
						
						foreach($cities as $city) {

							$link = get_term_link($city);
							echo '<li><a href="'. esc_url($link).'">'.$city->name.'</a></li>';
						}
						
						?>
					</ul>
				</div>
				<div class="sitemap-item">
					<h4><?php _e('Company', 'nexus'); ?></h4>
					<ul class="about">
						<li><a href="../about"><?php _e('About', 'nexus'); ?></a></li>
						<li><a href="../contact"><?php _e('Contact', 'nexus'); ?></a></li>
						<li><a href="../faq"><?php _e('FAQ', 'nexus'); ?></a></li>
					</ul>
				</div>
				<p class="copyright">©2018 Nexus Intercambio</p>
			</section>



		</div><!-- .site-info1 -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

