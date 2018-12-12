<?php
/**
 * Template Name: Services
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
                <h1 class="services-header"><?php the_title(); ?></h1>
            </div>
            <section class="about-container">
                <h1 class="about-title"><?php _e('About Nexus', 'nexus'); ?></h1>
                <p class="about-description"><?php _e('Canadian Universities, Language Schools or even Work and Study programs. Nexus Education Consulting helps international students to find their ideal school to study in Canada. Our services go from education consulting, to accommodation and health insurance services. With more than 10 years of experience and hundreds of students who have successfully studied through our services, Nexus is one of the best options to study in Canada!', 'nexus'); ?></p>
                <button class="get-in-touch contact-btn"><?php _e('Get in Touch', 'nexus'); ?></button>
            </section>

            <section class="how-we-help-section">
                <h1 class="how-we-help-title"><?php _e('How We Help', 'nexus'); ?></h1>
                <div class="planning steps-div">
                    <div class="step-container">
                        <img class="round-img" src=<?php echo get_template_directory_uri().'/assets/images/01@2x.png'; ?> />
                        <div class="div-content">
                            <h3 class="div-title"><?php _e('Why Nexus?', 'nexus'); ?></h3>
                            <p class="div-description"><?php _e('We believe in bringing life changing opportunities to everyone. The way we do it is by providing personalized education consulting services, by listening and understanding the needs of our clients and by offering the necessary services for anyone to complete their dream of studying in Canada.', 'nexus'); ?>.</p>
                            <a class="learn-btn"><?php _e('Learn More', 'nexus'); ?></a>
                        </div>
                    </div>
                </div>
                <img class="path" src=<?php echo get_template_directory_uri().'/assets/images/Path-2@3x.png'; ?> />
                <div class="applying steps-div">
                    <div class="step-container">
                        <div class="div-content">
                            <h3 class="div-title"><?php _e('Education Consulting', 'nexus'); ?></h3>
                            <p class="div-description"><?php _e('From learning a language to studying at a university, we´ll help you find the school and program that best suits your goals. In our personalized counseling service we will explain everything related to studying in Canada and help you solve all your doubts about the subject. What are you waiting for, book a consultation!', 'nexus'); ?></p>
                            <a class="learn-btn"><?php _e('Learn More', 'nexus'); ?></a>
                        </div>
                        <img class="round-img" src=<?php echo get_template_directory_uri().'/assets/images/02@2x.png'; ?> />
                    </div>
                </div>
                <img class="path" src=<?php echo get_template_directory_uri().'/assets/images/Path-4@3x.png'; ?> />
                <div class="arriving steps-div">
                    <div class="step-container">
                        <img class="round-img" src=<?php echo get_template_directory_uri().'/assets/images/03@2x.png'; ?> />
                        <div class="div-content">
                            <h3 class="div-title"><?php _e('Document Processing', 'nexus'); ?></h3>
                            <p class="div-description"><?php _e('Yes, we do that as well! Nexus do all the document processing that you could need for studying in Canada. For getting your required visa to applying to the school or program that you choose.', 'nexus'); ?></p>
                            <a class="learn-btn"><?php _e('Learn More', 'nexus'); ?></a>
                        </div>
                    </div>
                </div>
                <img class="path" src=<?php echo get_template_directory_uri().'/assets/images/Path-2@3x.png'; ?> />
                <div class="first-days steps-div">
                    <div class="step-container">
                        <div class="div-content">
                            <h3 class="div-title"><?php _e('Accommodation', 'nexus'); ?></h3>
                            <p class="div-description"><?php _e('Cause we understand that finding the right place to live while you study is as important as the studying program itself! Nexus will help you find the right accommodation for you.', 'nexus'); ?></p>
                            <a class="learn-btn"><?php _e('Learn More', 'nexus'); ?></a>
                        </div>
                        <img class="round-img" src=<?php echo get_template_directory_uri().'/assets/images/04@2x.png'; ?> />
                    </div>
                </div>
                <img class="path" src=<?php echo get_template_directory_uri().'/assets/images/Path-4@3x.png'; ?> />
                <div class="living steps-div">
                    <div class="step-container">
                        <img class="round-img" src=<?php echo get_template_directory_uri().'/assets/images/05@2x.png'; ?> />
                        <div class="div-content">
                            <h3 class="div-title"><?php _e('Living in Canada', 'nexus'); ?></h3>
                            <p class="div-description"><?php _e('Not only we help you prior your arrival, but also while you´re studying. Nexus services include providing information that will help you in your adaptation process in Canada. We also will keep in touch with you to help you with anything you need.', 'nexus'); ?></p>
                            <a class="learn-btn"><?php _e('Learn More', 'nexus'); ?></a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="consultants-section">
                <h1 class="consultants-title"><?php _e('Our Education Consultants' , 'nexus'); ?></h1>
                <div class="consultants-container">
                    <div class="consultant cons1">
                        <img class="consul-img" src=<?php echo get_template_directory_uri().'/assets/images/TeamMember01@2x.png'; ?> />
                        <h1 class="consul-name">Rafael Schafer Marques</h1>
                        <h2 class="consul-position"><?php _e('Director of International Studies', 'nexus'); ?></h2>
                        <div class="consul-contact">
                            <a class="social-consul-link" href="https://linkedin.com"><i class="fab fa-linkedin-in"></i></a>
                            <a class="social-consul-link" href="https://facebook.com"><i class="fab fa-facebook"></i></a>
                            <a class="social-consul-link" href="https://outlook.com"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                    <div class="consultant cons2">
                        <img class="consul-img" src=<?php echo get_template_directory_uri().'/assets/images/TeamMember02@2x.png'; ?>  />
                        <h1 class="consul-name">Carolina Ribeiro</h1>
                        <h2 class="consul-position"><?php _e('Advisor','nexus'); ?></h2>
                        <div class="consul-contact">
                            <a class="social-consul-link" href="https://facebook.com"><i class="fab fa-facebook"></i></a>
                            <a class="social-consul-link" href="https://outlook.com"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>    
            </section>
            <section class="start-journey-section">
				<h1 class="start-title"><?php _e('Start Your Journey', 'nexus'); ?></h1>
				<p class="start-description"><?php _e('Let us help you find your path to success', 'nexus'); ?></p>
				<a class="contact-btn start-trigger"><?php _e('Contact Us', 'nexus'); ?></a>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
