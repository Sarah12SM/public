<div class='row'>
  <div class='col-md-10 col-md-offset-1'>
    <div class='row'>
      <div class='col-sm-5'>
        <img src='../assets/img/about-the-method.png' class='img-responsive' />
      </div>
      <div class='col-sm-7'>
        <?php 
          echo types_render_field("excerpt", array("output"=>"html"));
        ?>
        <a class="teal bold right collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false" aria-controls="collapseExample">
          Learn More <i class='fa fa-angle-up'></i>
        </a>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div id="collapse" class="collapse">
          <?php //loop to get content
            if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>

              <?php the_content(); ?>

            <?php endwhile; endif;?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 header">
        <h4>Meet The Team</h4>
      </div>
    </div>
    <div class='row'>
      <div class="col-sm-12">
        <div class="dark-grey-bg pad-15">
          <div class="row">
            <div class='col-sm-10 col-sm-offset-1'>
              <?php echo do_shortcode('[wpv-view name="ABOUT | INSTRUCTORS"]'); ?>
              <?php echo do_shortcode('[wpv-view name="ABOUT | INSTRUCTORS MODALS"]'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

