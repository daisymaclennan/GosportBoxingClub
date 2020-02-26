<?php
  /*Template Name: Our Classes Template */
?>

<?php
$args = array(
  'numberposts' => -1,
  'post_type' => 'classes'
);
$classes = get_posts($args);
?>

<?php get_header() ?>

<div class="content">
  <h1>Our classes</h1>
  <p class="paragraph">
    <?= get_field('content') ?>
    <br/>
    <button class="button--solid">
      <p>
        View timetable
      </p>
    </button>
  </p>


  <div class="classes">
    <?php if($classes):
      foreach($classes as $class): ?>
        <a class="class" href="<?= get_post_permalink($class) ?>">
          <img src="<?= get_the_post_thumbnail_url($class) ?>" />
          <h2><?= get_field('title', $class) ?></h2>
          <?php if(get_field('age_restriction', $class)):?>
            <div class="ages">
              <span class="ages__label">
                AGES
              </span>
              <span class="ages__value">
                <?= get_field('age_restriction', $class) ?>
              </span>
            </div>
          <?php endif; ?>
          <p class="link--right">Find out more <i class="fas fa-chevron-right fa-xs"></i></p>
        </a>
      <?php endforeach; wp_reset_postdata(); ?>
    <?php endif; ?>


  </div>

<?php get_footer() ?>
