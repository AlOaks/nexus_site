<?php
/**
 * Template Name: The Company
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nexus_theme_scratch
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            <div class="page-title-container">
                <h1 class="contact-header"><?php the_title(); ?></h1>
            </div>
            <section class="about-container about-content-div">
                <p class="about-description"><?php _e('Canadian Universities, Language Schools or even Work and Study programs. Nexus Education Consulting helps international students to find their ideal school to study in Canada. Our services go from education consulting, to accommodation and health insurance services. With more than 10 years of experience and hundreds of students who have successfully studied through our services, Nexus is one of the best options to study in Canada!', 'nexus'); ?></p>
            </section>
            <section class="purpose-container about-content-div">
                <h2 class="container-title"><?php _e('Our Purpose', 'nexus'); ?></h2>
                <p class="purpose-description"><?php _e('We strive to empower people to lead transformations in their lives through an educational experience and ultimately contribute to creating a better world.', 'nexus'); ?></p>
            </section>
            <section class="history-container about-content-div">
                <h2 class="container-title"><?php _e('Our History', 'nexus'); ?></h2>
                <p class="history-description"><?php _e('Nexus was born in 2009 from a great desire to help people make their dream of studying abroad become true by providing reliable information and using real experiences to develop the educational project for their exchange programs. In 2014, Nexus added a new category of programs along with a new Vancouver-based office and became specialized in higher-education in Canada. Today, in 2019, Nexus is proud to say that through the promotion of exchange programs and with accurate information and expert advice, it helps people to lead transformations in their lives, whether they goal is to develop a new language, start a new career based on a study experience or start a new life in Canada. Ultimately, Nexus hopes to increase the interaction and communication between people from different cultures and indirectly create a positive impact to help building a better world to all of us.', 'nexus'); ?></p>
            </section>
            <section class="manifest-container about-content-div">
                <h2 class="container-title"><?php _e('Manifest', 'nexus'); ?></h2>
                <p class="manifest-description"><?php _e("Your chance to challenge yourself is now. It's time to seek for new experiences and goals. Time to dare, create changes and to make an impact. Open yourself to infinite possibilities of growth and  development. The stage is ready, just waiting for people who dare to take the next step.", 'nexus'); ?></p>
            </section>
			<section class="beliefs-container about-content-div">
				<h2 class="container-title"><?php _e('Beliefs', 'nexus'); ?></h2>
				<ul>
					<li><?php_e('We believe that each individual has the potential to pursue their dreams and transform their lives.','nexus'); ?></li>
					<li><?php_e('We believe that education is the key to a fair world.','nexus'); ?></li>
					<li><?php_e('We believe in an increasingly connected and accessible world that needs people who want to make a positive impact.','nexus'); ?></li>
					<li><?php_e('We believe that self-knowledge sets you free, journeys inspire and experiences transform.','nexus'); ?></li>
					<li><?php_e('We believe in humanization as a premise of all that we are and do.','nexus'); ?></li>
				</ul>
			</section>


            <div class="team-container">
                <h2 class="the-team-title">The Team</h2>

				<?php 

				$args = array(
					'post_type' => 'team',
					'posts_per_page' => -1,
					'order' => DESC
				);

				$member = new WP_query($args);

			
				while ( $member->have_posts() ) : $member->the_post(); 
					$position = CFS()->get('position');
				?>

				
				<div class="member-container">
					<?php the_post_thumbnail(); ?>
					<div class="member-info">
						<h2 class="member-name"><?php echo the_title(); ?></h2>
						<p id="member-pos"><?php echo $position; ?></p>
						<?php _e(the_content(), 'nexus'); ?>
					</div>
				</div>
				
				<?php
				endwhile; // End of the loop.
				?>
			</div>
            
            <section class="start-journey-section">
				<h1 class="start-title"><?php _e('Questions?', 'nexus'); ?></h1>
				<p class="start-description"><?php _e("We've got you covered", 'nexus'); ?></p>
				<a class="contact-btn-faq" href="../faq"><?php _e('See FAQ', 'nexus'); ?></a>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
