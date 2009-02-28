<?php
class TicketChangesController extends AppController {

	var $name = 'TicketChanges';
	var $helpers = array('Html', 'Form');

	function add($ticketId = null) {
		if (!$ticketId && empty($this->data)) {
			$this->flash('noid', 'index');
		}
		
		if (!empty($this->data)) {
			$this->data['Ticket']['id'] = $this->data['TicketChange']['ticket_id'];
			if ($this->data['TicketChange']['is_completed'] == 0) {
				$this->data['TicketChange']['completed'] = null;
				$this->data['Ticket']['is_open'] = '1';
			} else {
				$this->data['Ticket']['is_open'] = '0';
			}
			if ($this->data['TicketChange']['is_due'] == 0) {
				$this->data['TicketChange']['due'] = null;
			}
			if ($this->data['TicketChange']['description'] == '') {
				$this->data['TicketChange']['description'] = null;
			}
			if ($this->data['TicketChange']['resolution'] == '') {
				$this->data['TicketChange']['resolution'] = null;
			}
			$this->data['TicketChange']['is_active'] = 1;
			$this->TicketChange->updateAll(
			    array('TicketChange.is_active' => '0'),
			    array('TicketChange.ticket_id' => $this->data['TicketChange']['ticket_id'])
			);
			$projectId = $this->TicketChange->Ticket->findById($this->data['Ticket']['id']);
			$projectId = $projectId['Ticket']['project_id'];
			$this->TicketChange->create();
			if ($this->TicketChange->saveAll($this->data, array('validate'=>'last')) && $this->TicketChange->Ticket->updateOpenCount($projectId)) {
				$this->flash('saved', array('controller'=>'tickets', 'action'=>'view', $this->data['TicketChange']['ticket_id']));
			} else {
				$this->flash('failed');
			}
		}
		$conditions = array(
			'conditions' => array('TicketChange.ticket_id' => $ticketId, 'TicketChange.is_active' => 1)
		);
		$this->data = $this->TicketChange->find('first', $conditions);
		if (empty($this->data)) {
			$this->data = $this->TicketChange->Ticket->findById($ticketId);
			$projectId = $this->data['Project']['id'];
			$this->data['TicketChange']['due'] = null;
			$this->data['TicketChange']['completed'] = null;
		} else {
			$projectId = $this->data['Ticket']['project_id'];
		}
		$tickets = $this->TicketChange->Ticket->find('list', array('fields'=>array('title'), 'conditions' => array('id' => array($ticketId))));
		$statuses = $this->TicketChange->Status->find('list');
		$types = $this->TicketChange->Type->find('list');
		$elements = $this->TicketChange->Element->find('list', array('conditions' => array('project_id' => array($projectId, 0))));
		$severities = $this->TicketChange->Severity->find('list');
		$priorities = $this->TicketChange->Priority->find('list');
		$ticket_owners = $users = $this->TicketChange->TicketOwner->find('list', array('fields'=>array('username')));
		$versions = $this->TicketChange->Version->find('list', array('conditions' => array('project_id' => array($projectId, 0))));
		$milestones = $this->TicketChange->Milestone->find('list', array('conditions' => array('project_id' => array($projectId, 0))));
		$this->set(compact('tickets', 'statuses', 'types', 'elements', 'severities', 'priorities', 'ticket_owners', 'users', 'versions', 'milestones'));
	}

}
?>