<?php
add_theme_support( 'menus' );
function register_my_menus() {
  register_nav_menus(
    array(
      'legal-menu' => __( 'Menu de Páginas Legais' ),
      'contact-menu' => __( 'Menu de Contato' )
     )
   );
 }
add_action( 'init', 'register_my_menus' );

function addCustomClassesToMenuLinks( $atts, $item, $args ) {
  if ($args->theme_location == 'legal-menu' || $args->theme_location == 'contact-menu') {
      $atts['class'] = 'footer-menu__link ' . $atts['class'];
  }
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'addCustomClassesToMenuLinks', 10, 3 );
