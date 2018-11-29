<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package nexus_theme_scratch
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			
		<?php
		while ( have_posts() ) : the_post(); ?>

				<div class="single-hero">
					<?php the_post_thumbnail(); ?>
					<p><?php the_date(); ?></p>
				</div>

				<div class="single-content">
					<h1><?php the_title(); ?></h1>
					<p><?php the_content(); ?></p>
				</div>	
			
			<?php
			// If comments are open or we have at least one comment, load up the comment template.
			

		endwhile; // End of the loop.
		?>

		<div class="share-links-container">
			<h3 class="sharing-title"><?php _e('Like this post? Share it with your friends!', 'nexus'); ?></h1>
			<ul class="share-list">
				<li class="share-link"><a href="https://www.facebook.com/sharer.php"><i class="fab fa-facebook"></i></a></li>
				<li class="share-link"><a href="https://www.linkedin.com/shareArticle"><i class="fab fa-linkedin"></i></a></li>
				<li class="share-link"><a href="https://www.twitter.com/intent/tweet"><i class="fab fa-twitter"></i></a></li>
				<li class="share-link"><a href="https://www.google.com/sharer.php"><i class="fab fa-google-plus"></i></a></li>
			</ul>
		</div>
		<section class="comments-section">
			<h3 class="comments-header"><?php _e('Leave a Comment', 'nexus'); ?></h3>
			<?php 
			
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

			?>
		</section>

		<section class="people-likes">
				<p class="people-title"><?php _e('People Also Read', 'nexus'); ?></p>
				<div class="programs-container-people">
				<button class="peo-btn-left peo-btn"><i class="fas fa-chevron-left"></i></button>
				<button class="peo-btn-right peo-btn"><i class="fas fa-chevron-right"></i></button>
					<?php 
						$args = array('post_type' => 'post', 'posts_per_page' => 3);
						$recommended = new WP_query($args);
						
						while( $recommended->have_posts() ) : $recommended-> the_post();

					?>	
						<div class="people-program-container">
							<?php the_post_thumbnail(); ?>
							<p class="people-post-name"><?php the_title(); ?></p>
							<p class="people-excerpt"><?php echo get_the_excerpt(); ?></p>
							<a class="post-link-single" href=<?php echo get_the_permalink(); ?>><?php _e('Read', 'nexus'); ?></a>
						</div>
					<?php		

						endwhile; // End of the loop.
					?>
				</div>			
			</section>

		<section class="start-journey-section">
			<h1 class="start-title"><?php _e('Want to read even better posts?', 'nexus'); ?></h1>
			<p class="start-description"><?php _e('Get access to our club member exclusive content.','nexus'); ?></p>
			<a class="contact-btn"><?php _e('Join Nexus Club', 'nexus'); ?></a>
		</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
