<?php
/*
Template name: Inicio
*/
?>

<?php
get_header(); ?>



<div class="cover_principal">
  <div class="centradototal_">
    <div class="grid_">
      <?php $the_query = new WP_Query( 'cat=0&showposts=1&offset=0' ); ?>
      <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
      <div class="portada">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
        <div class="titulo_fichas">
          <hr>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt....</p>
          <div class="zocalo_portada">
            <span class="autor_nota">
              <ion-icon name="person-outline"></ion-icon> <b>Por:</b> <?php the_author(); ?>
            </span>
            <span class="time"><time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><ion-icon name="calendar-outline"></ion-icon><?php echo get_the_date(); ?></time></span>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
    <div class="grid_">
      <?php $the_query = new WP_Query( 'cat=0&showposts=2&offset=1' ); ?>
      <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
      <div class="portaditas">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
        <div class="titulo_fichas">
          <hr>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <div class="zocalo_portada">
            <span class="autor_nota">
              <span class="time"><time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><ion-icon name="calendar-outline"></ion-icon><?php echo get_the_date(); ?></time></span>
            </span>
          </div>
        </div>
      </div>
      <?php endwhile; ?>

    </div>
    <div class="grid_">
      <div class="widget_sidebar notasrecienteside">
        <hr>
        <h3>+ Recientes</h3>
        <?php $the_query = new WP_Query( 'cat=0&showposts=3&offset=3' ); ?>
        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php endwhile; ?>
      </div>
      <div class="widget_sidebar">
        <div class="ads">
          <?php echo do_shortcode('[quads id=1]'); ?>
        </div>
      </div>
    </div>
  </div>
</div>



<div class="modulo_4">
  <?php $the_query = new WP_Query( 'cat=0&showposts=4&offset=3' ); ?>
  <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
    <div class="grid_">
      <div class="grid">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
        <div class="zocalo_cotent">
          <hr>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <span class="autor_nota">
            <span class="time"><time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><ion-icon name="calendar-outline"></ion-icon><?php echo get_the_date(); ?></time></span>
          </span>
        </div>
      </div>
    </div>
  <?php endwhile; ?>
</div>


<div class="anuncios_ancho">
  <?php echo do_shortcode('[quads id=4]'); ?>
</div>


<div class="modulo_4">
  <?php $the_query = new WP_Query( 'cat=0&showposts=4&offset=7' ); ?>
  <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
    <div class="grid_">
      <div class="grid">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
        <div class="zocalo_cotent">
          <hr>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <span class="autor_nota">
            <span class="time"><time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><ion-icon name="calendar-outline"></ion-icon><?php echo get_the_date(); ?></time></span>
          </span>
        </div>
      </div>
    </div>
  <?php endwhile; ?>
</div>



<div class="cont_and_side">
  <div class="contenido_">
    <div class="modu_3">
      <div class="cabeza_mod">
        <hr>
        <h3><a href="#">Atlético Nacional</a></h3>
        <span class="botonmas"><a href="<?php echo get_home_url(); ?>/nacional/"><ion-icon name="add-circle-outline"></ion-icon></a></span>
      </div>
      <div class="grid grande_">
        <?php $the_query = new WP_Query( 'category_name=nacional&showposts=1&offset=0' ); ?>
        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
        <div class="grid_">
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
          <span class="time"><time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><ion-icon name="calendar-outline"></ion-icon><?php echo get_the_date(); ?></time></span>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </div>
        <?php endwhile; ?>
      </div>
      <div class="grid peques_">
        <?php $the_query = new WP_Query( 'category_name=nacional&showposts=3&offset=1' ); ?>
        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
        <div class="grid_">
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
          <span class="time"><time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><ion-icon name="calendar-outline"></ion-icon><?php echo get_the_date(); ?></time></span>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </div>
        <?php endwhile; ?>
      </div>
    </div>

    <div class="dosmodulos_">
      <div class="grid">
        <div class="mod_side">
          <div class="cabeza_mod">
            <hr>
            <h3><a href="#">América de Cali</a></h3>
            <span class="botonmas"><a href="<?php echo get_home_url(); ?>/america/"><ion-icon name="add-circle-outline"></ion-icon></a></span>
          </div>
          <?php $the_query = new WP_Query( 'category_name=america&showposts=3&offset=0' ); ?>
          <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
          <div class="grid_">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
            <span class="time"><time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><ion-icon name="calendar-outline"></ion-icon><?php echo get_the_date(); ?></time></span>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          </div>
          <?php endwhile; ?>
        </div>
      </div>
      <div class="grid">
        <div class="mod_side">
          <div class="cabeza_mod">
            <hr>
            <h3><a href="#">Millonarios</a></h3>
            <span class="botonmas"><a href="<?php echo get_home_url(); ?>/millonarios/"><ion-icon name="add-circle-outline"></ion-icon></a></span>
          </div>
          <?php $the_query = new WP_Query( 'category_name=millonarios&showposts=3&offset=0' ); ?>
          <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
          <div class="grid_">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
            <span class="time"><time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><ion-icon name="calendar-outline"></ion-icon><?php echo get_the_date(); ?></time></span>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          </div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="sidebar">
    <div class="widget_ anuncio">
      <center>
        <?php echo do_shortcode('[quads id=2]'); ?>
      </center>
    </div>
    <div class="widget_">
      <div class="mod_side">
        <div class="cabeza_mod">
          <hr>
          <h3><a href="#">Atlético Junior</a></h3>
          <span class="botonmas"><a href="<?php echo get_home_url(); ?>/junior/"><ion-icon name="add-circle-outline"></ion-icon></a></span>
        </div>
        <?php $the_query = new WP_Query( 'category_name=junior&showposts=3&offset=0' ); ?>
        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
        <div class="grid_">
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
          <span class="time"><time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><ion-icon name="calendar-outline"></ion-icon><?php echo get_the_date(); ?></time></span>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
    <div class="widget_ anuncio">
      <center>
        <?php echo do_shortcode('[quads id=3]'); ?>
      </center>
    </div>
  </div>
