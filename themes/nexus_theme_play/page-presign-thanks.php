<?php
/**
 * Template Name: Thanks PreSign
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

require("vendor/autoload.php");

use \DrewM\MailChimp\MailChimp;

$mailC = new MailChimp('c5d0f074ef62e6395640869899d38579-us8');

if($_POST['presign-lang'] && $_POST['presign-lang'] == 'es_ES') {
    $language = 'Spanish';
} else if($_POST['presign-lang'] && $_POST['presign-lang'] == 'pt_BR') {
    $language = 'Portuguese';
} else {
    $language = 'English';
}


$listID = '71b439e476';


		// Building a whitelist array with keys which will send through the form, no others would be accepted later on
$allowedAccomFields = array('presign-name', 'presign-lang', 'presign-last-name', 'presign-email', 'presign-phone', 'presign-country');

// Building an array with the $_POST-superglobal 
foreach ($_POST as $key=>$item) {
        
// Check if the value $key (fieldname from $_POST) can be found in the whitelisting array, if not, die with a short message to the hacker
    if (!in_array($key, $allowedAccomFields)) {
        
        secureLog('Unknown form fields @ Contact Form');
        die("Error detected. Please use only the fields in the form");
        // header("refresh:1;url=https://nexuseducanada.com");
        }
}

    $name = stripcleantohtml($_POST['presign-name']);
    $lastname = stripcleantohtml($_POST['presign-last-name']);
    $email = stripcleantohtml($_POST['presign-email']);
    $phone = stripcleantohtml($_POST['presign-phone']);
    $country = stripcleantohtml($_POST['presign-country']);
    $lang = stripcleantohtml($_POST['presign-lang']);


    $newMember = $mailC->post('lists/'.$listID.'/members', [
        'email_address' => $email,
        'merge_fields' => [
            'FNAME' => $name,
            'LNAME' => $lastname,
            'PHONE' => $phone
        ],
        'status' => 'subscribed',
        'tags' => ['PreSign Up', $language, $country]
    ]);

    // echo '<pre>';
    // var_dump($newMember);
    // echo '</pre>';

    if($newMember['errors']) {
        // echo '<pre>';
        // var_dump($newMember['errors']);
        // echo '</pre>';

        include('includes/errorhandler.php');
    } else {
    
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

}
