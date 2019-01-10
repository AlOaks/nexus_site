<?php
/**
 * Template Name: Reset
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
				<h1 class="type-page-title"><?php _e('Password Reset', 'nexus'); ?></h1>
            </div>
            <section class="login-page-container">
			    <div class="login-page-form">
                    <p>Forgot your password? Enter your email addres and we'll send you a recovery link.</p>                   
                    <?php the_content(); ?>                        
                </div>
            </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
