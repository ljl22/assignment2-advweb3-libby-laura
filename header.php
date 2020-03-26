<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title><?php bloginfo('name'); ?></title>

  <!--google fonts----->
  <link href="https://fonts.googleapis.com/css?family=Marck+Script|Poppins&display=swap" rel="stylesheet">

  <!-- link our css file -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />

  <!--javascript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="js/Web.js"></script>

  <?php wp_head(); ?>
</head>

<body>
<header>
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <?php if(get_header_image() == ''){?>
            <h1><a href="<?php echo get_home_url();?>"><?php bloginfo('name'); ?>
            </a></h1><?php
            }else{?>
              <a href="<?php get_home_url();?>"><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height;?>" width="<?php echo get_custom_header()->width;?>" alt="logo" /></a>
          <?php } ?>
        </div>

      <div class="row">
        <div class="col-lg-3 d-flex align-items-center">
          <nav>
              <?php
                if(has_nav_menu('top-menu')){
                wp_nav_menu(array('theme_location' => 'top-menu', 'container_class' => 'top-menu-class'));
              }else{
                echo "Please select a top menu via the dashboard for best results";
              }
              ?>

          </nav>
        </div>

        <div class="col-lg-3">
          <?php dynamic_sidebar('right header'); ?>
        </div>


      </div>

      </div>
    </div>

</header>
