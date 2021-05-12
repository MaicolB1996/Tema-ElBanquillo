<?php
// Eliminamos barra admin Wordpress temporal
add_filter('show_admin_bar', '__retur_false');

// Mostrando imagenes destacadas de post
add_theme_support( 'post-thumbnails');

  // Registro de menus
function register_my_menu() {
  register_nav_menu('menu-header',__( 'Menú Principal' ));
  register_nav_menu('menu-footer',__( 'Menú Footer' ));
  }
add_action( 'init', 'register_my_menu' );
 ?>
