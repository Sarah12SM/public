<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>/"><img src="../assets/img/nav-logo.png"></a>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
      <ul class="nav navbar-nav">
        <?php if (!user_has_subscription()) {
          echo '<div class="hidden">';
          } ?>
          <li class="menu-log-in"><a data-toggle="modal" href='#login'>Log In</a></li>
          <li class="menu-sign-up"><a href="/memberships">Sign Up</a></li>
          <?php if (!user_has_subscription()) {
          echo '</div>';
          } ?>
          <?php if (user_has_subscription()) {
          echo '<div class="hidden">';
          } ?>
          <li class="menu-curriculum">
            <a href="/curriculum/">
              My Curriculum
            </a>
          </li>
          <li class="menu-logout">
            <a class="login_button" href="http://markwood.stage.12sm.us/wp-login.php?action=logout&amp;redirect_to=http%3A%2F%2Fmarkwood.stage.12sm.us&amp;_wpnonce=60e8fffebb">
              Logout
            </a>
          </li>
          <?php if (user_has_subscription()) {
          echo '</div>';
          } ?>
        </ul>
      
    </nav>
  </div>
</header>

<div class="modal fade" id="login">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <?php echo do_shortcode('[ms-membership-login header="no"]'); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
