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

                         ?>

                <div class="more-programs-container">
                    <div class="more-prg-desc">
                        <h2 class="more-prg-title box-1"><?php _e($prog_types[0]->name, 'nexus'); ?> <i class="fas fa-chevron-down chevron-1"></i><i class="fas fa-chevron-up chev-up-1"></i></h2>
                        <p class="more-prg-paragraph"><?php _e($prog_types[0]->description, 'nexus'); ?></p>
                    </div>
                    <div class="more-prg-icons icons-1">
                        <p class="more-prg-paragraph-2"><?php _e($prog_types[0]->description, 'nexus'); ?></p>
                        <div class="more-icon">
                            <img class="clock-icon" src=<?php echo get_template_directory_uri().'/assets/images/clock-icon.png'; ?> >
                            <h2 class="more-icon-title"><?php _e('Duration', 'nexus'); ?></h2>
                            <p class="more-icon-desc"><?php _e('The duration may vary, however the average duration its from 2 months to 1 year.', 'nexus'); ?></p>           
                        </div>
                        <div class="more-icon">
                            <img class="credit-icon" src=<?php echo get_template_directory_uri().'/assets/images/credit-icon.png'; ?>>
                            <h2 class="more-icon-title"><?php _e('Tuition Fee', 'nexus'); ?></h2>
                            <p class="more-icon-desc"><?php _e('Average cost is from $3,500 to $10,000 CAD depending on the program and the school.', 'nexus'); ?></p>           
                        </div>
                        <div class="more-icon">
                            <img class="checklist-icon" src=<?php echo get_template_directory_uri().'/assets/images/checklist-icon.png'; ?>>
                            <h2 class="more-icon-title"><?php _e('Requirements', 'nexus'); ?></h2>
                            <p class="more-icon-desc"><?php _e('Minimum intermediate level of language. No prior knowledge required', 'nexus'); ?>.</p>                                       
                        </div>
                    </div>
                </div>
                <div class="more-programs-container">
                    <div class="more-prg-desc">
                        <h2 class="more-prg-title box-2"><?php _e($prog_types[1]->name, 'nexus'); ?> <i class="fas fa-chevron-down chevron-1"></i><i class="fas fa-chevron-up chev-up-1"></i></h2>
                        <p class="more-prg-paragraph"><?php _e($prog_types[1]->description, 'nexus'); ?></p>
                    </div>
                    <div class="more-prg-icons icons-2">
                        <p class="more-prg-paragraph-2"><?php _e($prog_types[1]->description, 'nexus'); ?></p>
                        <div class="more-icon">
                            <img class="clock-icon" src=<?php echo get_template_directory_uri().'/assets/images/clock-icon.png'; ?> >
                            <h2 class="more-icon-title"><?php _e('Duration', 'nexus'); ?></h2>
                            <p class="more-icon-desc"><?php _e('Average duration is 4 years.', 'nexus'); ?></p>           
                        </div>
                        <div class="more-icon">
                            <img class="credit-icon" src=<?php echo get_template_directory_uri().'/assets/images/credit-icon.png'; ?>>
                            <h2 class="more-icon-title"><?php _e('Tuition Fee', 'nexus'); ?></h2>
                            <p class="more-icon-desc"><?php _e('Average cost is from $14,000 to $40,000 CAD a year.', 'nexus'); ?></p>           
                        </div>
                        <div class="more-icon">
                            <img class="checklist-icon" src=<?php echo get_template_directory_uri().'/assets/images/checklist-icon.png'; ?>>
                            <h2 class="more-icon-title"><?php _e('Requirements', 'nexus'); ?></h2>
                            <p class="more-icon-desc"><?php _e('Complete high school certificate, Advance English level. Depending on the program a portfolio might be required', 'nexus'); ?>.</p>                                       
                        </div>
                    </div>
                </div>
                <div class="more-programs-container">
                    <div class="more-prg-desc">
                        <h2 class="more-prg-title box-3"><?php _e($prog_types[2]->name, 'nexus'); ?> <i class="fas fa-chevron-down chevron-1"></i><i class="fas fa-chevron-up chev-up-1"></i></h2>
                        <p class="more-prg-paragraph"><?php _e($prog_types[2]->description, 'nexus'); ?></p>
                    </div>
                    <div class="more-prg-icons icons-3">
                        <p class="more-prg-paragraph-2"><?php _e($prog_types[2]->description, 'nexus'); ?></p>
                        <div class="more-icon">
                            <img class="clock-icon" src=<?php echo get_template_directory_uri().'/assets/images/clock-icon.png'; ?> >
                            <h2 class="more-icon-title"><?php _e('Duration', 'nexus'); ?></h2>
                            <p class="more-icon-desc"><?php _e('Average duration is from 6 months to 2 years.', 'nexus'); ?></p>           
                        </div>
                        <div class="more-icon">
                            <img class="credit-icon" src=<?php echo get_template_directory_uri().'/assets/images/credit-icon.png'; ?>>
                            <h2 class="more-icon-title"><?php _e('Tuition Fee', 'nexus'); ?></h2>
                            <p class="more-icon-desc"><?php _e('Average cost is from $9,000 to $14,000 CAD.', 'nexus'); ?></p>           
                        </div>
                        <div class="more-icon">
                            <img class="checklist-icon" src=<?php echo get_template_directory_uri().'/assets/images/checklist-icon.png'; ?>>
                            <h2 class="more-icon-title"><?php _e('Requirements', 'nexus'); ?></h2>
                            <p class="more-icon-desc"><?php _e('Depending on the school prior knowledge related to the program might be required. Intermedium to advance english level', 'nexus'); ?>.</p>                                       
                        </div>
                    </div>
                </div>
                <div class="more-programs-container">
                    <div class="more-prg-desc">
                        <h2 class="more-prg-title box-4"><?php _e($prog_types[3]->name, 'nexus'); ?> <i class="fas fa-chevron-down chevron-1"></i><i class="fas fa-chevron-up chev-up-1"></i></h2>
                        <p class="more-prg-paragraph"><?php _e($prog_types[3]->description, 'nexus'); ?></p>
                    </div>
                    <div class="more-prg-icons icons-4">
                        <p class="more-prg-paragraph-2"><?php _e($prog_types[3]->description, 'nexus'); ?></p>
                        <div class="more-icon">
                            <img class="clock-icon" src=<?php echo get_template_directory_uri().'/assets/images/clock-icon.png'; ?> >
                            <h2 class="more-icon-title"><?php _e('Duration', 'nexus'); ?></h2>
                            <p class="more-icon-desc"><?php _e('From 2 weeks to 1 year; or as long as needed.', 'nexus'); ?></p>           
                        </div>
                        <div class="more-icon">
                            <img class="credit-icon" src=<?php echo get_template_directory_uri().'/assets/images/credit-icon.png'; ?>>
                            <h2 class="more-icon-title"><?php _e('Tuition Fee', 'nexus'); ?></h2>
                            <p class="more-icon-desc"><?php _e('Average cost is from $1,200 to $1,400 CAD per month.', 'nexus'); ?></p>           
                        </div>
                        <div class="more-icon">
                            <img class="checklist-icon" src=<?php echo get_template_directory_uri().'/assets/images/checklist-icon.png'; ?>>
                            <h2 class="more-icon-title"><?php _e('Requirements', 'nexus'); ?></h2>
                            <p class="more-icon-desc"><?php _e('Not necessary to have any language knowledge. Minimum age 16 years old. Valid Immigration documents', 'nexus'); ?>.</p>                                       
                        </div>
                    </div>
                </div>
                <div class="more-programs-container">
                    <div class="more-prg-desc">
                        <h2 class="more-prg-title box-5"><?php _e($prog_types[4]->name, 'nexus'); ?> <i class="fas fa-chevron-down chevron-1"></i><i class="fas fa-chevron-up chev-up-1"></i></h2>
                        <p class="more-prg-paragraph"><?php _e($prog_types[4]->description, 'nexus'); ?></p>
                    </div>
                    <div class="more-prg-icons icons-5">
                        <p class="more-prg-paragraph-2"><?php _e($prog_types[4]->description, 'nexus'); ?></p>
                        <div class="more-icon">
                            <img class="clock-icon" src=<?php echo get_template_directory_uri().'/assets/images/clock-icon.png'; ?> >
                            <h2 class="more-icon-title"><?php _e('Duration', 'nexus'); ?></h2>
                            <p class="more-icon-desc"><?php _e('From 6 months to 2 years.', 'nexus'); ?></p>           
                        </div>
                        <div class="more-icon">
                            <img class="credit-icon" src=<?php echo get_template_directory_uri().'/assets/images/credit-icon.png'; ?>>
                            <h2 class="more-icon-title"><?php _e('Tuition Fee', 'nexus'); ?></h2>
                            <p class="more-icon-desc"><?php _e('Average cost is from $9,000 to $14,000 CAD.', 'nexus'); ?></p>           
                        </div>
                        <div class="more-icon">
                            <img class="checklist-icon" src=<?php echo get_template_directory_uri().'/assets/images/checklist-icon.png'; ?>>
                            <h2 class="more-icon-title"><?php _e('Requirements', 'nexus'); ?></h2>
                            <p class="more-icon-desc"><?php _e('Minimum intermediate level of language. No prior knowledge required', 'nexus'); ?>.</p>                                       
                        </div>
                    </div>
                </div>

            </section>
            <section class="start-journey-section">
			    <h1 class="start-title"><?php _e('Start Your Journey', 'nexus'); ?></h1>
			    <p class="start-description"><?php _e('Let us help you find your path to success.', 'nexus'); ?></p>
			    <a class="contact-btn start-trigger"><?php _e('Contact Us', 'nexus'); ?></a>
		    </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