</div>


<div class="end_modulo">
    <div class="grid_">
      <div class="cabeza_mod">
        <hr>
        <h3><a href="#">Liga BetPlay</a></h3>
        <span class="botonmas"><a href="<?php echo get_home_url(); ?>/liga-betplay/"><ion-icon name="add-circle-outline"></ion-icon></a></span>
      </div>
      <?php $the_query = new WP_Query( 'category_name=liga-betplay&showposts=1&offset=0' ); ?>
      <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
      <div class="grid">
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
        <div class="zocalo_cotent">
          <hr>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <span class="autor_nota">
            <span class="time"><time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><ion-icon name="calendar-outline"></ion-icon><?php echo get_the_date(); ?></time></span>
          </span>
        </div>
      </div>
    <?php endwhile; ?>
      <div class="small_post">
        <?php $the_query = new WP_Query( 'category_name=liga-betplay&showposts=2&offset=1' ); ?>
        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
        <div class="grid">
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </div>
        <?php endwhile; ?>
      </div>
    </div>


    <div class="grid_">
      <div class="cabeza_mod small">
        <hr>
        <h3><a href="#">Jugadores en el exterior</a></h3>
        <span class="botonmas"><a href="<?php echo get_home_url(); ?>/jugadores-en-el-exterior/"><ion-icon name="add-circle-outline"></ion-icon></a></span>
      </div>
      <?php $the_query = new WP_Query( 'category_name=jugadores-en-el-exterior&showposts=1&offset=0' ); ?>
      <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
      <div class="grid">
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
        <div class="zocalo_cotent">
          <hr>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <span class="autor_nota">
            <span class="time"><time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><ion-icon name="calendar-outline"></ion-icon><?php echo get_the_date(); ?></time></span>
          </span>
        </div>
      </div>
    <?php endwhile; ?>
      <div class="small_post">
        <?php $the_query = new WP_Query( 'category_name=<?php echo get_home_url(); ?>&showposts=2&offset=1' ); ?>
        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
        <div class="grid">
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </div>
        <?php endwhile; ?>
      </div>
    </div>

    <div class="grid_">
      <div class="cabeza_mod">
        <hr>
        <h3><a href="#">Selección Colombia</a></h3>
        <span class="botonmas"><a href="<?php echo get_home_url(); ?>/seleccion/"><ion-icon name="add-circle-outline"></ion-icon></a></span>
      </div>
      <?php $the_query = new WP_Query( 'category_name=seleccion&showposts=1&offset=0' ); ?>
      <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
      <div class="grid">
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
        <div class="zocalo_cotent">
          <hr>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <span class="autor_nota">
            <span class="time"><time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><ion-icon name="calendar-outline"></ion-icon><?php echo get_the_date(); ?></time></span>
          </span>
        </div>
      </div>
    <?php endwhile; ?>
      <div class="small_post">
        <?php $the_query = new WP_Query( 'category_name=seleccion&showposts=2&offset=1' ); ?>
        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
        <div class="grid">
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </div>
        <?php endwhile; ?>
      </div>
    </div>

    <div class="grid_">
      <div class="cabeza_mod">
        <hr>
        <h3><a href="#">UFC</a></h3>
        <span class="botonmas"><a href="<?php echo get_home_url(); ?>/ufc/"><ion-icon name="add-circle-outline"></ion-icon></a></span>
      </div>
      <?php $the_query = new WP_Query( 'category_name=ufc&showposts=1&offset=0' ); ?>
      <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
      <div class="grid">
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
        <div class="zocalo_cotent">
          <hr>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <span class="autor_nota">
            <span class="time"><time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><ion-icon name="calendar-outline"></ion-icon><?php echo get_the_date(); ?></time></span>
          </span>
        </div>
      </div>
    <?php endwhile; ?>
      <div class="small_post">
        <?php $the_query = new WP_Query( 'category_name=ufc&showposts=2&offset=1' ); ?>
        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
        <div class="grid">
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </div>
        <?php endwhile; ?>
      </div>
    </div>

