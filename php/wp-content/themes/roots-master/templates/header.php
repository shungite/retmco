<header id="banner" role="banner">
  <div class="container">
    <a class="brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
    <nav id="nav-main" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-pills'));
        endif;
      ?>
    </nav>
  </div>
  <div class="row">

  <div class="span12">
    <a href="http://www.themco.ca"><img class="alignnone size-full wp-image-9" title="logosm" src="http://retmco-shungite.rhcloud.com/wp-content/uploads/2012/09/logosm.png" alt="" width="150" height="78" /></a>
  </div>

</div><!-- /row -->
</header>