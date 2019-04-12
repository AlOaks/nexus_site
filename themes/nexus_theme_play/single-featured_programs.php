<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nexus_theme_scratch
 */
session_start();

$featProgs = createTokenForm('featProgs');


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
					<section class="main-landing">
						<div class="feat-progs-hero">
							<div class="featprogs-hero-parallax" data-parallax="scroll" data-image-src="<?php echo get_the_post_thumbnail_url(); ?>" ></div>
							<div class="featprogs-hero-ovrly"></div>
							<div class="featprogs-heading">
								<img src="<?php echo get_template_directory_uri().'/assets/images/nexus_logo_white.png'; ?>" />
							<?php while(have_posts()) : the_post(); ?>
								
								<?php the_title('<h1>', '</h1>'); ?>
								<h2><?php echo CFS()->get('school_name'); ?></h2>							
							<?php endwhile; ?>
							</div>
							<div class="featprogs-form-container">
								<form action="http://localhost/nexus/featured-thanks" method="post" id="featprogs-form">
									<label><?php _e('Chat with us!', 'Landing Pages'); ?></label>
									<?php $featuredProg = get_queried_object(); ?>
										<input type="hidden" name="tokenField" value="<?php echo $featProgs; ?>" >
										<input type="hidden" name="featprogram" id="featprogs-program" value="<?php echo $featuredProg->post_title; ?>" >
										<input type="text" name="featname" id="featprogs-name" placeholder="<?php _e('Name', 'Landing Pages'); ?>" />
										<input type="email" name="featemail" id="featprogs-email" placeholder="<?php _e('E-mail', 'Landing Pages'); ?>" />
										<input type="text" name="featphone" id="featprogs-phone" placeholder="<?php _e('Phone / Whatsapp', 'Landing Pages'); ?>" />
										<button id="featprogs-submit"><?php _e('Submit', 'Landing Pages'); ?></button>
								</form>
							</div>
						</div>
					</section>
					<section class="featprogs-content-section">
						<div class="content-div">
							<h3><?php _e('About the program', 'Landing Pages'); ?></h3>
							<?php the_content('<p>', '</p>'); ?>
							<h3><?php _e('About the school', 'Landing Pages'); ?></h3>
							<?php $aboutSchool = CFS()->get('about_school'); ?>
							<p><?php echo $aboutSchool; ?></p>
							<h3><?php _e('Experience Timeline', 'Landing Pages'); ?></h3>
							<?php $graphic = CFS()->get('graphic_support'); ?> 
							<img src="<?php echo $graphic; ?>" />
							<a href="#" class="get-quote-btn menu-item-51 menu-item-25"><?php _e('Chat with us!', 'Front-page'); ?></a>
						</div>
						<div class="sidebar-right">
							<?php $campus = CFS()->get('school_campus'); ?>
							<h3><?php _e('Campus', 'Landing Pages'); ?></h3>
							<ul><?php foreach($campus as $camp) {
								echo '<li>'.$camp['campus'].'</li>';
								} ?>
							</ul>
							<h3><?php _e('Class Time', 'Landing Pages'); ?></h3>
							<p><?php echo CFS()->get('class_time'); ?></p>
							<h3><?php _e('Fees', 'Landing Pages'); ?></h3>
							<p><?php echo CFS()->get('fees'); ?>*</p>
							<h3><?php _e('Start Dates', 'Landing Pages'); ?></h3>
							<ul>
								<?php $startDates = CFS()->get('featured_start_dates'); ?>
								<?php foreach($startDates as $date) {
									echo '<li>'.$date['start_date'].'</li>';
								} ?>
							</ul>
							<h3><?php _e('Requirements', 'Landing Pages'); ?></h3>
							<ul>
								<?php $requires = CFS()->get('requirements_featured'); ?>
								<?php foreach($requires as $req) {
									echo '<li>'.$req['requirement'].'</li>';
								} ?>
							</ul>
							<p><?php _e('*Only for tuition fee. Additional fees may apply', 'Landing Pages'); ?></p>
						</div>

					</section>	
				</main>
			</div><!-- #primary -->
			<section class="review-container-featured">
				<img class="footer-bkg" src=<?php echo get_template_directory_uri().'/assets/images/hero-img.jpg'; ?>>
				<img class="foto-review" src=<?php echo get_template_directory_uri().'/assets/images/foto-review.png'; ?> >
				<div class="review-month-container">
					<i class="fas fa-quote-left"></i>
					<p><?php _e("I was lucky enough to find the Nexus. They helped me through the process of studying at Greystone. Now I'm starting my professional life here in Canada!", 'Landing Pages'); ?></p>
					<p class="review-name">Adriana Ribeiro</p>
				</div>
			</section>
			<footer id="colophon" class="site-footer">
				<div class="copyright">
					<p>© Copyright 2019 Nexus Education Consulting</p>
				</div><!-- .site-info1 -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

	<?php wp_footer(); ?>

	</body>
</html>

