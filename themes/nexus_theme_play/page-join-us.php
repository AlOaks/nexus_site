<?php
/**
 * Template Name: Join
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
				<h1 class="type-page-title"><?php _e('Join Nexus Club', 'nexus'); ?></h1>
            </div>
            <section class="login-page-container">
			    <div class="login-page-form">                    
                    <?php the_content(); ?>                        
                </div>
                <div class="login-page-info">
                    <?php echo get_the_post_thumbnail(); ?>
                    <ul>
                        <li>Gain access to our most helpful contents that exclusive for Nexus Club Members.</li>
                        <li>Keep track of the lastest news about studying abroad.</li>
                        <li>Prepare yourself completely before starting your journey.</li>
                    </ul>
                </div>
            </section>
            <section class="start-journey-section">
			    <h2 class="start-title"><?php _e('Start Your Journey', 'nexus'); ?></h2>
			    <p class="start-description"><?php _e('Let us help you find your path to success.', 'nexus'); ?></p>
			    <a class="contact-btn contact-trigger"><?php _e('Contact Us', 'nexus'); ?></a>
		    </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
