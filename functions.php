<?php 

function load_stylesheets() {


  // wp_register_style('animate_css', get_template_directory_uri() . '/css/animate.css', array(), 1, 'all');
  // wp_enqueue_style('animate_css');

  // wp_register_style('icomoon_css', get_template_directory_uri() . '/css/icomoon.css', array(), 1, 'all');
  // wp_enqueue_style('icomoon_css');

  // wp_register_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.css', array(), 1, 'all');
  // wp_enqueue_style('bootstrap_css');

  // wp_register_style('superfish_css', get_template_directory_uri() . '/css/superfish.css', array(), 1, 'all');
  // wp_enqueue_style('superfish_css');

  // wp_register_style('magnificpopup_css', get_template_directory_uri() . '/css/magnific-popup.css', array(), 1, 'all');
  // wp_enqueue_style('magnificpopup_css');

  // wp_register_style('datepicker_css', get_template_directory_uri() . '/css/bootstrap-datepicker.min.css', array(), 1, 'all');
  // wp_enqueue_style('datepicker_css');

  // wp_register_style('csselect_css', get_template_directory_uri() . '/css/cs-select.css', array(), 1, 'all');
  // wp_enqueue_style('csselect_css');

  // wp_register_style('skinborder_css', get_template_directory_uri() . '/css/cs-skin-border.css', array(), 1, 'all');
  // wp_enqueue_style('skinborder_css');

  // // wp_register_style('style_css', get_template_directory_uri() . '/css/style.css', array(), 1, 'all');
  // // wp_enqueue_style('style_css');

  // // wp_register_style('style', );
  wp_enqueue_style('style', get_stylesheet_uri());

  // // wp_register_style('custom_css', get_template_directory_uri() . '/custom.css', array(), 1, 'all');
  // // wp_enqueue_style('custom_css');

  // wp_register_script('modernizr_js', get_template_directory_uri() . '/js/modernizr-2.6.2.min.js', array(), 1, 1, 1);
  // wp_enqueue_script('modernizr_js');
}


add_action('wp_enqueue_scripts', 'load_stylesheets');



function load_js() {

  wp_register_script('nav_shrink', get_template_directory_uri() . '/js/navShrink.js', array(), 1, 1, 1);
  wp_enqueue_script('nav_shrink');

}

add_action('wp_enqueue_scripts', 'load_js');






