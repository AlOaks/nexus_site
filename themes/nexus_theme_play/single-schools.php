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
			<section class="school-title-container">
                <img src=<? echo get_the_post_thumbnail_url(); ?> />
                <div class="school-info-single">
                    <h1 class="school-page-title"><?php _e(the_title(), 'nexus'); ?></h1>
                    <? the_content(); ?>
                </div>
            </section>
			<section class="single-school-page">
                <div class="school-popu-programs">
                    <h2><? _e('Popular Programs at ', 'nexus'); ?><? the_title(); ?></h2>
                    <ul class="popu-progs-list">
                        <?
                            $tag = get_the_title();
                            $args = array(
                                'post_type' => 'programs',
                                'tag' => $tag
                            );
                            $popuProgs = new WP_query($args);
                    
                        while ( $popuProgs->have_posts() ) : $popuProgs->the_post(); ?>
                            
                            <li><a href=<? echo get_the_permalink(); ?>><? the_title(); ?></a></li>
                            
                        <? 
                            endwhile; 
                            wp_reset_query();    
                        ?>
                        
                    </ul>
                </div>
                <div class="school-details">
                    <h2><? _e('Details', 'nexus'); ?></h2>
                    <ul class="details-list-icons">
                        <? 
                            $schoolprogTypes = CFS()->get('school_prog_types');
                            $schoolLocations = CFS()->get('school_locations');
                            $schoolFields = CFS()->get('school_fields');
                        ?>

                        <li class="detail-item">
                            <i class="fas fa-university"></i><? _e('Program Types available here', 'nexus'); ?>
                            <ul>
                                <? foreach($schoolprogTypes as $type) { 
                                    echo '<li class="sub-detail">'.$type['school_type'].'</li>';
                                } ?>
                            </ul>
                        </li>
                        <li class="detail-item">
                            <i class="fas fa-map-marker-alt"></i><? _e('Locations', 'nexus'); ?>
                            <ul>
                                <? foreach($schoolLocations as $location) { 
                                    echo '<li class="sub-detail">'.$location['school_location'].'</li>';
                                } ?>
                            </ul>
                        </li>
                        <li class="detail-item">
                            <i class="fas fa-microscope"></i><? _e('Fields of Study', 'nexus'); ?>
                            <ul>
                                <? foreach($schoolFields as $field) { 
                                    echo '<li class="sub-detail">'.$field['school_field'].'</li>';
                                } ?>
                            </ul>
                        </li>  
                    </ul>
                </div>
            </section>
            <section class="apply-now-section">
                    <div class="apply-now-div">
                        <h3><? _e('Apply now!', 'nexus'); ?></h3>
                        <p><? _e('We will guide you through all the process!'); ?></p>
                    </div>
                    <div class="apply-form"><? echo CFS()->get('school_form'); ?></div>                            
            </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
