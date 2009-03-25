<?php
class TasksController extends AppController {

	var $name = 'Tasks';
	var $helpers = array('Html', 'Form');
	var $paginate = array();

	function index() {
		$elements = $this->Task->TaskChange->Element->find('list');
		$versions = $this->Task->TaskChange->Version->find('list');
		$milestones = $this->Task->TaskChange->Milestone->find('list');
		$this->set(compact('elements', 'versions', 'milestones'));
		
		// Below you will see some bad code because I can't figure out a beter way to do it at this point in time.
		/****************************************************************************************************************/
		$types = $this->Task->TaskChange->Type->find('list');
		$typeIcons = $this->Task->TaskChange->Type->find('list', array('fields'=>array('icon_id')));
		$severities = $this->Task->TaskChange->Severity->find('list');
		$severityIcons = $this->Task->TaskChange->Severity->find('list', array('fields'=>array('icon_id')));
		$priorities = $this->Task->TaskChange->Priority->find('list');
		$priorityIcons = $this->Task->TaskChange->Priority->find('list', array('fields'=>array('icon_id')));
		$statuses = $this->Task->TaskChange->Status->find('list');
		$statusIcons = $this->Task->TaskChange->Status->find('list', array('fields'=>array('icon_id')));
		$this->set(compact('types', 'typeIcons', 'severities', 'severityIcons', 'priorities', 'priorityIcons', 'statuses', 'statusIcons'));
		/****************************************************************************************************************/
		
		$this->set('tasks', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->flash('invalid', 'index');
		}
		$this->Task->recursive = 2;
		$this->set('task', $this->Task->read(null, $id));
	}

	function add($projectId = null) {
		if (!$projectId && empty($this->data)) {
			$this->flash('noid', 'index');
		}
		
		if (!empty($this->data)) {
			if ($this->data['TaskChange']['0']['description'] == '') {
				$this->data['TaskChange']['0']['description'] = null;
			}
			
			if ($this->data['Task']['is_due'] == 0) {
				$this->data['TaskChange']['0']['due'] = null;
			}
			
			$this->data['TaskChange']['0']['is_active'] = 1;
			$this->data['TaskChange']['0']['resolution'] = null;
			$this->data['TaskChange']['0']['user_id'] = $this->Auth->user('id');
			$this->data['Task']['is_open'] = '1';
			if ($this->Task->saveAll($this->data, array('validate'=>'first')) && $this->Task->updateOpenCount($this->data['Task']['project_id'])) {
				$this->flash('saved', array('action'=>'view', $this->Task->id));
			} else {
				$this->flash('failed');
			}
		}
		$this->data['Task']['project_id'] = $projectId;
		$projects = $this->Task->Project->find('list', array('conditions' => array('id' => $this->data['Task']['project_id'])));
		$types = $this->Task->TaskChange->Type->find('list');
		$elements = $this->Task->TaskChange->Element->find('list', array('conditions' => array('project_id' => array($this->data['Task']['project_id'], 0))));
		$severities = $this->Task->TaskChange->Severity->find('list');
		$priorities = $this->Task->TaskChange->Priority->find('list', array('order' => 'order'));
		$reporters = $task_owners = $this->Task->Reporter->find('list', array('fields'=>array('username'), 'conditions' => array('id' => array($this->Auth->user('id')))));
		$versions = $this->Task->TaskChange->Version->find('list', array('conditions' => array('project_id' => array($this->data['Task']['project_id'], 0))));
		$milestones = $this->Task->TaskChange->Milestone->find('list', array('conditions' => array('project_id' => array($this->data['Task']['project_id'], 0))));
		$statuses = $this->Task->TaskChange->Status->find('list', array('order' => 'order'));
		$this->set(compact('projects', 'types', 'elements', 'severities', 'priorities', 'task_owners', 'reporters', 'versions', 'milestones', 'statuses'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->flash('invalid', 'index');
		}
		if (!empty($this->data)) {
			if ($this->Task->save($this->data)) {
				$this->flash('saved', array('action'=>'view', $this->Task->id));
			} else {
				$this->flash('failed');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Task->read(null, $id);
		}
	}

}
?>