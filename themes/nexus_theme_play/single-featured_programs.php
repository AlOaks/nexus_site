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

// <?php $aboutSchool = CFS()->get('about_school'); 
//	<p><?php echo $aboutSchool; </p>



$school = CFS()->get('school_name');
$args = array(
	'post_type' => 'schools',
	's' => $school
);
$schoolRating = new WP_query($args);
while($schoolRating->have_posts()) : $schoolRating->the_post();	


	$schoolType = get_the_terms(get_the_ID(), 'school_type')[0]->slug;
	// console($schoolType);


	$natMix = CFS()->get('mix_rating');

endwhile;

console($schoolType);

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
							<div class="logos-box">
								<img src="<?php echo get_template_directory_uri().'/assets/images/logo-nexus-white-and-color.png'; ?>" />
								<img src="<?php echo CFS()->get('feat_school_logo'); ?>">
							</div>
							<?php while(have_posts()) : the_post(); ?>
								
								<?php the_title('<h1>', '</h1>'); ?>
								<div class="promo-banner">
									<p><?php _e("Get $300 CAD Off!", "Landing Pages"); ?></p>
								</div>	
							<?php endwhile; ?>
							</div>
							<div class="featprogs-form-container">
								<form action="https://nexuseducanada.com/featured-thanks" method="post" id="featprogs-form">
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
							<div class="nexus-rating-school-month-lp">
								<div class="nexus-rating-school-lp">

							
								<div class="overall-score">
									<h3><?php _e('Overall Score', 'School Pages'); ?></h3>
									<?php if($schoolType == 'esl') { ?>

									<p class="average-rating-lp average-rating-number"></p>
									<div class="average-stars-lp"></div>

									<?php } else if($schoolType == 'work-n-study') { ?>

									<p class="average-priv-rating-lp average-rating-number"></p>
									<div class="average-priv-stars-lp"></div>

									<?php } else { ?>

									<p class="average-pub-rating-lp average-rating-number"></p>
									<div class="average-pub-stars-lp"></div>

									<?php } ?>
								</div>
								<div class="individual-scores">
									<ul>
									<?php if($schoolType == 'esl') { ?>
										
											<li><?php _e('Nationality Mix', 'School Pages'); ?>: <span class="nat-rating-lp"></span></li>
											<li><?php _e('Academic Quality', 'School Pages'); ?>: <span class="qua-rating-lp"></span></li>
											<li><?php _e('Activities', 'School Pages'); ?>: <span class="off-rating-lp"></span></li>
											<li><?php _e('Elective Classes', 'School Pages'); ?>: <span class="cla-rating-lp"></span></li>
											<li><?php _e('Pathway Options', 'School Pages'); ?>: <span class="pat-rating-lp"></span></li>
										
									<?php } else if($schoolType == 'work-n-study') { ?>

											<li><?php _e('Nationality Mix', 'School Pages'); ?>: <span class="priv-nat-rating-lp"></span></li>
											<li><?php _e('Career Services', 'School Pages'); ?>: <span class="priv-car-rating-lp"></span></li>
											<li><?php _e('Value / Price', 'School Pages'); ?>: <span class="priv-val-rating-lp"></span></li>
											<li><?php _e('Job Placement', 'School Pages'); ?>: <span class="job-rating-lp"></span></li>
											<li><?php _e('Schedule Flexibility', 'School Pages'); ?>: <span class="flex-rating-lp"></span></li>

									<?php } else { ?>

											<li><?php _e('Nationality Mix', 'School Pages'); ?>: <span class="pub-nat-rating-lp"></span></li>
											<li><?php _e('Career Services', 'School Pages'); ?>: <span class="pub-car-rating-lp"></span></li>
											<li><?php _e('Value / Price', 'School Pages'); ?>: <span class="pub-val-rating-lp"></span></li>
											<li><?php _e('Industry Reputation', 'School Pages'); ?>: <span class="rep-rating-lp"></span></li>
											<li><?php _e('Credit Transferability', 'School Pages'); ?>: <span class="transfer-rating-lp"></span></li>

									<?php } ?>
									</ul>
								</div>
							</div>

							</div>
							<?php $graphics = CFS()->get('graphic_supports'); ?> 
							
						<?php if($graphics) { ?>

							<h3><?php _e('More about this experience', 'Landing Pages'); ?></h3>
							<div class="graphic-supports">
								<?php foreach($graphics as $g) { 

									echo '<h4>'.$g['support_title'].'</h4>';
									echo '<img src="'.$g['support_image'].'" >';

								} ?>	
							</div>
						<?php } ?>
						<a href="#" class="get-quote-btn menu-item-51 menu-item-25"><?php _e('Chat with us!', 'Front-page'); ?></a>
						</div>
						<div class="sidebar-right">
							<?php 
								$work = CFS()->get('allow_work'); 

							if($work == true) { ?>
									<div class="permitted-work">										
										<p><?php _e('Allowed to work', 'Landing Pages'); ?></p>
									</div>					

							<?php } ?>	
							<h3><i class="fas fa-money-check-alt"></i><?php _e('Tuition Fee', 'Landing Pages'); ?></h3>
							<p><?php echo CFS()->get('fees'); ?>**</p>
							<?php $campus = CFS()->get('school_campus'); ?>
							<h3><i class="fas fa-university"></i><?php _e('Campus', 'Landing Pages'); ?></h3>
							<ul><?php foreach($campus as $camp) {
								echo '<li>'.$camp['campus'].'</li>';
								} ?>
							</ul>
							<h3><i class="fas fa-clock"></i><?php _e('Duration', 'Landing Pages'); ?></h3>
							<p><?php echo CFS()->get('duration_featured'); ?></p>
							<h3><i class="fas fa-calendar-minus"></i><?php _e('Start Dates', 'Landing Pages'); ?></h3>
							<ul>
								<?php $startDates = CFS()->get('featured_start_dates'); ?>
								<?php foreach($startDates as $date) {
									echo '<li>'.$date['start_date'].'</li>';
								} ?>
							</ul>
							<h3><i class="fas fa-tasks"></i><?php _e('Requirements', 'Landing Pages'); ?></h3>
							<ul>
								<?php $requires = CFS()->get('requirements_featured'); ?>
								<?php foreach($requires as $req) {
									echo '<li>'.$req['requirement'].'</li>';
								} ?>
							</ul>
							<p>*<?php _e('*Only for tuition fee. Additional fees may apply', 'Landing Pages'); ?></p>
						</div>

					</section>	
				</main>
			</div><!-- #primary -->
			<section class="review-container-featured">
				<img class="footer-bkg" src=<?php echo get_template_directory_uri().'/assets/images/hero-img.jpg'; ?>>
				<img class="foto-review" src=<?php echo get_template_directory_uri().'/assets/images/foto-review.png'; ?> >
				<div class="review-month-container">
					<i class="fas fa-quote-left"></i>
					<p><?php _e("I was lucky enough to find the Nexus. They helped me through the process of studying in Canada. Now I'm starting my professional life here in Canada!", 'Landing Pages'); ?></p>
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

