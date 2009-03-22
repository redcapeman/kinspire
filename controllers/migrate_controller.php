<?php
class MigrateController extends AppController {
	
	var $name = 'Migrate';
	var $uses = array('Export', 'Task');
	
	function export ($key) {
		App::import('File');
		$file = new File(APP .'vendors/license/key');
		$file_contents = $file->read();
		if ($key == $file_contents) {
			if (isset($this->params['pass']['1'])) {
				$cond_projects = array(
					'conditions' => array('Export.client_id' => $this->params['pass']['1'])	
				);
				 $cond_tasks = array(
				 	'conditions' => array('Project.client_id' => $this->params['pass']['1'])	
				 );
			}
			else {
				$cond_projects = array();
				 $cond_tasks = array();
			}
			$this->layout = 'json';
			$projects = $this->Export->find('all', $cond_projects);
			 $tasks = $this->Task->find('all', $cond_tasks);
			
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
			
			foreach ($tasks as $task) {
				
				$data['Task'][$task['Task']['id']] = $task['Task'];
				
				// structure elements
				foreach($task['TaskComment'] as $task_comment) {
					$data['TaskComment'][$task_comment['id']] = $task_comment;
				}
					
				// structure elements
				foreach($task['TaskChange'] as $task_change) {
					$data['TaskChange'][$task_change['id']] = $task_change;
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