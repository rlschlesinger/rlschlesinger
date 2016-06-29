<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <link href='https://fonts.googleapis.com/css?family=Ruthie|Dr+Sugiyama' rel='stylesheet' type='text/css'>
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <div class="container">

      <!--site-header -->
      <header class="site-header">
        <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/images/screedbot.gif" alt="" " /></a>
        <h5 class="blog-tagline"><?php bloginfo('description'); ?></h5>

        <nav class="site-nav">

          <?php

          $args = array(
            'theme_location' => 'primary'
          )

          ?>
          <?php wp_nav_menu($args); ?>
        </nav>

      </header>
