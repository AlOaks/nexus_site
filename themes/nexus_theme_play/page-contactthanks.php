<?php
/**
 * Template Name: Thanks Contact
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

$verified = tokenVer("contactform");

if($verified === true) {

		// Building a whitelist array with keys which will send through the form, no others would be accepted later on
	$allowedAccomFields = array('tokenField','pagelang','nexus-email','contact-name', 'contact-email', 'contact-message', 'privacy-policy');

	// Building an array with the $_POST-superglobal 
	foreach ($_POST as $key=>$item) {
			
	// Check if the value $key (fieldname from $_POST) can be found in the whitelisting array, if not, die with a short message to the hacker
        if (!in_array($key, $allowedAccomFields)) {
            
            secureLog('Unknown form fields @ Contact Form');
            die("Error detected. Please use only the fields in the form");
            // header("refresh:1;url=https://nexuseducanada.com");
            }
    }

        $lang = stripcleantohtml($_POST['pagelang']);
        $name = stripcleantohtml($_POST['contact-name']);
        $email = stripcleantohtml($_POST['contact-email']);
        $message = stripcleantohtml($_POST['contact-message']);
        $consent = stripcleantohtml($_POST['privacy-policy']);

        $to = $_POST['nexus-email'];
        $subject = 'Contact Form from '.$name;
        $msg = "

        Contact Form Submitted by ".$name."

            Name: ".$name."
            Email: ".$email."
            Message: ".$message."
            Privacy Policy: ".$consent."

        ";
        $headers .= 'From: Nexus Contact <contacto@nexuseducanada.com>';

        // echo '<h1>'.$to, $name, $email, $message, $consent.'</h1>';
        mail($to, $subject, $msg, $headers);

} else {
    secureLog('Form Token @ Contact Form');
    header("refresh:1;url=https://nexuseducanada.com");
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
