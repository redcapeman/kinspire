<?php
class TicketsController extends AppController {

	var $name = 'Tickets';
	var $helpers = array('Html', 'Form');
	var $paginate = array();
	var $uses = array('Ticket', 'Status');

	function index() {
		$this->Ticket->recursive = 0;
		$this->set('tickets', $this->paginate());
	}

	function open_by_project($projectId) {
		if(!$projectId) {
			$this->flash('noid', 'index');
		}
			
		$this->paginate = array(
	        'conditions' => array(
	            'Ticket.is_open' => 1,
	            'Ticket.project_id' => $projectId
			),
	        'order' => array(
	            'Ticket.milestone_id' => 'ASC',
	            'Ticket.priority_id' => 'DESC'
	        )
	    );
		
		$this->set('tickets', $this->paginate());
	    $this->render(null, null, 'index');
	}

	function view($id = null) {
		if (!$id) {
			$this->flash('invalid', 'index');
		}
		$this->set('ticket', $this->Ticket->read(null, $id));
	}

	function add($projectId = null) {
		if (!$projectId && empty($this->data)) {
			$this->flash('noid', 'index');
		}
		
		if (!empty($this->data)) {
			if ($this->data['TicketChange']['0']['description'] == '') {
				$this->data['TicketChange']['0']['description'] = null;
			}
			
			if ($this->data['Ticket']['is_due'] == 0) {
				$this->data['TicketChange']['0']['due'] = null;
			}
			
			$this->data['TicketChange']['0']['resolution'] = null;
			$this->data['TicketChange']['0']['user_id'] = $this->Auth->user('id');
			$this->data['Ticket']['is_open'] = '1';
			if ($this->Ticket->saveAll($this->data, array('validate'=>'first'))) {
				$this->flash('saved', array('action'=>'view', $this->Ticket->id));
			} else {
				$this->flash('failed');
			}
		}
		$this->data['Ticket']['project_id'] = $projectId;
		$projects = $this->Ticket->Project->find('list', array('conditions' => array('id' => $this->data['Ticket']['project_id'])));
		$types = $this->Ticket->Type->find('list');
		$elements = $this->Ticket->Element->find('list', array('conditions' => array('project_id' => array($this->data['Ticket']['project_id'], 0))));
		$severities = $this->Ticket->Severity->find('list');
		$priorities = $this->Ticket->Priority->find('list');
		$owners = $this->Ticket->Owner->find('list', array('fields'=>array('username'), 'conditions' => array('id' => array($this->Auth->user('id')))));
		$reporters = $this->Ticket->Reporter->find('list', array('fields'=>array('username'), 'conditions' => array('id' => array($this->Auth->user('id')))));
		$versions = $this->Ticket->Version->find('list', array('conditions' => array('project_id' => array($this->data['Ticket']['project_id'], 0))));
		$milestones = $this->Ticket->Milestone->find('list', array('conditions' => array('project_id' => array($this->data['Ticket']['project_id'], 0))));
		$statuses = $this->Status->find('list');
		$this->set(compact('projects', 'types', 'elements', 'severities', 'priorities', 'owners', 'reporters', 'versions', 'milestones', 'statuses'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->flash('invalid', 'index');
		}
		if (!empty($this->data)) {
			if ($this->Ticket->save($this->data)) {
				$this->flash('saved', array('action'=>'view', $this->Ticket->id));
			} else {
				$this->flash('failed');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Ticket->read(null, $id);
		}
		$projects = $this->Ticket->Project->find('list');
		$types = $this->Ticket->Type->find('list');
		$elements = $this->Ticket->Element->find('list', array('conditions' => array('project_id' => array($this->data['Ticket']['project_id'], 0))));
		$severities = $this->Ticket->Severity->find('list');
		$priorities = $this->Ticket->Priority->find('list');
		$owners = $this->Ticket->Owner->find('list', array('fields'=>array('username')));
		$reporters = $this->Ticket->Reporter->find('list', array('fields'=>array('username')));
		$versions = $this->Ticket->Version->find('list', array('conditions' => array('project_id' => array($this->data['Ticket']['project_id'], 0))));
		$milestones = $this->Ticket->Milestone->find('list', array('conditions' => array('project_id' => array($this->data['Ticket']['project_id'], 0))));
		$this->set(compact('projects', 'types', 'elements', 'severities', 'priorities', 'owners', 'reporters', 'versions', 'milestones'));
	}

}
?>