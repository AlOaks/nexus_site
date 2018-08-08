<?php
  $review_image = wp_get_attachment_url ( get_post_thumbnail_id(), 'thumbnail' );
?>
<div class="student-review__box">
  <div class="student-review__box__image">
      <img src="<?php echo $review_image ?>" alt="Picture of a Student">
  </div>
  <div class="student-review__info-wrapper">
      <div class="grey"></div>
      <blockquote class="student-review__info">
          <span class="oquote"><i class="fa fa-quote-left" aria-hidden="true"></i></span><span class="quote-content"><?php the_content(); ?></span><span class="cquote"><i class="fa fa-quote-right" aria-hidden="true"></i></span>
      </blockquote>
  </div>
</div>