<?php
class TicketChangesController extends AppController {

	var $name = 'TicketChanges';
	var $helpers = array('Html', 'Form');

	function add($ticketId = null) {
		if (!$ticketId && empty($this->data)) {
			$this->flash('noid', 'index');
		}
		
		if (!empty($this->data)) {
			$this->TicketChange->create();
			if ($this->TicketChange->save($this->data)) {
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
		if (!$this->data['TicketChange']['ticket_id']) {
			$this->data['TicketChange']['ticket_id'] = $ticketId;
		}
		$tickets = $this->TicketChange->Ticket->find('list');
		$users = $this->TicketChange->User->find('list', array('fields'=>array('username'), 'conditions' => array('id' => array($this->Auth->user('id')))));
		$this->set(compact('tickets', 'users'));
	}

}
?>