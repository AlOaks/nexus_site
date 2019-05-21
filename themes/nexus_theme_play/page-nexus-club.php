<?php
/**
 * Template name: Nexus Club
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
		<h1 class="page-title">Nexus Club</h1>
		<main id="main" class="site-main">
			<section class="blog-posts">
				<?php 
					$args = array('post_type' => 'premium_content', 'posts_per_page' => 8);
					$club = new WP_query($args);
				?>

				<?php while($club->have_posts()): $club->the_post(); ?>
					<div class="post">
						<img class="post-image" src="<?php echo get_the_post_thumbnail_url(); ?>" />
						<?php 
						echo '<h3><a href="'.get_the_permalink().'">'.get_the_title().'</a></h3>';
						echo '<p class="post-meta">'.get_the_date().'</p>';
						echo '<p class="post-excerpt">'.get_the_excerpt().'</p>';
						?>
					</div>
				<?php endwhile; ?>	
				<nav role="navigation" class="pagination navigation">
					<div class="nav-links">
					<?php 
						echo paginate_links( array(
							'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
							'total'        => $club->max_num_pages,
							'current'      => max( 1, get_query_var( 'paged' ) ),
							'format'       => '?paged=%#%',
							'show_all'     => false,
							'type'         => 'plain',
							'end_size'     => 2,
							'mid_size'     => 1,
							'prev_next'    => true,
							'prev_text'    => sprintf( '<i></i> %1$s', __( 'Previous', 'Nexus Club' ) ),
							'next_text'    => sprintf( '%1$s <i></i>', __( 'Next', 'Nexus Club' ) ),
							'add_args'     => false,
							'add_fragment' => '',
						) );
					?>
					</div>
						</nav>
			</section>	
			<section class="blog-sidebar">
				<h3><?php _e('Categories', 'Blog'); ?></h3>
				<ul>
				<?php 
					$cats = get_categories('premium_content');

					foreach($cats as $cat) {

						$catlink = get_category_link($cat->term_id);
						
						echo '<li><a href="'.$catlink.'">'.$cat->name.'</a></li>';
					}
				?>
				</ul>
			</section>
		</main><!-- #main -->
		<section class="start-journey-section">
			<h2 class="start-title"><?php _e("Can't find what you're looking for?", 'nexus'); ?></h2>
			<p class="start-description"><?php _e('We have more to offer', 'nexus'); ?></p>
			<a class="contact-btn join-footer"><?php _e('Join Nexus Club', 'nexus'); ?></a>
		</section>
	</div><!-- #primary -->

<?php

get_footer();
