<h2><?=$birra->title; ?></h2>
<p><?=$birra->description; ?></p>
<?=$this->html->image(
  "/birras/view/{$birra->_id}.jpg",
  array('alt' => $birra->title)
); ?>
<p>
  <?=$this->html->link(
    'Inicio',
    array('Birras::edit', 'id' => $birra->_id),
    array('class' => 'btn btn-info')
  ); ?>
</p>