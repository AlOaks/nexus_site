<?php
/**
  * The template for displaying all pages.
 * Template Name: Front Page
 * @package nexus_Theme
 */

get_header(); ?>

	<!-- Banner Section  -->

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<div class="full-page-wrapper">
			<div class="banner">
				<div class="banner__info">
					<p class="banner__info__p"> Dreaming Of </p>
					<h1 class="banner__info__h1">Canada?</h1>
				</div>	
					<p class="banner__p">Let us help you find <span class="banner__p__span">the right </span>program and school for you.
					</p>
			</div>
		
	<!-- Why Nexus? Introductory Section -->

  <section class="nexus-wrapper">
	  <div class="why-nexus">
			<div class="headergroup">
				<h2 class="why-nexus__header">Why use Nexus?</h2>
				<div class="underline"></div>
			</div>
			<p class="why-nexus__info">
				All success stories have a common structure that helps dreams become reality. We believe that orientation, experience, and teamwork is the most powerful tools available to achieve success. Our passion is to help every person learn to prepare a powerful action-plan and execute their life-changing journey of living in Canada effectively. 	All success stories have a common structure that helps dreams become reality. We believe that orientation, experience,
			</p>
			<button class="why-nexus__button">About Us</button>
		</div>
	</section>

	<!-- Program link section. This section is not displayed in the mobile version of the site.  -->

	<section class="front-choose-wrapper">
		<div class="front-choose-program">
			<div class="front-choose-program__info-wrapper">
				<div class="headergroup">
					<h2 class="front-choose-program__header">Choose your Program</h2>
					<div class="underline"></div>
				</div>
				<p class="front-choose-program__info">
	  			Nexus has partnered up with over 100 different programs.
				</p>
				<a href="/nexus/program/" class="front-choose-program__button">Programs</a>
			</div>			
		</div>	
	</section>

	<!-- Carousel for 'Why Canada' section -->

	<section class="why-canada">
		<div class="headergroup">
			<h2 class="why-canada__header">Why Canada?</h2>
			<div class="underline"></div>
				</div>
					<?php $args = array( 'post_type' => 'nexus_front_carousel', 'orderby' => 'rand', 'posts_per_page' => 3, ); $query = new WP_Query( $args );?>
					<div class="owl-carousel owl-theme">
									<!-- Begin Carousel Cell -->

									<?php if ( $query->have_posts() ) : ?>

										<?php while ( $query->have_posts() ) : $query->the_post(); ?>
											<?php get_template_part( 'template-parts/content-carousel' ); ?>

										<?php endwhile; ?>
										<?php wp_reset_postdata(); ?>

									<?php else : ?>

										<?php get_template_part( 'template-parts/content', 'none' ); ?>

    				                <?php endif; 

    				    wp_reset_query();?>
      		</div> <!-- carousel -->

					<!-- End Carousel -->

					<!-- 'Curious' section that is overlayed on top of the carousel  -->

	

	</section>
				<!-- End Carousel Section -->

				<!-- Browse Program Section. This section is not displayed in the desktop version of the site -->
	
	<section class="browse-programs">
		<div class="headergroup">
			<h2 class="browse-programs__header">Browse Programs in: </h2>
			<div class="underline"></div>
		</div>
		
			<?php
					$terms = get_terms( array(
						'taxonomy' => 'provinces',
						'hide_empty' => 0,
					));
					if ( ! empty( $terms ) ** ! is_wp_error( $terms)):
					?>
						<?php foreach ($terms as $term) : ?>
							<div class="browse-programs__subheading">	
								<p><?php echo $term->name; ?></p>
								<a class="bracket" href="<?php echo get_term_link( $term ); ?>"> > </a>
								
							</div>
						<?php endforeach; ?>
				<?php endif ?>
					

		
	</section>
	
