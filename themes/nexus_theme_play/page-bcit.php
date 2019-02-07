<?php
/**
 * Template Name: BCIT
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nexus_theme_scratch
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="site">
			<div id="primary" class="content-area">
				<main id="main" class="site-main">
                    <section class="bcit-main">
                        <section class="bcit-hero">
                            <div class="blk-ovrly bcit-hero-ovrlay"></div>
                            <?php the_post_thumbnail(); ?>
                        </section>
                        <section class="bcit-header">

								<?	$form = CFS()->get('bcit_form'); ?>
								<? $schoolName = get_the_title(); ?> 

                            <div class="bcit-header-title"><?php the_content(); ?></div>
                            <div class="bcit-header-form"><?php echo $form; ?></div>
                        </section>
					</section>
					<p class="learn-more-bcit"><?php _e('Know more about ', 'nexus'); ?> <? echo $schoolName; ?></p>

					
					<section class="bcit-info">
						
						<div class="popular-programs-div block-info">
							<div class="popu-list">
								<p><? _e('Most Popular Programs', 'nexus'); ?></p>
								<ul>
									<? 
										$popular = CFS()->get('popular_programs'); 

										foreach($popular as $popu) {
											echo '<li>'.$popu['popular_program'].'</li>';
										}
									?>
								</ul>
							</div>
							<img src='<? echo CFS()->get('popular_programs_photo'); ?>' >
						</div>
						<div class="details-div block-info">
							<img src='<? echo CFS()->get('details_photo'); ?>' >
							<div class="details-list">
								<p><? _e('Details', 'nexus'); ?></p>
								<ul>
									<? 
										$details = CFS()->get('details');
										
										foreach($details as $detail) {
											echo '<li>'.$detail['detail'].'</li>';
										}
									?>

								</ul>
							</div>
						</div>
					</section>
				</main>
			</div><!-- #primary -->
			<footer id="colophon" class="site-footer">
				<div class="bcit-site-info">
						<div class="footer-ovrly"></div>
						<p><?php _e('I like it! How do I apply?', 'nexus') ?></p>
						<a href="/contact" class="bcit-btn-footer"><?php _e('I want to learn more', 'nexus'); ?></a>	
				</div>
				<div class="copyright">
					<p>© Copyright 2019 Nexus Education Consulting</p>
				</div><!-- .site-info1 -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

	<?php wp_footer(); ?>

	</body>
</html>

