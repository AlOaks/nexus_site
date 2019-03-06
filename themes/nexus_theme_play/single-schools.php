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

                <?php $video = CFS()->get('school_video'); ?>

                <?php if(!empty($video)) {
                    
                    echo $video;

                } else { ?>

                <img src=<?php echo get_the_post_thumbnail_url(); ?> />

                <?php } ?>
                <div class="school-info-single">
                <?php while (have_posts() ): the_post(); ?>
                    <h1 class="school-page-title"><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                <?php endwhile; ?>
                </div>
            </section>
			<section class="single-school-page">
                <div class="school-popu-programs">

                <?php $tag = get_the_title(); ?>

                    <h2><?php _e('Popular Programs at ', 'nexus'); ?><?php echo $tag; ?></h2>
                    <ul class="popu-progs-list">
                        <?php                       
                        
                        $school = get_queried_object();
                        $schoolName = $school->post_title;

                        console($schoolName);


                        $args = array(
                            'post_type' => 'programs',
                            'tag' => $schoolName
                        );

                        $popuProgs = new WP_query($args);
                    
                        while ( $popuProgs->have_posts() ) : $popuProgs->the_post(); ?>
   
                            <li><a href=<?php echo get_the_permalink(); ?>><?php the_title(); ?></a></li>
                            
                        <?php
                            endwhile; 
                            
                            wp_reset_query();    
                        ?>
                        
                    </ul>
                </div>
                <div class="school-details">
                    <h2><?php _e('Details', 'nexus'); ?></h2>
                    <ul class="details-list-icons">
                        <?php 
                            $schoolprogTypes = CFS()->get('school_prog_types');
                            $schoolLocations = CFS()->get('school_locations');
                            $schoolFields = CFS()->get('school_fields');
                        ?>

                        <li class="detail-item">
                            <i class="fas fa-university"></i><? _e('Program Types available here', 'nexus'); ?>
                            <ul>
                                <?php foreach($schoolprogTypes as $type) { 
                                    echo '<li class="sub-detail">'.$type['school_type'].'</li>';
                                } ?>
                            </ul>
                        </li>
                        <li class="detail-item">
                            <i class="fas fa-map-marker-alt"></i><?php _e('Locations', 'nexus'); ?>
                            <ul>
                                <?php foreach($schoolLocations as $location) { 
                                    echo '<li class="sub-detail">'.$location['school_location'].'</li>';
                                } ?>
                            </ul>
                        </li>
                        <li class="detail-item">
                            <i class="fas fa-microscope"></i><?php _e('Fields of Study', 'nexus'); ?>
                            <ul>
                                <?php foreach($schoolFields as $field) { 
                                    echo '<li class="sub-detail">'.$field['school_field'].'</li>';
                                } ?>
                            </ul>
                        </li>  
                    </ul>
                </div>
            </section>
            <section class="apply-now-section">
                    <div class="apply-now-div">
                        <h3><?php _e('Apply now!', 'nexus'); ?></h3>
                        <p><?php _e('We will guide you through all the process!'); ?></p>
                    </div>
                    <div class="apply-form"><?php echo CFS()->get('school_form'); ?></div>                            
            </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
