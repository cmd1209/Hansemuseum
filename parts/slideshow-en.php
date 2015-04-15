<div class="heroslideshow">  <!-- English Slide Show -->
  <div class="slides" style="background:url(<?php $url = content_url(); echo $url; ?>/uploads/2015/01/Hanse-Sea-Background.jpg) ;">
    <div class="lockup">
      <h2>European Hansemuseum</h2>
      <p>Take a Trip to Hanseland</p>
    </div>
  </div>

  <?php $id = get_post(95); ?>
  <?php $title = $id->post_title; ?>
  <?php $excerpt = $id->post_excerpt; ?>
  <?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id('95') ); ?>
  <div class="slides" style="background:url(<?php echo $featuredImage; ?>) ;">
    <div class="lockup">
      <h2><?php echo $title; ?></h2>
      <p><?php echo $excerpt; ?></p>
    </div>
  </div>

  <?php $id = get_post(65); ?>
  <?php $title = $id->post_title; ?>
  <?php $excerpt = $id->post_excerpt; ?>
  <?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id('65') ); ?>
  <div class="slides" style="background:url(<?php echo $featuredImage; ?>) ;">
    <div class="lockup">
      <h2><?php echo $title; ?></h2>
      <p><?php echo $excerpt; ?></p>
    </div>
  </div>

  <?php $id = get_post(102); ?>
  <?php $title = $id->post_title; ?>
  <?php $excerpt = $id->post_excerpt; ?>
  <?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id('102') ); ?>
  <div class="slides" style="background:url(<?php echo $featuredImage; ?>) ;">
    <div class="lockup">
      <h2><?php echo $title; ?></h2>
      <p><?php echo $excerpt; ?></p>
    </div>
  </div>
</div>
