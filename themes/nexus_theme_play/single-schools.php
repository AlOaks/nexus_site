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
                    <ul>
                        <?
                            $tag = get_the_title();
                            $args = array(
                                'post_type' => 'programs',
                                'tag' => $tag
                            );
                            $popuProgs = new WP_query($args);
                    
                        while ( $popuProgs->have_posts() ) : $popuProgs->the_post(); ?>
                            
                            <li><? the_title(); ?></li>
                            
                        <? 
                            endwhile; 
                            wp_reset_query();    
                        ?>
                        
                    </ul>
                </div>
                <div class="school-details">
                    <h2><? _e('Details', 'nexus'); ?></h2>
                    <ul>
                        <? 
                        
                            $details = CFS()->get('school_details'); 
                                
                            foreach($details as $detail) {
                                echo '<li>'.$detail['school_detail'].'</li>';
                            }
                        
                        ?>
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
