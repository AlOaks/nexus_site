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

				<div class="popular-slider">
					<h1 class="popular-banner">Popular posts</h1>
					<button class="slider-btn-blog blog-btn-right"><</button>
					<button class="slider-btn-blog blog-btn-lft">></button>
                	
					<?php 


						query_posts('posts_per_page=3');
						

						while ( have_posts() ): the_post(); 
					?>

						<div class="slider-item">
							<?php the_post_thumbnail(); ?>
							<h1 class="slider-item-title"><?php the_title(); ?></h1>
						</div>


					<?php endwhile; ?>
				</div>


				<?php
					$cat_args = array('post_type' => 'posts');
					$cats = get_categories($cat_args);
				?>
				<ul class="blog-cats">
					<li class="post-cat"><a href=<?php echo esc_url( home_url('/blog') ); ?>>All</a></li>
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
				<?php		

				query_posts('posts_per_page=-1');			
				while ( have_posts() ) : the_post(); ?>

				<?php 
					
						$video = CFS()->get('post_video');
						$excerpt = get_the_excerpt();


						if (!empty($video)) { ?>

							<div class="post-video"><?php echo $video; ?></div>
				<?php
							the_title();

						} else { 

							the_post_thumbnail();
							the_title();
				?>
							<p class="post-excerpt"><?php echo $excerpt ?></p>
							<a class="post-link" href=<?php the_permalink(); ?>>Read</a>	
				<?php
						}
				endwhile; 
				?>
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
