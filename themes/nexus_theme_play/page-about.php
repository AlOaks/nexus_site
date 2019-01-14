<?php
/**
 * Template Name: Contact
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
                <img src=<?php echo get_template_directory_uri().'/assets/images/programs_home_01_nexus@3x.png.jpg'; ?> />
                <h2 class="container-title"><?php _e('Our Purpose', 'nexus'); ?></h2>
                <p class="purpose-description"><?php _e('The purpose of Nexus is to empower people to lead transformations in their lives through and educational experience in Canada.', 'nexus'); ?></p>
            </section>
            <section class="history-container about-content-div">
                <h2 class="container-title"><?php _e('Our History', 'nexus'); ?></h2>
                <p class="history-description"><?php _e('Founded in 1987 as a tourism agency, Nexus has acquired expertise in developing travel packages for its customers. In 2006, it expanded its horizons and inaugurated a specialized sector in operation for travel agencies.
With the promise of investing more and more in the industry, Nexus went further and opened its Vancouver office focused on disseminating cultural exchange in Brazil. Today, in 2019, Nexus is proud to say that beyond cultural exchange, our reason to exist is to empower people, through accurate information and expert advice, to lead transformations in their lives and realize their dream of living Canada, whether they goal is to develop a language, study and work or immigrate.
', 'nexus'); ?></p>
            </section>
            <section class="manifest-container about-content-div">
                <img src=<?php echo get_template_directory_uri().'/assets/images/program_info.png'; ?> />
                <h2 class="container-title"><?php _e('Manifest', 'nexus'); ?></h2>
                <p class="manifest-description"><?php _e("Your chance to challenge yourself is now. It's time to seek for new experiences and goals. Time to dare, create changes and to make an impact. Open yourself to infinite possibilities of growth and  development. The stage is ready, just waiting for people who dare to take the next step.", 'nexus'); ?></p>
            </section>
            
            <section class="start-journey-section">
				<h1 class="start-title"><?php _e('Questions?', 'nexus'); ?></h1>
				<p class="start-description"><?php _e("We've got you covered", 'nexus'); ?></p>
				<a class="contact-btn-faq" href="../faq"><?php _e('See FAQ', 'nexus'); ?></a>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
