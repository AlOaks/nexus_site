<?php
/**
 * Template Name: Login
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
				<h1 class="type-page-title"><?php _e('Member Login', 'nexus'); ?></h1>
            </div>
            <section class="login-page-container">
			    <div class="login-page-form">                    
                    <?php the_content(); ?>                        
                </div>
                <div class="login-page-info">
                    <h2>Welcome back!</h2>
                    <?php echo get_the_post_thumbnail(); ?>
                </div>
            </section>
            <section class="start-journey-section">
			    <h1 class="start-title"><?php _e('Start Your Journey', 'nexus'); ?></h1>
			    <p class="start-description"><?php _e('Let us help you find your path to success.', 'nexus'); ?></p>
			    <a class="contact-btn start-trigger"><?php _e('Contact Us', 'nexus'); ?></a>
		    </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
