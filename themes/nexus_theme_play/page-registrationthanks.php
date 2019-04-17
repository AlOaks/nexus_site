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


	$allowedAccomFields = array('meals','health-duration','health','city','accomm','stay-length','room','high-school','higher-education','higher-education-end','eng-level','school-to-study','prgtype','course-name','start-date','program-duration','high-school-end','emergency-number','emergency-name','email','zipcode', 'mobile-phone','state-province','passport-expiry','cur-address','marital','children','passport-no','nexus-email','first-name','last-name','gender','nationality','birthdate','privacy-policy');

	// Building an array with the $_POST-superglobal 
	foreach ($_POST as $key=>$item) {
			
	// Check if the value $key (fieldname from $_POST) can be found in the whitelisting array, if not, die with a short message to the hacker
	if (!in_array($key, $allowedAccomFields)) {
		
		secureLog('Unknown form fields @ Registration Form');
		die("Error detected. Please use only the fields in the form");
		header("refresh:1;url=https://nexuseducanada.com");
		
		} 
	}

	$to = stripcleantohtml($_POST['nexus-email']);
	$fname = stripcleantohtml($_POST['first-name']);
	$lname = stripcleantohtml($_POST['last-name']);
	$gender = stripcleantohtml($_POST['gender']);
	$nation = stripcleantohtml($_POST['nationality']);
	$birth = stripcleantohtml($_POST['birthdate']);
	$marital = stripcleantohtml($_POST['marital']);
	$children = stripcleantohtml($_POST['children']);
	$passNum = stripcleantohtml($_POST['passport-no']);
	$passDate = stripcleantohtml($_POST['passport-expiry']);
	$address = stripcleantohtml($_POST['cur-address']);
	$city = stripcleantohtml($_POST['city']);
	$state = stripcleantohtml($_POST['state-province']);
	$zipcode = stripcleantohtml($_POST['zipcode']);
	$mphone = stripcleantohtml($_POST['mobile-phone']);
	$email = stripcleantohtml($_POST['email']);
	$emerContact = stripcleantohtml($_POST['emergency-name']);
	$emerContactNum = stripcleantohtml($_POST['emergency-number']);
	$highSchool = stripcleantohtml($_POST['high-school']);
	$highEnd = stripcleantohtml($_POST['high-school-end']);

	if(isset($_POST['higher-education'])) {
		$higherSchool = stripcleantohtml($_POST['higher-education']);
	} else {
		$higherSchool = 'N/A';
	}

	if(isset($_POST['higher-education-end'])) {
		$higherEnd = stripcleantohtml($_POST['higher-education-end']);
	} else {
		$higherEnd = 'N/A';
	}


	$englishLevel = stripcleantohtml($_POST['eng-level']);
	$schoolCanada = stripcleantohtml($_POST['school-to-study']);
	$prgType = stripcleantohtml($_POST['prgtype']);
	$courseName = stripcleantohtml($_POST['course-name']);
	$startDate = stripcleantohtml($_POST['start-date']);

	if(isset($_POST['program-duration'])) {
		$duration = stripcleantohtml($_POST['program-duration']);
	} else {
		$duration = 'N/A';
	}

	$accomm = stripcleantohtml($_POST['accomm']);

	if(isset($_POST['stay-length'])) {
		$length = stripcleantohtml($_POST['stay-length']);
	} else {
		$length = 'N/A';
	}


	if(isset($_POST['room'])) {
		$room = stripcleantohtml($_POST['room']);
	} else {
		$room = 'N/A';
	}

	if(isset($_POST['meals'])) {
		$meals = stripcleantohtml($_POST['meals']);
	} else {
		$meals = 'N/A';
	}

	$health = stripcleantohtml($_POST['health']);

	if(isset($_POST['health-duration'])) {
		$coverage = stripcleantohtml($_POST['health-duration']);
	} else {
		$coverage = 'N/A';
	}

	$consent = stripcleantohtml($_POST['privacy-policy']);
	$subject = 'Registration Form from '.$fname;


	$msg = "

	<h1>Registration Form Submitted by ".$fname."</h1>

		
			First Name: ".$fname."<br>
			Last Name: ".$lname."<br>
			Gender: ".$gender."<br>
			Nationality: ".$nation."<br>
			Birthdate: ".$birth."<br>
			Marital Status: ".$marital."<br>
			Children: ".$children."<br>
			Passport Number: ".$passNum."<br>
			Passport Expiry: ".$passDate."<br>
			Address: ".$address."<br>
			City: ".$city."<br>
			State / Province: ".$state."<br>
			Zip Code: ".$zipcode."<br>
			Mobile Phone: ".$mphone."<br>
			E-Mail: ".$email."<br>
			Emergency Contact: ".$emerContact."<br>
			Emergency Number: ".$emerContactNum."<br>
			High School: ".$highSchool."<br>
			High School EndDate: ".$highEnd."<br>
			Higher Education School: ".$higherSchool."<br>
			Higher Education End Date: ".$higherEnd."<br>
			English Level: ".$englishLevel."<br>
			School to study in: ".$schoolCanada."<br>
			Program Type: ".$prgType."<br>
			Name of Program: ".$courseName."<br>
			Starting Date: ".$startDate."<br>
			Duration of Program: ".$duration."<br>
			Accommodation: ".$accomm."<br>
			Length of Stay: ".$length."<br>
			Type of Room: ".$room."<br>
			Meals Included: ".$meals."<br>
			Health Insurance Included: ".$health."<br>
			Health Coverage Duration: ".$coverage."<br>
			Privacy Policy: ".$consent."<br>
	";

	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\n";

	$headers .= "Reply-to: ".$fname."<".$email.">\n";
	$headers .= "Return-path: Nexus Registration <contact@nexuseducanada.com>\n";
	$headers .= "From: Nexus Registration Form\n";

	// $headers .= "Reply-to: ".$name."<".$email.">\r\n";
    //     $headers .= "Return-path: Nexus Contact <contact@nexuseducanada.com>\r\n";
    //     $headers .= "From: Nexus Contact Form <".$email.">\r\n";

	$mailed = mail($to, $subject, $msg, $headers);
	


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
