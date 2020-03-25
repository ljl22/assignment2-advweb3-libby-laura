<?php

/*========================================================
Add javascript and stylsheet files
========================================================*/
function custom_theme_scripts(){
  //Bootstrap class
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');

  //Main class
  wp_enqueue_style('main-styles', get_stylesheet_uri());

  //Javascript files
  wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/main.js');
  wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js');
}

add_action('wp_enqueue_scripts', 'custom_theme_scripts');

/*==================================================================
Adds feature images
======================================================================*/
add_theme_support('post-thumbnails');

/*========================================================
Custom header
========================================================*/
$custom_image_header = array(
  'width' => 225,
  'height' => 120,
  'uploads' => true,
);

add_theme_support('custom-header', $custom_image_header);

/*===================================================
Add Menus to My Themes
=====================================================*/

function register_my_menus(){
  register_nav_menus(
      array(
      'top-menu'      => __('Top Menu'),
      'footer-left'   => __('Left footer menu'),
      'footer-middle' => __('Middle footer menu'),
      'footer-right'  => __('Right footer menu'),
      )
    );
}
add_action('init', 'register_my_menus');

?>
