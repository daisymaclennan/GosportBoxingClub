<?php $css = new Asset('main.css'); ?>
<!doctype html>
<html lang='en'>
  <head>
    <meta charset='utf-8'>
    <title><?= get_the_title() ?></title>
    <meta name='description' content=''>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href='<?= $css() ?>'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel='icon' href='<?= get_template_directory_uri(); ?>/img/Favicon.png'>
    <meta property='og:title' content='<?= get_the_title() ?>' />
    <meta property='og:url' content='<?= get_the_permalink() ?>' />
  </head>
  <body>
    <header>
      <div class="header__upper">
        <img src='<?= get_template_directory_uri() ?>/img/logo--colour.svg' alt="Gosport Boxing Club Logo"/>
        <img class="nav__button" src='<?= get_template_directory_uri() ?>/img/nav-button.png' alt="temporary nav buton"/>
      </div>
      <nav class="nav">
        <ul>
          <li>
            <a href="/">
              Home
            </a>
          </li>
          <li>
            <a href="/about-us">
              About us
            </a>
          </li>
          <li>
            <a href="/our-classes">
              Our classes
            </a>
          </li>
          <li>
            <a href="/timetable">
              Timetable
            </a>
          </li>
          <li>
            <a href="/gallery">
              Gallery
            </a>
          </li>
        </ul>
        <div class="nav__bottom">
          <a href="<?php the_field('phone_number', 'option'); ?>">
            <p>
              <?php the_field('phone_number', 'option'); ?>
            </p>
          </a>
          <a href="mailto:<?php the_field('email_address', 'option'); ?>">
            <p>
              <?php the_field('email_address', 'option'); ?>
            </p>
          </a>
        </div>
      </nav>
    </header>
