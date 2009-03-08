<?php
class TicketsController extends AppController {

	var $name = 'Tickets';
	var $helpers = array('Html', 'Form');
	var $paginate = array();

	function index() {
	    $types = $this->Ticket->TicketChange->Type->find('list');
		$elements = $this->Ticket->TicketChange->Element->find('list');
		$severities = $this->Ticket->TicketChange->Severity->find('list');
		$priorities = $this->Ticket->TicketChange->Priority->find('list');
		$versions = $this->Ticket->TicketChange->Version->find('list');
		$milestones = $this->Ticket->TicketChange->Milestone->find('list');
		$statuses = $this->Ticket->TicketChange->Status->find('list');
		$this->set(compact('types', 'elements', 'severities', 'priorities', 'versions', 'milestones', 'statuses'));
		
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
			)
	    );
		
		$types = $this->Ticket->TicketChange->Type->find('list');
		$elements = $this->Ticket->TicketChange->Element->find('list');
		$severities = $this->Ticket->TicketChange->Severity->find('list');
		$priorities = $this->Ticket->TicketChange->Priority->find('list');
		$versions = $this->Ticket->TicketChange->Version->find('list');
		$milestones = $this->Ticket->TicketChange->Milestone->find('list');
		$statuses = $this->Ticket->TicketChange->Status->find('list');
		$this->set(compact('types', 'elements', 'severities', 'priorities', 'versions', 'milestones', 'statuses'));
		
		$this->set('tickets', $this->paginate());
	    $this->render(null, null, 'index');
	}

	function view($id = null) {
		if (!$id) {
			$this->flash('invalid', 'index');
		}
		$this->Ticket->recursive = 2;
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
			
			$this->data['TicketChange']['0']['is_active'] = 1;
			$this->data['TicketChange']['0']['resolution'] = null;
			$this->data['TicketChange']['0']['user_id'] = $this->Auth->user('id');
			$this->data['Ticket']['is_open'] = '1';
			if ($this->Ticket->saveAll($this->data, array('validate'=>'first')) && $this->Ticket->updateOpenCount($this->data['Ticket']['project_id'])) {
				$this->flash('saved', array('action'=>'view', $this->Ticket->id));
			} else {
				$this->flash('failed');
			}
		}
		$this->data['Ticket']['project_id'] = $projectId;
		$projects = $this->Ticket->Project->find('list', array('conditions' => array('id' => $this->data['Ticket']['project_id'])));
		$types = $this->Ticket->TicketChange->Type->find('list');
		$elements = $this->Ticket->TicketChange->Element->find('list', array('conditions' => array('project_id' => array($this->data['Ticket']['project_id'], 0))));
		$severities = $this->Ticket->TicketChange->Severity->find('list');
		$priorities = $this->Ticket->TicketChange->Priority->find('list', array('order' => 'order'));
		$reporters = $ticket_owners = $this->Ticket->Reporter->find('list', array('fields'=>array('username'), 'conditions' => array('id' => array($this->Auth->user('id')))));
		$versions = $this->Ticket->TicketChange->Version->find('list', array('conditions' => array('project_id' => array($this->data['Ticket']['project_id'], 0))));
		$milestones = $this->Ticket->TicketChange->Milestone->find('list', array('conditions' => array('project_id' => array($this->data['Ticket']['project_id'], 0))));
		$statuses = $this->Ticket->TicketChange->Status->find('list', array('order' => 'order'));
		$this->set(compact('projects', 'types', 'elements', 'severities', 'priorities', 'ticket_owners', 'reporters', 'versions', 'milestones', 'statuses'));
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
	}

}
?>