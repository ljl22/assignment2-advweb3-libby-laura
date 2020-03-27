<?php
/*
Template Name: Home Page Layout
Template Post Type: page
*/
 get_header(); ?>

  <div class="container" id="containerpaddingbottom">
    <main>
      <div class="row">
        <?php
          if(have_posts()){
            while(have_posts()){
              the_post(); ?>
                <div class="col-md-12">
                  <?php the_post_thumbnail('large'); ?>
                  <h3><?php the_title(); ?></h3>
                  <p><?php the_excerpt(); ?></p>

                </div>
          <?php
            }// end while
          }// end if
          ?>

      </div><!-- row-->
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
          <div class="col-md-12">
              <?php dynamic_sidebar('bottom-left-widget-title'); ?>
          </div>

          <div class="col-md-12">
              <?php dynamic_sidebar('bottom-middle-widget-title'); ?>
          </div>

          <div class="col-md-12">
              <?php dynamic_sidebar('bottom-right-widget-title'); ?>
          </div>
        </div><!-- row-->
      </main>
  </div> <!--container-->


<?php get_footer(); ?>
