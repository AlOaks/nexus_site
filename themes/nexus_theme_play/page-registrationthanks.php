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
$higherSchool = $_POST['higher-education'] ?? 'N/A';
$higherEnd = $_POST['higher-education-end'] ?? 'N/A';
$englishLevel = $_POST['eng-level'];
$schoolCanada = $_POST['school-to-study'];
$prgType = $_POST['prgtype'];
$courseName = $_POST['course-name'];
$startDate = $_POST['start-date'];
$duration = $_POST['program-duration'] ?? 'N/A';
$accomm = $_POST['accomm'];
$length = $_POST['stay-length'] ?? 'N/A';
$room = $_POST['room'] ?? 'N/A';
$meals = $_POST['meals'] ?? 'N/A';
$health = $_POST['health'];
$coverage = $_POST['health-duration'] ?? 'N/A';
$consent = $_POST['privacy-policy'];
$subject = 'Registration Form from '.$fname;


$msg = "
<html>
<head>Registration Form Submitted by ".$fname."</head>
<body>
	<ul>
		<li>First Name: ".$fname."</li>
		<li>Last Name: ".$lname."</li>
		<li>Gender: ".$gender."</li>
		<li>Nationality: ".$nation."</li>
		<li>Birthdate: ".$birth."</li>
		<li>Marital Status: ".$marital."</li>
		<li>Children: ".$children."</li>
		<li>Passport Number: ".$passNum."</li>
		<li>Passport Expiry: ".$passDate."</li>
		<li>Address: ".$address."</li>
		<li>City: ".$city."</li>
		<li>State / Province: ".$state."</li>
		<li>Zip Code: ".$zipcode."</li>
		<li>Mobile Phone: ".$mphone."</li>
		<li>E-Mail: ".$email."</li>
		<li>Emergency Contact: ".$emerContact."</li>
		<li>Emergency Number: ".$emerContactNum."</li>
		<li>High School: ".$highSchool."</li>
		<li>High School EndDate: ".$highEnd."</li>
		<li>Higher Education School: ".$higherSchool."</li>
		<li>Higher Education End Date: ".$higherEnd."</li>
		<li>English Level: ".$englishLevel."</li>
		<li>School to study in: ".$schoolCanada."</li>
		<li>Program Type: ".$prgType."</li>
		<li>Name of Program: ".$courseName."</li>
		<li>Starting Date: ".$startDate."</li>
		<li>Duration of Program: ".$duration."</li>
		<li>Accommodation: ".$accomm."</li>
		<li>Length of Stay: ".$length."</li>
		<li>Type of Room: ".$room."</li>
		<li>Meals Included: ".$meals."</li>
		<li>Health Insurance Included: ".$health."</li>
		<li>Health Coverage Duration: ".$coverage."</li>
		<li>Privacy Policy: ".$consent."</li>
	</ul>
</body>
</html>
";

$headers = 'MIME-Version: 1.0';
$headers .= 'Content-type: text/html; charset=iso-8859-1';	
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
