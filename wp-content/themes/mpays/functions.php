<?php

define('PATH_TO_IMAGES', get_template_directory_uri() . '/dist/images/');


function themeStyle() {
  wp_enqueue_style('theme-css', get_template_directory_uri() . '/dist/css/main.css', array(), '1.0.0', 'all' );
  wp_enqueue_script( 'slick-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array('jquery'), '1.9.0', true );
  wp_enqueue_style( 'slick-theme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css', array(), '1.9.0' );
  wp_enqueue_style( 'slick-carousel-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css', array(), '1.9.0' );
  wp_enqueue_script( 'theme-scripts', get_template_directory_uri() . '/dist/js/script.js', array(), '1.0.0', true );
}
add_action('wp_enqueue_scripts', 'themeStyle');



?>
