<?php
class MigrateController extends AppController {
	
	var $name = 'Migrate';
	var $uses = array('Export', 'Ticket');
	
	function export ($key) {
		if ($key == 'c937fee14d4a7a9366bd65cbb903dc645c5d2ffa') {
			$this->layout = 'json';
			$projects = $this->Export->find('all');
			$tickets = $this->Ticket->find('all');
			
			foreach ($projects as $project) {
				$data['Project'][$project['Export']['id']] = $project['Export'];
				$data['User'][$project['Owner']['id']] = $project['Owner'];
				$data['User'][$project['Client']['id']] = $project['Client'];
				
				// structure milestones
				foreach($project['Milestone'] as $mile) {
					$data['Milestone'][$mile['id']] = $mile;
				}
				// structure timeclock
				foreach($project['Timeclock'] as $timeclock) {
					$data['Timeclock'][$timeclock['id']] = $timeclock;
				}
				// structure version
				foreach($project['Version'] as $version) {
					$data['Version'][$version['id']] = $version;
				}
				// structure elements
				foreach($project['Elements'] as $element) {
					$data['Elements'][$element['id']] = $element;
				}
				// structure elements
				foreach($project['Elements'] as $element) {
					$data['Elements'][$element['id']] = $element;
				}			
			}
			foreach ($tickets as $ticket) {
				
				$data['Ticket'][$ticket['Ticket']['id']] = $ticket['Ticket'];
				
				// structure elements
				foreach($ticket['TicketComment'] as $ticket_comment) {
					$data['TicketComment'][$ticket_comment['id']] = $ticket_comment;
				}
					
				// structure elements
				foreach($ticket['TicketChange'] as $ticket_change) {
					$data['TicketChange'][$ticket_change['id']] = $ticket_change;
				}
			}
			
			if (!isset($data) && empty($data)) $data = array();			
		}
		else {
			$data = array();
		}
		$this->set(compact('data'));
	}
}
?>