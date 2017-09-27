<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title><?php bloginfo('title') ?></title>
    <link href="<?php bloginfo('stylesheet_url') ?>" rel="stylesheet">
    <style>
      .jumbotron{
        background: url(<?php echo get_theme_mod('banner_image', get_template_directory_uri() . '/img/banner.jpg') ?>) 0 -80px;
        background-size: cover;
        background-repeat: no-repeat;
      }
    </style>
  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <?php 
              wp_nav_menu([
                'theme_location' => 'primary',
                'container' => false,
                'depth' => 2,
                'menu_class' => 'nav nav-pills pull-right',
                'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                'walker' => new WP_Bootstrap_Navwalker()
              ]);
            ?>
          </ul>
        </nav>
        <?php if(has_custom_logo()): ?>
          <?php the_custom_logo(); ?>
        <?php else: ?>
          <h1>Chstov</h1>
        <?php endif; ?>
      </div>
    </div>