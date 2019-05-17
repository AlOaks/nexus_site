<?php
/**
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
                <h1 class="services-header">Blog</h1>
			</div>
			<section class="blog-body">

				<div class="popular-section">
					<div class="popular-slider">
						<button class="popular-btn bttn-lft"><</button>
						<button class="popular-btn bttn-right">></button>
						<h2 class="popular-banner"><?php _e('Popular posts', 'nexus'); ?></h2>
							
						<ul class="slides">
						<?php
							while ( have_posts() ): the_post(); 
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

				<?php
					$cat_args = array('post_type' => 'posts');
					$cats = get_categories($cat_args);
				?>
				<ul class="blog-cats">
					<?php
						foreach ($cats as $cat) {
							$cat_id = get_cat_ID($cat->name);
							$cat_link = get_category_link($cat_id);
					?>
							<li class="post-cat"><a href=<?php echo $cat_link; ?>><?php echo $cat->name; ?></a></li>
					<?php		
						}
					?>
				</ul>
				

				<div class="blog-categories-dropdown"><?php _e('Categories', 'nexus'); ?> <i class="fas fa-chevron-down"></i><i class="fas fa-chevron-up"></i></div>
				<ul class="blog-cats-dropdown">
					<?php
						foreach ($cats as $cat) {
							$cat_id = get_cat_ID($cat->name);
							$cat_link = get_category_link($cat_id);
					?>
							<li class="post-cat"><a href=<?php echo $cat_link; ?>><?php echo $cat->name; ?></a></li>
					<?php		
						}
					?>
				</ul>

				<section class="blog-section">
						<?php		


						query_posts('posts_per_page=4'); 

						while ( have_posts() ) : the_post(); 

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
								} else if(empty($video)) {
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
				<?php the_posts_pagination(); ?>

					
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
