<div class="article-container">
  <div class="article-featured-img-container">
      <div class="article-dark-overlay"></div>
    <div class="article-featured-title-container">
      <h1>
        <?php the_title();?>
      </h1>
    </div>
        <?php the_post_thumbnail(); ?>
  </div>
  <div class="article-content-container">
    <div class="article-content">

<?php the_content();?>

    </div>
  </div>
</div>
