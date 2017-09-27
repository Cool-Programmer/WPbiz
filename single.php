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
                    <?php if(has_post_thumbnail()): ?>
                      <?php the_post_thumbnail(); ?>
                    <?php endif; ?>
                    <ul class="meta">
                      <li><?php echo __('By', 'wpbiz') ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>"><?php the_author(); ?></a></li>
                      <li><?php the_time('F j, Y g:i'); ?></li>
                      <li><?php echo __('Category: ', 'wpbiz') ?> 
                        <?php
                        $categories = get_the_category();
                        $separator = ", ";
                        $output = null;
                        if($categories){
                          foreach ($categories as $category) {
                            $output .= '<a href="'.get_category_link($category->term_id).'">'.$category->cat_name.'</a>' . $separator;
                          }
                        }?>
                        <?php echo trim($output, $separator); ?>
                      </li>
                    </ul>
                    <h3><?php the_title(); ?></h3>
                    <?php the_content(); ?>
                  </div>
                </article>
                <div class="clr"></div>
            <?php endwhile; ?>
          <?php endif; ?>
           <?php comments_template(); ?>
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