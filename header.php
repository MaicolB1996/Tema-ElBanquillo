<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title(''); echo '  ';  bloginfo( 'name' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/estilos.css?v=1.4">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/responsive.css">
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</head>
<body <?php body_class(); ?>>

<!-- Iconos  -->
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

  <div class="contenedor_"><!-- Inicio contenedor sitio -->
    <header class="headerfix">
      <div class="centradototal_">
        <div class="menu_mobile">
          <div id="toggleglobal_menu">
            <div class="one"></div>
            <div class="two"></div>
            <div class="three"></div>
          </div>
        </div>
        <div class="logo_">
          <a href="<?php echo get_home_url(); ?>">
            <img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="">
          </a>
        </div>
        <a  class="buscador_mobile">
          <ion-icon id="toggleglobal_mobile" name="search-outline"></ion-icon>
        </a>
        <div class="menu_mas">
          <div class="top_">
            <ul>
              <li class="title_head">ElbanquilloTV.co</li>
              <li><a href="<?php echo get_home_url(); ?>"><ion-icon name="home-outline"></ion-icon> Inicio</a></li>
              <li><a href=""><ion-icon name="mail-outline"></ion-icon> <?php the_time( 'D d F - Y' ); ?></a></li>
              <li id="toggleglobal_" class="elbuscador_top"><ion-icon name="search-outline"></ion-icon>Buscar</li>
              <li class="redes_"><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
              <li class="redes_"><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
              <li class="redes_"><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
              <li class="redes_"><a href="#"><ion-icon name="logo-youtube"></ion-icon></a></li>
            </ul>
          </div>
          <nav>
            <ul>
              <?php wp_nav_menu (array ('theme_location' => 'menu-header')); ?>
            </ul>
          </nav>
        </div>
      </div>
  <div id="menuglobal_" class="mod_buscador">
    <div class="centradototal_">
      <form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <input type="text" name="s" value="" id="s" placeholder="Buscar Noticia...">
        <button class="button" type="submit" name="" id="searchsubmit">Buscar ahora</button>
      </form>
    </div>
  </div>
  <div id="menuglobal_menu" class="menumobile">
    <ul>
      <?php wp_nav_menu (array ('theme_location' => 'menu-header')); ?>
    </ul>
  </div>
    </header>
