<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title><?php bloginfo('name'); ?></title>
  <link href="https://fonts.googleapis.com/css?family=Marck+Script|Poppins&display=swap" rel="stylesheet">
  <!-- link our css file -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <?php wp_head(); ?>
</head>

<body>
<header>
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
          <?php if(get_header_image() == ''){?>
            <h1><a href="<?php echo get_home_url();?>"><?php bloginfo('name'); ?>
            </a></h1><?php
            }else{?>
              <a href="<?php get_home_url();?>"><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height;?>" width="<?php echo get_custom_header()->width;?>" alt="logo" /></a>
          <?php } ?>
        </div>

        <div class="col-lg-3 d-flex align-items-center">
          <nav>
            <p><a href="#" id="nav1">Navigation goes here</a></p>
          </nav>
        </div>

      </div>
    </div>

</header>
