<?php
//dunno why this works this way, but it does
  if (!user_has_subscription()) {
  echo '<div class="hidden">';
  }
?>

<div class="container-fluid pad-30 black-bg">

  <div class="row marg-15-v">
    <div class="col-sm-8">
      <h2 class="teal no-marg-top">
        Become a Member of The Method Today
      </h2>
      <p class="grey">
        Gain access to the entire video libraru, receive the monthly members only newsletter with tips and tricks, and become part of The Method community of rockstars today.
      </p>
    </div>
    <div class="col-sm-4">
      <a href="/memberships/" class="btn-join">
        Join
      </a>
    </div>
  </div>
</div>

<?php
//dunno why this works this way, but it does
  if (!user_has_subscription()) {
  echo '</div>';
  }
?>

<footer class="content-info container-fluid pad-30" role="contentinfo">
  <div class="content">
    <div class="row">
      <div class="col-sm-4">
        <a href="<?php echo home_url(); ?>/">
          <img src="/assets/img/footer-logo.png" class="img-responsive">
        </a>
      </div>
      <div class="col-sm-8">
        <div class="row hidden-xs footer-nav light-grey">  
          <?php
           if (has_nav_menu('footer_navigation')) :
             wp_nav_menu(array('theme_location' => 'footer_navigation', 'menu_class' => ''));
           endif;
            ?>
            <ul class="nav navbar-nav left">
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
        </div>
               
        <div id="social" class="row social-nav light-grey">
          <?php
             if (has_nav_menu('social_navigation')) :
               wp_nav_menu(array('theme_location' => 'social_navigation', 'menu_class' => ''));
             endif;
          ?>
        </div>
      </div>
      <p class="credits">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>  |  <a href="http://12southmusic.com/" target="_blank">built by 12SM</a></p>
    </div>
  </div>
</footer>

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

<?php wp_footer(); ?>

<!-- Begin 12SM Network Analytics <!-->   
  <script type="text/javascript">
	var _gaq = _gaq || [];
  	_gaq.push(['_setAccount', 'UA-27814560-1']);
  	_gaq.push(['_setDomainName', '12southmusic.com']);
  	_gaq.push(['_setAllowLinker', true]);
  	_gaq.push(['_trackPageview']);
 	(function() {
	  	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	  	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	  	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  	})();
	</script>
  <!-- End 12SM Network Analytics <!--> 