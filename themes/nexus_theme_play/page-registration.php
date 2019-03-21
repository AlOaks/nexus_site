<?php
/**
 * Template Name: Registration
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

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="page-title-container">
				<h1 class="type-page-title"><?php _e(the_title(), 'nexus'); ?></h1>
			</div>
			<div class="registration-page-form">
				<form id="registration-form-php" action="https://nexuseducanada.com/thanks-registration" method="post">
					<label class="fieldset-label-reg"><?php _e('About you', 'Registration'); ?></label>
					<div class="reg-fieldset client-info">
						<div class="registration-row">
							<label><?php _e('Name(s) (as stated in your passport)', 'Registration'); ?></label>
							<input type="text" name="first-name" id="reg-name" required/>
						</div>
						<div class="registration-row">
							<label><?php _e('Last Name(s) (as stated in your passport)', 'Registration'); ?></label>
							<input type="text" name="last-name" id="reg-lastname" required/>
						</div>
						<div class="registration-row">
							<label><?php _e('Gender', 'Registration'); ?></label>
							<select name="gender" required id="reg-gender">
								<option>--</option>
								<option value="Male"><?php _e('Male', 'Registration'); ?></option>
								<option value="Female"><?php _e('Female', 'Registration'); ?></option>
							</select>
						</div>
						<div class="registration-row">
							<label><?php _e('Nationality', 'Registration'); ?></label>
							<input type="text" name="nationality" id="reg-nationality" required/>
						</div>
						<div class="registration-row">
							<label><?php _e('Date of Birth', 'Registration'); ?></label>
							<input type="date" name="birthdate" id="reg-birthdate" required/>
						</div>
						<div class="registration-row">
							<label><?php _e('Marital Status', 'Registration'); ?></label>
							<select name="marital" required id="reg-marital">
								<option>--</option>
								<option value="Single"><?php _e('Single', 'Registration'); ?></option>
								<option value="Married"><?php _e('Married', 'Registration'); ?></option>
							</select>
						</div>
						<div class="registration-row">
							<label><?php _e('How many children do you have?', 'Registration'); ?></label>
							<input type="text" name="children" id="reg-children" required/>
						</div>
					</div>
					<label class="fieldset-label-reg"><?php _e('Document information & more', 'Registration'); ?></label>
					<div class="reg-fieldset client-info-more">
						<div class="registration-row">
							<label><?php _e('Passport No.', 'Registration'); ?></label>
							<input type="text" name="passport-no" id="reg-passort" />
						</div>
						<div class="registration-row">
							<label><?php _e('Passport Expiry Date', 'Registration'); ?></label>
							<input type="month" name="passport-expiry" id="reg-pass-exp" required />
						</div>
						<div class="registration-row">
							<label><?php _e('Current Address', 'Registration'); ?></label>
							<input type="text" name="cur-address" id="reg-address" required />
						</div>
						<div class="registration-row">
							<label><?php _e('City', 'Registration'); ?></label>
							<input type="text" name="city" id="reg-city" />
						</div>
						<div class="registration-row">
							<label><?php _e('State / Province', 'Registration'); ?></label>
							<input type="text" name="state-province" id="reg-state-prov" required/>
						</div>
						<div class="registration-row">
							<label><?php _e('Zip Code', 'Registration'); ?></label>
							<input type="text" name="zipcode" id="reg-zicode" required/>
						</div>
						<div class="registration-row">
							<label><?php _e('Mobile Phone', 'Registration'); ?></label>
							<input type="text" name="mobile-phone" id="reg-phone"required />
						</div>
						<div class="registration-row">
							<label>E-mail</label>
							<input type="email" name="email" id="reg-email" required />
						</div>
						<div class="registration-row">
							<label><?php _e('Emergency Contact Name', 'Registration'); ?></label>
							<input type="text" name="emergency-name" id="reg-emergency-name" required />
						</div>
						<div class="registration-row">
							<label><?php _e('Emergency Contact Phone', 'Registration'); ?></label>
							<input type="text" name="emergency-number" id="reg-emergency-number" required />
						</div>
					</div>
					<label class="fieldset-label-reg"><?php _e('Your Education', 'Registration'); ?></label>
					<div class="reg-fieldset client-education-info">
						<div class="registration-row">
							<label><?php _e('High School Institution', 'Registration'); ?></label>
							<input type="text" name="high-school" id="reg-highschool" required />
						</div>
						<div class="registration-row">
							<label><?php _e('End Date', 'Registration'); ?>
							<input type="month" name="high-school-end" id="red-highschool-end" required />
						</div>
						<div class="registration-row">
							<label><?php _e('Higher Education Institution', 'Registration'); ?> <span><?php _e('Only if applicable', 'Registration'); ?></span></label>
							<input type="text" name="higher-education" id="reg-higheredu" />
 						</div>
						<div class="registration-row">
							<label><?php _e('End Date', 'Registration'); ?></label>
							<input type="month" name="higher-education-end" id="reg-higheredu-end" />
						</div>
						<div class="registration-row">
							<label><?php _e('English Level', 'Registration'); ?></label>
							<select name="eng-level" id="reg-select" required>
								<option>--</option>
								<option value="None"><?php _e('None', 'Registration'); ?></option>
								<option value="Basic"><?php _e('Basic', 'Registration'); ?></option>
								<option value="Pre-inter"><?php _e('Pre-Intermediate', 'Registration'); ?></option>
								<option value="Inter"><?php _e('Intermediate', 'Registration'); ?></option>
								<option value="Pre-adv"><?php _e('Pre-Advanced', 'Registration'); ?></option>
								<option value="Adv"><?php _e('Advanced', 'Registration'); ?></option>
							</select>
						</div>
					</div>
					<label class="fieldset-label-reg"><?php _e('Your Canadian Experience', 'Registration'); ?></label>
					<div class="reg-fieldset clien-canada-info">
						<div class="registration-row">
							<label><?php _e('Name of the School to study in', 'Registration'); ?></label>
							<input type="text" name="school-to-study" id="reg-school-to" required />
						</div>
						<div class="registration-row">
							<label><?php _e('Desired type of Program', 'Registration'); ?></label>
							<select name="prgtype" required id="reg-prg-type">
								<option>--</option>
								<option value="Language"><?php _e('Language', 'Registration'); ?></option>
								<option value="Certificate"><?php _e('Certificate', 'Registration'); ?></option>
								<option value="Diploma"><?php _e('Diploma', 'Registration'); ?></option>
								<option value="Work and Study">Work & Study</option>
								<option value="Degree"><?php _e('Degree', 'Registration'); ?></option>
								<option value="Post Degree"><?php _e('Post Degree', 'Registration'); ?></option>
							</select>
						</div>
						<div class="registration-row">
							<label><?php _e('Name of Course to be held', 'Registration'); ?></label>
							<input type="text" name="course-name" id="reg-coursename" required />
						</div>
						<div class="registration-row">
							<label><?php _e('Start Date', 'Registration'); ?></label>
							<input type="month" name="start-date" id="reg-start-date" required />
						</div>
						<div class="registration-row">
							<label><?php _e('Duration', 'Registration'); ?></label>
							<input type="text" name="program-duration" id="reg-duration" required />
						</div>
					</div>
					<label class="fieldset-label-reg"><?php _e('Optionals', 'Registration'); ?></label>
					<div class="reg-fieldset optionals-info">
						<div class="registration-row">
							<label><?php _e('Accommodation Included?', 'Registration'); ?></label>
							<select name="accomm" id="reg-accommodation" required>
								<option>--</option>
								<option value="Yes"><?php _e('Yes', 'Registration'); ?></option>
								<option value="No"><?php _e('No', 'Registration'); ?></option>
							</select>
						</div>
						<div class="registration-row" id="length-div">
							<label><?php _e('Length of Stay', 'Registration'); ?></label>
							<input type="text" name="stay-length" id="reg-length" />
						</div>
						<div class="registration-row" id="room-div">
							<label><?php _e('Type of room', 'Registration'); ?></label>
							<select name="room" id="reg-room">
								<option>--</option>
								<option value="private"><?php _e('Private', 'Registration'); ?></option>
								<option value="shared"><?php _e('Shared', 'Registration'); ?></option>
							</select>
						</div>
						<div class="registration-row" id="meals-div">
							<label><?php _e('Meals Included', 'Registration'); ?></label>
							<select name="meals" id="reg-meals">
								<option>--</option>
								<option value="No meals"><?php _e('Without Meals', 'Registration'); ?></option>
								<option value="2 meals"><?php _e('Two Meals', 'Registration'); ?></option>
								<option value="3 meals"><?php _e('Three Meals', 'Registration'); ?></option>
							</select>
						</div>
						<div class="registration-row">
							<label><?php _e('Health Insurance Included?', 'Registration'); ?></label>
							<select name="health" id="reg-health" required>
								<option>--</option>
								<option value="Yes"><?php _e('Yes', 'Registration'); ?></option>
								<option value="No"><?php _e('No', 'Registration'); ?></option>
							</select>
						</div>
						<div class="registration-row" id="coverage-div">
							<label><?php _e('Coverage Duration', 'Registration'); ?></label>
							<input type="text" name="health-duration" id="reg-health-duration" />
						</div>
					</div>
					<div class="privacy-policy">
							<label><?php _e('Privacy Policy', 'Registration'); ?></label>
						<div class="privacy-radio">
							<input type="radio" name="privacy-policy" id="reg-privacy" value="I consent" required />
							<label for="reg-privacy"><?php _e('I consent to having this website store my submitted information so they can respond to my inquiry.', 'Registration'); ?></label>
						</div>
					</div>
					<button id="registration-button"><?php _e('Submit', 'Registration'); ?></button>
				</form>
			</div>


			<section class="start-journey-section">
				<p class="start-title"><?php _e("Nexus Education Consulting", 'nexus'); ?></p>
				<p class="start-description"><?php _e('We have more to offer', 'nexus'); ?></p>
				<a class="contact-btn join-footer"><?php _e('Join Nexus Club', 'nexus'); ?></a>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();


