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
                    <div class="school-page-hero-ovrly"></div>
                    <div class="school-page-heading">
                        <?php $schoolVid = CFS()->get('school_video'); ?>
                        <div class="school-vid">
                            <?php echo $schoolVid; ?>
                        </div>
                        <?php $schoolLogo = CFS()->get('school_logo'); ?>
                        <img class="school-onpromo-logo" src="<?php echo $schoolLogo; ?>" />
                    </div>
                </div>
                <section class="school-desc-section">
                    <?php while(have_posts()) : the_post();
                        the_content('<p>', '</p>');
                    endwhile; ?>
                    <a href="#" class="get-quote-btn menu-item-51 menu-item-25"><?php _e('Chat with us!', 'Front-page'); ?></a>
                </section>
                <section class="credentials-section">
                    <div class="left-side-credentials">
                    <?php $queriedObj = get_queried_object()->post_name;
                        if($queriedObj === 'esl') { ?>
                            <h3><?php _e('What', 'Areas Pages'); ?> <?php the_title(); ?> <?php _e('has to offer?', 'Areas Pages'); ?></h3>
                    <?php } else { ?>
                            <h3><?php _e('What credentials does', 'Areas Pages'); ?> <?php the_title(); ?> <?php _e('offer?', 'Areas Pages'); ?></h3>
                    <?php } ?>
                    </div>
                    <?php $credentials = CFS()->get('school_prog_types'); ?>
                    <ul>
                        <?php foreach($credentials as $cred) { ?>
                            <li><?php echo $cred['school_type']; ?></li>
                        <?php } ?>
                    </ul>
                    <div class="credentials-school-triangle"></div>
                </section>
                <section class="location-school-sec">
                    <div data-parallax="scroll" class="location-school-parallax" data-image-src="<?php echo get_template_directory_uri().'/assets/images/black-blur-close-up-6397-compressor.jpg'; ?>" ></div>
                    <div class="school-location-ovrly"></div>
                    <div class="location-right-side">
                        <h3><?php _e('Locations within Canada', 'Areas Pages'); ?></h3>
                        <?php $locations = CFS()->get('school_locations'); ?>
                        <ul>
                            <?php foreach($locations as $loc) { ?>
                                <li><?php echo $loc['school_location']; ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                </section>
                <section class="fields-school-sec">
                    <div class="fields-school-triangle"></div>
                    <?php $fieldsSchool = CFS()->get('school_fields'); ?>
                    <ul>
                        <?php foreach($fieldsSchool as $field) { ?>
                            <li><?php echo $field['school_field']; ?></li>
                        <?php } ?>
                    </ul>
                    <div class="right-side-fields">
                        <h3><?php _e('Fields of Study', 'Areas Pages'); ?></h3>
                        <a href="#" class="get-quote-btn menu-item-51 menu-item-25"><?php _e('Chat with us!', 'Front-page'); ?></a>
                    </div>
                </section>
            </section> 
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
