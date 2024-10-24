<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <title>Remain In</title>
  <?php wp_head(); ?>

  <link rel="stylesheet" href="<?php echo get_template_directory_uri();
  ?>/assets/bootstrap/css/bootstrap.min.css?v=5.3.0" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/app.css?v=1.0.0" />

  <script src="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/js/bootstrap.min.js?v=5.3.0"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.bundle.min.js "></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/swiper-bundle.min.js "></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js "></script>

</head>

<body>
  <header id="header" class="mb-3">
    <div class="wrap-logo">
      <a href="/">
        <img loading="lazy" src="<?php
        echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="logo">
      </a>
    </div>
    <div class="wrap-menu">
      <ul>
        <li>
          <a href="/">VISION</a>
        </li>
        <li>
          <a href="/">WHO WE ARE</a>
        </li>
        <li>
          <a href="/">SERVICE+</a>
        </li>
        <li>
          <a href="/">CASE</a>
        </li>
        <li>
          <a href="/">NEWS</a>
        </li>
        <li>
          <a href="/">RECRUIT</a>
        </li>
      </ul>
      <div class="wrap-locale">
        <button>JP</button>
        <div class="line"></div>
        <button>EN</button>
      </div>
      <button class="contact">CONTACT</button>
    </div>
    <button class="btn-menu">
      <span></span>
    </button>
  </header>