</div>


<div class="anuncios_ancho">
  <?php echo do_shortcode('[quads id=5]'); ?>
</div>


<div class="end_modulo">
  <div class="grid_">
    <div class="cabeza_mod">
      <hr>
      <h3><a href="#">Ciclismo</a></h3>
      <span class="botonmas"><a href="<?php echo get_home_url(); ?>/ciclismo/"><ion-icon name="add-circle-outline"></ion-icon></a></span>
    </div>
    <?php $the_query = new WP_Query( 'category_name=ciclismo&showposts=1&offset=0' ); ?>
    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
    <div class="grid">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
      <div class="zocalo_cotent">
        <hr>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <span class="autor_nota">
          <span class="time"><time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><ion-icon name="calendar-outline"></ion-icon><?php echo get_the_date(); ?></time></span>
        </span>
      </div>
    </div>
  <?php endwhile; ?>
    <div class="small_post">
      <?php $the_query = new WP_Query( 'category_name=ciclismo&showposts=2&offset=1' ); ?>
      <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
      <div class="grid">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      </div>
      <?php endwhile; ?>
    </div>
  </div>


    <div class="grid_">
      <div class="cabeza_mod">
        <hr>
        <h3><a href="#">Fútbol de Barrio</a></h3>
        <span class="botonmas"><a href="<?php echo get_home_url(); ?>/futbol-de-barrio/"><ion-icon name="add-circle-outline"></ion-icon></a></span>
      </div>
      <?php $the_query = new WP_Query( 'category_name=futbol-de-barrio&showposts=1&offset=0' ); ?>
      <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
      <div class="grid">
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
        <div class="zocalo_cotent">
          <hr>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <span class="autor_nota">
            <span class="time"><time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><ion-icon name="calendar-outline"></ion-icon><?php echo get_the_date(); ?></time></span>
          </span>
        </div>
      </div>
    <?php endwhile; ?>
      <div class="small_post">
        <?php $the_query = new WP_Query( 'category_name=futbol-de-barrio&showposts=2&offset=1' ); ?>
        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
        <div class="grid">
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </div>
        <?php endwhile; ?>
      </div>
    </div>

    <div class="grid_">
      <div class="cabeza_mod">
        <hr>
        <h3><a href="#">Otros</a></h3>
        <span class="botonmas"><a href="<?php echo get_home_url(); ?>/otros/"><ion-icon name="add-circle-outline"></ion-icon></a></span>
      </div>
      <?php $the_query = new WP_Query( 'category_name=otros&showposts=1&offset=0' ); ?>
      <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
      <div class="grid">
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
        <div class="zocalo_cotent">
          <hr>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <span class="autor_nota">
            <span class="time"><time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><ion-icon name="calendar-outline"></ion-icon><?php echo get_the_date(); ?></time></span>
          </span>
        </div>
      </div>
    <?php endwhile; ?>
      <div class="small_post">
        <?php $the_query = new WP_Query( 'category_name=otros&showposts=2&offset=1' ); ?>
        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
        <div class="grid">
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </div>
        <?php endwhile; ?>
      </div>
    </div>

    <!-- Último módulo Irá aquí -->

</div>




<?php
get_footer(); ?>
