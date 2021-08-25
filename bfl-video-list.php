<?php
/**
 * Template Name: bfl video list
 *
 *
 */
get_header();
?>



<div class="container">

  <ul class="nav nav-tabs justify-content-center pt-3" id="myTab" role="tablist">
    <li class="nav-item px-3" role="presentation">
      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab">工具清单</button>
    </li>
    <li class="nav-item px-3" role="presentation">
      <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab">青年版</button>
    </li>
    <li class="nav-item px-3" role="presentation">
      <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab">全民版</button>
    </li>
  </ul>

  <div class="tab-content pb-3" id="myTabContent">


    <div class="tab-pane fade show active" id="home" role="tabpanel">

      <?php get_template_part('section/include', 'tools'); ?>

    </div>



    <div class="tab-pane fade" id="profile" role="tabpanel">

      <?php get_template_part('section/include', 'alpha-youth-series'); ?>

    </div>



    <div class="tab-pane fade" id="contact" role="tabpanel">

      <?php get_template_part('section/include', 'alpha-film-series'); ?>


    </div>


  </div>





</div>




<?php

get_footer();

?>