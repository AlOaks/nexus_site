<?php
/**
 * The template for displaying all pages.
 *
 * @package nexus_Theme
 */

get_header(); ?>




	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="blog-wrapper">



<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
echo '<div class="blog-picture" style="background: url('. $url.');background-size: cover;">'; ?>

	<p>	<?php nexus_posted_on(); ?> / <?php nexus_comment_count(); ?> / <?php nexus_posted_by(); ?></p>
	<!-- title , meta, image -->
</div>
<!-- dummy text -->
<div class="single-blog-title">
<h1> <?php the_title(); ?> </h1>
	<!-- <div class="underline"></div> -->
	</div>
	<article class="blog-post"><p> 
	<?php while ( have_posts() ) : the_post(); ?>

	<?php the_content(); ?>

			<?php endwhile; // End of the loop. ?>
</p></article>
<div class="blog-comments">
<?php if ( comments_open() || get_comments_number() ) :
											comments_template();
									endif;
								?>
								</div>
<!--  -->
</div>


<div class="about-journey">
      		<h2 class="about-journey-h2">Start Your Journey<h2><br>
					<div class="journey-text">
						<p>Let us help you find your path to success</p>
					</div>
					<a href="<?php echo home_url();?>/consult/"><div class="consult">Book Consult</div></a>
				</div>	

	


		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
