<?php
/**
 * The template for displaying all pages.
 * Template Name: About 
 * @package nexus_Theme
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<!--######### Hero image ########### To change, see about.scss and change background image on line 25 -->
      <div class="hero-wrapper"> 
        <div class="hero-image">
          <h1 class="about-title"> About Us <h1>
        </div>
      </div>
      
<!--######### Mission wrapper #########   -->
      <div class="mission-wrapper">
          <h2> Our Mission </h2>
            <div class="underline"></div>
             <p> All success stories have a common structure that helps dreams vecome reality. We believe that orientation, experience, and teamwork are the most powerful tools availale to achieve success. Our passion is to help every person learn to prepare a powerful action-plan and execute their life-changing journey of living in Canada effectively. </p>
      </div>


      <div class="about-help">
      <h2> How We Help</h2><br>
      <div class="underline"></div>
      </div>
  <!-- ####### Images and text for about scroll  #######-->
<div class="about-wrapper">

  <!-- ######## Items with left aligned images. Text and image can be changed here #######-->
  <div class="about-left">
      <img class="about-img" src="<?php echo get_template_directory_uri(); ?>/images/01@2x.png" />
      <p><span class="about-titles">Planning and Organizing</span> <br>EDIT IN ABOUT.PHP --- >LINE 37 - 90 We are passionate about graphic design and bring it to life and prid graphic design and bring it to  om Canadaic design and bring it to life and pride ourselves on creating memorable experiences.  </p>
      <img class="path-img-left" src="<?php echo get_template_directory_uri(); ?>/assets/images/Path-2@3x.png" />
  </div>

      <!-- ######## Items with right aligned images. Text and image can be changed here #######--> 
  <div class="about-right">

      <p><span class="about-titles">Applying for School</span><br>EDIT IN ABOUT.PHP --- >LINE 37 - 90 We are passionate about graphic design and bring it to life and pri.We are passionate about graphic design and bring it to life and pride ing it to life and pride ourselves on creating memorable experiences. .</p>
      <img class="about-img" src="<?php echo get_template_directory_uri(); ?>/images/02@2x.png" /><img class="path-img-right" src="<?php echo get_template_directory_uri(); ?>/assets/images/Path-4@3x.png" />

  </div>


    <!-- ######## Items with left aligned images. Text and image can be changed here #######-->
  <div class="about-left">
      <img class="about-img" src="<?php echo get_template_directory_uri(); ?>/images/03@2x.png" />
      <p><span class="about-titles">Applying for School</span><br>EDIT IN ABOUT.PHP --- >LINE 37 - 90 We are passionate about graphic design and bring it to life and pride bring it to life and pride ourselves on creating memorable experiences. .</p><img class="path-img-left" src="<?php echo get_template_directory_uri(); ?>/assets/images/Path-2@3x.png" />
  </div>

  <!-- ######## Items with right aligned images. Text and image can be changed here #######--> 
  <div class="about-right">
    <p class="about-how-help-text"><span class="about-titles">Applying for School</span><br>EDIT IN ABOUT.PHP --- >LINE 37 - 90 We are passionate about graphic design and bring it to life and pride ourselves on creatinesind bring it to life and pride ourselves on creating memorable experiences. </p><img class="about-img" src="<?php echo get_template_directory_uri(); ?>/images/04@2x.png" /><img class="path-img-right" src="<?php echo get_template_directory_uri(); ?>/assets/images/Path-4@3x.png" />
  </div>
  <!-- ######## Items with left aligned images. Text and image can be changed here #######-->
  <div class="about-left">
    <img class="about-img" src="<?php echo get_template_directory_uri(); ?>/images/05@2x.png" />
    <p><span class="about-titles">Living in Canada</span><br>EDIT IN ABOUT.PHP --- >LINE 37 - 90 We are passionate about graphic design and bring it to life and pripassionate about graphic design and bring it to life and pride ourselves on creating memorable experiences.  </p>
  </div>

</div>

<!-- ###### Images, text, and links for Consultants.  ###### --> <h2 class="consultant-title">  Our Education Consultants</h2><br>
<div class="consultant-wrapper">
<div class="about-consultants">
     
      <div class="underline"></div>
      <img alt="Photo of Rafael" src="<?php echo get_template_directory_uri(); ?>/images/TeamMember01@2x.png" />
      <h3>Rafael Schafer Marques </h3>
      <p> Director of International Studies </p>
      <a href="http://www.facebook.com/rafacanada" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
      <a href="mailto:rafael@nexusintercambio.com.br"><i class="fa fa-envelope" aria-hidden="true"></i></a>
      <a href="http://br.linkedin.com/in/rafacanada/" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
</div>

<div class="about-consultants">
<img alt="Image of Carolina" src="<?php echo get_template_directory_uri(); ?>/images/TeamMember02@3x.png" />
      <h3> Carolina Robeiro </h3>
      <p> Advisor</p>
      <a href="http://www.facebook.com/carolribeiro.3551/" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
      <a href="mailto:carol@nexusintercambio.com.br"><i class="fa fa-envelope" aria-hidden="true"></i></a>
     <i class="fa fa-linkedin-square" aria-hidden="true"></i>
</div>
</div>
<!-- ######## Journy Hero  ###### -->
<!-- <div class="about-journey">
      <h2> Start Your Journey<h2><br>
      <p>Let us help you find your path to success</p>
      <button class="consult">Book Consult</button>
      </div> -->
      <div class="about-journey">
      		<h2 class="about-journey-h2">Start Your Journey<h2><br>
					<!-- <div class="underline"></div> -->
					<div class="journey-text">
						<p>Let us help you find your path to success</p>
					</div>
					<a href="<?php echo home_url();?>/consult/"><div class="consult">Book Consult</div></a>
				</div>	
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer();?>