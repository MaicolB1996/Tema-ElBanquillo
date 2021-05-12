<footer class="footer_">
  <div class="centradototal_">
    <div class="logo_footer">
      <img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="">
    </div>
    <div class="links_footer">
      <?php wp_nav_menu (array ('theme_location' => 'menu-footer')); ?>
    </div>
  </div>
</footer>

</div><!-- contenedor sitio -->



<script type="text/javascript">

// Header Fixed

$(window).scroll(function(){
      if ($(this).scrollTop() > 180) {
          $('.headerfix').addClass('fixed');
      } else {
          $('.headerfix').removeClass('fixed');
      }
});

// Activar o esconder el buscador
$("#toggleglobal_").click(function() {
  $(this).toggleClass("on");
  $("#menuglobal_").slideToggle();
});


$("#toggleglobal_mobile").click(function() {
  $(this).toggleClass("on");
  $("#menuglobal_").slideToggle();
});
</script>


<script type="text/javascript">
$("#toggleglobal_menu").click(function() {
  $(this).toggleClass("on");
  $("#menuglobal_menu").slideToggle();
});
</script>

<!-- Up -->
<?php wp_footer(); ?>
</body>
</html>
