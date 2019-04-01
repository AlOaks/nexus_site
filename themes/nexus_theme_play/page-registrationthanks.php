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
session_start();

get_header();

$verified = tokenVer('regisform');

if($verified === true) {



	$allowedAccomFields = array('tokenField','pagelang','meals','health-duration','health','city','accomm','stay-length','room','high-school','higher-education','higher-education-end','eng-level','school-to-study','prgtype','course-name','start-date','program-duration','high-school-end','emergency-number','emergency-name','email','zipcode', 'mobile-phone','state-province','passport-expiry','cur-address','marital','children','passport-no','nexus-email','first-name','last-name','gender','nationality','birthdate','privacy-policy');

	// Building an array with the $_POST-superglobal 
	foreach ($_POST as $key=>$item) {
			
	// Check if the value $key (fieldname from $_POST) can be found in the whitelisting array, if not, die with a short message to the hacker
	if (!in_array($key, $allowedAccomFields)) {
		
		secureLog('Unknown form fields @ Registration Form');
		die("Error detected. Please use only the fields in the form");
		header("refresh:1;url=https://nexuseducanada.com");
		
		} 
	}
	$lang = $_POST['pagelang'];
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


	if(isset($_POST['room'])) {
		$room = $_POST['room'];
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

	Registration Form Submitted by ".stripcleantohtml($fname)."

		
			First Name: ".stripcleantohtml($fname)."
			Last Name: ".stripcleantohtml($lname)."
			Gender: ".stripcleantohtml($gender)."
			Nationality: ".stripcleantohtml($nation)."
			Birthdate: ".stripcleantohtml($birth)."
			Marital Status: ".stripcleantohtml($marital)."
			Children: ".stripcleantohtml($children)."
			Passport Number: ".stripcleantohtml($passNum)."
			Passport Expiry: ".stripcleantohtml($passDate)."
			Address: ".stripcleantohtml($address)."
			City: ".stripcleantohtml($city)."
			State / Province: ".stripcleantohtml($state)."
			Zip Code: ".stripcleantohtml($zipcode)."
			Mobile Phone: ".stripcleantohtml($mphone)."
			E-Mail: ".stripcleantohtml($email)."
			Emergency Contact: ".stripcleantohtml($emerContact)."
			Emergency Number: ".stripcleantohtml($emerContactNum)."
			High School: ".stripcleantohtml($highSchool)."
			High School EndDate: ".stripcleantohtml($highEnd)."
			Higher Education School: ".stripcleantohtml($higherSchool)."
			Higher Education End Date: ".stripcleantohtml($higherEnd)."
			English Level: ".stripcleantohtml($englishLevel)."
			School to study in: ".stripcleantohtml($schoolCanada)."
			Program Type: ".stripcleantohtml($prgType)."
			Name of Program: ".stripcleantohtml($courseName)."
			Starting Date: ".stripcleantohtml($startDate)."
			Duration of Program: ".stripcleantohtml($duration)."
			Accommodation: ".stripcleantohtml($accomm)."
			Length of Stay: ".stripcleantohtml($length)."
			Type of Room: ".stripcleantohtml($room)."
			Meals Included: ".stripcleantohtml($meals)."
			Health Insurance Included: ".stripcleantohtml($health)."
			Health Coverage Duration: ".stripcleantohtml($coverage)."
			Privacy Policy: ".stripcleantohtml($consent)."
	";

	$headers .= "Reply-to: ".$name."<".$email.">\r\n";
	$headers .= "Return-path: Nexus Registration <contact@nexuseducanada.com>\r\n";
	$headers .= "From: Nexus Registration Form <".$email.">\r\n";

	mail($to, $subject, $msg, $headers);
	
} else {
	secureLog('Form Token @ Registration Form');
	header("refresh:1;url=https://nexuseducanada.com");
}

?>
<?php


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
