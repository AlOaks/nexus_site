<?php
/**
 * The template for displaying all pages.
 *
 * @package nexus_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="hero">
			</div>

       <?php
        $args = array('post_type' => 'restricted_blog', 'posts_per_page' => 1);
        $rest_blog = new WP_Query($args);
        
        
        ?>

			<?php while ($rest_blog -> have_posts() ) : $rest_blog -> the_post(); ?>

				<?php the_title(); ?>
                <?php the_content(); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
