<?php
  $tools = [
    
    'alpha_team_guide_ch', 
    'alpha_guide_ch', 
    'alpha_team_guide_en', 
    'alpha_guide_en',
    'alpha-global-missonary-vision',
    'online-how-to-introduction',
    'alpha_walkthrough_edit',
    'alpha_invite_edit',
    'why_run_alpha_taiwan',
    'try_alpha_chinese',

  ];

  foreach ($tools as $tool) {
?>


    <div class="row justify-content-center py-2">
      <div class="col-sm-8"><a href="<?php $field = get_field_object($tool); echo $field['value']; ?>" class="btn btn-link"><?php  echo $field['label']; ?></a></div>
      <div class="col-sm-2"><a href="<?php echo $field['value']; ?>" class="btn btn-success">查看</a></div>
    </div>



<?php
  }
?>