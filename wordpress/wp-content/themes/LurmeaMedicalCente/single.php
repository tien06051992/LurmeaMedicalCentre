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
          <ul  id="main_left">
            <li><img src="<?php echo get_bloginfo("template_directory"); ?>/./img/LurneaMCHome.jpg"></li>
            <li><img src="<?php echo get_bloginfo("template_directory"); ?>/./img/AGPAL189x65.png"></li>
            <li>Our surgery is accredited by AGPAL  . We are  recognised by the Australian government for our  high standard and quality of care.</li>
            <li>Our Vision is to offer the best health care services for our patients. To always exceed patient expectations.</li>
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