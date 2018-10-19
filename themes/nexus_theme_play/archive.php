<?php
/**
 * Template Name: Blog Archives
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

				<?php
					$args = array('post_type' => 'posts');
					$cats = get_categories($args);
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
				<?php
						}
				endwhile; 
				?>
		</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
