<?php
/**
 * Template Name: Thanks Featured Programs
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

get_header();

$verified = tokenVer('featSchools');

require("vendor/autoload.php");

use \DrewM\MailChimp\MailChimp;

$mailC = new MailChimp('c5d0f074ef62e6395640869899d38579-us8');

if($_POST['featlanguage'] && $_POST['featlanguage'] == 'es_ES') {
    $listID = '2b7e85bfa8';
} else if($_POST['featlanguage'] && $_POST['featlanguage'] == 'pt_BR') {
    $listID = 'b7f483ccf1';
} else {
    $listID = '71b439e476';
}

if($verified === true) {

		// Building a whitelist array with keys which will send through the form, no others would be accepted later on
	$allowedAccomFields = array('tokenField', 'nexus-email', 'featprogram', 'featlanguage', 'featname', 'featemail', 'featphone');

	// Building an array with the $_POST-superglobal 
	foreach ($_POST as $key=>$item) {
			
	// Check if the value $key (fieldname from $_POST) can be found in the whitelisting array, if not, die with a short message to the hacker
        if (!in_array($key, $allowedAccomFields)) {
            
            secureLog('Unknown form fields @ Contact Form');
            die("Error detected. Please use only the fields in the form");
            // header("refresh:1;url=https://nexuseducanada.com");
            }
    }
        console($_POST['featlanguage']);
        $name = stripcleantohtml($_POST['featname']);
        $email = stripcleantohtml($_POST['featemail']);
        $phone = stripcleantohtml($_POST['featphone']);
        $program = stripcleantohtml($_POST['featprogram']);

        $newMember = $mailC->post('lists/'.$listID.'/members', [
            'email_address' => $email,
            'merge_fields' => [
                'FNAME' => $name,
            ],
            'status' => 'subscribed'
        ]);
    

}


?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="page-title-container">
			</div>
			<div class="thanks-page-form">
                <h2><?php _e('Thank you for your message!', 'nexus'); ?></h2>
                <p><?php _e('We will get back to you as soon as possible!', 'nexus'); ?></p>
                <a href="https://nexuseducanada.com"><?php _e('Back to home', 'nexus'); ?></a>
            </div>
            <section class="start-journey-section">
			    <h2 class="start-title"><?php _e("Can't find what you're looking for?", 'nexus'); ?></h2>
			    <p class="start-description"><?php _e('We have more to offer', 'nexus'); ?></p>
			    <a class="contact-btn join-footer"><?php _e('Join Nexus Club', 'nexus'); ?></a>
		    </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
