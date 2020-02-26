<?php
  /*Template Name: About Page Template */
?>
<?php get_header() ?>

<div class="content">
  <img class="banner-image--desktop" src="<?= get_field('banner_image'); ?>" />

  <h1>Who are we?</h1>

  <p class="paragraph"><?= get_field('content') ?></p>

  <h1 class="text__center">Meet the coaches</h1>
</div>

<?php get_footer() ?>
