<?php
/*===================
Add javascript and stylsheet files
===================*/
function custom_theme_scripts(){
  //Bootstrap class
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');

  //Main class
  wp_enqueue_style('main-styles', get_stylesheet_uri());

  //Javascript files
  wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.css');
  wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/main.css');
}

add_action('wp_enqueue_scripts', 'custom_theme_scripts');

/*=============================
Adds feature imagesx
=================================*/
add_theme_support('post-thumbnails');


 ?>
