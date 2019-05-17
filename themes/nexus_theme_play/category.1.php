<?php

/**
* The template for displaying archive pages
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nexus_theme_scratch
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-title-container">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				?>
			</header><!-- .page-header -->
            <section class="archive-single-page">
                <div class="archive-posts">
                    <?php
                    /* Start the Loop */
                    while ( have_posts() ) : the_post(); ?>

                    <?php 
                            $video = CFS()->get('post_video');
                            $title = get_the_title();
                            $excerpt = get_the_excerpt();
                            $img = get_the_post_thumbnail();

                            if (!empty($video)) { ?>
                                <div class="video-container-archive">
                                    <div class="post-video"><?php echo $video ?></div>
                                </div>
                            <?php	
                            } else if(empty($video)) {
                            ?>
                                <div class="post-container-archive">
                                    <?php echo $img; ?>
                                    <h1 class="post-title"><?php echo $title; ?></h1>
                                    <p class="post-excerpt"><?php echo $excerpt; ?></p>
                                    <a class="post-link" href=<?php echo the_permalink(); ?>><?php _e('Read', 'nexus'); ?></a>
                                </div>
                            <?php
                            }

                    endwhile; ?>

                    <?php the_posts_navigation();

                else :

                    get_template_part( 'template-parts/content', 'none' );

                endif;

                wp_reset_query();
		        ?>
                </div>
                <div class="sidebar">
                    <h2 class="othr-cats">Other Categories</h2>
                    <ul class="categories-list-arc">
                        <?php
                            $cat_args = array('post_type' => 'posts');
                            $cats = get_categories($cat_args);
                        ?>
                            <?php
                                foreach ($cats as $cat) :
                                    $cat_id = get_cat_ID($cat->name);
                                    $cat_link = get_category_link($cat_id);
                            ?>
                                    <li class="post-cat"><a href=<?php echo $cat_link; ?>><?php echo $cat->name; ?></a></li>
                            <?php		
                                endforeach;
                            ?>
                    </ul>

                    <div class="blog-categories-dropdown other-categories"><?php _e('Other Categories', 'nexus'); ?> <i class="fas fa-chevron-down"></i><i class="fas fa-chevron-up"></i></div>
				        <ul class="categories-list-arc2">
                            <?php
                                foreach ($cats as $cat) :
                                    $cat_id = get_cat_ID($cat->name);
                                    $cat_link = get_category_link($cat_id);
                            ?>
                                    <li class="post-cat"><a href=<?php echo $cat_link; ?>><?php echo $cat->name; ?></a></li>
                            <?php		
                                endforeach;
					        ?>
				        </ul>
                    </div>
            </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
