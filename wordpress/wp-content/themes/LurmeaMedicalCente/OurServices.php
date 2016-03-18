<!-- Create by: Lê Lam Hải
15 March 2016
Email: leelamhair@gmail.com
Phone: 0969128313 -->
<?php
 /*
  Template Name: ourservices
 */
?>
<?php get_header(); ?>
    <section class="container">
      <div class="row">
      <div id="main_container">
        <div class="col-md-4">
          <ul  id="main_left">
            <li><img src="<?php echo get_bloginfo("template_directory"); ?>/./img/LurneaMCHome.jpg"></li>

            <li><img src="<?php echo get_bloginfo("template_directory"); ?>/./img/AGPAL189x65.png"></li>

            <li>Our surgery is accredited by AGPAL (<a href="http://www.agpal.com.au/">http://www.agpal.com.au</a>) is recognised by the australian government for our high standard and quality of care.</li>

            <li>Our Vision is to offer the best health care services for our patients. To always exceed patient expectations.</li>
          </ul>
         
        </div>
        <div class="col-md-8">
          <div id="content">
              <div id="h3">
                   <?php
                        query_posts("page_id=24");
                        if ( have_posts() ) : the_post();
                            the_title();
                        endif; 
                            wp_reset_query();
                  ?>           
              </div>
              <br><br>
              <div id="ourservices-wrap">
                    <?php
                        query_posts("page_id=24");
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