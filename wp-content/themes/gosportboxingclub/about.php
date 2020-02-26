<?php
  /*Template Name: About Page Template */
?>
<?php get_header() ?>

<div class="content">
  <img class="banner-image--desktop" src="<?= get_field('banner_image'); ?>" />

  <h1>Who are we?</h1>

  <p class="paragraph"><?= get_field('content') ?></p>

  <h1 class="text__center title--second">Meet the coaches</h1>

  <p class="text__center text__center--caption"><?= get_field('coach_text') ?></p>

  <div class="coach-grid">
    <?php
      if( have_rows('coaches', 'option') ):
        while ( have_rows('coaches', 'option') ) : the_row(); ?>
          <div>
            <img src="<?= the_sub_field('portrait') ?>" alt="<?= the_sub_field('name') ?> 's portrait" />
            <p><?= the_sub_field('name') ?></p>
          </div>
        <?php endwhile;
      endif;
    ?>
  </div>

<?php get_footer() ?>