<!-- ###### Main map and Province Icons - ##########-->
			<section class="choose-province-wrapper">
				<i class="bc fa fa-map-marker fa-4x">	<h3 class="show bc-text">British Columbia</h3></i>
				
				<i class="ab fa fa-map-marker fa-4x"><h3 class="ab-text">Alberta</h3></i>
				
				<i class="sk fa fa-map-marker fa-4x"><h3 class="sk-text">Saskatchewan</h3>	</i>
					
				<i class="man fa fa-map-marker fa-4x">	<h3 class="man-text">Manitoba</h3></i>
				
				<i class="on fa fa-map-marker fa-4x">	<h3 class="on-text">Ontario</h3></i>
				
				<i class="qc fa fa-map-marker fa-4x">	<h3 class="qc-text">Quebec</h3></i>
			<!-- ###### Title and info box on map  -->
				<div class="choose-province">
					<div class="headergroup">
						<h2 class="choose-province__header">Choose a Province</h2>
						<div class="underline"></div>
					</div>
					<p class="choose-province__info">
						Fusce tempor felis lacus, a hendrerit urna facilisis at. 								
					</p>						
				</div>		
			
			</section>
	
<!-- ##### Individual Province- Synced to relevant icon, To change image, got to front-page-maps and adjust the background image in section under Province Label. To edit text enter changes under the "choose-program__info class" ###### -->

<!-- British Columbia -->
	<section class="choose-wrapper-bc hide-prov">
	<h2 class="choose-program__header">British Columbia</h2>
	<i class="fa fa-map-marker" aria-hidden="true"></i>
				<div class="choose-program">
					<div class="choose-program__info-wrapper">
						<div class="headergroup">				
						</div>
						<p class="choose-program__info">
		
						"In winter, the heart of downtown [Vancouver] is 30 minutes from the ski slopes. In summer, sun seekers crowd its beaches and seaside promenades. And despite a rain-prone climate, it displays a perpetually sunny disposition. Consider it the supermodel of North American cities." – USA Today
						</p>
						<a href="<?php echo get_home_url() ?>/provinces/british-columbia/" class="choose-program__button">See Programs</a>
					</div>	
				</div>
			</section>

<!-- ###### Alberta ######  -->
	<section class="choose-wrapper-ab hide-prov">
		<h2 class="choose-program__header">Alberta</h2>
		<i class="fa fa-map-marker" aria-hidden="true"></i>
					<div class="choose-program">
						<div class="choose-program__info-wrapper">
							<div class="headergroup">				
							</div>
							<p class="choose-program__info">	
							Alberta is a province in Western Canada. Its landscape encompasses mountains, prairies, desert badlands and vast coniferous forests. It has more than 600 lakes, and rich mineral deposits. In the west, the Canadian Rocky Mountain Parks have glaciers in the Columbia Icefields. The Waterton Glacier International Peace Park is a biosphere reserve that straddles the southern border with the USA.
							</p>	
							<a href="<?php echo get_home_url() ?>/provinces/alberta/" class="choose-program__button">See Programs</a>
					</div>	
				</div>
	</section>

<!-- ###### Saskatchewan ######  -->	
	<section class="choose-wrapper-sk hide-prov">
		<h2 class="choose-program__header">Saskatchewan</h2>
		<i class="fa fa-map-marker" aria-hidden="true"></i>
					<div class="choose-program">
						<div class="choose-program__info-wrapper">
							<div class="headergroup">				
							</div>
							<p class="choose-program__info">
							Saskatchewan is a Canadian province that borders the United States to the south. Grassland covers its southern plains, and to the north are the rugged rock of the Canadian Shield plateau, coniferous forests, rivers and lakes. Regina, the provincial capital, is home to the Royal Saskatchewan Museum, with exhibits on natural history and the people of Canada’s First Nations.
							</p>
							<a href="<?php echo get_home_url() ?>/provinces/saskatchewan/" class="choose-program__button">See Programs</a>
					</div>	
					
				</div>
	</section>


