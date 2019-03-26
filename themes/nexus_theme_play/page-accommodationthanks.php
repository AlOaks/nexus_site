<?php
/**
 * Template Name: Thanks Accommodation
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
<?php

$to = $_POST['nexus-email'];
$fname = $_POST['acc-name'];
$lname = $_POST['acc-lastname'];
$nation = $_POST['acc-nation'];
$birth = $_POST['acc-birth'];
$address = $_POST['acc-address'];
$city = $_POST['acc-city'];
$state = $_POST['acc-state'];
$zipcode = $_POST['acc-zipcode'];
$mphone = $_POST['acc-phone'];
$email = $_POST['acc-email'];
$highSchool = $_POST['acc-school'];
$acctype = $_POST['acc-type'];
$roomtype = $_POST['acc-rooom'];
$meals = $_POST['acc-meals'];
$checkin = $_POST['acc-checkin'];
$checkout = $_POST['acc-checkout'];
$incats = $_POST['acc-indoorcats'];
$outcats = $_POST['acc-outdoorcats'];
$indogs = $_POST['acc-indoordogs'];
$outdogs = $_POST['acc-outdoordogs'];
$noanimals = $_POST['acc-prefer'];
$hobbies = $_POST['acc-hobbies'];
$allergies = $_POST['acc-meds'];
if(isset($_POST['acc-veggie'])) {
	$veggie = $_POST['acc-veggie'];
} else {
	$veggie = 'N/A';
}
if(isset($_POST['acc-preferhouse'])) {
	$preferhouse = $_POST['acc-preferhouse'];
} else {
	$preferhouse = 'N/A';
}

if(isset($_POST['acc-specific'])) {
	$specific = $_POST['acc-specific'];
} else {
	$specific = 'N/A';
}

$consent = $_POST['privacy-policy'];
$subject = 'Accommodation Form from '.$fname;


$msg = "

Registration Form Submitted by ".$fname."

	
		First Name: ".$fname."
		Last Name: ".$lname."
		Nationality: ".$nation."
		Birthdate: ".$birth."
		Address: ".$address."
		City: ".$city."
		State / Province: ".$state."
		Zip Code: ".$zipcode."
		Mobile Phone: ".$mphone."
		E-Mail: ".$email."
		School: ".$highSchool."
		Accommodation Type: ".$acctype."
		Room Type: ".$roomtype."
		Meals: ".$meals."
		Check In Date: ".$checkin."
		Check Out Date: ".$checkout."
		Indoor Cats: ".$incats."
		Outdoor Cats: ".$outcats."
		Indoor Dogs: ".$indogs."
		Outdoor Dogs: ".$outdogs."
		No Animals: ".$noanimals."
		Hobbies: ".$hobbies."
		Allergies: ".$allergies."
		Type of Vegetarian: ".$veggie."
		House Preference: ".$preferhouse."
		Any Specifics Request: ".$specific."
		Privacy Policy: ".$consent."
";

$headers .= 'From: Nexus Education Consulting <contact@nexuseducanada.com>';

if($fname && $lname) {
	mail($to, $subject, $msg, $headers);
}

?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="page-title-container">
			</div>
			<div class="thanks-page-form">
                <h2><?php _e('Thank you for your registration!', 'nexus'); ?></h2>
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
