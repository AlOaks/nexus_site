<?php
/**
 * Template Name: Club
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
                <h1 class="services-header">Nexus Club</h1>
			</div>
			<section class="club-body">

				<div class="popular-section">
					<div class="popular-slider">
						<button class="popular-btn bttn-lft"><</button>
						<button class="popular-btn bttn-right">></button>
						<h2 class="popular-banner"><?php _e('Featured posts', 'nexus'); ?></h2>
						
						
						<?php 
							$argsFeat = array(
								'post_type' => 'premium_content',	
							); 
							
							$premFeat = new WP_query($argsFeat);

							?>
							
						<ul class="slides">
						<?php
							while ( $premFeat->have_posts() ): $premFeat->the_post(); 
							$video = CFS()->get('post_video');

							if(empty($video)) { ?>
									<li class="popular-item">
										<a class="popular-title" href=<?php echo the_permalink(); ?>>
											<?php the_post_thumbnail(); ?>
											<p class="slider-item-title"><?php the_title(); ?></p>
										</a>
									</li>
								
						<?php 
							}
							endwhile; 
							
							wp_reset_query();
							?>
						</ul>
					</div>
				</div>
				<section class="blog-section">
						<?php		

						$args2 = array(
							'post_type' => 'premium_content'
						);
						
						$premposts = new WP_query($args2);

						while ( $premposts->have_posts() ): $premposts->the_post(); 
							
								$video = CFS()->get('post_video');
								$title = get_the_title();
								$excerpt = get_the_excerpt();
								$img = get_the_post_thumbnail();

								if (!empty($video)) { ?>
									<div class="video-container">
										<div class="post-video"><?php echo $video ?></div>
										<h2 class="video-title"><?php echo $title ?></h2>
									</div>
								<?php	
								} else if (empty($video)) {
								?>
									<div class="post-container">
										<?php echo $img; ?>
										<h2 class="post-title"><?php echo $title; ?></h2>
										<p class="post-excerpt"><?php echo $excerpt; ?></p>
										<a class="post-link" href=<?php echo the_permalink(); ?>><?php _e('Read', 'nexus'); ?></a>
									</div>
								<?php
								}
							endwhile;

						wp_reset_query();
						?>
							
						
						
				</section>
				<div id="more_posts_club"> <?php _e('More Posts', 'nexus'); ?></div>
					
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
