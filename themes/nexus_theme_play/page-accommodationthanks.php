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
session_start();

get_header();



// 	// Building a whitelist array with keys which will send through the form, no others would be accepted later on
// $allowedAccomFields = array('acc-name','acc-lastname','acc-nation','acc-birth','acc-address','acc-city','acc-state','acc-zipcode', 'acc-country','acc-phone','acc-email','acc-school','acc-type','acc-room','acc-meals','acc-checkin','acc-checkout','acc-indoorcats','acc-outdoorcats','acc-indoordogs','acc-outdoordogs','acc-prefer','acc-hobbies','acc-meds','acc-veggie','acc-preferhouse','acc-specific','privacy-policy');

// // Building an array with the $_POST-superglobal 
// foreach ($_POST as $key=>$item) {
		
// // Check if the value $key (fieldname from $_POST) can be found in the whitelisting array, if not, die with a short message to the hacker
// 	if (!in_array($key, $allowedAccomFields)) {
		
// 		secureLog('Unknown form fields @ Accommodation Form');
// 		die("Error detected. Please use only the fields in the form");
// 		header("refresh:1;url=https://nexuseducanada.com");
		
// 	}
// }

$fname = $_POST['acc-name'];
$lname = $_POST['acc-lastname'];
$nation = $_POST['acc-nation'];
$birth = $_POST['acc-birth'];
$address = $_POST['acc-address'];
$city = $_POST['acc-city'];
$state = $_POST['acc-state'];
$zipcode = $_POST['acc-zipcode'];
$country = $_POST['acc-country'];
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

$subject = 'Accommodation Form from '.stripcleantohtml($fname);
$msg = "

Registration Form Submitted by ".stripcleantohtml($fname)."

	
		First Name: ".stripcleantohtml($fname)."
		Last Name: ".stripcleantohtml($lname)."
		Nationality: ".stripcleantohtml($nation)."
		Birthdate: ".stripcleantohtml($birth)."
		Address: ".stripcleantohtml($address)."
		City: ".stripcleantohtml($city)."
		State / Province: ".stripcleantohtml($state)."
		Zip Code: ".stripcleantohtml($zipcode)."
		Mobile Phone: ".stripcleantohtml($mphone)."
		E-Mail: ".stripcleantohtml($email)."
		School: ".stripcleantohtml($highSchool)."
		Accommodation Type: ".stripcleantohtml($acctype)."
		Room Type: ".stripcleantohtml($roomtype)."
		Meals: ".stripcleantohtml($meals)."
		Check In Date: ".stripcleantohtml($checkin)."
		Check Out Date: ".stripcleantohtml($checkout)."
		Indoor Cats: ".stripcleantohtml($incats)."
		Outdoor Cats: ".stripcleantohtml($outcats)."
		Indoor Dogs: ".stripcleantohtml($indogs)."
		Outdoor Dogs: ".stripcleantohtml($outdogs)."
		No Animals: ".stripcleantohtml($noanimals)."
		Hobbies: ".stripcleantohtml($hobbies)."
		Allergies: ".stripcleantohtml($allergies)."
		Type of Vegetarian: ".stripcleantohtml($veggie)."
		House Preference: ".stripcleantohtml($preferhouse)."
		Any Specifics Request: ".stripcleantohtml($specific)."
		Privacy Policy: ".stripcleantohtml($consent)."
";

$to = 'contato@nexuseducanada.com';

// $headers .= "MIME-Version: 1.0\r\n";
// $headers .= "Content-Type: text/html; charset=ISO-8859-1\n";

// $headers .= "Reply-to: ".$fname."<".$email.">\n";
// $headers .= "Return-path: Nexus Acommodation <contact@nexuseducanada.com>\n";
// $headers .= "From: Nexus Acommodation Form\n";


wp_mail($to, $subject, $msg);// echo 'SENT';

?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="page-title-container">
			</div>
			<div class="thanks-page-form">
                <h2><?php _e('Thank you for your form!', 'nexus'); ?></h2>
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
