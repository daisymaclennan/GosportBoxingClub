<?php get_header() ?>

<div class="content">
  <h1><?= get_field('title') ?></h1>
  <?php if(get_field('age_restriction')): ?>
    <div class="ages">
      <span class="ages__label">
        AGES
      </span>
      <span class="ages__value">
        <?= get_field('age_restriction') ?>
      </span>
    </div>
  <?php endif; ?>
  <p class="paragraph"><?= get_field('description') ?></p>

  <div class="carousel">
    <?php
      if( have_rows('images') ):
        while ( have_rows('images') ) : the_row(); ?>
          <img src="<?= the_sub_field('image') ?>" alt="<?= the_sub_field('title') ?> in action" />
        <?php endwhile;
      endif;
    ?>
  </div>
  <div class="carousel__buttons">
    <button class="carousel__buttons--prev"><i class="fas fa-arrow-left fa-xs"></i>PREV</button>
    <span class="carousel__slide-index">1</span>
    <button class="carousel__buttons--next">NEXT<i class="fas fa-arrow-right fa-xs"></i></button>
  </div>



<?php get_footer() ?>
