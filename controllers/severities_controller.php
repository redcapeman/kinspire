<?php
class SeveritiesController extends AppController {

	var $name = 'Severities';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Severity->recursive = 0;
		$this->set('severities', $this->paginate());
	}

	function add() {
		if (!empty($this->data)) {
			$this->Severity->create();
			if ($this->Severity->save($this->data)) {
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
			if ($this->Severity->save($this->data)) {
				$this->flash('saved', 'index');
			} else {
				$this->flash('failed');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Severity->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->flash('invalid', 'index');
		}
		if ($this->Severity->del($id)) {
			$this->flash('deleted', 'index');
		}
	}

}
?>