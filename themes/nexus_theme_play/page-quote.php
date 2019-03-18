<?php
/**
 * Template Name: Quote
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
			<div class="quote-page-form">
				<form id="edvisor-quote">
					<label class="fieldset-label"><?php _e('About you', 'Edvisor'); ?></label>
					<div id="user-group" class="fieldset">
						<div class="edvisor-row">
							<label><?php _e('First Name*', 'Edvisor'); ?></label>
							<input type="text" name="firstname" id="edvisor-firstname" required/>
						</div>
						<div class="edvisor-row">
							<label><?php _e('Last Name*', 'Edvisor'); ?></label>
							<input type="text" name="lastname" id="edvisor-lastname" required/>
						</div>
						<div class="edvisor-row">
							<label><?php _e('E-mail*', 'Edvisor'); ?></label>
							<input type="email" name="email" id="edvisor-email" required/>
						</div>
						<div class="edvisor-row">
							<label><?php _e('Phone*', 'Edvisor'); ?></label>
							<input type="text" name="phone" id="edvisor-phone" required/>
						</div>
						<div class="edvisor-row">
							<label><?php _e('City / State*', 'Edvisor'); ?></label>
							<input type="text" name="city" id="edvisor-city" required/>
						</div>
						<div class="edvisor-row" id="edvisor-age-div">
							<label><?php _e('Age*', 'Edvisor'); ?></label>
							<input type="text" name="age" id="edvisor-age" required/>
						</div>
						<div class="edvisor-row" id="edvisor-status-div">
							<label><?php _e('Civil Status*', 'Edvisor'); ?></label>
							<select id="edvisor-status" required>
								<option>--</option>
								<option value="Solteiro"><?php _e('Single', 'Edvisor'); ?></option>
								<option value="Casado"><?php _e('Married', 'Edvisor'); ?></option>
							</select>
						</div>
					</div>
					<label class="fieldset-label"><?php _e('Your education', 'Edvisor'); ?></label>
					<div id="education-group" class="fieldset">
						<div class="edvisor-row">
							<label><?php _e('Education Level*', 'Edvisor'); ?></label>
							<select id="edvisor-edu-level" required>
								<option>--</option>
								<option value="Cursando ensino médio"><?php _e('In High School', 'Edvisor'); ?></option>
								<option value="Ensino medio concluído"><?php _e('High School Finished', 'Edvisor'); ?></option>
								<option value="Cursando Faculdade"><?php _e('In Bachelor', 'Edvisor'); ?></option>
								<option value="Faculdade concluída"><?php _e('Bachelor Finished', 'Edvisor'); ?></option>
								<option value="Cursando Pós-Graduação"><?php _e('In Post-Degree', 'Edvisor'); ?></option>
								<option value="Pós-Graduação concluída"><?php _e('Post-Degree Finished', 'Edvisor'); ?></option>
							</select>
						</div>
						<div class="edvisor-row">
							<label><?php _e('Education Field', 'Edvisor'); ?></label>
							<input type="text" name="education-field" id="edvisor-seformado" />
						</div>
						<div class="edvisor-row">
							<label><?php _e('Language of Interest*', 'Edvisor'); ?></label>
							<select id="edvisor-lang-of-interest" required>
								<option>--</option>
								<option value="Inglês"><?php _e('English', 'Edvisor'); ?></option>
								<option value="Francês"><?php _e('French', 'Edvisor'); ?></option>
							</select>
						</div>
						<div class="edvisor-row">
							<label><?php _e('Current Language Level*', 'Edvisor'); ?></label>
							<select id="edvisor-level" required>
								<option>--</option>
								<option value="Nenhum"><?php _e('None', 'Edvisor'); ?></option>
								<option value="Básico"><?php _e('Basic', 'Edvisor'); ?></option>
								<option value="Pré-intermediário"><?php _e('Pre Intermediate', 'Edvisor'); ?></option>
								<option value="Intermediário"><?php _e('Intermediate', 'Edvisor'); ?></option>
								<option value="Pré-avançado"><?php _e('Pre-Advanced', 'Edvisor'); ?></option>
								<option value="Avançado"><?php _e('Advanced', 'Edvisor'); ?></option>
							</select>
						</div>		
					</div>
					<label class="fieldset-label"><?php _e('Your objectives', 'Edvisor'); ?></label>
					<div id="objectives-group" class="fieldset"> 
						<div class="edvisor-row" id="edvisor-textarea">
							<label><?php _e('Describe your main objectives*', 'Edvisor'); ?></label>
							<textarea name="objectives" id="edvisor-objectives" required></textarea>
						</div>
						<div class="edvisor-row">
							<label><?php _e('Programs / Courses*', 'Edvisor'); ?></label>
							<select id="edvisor-programs" required>
								<option>--</option>
								<option value="Inglés Geral"><?php _e('General English', 'Edvisor'); ?></option>
								<option value="Inglés para negocios"><?php _e('Business English', 'Edvisor'); ?></option>
								<option value="Inglés Academico"><?php _e('Academic English', 'Edvisor'); ?></option>
								<option value="Preparatorio para exames"><?php _e('Exam Preparation', 'Edvisor'); ?></option>
								<option value="Cursos Vocacionais"><?php _e('Vocational Courses', 'Edvisor'); ?></option>
								<option value="Estudo e Trabalho"><?php _e('Work & Study', 'Edvisor'); ?></option>
								<option value="Graduação"><?php _e('Graduation', 'Edvisor'); ?></option>
								<option value="Post Graduação"><?php _e('Post-Graduation', 'Edvisor'); ?></option>
							</select>
						</div>
						<div class="edvisor-row">
							<label><?php _e('Duration*', 'Edvisor'); ?></label>
							<select id="edvisor-duration" required>
								<option>--</option>
								<option value="4 semanas"><?php _e('4 weeks', 'Edvisor'); ?></option>
								<option value="6 semanas"><?php _e('6 weeks', 'Edvisor'); ?></option>
								<option value="8 semanas"><?php _e('8 weeks', 'Edvisor'); ?></option>
								<option value="10 semanas"><?php _e('10 weeks', 'Edvisor'); ?></option>
								<option value="12 semanas"><?php _e('12 weeks', 'Edvisor'); ?></option>
								<option value="16 semanas"><?php _e('16 weeks', 'Edvisor'); ?></option>
								<option value="20 semanas"><?php _e('20 weeks', 'Edvisor'); ?></option>
								<option value="24 semanas"><?php _e('24 weeks', 'Edvisor'); ?></option>
								<option value="1 ano"><?php _e('1 year', 'Edvisor'); ?></option>
								<option value="2 anos"><?php _e('2 years', 'Edvisor'); ?></option>
								<option value="Outro"><?php _e('Other', 'Edvisor'); ?></option>
							</select>
						</div>		
						<div id="other-duration-div" class="edvisor-row">
							<label><?php _e('Other Duration', 'Edvisor'); ?></label>
							<input type="text" name="other-duration" id="edvisor-other-duration" value="N/A"/>
						</div>	
						<div class="edvisor-row">
							<label><?php _e('You want to be studying in...*', 'Edvisor'); ?></label>
							<select id="edvisor-desired-start" required>
								<option>--</option>
								<option value="Em menos de 3 meses"><?php _e('Less than 3 months', 'Edvisor'); ?></option>
								<option value="De 3 a 6 meses"><?php _e('From 3 to 6 months', 'Edvisor'); ?></option>
								<option value="De 6 meses a 1 ano"><?php _e('From 6 months to 1 year', 'Edvisor'); ?></option>	
								<option value="Mais de 1 ano"><?php _e('More than a year', 'Edvisor'); ?></option>
							</select>
						</div>
						<div class="edvisor-row">
							<label><?php _e('Desired City (if known)', 'Edvisor'); ?></label>
							<select id="edvisor-desired-city">
								<option>--</option>
								<option value="Dont Know"><?php _e("Don't Know Yet", 'Edvisor'); ?></option>
							<?php 
								$cities = get_terms(
									array(
										'taxonomy' => 'Cities',
										'hide_empty' => false
									)
								); 
							
								foreach($cities as $city) {
									echo '<option value="'.$city->name.'">'.$city->name.'</option>';
								}
							?>
							</select>
						</div>	
					</div>
					<label class="fieldset-label"><?php _e('Optionals', 'Edvisor'); ?></label>
					<div id="extras-group" class="fieldset">
						<div class="edvisor-row">
							<label><?php _e('Include Health Insurance*', 'Edvisor'); ?></label>
							<select id="edvisor-insurance" required>
								<option>--</option>
								<option value="Sim"><?php _e('Yes', 'Edvisor'); ?></option>
								<option value="Não"><?php _e('No', 'Edvisor'); ?></option>
							</select>
						</div>	
						<div class="edvisor-row">
							<label><?php _e('Include Accommodation*', 'Edvisor'); ?></label>
							<select id="edvisor-accommodation" required placeholder="-">
								<option>--</option>
								<option value="Sim"><?php _e('Yes', 'Edvisor'); ?></option>
								<option value="Não"><?php _e('No', 'Edvisor'); ?></option>
							</select>
						</div>
					</div>
					<div class="edvisor-row">
						<p><?php _e("By clicking 'Get Quote' you are accepting the Terms of Use & Privacy Policy", "Edvisor"); ?></p>
					</div>
					<button id="edvisor-quote-btn"><?php _e('Get Quote', 'Edvisor'); ?></button>				
				</form>
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



