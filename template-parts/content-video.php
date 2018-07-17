<?php

$video_section_title = get_field('video_section_title');
$video_youtube_url = get_field('video_youtube_url');

?>

<!-- VIDEO FEATURETTE
================================================== -->
<section id="featurette">
<div class="container">
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
      <h2><?php echo $video_section_title; ?></h2>
      <iframe width="100%" height="415" src="<?php echo $video_youtube_url; ?>" allowfullscreen></iframe>
    </div><!-- end col -->
  </div><!-- row -->
</div><!-- container -->
</section><!-- featurette -->