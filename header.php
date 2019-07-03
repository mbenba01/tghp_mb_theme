<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <!-- <title><?php bloginfo('name'); ?></title> -->
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
  <div class="container">
    <header class="site-header" role="banner">
      <div class="top-bar">
        <div class="logo"> <?php

                            $custom_logo_id = get_theme_mod('custom_logo');
                            $custom_logo_url = wp_get_attachment_image_url($custom_logo_id, 'full');
                            echo '<img src="' . esc_url($custom_logo_url) . '" alt="">';

                            ?>

        </div>
        <div class="branding">
          <p class="task-title"><?php echo bloginfo('name') ?></p>
          <h1 class="task-year"><?php echo bloginfo('description'); ?></h1>
        </div>
      </div>
      <section class="hero">
        <div class="overlay"></div>
        <img src="<?php echo get_theme_file_uri('/assets/media/logo.svg'); ?>" alt="Company logo" class="main-logo">
        <div class="video-container">
          <video autoplay loop muted class="video">
            <source src="<?php echo get_theme_file_uri('/assets/media/splash-video.mp4'); ?>" type="video/mp4">
          </video></div>
      </section>
    </header>