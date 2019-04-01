<?php
/**
 * Template Name: Events L Page
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
session_start();


$subToken = createTokenForm('Events Form');

$verified = tokenVer('Events Form');

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
                    <section class="events-main">
                        <section class="events-hero">
                            <img class="events-hero-bg" src=<?php echo get_the_post_thumbnail_url(); ?> >
                            <div id="events-ovrly"></div>
                            <div class="events-hero-container">
                                <div class="events-hero-info">
                                    <img class="events-nexus-logo" src="<?php echo get_template_directory_uri().'/assets/images/nexus_logo_white.png'; ?>" >
                                <?php while(have_posts()) : the_post(); 
                                    $date = date( 'F j, Y', strtotime( CFS()->get('date_events') ) );
                                    $location = CFS()->get('event_location');
                                ?>

                                    <?php 
                                        $eventTitle = CFS()->get('event_title');
                                    ?>
                                    <h2><?php echo $eventTitle; ?></h2>
                                    <div class="events-info">
                                        <i class="fas fa-calendar-alt"></i> <?php echo $date; ?> | <?php echo $location; ?> <i class="fas fa-map-marker-alt"></i>
                                    </div>

                                <?php endwhile; ?>
                                </div>
                                <form id="events-form" action="http://localhost/nexus/thanks-events" method="post">
                                    <label class="events-form-title"><?php _e('Register today!', 'Events Page'); ?></label>
                                    <input type="hidden" name="tokenField" value="<?php echo $subToken; ?>">
                                    <div class="events-row">
                                        <label><?php _e('Name', 'Events Page'); ?></label>
                                        <input type="text" name="events-name" id="subscriber-name" required />
                                    </div>
                                    <div class="events-row">
                                        <label><?php _e('Last Name', 'Events Page'); ?></label>
                                        <input type="text" name="events-lname" id="subscriber-lname" required />
                                    </div>
                                    <div class="events-row">
                                        <label>E-mail</label>
                                        <input type="email" name="events-email" id="subscriber-email" required />
                                    </div>
                                    <button id="subscribe-btn"><?php _e('Reserve a spot', 'Events Page'); ?></button>
                                </form>
                            </div>
                        </section>
                        <section class="events-about">
                            <h3 class="event-about-title"><?php _e('About the event', 'Events Page'); ?></h3>
                            <?php the_content('<div>', '</div>'); ?>
                        </section>
                        <?php 
                            $speakers = CFS()->get('speakers_array');
                            $s = 0;
                            if(!empty($speakers)) { ?>
                                <section class="events-speakers">
                                    <h2><?php _e('Meet our speakers!', 'Events Page'); ?></h2>
                                    <div class="speakers-big-container">
                                    <?php foreach($speakers as $speaker) { $s++; ?>
                                            <div class="speaker-container">
                                                <img class="speaker-photo" src="<?php echo $speaker['speaker_photo']?>" />
                                                <p class="speaker-name"><?php echo $speaker['speaker_name']; ?></p>
                                                <p><?php echo $speaker['speaker_company']; ?></p>
                                            </div>
                                    <?php } ?>
                                    </div>
                                </section>   

                            <?php } ?>
                        <section class="events-agenda">
                            <h2>Agenda</h2>
                            <ul>
                            <?php 
                                $agenda = CFS()->get('event_agenda');   
                                $a = 0;
                        
                                foreach($agenda as $task) { $a++ ?>
                                    <li><i class="fas fa-clock"></i> <?php echo $task['activity_time']; ?> | <?php echo $task['activity_name']; ?> </li>
                                    
                            <?php } ?>
                            </ul>
                        </section>
                        <section class="events-location">
                                <div class="location-ovrly"></div>
                                <?php $eventLocation = CFS()->get('event_location'); ?>
                                    
                                <h2><?php _e('Location', 'Events Page'); ?></h2>
                                <p><?php _e('This event is going to be held at'); ?> <?php echo $eventLocation; ?></p>

                        </section>
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
