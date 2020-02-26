<?php
  /*Template Name: Gallery Page Template */
?>
<?php $images = get_posts(array(
  'numberposts' => -1,
  'cat' => 'gallery',
  'post_type' => 'attachment',
  'post_mime_type' => 'image',
)) ?>
<?php get_header() ?>

<div class="content">
  <h1>Gallery</h1>

  <div class="gallery">
    <?php if($images):
      foreach($images as $image): ?>
      <a href="<?= wp_get_attachment_url( $image->ID ) ?>">
        <img src="<?= wp_get_attachment_url( $image->ID ) ?>" />
      </a>
      <?php endforeach; wp_reset_postdata(); ?>
    <?php endif; ?>
  </div>

<?php get_footer() ?>
