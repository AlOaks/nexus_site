<?php
/**
 * Template Name: Blog
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
						<h1 class="popular-banner">Popular posts</h1>
						
						
						<?php 
							query_posts('posts_per_page=3'); ?>
							
						<ul class="slides">
						<?php
							while ( have_posts() ): the_post(); 
							$video = CFS()->get('post_video');

							if(empty($video)) { ?>
								<a class="popular-title" href=<?php echo the_permalink(); ?>>
									<li class="popular-item">
										<?php the_post_thumbnail(); ?>
										<p class="slider-item-title"><?php the_title(); ?></p>
									</li>
								</a>
						<?php 
							}
							endwhile; ?>
						</ul>
					</div>
				</div>

				<?php
					$cat_args = array('post_type' => 'posts');
					$cats = get_categories($cat_args);
				?>
				<ul class="blog-cats">
					<li class="post-cat"><a href=<?php echo esc_url( home_url('/blog') ); ?>>All Category</a></li>
					<li class="post-cat"><a href=<?php echo esc_url( home_url('/blog') ); ?>>All Media</a></li>
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

				<div class="blog-categories-dropdown">Video <i class="fas fa-chevron-down"></i><i class="fas fa-chevron-up"></i></div>
				<ul class="blog-cats-dropdown">
					<li class="post-cat"><a href=<?php echo esc_url( home_url('/blog') ); ?>>All Category</a></li>
					<li class="post-cat"><a href=<?php echo esc_url( home_url('/blog') ); ?>>All Media</a></li>
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

						query_posts('posts_per_page=-1');			
						while ( have_posts() ) : the_post(); 
							
								$video = CFS()->get('post_video');
								$title = get_the_title();
								$excerpt = get_the_excerpt();
								$img = get_the_post_thumbnail();

								if (!empty($video)) { ?>
									<div class="video-container">
										<div class="post-video"><?php echo $video ?></div>
										<h1 class="video-title"><?php echo $title ?></h1>
									</div>
								<?php	
								}
						endwhile; 
						?>
				</section>
		</section>
		<section class="start-journey-section">
			<h1 class="start-title">Can't find what you're looking for?</h1>
			<p class="start-description">We have more to offer</p>
			<a class="contact-btn">Join Nexus Club</a>
		</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
