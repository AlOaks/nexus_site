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
                <h1><?php the_title(); ?></h1>
                <div class="promotions-mosaic">
                    <?php
                        $args = array(
                            'post_type' => 'schools',
                            'order' => 'ASC'
                        ); 

                        $promoSchools = new WP_query($args);

                        while($promoSchools->have_posts() ) : $promoSchools->the_post();
                    
                            $promo = CFS()->get('on_promo');                    
                            $school_type = get_the_tags();
                            $schoolType = $school_type[0]->name;
                            $content = get_the_excerpt();
                            

                        if($promo == true) { ?>
                            
                            <div class="school-div" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>) no-repeat center;">
                                <div class="school-ovrly"></div>
                                <h2 class="school-title title"><?php the_title(); ?></h2>
                                <p class="school-type"><?php echo $schoolType; ?></p>
                                <div class="school-content">
                                    <?php echo $content; ?>
                                    <a class="school-link" href=<?php echo get_the_permalink(); ?>><?php _e('Learn More', 'nexus'); ?></a>
                                </div>
                            </div>

                        <?php } ?>
                    <?php endwhile; wp_reset_postdata(); ?>
                    

                <div class="promotions-desc"><?php the_content(); ?></div>

            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
