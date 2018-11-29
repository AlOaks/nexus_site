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
                <p class="programs-description-hero">TEST</p>
            </div>
            <section class="search-program">
                <h2 class="hero-title-programs"><?php _e('Already made up your mind?', 'nexus'); ?></h2>
                <div class="search-container">
                    <select class="prg-type-select">
                        <option value=""><?php _e('Choose the program type', 'nexus'); ?></option>
                        <?php 
                                                       
                                $types = get_terms([
                                    'taxonomy' => 'programsTypes',
                                    'hide_empty' => false
                                ]);

                            foreach($types as $type) :

                        ?>
                        <option value=<?php echo $type->name; ?>><?php echo $type->name; ?></option>


                            <?php endforeach; ?>
                    </select>
                    <select class="prg-location-select">
                        <option value=""><?php _e('Choose location', 'nexus'); ?></option>
                        <?php 

                                $cities = get_terms([
                                    'taxonomy' => 'Cities',
                                    'hide_empty' => false
                                ]);

                            foreach($cities as $city) : ?> 

                        <option value=<?php echo $city->name; ?>><?php echo $city->name; ?></option>       

                        <?php endforeach; ?>
                        
                    </select>
                </div>
                <button class="see-programs-btn"><?php _e('See Programs', 'nexus'); ?></button>
            </section>
            <section class="retrieved-programs-container"></section>
            <section class="xplore-more-container">
                <h2 class="xplore-more-title"><?php _e('Explore More Options', 'nexus'); ?></h2>
                <div class="more-programs-container">
                    <div class="more-prg-desc">
                        <h2 class="more-prg-title box-1"><?php _e('Language Programs', 'nexus'); ?> <i class="fas fa-chevron-down chevron-1"></i><i class="fas fa-chevron-up chev-up-1"></i></h2>
                        <p class="more-prg-paragraph">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                    </div>
                    <div class="more-prg-icons icons-1">
                        <p class="more-prg-paragraph-2">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                        <div class="more-icon">
                            <i class="far fa-clock"></i>
                            <h2 class="more-icon-title"><?php _e('Duration', 'nexus'); ?></h2>
                            <p class="more-icon-desc">Lorem ipsum dolor sit amet, consecteur adipiscing elit.</p>           
                        </div>
                        <div class="more-icon">
                            <i class="fas fa-dollar-sign"></i>
                            <h2 class="more-icon-title"><?php _e('Tuition Fee', 'nexus'); ?></h2>
                            <p class="more-icon-desc">Lorem ipsum dolor sit amet, consecteur adipiscing elit.</p>           
                        </div>
                        <div class="more-icon">
                            <i class="fas fa-check-circle"></i>
                            <h2 class="more-icon-title"><?php _e('Outcome', 'nexus'); ?></h2>
                            <p class="more-icon-desc">Lorem ipsum dolor sit amet, consecteur adipiscing elit.</p>                                       
                        </div>
                    </div>
                </div>
                <div class="more-programs-container">

                    <div class="more-prg-desc">
                        <h2 class="more-prg-title box-2">Work & Study <i class="fas fa-chevron-down chevron-2"></i><i class="fas fa-chevron-up chev-up-2"></i></h2>
                        <p class="more-prg-paragraph">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                    </div>
                    <div class="more-prg-icons icons-2">
                        <p class="more-prg-paragraph-2">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                        <div class="more-icon">
                            <i class="far fa-clock"></i>
                            <h2 class="more-icon-title"><?php _e('Duration', 'nexus'); ?></h2>
                            <p class="more-icon-desc">Lorem ipsum dolor sit amet, consecteur adipiscing elit.</p>           
                        </div>
                        <div class="more-icon">
                            <i class="fas fa-dollar-sign"></i>
                            <h2 class="more-icon-title"><?php _e('Tuition Fee', 'nexus'); ?></h2>
                            <p class="more-icon-desc">Lorem ipsum dolor sit amet, consecteur adipiscing elit.</p>           
                        </div>
                        <div class="more-icon">
                            <i class="fas fa-check-circle"></i>
                            <h2 class="more-icon-title"><?php _e('Outcome', 'nexus'); ?></h2>
                            <p class="more-icon-desc">Lorem ipsum dolor sit amet, consecteur adipiscing elit.</p>                                       
                        </div>
                    </div>
                </div>
                <div class="more-programs-container">
                    <div class="more-prg-desc">
                        <h2 class="more-prg-title box-3">Diplomas <i class="fas fa-chevron-down chevron-3"></i><i class="fas fa-chevron-up chev-up-3"></i></h2>
                        <p class="more-prg-paragraph">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                    </div>
                    <div class="more-prg-icons icons-3">
                        <p class="more-prg-paragraph-2">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                        <div class="more-icon">
                            <i class="far fa-clock"></i>
                            <h2 class="more-icon-title"><?php _e('Duration', 'nexus'); ?></h2>
                            <p class="more-icon-desc">Lorem ipsum dolor sit amet, consecteur adipiscing elit.</p>           
                        </div>
                        <div class="more-icon">
                            <i class="fas fa-dollar-sign"></i>
                            <h2 class="more-icon-title"><?php _e('Tuition Fee', 'nexus'); ?></h2>
                            <p class="more-icon-desc">Lorem ipsum dolor sit amet, consecteur adipiscing elit.</p>           
                        </div>
                        <div class="more-icon">
                            <i class="fas fa-check-circle"></i>
                            <h2 class="more-icon-title"><?php _e('Outcome', 'nexus'); ?></h2>
                            <p class="more-icon-desc">Lorem ipsum dolor sit amet, consecteur adipiscing elit.</p>                                       
                        </div>
                    </div>
                </div>
                <div class="more-programs-container">
                    <div class="more-prg-desc">
                        <h2 class="more-prg-title box-4">Degrees <i class="fas fa-chevron-down chevron-4"></i><i class="fas fa-chevron-up chev-up-4"></i></h2>
                        <p class="more-prg-paragraph">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                    </div>
                    <div class="more-prg-icons icons-4">
                        <p class="more-prg-paragraph-2">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                        <div class="more-icon">
                            <i class="far fa-clock"></i>
                            <h2 class="more-icon-title"><?php _e('Duration', 'nexus'); ?></h2>
                            <p class="more-icon-desc">Lorem ipsum dolor sit amet, consecteur adipiscing elit.</p>           
                        </div>
                        <div class="more-icon">
                            <i class="fas fa-dollar-sign"></i>
                            <h2 class="more-icon-title"><?php _e('Tuition Fee', 'nexus'); ?></h2>
                            <p class="more-icon-desc">Lorem ipsum dolor sit amet, consecteur adipiscing elit.</p>           
                        </div>
                        <div class="more-icon">
                            <i class="fas fa-check-circle"></i>
                            <h2 class="more-icon-title"><?php _e('Outcome', 'nexus'); ?></h2>
                            <p class="more-icon-desc">Lorem ipsum dolor sit amet, consecteur adipiscing elit.</p>                                       
                        </div>
                    </div>
                </div>
                <div class="more-programs-container">
                    <div class="more-prg-desc">
                        <h2 class="more-prg-title box-5">Certificates<i class="fas fa-chevron-down chevron-5"></i><i class="fas fa-chevron-up chev-up-5"></i></h2>
                        <p class="more-prg-paragraph">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                    </div>
                    <div class="more-prg-icons icons-5">
                        <p class="more-prg-paragraph-2">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                        <div class="more-icon">
                            <i class="far fa-clock"></i>
                            <h2 class="more-icon-title"><?php _e('Duration', 'nexus'); ?></h2>
                            <p class="more-icon-desc">Lorem ipsum dolor sit amet, consecteur adipiscing elit.</p>           
                        </div>
                        <div class="more-icon">
                            <i class="fas fa-dollar-sign"></i>
                            <h2 class="more-icon-title"><?php _e('Tuition Fee', 'nexus'); ?></h2>
                            <p class="more-icon-desc">Lorem ipsum dolor sit amet, consecteur adipiscing elit.</p>           
                        </div>
                        <div class="more-icon">
                            <i class="fas fa-check-circle"></i>
                            <h2 class="more-icon-title"><?php _e('Outcome', 'nexus'); ?></h2>
                            <p class="more-icon-desc">Lorem ipsum dolor sit amet, consecteur adipiscing elit.</p>                                       
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
