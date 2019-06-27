<?php
/**
 * Template Name: Nexus At Carnaval
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

$lang = get_locale();

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
                <main id="main" class="site-main carnaval-main">
					<?php while(have_posts()) : the_post(); ?>
					<div class="at-carnaval-hero">
						<img class="bkg" src=<?php echo get_the_post_thumbnail_url(); ?> />
						<img class="logo" src=<?php echo get_template_directory_uri().'/assets/images/logo-nexus-white-and-color.png'; ?> alt="nexus-logo" />
						<h1><?php the_title(); ?></h1>
						<p><?php the_content(); ?></p>
						<a href="#contest"><?php _e('Learn more', 'Langin Page Carnaval'); ?></a>
					</div>
					<div class="carnaval-main-description">
						<h2><?php echo CFS()->get('description_title'); ?></h2>
						<p><?php echo CFS()->get('description_main'); ?></p>
					</div>
					<div class="carnaval-partners">
						<h3><?php _e('Who is going to be with us?', 'Landing Page Carnaval'); ?></h3>
						<?php 
							$logos = CFS()->get('partners_logos');

							foreach($logos as $logo) {
								echo '<img src="'.$logo['partner_logo'].'" alt="partner-logo" />';
							}
						?>
					</div>
					<div class="carnaval-contest" id="contest">
						<div class="promo-contest-container">
							<h3><?php echo CFS()->get('contest'); ?></h3>
							<p><?php echo CFS()->get('contest_description'); ?></p>
						</div>
						<img src="<?php echo CFS()->get('contest_img'); ?>" alt="contest-image" />
					</div>
					<div class="carnaval-promo">
						<div class="promo-contest-container">
							<h3><?php echo CFS()->get('special_promotion'); ?></h3>
							<p><?php echo CFS()->get('special_promo_description'); ?></p>
						</div>
						<img src="<?php echo CFS()->get('promo_img'); ?>" alt="promo-image" />
					</div>
					<div class="carnaval-presign-up" id="presign">
						<h3><?php echo CFS()->get('presign_up_title'); ?></h3>
						<p><?php echo CFS()->get('presign_up_description'); ?></p>
						<form action="https://nexsueducanada.com/thanks-presignup" method="post">
							<input type="hidden" name="presign-lang" value=<?php echo $lang; ?> />
							<input type="text" name="presign-name" id="presignName" placeholder="<?php _e('Name', 'Landing Page Carnval'); ?>" required />
							<input type="text" name="presign-last-name" id="presignLastName" placeholder="<?php _e('Last Name', 'Landing Page Carnval'); ?>" required />
							<input type="number" name="presign-phone" id="presignPhone" placeholder="<?php _e('Phone/Whatsapp', 'Landing Page Carnval'); ?>" required />
							<input type="email" name="presign-email" id="presignEmail" placeholder="<?php _e('E-mail', 'Landing Page Carnval'); ?>" required />
							<input type="text" name="presign-country" id="presignCountry" placeholder="<?php _e('Country', 'Landing Page Carnval'); ?>" required />
							<button><?php _e('Pre-Sign Up', 'Landing Page Carnaval'); ?></button>
						</form>
					</div>
					<div class="carnaval-event-information">
						<h3><?php echo CFS()->get('event_information'); ?></h3>
						<div class="event-data">
							<p><i class="fas fa-map-marker"></i> <?php echo CFS()->get('carnaval_address'); ?></p>
							<p><i class="fas fa-calendar"></i> <?php echo CFS()->get('carnaval_date'); ?></p>
							<p><i class="fas fa-clock"></i> <?php echo CFS()->get('carnaval_time'); ?></p>
						</div>
						<img src="<?php echo CFS()->get('carnaval_map'); ?>" alt="event-map">
					</div>
					<?php endwhile; ?>
                </main><!-- #main -->
			</div><!-- #primary -->
            <footer id="colophon" class="site-footer">
				<div class="copyright">
					<p>© Copyright 2019 Nexus Education Consulting</p>
				</div><!-- .site-info1 -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

	<?php wp_footer(); ?>

	</body>
</html>