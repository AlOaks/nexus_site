<?php
/**
 * Template Name: FAQ
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
				<h1 class="type-page-title"><?php _e('Frequently Asked Questions', 'nexus'); ?></h1>
			</div>
			<section class="questions-container">
					<?php 
						$faqLoop = CFS()->get('faq'); 
						
						foreach($faqLoop as $question) {
							
							echo '<a href="" class="question">'.$question['question'].'</a>';
							echo '<p class="answer">'.$question['answer'].'</p>';	

						}
					?>
			</section>
			<section class="start-journey-section">
				<h1 class="start-title"><?php _e('Have more questions?', 'nexus'); ?></h1>
				<p class="start-description"><?php _e('Chat with one of our advisors!', 'nexus'); ?></p>
				<a class="contact-btn start-trigger"><?php _e('Contact Us', 'nexus'); ?></a>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();


  