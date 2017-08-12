<?php
  function main_script_enqueue(){

    wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css', array(), '1.0.0', 'all');
    wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js', array(), '1.0.0', true);

  }

  add_action('wp_enqueue_scripts', 'main_script_enqueue');

  function awesome_theme_setup(){

    add_theme_support('menus');

    register_nav_menu('primary', 'Primary Header Navigation');
    register_nav_menu('secondary', 'Secondary Header Navigation');

  }

  // after_setup_theme or init
  add_action('init', 'awesome_theme_setup');

?>
