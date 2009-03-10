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
	
	function tickets($projectId = null, $ticketStatus = null) {
		switch ($ticketStatus) {
			case 'all':
				$this->paginate = array(
			        'conditions' => array(
			            'Ticket.project_id' => $projectId
					)
			    );
				break;
				
			
			case 'mine':
				$this->paginate = array(
			        'conditions' => array(
			            'Ticket.is_open' => 1,
			            'Ticket.owner_id' => $this->Auth->user('id'),
			            'Ticket.project_id' => $projectId
					)
			    );
				break;
				
			default:
				$this->paginate = array(
			        'conditions' => array(
			            'Ticket.is_open' => 1,
			            'Ticket.project_id' => $projectId
					)
			    );
				break;
		}
		
		if ($projectId) {
			$types = $this->Project->Ticket->TicketChange->Type->find('list');
			$elements = $this->Project->Ticket->TicketChange->Element->find('list');
			$severities = $this->Project->Ticket->TicketChange->Severity->find('list');
			$priorities = $this->Project->Ticket->TicketChange->Priority->find('list');
			$versions = $this->Project->Ticket->TicketChange->Version->find('list');
			$milestones = $this->Project->Ticket->TicketChange->Milestone->find('list');
			$statuses = $this->Project->Ticket->TicketChange->Status->find('list');
			$owners = $this->Project->Ticket->Owner->find('list', array('fields'=>array('username')));
			$this->set(compact('types', 'elements', 'severities', 'priorities', 'versions', 'milestones', 'statuses', 'owners'));
			$this->set('tickets', $this->paginate('Ticket'));
			$this->render(null, null, '/tickets/index');
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