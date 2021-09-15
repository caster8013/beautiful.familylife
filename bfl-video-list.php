<?php
/**
 * Template Name: bfl video list
 *
 *
 */
?>

<?php 

  if ( post_password_required()) {

    get_header('password');

?>

  <div class="bg-image" style="
    background-image:url('https://bucket-ch.oss-cn-beijing.aliyuncs.com/dev/unsplash-dan%20carlson.jpg');
    height: 100vh;
  ">

    <div class="mask h-100 d-flex justify-content-center align-items-center text-white" style="background-color: rgba(0, 0, 0, 0.5);">
      
      <?php echo get_the_password_form(); ?>

    </div>

  


  </div>

<?php
    get_footer('password');

  } 

  else 

  {

    get_header(); ?>

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

      <div class="tab-content py-5" id="myTabContent">


        <div class="tab-pane fade show active" id="home" role="tabpanel">

          <?php get_template_part( "section/include", "wpdm-tools" ); ?>

        </div>



        <div class="tab-pane fade" id="profile" role="tabpanel">

          <?php get_template_part( "section/include", "wpdm-AYouthSeries" ); ?>

        </div>



        <div class="tab-pane fade" id="contact" role="tabpanel">

          <?php get_template_part( "section/include", "wpdm-AFilmSeries" ); ?>


        </div>


      </div>





    </div>



<?php

    get_footer();
  }
?>