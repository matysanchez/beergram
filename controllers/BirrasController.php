<?php

namespace beergram\controllers;

use beergram\models\Birras;
use lithium\action\DispatchException;

class BirrasController extends \lithium\action\Controller {

	public function index() {
		$birras = Birras::all();
		return compact('birras');
	}

	public function view() {
		$birra = Birras::first(array($this->request->id));
		return compact('birra');
	}

	public function add() {
		$birra = Birras::create();

		if (($this->request->data) && $birra->save($this->request->data)) {
			return $this->redirect(array('Birras::view', 'args' => array($birra->id)));
		}
		return compact('birra');
	}

	public function edit() {
		$birra = Birras::find($this->request->id);

		if (!$birra) {
			return $this->redirect('Birras::index');
		}
		if (($this->request->data) && $birra->save($this->request->data)) {
			return $this->redirect(array('Birras::view', 'args' => array($birra->id)));
		}
		return compact('birra');
	}

	public function delete() {
		if (!$this->request->is('post') && !$this->request->is('delete')) {
			$msg = "Birras::delete can only be called with http:post or http:delete.";
			throw new DispatchException($msg);
		}
		Birras::find($this->request->id)->delete();
		return $this->redirect('Birras::index');
	}
}

?>