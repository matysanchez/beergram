<?php echo $this->form->create($birra, array(
  'type' => 'file'
)); ?>
  <?php echo $this->form->field('title'); ?>
  <?php echo $this->form->field('description'); ?>
  <?php echo $this->form->field('file', array(
    'type' => 'file'
  )); ?>
<?php echo $this->form->submit('Save'); ?>
<?php echo $this->form->end(); ?>