<?php
/**
 * The template for displaying archive pages.
 * Template Name: Programs
 * @package nexus_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="hidden hero-wrapper">
				 <div class="hero-image">
          <h1 class="about-title"> Programs </h1>
          <div class="underline"></div>
				</div>
			</div>
				
			<div class="program-content">
				<div class="select-form-wrapper">
					<div class="program-title-wrapper">
						<h1 class="program-title"> I Want To Study: </h1>
					</div>
					<div class="select-container">	
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
				<div class="search-results"></div>
			</div> <!-- #content -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

