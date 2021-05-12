<?php
get_header();?>



<div class="elsingle">
  <article class="lanota">

    <div class="directorio_">
      <div class="cabeza_mod">
        <hr>
        <h3><a href="#"><?php printf( __( '%s', '' ), single_tag_title( '', false ) ); ?></a></h3>
      </div><br><br>
      <?php while ( have_posts() ) : the_post(); ?>
      <div class="grid">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
        <span class="time"><time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><ion-icon name="calendar-outline"></ion-icon><?php echo get_the_date(); ?></time></span>
        <hr>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      </div>
      <?php endwhile; // end of the loop. ?>
      <div class="paginador_">
        <div class="anterior"><?php next_posts_link(__( 'Notas Anteriores')) ?></div>
        <div class="siguiente"><?php previous_posts_link(__( 'Notas Recientes')) ?></div>
      </div>
    </div>


  </article>
  <aside class="sidebar_nota">
<?php include('sidebar.php');?>
  </aside>
</div>




<?php
get_footer();?>
