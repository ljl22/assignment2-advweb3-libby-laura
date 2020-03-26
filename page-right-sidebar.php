
<?php
/*
Template Name: Page Right Sidebar Template
Template Post Type: page, post
*/

 get_header(); ?>
<div class="container" id="containerpaddingbottom">
  <div class="row">
    <main class="col-md-9">
      <?php
        if(have_posts()){
          while(have_posts()){
            the_post(); ?>


                <h2 class="entry-title"><?php the_title(); ?></h2>

                <?php the_content(); ?>

        <?php
          }// end while
        }// end if
        ?>
    </main>

    <aside class="col-md-3">
        <?php get_sidebar(); ?>

    </aside>

  </div><!-- row-->
</div> <!--container-->


<?php get_footer(); ?>
