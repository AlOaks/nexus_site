<?php
/**
 * Template Name: Monthly Promotion
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


?>
<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="site">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <section class="monthly-promo-div">
                        <div class="monthly-promo-ovrly"></div>
                        <?php echo '<img class="background-month" src='.get_the_post_thumbnail_url().' >'; ?>
                        <div class="monthly-promo-hero">
                            <div class="monthly-promo-header">
                                <img class="lp-logo" src=<?php echo get_template_directory_uri().'/assets/images/nexus_logo_white.png'; ?> >
                            <?php while ( have_posts() ) : the_post(); ?>
                                <?php the_title('<h1>', '</h1>'); ?>
                                <?php the_content('<div>', '</div>'); ?>	

                            <?php endwhile; ?>
                            </div>
                            <form id="month-promotion-form">
                                <label class="form-title"><?php _e('Register today and get a discount on your inscription fee', 'Landing Pages'); ?></label>
                                <input type="hidden" name="month-hidden-input" id="promotions-landingpage" value="ILSC & GreyStone College Landing Page">
                                <div class="month-row">
                                    <label><?php _e('Name', 'Landing Pages'); ?></label>
                                    <input type="text" name="month-name" id="month-form-name" required />
                                </div>
                                <div class="month-row">
                                    <label><?php _e('E-mail', 'Landing Pages'); ?></label>
                                    <input type="email" name="month-email" id="month-form-email" required />
                                </div>
                                <div class="month-row">
                                    <label><?php _e('Phone / Whatsapp', 'Landing Pages'); ?></label>
                                    <input type="text" name="month-phone" id="month-form-phone" required />
                                </div>
                                <button id="monthly-promotion-btn"><?php _e('Get Promotion', 'Landing Pages'); ?></button>
                            </form>
                        </div>
                    </section>
                    <section class="month-info-section">
                        <div class="promotion-header">
                            <img src=<?php echo get_the_post_thumbnail_url(); ?> >
                            <h2><?php _e('Discover why you should study at any of these schools!', 'Landing Pages'); ?></h2>
                        </div>
                        <?php 
                            $schoolsOnPromo = CFS()->get('schools_promotion_array');

                            foreach($schoolsOnPromo as $schoolOnPromo) { ?>
                                <div class="school-on-promo <?php echo $schoolOnPromo['school_name_promo']; ?>">
                                    <img src=<?php echo $schoolOnPromo['school_image_promo']?> >
                                    <div class="school-on-promo-info">
                                        <h2><?php _e('Why ', 'Landing Pages'); ?><?php echo $schoolOnPromo['school_name_promo']; ?>?</h2>
                                        <p><?php echo $schoolOnPromo['school_description_promo']; ?></p>
                                        <h3><?php _e('What'); ?> <?php echo $schoolOnPromo['school_name_promo']; ?> <?php _e('has to offer', 'Landing Pages'); ?></h3>
                                        <ul>
                                            <?php 
                                                $schoolFeatures = $schoolOnPromo['school_features_promo'];

                                                foreach($schoolFeatures as $feats) { ?>
                                                    <li><?php echo $feats['feature_promo']; ?></li>
                                            <?php }  ?>

                                        </ul>
                                    </div>
                                </div>
                        <?php } ?>
                        <a class="get-promotion-btn" href="#top"><?php _e('Get Promotion', 'Landing Pages'); ?></a>
                    </section>
                    <section class="review-container-month">
                        <div class="footer-ovrly"></div>
                        <img class="footer-bkg" src=<?php echo get_template_directory_uri().'/assets/images/hero-img.jpg'; ?>>
				        <div class="month-promo-site-info">
                        <img src=<?php echo get_template_directory_uri().'/assets/images/foto-review.png'; ?> >
                        <div class="review-month-container">
                            <i class="fas fa-quote-left"></i>
                            <p><?php _e("I was lucky enough to find the Nexus. They helped me through the process of studying at Greystone. Now I'm starting my professional life here in Canada!", 'Landing Pages'); ?></p>
                            <p class="review-name">Adriana Ribeiro</p>
                        </div>
                    </section>
                </main><!-- #main -->
            </div><!-- #primary -->
            <footer id="colophon" class="site-footer">
				<div class="copyright">
					<p>© Copyright 2019 Nexus Education Consulting</p>
				</div><!-- .site-info1 -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

	<?php wp_footer(); ?>

	</body>
</html>
