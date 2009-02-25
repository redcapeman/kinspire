<?php
class ElementsController extends AppController {

	var $name = 'Elements';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Element->recursive = 0;
		$this->set('elements', $this->paginate());
	}

	function add($projectId = null) {
		if (!$projectId && empty($this->data)) {
			$this->flash('noid', 'index');
		}
		
		if (!empty($this->data)) {
			$this->Element->create();
			if ($this->Element->save($this->data)) {
				$this->flash('saved', 'index');
			} else {
				$this->flash('failed');
			}
		}
		$this->data['Element']['project_id'] = $projectId;
		$projects = $this->Element->Project->find('list', array('conditions' => array('id' => $this->data['Element']['project_id'])));
		$owners = $this->Element->Owner->find('list', array('fields'=>array('username')));
		$this->set(compact('projects', 'owners'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->flash('invalid', 'index');
		}
		if (!empty($this->data)) {
			if ($this->Element->save($this->data)) {
				$this->flash('saved', 'index');
			} else {
				$this->flash('failed');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Element->read(null, $id);
		}
		$projects = $this->Element->Project->find('list');
		$owners = $this->Element->Owner->find('list', array('fields'=>array('username')));
		$this->set(compact('projects','owners'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->flash('invalid', 'index');
		}
		if ($this->Element->del($id)) {
			$this->flash('deleted', 'index');
		}
	}

}
?>