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
                    <div class="school-page-hero-parallax" data-parallax="scroll" data-image-src="<?php echo get_the_post_thumbnail_url(); ?>" ></div>
                    <div class="blue-stripe-top"></div>

                    <!-- <div class="school-page-hero-ovrly"></div> -->
                    <div class="school-page-heading">
                        <?php $schoolLogo = CFS()->get('school_logo'); ?>
                        <div class="schoolmonth-logo-container">
                            <img class="school-onpromo-logo" src="<?php echo $schoolLogo; ?>" />
                        </div>
                    </div>
                </div>

                
                <section class="school-desc-section">
                    <?php $schoolVid = CFS()->get('school_video'); ?>
                    <div class="school-vid">
                        <?php echo $schoolVid; ?>
                    </div>
                    <?php while(have_posts()) : the_post();

                        $schoolType = get_the_terms(get_the_ID(), 'school_type')[0]->slug;


                        the_content('<p>', '</p>');
                    endwhile; ?>
                </section>
                <div class="chat-with-us-div">
                    <a href="#" class="get-quote-btn menu-item-51 menu-item-25"><?php _e('Chat with us!', 'Front-page'); ?></a>
                </div>

                <section class="nexus-rating-school-month">
                    <div class="nexus-rating-school">
                        <div class="overall-score">
                            <h3><?php _e('Nexus Score', 'School Pages'); ?></h3>
                            <?php if($schoolType == 'esl') { ?>

                                <p class="average-rating average-rating-number"></p>
                                <div class="average-stars"></div>

                            <?php } else if($schoolType == 'work-n-study') { ?>

                                <p class="average-priv-rating average-rating-number"></p>
                                <div class="average-priv-stars"></div>

                            <?php } else { ?>

                                <p class="average-pub-rating average-rating-number"></p>
                                <div class="average-pub-stars"></div>

                            <?php } ?>
                            
                        </div>
                        <div class="individual-scores">
                            <ul>
                            <?php if($schoolType == 'esl') { ?>
                                
                                    <li><?php _e('Nationality Mix', 'School Pages'); ?>: <span class="nat-rating"></span></li>
                                    <li><?php _e('Academic Quality', 'School Pages'); ?>: <span class="qua-rating"></span></li>
                                    <li><?php _e('Off Campus Activities', 'School Pages'); ?>: <span class="off-rating"></span></li>
                                    <li><?php _e('Elective Classes', 'School Pages'); ?>: <span class="cla-rating"></span></li>
                                    <li><?php _e('Pathway Options', 'School Pages'); ?>: <span class="pat-rating"></span></li>
                                
                            <?php } else if($schoolType == 'work-n-study') { ?>

                                    <li><?php _e('Nationality Mix', 'School Pages'); ?>: <span class="priv-nat-rating"></span></li>
                                    <li><?php _e('Career Services', 'School Pages'); ?>: <span class="priv-car-rating"></span></li>
                                    <li><?php _e('Value / Price', 'School Pages'); ?>: <span class="priv-val-rating"></span></li>
                                    <li><?php _e('Job Placement', 'School Pages'); ?>: <span class="job-rating"></span></li>
                                    <li><?php _e('Schedule Flexibility', 'School Pages'); ?>: <span class="flex-rating"></span></li>

                            <?php } else { ?>

                                    <li><?php _e('Nationality Mix', 'School Pages'); ?>: <span class="pub-nat-rating"></span></li>
                                    <li><?php _e('Career Services', 'School Pages'); ?>: <span class="pub-car-rating"></span></li>
                                    <li><?php _e('Value / Price', 'School Pages'); ?>: <span class="pub-val-rating"></span></li>
                                    <li><?php _e('Industry Reputation', 'School Pages'); ?>: <span class="rep-rating"></span></li>
                                    <li><?php _e('Credit Transferability', 'School Pages'); ?>: <span class="transfer-rating"></span></li>

                            <?php } ?>
                            </ul>
                        </div>
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
                        <h3><?php _e('Nationality Mix', 'School Pages'); ?></h3>
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
                            <ul>
                                <?php foreach($locations as $loc) {
                                    echo '<li>'.$loc['school_location'].'</li>';
                                } ?>
                            </ul>
                        </div>
                        <div class="details-lists">
                            <h4><i class="fas fa-tasks"></i><?php _e('Requirements', 'School Pages'); ?></h4>
                            <?php $requirements = CFS()->get('school_require'); ?>
                            <ul>
                                <?php foreach($requirements as $req) {
                                    echo '<li>'.$req['school_req'].'</li>';
                                } ?>
                            </ul>
                        </div>
                        <div class="details-lists">
                            <h4><i class="fas fa-calendar"></i><?php _e('Start Dates', 'School Pages'); ?></h4>
                            <?php $dates = CFS()->get('start_dates_school'); ?>
                            <ul>
                                <?php foreach($dates as $dat) {
                                    echo '<li>'.date( 'F j, Y', strtotime($dat['start_date'])).'</li>';
                                } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="column-areas">
                        <h3><?php _e('Areas of Study', 'School Pages'); ?></h3>
                        <?php $areas = CFS()->get('school_fields'); ?>
                        <ul>
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
                            <li id="avg-salary-li"><i class="fas fa-dollar-sign"></i><?php _e('Average Salary', 'School Pages'); ?><img src="<?php echo $salary; ?>" ></li>
                        </ul>
                    </div>

                <?php } ?>
                </section>
                <section class="start-journey-section">
                    <h2 class="start-title"><?php _e('Start Your Journey', 'nexus'); ?></h2>
                    <p class="start-description"><?php _e('Let us help you find your path to success', 'nexus'); ?></p>
                    <a class="contact-btn contact-trigger"><?php _e('Contact Us', 'nexus'); ?></a>
                </section>
            </section> 
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
