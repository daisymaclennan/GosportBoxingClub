<?php get_header(); ?>

<div class="content">
  <img class="banner-image" src="<?= get_field('banner_image'); ?>" />

  <h1 class="title--big"><?= get_field('tagline') ?></h1>

  <p class="paragraph">
    <?= get_field('content') ?>
    <br />
    <button class="button--solid">
      <p>Our classes</p>
    </button>
  </p>



<?php get_footer(); ?>
