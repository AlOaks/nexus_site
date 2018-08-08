<?php
/**
 * The template for displaying all pages.
 *
 * @package nexus_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <div class="blog-wrapper">
        <div class="title-wrapper">	
				  <h1 class="blog-title-hero">Blog</h1>
			  </div> 
        <h2 class="latest-videos-title">Latest Videos</h2>
        <section class="blog-page">

        <?php
          $category_name = 'videos'; 
          $wp_query = new WP_Query();
          $wp_query->query('showposts=3' . '&paged=' . $paged . '&category_name=' . $category_name); 
        ?>


          <ul class "video-categories">
      
          <?php while ( have_posts() ) : the_post(); ?>
            <li class="video-posts-li">
              <div class="blog-video">
                <?php the_content(); ?>
              </div>
              <div class="blog-img">
                <?php the_post_thumbnail( 'full' ); ?>
              </div>
              <div class="blog-text"> 
                <h2 class="blog-title"><?php the_title(); ?></h2>
                <div class="blog-content-button">
                  <div class="blog-content">
                    <?php the_content(); ?>
                  </div>
                  <a href="<?php the_permalink(); ?>" rel="blog title">
                  <div class="read-button">
                    <button class="read-more">Read More</button>
                  </a>
                  </div>
                </div>  
              </div>
            </li>
             <div class="shadow-border"></div> 

              <?php endwhile; // End of the loop. ?>
      <?php wp_reset_query() ?>
      </ul>
      <h2 class="latest-posts-title">Latest Posts</h2>
      <?php
          $category_name = 'blogs'; 
          $wp_query = new WP_Query();
          $wp_query->query('showposts=3' . '&paged=' . $paged . '&category_name=' . $category_name); 
        ?>


          <ul class="blog-categories">
          <div class="blog-cats">
          <?php while ( have_posts() ) : the_post(); ?>
            <li class="blog-posts-li">
            
              <div class="blog-img">
                <?php the_post_thumbnail( 'full' ); ?>
              </div>
              <div class="blog-text"> 
                <h2 class="blog-title"><?php the_title(); ?></h2>
                <div class="blog-content-button">
                  <div class="blog-content">
                    <p><?php echo wp_trim_words(get_the_content(), 18, ' [...]'); ?></p>
                  </div>
                  <a href="<?php the_permalink(); ?>" rel="blog title">
                  <div class="read-button">
                    <button class="read-more">Read More</button>
                  </a>
                  </div>
                </div>  
              </div>
              <div class="shadow-border" style="border-bottom: 1px solid rgb(209, 209, 209);"></div> 
            </li>

              <?php endwhile; // End of the loop. ?>
      <?php wp_reset_query() ?>
          </div>
          </ul>		
        </section>
      </div>
      <h2 class="archives">Blog Archives</h2>
      <div class="blog-archives">  
          <?php wp_get_archives('type=monthly'); ?>
      </div>
      <div class="shadow-border-archive"></div> 
		</main><!-- #main -->
  </div><!-- #primary -->

  <?php get_footer(); ?>
