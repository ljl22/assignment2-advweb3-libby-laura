<?php
/*
Template Name: Home Page Layout
Template Post Type: page
*/
?>

<?php get_header(); ?>
  <div class="container" id="containerpaddingbottom">
    <div class="row">
      <main>
        <div class="col-md-12">
          <?php dynamic_sidebar('hero-image'); ?>
        </div>
      </main>
    </div><!-- row-->

    <div class="row">
      <main>
        <div class="col-md-12">
          <?php dynamic_sidebar('about-us'); ?>
        </div>
      </main>
    </div><!-- row-->

    <div class="row">
      <main>
        <div class="col-md-12">
            <?php dynamic_sidebar('bottom-left-widget-title'); ?>
        </div>

        <div class="col-md-12">
            <?php dynamic_sidebar('bottom-middle-widget-title'); ?>
        </div>

        <div class="col-md-12">
            <?php dynamic_sidebar('bottom-right-widget-title'); ?>
        </div>

      </main>
    </div><!-- row-->

  </div> <!--container-->



<?php get_footer(); ?>
