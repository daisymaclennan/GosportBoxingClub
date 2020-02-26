<?php get_header(); ?>

<div class="content">
  <img class="banner-image" src="<?= get_field('banner_image'); ?>" />

  <h1 class="title--big"><?= get_field('tagline') ?></h1>

  <p class="paragraph"><?= get_field('content') ?></p>

<?php get_footer(); ?>