<!-- ###### Manitoba ######  -->		
	<section class="choose-wrapper-man hide-prov">
		<h2 class="choose-program__header">Manitoba</h2>
		<i class="fa fa-map-marker" aria-hidden="true"></i>
				<div class="choose-program">
					<div class="choose-program__info-wrapper">
						<div class="headergroup">				
						</div>
						<p class="choose-program__info">
						Manitoba is a Canadian province bordered by Ontario to the east and Saskatchewan to the west. Its landscape of lakes and rivers, mountains, forests and prairies stretches from northern Arctic tundra to Hudson Bay in the east and southern farmland. Much wilderness is protected in more than 80 provincial parks, where hiking, biking, canoeing, camping and fishing are all popular.
						</p>
						<a href="<?php echo get_home_url() ?>/provinces/manitoba/" class="choose-program__button">See Programs</a>
					</div>	
				</div>
	</section>

<!-- ###### Ontario ######  -->		
	<section class="choose-wrapper-on hide-prov">
		<h2 class="choose-program__header">Ontario</h2>
		<i class="fa fa-map-marker" aria-hidden="true"></i>
				<div class="choose-program">
					<div class="choose-program__info-wrapper">
						<div class="headergroup">				
						</div>
						<p class="choose-program__info">
						Ontario is a province in east-central Canada that borders the U.S. and the Great Lakes. It's home to Ottawa, Canada's capital, known for Parliament Hill’s Victorian architecture and the National Gallery, featuring Canadian and indigenous art. Torontois home to the 553m-high CN Tower, with expansive views from its revolving restaurant, as well as High Park, site of a rare oak savannah habitat.
						</p>
						<a href="<?php echo get_home_url() ?>/provinces/ontario/" class="choose-program__button">See Programs</a>
					</div>	
				</div>
	</section>

<!-- ###### Quebec ######  -->	
	<section class="choose-wrapper-qc hide-prov">
		<h2 class="choose-program__header">Quebec</h2>
		<i class="fa fa-map-marker" aria-hidden="true"></i>
				<div class="choose-program">
					<div class="choose-program__info-wrapper">
						<div class="headergroup">				
						</div>
						<p class="choose-program__info">
						Québec is a predominantly French-speaking province in eastern Canada with 2 vibrant cities in its south, connected by the Chemin du Roy highway along the Saint Lawrence River. The metropolis Montréal is named after Mt. Royal, the triple-peaked hill at its heart. Dating to 1608, Québec City retains its old colonial core, Place Royale, and historic harbor, Vieux Port, now known for nightlife.
						</p>
						<a href="<?php echo get_home_url() ?>/provinces/quebec/" class="choose-program__button">See Programs</a>
					</div>	
				</div>
	</section>	

<!-- Student Review -->
			<section class="student-review">
				<div class="headergroup">
					<h2 class="student-review-header"> Student's Review </h2>
				</div>
				<?php $args = array( 'post_type' => 'nexus_reviews', 'orderby' => 'rand', 'posts_per_page' => 3, ); $query = new WP_Query( $args );?>
					<div class="owl-carousel owl-theme">
									<!-- Begin Carousel Cell -->

									<?php if ( $query->have_posts() ) : ?>

										<?php while ( $query->have_posts() ) : $query->the_post(); ?>
											<?php get_template_part( 'template-parts/content-review' ); ?>

										<?php endwhile; ?>
										<?php wp_reset_postdata(); ?>

									<?php else : ?>

										<?php get_template_part( 'template-parts/content', 'none' ); ?>

    				      <?php endif; 

    				    wp_reset_query();?>
					</div> <!-- carousel -->
					
			<div class="front-journey">
      		<h2 class="front-journey-h2">Start Your Journey</h2>
					<div class="journey-text">
						<p>Let us help you find your path to success</p>
					</div>
					<a href="<?php echo home_url();?>/consult/"><div class="consult">Book Consult</div></a>
				</div>	
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
