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
            <div class="services-title-container">
                <h1 class="services-header">Services</h1>
            </div>
            <section class="about-container">
                <h1 class="about-title">About Nexus</h1>
                <p class="about-description">Breif introduction of Nexus, and eye catching mission statement. All success stories have a common structure that helps dreams become reality. We believe that orientation, experience, and teamwork is the most powerful tools available to achieve success. Our</p>
                <button class="get-in-touch">Get in Touch</button>
            </section>

            <section class="how-we-help-section">
                <h1 class="how-we-help-title">How We Help</h1>
                <div class="planning steps-div">
                    <img class="round-img" src=<?php echo get_template_directory_uri().'/assets/images/01@2x.png'; ?> />
                    <div class="div-content">
                        <h1 class="div-title">Planning and Organizing</h1>
                        <p class="div-description">We are passionate about graphic design and bring it to life and pride ourselves on creating memorable. We are passionate about graphic design and bring it to life and pride ourselves on creating memorable.We are passionate about graphic design and bring it to life and pride ourselves on creating memorable.</p>
                        <button class="learn-btn">Learn More</button>
                    </div>
                </div>
                <img class="path" src=<?php echo get_template_directory_uri().'/assets/images/path-img.png'; ?> />
                <div class="applying steps-div">
                    <div class="div-content">
                        <h1 class="div-title">Applying for School</h1>
                        <p class="div-description">We are passionate about graphic design and bring it to life and pride ourselves on creating memorable. We are passionate about graphic design and bring it to life and pride ourselves on creating memorable.We are passionate about graphic design and bring it to life and pride ourselves on creating memorable.</p>
                        <button class="learn-btn">Learn More</button>
                    </div>
                    <img class="round-img" src=<?php echo get_template_directory_uri().'/assets/images/02@2x.png'; ?> />
                </div>
                <img class="path" src=<?php echo get_template_directory_uri().'/assets/images/path2-img.png'; ?> />
                <div class="arriving steps-div">
                    <img class="round-img" src=<?php echo get_template_directory_uri().'/assets/images/03@2x.png'; ?> />
                    <div class="div-content">
                        <h1 class="div-title">Preparing for Arriving</h1>
                        <p class="div-description">We are passionate about graphic design and bring it to life and pride ourselves on creating memorable. We are passionate about graphic design and bring it to life and pride ourselves on creating memorable.We are passionate about graphic design and bring it to life and pride ourselves on creating memorable.</p>
                        <button class="learn-btn">Learn More</button>
                    </div>
                </div>
                <img class="path" src=<?php echo get_template_directory_uri().'/assets/images/path-img.png'; ?> />
                <div class="first-days steps-div">
                    <div class="div-content">
                        <h1 class="div-title">First Days in Canada</h1>
                        <p class="div-description">We are passionate about graphic design and bring it to life and pride ourselves on creating memorable. We are passionate about graphic design and bring it to life and pride ourselves on creating memorable.We are passionate about graphic design and bring it to life and pride ourselves on creating memorable.</p>
                        <button class="learn-btn">Learn More</button>
                    </div>
                    <img class="round-img" src=<?php echo get_template_directory_uri().'/assets/images/04@2x.png'; ?> />
                </div>
                <img class="path" src=<?php echo get_template_directory_uri().'/assets/images/path2-img.png'; ?> />
                <div class="living steps-div">
                    <img class="round-img" src=<?php echo get_template_directory_uri().'/assets/images/05@2x.png'; ?> />
                    <div class="div-content">
                        <h1 class="div-title">Living in Canada</h1>
                        <p class="div-description">We are passionate about graphic design and bring it to life and pride ourselves on creating memorable. We are passionate about graphic design and bring it to life and pride ourselves on creating memorable.We are passionate about graphic design and bring it to life and pride ourselves on creating memorable.</p>
                        <button class="learn-btn">Learn More</button>
                    </div>
                </div>
            </section>

            <section class="consultants-section">
                <h1 class="consultants-title">Our Education Consultants</h1>
                <div class="consultant cons1">
                    <img class="consul-img" src="" />
                    <h1 class="consul-name"></h1>
                    <h2 class="consul-position"></h2>
                    <div class="consul-contact">
                        <a class="social-consul-link" href="https://linkedin.com"><i class="fab fa-linkedin-in"></i></a>
                        <a class="social-consul-link" href="https://facebook.com"><i class="fab fa-facebook"></i></a>
                        <a class="social-consul-link" href="https://outlook.com"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
                <div class="consultant cons2">
                    <img class="consul-img" src="" />
                    <h1 class="consul-name"></h1>
                    <h2 class="consul-position"></h2>
                    <div class="consul-contact">
                        <a class="social-consul-link" href="https://facebook.com"><i class="fab fa-facebook"></i></a>
                        <a class="social-consul-link" href="https://outlook.com"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
