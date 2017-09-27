      <?php if(is_active_sidebar('content-region-one')): ?>
        <?php dynamic_sidebar('content-region-one'); ?>
      <?php endif; ?>    

      <?php if(is_active_sidebar('content-region-two')): ?>
        <?php dynamic_sidebar('content-region-two'); ?>
      <?php endif; ?>  
    
      <footer class="content-region-3 footer row pt30 pb40">
        <div class="container">
          <div class="col-lg-4">
            <?php if(is_active_sidebar('footer-widget-1')): ?>
              <?php dynamic_sidebar('footer-widget-1'); ?>
            <?php endif; ?>  
          </div>

          <div class="col-lg-4">
            <?php if(is_active_sidebar('footer-widget-2')): ?>
              <?php dynamic_sidebar('footer-widget-2'); ?>
            <?php endif; ?>  
          </div>

          <div class="col-lg-4">
            <?php if(is_active_sidebar('footer-widget-3')): ?>
              <?php dynamic_sidebar('footer-widget-3'); ?>
            <?php endif; ?>
          </div>
        </div>
      </footer>

    </div> <!-- /container -->

    <?php wp_footer(); ?>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
