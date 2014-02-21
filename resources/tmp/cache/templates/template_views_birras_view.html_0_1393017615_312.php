<h2><?php echo $h($birra->title); ?></h2>
<p><?php echo $h($birra->description); ?></p>
<?php echo $this->html->image(
  "/birras/view/{$birra->_id}.jpg",
  array('alt' => $birra->title)
); ?>
<p>
  <?php echo $this->html->link(
    'Inicio',
    array('Birras::edit', 'id' => $birra->_id),
    array('class' => 'btn btn-info')
  ); ?>
</p>