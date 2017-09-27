<?php get_header(); ?>
    <div class="container">
      <section class="row title-bar">
        <div class="container">
          <div class="col-md-12">
            <h1><?php wp_title(); ?></h1>
          </div>
        </div>
      </section>

      <section class="row marketing">
        <div class="container">
          <div class="col-md-8">
            <?php if(have_posts()): ?>
              <?php while(have_posts()): the_post() ?>
                <article class="post">
                  <div class="col-md-12">
                    <h3><?php the_title(); ?></h3>
                    <?php the_content(); ?>
                  </div>
                </article>
                <div class="clr"></div>
            <?php endwhile; ?>
          <?php endif; ?>
          </div>

          <div class="col-md-4">
            <div class="side-widget">
              <?php if(is_active_sidebar('side-widget')): ?>
                <?php dynamic_sidebar('side-widget'); ?>
              <?php endif; ?>
            </div>

            <div class="side-widget">
              <?php if(is_active_sidebar('side-categories-widget')): ?>
                <?php dynamic_sidebar('side-categories-widget'); ?>
              <?php endif; ?>
            </div>

          </div>
        </div>
      </section>
    </div>
<?php get_footer(); ?>