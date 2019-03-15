<?php
/**
 * Template Name: BCIT
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nexus_theme_scratch
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="site">
			<div id="primary" class="content-area">
				<main id="main" class="site-main">
                    <section class="bcit-main">
                        <section class="bcit-hero">
                            <div class="blk-ovrly bcit-hero-ovrlay"></div>
                            <?php the_post_thumbnail(); ?>
                        </section>
                        <section class="bcit-header">

								<?php $form = CFS()->get('bcit_form'); ?>
								<?php $schoolName = get_the_title(); ?> 
							
							<?php while(have_posts() ) : the_post(); ?>

                            <div class="bcit-header-title"><?php the_content(); ?></div>
                            <div class="bcit-header-form">
								<p><?php _e('Learn How To Make Your Registration At BCIT Part-Time Courses And Make A Discount On Your Visa Process.', 'nexus'); ?></p>
								<form id="edvisor-form">
									<div class="edvisor-row">
										<label><?php _e('Name', 'nexus'); ?></label>
										<input type="text" id="edvisor-name" name="name" required />
									</div>
									<div class="edvisor-row">
										<label><?php _e('E-Mail', 'nexus'); ?></label>
										<input type="email" id="edvisor-email" name="email" required />
									</div>
									<div class="edvisor-row">
										<label><?php _e('Phone', 'nexus'); ?></label>
										<input type="text" id="edvisor-phone" name="name" required />
									</div>
									<div class="edvisor-row">
										<label><?php _e('Visa Required', 'nexus'); ?></label>
										<select id="edvisor-canada">
											<option value="Yes, I am in Canada." selected><?php _e("Yes, I am in Canada.", 'nexus'); ?></option>
											<option value="No, I am not in Canada"><?php _e('No, I am not in Canada.', 'nexus'); ?></option>
										</select>
									</div>
									
									<button id="edvisor-button"><?php _e('Submit', 'nexus'); ?></button>
								</form>

							</div>

							<?php endwhile; ?>
                        </section>
					</section>
					<p class="learn-more-bcit"><?php _e('Know more about ', 'nexus'); ?> <?php echo $schoolName; ?></p>

					
					<section class="bcit-info">
						
						<div class="popular-programs-div block-info">
							<div class="popu-list">
								<p><? _e('Most Popular Programs', 'nexus'); ?></p>
								<ul>
									<?php 
										$popular = CFS()->get('popular_programs'); 

										foreach($popular as $popu) {
											echo '<li>'.$popu['popular_program'].'</li>';
										}
									?>
								</ul>
							</div>
							<img src='<?php echo CFS()->get('popular_programs_photo'); ?>' >
						</div>
						<div class="details-div block-info">
							<img src='<?php echo CFS()->get('details_photo'); ?>' >
							<div class="details-list">
								<p><?php _e('Details', 'nexus'); ?></p>
								<ul>
									<?php 
										$details = CFS()->get('details');
										
										foreach($details as $detail) {
											echo '<li>'.$detail['detail'].'</li>';
										}
									?>

								</ul>
							</div>
						</div>
					</section>
					<section class="why-landing-section">
						<div class="why-landing-school">
							<div><?php echo CFS()->get('why-school'); ?></div>
							<h2><?php _e('Why '.$schoolName, 'nexus'); ?></h2>

						</div>
						<div class="why-landing-nexus">
							<h2><?php _e('Why Nexus?', 'nexus'); ?></h2>
							<div>
								<?php _e('We believe in bringing life changing opportunities to everyone. The way we do it is by providing personalized education consulting services, by listening and understanding the needs of our clients and by offering the necessary services for anyone to complete their dream of studying in Canada. From learning a language to studying at a university, we´ll help you find the school and program that best suits your goals. In our personalized counseling service we will explain everything related to studying in Canada and help you solve all your doubts about the subject. What are you waiting for, book a consultation!', 'nexus'); ?>
							</div>
						</div>		
					</section>
				</main>
			</div><!-- #primary -->
			<footer id="colophon" class="site-footer">
				<div class="bcit-site-info">
						<div class="footer-ovrly"></div>
						<p><?php _e('I like it! How do I apply?', 'nexus') ?></p>
						<a href="#top" class="bcit-btn-footer"><?php _e('I want to learn more', 'nexus'); ?></a>	
				</div>
				<div class="copyright">
					<p>© Copyright 2019 Nexus Education Consulting</p>
				</div><!-- .site-info1 -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

	<?php wp_footer(); ?>

	</body>
</html>

