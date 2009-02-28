<?php
class TicketChangesController extends AppController {

	var $name = 'TicketChanges';
	var $helpers = array('Html', 'Form');

	function add($ticketId = null) {
		if (!$ticketId && empty($this->data)) {
			$this->flash('noid', 'index');
		}
		
		if (!empty($this->data)) {
			if ($this->data['TicketChange']['is_completed'] == 0) {
				$this->data['TicketChange']['completed'] = null;
				$this->data['Ticket']['id'] = $this->data['TicketChange']['ticket_id'];
				$this->data['Ticket']['is_open'] = '1';
			} else {
				$this->data['Ticket']['id'] = $this->data['TicketChange']['ticket_id'];
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
			$this->TicketChange->create();
			if ($this->TicketChange->saveAll($this->data, array('validate'=>'last'))) {
				$this->flash('saved', array('controller'=>'tickets', 'action'=>'view', $this->data['TicketChange']['ticket_id']));
			} else {
				$this->flash('failed');
			}
		}
		$conditions = array(
			'conditions' => array('TicketChange.ticket_id' => $ticketId),
			'order' => array('TicketChange.id DESC')
		);
		$this->data = $this->TicketChange->find('first', $conditions);
		$tickets = $this->TicketChange->Ticket->find('list', array('fields'=>array('title'), 'conditions' => array('id' => array($ticketId))));
		$statuses = $this->TicketChange->Status->find('list');
		$users = $this->TicketChange->User->find('list', array('fields'=>array('username'), 'conditions' => array('id' => array($this->Auth->user('id')))));
		$this->set(compact('tickets', 'users', 'statuses'));
	}

}
?>