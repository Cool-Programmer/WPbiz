<?php get_header(); ?>

<div class="jumbotron">
  <h1><?php echo get_theme_mod('banner_heading', 'Banner Heading'); ?></h1>
  <p class="lead"><?php echo get_theme_mod('banner_text', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore') ?></p>
  <p><a class="btn btn-lg btn-primary" href="<?php echo get_theme_mod('button_url', '#'); ?>" role="button"><?php echo get_theme_mod('button_text', 'Click Me'); ?></a></p>
</div>

<div class="container">
  <section class="row marketing">
    <div class="col-lg-4">
      <div class="block">
        <i class="<?php echo get_theme_mod('box1-icon', 'fa fa-bar-chart fa-3x') ?>"></i>
        <h3><?php echo get_theme_mod('box1-heading', 'Box I Heading') ?></h3>
        <p><?php echo get_theme_mod('box1-text', 'Lorem ipsum') ?></p>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="block">
        <i class="<?php echo get_theme_mod('box2-icon', 'fa fa-code fa-3x') ?>"></i>
        <h3><?php echo get_theme_mod('box2-heading', 'Box II Heading') ?></h3>
        <p><?php echo get_theme_mod('box2-text', 'Lorem ipsum') ?></p>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="block">
        <i class="<?php echo get_theme_mod('box3-icon', 'fa fa-desktop fa-3x') ?>"></i>
        <h3><?php echo get_theme_mod('box3-heading', 'Box III Heading') ?></h3>
        <p><?php echo get_theme_mod('box3-text', 'Lorem ipsum') ?></p>
      </div>
    </div>
  </section>
</div>
<?php get_footer(); ?>