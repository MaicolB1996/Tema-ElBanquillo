<div class="widget_ anuncio">
  <center>
    <?php echo do_shortcode('[quads id=1]'); ?>
  </center>
</div>
<div class="widget_">
  <div class="mod_side">
    <div class="cabeza_mod">
      <hr>
      <h3><a href="#">Noticias recientes</a></h3>
      <span class="botonmas"><a href="#"><ion-icon name="add-circle-outline"></ion-icon></a></span>
    </div>
    <?php $the_query = new WP_Query( 'cat=0&showposts=3&offset=0' ); ?>
    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
    <div class="grid_">
      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
      <span class="time"><time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><ion-icon name="calendar-outline"></ion-icon><?php echo get_the_date(); ?></time></span>
      <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
    </div>
    <?php endwhile; ?>

  </div>
</div>
<div class="widget_ anuncio">
  <center>
    <?php echo do_shortcode('[quads id=2]'); ?>
  </center>
</div>
<div class="widget_ anuncio">
  <center>
    <?php echo do_shortcode('[quads id=3]'); ?>
  </center>
</div>
