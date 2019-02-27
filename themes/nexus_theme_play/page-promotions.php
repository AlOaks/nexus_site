<?php
/**
 * Template Name: Promotions
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
            <div class="promotions-page">
                <h1><? the_title(); ?></h1>
                <div class="promotions-mosaic">
                    <?
                        $args = array(
                            'post_type' => 'schools',
                            'order' => 'ASC',
                            'tag' => 'private',
                            'posts_per_page' => 1
                        ); 

                        $privateSchools = new WP_query($args);

                        while($privateSchools->have_posts() ) : $privateSchools->the_post();
                    
                            $promo = CFS()->get('on_promo');                    
                            $school_type = get_the_tags();
                            $schoolType = $school_type[0]->name;
                            $content = get_the_excerpt();
                            

                        if($promo == true) { ?>
                            
                            <div class="school-div" style="background: url(<? echo get_the_post_thumbnail_url(); ?>) no-repeat center;">
                                <div class="school-ovrly private"></div>
                                <h2 class="school-title title"><? the_title(); ?></h2>
                                <p class="school-type"><? echo $schoolType; ?></p>
                                <div class="school-content">
                                    <? echo $content; ?>
                                    <a class="school-link" href=<? echo get_the_permalink(); ?>><? _e('Learn More', 'nexus'); ?></a>
                                </div>
                            </div>

                        <? } ?>
                    <? endwhile; ?>
                    <?
                        $args = array(
                            'post_type' => 'schools',
                            'posts_per_page' => 1,
                            'order' => 'ASC',
                            'tag' => 'public'
                        ); 

                        $privateSchools = new WP_query($args);

                        while($privateSchools->have_posts() ) : $privateSchools->the_post();
                    
                            $promo = CFS()->get('on_promo');                    
                            $school_type = get_the_tags();
                            $schoolType = $school_type[0]->name;
                            $content = get_the_excerpt();
                            


                        if($promo == true) { ?>
                            
                            <div class="school-div" style="background: url(<? echo get_the_post_thumbnail_url(); ?>) no-repeat center;">
                                <div class="school-ovrly public"></div>
                                <h2 class="school-title title"><? the_title(); ?></h2>
                                <p class="school-type"><? echo $schoolType; ?></p>
                                <div class="school-content">
                                    <? echo $content; ?>
                                    <a class="school-link" href=<? echo get_the_permalink(); ?>><? _e('Learn More', 'nexus'); ?></a>
                                </div>
                            </div>

                        <? } ?>
                    <? endwhile; ?>
                    <?
                        $args = array(
                            'post_type' => 'schools',
                            'posts_per_page' => 1,
                            'order' => 'ASC',
                            'tag' => 'esl'
                        ); 

                        $privateSchools = new WP_query($args);

                        while($privateSchools->have_posts() ) : $privateSchools->the_post();
                    
                            $promo = CFS()->get('on_promo');                    
                            $school_type = get_the_tags();
                            $schoolType = $school_type[0]->name;
                            $content = get_the_excerpt();
                            


                        if($promo == true) { ?>

                            
                            <div class="school-div" style="background: url(<? echo get_the_post_thumbnail_url(); ?>) no-repeat center;">
                                <div class="school-ovrly esl"></div>
                                <h2 class="school-title title"><? the_title(); ?></h2>
                                <p class="school-type"><? echo $schoolType; ?></p>
                                <div class="school-content">
                                    <? echo $content; ?>
                                    <a class="school-link" href=<? echo get_the_permalink(); ?>><? _e('Learn More', 'nexus'); ?></a>
                                </div>
                            </div>

                        <? } ?>
                    <? endwhile; 
                        wp_reset_postdata(); 
                    ?>
                </div>

                <div class="promotions-desc"><? the_content(); ?></div>

            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
