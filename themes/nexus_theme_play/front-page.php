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
$lang = get_locale();
	
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="slick-slider">
			<?php 
				$args = array('post_type' => 'schools'); 
				$schools = new WP_query($args);

				while($schools->have_posts()) : $schools->the_post();

				$promoBanner = CFS()->get('promo_banner');

				if($promoBanner) {
			?>
				<a  href="<?php echo get_the_permalink(); ?>" class="school-slide <?php echo $schools->name; ?>" >
					<img  alt="<?php echo get_the_title(); ?>" src=<?php echo $promoBanner; ?> >
				</a>

			<?php } endwhile; wp_reset_query(); ?>
			</div>
			<div class="keyword-container">
				<h1 ><?php echo CFS()->get('front_keyword'); ?></h1>
				<?php the_content(); ?>
				<div class="bouncing-arrow">
					<i class="fas fa-chevron-down"></i>
				</div>
			</div>
			<section class="hero-image-new">
				<div class="esl-hero-div">
					<?php $eslBkg = CFS()->get('esl_background_image'); ?>
					
					<div class="hero-div-ovrly"></div>
					<div class="hero-div-info">
						<h2><?php _e('English', 'Front-Page'); ?></h2>
						<p><?php _e('Learn or improve your english while studying in one of the most amazing countries!', 'Front-Page'); ?></p>
						<?php 
							if($lang === 'en_US') { ?>
								<a class="hero-learn-more-btn" href="https://nexuseducanada.com/english"><?php _e('Learn More', 'Front-Page'); ?></a>
						<?php } else if($lang === 'es_ES') { ?>
								<a class="hero-learn-more-btn" href="https://nexuseducanada.com/english?lang=es"><?php _e('Learn More', 'Front-Page'); ?></a>				
						<?php } else { ?>
								<a class="hero-learn-more-btn" href="https://nexuseducanada.com/english?lang=pt-br"><?php _e('Learn More', 'Front-Page'); ?></a>
						<?php } ?>

					</div>
					<div id="esl-hero-div-triangle"></div>
				</div>
				<div class="ws-hero-div">
					<?php $priBkg = CFS()->get('private_background_image'); ?>
					<div class="hero-div-ovrly"></div>
					<div class="hero-div-info">
						<h2><?php _e('Work & Study', 'Front-Page'); ?></h2>
						<p><?php _e('Perfect for international students who are looking to kickstart their professional career', 'Front-Page'); ?></p>
						<?php 
							if($lang === 'en_US') { ?>
								<a class="hero-learn-more-btn" href="https://nexuseducanada.com/work-study"><?php _e('Learn More', 'Front-Page'); ?></a>
						<?php } else if($lang === 'es_ES') { ?>
								<a class="hero-learn-more-btn" href="https://nexuseducanada.com/work-study?lang=es"><?php _e('Learn More', 'Front-Page'); ?></a>				
						<?php } else { ?>
								<a class="hero-learn-more-btn" href="https://nexuseducanada.com/work-study?lang=pt-br"><?php _e('Learn More', 'Front-Page'); ?></a>
						<?php } ?>
					</div>
					<div id="ws-hero-div-triangle"></div>
				</div>
				<div class="he-hero-div">
					<?php $pubBkg = CFS()->get('public_background_image'); ?>
					<div class="hero-div-ovrly"></div>
					<div class="hero-div-info">
						<h2><?php _e('Higher Education', 'Front-Page'); ?></h2>
						<p><?php _e("Perfect for those with a career driven mindset! Fulfill your academic goals in a public College or University.", 'Front-Page'); ?></p>
						<?php 
							if($lang === 'en_US') { ?>
								<a class="hero-learn-more-btn" href="https://nexuseducanada.com/higher-education"><?php _e('Learn More', 'Front-Page'); ?></a>
						<?php } else if($lang === 'es_ES') { ?>
								<a class="hero-learn-more-btn" href="https://nexuseducanada.com/higher-education?lang=es"><?php _e('Learn More', 'Front-Page'); ?></a>				
						<?php } else { ?>
								<a class="hero-learn-more-btn" href="https://nexuseducanada.com/higher-education?lang=pt-br"><?php _e('Learn More', 'Front-Page'); ?></a>
						<?php } ?>
					</div>
					<div id="he-hero-div-triangle"></div>
				</div>	
			</section>	
			<section class="front-page-description">
				<p><?php echo get_the_content(); ?></p>
			</section>
			<section class="front-page-blogpost-container">
				<img class="post-thumbnail" src="<?php echo CFS()->get('front-image'); ?>" />
				<div class="post-data">
					<h3><?php _e('Meet the new Nexus!', 'Front-Page'); ?></h3>
					<div>
						<p><?php echo CFS()->get('front-content'); ?></p>	
					</div>
				</div>
				<a href="#" class="get-quote-btn menu-item-51 menu-item-25"><?php _e('Chat with us!', 'Front-page'); ?></a>
			</section>
			<section class="why-nexus-section">
				<h2 class="why-title"><?php _e('Why hire Nexus?', 'nexus'); ?></h2>
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
						<p class="why-paragraph"><?php _e('Need a visa to study abroad? Don’t worry, we got you covered! We can help you in throughout all the process.', 'nexus'); ?></p>
					</div>
				</div>
			</section>
			<section class="start-journey-section">
				<h2 class="start-title"><?php _e('Start Your Journey', 'nexus'); ?></h2>
				<p class="start-description"><?php _e('Let us help you find your path to success', 'nexus'); ?></p>
				<a class="contact-btn contact-trigger"><?php _e('Contact Us', 'nexus'); ?></a>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
