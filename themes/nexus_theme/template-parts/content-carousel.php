  <?php
  /**
   * Template part for displaying single posts.
   *
   * @package nexus_Theme
   */

  ?>

	<article id="post-<?php the_ID(); ?>" class="carouselplaceholder"; ?>
			<div class="carouselplaceholder__content-wrapper">
				<div class="carouselplaceholder__info-wrapper">
					<?php the_title( '<h2 class="carouselplaceholder__subheader">', '</h1>' ); ?>
					<div class="carouselplaceholder__info">
						<?php the_content(); ?>
					</div>

					<div class="curious">
			<h2 class="curious__subheader">Curious About Canada?</h2>
			<a href="/nexus/FAQ/" class="curious__button">Visit FAQ Section</a>
		</div>	
		
				</div><!-- .entry-content -->
				<div class="carouselplaceholder__image-wrapper">
					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'large' ); ?>
					<?php endif; ?>
				</div>	
			</div><!-- content-wrapper -->
  </article><!-- #post-## -->
