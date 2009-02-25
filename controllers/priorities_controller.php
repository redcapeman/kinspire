<?php
class PrioritiesController extends AppController {

	var $name = 'Priorities';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Priority->recursive = 0;
		$this->set('priorities', $this->paginate());
	}

	function add() {
		if (!empty($this->data)) {
			$this->Priority->create();
			if ($this->Priority->save($this->data)) {
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
			if ($this->Priority->save($this->data)) {
				$this->flash('saved', 'index');
			} else {
				$this->flash('failed');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Priority->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->flash('invalid', 'index');
		}
		if ($this->Priority->del($id)) {
			$this->flash('deleted', 'index');
		}
	}

}
?>