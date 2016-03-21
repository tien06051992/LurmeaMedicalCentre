<!-- Create by: Lê Lam Hải
15 March 2016
Email: leelamhair@gmail.com
Phone: 0969128313 -->
<?php
 /*
  Template Name: home
 */
?>
<?php get_header(); ?>
    <section class="container">
      <div class="row">
      <div id="main_container">
        <div class="col-md-4">
          <ul  id="main-left">
            <?php dynamic_sidebar( 'main_left' ); ?>
          </ul>
        </div>
        <div class="col-md-8">
          <div id="content">
              <div id="h4">
                <b>
                  <?php
                      query_posts("page_id=19");
                      if ( have_posts() ) : the_post();
                         the_title();
                      endif; 
                      wp_reset_query();
                      ?>           
                </b>
              </div>
              <br>
              <div id="home-wrap">
                  <?php
                      query_posts("page_id=19");
                      if ( have_posts() ) : the_post();
                        the_content();
                      endif; 
                      wp_reset_query();
                  ?>
              </div>
          </div>
        </div>
        </div>
      </div>
    </section>
  <?php get_footer(); ?>