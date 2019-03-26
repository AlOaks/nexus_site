<?php
/**
 * Template Name: Accommodation Form
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
			<div class="accommmodation-page-form">
                <form id="accommodation-form" action="https://nexuseducanada.com/thanks-accommodation">
                    <label class="fieldset-label-accom"><?php _e('Personal Information', 'Accommodation'); ?></label>
                    <div class="fieldset-accomm personal-set">
                        <div class="accomm-row">
                            <label><?php _e('Given Name(s)', 'Accommodation'); ?></label>
                            <input type="text" name="acc-name" id="acco-name" required />
                        </div>
                        <div class="accomm-row">
                            <label><?php _e('Last Name(s)', 'Accommodation'); ?></label>
                            <input type="text" name="acc-lastname" id="acco-lastname" required />
                        </div>
                        <div class="accomm-row">
                            <label><?php _e('Address', 'Accommodation'); ?></label>
                            <input type="text" name="acc-address" id="acco-addres" required />
                        </div>
                        <div class="accomm-row">
                            <label><?php _e('City', 'Accommodation'); ?></label>
                            <input type="text" name="acc-city" id="acco-city" required />
                        </div>
                        <div class="accomm-row">
                            <label><?php _e('State', 'Accommodation'); ?></label>
                            <input type="text" name="acc-state" id="acco-state" required />
                        </div>
                        <div class="accomm-row">
                            <label><?php _e('Zip Code', 'Accommodation'); ?></label>
                            <input type="text" name="acc-zipcode" id="acco-zipcode" required />
                        </div>
                        <div class="accomm-row">
                            <label><?php _e('Country', 'Accommodation'); ?></label>
                            <input type="text" name="acc-country" id="acco-country" required />
                        </div>
                        <div class="accomm-row">
                            <label><?php _e('E-mail', 'Accommodation'); ?></label>
                            <input type="email" name="acc-email" id="acco-email" required />
                        </div>
                        <div class="accomm-row">
                            <label><?php _e('Phone', 'Accommodation'); ?></label>
                            <input type="text" name="acc-phone" id="acco-phone" required />
                        </div>
                        <div class="accomm-row">
                            <label><?php _e('Date of birth', 'Accommodation'); ?></label>
                            <input type="date" name="acc-birth" id="acco-birth" required />
                        </div>
                        <div class="accomm-row">
                            <label><?php _e('Nationality', 'Accommodation'); ?></label>
                            <input type="text" name="acc-nation" id="acco-nation" required />
                        </div>
                        <div class="accomm-row">
                            <label><?php _e('School / College', 'Accommodation'); ?></label>
                            <input type="text" name="acc-school" id="acco-school" required />
                        </div>
                    </div>
                    <label class="fieldset-label-accom"><?php _e('Accommodation Details', 'Accommodation'); ?></label>
                    <div class="fieldset-accomm details-set">
                        <div class="accomm-row">
                            <label><?php _e('Accommodation Type', 'Accommodation'); ?></label>
                            <select name="acc-type" id="acco-type" required>
                                <option selected disabled>--</option>
                                <option value="Homestay"><?php _e('Homestay', 'Accommodation'); ?></option>
                                <option value="Student Residency"><?php _e('Student Residency', 'Accommodation'); ?></option>
                                <option value="Apartment"><?php _e('Apartment', 'Accommodation'); ?></option>
                            </select>
                        </div>
                        <div class="accomm-row">
                            <label><?php _e('Type of Room', 'Accommodation'); ?></label>
                            <select name="acc-room" id="acco-room" required>
                                <option disabled selected>--</option>
                                <option value="Private"><?php _e('Private', 'Accommodation'); ?></option>
                                <option value="Shared"><?php _e('Shared', 'Accommodation'); ?></option>
                            </select>
                        </div>
                        <div class="accomm-row">
                            <label><?php _e('Meals', 'Accommodation'); ?></label>
                            <select name="acc-meals" id="acco-meals" required>
                                <option disabled selected>--</option>
                                <option value="No Meals"><?php _e('No meals', 'Accommodation'); ?></option>
                                <option value="Two Meals"><?php _e('Two meals', 'Accommodation'); ?></option>
                                <option value="Three Meals"><?php _e('Three meals', 'Accommodation'); ?></option>
                            </select>
                        </div>
                        <div class="accomm-row">
                            <label><?php _e('Check-in Date', 'Accommodation'); ?></label>
                            <input type="date" name="acc-checkin" id="acco-checkin" required />
                        </div>
                        <div class="accomm-row">
                            <label><?php _e('Check-out Date', 'Accommodation'); ?></label>
                            <input type="date" name="acc-checkout" id="acco-checkout" required />
                        </div>
                    </div>
                    <label class="fieldset-label-accom"><?php _e('Pets', 'Accommodation'); ?></label>
                    <div class="fieldset-accomm pets-set">
                        <div class="accomm-row">
                            <label><?php _e('Are indoor cats ok for you?', 'Accommodation'); ?></label>
                            <select name="acc-indoorcats" id="acco-indoorcats">
                                <option selected disabled>--</option>
                                <option value="Yes"><?php _e('Yes', 'Accommodation'); ?></option>
                                <option value="No"><?php _e('No', 'Accommodation'); ?></option>
                            </select>
                        </div>
                        <div class="accomm-row">
                            <label><?php _e('Are outdoor cats ok for you?', 'Accommodation'); ?></label>
                            <select name="acc-outdoorcats" id="acco-outdoorcats">
                                <option selected disabled>--</option>
                                <option value="Yes"><?php _e('Yes', 'Accommodation'); ?></option>
                                <option value="No"><?php _e('No', 'Accommodation'); ?></option>
                            </select>
                        </div>
                        <div class="accomm-row">
                            <label><?php _e('Are indoor dogs ok for you?', 'Accommodation'); ?></label>
                            <select name="acc-indoordogs" id="acco-indoordogs">
                                <option selected disabled>--</option>
                                <option value="Yes"><?php _e('Yes', 'Accommodation'); ?></option>
                                <option value="No"><?php _e('No', 'Accommodation'); ?></option>
                            </select>
                        </div>
                        <div class="accomm-row">
                            <label><?php _e('Are outdoor dogs ok for you?', 'Accommodation'); ?></label>
                            <select name="acc-outdoordogs" id="acco-outdoordogs">
                                <option selected disabled>--</option>
                                <option value="Yes"><?php _e('Yes', 'Accommodation'); ?></option>
                                <option value="No"><?php _e('No', 'Accommodation'); ?></option>
                            </select>
                        </div>
                        <div class="accomm-row" id="prefer-no-pets">
                            <input type="radio" name="acc-prefer" id="acco-prefer" />
                            <label><?php _e('I prefer no pets', 'Accommodation'); ?></label>
                        </div>
                    </div>
                    <label class="fieldset-label-accom"><?php _e('Student Profile', 'Accommodation'); ?></label>
                    <div class="fieldset-accomm student-set">
                        <div class="accomm-row">
                            <label><?php _e('Hobbies & Interests', 'Accommodation'); ?></label>
                            <textarea name="acc-hobbies" id="acco-hobbies"></textarea> 
                        </div>  
                        <div class="accomm-row">
                            <label><?php _e('Allergies (Medications, Food, Animals, etc)', 'Accommodation'); ?></label>
                            <textarea name="acc-meds" id="acco-meds"></textarea>
                        </div>
                        <div class="accomm-row" id="veggie">
                            <label><?php _e('If you are vegetarian, please select one', 'Accommodation'); ?></label>
                            <select name="acc-veggie" id="acco-veggie">
                                <option selected>--</option>
                                <option value="Vegan"><?php _e('Vegan', 'Accommodation'); ?></option>
                                <option value="Lacto Vegetarian"><?php _e('Lacto Vegetarian', 'Accommodation'); ?></option>
                                <option value="Ovo Vegetarian"><?php _e('Ovo Vegetarian', 'Accommodation'); ?></option>
                                <option value="Lacto-Ovo Vegetarian"><?php _e('Lacto-Ovo Vegetarian', 'Accommodation'); ?></option>
                                <option value="Pollotarian"><?php _e('Pollotarian', 'Accommodation'); ?></option>
                                <option value="Pescatarian"><?php _e('Pescatarian', 'Accommodation'); ?></option>
                            </select>
                        </div>
                        <div class="accomm-row" id="houseprefer">
                            <label><?php _e('I prefer a house where', 'Accommodation'); ?></label>
                            <select name="acc-preferhouse" id="acco-preferhouse">
                                <option selected>--</option>
                                <option value="Smoking is prohibited"><?php _e('Smoking is prohibited', 'Accommodation'); ?></option>
                                <option value="Smoking outside is allowed"><?php _e('Smoking outside is allowed', 'Accommodation'); ?></option>
                                <option value="Smoking is permitted"><?php _e('Smoking is permitted', 'Accommodation'); ?></option>
                            </select>
                        </div>
                        <div class="accomm-row">
                            <label><?php _e('Please, state any specific preferences you have'); ?></label>
                            <textarea name="acc-specific" id="acco-specific"></textarea>
                        </div>
                    </div>
                    <div class="privacy-policy">
							<label><?php _e('Privacy Policy', 'Registration'); ?></label>
						<div class="privacy-radio">
							<input type="radio" name="privacy-policy" id="reg-privacy" value="I consent" required />
							<label for="reg-privacy"><?php _e('I consent to having this website store my submitted information so they can respond to my inquiry.', 'Registration'); ?></label>
						</div>
					</div>
                    <button id="accomm-btn"><?php _e('Submit', 'Accommodation'); ?></button>
                </form>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
