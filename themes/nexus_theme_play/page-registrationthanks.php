<?php
/**
 * Template Name: Thanks REgistration
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
$fname = $_POST['first-name'];
$lname = $_POST['last-name'];
$gender = $_POST['gender'];
$nation = $_POST['nationality'];
$birth = $_POST['birthdate'];
$marital = $_POST['marital'];
$children = $_POST['children'];
$passNum = $_POST['passport-no'];
$passDate = $_POST['passport-expiry'];
$address = $_POST['cur-address'];
$city = $_POST['city'];
$state = $_POST['state-province'];
$zipcode = $_POST['zipcode'];
$mphone = $_POST['mobile-phone'];
$email = $_POST['email'];
$emerContact = $_POST['emergency-name'];
$emerContactNum = $_POST['emergency-number'];
$highSchool = $_POST['high-school'];
$highEnd = $_POST['high-school-end'];

if(isset($_POST['higher-education'])) {
	$higherSchool = $_POST['higher-education'];
} else {
	$higherSchool = 'N/A';
}

if(isset($_POST['higher-education-end'])) {
	$higherEnd = $_POST['higher-education-end'];
} else {
	$higherEnd = 'N/A';
}


$englishLevel = $_POST['eng-level'];
$schoolCanada = $_POST['school-to-study'];
$prgType = $_POST['prgtype'];
$courseName = $_POST['course-name'];
$startDate = $_POST['start-date'];

if(isset($_POST['program-duration'])) {
	$duration = $_POST['program-duration'];
} else {
	$duration = 'N/A';
}

$accomm = $_POST['accomm'];

if(isset($_POST['stay-length'])) {
	$length = $_POST['stay-length'];
} else {
	$length = 'N/A';
}


if(isset($_POST['stay-length'])) {
	$room = $_POST['stay-length'];
} else {
	$room = 'N/A';
}

if(isset($_POST['meals'])) {
	$meals = $_POST['meals'];
} else {
	$meals = 'N/A';
}
$health = $_POST['health'];

if(isset($_POST['health-duration'])) {
	$coverage = $_POST['health-duration'];
} else {
	$coverage = 'N/A';
}

$consent = $_POST['privacy-policy'];
$subject = 'Registration Form from '.$fname;


$msg = "

Registration Form Submitted by ".$fname."

	
		First Name: ".$fname."
		Last Name: ".$lname."
		Gender: ".$gender."
		Nationality: ".$nation."
		Birthdate: ".$birth."
		Marital Status: ".$marital."
		Children: ".$children."
		Passport Number: ".$passNum."
		Passport Expiry: ".$passDate."
		Address: ".$address."
		City: ".$city."
		State / Province: ".$state."
		Zip Code: ".$zipcode."
		Mobile Phone: ".$mphone."
		E-Mail: ".$email."
		Emergency Contact: ".$emerContact."
		Emergency Number: ".$emerContactNum."
		High School: ".$highSchool."
		High School EndDate: ".$highEnd."
		Higher Education School: ".$higherSchool."
		Higher Education End Date: ".$higherEnd."
		English Level: ".$englishLevel."
		School to study in: ".$schoolCanada."
		Program Type: ".$prgType."
		Name of Program: ".$courseName."
		Starting Date: ".$startDate."
		Duration of Program: ".$duration."
		Accommodation: ".$accomm."
		Length of Stay: ".$length."
		Type of Room: ".$room."
		Meals Included: ".$meals."
		Health Insurance Included: ".$health."
		Health Coverage Duration: ".$coverage."
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
