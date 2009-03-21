<?php
class MigrateController extends AppController {
	
	var $name = 'Migrate';
	var $uses = array('Export');
	
	function export () {
		$this->layout = 'xml';
		$projects = $this->Export->find('all');
		
		foreach ($projects as $project) {
			$data['Project'][$project['Export']['id']] = $project['Export'];
			$data['User'][$project['Owner']['id']] = $project['Owner'];
			$data['User'][$project['Client']['id']] = $project['Client'];
			
			// structure milestones
			foreach($project['Milestone'] as $mile) {
				$data['Milestone'][$mile['id']] = $mile;
			}
			// structure tickets
			foreach($project['Ticket'] as $ticket) {
				$data['Ticket'][$ticket['id']] = $ticket;
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
			/*
			// structure elements
			foreach($project['TicketComment'] as $ticket_comment) {
				$data['TicketComment'][$ticket_comment['id']] = $ticket_comment;
			}
			// structure elements
			foreach($project['TicketChange'] as $ticket_change) {
				$data['TicketChange'][$ticket_change['id']] = $ticket_change;
			}
			*/
			// structure elements
			foreach($project['Elements'] as $element) {
				$data['Elements'][$element['id']] = $element;
			}
			
		}
		$this->set(compact('data'));
	}
}
?>