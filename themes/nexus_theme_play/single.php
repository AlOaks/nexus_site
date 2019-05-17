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

				<div class="single-content">
					<h1><?php the_title(); ?></h1>
					<p class="post-date"><?php the_date(); ?></p>
					<p><?php the_content(); ?></p>
				</div>	
			
			<?php
			// If comments are open or we have at least one comment, load up the comment template.
			

		endwhile; wp_reset_query();// End of the loop.
		?>

		<div class="share-links-container">
			<h3 class="sharing-title"><?php _e('Like this post? Share it with your friends!', 'nexus'); ?></h1>
			<ul class="share-list">
				<li class="share-link"><a href="https://www.facebook.com/sharer.php"><i class="fab fa-facebook"></i></a></li>
				<li class="share-link"><a href="https://www.linkedin.com/shareArticle"><i class="fab fa-linkedin"></i></a></li>
			</ul>
		</div>
		<section class="comments-section">
			<h3 class="comments-header"><?php _e('Leave a Comment', 'nexus'); ?></h3>
			<?php 
			
				if ( comments_open() || get_comments_number() ) :
					comments_template('', true);
				endif;
			?>
		</section>

		<section class="people-likes">
				<p class="people-title"><?php _e('People Also Read', 'nexus'); ?></p>
				<div class="posts-container-people">
					<?php 
						$args = array('post_type' => 'post', 'posts_per_page' => 3);
						$posts = new WP_query($args);

						while($posts->have_posts()) : $posts->the_post(); ?>

					<div class="post">
						<img class="post-image" src="<?php echo get_the_post_thumbnail_url(); ?>" />
						<?php 
						echo '<h3><a href="'.get_the_permalink().'">'.get_the_title().'</a></h3>';
						echo '<p class="post-meta">'.get_the_date().'</p>';
						echo '<p class="post-excerpt">'.get_the_excerpt().'</p>';
						?>
					</div>

					<?php endwhile; ?>
				</div>		
			</section>

		<section class="start-journey-section">
			<h2 class="start-title"><?php _e('Want to read even better posts?', 'nexus'); ?></h2>
			<p class="start-description"><?php _e('Get access to our club member exclusive content.','nexus'); ?></p>
			<a class="contact-btn join-footer"><?php _e('Join Nexus Club', 'nexus'); ?></a>
		</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
