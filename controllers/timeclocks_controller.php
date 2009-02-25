<?php
class TimeclocksController extends AppController {

	var $name = 'Timeclocks';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Timeclock->recursive = 0;
		$this->set('timeclocks', $this->paginate());
	}

	function add($projectId = null) {
		if (!$projectId && empty($this->data)) {
			$this->flash('noid', 'dashboard');
		}
		
		if (!empty($this->data)) {
			$this->data['Timeclock']['clocked_in'] = date('Y-m-d H:i:s');
			$this->Timeclock->create();
			if ($this->Timeclock->out($this->Auth->user('id')) && $this->Timeclock->save($this->data)) {
				$this->flash('saved', 'dashboard');
			} else {
				$this->flash('failed');
			}
		}
		$this->data['Timeclock']['project_id'] = $projectId;
		$projects = $this->Timeclock->Project->find('list', array('conditions' => array('id' => array($this->data['Timeclock']['project_id']))));
		$users = $this->Timeclock->User->find('list', array('fields'=>array('username'), 'conditions' => array('id' => array($this->Auth->user('id')))));
		$milestones = $this->Timeclock->Milestone->find('list', array('conditions' => array('project_id' => array($this->data['Timeclock']['project_id'], 0))));
		$elements = $this->Timeclock->Element->find('list', array('conditions' => array('project_id' => array($this->data['Timeclock']['project_id'], 0))));
		$this->set(compact('projects', 'users', 'milestones', 'elements'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->flash('invalid', 'dashboard');
		}
		if (!empty($this->data)) {
			if ($this->Timeclock->save($this->data)) {
				$this->flash('saved', 'dashboard');
			} else {
				$this->flash('failed');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Timeclock->read(null, $id);
		}
		$projects = $this->Timeclock->Project->find('list');
		$users = $this->Timeclock->User->find('list', array('fields'=>array('username')));
		$milestones = $this->Timeclock->Milestone->find('list');
		$elements = $this->Timeclock->Element->find('list');
		$this->set(compact('projects', 'users', 'milestones', 'elements'));
	}
	
	function out() {
		if ($this->Timeclock->out($this->Auth->user('id'))) {
			$this->flash('saved', 'dashboard');
		} else {
			$this->flash('failed', 'dashboard');
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->flash('invalid', 'dashboard');
		}
		if ($this->Timeclock->del($id)) {
			$this->flash('deleted', 'dashboard');
		}
	}

}
?>