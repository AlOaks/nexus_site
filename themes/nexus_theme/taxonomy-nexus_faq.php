<?php
/**
 * 
 * Template Name: FAQ
 * @package nexus_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="faq-wrapper">
				<div class="title-wrapper">	
					<div class="faq-hero-image">
						<h1 class="faq-title"> FAQ </h1>
					</div>
				</div>
			<section class="faq-page">

				<ul class "faq-categories">
					<?php   
      			$args = array(
        			'post_type' => 'nexus_faq'
						);		
						$the_query = new WP_Query($args);
					?>

					<?php 
						if ($the_query->have_posts() ) : 
						while ($the_query->have_posts() ) : $the_query->the_post()
					?>

					<li>
					
						<?php the_post_thumbnail( 'full' ); ?>
					
						<div class="list-text">
							<a href="<?php the_permalink(); ?>" rel="faq title"> 
								<button class="read-more">Learn More</button>
							</a>
							<a href="<?php the_permalink(); ?>" rel="faq title"> 
								<h2><?php the_title(); ?></h2>
							</a>
							
							<p><?php echo wp_trim_words(get_the_excerpt(), 25, '...'); ?></p>
					
							<div class="underline"></div>
						</div>
					</li>
					
					<div class="shadow-border"></div>
					
					<?php endwhile; // End of the loop. ?>
					<?php endif; ?>
				</ul>		
					
				<div class="faq-journey">
      		<h2 class="faq-journey-h2">Start Your Journey<h2><br>
					<div class="journey-text">
						<p>Let us help you find your path to success</p>
					</div>
					<a href="<?php echo home_url();?>/consult/"><div class="consult">Book Consult</div></a>
				</div>	
			</div>
			</section>		
		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_footer() ?>

