<?php
/**
 * The template for displaying archive pages.
 *
 * @package nexus_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class= "archive-page">
				<?php if ( have_posts() ) : ?>	

				<header class="page-header">
					<h2 class="archive-main-title">Blog Archives</h2>
						<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
						the_archive_description( '<div class="taxonomy-description">', '</div>' );
						?>
				</header><!-- .page-header -->
			
				<div class= "archive-posts">
					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php
							get_template_part( 'template-parts/content' );
						?>

					<?php endwhile; ?>

					<?php else : ?>

				<?php endif; ?>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
