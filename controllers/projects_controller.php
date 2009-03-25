<?php
class ProjectsController extends AppController {

	var $name = 'Projects';
	var $helpers = array('Html', 'Form');
	var $paginate = array();

	function index() {
		if ($this->Auth->user('group_id') != 1) {
			$this->paginate = array(
		        'conditions' => array(
		            'Project.client_id' => $this->Auth->user('id')
				)
		    );
		}
		
		$this->Project->recursive = 0;
		$this->set('projects', $this->paginate());
	}
	
	function tasks($projectId = null, $taskStatus = null) {
		switch ($taskStatus) {
			case 'all':
				$this->paginate = array(
			        'conditions' => array(
			            'Task.project_id' => $projectId
					)
			    );
				break;
				
			
			case 'mine':
				$this->paginate = array(
			        'conditions' => array(
			            'Task.is_open' => 1,
			            'Task.owner_id' => $this->Auth->user('id'),
			            'Task.project_id' => $projectId
					)
			    );
				break;
				
			default:
				$this->paginate = array(
			        'conditions' => array(
			            'Task.is_open' => 1,
			            'Task.project_id' => $projectId
					)
			    );
				break;
		}
		
		if ($projectId) {
			$elements = $this->Project->Task->TaskChange->Element->find('list');
			
			// Below you will see some bad code because I can't figure out a beter way to do it at this point in time.
			/****************************************************************************************************************/
			$types = $this->Project->Task->TaskChange->Type->find('list');
			$typeIcons = $this->Project->Task->TaskChange->Type->find('list', array('fields'=>array('icon_id')));
			$severities = $this->Project->Task->TaskChange->Severity->find('list');
			$severityIcons = $this->Project->Task->TaskChange->Severity->find('list', array('fields'=>array('icon_id')));
			$priorities = $this->Project->Task->TaskChange->Priority->find('list');
			$priorityIcons = $this->Project->Task->TaskChange->Priority->find('list', array('fields'=>array('icon_id')));
			$statuses = $this->Project->Task->TaskChange->Status->find('list');
			$statusIcons = $this->Project->Task->TaskChange->Status->find('list', array('fields'=>array('icon_id')));
			/****************************************************************************************************************/
			
			$versions = $this->Project->Task->TaskChange->Version->find('list');
			$milestones = $this->Project->Task->TaskChange->Milestone->find('list');
			$owners = $this->Project->Task->Owner->find('list', array('fields'=>array('username')));
			$this->set(compact('types', 'typeIcons', 'elements', 'severities', 'severityIcons', 'priorities', 'priorityIcons', 'versions', 'milestones', 'statuses', 'statusIcons', 'owners'));
			$this->set('tasks', $this->paginate('Task'));
			$this->render(null, null, '/tasks/index');
		}
	}

	function add() {
		if (!empty($this->data)) {
			$this->Project->create();
			if ($this->Project->save($this->data)) {
				$this->flash('saved', 'index');
			} else {
				$this->flash('failed');
			}
		}
		$this->data['Project']['is_active'] = 1;
		if ($this->Auth->user('group_id') == 1) {
			$clients = $owners = $this->Project->Client->find('list', array('fields'=>array('username')));
		} else {
			$clients = $owners = $this->Project->Client->find('list', array('fields'=>array('username'), 'conditions' => array('id' => array($this->Auth->user('id')))));
		}
		$this->set(compact('clients', 'owners'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->flash('invalid', 'index');
		}
		if (!empty($this->data)) {
			if ($this->Project->save($this->data)) {
				$this->flash('saved', 'index');
			} else {
				$this->flash('failed');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Project->read(null, $id);
		}
		$clients = $owners = $this->Project->Client->find('list', array('fields'=>array('username')));
		$this->set(compact('clients','owners'));
	}

}
?>