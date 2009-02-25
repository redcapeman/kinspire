<?php
class TicketCommentsController extends AppController {

	var $name = 'TicketComments';
	var $helpers = array('Html', 'Form');

	function add($ticketId = null) {
		if (!$ticketId && empty($this->data)) {
			$this->flash('noid', 'index');
		}
		
		if (!empty($this->data)) {
			$this->TicketComment->create();
			if ($this->TicketComment->save($this->data)) {
				$this->flash('saved', array('controller'=>'tickets', 'action'=>'view', $this->data['TicketComment']['ticket_id']));
			} else {
				$this->flash('failed');
			}
		}
		$this->data['TicketComment']['ticket_id'] = $ticketId;
		$tickets = $this->TicketComment->Ticket->find('list', array('conditions' => array('id' => array($this->data['TicketComment']['ticket_id']))));
		$users = $this->TicketComment->User->find('list', array('fields'=>array('username'), 'conditions' => array('id' => array($this->Auth->user('id')))));
		$this->set(compact('tickets', 'users'));
	}
}
?>