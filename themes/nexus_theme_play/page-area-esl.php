<?php
/**
 * Template Name: ESL Page
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
			<div class="area-page-hero">
                <div class="area-page-hero-parallax" data-parallax="scroll" data-image-src="<?php echo get_the_post_thumbnail_url(); ?>" ></div>
                <div class="area-page-hero-ovrly"></div>
                <div class="area-page-heading">
                    <?php while ( have_posts() ) : the_post(); ?>
                            <?php the_title('<h1>', '</h1>'); ?>
                            <?php the_content('<p>', '</p>'); ?>
                    <?php endwhile; wp_reset_query(); ?>
                </div>
                <?php 
                    $args = array(
                        'post_type' => 'schools',
                        // 'posts_per_page' => -1,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'school_type',
                                'field'=> 'slug',
                                'terms' => 'esl'
                            )
                        )
                    );

                    $monthSchool = new WP_query($args);

                while($monthSchool->have_posts()) : $monthSchool->the_post(); 

                    $onPromotion = CFS()->get('on_promo');

                    if($onPromotion === 1) { ?>
                        <div class="school-of-month-div">
                            <h2><?php _e('School of the month!', 'Areas Pages'); ?></h2>
                            <img class="school-month-logo" src="<?php echo CFS()->get('school_logo'); ?>" />
                            <a href="<?php echo get_the_permalink(); ?>"><?php _e('Learn more', 'Areas Pages'); ?></a>
                        </div>
                    <?php } ?>
                <?php 
                    endwhile; 
                    wp_reset_query();
                ?>

                <div class="area-page-menu">
                    <ul>
                        <li><a href="#requisites"><?php _e('Requisites', 'Areas Pages'); ?></a></li>
                        <li><a href="#outcome"><?php _e('Outcome', 'Areas Pages'); ?></a></li>
                        <li><a href="#schools"><?php _e('Schools', 'Areas Pages'); ?></a></li>
                    </ul>
                </div>
            </div>
            <section class="what-are-these-sec">
                <div class="left-side-about">
                    <h3><?php _e('About these programs', 'Areas Pages'); ?></h3>
                    <a href="#" class="get-quote-btn menu-item-51 menu-item-25"><?php _e('Chat with us!', 'Front-page'); ?></a>
                </div>
                <?php $aboutArea = CFS()->get('about_area'); ?>
                <p><?php echo $aboutArea; ?></p>
                <div class="about-area-triangle"></div>
            </section>
            <section id="requisites" class="requisites-area-sec">
                <div data-parallax="scroll" class="area-requisites-parallax" data-image-src="<?php echo get_template_directory_uri().'/assets/images/quebec.jpg'; ?>" ></div>
                <div class="area-requisites-ovrly"></div>
                <div class="requisites-right-side">
                    <h3><?php _e('What do I need?', 'Areas Pages'); ?></h3>
                    <?php $requisitesArea = CFS()->get('area_requisites'); ?>
                    <p><?php echo $requisitesArea; ?></p>
                </div>
            </section>
            <section id="outcome" class="outcome-area-sec">
                <div class="outcome-area-triangle"></div>
                <?php $outcomeArea = CFS()->get('area_outcome'); ?>
                <p><?php echo $outcomeArea; ?></p>
                <div class="right-side-outcome">
                    <h3><?php _e('What will I get from this?', 'Areas Pages'); ?></h3>
                    <a href="#" class="get-quote-btn menu-item-51 menu-item-25"><?php _e('Chat with us!', 'Front-page'); ?></a>
                </div>
            </section>
            <section id="schools" class="partners-area-sec">
                <div class="half-moon-partners">
                    <h3><?php _e('Our Partners', 'Areas Pages'); ?></h3>
                </div>
                <div class="partners-container">
                    <?php 
                        $partners = CFS()->get('area_school_partners'); 
                    
                        foreach($partners as $partner) { ?>
                         
                            <img class="partner-single" src="<?php echo $partner['area_partner']; ?>" >

                    <?php } ?>
                    

                </div>
            </section>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
