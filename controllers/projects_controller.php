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
			$elements = $this->Project->Ticket->TicketChange->Element->find('list');
			
			// Below you will see some bad code because I can't figure out a beter way to do it at this point in time.
			/****************************************************************************************************************/
			$types = $this->Project->Ticket->TicketChange->Type->find('list');
			$typeIcons = $this->Project->Ticket->TicketChange->Type->find('list', array('fields'=>array('icon_id')));
			$severities = $this->Project->Ticket->TicketChange->Severity->find('list');
			$severityIcons = $this->Project->Ticket->TicketChange->Severity->find('list', array('fields'=>array('icon_id')));
			$priorities = $this->Project->Ticket->TicketChange->Priority->find('list');
			$priorityIcons = $this->Project->Ticket->TicketChange->Priority->find('list', array('fields'=>array('icon_id')));
			$statuses = $this->Project->Ticket->TicketChange->Status->find('list');
			$statusIcons = $this->Project->Ticket->TicketChange->Status->find('list', array('fields'=>array('icon_id')));
			/****************************************************************************************************************/
			
			$versions = $this->Project->Ticket->TicketChange->Version->find('list');
			$milestones = $this->Project->Ticket->TicketChange->Milestone->find('list');
			$owners = $this->Project->Ticket->Owner->find('list', array('fields'=>array('username')));
			$this->set(compact('types', 'typeIcons', 'elements', 'severities', 'severityIcons', 'priorities', 'priorityIcons', 'versions', 'milestones', 'statuses', 'statusIcons', 'owners'));
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