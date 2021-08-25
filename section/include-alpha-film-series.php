<?php
  $tools = [
    
    'AFS_ep1_ep5', 
    'AFS_ep6_ep11',
    'AFS_ep12_ep14',
    'AFS_ep15_ep16',
    'AFS_ep1',
    'AFS_ep2',
    'AFS_ep3',
    'AFS_ep4',
    'AFS_ep5',
    'AFS_ep6',
    'AFS_ep7',
    'AFS_ep8',
    'AFS_ep9',
    'AFS_ep10',
    'AFS_ep11',
    'AFS_ep12',
    'AFS_ep13',
    'AFS_ep14',
    'AFS_ep15',
    'AFS_ep16',
    'AFS_team_training_1',
    'AFS_team_training_2',


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