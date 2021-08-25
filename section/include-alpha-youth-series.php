<?php
  $tools = [
    
    'ep1-ep7', 
    'ep8-ep13',
    'ep1',
    'ep2',
    'ep3',
    'ep4',
    'ep5',
    'ep6',
    'ep7',
    'ep8',
    'ep9',
    'ep10',
    'ep11',
    'ep12',
    'ep13',
    'team-training-ep1',
    'team-training-ep2',
    'team-training-ep3',
    'discussion_guide'


  ];

  foreach ($tools as $tool) {
?>


  <div class="row justify-content-center py-1">
    <div class="col-sm-8"><a href="<?php $field = get_field_object($tool); echo $field['value']; ?>" class="btn btn-link"><?php  echo $field['label']; ?></a></div>
    <div class="col-sm-2"><a href="<?php echo $field['value']; ?>" class="btn btn-success">查看</a></div>
  </div>



<?php
  }
?>