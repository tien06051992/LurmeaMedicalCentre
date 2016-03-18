<!-- Create by: Lê Lam Hải
15 March 2016
Email: leelamhair@gmail.com
Phone: 0969128313 -->
<?php
 /*
  Template Name: ourstaff
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
            <li>ABC Our surgery is accredited by AGPAL <a href="http://www.agpal.com.au/">(http://www.agpal.com.au/)</a> is recognised by the australian government for our high standard and quality of care.</li>
            <li>Our Vision is to offer the best health care services for our patients. To always exceed patient expectations.</li>
          </ul>
         
        </div>
        <div class="col-md-8">
          <div id="content">
          <div id="h3">
               <?php
                    query_posts("page_id=29");
                    if ( have_posts() ) : the_post();
                      the_title();
                    endif; 
                    wp_reset_query();
              ?>           
          </div>
          <br><br><br>
          <div id="ourstaff-wrap">
            <?php
                $posts_per_page = 100;
                   $args = array(
                  'category_name' => 'staff',
                  'posts_per_page' => $posts_per_page,
                   );
                  query_posts($args);
                      while (have_posts()) : the_post();
                        ?>
                    <div>
                        <div id="ourstaff-head">
                            <a href="<?php the_permalink(); ?>"  id="h4">
                                <?php the_title(); ?>
                            </a>
                        </div>
                        <div>
                           <?php the_content(); ?>
                        </div>
                    </div>
              <?php 
                      endwhile; 
          ?> 
          </div>
        </div>
          </div>
          
        </div>
      </div>
    </section>
  <?php get_footer(); ?>