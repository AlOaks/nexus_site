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
                <div class="promotions-mosaic">
                    <?
                        $args = array(
                            'post_type' => 'schools',
                            'posts_per_page' => 3,
                            'order' => 'ASC'
                        ); 

                        $promoSchools = new WP_query($args);

                        
                        

                        while($promoSchools->have_posts() ) : $promoSchools->the_post();
                    
                            $promo = CFS()->get('on_promo');                    
                            $school_type = get_the_tags();
                            $schoolType = $school_type[0]->name;

                        if($promo == true) { ?>
                            
                            <div class="school-div" style="background: url(<? echo get_the_post_thumbnail_url(); ?>) no-repeat center;">
                                <div class="school-ovrly"></div>
                                <h2 class="school-title"><? the_title(); ?></h2>
                                <p class="school-type"><? echo $schoolType; ?></p>
                                <a class="school-link" href=<? echo get_the_permalink(); ?>><? _e('Learn More', 'nexus'); ?></a>
                            </div>

                        <? } else { ?>
                            
                            <div class="contact-div">
                                <h2><? _e('Ask about more schools!', 'nexus'); ?></h2>
                                <a class="contact-button-school" href="../contact"><? _e('Contact Us', 'nexus'); ?></a>
                            </div>


                        <? } ?>
                    <? endwhile; ?>
                </div>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
