<!-- Create by: Lê Lam Hải
15 March 2016
Email: leelamhair@gmail.com
Phone: 0969128313 -->
<?php
 /*
  Template Name: ourmedicalstaff
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
<?php 
      if (have_posts()) : the_post();
        $category = get_the_category();
        switch ($category[0]->slug) {
          case 'staff':
            include 'single-staff.php';
            break;
             default:
            # code...
            break;
        }
      endif;
    ?>
          </div>
        </div>
        </div>
      </div>
    </section>
  <?php get_footer(); ?>