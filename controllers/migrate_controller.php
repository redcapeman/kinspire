<?php
class MigrateController extends AppController {
	
	var $name = 'Migrate';
	var $uses = array('Export', 'Ticket');
	
	function export ($key) {
		App::import('File');
		$file = new File(APP .'vendors/license/key');
		$file_contents = $file->read();
		if ($key == $file_contents) {
			if (isset($this->params['pass']['1'])) {
				$cond_projects = array(
					'conditions' => array('Export.client_id' => $this->params['pass']['1'])	
				);
				 $cond_tickets = array(
				 	'conditions' => array('Project.client_id' => $this->params['pass']['1'])	
				 );
			}
			else {
				$cond_projects = array();
				 $cond_tickets = array();
			}
			$this->layout = 'json';
			$projects = $this->Export->find('all', $cond_projects);
			 $tickets = $this->Ticket->find('all', $cond_tickets);
			
			foreach ($projects as $project) {
				$data['Project'][$project['Export']['id']] = $project['Export'];
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
		
		$file->close();
	}
}
?>