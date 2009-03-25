<?php
class TaskChangesController extends AppController {

	var $name = 'TaskChanges';
	var $helpers = array('Html', 'Form');

	function add($taskId = null) {
		if (!$taskId && empty($this->data)) {
			$this->flash('noid', 'index');
		}
		
		if (!empty($this->data)) {
			$this->data['Task']['id'] = $this->data['TaskChange']['task_id'];
			if ($this->data['TaskChange']['is_completed'] == 0) {
				$this->data['TaskChange']['completed'] = null;
				$this->data['Task']['is_open'] = '1';
			} else {
				$this->data['Task']['is_open'] = '0';
			}
			if ($this->data['TaskChange']['is_due'] == 0) {
				$this->data['TaskChange']['due'] = null;
			}
			if ($this->data['TaskChange']['description'] == '') {
				$this->data['TaskChange']['description'] = null;
			}
			if ($this->data['TaskChange']['resolution'] == '') {
				$this->data['TaskChange']['resolution'] = null;
			}
			$this->data['TaskChange']['is_active'] = 1;
			$this->TaskChange->updateAll(
			    array('TaskChange.is_active' => '0'),
			    array('TaskChange.task_id' => $this->data['TaskChange']['task_id'])
			);
			$projectId = $this->TaskChange->Task->findById($this->data['Task']['id']);
			$projectId = $projectId['Task']['project_id'];
			$this->TaskChange->create();
			if ($this->TaskChange->saveAll($this->data, array('validate'=>'last')) && $this->TaskChange->Task->updateOpenCount($projectId)) {
				$this->flash('saved', array('controller'=>'tasks', 'action'=>'view', $this->data['TaskChange']['task_id']));
			} else {
				$this->flash('failed');
			}
		}
		$conditions = array(
			'conditions' => array('TaskChange.task_id' => $taskId, 'TaskChange.is_active' => 1)
		);
		$this->data = $this->TaskChange->find('first', $conditions);
		if (empty($this->data)) {
			$this->data = $this->TaskChange->Task->findById($taskId);
			$projectId = $this->data['Project']['id'];
			$this->data['TaskChange']['due'] = null;
			$this->data['TaskChange']['completed'] = null;
		} else {
			$projectId = $this->data['Task']['project_id'];
		}
		$tasks = $this->TaskChange->Task->find('list', array('fields'=>array('title'), 'conditions' => array('id' => array($taskId))));
		$statuses = $this->TaskChange->Status->find('list', array('order' => 'order'));
		$types = $this->TaskChange->Type->find('list');
		$elements = $this->TaskChange->Element->find('list', array('conditions' => array('project_id' => array($projectId, 0))));
		$severities = $this->TaskChange->Severity->find('list');
		$priorities = $this->TaskChange->Priority->find('list', array('order' => 'order'));
		$users = $this->TaskChange->Task->Owner->find('list', array('fields'=>array('username'), 'conditions' => array('id' => array($this->Auth->user('id')))));
		$owners = $this->TaskChange->Task->Owner->find('list', array('fields'=>array('username')));
		$versions = $this->TaskChange->Version->find('list', array('conditions' => array('project_id' => array($projectId, 0))));
		$milestones = $this->TaskChange->Milestone->find('list', array('conditions' => array('project_id' => array($projectId, 0))));
		$this->set(compact('tasks', 'statuses', 'types', 'elements', 'severities', 'priorities', 'owners', 'users', 'versions', 'milestones'));
	}

}
?>