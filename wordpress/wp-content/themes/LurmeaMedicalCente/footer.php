<?php wp_footer(); ?>
</div>
  <footer>
    <section class="container">
      <div class="row wrap-footer">
          <div class="col-md-12" id="footer-menu">
            <div class="col-md-6"></div>
            <div class="col-md-5">
              <ul  class="list-inline">
                 <?php echo do_shortcode('[main_menu]'); ?>
              </ul>
            </div>
            <div class="col-md-1"></div>
          </div>
      </div>
    </section>
  </footer>

  <script src="<?php echo get_bloginfo("template_directory"); ?>/js/vendor/bootstrap.min.js"></script>
  <script src="<?php echo get_bloginfo("template_directory"); ?>/js/main.js"></script>
</body>
</html>