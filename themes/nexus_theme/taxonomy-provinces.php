<?php
/**
 * The template for displaying archive pages.
 * Template Name: Programs
 * @package nexus_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="hero-wrapper">
				 <div class="hero-image">
          <h1 class="about-title"> Programs </h1>
          <div class="underline"></div>
				</div>
			</div>
				
			<div class="program-content-container">
				<div class="select-form-wrapper select-form-wrapper-searched">
					<div class="program-title-wrapper">
					</div>
					<div class="select-container-searched select-container">	
					<?php
						if( $terms = get_terms( array(
											'taxonomy' => 'program_type',
											'hide_empty' => 0 ) ) ) :
						
							echo '<select name="programfilter"><option>Program</option>';
							foreach ( $terms as $term ) :
								echo '<option value="' . $term->slug . '">' . $term->name . '</option>'; // ID of the category as the value of an option
							endforeach;
							echo '</select>';
						endif;
					?>
					</div>
						<h2 class="program-title"> In </h2>
						<div class="select-container">	
						<?php
						if( $terms = get_terms( array(
													'taxonomy' => 'provinces', 
													'hide_empty' => 0) ) ) : // to make it simple I use default categories
							echo '<select name="provincefilter"><option>Province</option>';
							foreach ( $terms as $term ) :
								echo '<option value="' . $term->slug . '">' . $term->name . '</option>'; // ID of the category as the value of an option
							endforeach;
								echo '</select>';
						endif;
						?>
						</div>
						<div class="button-wrapper">
							<button class="program-filter-submit want-to">Explore</button>
						</div>
					</div> <!-- #select-form-wrapper -->
				<div class="search-results">
					<?php if ( have_posts() ) : ?>
	
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
	
					<?php get_template_part( 'template-parts/content-provinces-archive' ); ?>
	
				<?php endwhile; ?>
	
				<?php the_posts_navigation(); ?>
	
			<?php else : ?>
	
				<?php get_template_part( 'template-parts/content', 'none' ); ?>
	
			<?php endif; ?>
				</div>
			</div> <!-- #content -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>