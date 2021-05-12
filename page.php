<?php
get_header();
 ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="elsingle">
  <article class="lanota">
    <div class="foto_ficha_titulo small">
      <div class="titulo_nota espagina">
        <h1><?php the_title(); ?></h1>
        <div class="autor_redes_fecha">
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

    </div>
  </article>
<?php endwhile; else: ?>
<?php endif; ?>


  <aside class="sidebar_nota">
<?php include('sidebar.php');?>
  </aside>
</div>

<?php
get_footer();
 ?>
