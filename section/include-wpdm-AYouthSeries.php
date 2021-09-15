<div class="row-top-title">
    <div class="row g-0 d-flex align-items-center py-2 border-bottom border-info">
      <div class="col-sm-4 d-flex align-items-center justify-content-center"><h6 class="mb-0"></h6>文件名称</div>
      <div class="col-sm-1 d-flex align-items-center justify-content-center">文件类型</div>
      <div class="col-sm-2 d-flex align-items-center justify-content-center">文件大小</div>
      <div class="col-sm-1 d-flex align-items-center justify-content-center">下载次数</div>
      <div class="col-sm-2 d-flex align-items-center justify-content-center">更新时间</div>
      <div class="col-sm-2 d-flex align-items-center justify-content-center"></div>
    </div>

  </div>

  

  <?php 

    $packages = [
      184, 
      187, 
      188, 
      189, 
      190, 
      191, 
      192, 
      193, 
      194, 
      195, 
      196, 
      197, 
      198, 
      199, 
      200, 
      201, 
      202, 
      203, 
      204, 

    ];

    foreach( $packages as $package) {

      $current_shortcode = str_replace("number", strval($package), "[wpdm_package id='number']");

      echo do_shortcode($current_shortcode); 

    }


  ?>