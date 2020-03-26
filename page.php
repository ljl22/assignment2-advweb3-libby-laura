<?php get_header(); ?>
<div class="container" id="containerpaddingbottom">
  <div class="row">
    <?php
      if(have_posts()){
        while(have_posts()){
          the_post(); ?>
            <div class="col-md-12">
                <div class="singlebannerimg">
                    <?php the_post_thumbnail('large'); ?>
                </div>

              <h2><?php the_title(); ?></h2>

              <p><?php the_content(); ?></p>

          </div>
      <?php
        }// end while
      }// end if
      ?>

  </div><!-- row-->
</div> <!--container-->


<?php get_footer(); ?>
