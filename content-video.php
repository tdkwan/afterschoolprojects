<div class="article-video-container">
  <div class="article-featured-img-container">
    <div class="article-dark-overlay"></div>
    <?php the_post_thumbnail(); ?>
    <div class="article-featured-title-container">
      <h1>
        <?php the_title();?>
      </h1>
    </div>
  </div>
  <div class="article-video-content-spacer">
  </div>
  <div class="article-video-content-container">
    <div class="article-video-content">
      <?php the_content();?>
    </div>
  </div>
</div>
