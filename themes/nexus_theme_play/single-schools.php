<?php
/**
 * 
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
			<section class="school-onpromo-container">
                <div class="school-promo-hero">
                    <div class="school-page-hero-parallax" data-parallax="scroll" data-image-src="<?php echo get_the_post_thumbnail_url(); ?>"></div>
                    <div class="blue-stripe-top"></div>
                    <!-- <div class="school-page-hero-ovrly"></div> -->
                    <div class="school-page-heading">
                        <?php 
                            $schoolLogo = CFS()->get('school_logo'); 
                            $schoolHook = CFS()->get('school_hook');
                            $schoolBanner = CFS()->get('school_banner_promo');
                        ?>
                        <div class="schoolmonth-logo-container">
                            <img class="school-onpromo-logo" src="<?php echo $schoolLogo; ?>" />
                        </div>
                    </div>
                    <div class="schoolmonth-hook">
                        <?php if($schoolHook) { 
                            echo '<h1>'.$schoolHook.'</h1>';
                        } ?>
                    </div>
                    <div class="schoolmonth-banner">
                        <?php if($schoolBanner) { 
                            echo '<p>'.$schoolBanner.'</p>';
                        } ?>
                    </div>
                </div>
            </section>
            <section class="school-options">
                <?php 
                    $options = CFS()->get('options_loop');

                    foreach($options as $opt) { 

                        if($opt['option_work'] == true) {
                            $work = 'Allowed to work';
                        } else {
                            $work = 'Not allowed to work';
                        }
                ?>
                        <div class="option" style="background-image: url(<?php echo $opt['option_bkg'];?>);">
                            <h3><?php echo $opt['option_title']; ?></h3>
                            <ul class="option-info">
                                <li class="option-duration"><i class="fas fa-calendar"></i><?php echo $opt['option_duration']; ?></li>
                                <li class="option-work"><i class="fas fa-briefcase"></i><?php echo $work; ?></li>
                                <li class="option-description"><i class="fas fa-info-circle"></i><?php echo $opt['option_desc']; ?></li>
                            </ul>
                            <a href="#" class="get-quote-btn menu-item-51 menu-item-25"><?php _e('I like this!', 'Front-page'); ?></a>
                        </div>
                <?php } ?>
            </section>
            
            <section class="nexus-rating-school-month">
            <?php 

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
                <a href="#" class="get-quote-btn menu-item-51 menu-item-25"><?php _e('Chat with us!', 'Front-page'); ?></a>
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
                    <canvas id="chart"></canvas>
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
                                if($dat['date_description']) {
                                    echo '<li class="date-w-desc"><p>'.date('F j, Y', strtotime($dat['start_date'])).'</p><span>'.$dat['date_description'].'</span></li>';
                                } else {
                                    echo '<li>'.date('F j, Y', strtotime($dat['start_date'])).'</li>';
                                }
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
                        <li id="avg-salary-li"><i class="fas fa-dollar-sign"></i><?php _e('Average Salary', 'School Pages'); ?><canvas id="salary-chart"></canvas></li>
                    </ul>
                </div>

            <?php } ?>
            </section>
            <section class="start-journey-section">
                <h2 class="start-title"><?php _e('Start Your Journey', 'nexus'); ?></h2>
                <p class="start-description"><?php _e('Let us help you find your path to success', 'nexus'); ?></p>
                <a class="contact-btn contact-trigger"><?php _e('Contact Us', 'nexus'); ?></a>
            </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
