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
Add Menus to My Theme
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


/*===================================================
Remove error code in footer
=====================================================*/

remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );


/*===================================================
Add widget area
=====================================================*/

/* widget footer
*/
function the_footer_widgets(){
  register_sidebar(array(
    'name'            => ('right footer'),
    'id'              => 'right-footer',
    'description'     => 'Right footer widget area'
    'before_widget'   => '<div class="widget-footer">',
    'after_widget'    => '</div>'
    'before_title'    => '<h3 class="footer-widget-title">',
    'after_title'     => '</h3>',
  ));
}
add_action('widgets_init', 'the_footer_widgets');


function blank_widgets_init(){
  register_sidebar(array(
    'name'           => ('Right Header'),
    'id'             => 'right header',
    'description'    => 'Right widget area in header',
    'before_widget'  => '<div class="widget-header">',
    'after_widget'   => '</div>',
    'before_title'   => '<h3 class="header-widget-title">',
    'after_title'    => '</h3>'
  ));

  register_sidebar(array(
    'name'           => ('Hero Image'),
    'id'             => 'hero-image',
    'description'    => 'Hero image on the homepage',
    'before_widget'  => '<div class="widget-hero-image">',
    'after_widget'   => '</div>',
    'before_title'   => '<h3 class="hero-image-widget-title">',
    'after_title'    => '</h3>'
  ));

  register_sidebar(array(
    'name'           => ('About Us'),
    'id'             => 'about-us',
    'description'    => 'Home page about us section',
    'before_widget'  => '<div class="widget-about-us">',
    'after_widget'   => '</div>',
    'before_title'   => '<h3 class="about-us-widget-title">',
    'after_title'    => '</h3>'
  ));

  register_sidebar(array(
    'name'           => ('Right Sidebar'),
    'id'             => 'right-sidebar',
    'description'    => 'Right sidebar area for template',
    'before_widget'  => '<div class="widget-right-sidebar">',
    'after_widget'   => '</div>',
    'before_title'   => '<h3 class="right-sidebar-widget-title">',
    'after_title'    => '</h3>'
  ));

  register_sidebar(array(
    'name'           => ('Bottom left homepage'),
    'id'             => 'bottom left homepage',
    'description'    => 'Bottom left section for the homepage',
    'before_widget'  => '<div class="widget-bottom-left">',
    'after_widget'   => '</div>',
    'before_title'   => '<h3 class="bottom-left-widget-title">',
    'after_title'    => '</h3>'
  ));

  register_sidebar(array(
    'name'           => ('Bottom middle homepage'),
    'id'             => 'bottom middle header',
    'description'    => 'Right middle area in header',
    'before_widget'  => '<div class="widget-bottom-middle">',
    'after_widget'   => '</div>',
    'before_title'   => '<h3 class="bottom-middle-widget-title">',
    'after_title'    => '</h3>'
  ));

  register_sidebar(array(
    'name'           => ('Bottom right Header'),
    'id'             => 'bottom right header',
    'description'    => 'Bottom right area in header',
    'before_widget'  => '<div class="widget-right-middle">',
    'after_widget'   => '</div>',
    'before_title'   => '<h3 class="bottom-right-widget-title">',
    'after_title'    => '</h3>'
  ));
}

/*register_sidebar(array(
  'name'           => ('Footer Left'),
  'id'             => 'footer Left',
  'description'    => 'footer left widget',
  'before_widget'  => '<div class="footer-left-class">',
  'after_widget'   => '</div>',
  'before_title'   => '<h3 class="footer-left-title">',
  'after_title'    => '</h3>'
));
}  register_sidebar(array(
    'name'           => ('Footer middle'),
    'id'             => 'footer middle',
    'description'    => 'footer middle widget',
    'before_widget'  => '<div class="footer-center-class">',
    'after_widget'   => '</div>',
    'before_title'   => '<h3 class="footer-middle-title">',
    'after_title'    => '</h3>'
  ));
}  register_sidebar(array(
    'name'           => ('Footer right'),
    'id'             => 'footer right',
    'description'    => 'Footer right widget',
    'before_widget'  => '<div class="footer-right-class">',
    'after_widget'   => '</div>',
    'before_title'   => '<h3 class="footer-right-title">',
    'after_title'    => '</h3>'
  ));
}
*/
add_action('widgets_init', 'blank_widgets_init');


?>
