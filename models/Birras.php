<?php

namespace beergram\models;

class Birras extends \lithium\data\Model {

	public $validates = array();
    protected $_meta = array('source' => 'fs.files');
    protected $_schema = array(
        '_id' => array('type' => '_id'),
        'title' => array('type' => 'string'),
        'description' => array('type' => 'string'),
    );
}

?>