<?php
class MigrateController extends AppController {
	
	var $name = 'Migrate';
	var $uses = array('Export', 'Ticket');
	
	function export () {
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
			echo '<pre>';
			print_r($ticket);
			die;
		}
		$json = json_encode($data);
		$this->set('data', $json);
	}
}
?>