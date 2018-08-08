<?php
/**
 * Template part for displaying single posts.
 *
 * @package nexus_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('read-more-program'); ?>>
	<a href="<?php echo esc_url( get_permalink()); ?>">
    <header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>
    </header>
		<?php $program_types = get_post_meta($post->ID, '_nexus_program_type', true); ?>

        <h2 class="read-more__title read-more__title__school"><?php echo get_post_meta($post->ID, '_nexus_program_school', true); ?></h2>
				<h2 class="read-more__title read-more__title__program"><?php echo get_post_meta($post->ID, '_nexus_program_title', true); ?></h2>
				<?php if ($program_types): ?>
					<?php foreach ($program_types as $program_type): ?>
						<h2 class="read-more__title read-more__title__type"><?php echo $program_type; ?></h2>
					<?php endforeach; ?>
				<?php endif; ?> 

	</a>
	<footer class="entry-footer">
		<?php nexus_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
