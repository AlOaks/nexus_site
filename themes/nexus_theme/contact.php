<?php
/**
 * The template for displaying all pages.
 * Template Name: Contact
 * 
 * @package nexus_Theme
 */
get_header(); ?>


<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <div class="hero-wrapper"> 
        <div class="hero-image">
          <h1 class="contact-hero-title">Contact Us <h1>
        </div>
      </div>
<div class="desktop-wrapper">

<div class="contact-form">
<?php while ( have_posts() ) : the_post(); ?>
            <h2 class="title"> Send Us a Message</h2>
         
            <div class="contact-content">	<?php get_template_part( 'template-parts/content', 'page' ); ?>
            <?php endwhile;  ?>


<div class="desktop-contact-display">
<h2> Nexus in 
Canada </h2>
<p>Come and pay us a visit and talk to our exchange experts or ask for a quote here .</p><br>
          <i class="fa fa-map-marker" aria-hidden="true"></i><p class="contact-address">119-970 Burrard St.<br>Vancouver, BC V6Z 2R4</p><br>

          <i class="fa fa-hourglass-end"></i>
            <p class="contact-hours"> Office Hours: Monday-Friday, 9am - 5pm PST</p>

          <i class="fa fa-phone "></i>
          <a href="tel:6042886787">604 288 6787</a>      
</div>
</div>
<div class="desktop-contact-info">
</div>
</div>

<!-- contact journey -->
  <div class="contact-journey">
    <h2 class="contact-journey-h2">Start Your Journey<h2><br>
    <div class="journey-text">
      <p>Let us help you find your path to success</p>
    </div>
    <a href="<?php echo home_url();?>/consult/"><div class="consult">Book Consult</div></a>
  </div>	


<?php get_footer();?>