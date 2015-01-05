<header class="banner container" role="banner">
  <div class="row">
    <div class="col-lg-12">
      <a class="brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
      <nav class="nav-main" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-pills'));
          endif;
        ?>
        <ul class="nav navbar-nav">
          <li class="menu-log-in"><a href="/log-in/">Log In</a></li>
          <li class="menu-sign-up"><a href="/memberships">Sign Up</a></li>
        </ul>
      </nav>
    </div>
  </div>
</header>