<?php
/**
 * Template Name: Unsuscribed
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

require("vendor/autoload.php");

use \DrewM\MailChimp\MailChimp;

$mailC = new MailChimp('c5d0f074ef62e6395640869899d38579-us8');

if(isset($_POST['unsub-btn'])) {
	$unsubEmail = $_POST['unsub-email'];

	$member = $mailC->get('/search-members', [
		'fields' => ['email_address'],
		'query' => $unsubEmail,
	]);

	$memberName = $member['exact_matches']['members'][0]['merge_fields']['FNAME'];
	$memberHash = $member['exact_matches']['members'][0]['id'];
	$memberListId = $member['exact_matches']['members'][0]['list_id'];

	$unsub = $mailC->delete('lists/'.$memberListId.'/members/'.$memberHash);	
}
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="page-title-container">
				<h1 class="type-page-title"><?php _e(the_title(), 'nexus'); ?></h1>
			</div>
				<?php if($unsub === true) { ?>
						<div class="unsub-success">
							<h2><?php _e('You are now unsubscribed from our mailing lists', 'Unsub Page'); ?>, <?php echo $memberName; ?>.</h2>
							<p><?php _e('We are sad to see you go! Derek is going to be here for you if you ever want to come back.', 'Unsub Page'); ?></p>
							<h2><?php _e('Farewell, my friend', 'Unsub Page'); ?></h2>
							<a href="https://nexuseducanada.com"><?php _e('Back to home', 'nexus'); ?></a>
						</div>
				<?php } else { ?>
					<div class="unsubscribe-page-form">
						<p><?php _e("We know, we know. It's you, not us. Everyone says that.", 'Unsub Page'); ?></p>
						<p><?php _e("Derek is going to be really sad when we tell him about your departure!", 'Unsub Page'); ?></p>
				<?php while ( have_posts() ) : the_post(); ?>
					
					<form id="unsubscribe-form" action="" method="post">
						<div class="unsub-row">
							<label><?php _e('Your Email Address', 'Unsub Page'); ?></label>
							<input type="email" name="unsub-email" id="unsubs-email" required >
						</div>
						<input type="submit" value="<?php _e('Send', 'Unsub Page'); ?>" name="unsub-btn" id="unsub-button">
					</form>

				<?php endwhile; } ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
