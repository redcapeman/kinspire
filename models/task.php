<?php
class Task extends AppModel {

	var $name = 'Task';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
			'Project' => array('className' => 'Project',
								'foreignKey' => 'project_id',
								'counterCache' => true
			),
			'Owner' => array('className' => 'User',
								'foreignKey' => 'owner_id'
			),
			'Reporter' => array('className' => 'User',
								'foreignKey' => 'reporter_id'
			)
	);
	var $hasMany = array(
			'TaskChange' => array('className' => 'TaskChange',
								'foreignKey' => 'task_id',
								'dependent' => false
			),
			'TaskComment' => array('className' => 'TaskComment',
								'foreignKey' => 'task_id',
								'dependent' => false
			)		
	);
	
	function updateOpenCount($projectId) {
		$conditions = array(
		            'conditions' => array('Task.is_open' => 1, 'Task.project_id' => $projectId));
	
		$count = $this->find('count', $conditions);
		$this->Project->id = $projectId;
		
		if ($this->Project->saveField('open_task_count', $count)) {
			return true;
		}
		
		return;
	}
	
}
?>
