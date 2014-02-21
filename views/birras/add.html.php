<?=$this->form->create($birra, array(
  'type' => 'file'
)); ?>
  <?=$this->form->field('title'); ?>
  <?=$this->form->field('description'); ?>
  <?=$this->form->field('file', array(
    'type' => 'file'
  )); ?>
<?=$this->form->submit('Save'); ?>
<?=$this->form->end(); ?>