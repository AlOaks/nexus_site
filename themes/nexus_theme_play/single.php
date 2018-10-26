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
			<h3 class="sharing-title">Like this post? Share it with your friends!</h1>
			<ul class="share-list">
				<li class="share-link"><a href="https://www.facebook.com/sharer.php"><i class="fab fa-facebook"></i></a></li>
				<li class="share-link"><a href="https://www.linkedin.com/shareArticle"><i class="fab fa-linkedin"></i></a></li>
				<li class="share-link"><a href="https://www.twitter.com/intent/tweet"><i class="fab fa-twitter"></i></a></li>
				<li class="share-link"><a href="https://www.google.com/sharer.php"><i class="fab fa-google-plus"></i></a></li>
			</ul>
		</div>
			<h3 class="comments-header">Comments</h3>
			<?php 
			
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

			?>

		<section class="start-journey-section">
			<h1 class="start-title">Want to read even better posts?</h1>
			<p class="start-description">Get access to our club member exclusive content.</p>
			<a class="contact-btn">Join Nexus Club</a>
		</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
