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
                <p class="about-description"><?php _e('Breif introduction of Nexus, and eye catching mission statement. All success stories have a common structure that helps dreams become reality. We believe that orientation, experience, and teamwork is the most powerful tools available to achieve success. Our', 'nexus'); ?></p>
                <button class="get-in-touch"><?php _e('Get in Touch', 'nexus'); ?></button>
            </section>

            <section class="how-we-help-section">
                <h1 class="how-we-help-title"><?php _e('How We Help', 'nexus'); ?></h1>
                <div class="planning steps-div">
                    <div class="step-container">
                        <img class="round-img" src=<?php echo get_template_directory_uri().'/assets/images/01@2x.png'; ?> />
                        <div class="div-content">
                            <h1 class="div-title"><?php _e('Planning and Organizing', 'nexus'); ?></h1>
                            <p class="div-description"><?php _e('We are passionate about graphic design and bring it to life and pride ourselves on creating memorable. We are passionate about graphic design and bring it to life and pride ourselves on creating memorable.We are passionate about graphic design and bring it to life and pride ourselves on creating memorable', 'nexus'); ?>.</p>
                            <button class="learn-btn"><?php _e('Learn More', 'nexus'); ?></button>
                        </div>
                    </div>
                </div>
                <img class="path" src=<?php echo get_template_directory_uri().'/assets/images/Path-2@3x.png'; ?> />
                <div class="applying steps-div">
                    <div class="step-container">
                        <div class="div-content">
                            <h1 class="div-title"><?php _e('Applying for School', 'nexus'); ?></h1>
                            <p class="div-description">We are passionate about graphic design and bring it to life and pride ourselves on creating memorable. We are passionate about graphic design and bring it to life and pride ourselves on creating memorable.We are passionate about graphic design and bring it to life and pride ourselves on creating memorable.</p>
                            <button class="learn-btn"><?php _e('Learn More', 'nexus'); ?></button>
                        </div>
                        <img class="round-img" src=<?php echo get_template_directory_uri().'/assets/images/02@2x.png'; ?> />
                    </div>
                </div>
                <img class="path" src=<?php echo get_template_directory_uri().'/assets/images/Path-4@3x.png'; ?> />
                <div class="arriving steps-div">
                    <div class="step-container">
                        <img class="round-img" src=<?php echo get_template_directory_uri().'/assets/images/03@2x.png'; ?> />
                        <div class="div-content">
                            <h1 class="div-title"><?php _e('Preparing for Arriving', 'nexus'); ?></h1>
                            <p class="div-description">We are passionate about graphic design and bring it to life and pride ourselves on creating memorable. We are passionate about graphic design and bring it to life and pride ourselves on creating memorable.We are passionate about graphic design and bring it to life and pride ourselves on creating memorable.</p>
                            <button class="learn-btn"><?php _e('Learn More', 'nexus'); ?></button>
                        </div>
                    </div>
                </div>
                <img class="path" src=<?php echo get_template_directory_uri().'/assets/images/Path-2@3x.png'; ?> />
                <div class="first-days steps-div">
                    <div class="step-container">
                        <div class="div-content">
                            <h1 class="div-title"><?php _e('First Days in Canada', 'nexus'); ?></h1>
                            <p class="div-description">We are passionate about graphic design and bring it to life and pride ourselves on creating memorable. We are passionate about graphic design and bring it to life and pride ourselves on creating memorable.We are passionate about graphic design and bring it to life and pride ourselves on creating memorable.</p>
                            <button class="learn-btn"><?php _e('Learn More', 'nexus'); ?></button>
                        </div>
                        <img class="round-img" src=<?php echo get_template_directory_uri().'/assets/images/04@2x.png'; ?> />
                    </div>
                </div>
                <img class="path" src=<?php echo get_template_directory_uri().'/assets/images/Path-4@3x.png'; ?> />
                <div class="living steps-div">
                    <div class="step-container">
                        <img class="round-img" src=<?php echo get_template_directory_uri().'/assets/images/05@2x.png'; ?> />
                        <div class="div-content">
                            <h1 class="div-title"><?php _e('Living in Canada', 'nexus'); ?></h1>
                            <p class="div-description">We are passionate about graphic design and bring it to life and pride ourselves on creating memorable. We are passionate about graphic design and bring it to life and pride ourselves on creating memorable.We are passionate about graphic design and bring it to life and pride ourselves on creating memorable.</p>
                            <button class="learn-btn"><?php _e('Learn More', 'nexus'); ?></button>
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
