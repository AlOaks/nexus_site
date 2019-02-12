<?php
/**
 * Template Name: Thanks
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
			</div>
			<div class="thanks-page-form">
                <h2><? _e('Thank You!', 'nexus'); ?></h2>
                <p><? _e('We will get back to you as soon as possible!', 'nexus'); ?></p>
                <a href="https://nexuseducanada.com"><? _e('Back to home', 'nexus'); ?></a>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
