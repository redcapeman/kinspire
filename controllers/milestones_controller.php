<?php
class MilestonesController extends AppController {

	var $name = 'Milestones';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Milestone->recursive = 0;
		$this->set('milestones', $this->paginate());
	}

	function add($projectId = null) {
		if (!$projectId && empty($this->data)) {
			$this->flash('noid', 'index');
		}
		
		if (!empty($this->data)) {
			$this->Milestone->create();
			if ($this->Milestone->save($this->data)) {
				$this->flash('saved', 'index');
			} else {
				$this->flash('failed');
			}
		}
		$this->data['Milestone']['project_id'] = $projectId;
		$owners = $this->Milestone->Owner->find('list', array('fields'=>array('username')));
		$projects = $this->Milestone->Project->find('list', array('conditions' => array('id' => $this->data['Milestone']['project_id'])));
		$this->set(compact('projects', 'owners'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->flash('invalid', 'index');
		}
		if (!empty($this->data)) {
			if ($this->Milestone->save($this->data)) {
				$this->flash('saved', 'index');
			} else {
				$this->flash('failed');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Milestone->read(null, $id);
		}
		$owners = $this->Milestone->Owner->find('list', array('fields'=>array('username')));
		$projects = $this->Milestone->Project->find('list');
		$this->set(compact('projects', 'owners'));
	}

	function complete($id = null) {
		if (!$id) {
			$this->flash('invalid', 'index');
		}
		$this->data['Milestone']['completed'] = date('Y-m-d H:i:s');
		if ($this->Milestone->save($this->data)) {
			$this->flash('saved', 'index');
		} else {
			$this->flash('failed', 'index');
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->flash('invalid', 'index');
		}
		if ($this->Milestone->del($id)) {
			$this->flash('deleted', 'index');
		}
	}

}
?>