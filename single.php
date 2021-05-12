<?php
get_header();?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="elsingle">
  <article class="lanota">
    <div class="foto_ficha_titulo small">
      <img src="<?php the_post_thumbnail_url();?>" alt="" class="fotoportada">
      <div class="titulo_nota">
        <div class="cabeza_mod small">
          <hr>
          <h3><a href="#"><?php echo get_the_category_list(); ?></a></h3>
        </div><br>
        <h1><?php the_title(); ?></h1>
        <div class="autor_redes_fecha">
          <div class="grid_autor">
            <ion-icon name="person-outline"></ion-icon> <b>Por:</b> <?php the_author(); ?> <span class="separadorficha">|</span> <span class="time"><time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><ion-icon name="calendar-outline"></ion-icon><?php echo get_the_date(); ?></time></span>
          </div>
          <div class="lasredes_">
            <div class="addthis_inline_share_toolbox"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="contenido_">
      <div class="conten_finale">
        <?php the_content(); ?>
      </div>
      <div class="modu_3">
        <div class="cabeza_mod">
          <hr>
          <h3><a href="#">Noticias relacionadas</a></h3>
        </div>
        <div class="grid grande_">
        <?php
          $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 1, 'post__not_in' => array($post->ID) ) );
          if( $related ) foreach( $related as $post ) {
          setup_postdata($post); ?>
          <div class="grid_">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
            <span class="time"><time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><ion-icon name="calendar-outline"></ion-icon><?php echo get_the_date(); ?></time></span>
            <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
          </div>
      <?php }
      wp_reset_postdata(); ?>
      </div>
        <div class="grid peques_">
          <?php
            $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 3, 'offset' => 1, 'post__not_in' => array($post->ID) ) );
            if( $related ) foreach( $related as $post ) {
            setup_postdata($post); ?>
          <div class="grid_">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
            <span class="time"><time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><ion-icon name="calendar-outline"></ion-icon><?php echo get_the_date(); ?></time></span>
            <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
          </div>
        <?php }
        wp_reset_postdata(); ?>
        </div>
      </div>
    </div>
  </article>
<?php endwhile; else: ?>
<?php endif; ?>

  <aside class="sidebar_nota">
<?php include('sidebar.php');?>
  </aside>
</div>


<?php get_footer(); ?>
