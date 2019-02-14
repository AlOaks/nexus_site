<?php
/**
 * The header for our theme
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
					<section class="main-landing">
						<div class="top-div">
							<div class="blue-ovrly hero-ovrlay"></div>
							<?php the_post_thumbnail(); ?>
						</div>
						<div class="bottom-div">
							<div class="white-ovrly hero-ovrlay"></div>
							<img class="bottom-hero" src=<?php echo get_template_directory_uri().'/assets/images/bottom-hero.jpeg' ?> >
						</div>
						<section class="landing-main">
							<div class="landingpage-title-container">
								<img src=<?php echo get_template_directory_uri().'/assets/images/nexus_logo_white.png'; ?> />
								<h1 class="landing-page-title"><?php _e(the_title(), 'nexus'); ?></h1>
							</div>
							<div class="landing-page-container">

								<?php 
									$video = CFS()->get('landing_video');
									$form = CFS()->get('landing_form');

								while ( have_posts() ) : the_post(); ?>
									<?php the_content(); ?>
									<?php if(!empty($video)) { 
										echo $video;
									}
									
									if(!empty($form)) {
										echo $form;
									} ?>	
								<?php
								endwhile; // End of the loop.
								?>
							</div>
						</section>
					</section>
					<section class="nexus-club-container">
							<p><?php _e('Remember that you can get EXCLUSIVE information by joining our Online Club'); ?></p>
							<div class="club-posts-container">
								<?php 
									$args = array(
										'post_type' => 'premium_content',
										'posts_per_page' => 3,
										'orderby' => 'rand'
									);

									$clubPosts = new WP_query($args);

									while( $clubPosts->have_posts() ):  $clubPosts->the_post(); ?>

										<div class="club-post">
											<a href=<?php echo get_the_permalink(); ?>>
												<?php the_post_thumbnail(); ?>
												<?php the_title(); ?>
												<?php the_excerpt(); ?>
											</a>
										</div>
									
								<?php endwhile; ?>
							</div>
					</section>
					<section class="landing-reviews">
						<p><?php _e('What Club Members Say', 'nexus'); ?></p>
						<div class="reviews-container-landing">
							<?php
								$args = array(
									'post_type' => 'student_reviews',
									'posts_per_page' => 3,
									'orderby' => 'rand'
								);

								$reviews = new WP_query($args);
							
								while( $reviews->have_posts() ) : $reviews->the_post(); ?>

									<div class="review-single-landing">
										<?php the_post_thumbnail(); ?>
										<?php the_title(); ?>
										<?php the_content(); ?>
									</div>
								
								<?php endwhile;	?>
						</div>
					</section>		
				</main>
			</div><!-- #primary -->
			<footer id="colophon" class="site-footer">
				<div class="site-info">
						<p><?php _e('Want to learn more?', 'nexus') ?></p>
						<a class="contact-btn join-footer"><?php _e('Join Nexus Club', 'nexus'); ?></a>	
				</div>
				<div class="copyright">
					<p>© Copyright 2019 Nexus Education Consulting</p>
				</div><!-- .site-info1 -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

	<?php wp_footer(); ?>

	</body>
</html>

