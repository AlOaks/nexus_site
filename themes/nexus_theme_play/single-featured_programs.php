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

$featSchools = createTokenForm('featSchools');

// <?php $aboutSchool = CFS()->get('about_school'); 
//	<p><?php echo $aboutSchool; </p>

$school = get_the_title();
$pageLang = get_locale();
$salaryChart = CFS()->get('salary_chart');

$args = array(
	'post_type' => 'schools',
	's' => $school
);
					

$schoolQuery = new WP_query($args);

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
					<?php while($schoolQuery->have_posts()) : $schoolQuery->the_post(); 
						$schoolType = get_the_terms(get_the_ID(), 'school_type')[0]->slug;
						if($schoolType == 'esl') {

							$natMix = CFS()->get('mix_rating');
							$acaQuality = CFS()->get('qua_rating');
							$offCampus = CFS()->get('act_rating');
							$eleClasses = CFS()->get('cla_rating');
							$pathOptions = CFS()->get('pat_rating');

							$avgEsl = getAverageRating($natMix, $acaQuality, $offCampus, $eleClasses, $pathOptions);

						} else if($schoolType == 'work-n-study') {

							$privNatMix = CFS()->get('priv_mix_rating');
							$jobPlace = CFS()->get('job_rating');
							$priValPrice = CFS()->get('priv_val_rating');
							$privCarService = CFS()->get('priv_car_rating');
							$flexClasses = CFS()->get('flex_rating');

							$avgPri = getAverageRating($privNatMix, $jobPlace, $priValPrice, $privCarService, $flexClasses);

						} else {

							$pubNatMix = CFS()->get('pub_mix_rating');
							$valPrice = CFS()->get('val_rating');
							$carService = CFS()->get('car_rating');
							$creditTransfer = CFS()->get('cre_rating');
							$indRep = CFS()->get('rep_rating');

							$avgPub = getAverageRating($pubNatMix, $valPrice, $carService, $creditTransfer, $indRep);
						}
						
					?>
					<section class="main-landing">
						<div class="feat-progs-hero">
							<div class="featprogs-hero-parallax" data-parallax="scroll" data-image-src="<?php echo get_the_post_thumbnail_url(); ?>" ></div>
							<div class="featprogs-heading">
							<div class="logos-box">
								<img src="<?php echo get_template_directory_uri().'/assets/images/logo-nexus-white-and-color.png'; ?>" />
								<img src="<?php echo CFS()->get('school_logo'); ?>">
							</div>								
								<h1><?php echo CFS()->get('school_hook'); ?></h1>
								<div class="promo-banner">
									<p><?php echo CFS()->get('school_banner_promo');  ?></p>
								</div>	
							</div>
							<div class="featprogs-form-container">
								<form action="../../featured-thanks" method="post" id="featprogs-form">
									<label><?php _e('Chat with us!', 'Landing Pages'); ?></label>
									<?php $featuredProg = get_queried_object(); ?>
										<input type="hidden" name="tokenField" value="<?php echo $featSchools; ?>" >
										<input type="hidden" id="featprogs-lang" name="featlanguage" value="<?php echo $pageLang; ?>">
										<input type="text" name="featname" id="featprogs-name" placeholder="<?php _e('Name', 'Landing Pages'); ?>" />
										<input type="email" name="featemail" id="featprogs-email" placeholder="<?php _e('E-mail', 'Landing Pages'); ?>" />
										<input type="text" name="featphone" id="featprogs-phone" placeholder="<?php _e('Phone / Whatsapp', 'Landing Pages'); ?>" />
										<select name="featprogram" id="featprogs-progs" required>
											<option disabled selected><?php _e('Select an Option', 'Landing Pages'); ?></option>
											<?php 
												$options = CFS()->get('options_loop'); 
												foreach($options as $opti) {
													echo '<option value="'.$opti['option_title'].'">'.$opti['option_title'].'</option>';
												}	
											?>
										</select>
										<button id="featprogs-submit"><?php _e('Submit', 'Landing Pages'); ?></button>
								</form>
							</div>
						</div>
					</section>
					<section class="school-options">
						<?php 

							foreach($options as $opt) { 

								if($opt['option_work'] == true) {
									$work = 'Allowed to work';
								} else {
									$work = 'Not allowed to work';
								}
						?>
								<div class="option" style="background: no-repeat center url(<?php echo $opt['option_bkg'];?>);">
									<h3><?php echo $opt['option_title']; ?></h3>
									<ul class="option-info">
										<li class="option-duration"><i class="fas fa-calendar"></i><?php echo $opt['option_duration']; ?></li>
                                		<li class="option-work"><i class="fas fa-briefcase"></i><?php echo $work; ?></li>
                                		<li class="option-description"><i class="fas fa-info-circle"></i><?php echo $opt['option_desc']; ?></li>
									</ul>
									<a href="#"><?php _e('I like this!', 'Front-page'); ?></a>
								</div>
						<?php } ?>
					</section>
					
					<section class="nexus-rating-school-month">
						<div class="nexus-rating-school">
							<div class="overall-score">
							
								<h3><?php _e('Overall Score', 'School Pages'); ?></h3>
								<?php if($schoolType == 'esl') { ?>

									<p class="average-rating-php average-rating-number"><?php echo $avgEsl; ?></p>
									<div class="average-stars-php"><?php echo getRating($avgEsl); ?></div>

								<?php } else if($schoolType == 'work-n-study') { ?>
									<p class="average-priv-rating-php average-rating-number"><?php echo $avgPri; ?></p>
									<div class="average-priv-stars-php"><?php echo getRating($avgPri); ?></div>
								<?php } else { ?>

									<p class="average-pub-rating-php average-rating-number"><?php echo $avgPub; ?></p>
									<div class="average-pub-stars-php"><?php echo getRating($avgPub); ?></div>

								<?php } ?>
								
							</div>
							<div class="individual-scores">
								<ul>
								<?php if($schoolType == 'esl') { ?>
									
										<li><?php _e('Nationality Mix', 'School Pages'); ?>: <span class="nat"><?php echo getRating($natMix); ?></span></li>
										<li><?php _e('Academic Quality', 'School Pages'); ?>: <span class="qua"><?php echo getRating($acaQuality); ?></span></li>
										<li><?php _e('Activities', 'School Pages'); ?>: <span class="off"><?php echo getRating($offCampus); ?></span></li>
										<li><?php _e('Elective Classes', 'School Pages'); ?>: <span class="cla"><?php echo getRating($eleClasses); ?></span></li>
										<li><?php _e('Pathway Options', 'School Pages'); ?>: <span class="pat"><?php echo getRating($pathOptions); ?></span></li>
									
								<?php } else if($schoolType == 'work-n-study') { ?>

										<li><?php _e('Nationality Mix', 'School Pages'); ?>: <span class="priv-nat"><?php echo getRating($privNatMix); ?></span></li>
										<li><?php _e('Career Services', 'School Pages'); ?>: <span class="priv-car"><?php echo getRating($jobPlace); ?></span></li>
										<li><?php _e('Value / Price', 'School Pages'); ?>: <span class="priv-val"><?php echo getRating($priValPrice); ?></span></li>
										<li><?php _e('Job Placement', 'School Pages'); ?>: <span class="job"><?php echo getRating($privCarService); ?></span></li>
										<li><?php _e('Schedule Flexibility', 'School Pages'); ?>: <span class="flex"><?php echo getRating($flexClasses); ?></span></li>

								<?php } else { ?>

										<li><?php _e('Nationality Mix', 'School Pages'); ?>: <span class="pub-nat"><?php echo getRating($pubNatMix); ?></span></li>
										<li><?php _e('Career Services', 'School Pages'); ?>: <span class="pub-car"><?php echo getRating($valPrice); ?></span></li>
										<li><?php _e('Value / Price', 'School Pages'); ?>: <span class="pub-val"><?php echo getRating($carService); ?></span></li>
										<li><?php _e('Industry Reputation', 'School Pages'); ?>: <span class="rep"><?php echo getRating($creditTransfer); ?></span></li>
										<li><?php _e('Credit Transferability', 'School Pages'); ?>: <span class="transfer"><?php echo getRating($indRep); ?></span></li>

								<?php } ?>
								</ul>
							</div>
						</div>
						<div class="side-bar-details">
							<h4><?php _e('Testimonial', 'Landing Pages'); ?></h4>
							<i class="fas fa-quote-left"></i>
							<p class="testimonial"><?php echo CFS()->get('testimonial'); ?></p>
							<i class="fas fa-user-alt"></i>
						</div>
					</section>
					<div class="chat-with-us-div">
						<a href="#" class="landing-page-link"><?php _e('Chat with us!', 'Front-page'); ?></a>
					</div>
					<section class="columns-school">

					<?php if($schoolType == 'esl') { ?>
						<div class="column-amenities">
							<h3><?php _e('Amenities', 'School Pages'); ?></h3>
							<?php $amenities = CFS()->get('amenities'); ?>
							<ul>
								<?php foreach($amenities as $amenity) {
									echo '<li><img src="'.$amenity['amenity_icon'].'">'.$amenity['amenity'].'</li>';
								} ?>
							</ul>
						</div>
						<div class="column-nation">
							<h3><?php _e('Top 6 Countries', 'School Pages'); ?></h3>
							<img src=<?php echo $salaryChart; ?> />
						</div>
						<div class="column-awards">
							<h3><?php _e('Awards', 'School Pages'); ?></h3>
							<?php $awards = CFS()->get('awards'); ?>
							<ul>
								<?php foreach($awards as $award) : ?>
								<li><img src="<?php echo $award['award']; ?>" alt="award"></li>
								<?php endforeach; ?>
							</ul>
						</div>
				
					<?php } else { ?>     

						<div class="column-details">
							<h3><?php _e('Details', 'School Pages'); ?></h3>
							<div class="details-lists">
								<h4><i class="fas fa-map-marker-alt"></i><?php _e('Locations', 'School Pages'); ?></h4>
								<?php $locations = CFS()->get('school_locations'); ?>
								<ul class="details-li">
									<?php foreach($locations as $loc) {
										echo '<li>'.$loc['school_location'].'</li>';
									} ?>
								</ul>
							</div>
							<div class="details-lists">
								<h4><i class="fas fa-tasks"></i><?php _e('Requirements', 'School Pages'); ?></h4>
								<?php $requirements = CFS()->get('school_require'); ?>
								<ul class="details-li">
									<?php foreach($requirements as $req) {
										echo '<li>'.$req['school_req'].'</li>';
									} ?>
								</ul>
							</div>
							<div class="details-lists">
								<h4><i class="fas fa-calendar"></i><?php _e('Start Dates', 'School Pages'); ?></h4>
								<?php $dates = CFS()->get('start_dates_school'); ?>
								<ul class="details-li">
									<?php foreach($dates as $dat) {
										echo '<li>'.$dat['start_date'].'</li>';
									} ?>
								</ul>
							</div>
						</div>
						<div class="column-areas">
							<h3><?php _e('Areas of Study', 'School Pages'); ?></h3>
							<?php $areas = CFS()->get('school_fields'); ?>
							<ul class="details-li">
								<?php foreach($areas as $area) {
									echo '<li>'.$area['school_field'].'</li>'; 
								} ?>
							</ul>
						</div>
						<div class="column-outcomes">
							<h3><?php _e('Outcomes', 'School Pages'); ?></h3>
							<?php 

								$immi = CFS()->get('immigration_pos');
								$pgwp = CFS()->get('pgwp');
								$career = CFS()->get('career_op');  
								$salary = CFS()->get('avg_salary');

								foreach($career as $key => $label) {
									$label = $label;
								}


								if($immi == true) {
									$immiCh = '<i class="fas fa-check"></i>';
								} else { 
									$immiCh= '<i class="fas fa-times"></i>';
								}

								if($pgwp == true) {
									$pgwpCh = '<i class="fas fa-check"></i>';
								} else { 
									$pgwpCh = '<i class="fas fa-times"></i>';
								}

								
							?>
							<ul>
								<li><i class="fas fa-passport"></i><?php _e('Immigration Possibilities', 'School Pages'); ?><span><?php echo $immiCh; ?></span></li>
								<li><i class="fas fa-id-card"></i><?php _e('PGWP', 'School Pages'); ?><span><?php echo $pgwpCh; ?></span></li>
								<li><i class="fas fa-user-tie"></i><?php _e('Career Oportunities', 'School Pages'); ?><span class="<?php echo strtolower($label); ?>"><?php echo $label; ?></span></li>
								<li id="avg-salary-li">
									<i class="fas fa-dollar-sign"></i>
									<?php _e('Average Salary', 'School Pages'); ?>
									<img src=<?php echo $salaryChart; ?> />
								</li>
							</ul>
						</div>

					<?php } ?>
					</section>
			<?php endwhile; ?>
				
			<footer id="colophon" class="site-footer">
				<div class="copyright">
					<p>© Copyright 2019 Nexus Education Consulting</p>
				</div><!-- .site-info1 -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

	<?php wp_footer(); ?>

	</body>
</html>

