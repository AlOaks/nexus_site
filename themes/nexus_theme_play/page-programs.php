<?php
/**
 * Template Name: Programs
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
                <h1 class="programs-page-title"><?php the_title(); ?></h1>
            </div>
            <div style="display: none;" class="programshide-content"><? the_content(); ?></div>
            <section class="search-program">
                <h2 class="hero-title-programs"><?php _e('Where is your next experience going to be? ', 'nexus'); ?></h2>
                <div class="search-container">
                    <select class="prg-type-select">
                        <option value=""><?php _e('Choose City', 'nexus'); ?></option>
                        <?php 
                                                       
                                $types = get_terms([
                                    'taxonomy' => 'Cities',
                                    'hide_empty' => false
                                ]);

                            foreach($types as $type) :

                        ?>
                        <option value=<?php echo $type->name; ?>><?php echo $type->name; ?></option>


                            <?php endforeach; ?>
                    </select>
                </div>
                <button class="see-programs-btn"><?php _e('Search Programs', 'nexus'); ?></button>
            </section>
            <section class="retrieved-programs-container"></section>
            <section class="xplore-more-container">
                <h2 class="xplore-more-title"><?php _e('Explore More Options', 'nexus'); ?></h2>
                <?php 
                        $prog_types = get_terms([
                            'taxonomy' => 'programsTypes',
                            'hide_empty' => false
                            ]);

                        foreach($prog_types as $type) {

                            $dura = get_field('duration_description', $type);
                            $tuition = get_field('tuition_fee_description', $type);
                            $require = get_field('requirements_description', $type);
                            
                        ?>

                <div class="more-programs-container">
                    <div class="more-prg-desc">
                        <h2 class="more-prg-title box-1"><?php _e($type->name, 'nexus'); ?> <i class="fas fa-chevron-down chevron-1"></i><i class="fas fa-chevron-up chev-up-1"></i></h2>
                        <p class="more-prg-paragraph"><?php _e($type->description, 'nexus'); ?></p>
                    </div>
                    <div class="more-prg-icons icons-1">
                        <p class="more-prg-paragraph-2"><?php _e($type->description, 'nexus'); ?></p>
                        <div class="more-icon">
                            <img class="clock-icon" src=<?php echo get_template_directory_uri().'/assets/images/clock-icon.png'; ?> >
                            <h2 class="more-icon-title"><?php _e('Duration', 'nexus'); ?></h2>
                            <p class="more-icon-desc"><?php _e($dura, 'nexus'); ?></p>           
                        </div>
                        <div class="more-icon">
                            <img class="credit-icon" src=<?php echo get_template_directory_uri().'/assets/images/credit-icon.png'; ?>>
                            <h2 class="more-icon-title"><?php _e('Tuition Fee', 'nexus'); ?></h2>
                            <p class="more-icon-desc"><?php _e($tuition, 'nexus'); ?></p>           
                        </div>
                        <div class="more-icon">
                            <img class="checklist-icon" src=<?php echo get_template_directory_uri().'/assets/images/checklist-icon.png'; ?>>
                            <h2 class="more-icon-title"><?php _e('Requirements', 'nexus'); ?></h2>
                            <p class="more-icon-desc"><?php _e($require, 'nexus'); ?></p>                                       
                        </div>
                    </div>
                </div>

                <?php } ?>
                

            </section>
            <section class="start-journey-section">
			    <h2 class="start-title"><?php _e('Start Your Journey', 'nexus'); ?></h2>
			    <p class="start-description"><?php _e('Let us help you find your path to success.', 'nexus'); ?></p>
			    <a class="contact-btn contact-trigger"><?php _e('Contact Us', 'nexus'); ?></a>
		    </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
