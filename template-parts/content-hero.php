<?php
 // Custom fields
$prelaunch_price     =   get_field('prelaunch_price');
$launch_price     =   get_field('launch_price');
$final_price     =   get_field('final_price');
$course_url     =   get_field('course_url');
$button_text     =   get_field('button_text');

?>

<!-- HERO
================================================== -->
<section id="hero" data-type="background" data-speed="5">
  <article>
    <div class="container clearfix">
      <div class="row">

        <div class="col-sm-5">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-badge.png" alt="Bootstrap to Wordpress" class="logo">
        </div><!-- col -->
        <div class="col-sm-7 hero-text">
          <h1><?php bloginfo('name'); ?></h1>
              <p class="lead"><?php bloginfo('description'); ?></p>
              <div id="price-timeline">
                <div class="price active">
                  <h4>Pre-Launch Price <small>Ends soon!</small></h4>
                  <span><?php echo $prelaunch_price; ?></span>
                </div><!-- end price -->
                <div class="price">
                  <h4>Launch Price <small>Coming soon!</small></h4>
                  <span><?php echo $launch_price; ?></span>
                </div><!-- end price -->
                <div class="price">
                  <h4>Final Price <small>Coming soon!</small></h4>
                  <span><?php echo $final_price; ?></span>
                </div><!-- end price -->
              </div><!-- price-timeline -->

              <p><a class="btn btn-lg btn-danger" href="<?php echo $course_url; ?>" role="button"><?php echo $button_text?></a></p>
        </div><!-- col -->

      </div><!-- row -->
    </div><!-- container -->
  </article>
</section> <!-- hero -->