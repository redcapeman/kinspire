<?php
class VersionsController extends AppController {

	var $name = 'Versions';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Version->recursive = 0;
		$this->set('versions', $this->paginate());
	}

	function add($projectId = null) {
		if (!$projectId && empty($this->data)) {
			$this->flash('invalid', 'index');
		}
		
		if (!empty($this->data)) {
			$this->Version->create();
			if ($this->Version->save($this->data)) {
				$this->flash('saved', 'index');
			} else {
				$this->flash('failed');
			}
		}
		$this->data['Version']['project_id'] = $projectId;
		$owners = $this->Version->Owner->find('list', array('fields'=>array('username'), 'conditions' => array('id' => array($this->Auth->user('id')))));
		$projects = $this->Version->Project->find('list', array('conditions' => array('id' => $this->data['Version']['project_id'])));
		$this->set(compact('projects', 'owners'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->flash('invalid', 'index');
		}
		if (!empty($this->data)) {
			if ($this->Version->save($this->data)) {
				$this->flash('saved', 'index');
			} else {
				$this->flash('failed');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Version->read(null, $id);
		}
		$projects = $this->Version->Project->find('list');
		$this->set(compact('projects'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->flash('invalid', 'index');
		}
		if ($this->Version->del($id)) {
			$this->flash('deleted', 'index');
		}
	}

}
?>