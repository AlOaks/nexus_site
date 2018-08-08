

<?php
/**
 * Template part for displaying posts.
 *
 * @package nexus_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('program-container'); ?>>
	<header class="entry-header">
    <div class="program-link">
    <a href="<?php echo esc_url( get_permalink()); ?>">
      <?php if ( has_post_thumbnail() ) : ?>
      <?php $program_image = wp_get_attachment_url ( get_post_thumbnail_id(), 'thumbnail' );?>
		  	<div class="program-image"><img src="<?php echo $program_image; ?>"></div>
      <?php endif; ?>

      <div class="program-school">
        <p><?php echo get_post_meta($post->ID, '_nexus_program_school', true); ?></p>
      </div>

      <?php the_title( sprintf( '<h2 class="entry-title program-name">', '</h2>' )); ?>
      </a>
    </div>
	</header><!-- .entry-header -->
</article><!-- #post-## -->
