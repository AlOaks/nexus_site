<?php 

/* Template Name: Carnaval Landing Page */

$lang = get_locale();
$token = createTokenForm('lpNexusForm');

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

                <?php while(have_posts()): the_post(); ?>
                    <section class="hero-section-carnaval">
                        <img class="hero-image-carnaval" src=<?php echo get_the_post_thumbnail_url(); ?> />
                        <div class="hero-topstripe"></div>
                        <img class="hero-nexus-logo" src=<?php echo get_template_directory_uri().'/assets/images/nexus_logo_04.png'; ?> />
                        <div class="page-content">
                            <h1><?php the_title(); ?></h1>
                            <p><?php the_content(); ?></p>
                        </div>
                    </section>
                    <section class="areas-section-carnaval">
                        <div class="area-landing-carnaval esl-carnaval" style="background: no-repeat center url(<?php echo CFS()->get('esl_bkg')?>);">
                            <h3><?php _e('ESL', 'Landing Pages'); ?></h3>
                            <p><?php echo CFS()->get('esl_lp_description'); ?></p>
                            <a href="#contact-form-carnaval"><?php _e('Learn More', 'Landing Pages'); ?></a>
                        </div>
                        <div class="area-landing-carnaval ws-carnaval" style="background: no-repeat center url(<?php echo CFS()->get('ws_bkg'); ?>);">
                            <h3><?php _e('Work & Study', 'Landing Pages'); ?></h3>
                            <p><?php echo CFS()->get('ws_lp_description'); ?></p>
                            <a href="#contact-form-carnaval"><?php _e('Learn More', 'Landing Pages'); ?></a>
                        </div>
                        <div class="area-landing-carnaval he-carnaval" style="background: no-repeat center url(<?php echo CFS()->get('he_bkg'); ?>);">
                            <h3><?php _e('Higher Education', 'Landing Pages'); ?></h3>
                            <p><?php echo CFS()->get('he_lp_description'); ?></p>
                            <a href="#contact-form-carnaval"><?php _e('Learn More', 'Landing Pages'); ?></a>
                        </div>
                    </section>
                    <section class="carnaval-testimonial-section">
                        <img class="landing-page-image" src=<?php echo CFS()->get('lp_image'); ?> alt="landing-page-image" />
                        <div class="testimonial-carnaval">
                            <h4><?php _e('Testimonial', 'Landing Pages'); ?></h4>
                            <i class="fas fa-quote-left"></i>
                            <p class="testimonial"><?php echo CFS()->get('testimonial_lp'); ?></p>
                            <i class="fas fa-user-alt"></i>
                        </div>
                    </section>
                    <section class="form-contact-carnaval">
                        <div class="contact-info-carnaval">
                            <h3><?php _e('Come and give us a visit and talk to our advisors!', 'Landing Pages'); ?></h3>
                            <ul>
                                <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    <p>970 Burrard St <?php _e('Room 119 - 1st Floor', 'Landing Pages'); ?>. Vancouver, BC - V6Z 2R4</p>
                                </li>
                                <li>
                                    <i class="fas fa-phone"></i>
                                    <p class="phone-info"> +1 604 288-0787</p>
                                </li>
                                <li>
                                    <i class="far fa-hourglass"></i>
                                    <p class="hours-info"><?php _e('Mon - Fri', 'Landing Pages'); ?> <span>9am to 5pm</span></p>
                                </li>
                            </ul>
                        </div>
                        <div class="social-info-carnaval">
                            <h2><?php _e('Follow us on our social media!', 'Landing Pages'); ?></h2>
                            <ul class="lp_social_links">
                                <li>
                                    <a href="<?php echo CFS()->get('fb_link'); ?>">
                                        <img src="<?php echo get_template_directory_uri().'/assets/images/Facebook.png'; ?>" alt="facebook-logo">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo CFS()->get('insta_link'); ?>">
                                        <img src="<?php echo get_template_directory_uri().'/assets/images/instagram.png'; ?>" alt="instagram-logo">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo CFS()->get('link_link'); ?>">
                                        <img src="<?php echo get_template_directory_uri().'/assets/images/linkedin.png'; ?>" alt="linkedin-logo">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo CFS()->get('yt_link'); ?>">
                                        <img src="<?php echo get_template_directory_uri().'/assets/images/youtube.png'; ?>" alt="youtube-logo">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <form action="../landing-thanks" id="contact-form-carnaval" >
                            <input type="hidden" value=<?php echo $token; ?> name="lpNexusToken" id="lp-nexus-token" />
                            <input type="hidden" value=<?php echo $lang; ?> name="lpNexusLang" id="lp-nexus-lang" />
                            <h3><?php _e('Chat with us!', 'Landing Page'); ?></h3>
                            <div class="landing-form-row">
                                <label class="fname-label"><?php _e('First Name', 'Landing Pages'); ?>*</label>
                                <input type="text" name="lpNexusFirstName" id="lp-nexus-fname" required />
                            </div>
                            <div class="landing-form-row">
                                <label><?php _e('Last Name', 'Landing Pages'); ?>*</label>
                                <input type="text" name="lpNexusLastName" id="lp-nexus-lname" required />
                            </div>
                            <div class="landing-form-row">
                                <label>E-mail*</label>
                                <input type="email" name="lpNexusEmail" id="lp-nexus-email" required />
                            </div>
                            <div class="landing-form-row">
                                <label>WhatsApp*</label>
                                <input type="number" name="lpNexusPhone" id="lp-nexus-phone" required />
                            </div>
                            <div class="landing-form-row">
                                <label>País*</label>
                                <input type="text" name="lpNexusCountry" id="lp-nexus-country" required/>
                            </div>
                            <div class="landing-form-row">
                                <label>Type of Program</label>
                                <select name="lpNexusProgram" id="lp-nexus-program">
                                    <option selected disabled>Select a type of program</option>
                                    <option value="esl"><?php _e('English', 'Landing Pages'); ?></option>
                                    <option value="work-study">Work & Study</option>
                                    <option value="higher-education"><?php _e('Higher Education', 'Landing Pages'); ?></option>
                                </select>
                            </div>
                            <div class="landing-form-row terms">
                                <input type="radio" name="lpNexusTerms" id="lp-nexus-terms" required/>
                                <label for="lp-nexus-terms">I have read and accept the <a href="https://nexuseducanada.com/wp-content/themes/nexus_theme_play/assets/terms-and-conditions-nexus-education-consulting.pdf">Terms and Conditions</a></label>
                            </div>
                            <div class="landing-form-submit">
                                <button class="landing-form-submit">Enviar</button>
                            </div>  
                        </form>
                    </section>
                    <section class="start-journey-section">
				        <h2 class="start-title"><?php _e('Start your journey!', 'nexus'); ?></h2>
				        <p class="start-description"><?php _e('Let us help you find your path to success', 'nexus'); ?></p>
                    </section>
                    <?php endwhile; ?>
                    <footer id="colophon" class="site-footer">
                        <div class="copyright">
                            <p>© Copyright 2019 Nexus Education Consulting</p>
                        </div><!-- .site-info1 -->
                    </footer><!-- #colophon -->
                    <?php wp_footer(); ?>
                </main>
            </div>
        </div> 
    </body>
</html>