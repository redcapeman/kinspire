<?php
class TypesController extends AppController {

	var $name = 'Types';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Type->recursive = 0;
		$this->set('types', $this->paginate());
	}

	function add() {
		if (!empty($this->data)) {
			$this->Type->create();
			if ($this->Type->save($this->data)) {
				$this->flash('saved', 'index');
			} else {
				$this->flash('failed');
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->flash('invalid', 'index');
		}
		if (!empty($this->data)) {
			if ($this->Type->save($this->data)) {
				$this->flash('saved', 'index');
			} else {
				$this->flash('failed');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Type->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->flash('invalid', 'index');
		}
		if ($this->Type->del($id)) {
			$this->flash('deleted', 'index');
		}
	}

}
?>