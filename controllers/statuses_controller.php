<?php
class StatusesController extends AppController {

	var $name = 'Statuses';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Status->recursive = 0;
		$this->set('statuses', $this->paginate());
	}

	function add() {
		if (!empty($this->data)) {
			$this->Status->create();
			if ($this->Status->save($this->data)) {
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
			if ($this->Status->save($this->data)) {
				$this->flash('saved', 'index');
			} else {
				$this->flash('failed');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Status->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->flash('invalid', 'index');
		}
		if ($this->Status->del($id)) {
			$this->flash('deleted', 'index');
		}
	}

}
?>