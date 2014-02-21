<?=$this->html->link('Agregar', 'Birras::add'); ?>.
<?php if (!count($birras)): ?>
  <p>
    No hay birras!
  </p>
<?php endif ?>
<ul class="thumbnails">
  <?php foreach ($birras as $birra): ?>
  <li class="span3">
    <div class="thumbnail">
      <?=$this->html->image("/birras/view/{$birra->_id}.jpg"); ?>
     <div class="caption">
       <h5><?=$this->html->link(
         $birra->title,
         array('Birras::view', 'id' => $birra->_id)
         ); ?></h5>
     </div>
   </div>
  </li>
<?php endforeach ?>
</ul>