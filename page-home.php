<?php
/*
Template Name: Home Page Layout
Template Post Type: page
*/
 get_header(); ?>

  <div class="container" id="containerpaddingbottom">
    <main>
      <div class="row">
          <div class="col-md-12">
            <?php dynamic_sidebar('hero-image'); ?>
          </div>
      </div><!-- row-->

      <div class="row">
          <div class="col-md-12">
            <?php dynamic_sidebar('about-us'); ?>
          </div>
      </div><!-- row-->

      <div class="row">
          <div class="col-md-4">
              <?php dynamic_sidebar('bottom-left-widget-title'); ?>
          </div>

          <div class="col-md-4">
              <?php dynamic_sidebar('bottom-middle-widget-title'); ?>
          </div>

          <div class="col-md-4">
              <?php dynamic_sidebar('bottom-right-widget-title'); ?>
          </div>
        </div><!-- row-->
      </main>
  </div> <!--container-->


<?php get_footer(); ?>
