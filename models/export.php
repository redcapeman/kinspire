<?php
class Export extends AppModel {

	var $name = 'Export';
	var $useTable = 'projects';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
			'Client' => array('className' => 'User',
								'foreignKey' => 'client_id'
			),
			'Owner' => array('className' => 'User',
								'foreignKey' => 'owner_id'
			)
	);

	var $hasMany = array(
			'Elements' => array('className' => 'Milestone',
								'foreignKey' => 'project_id',
								'dependent' => false
			),
			'Milestone' => array('className' => 'Milestone',
								'foreignKey' => 'project_id',
								'dependent' => false
			),
			'Task' => array('className' => 'Task',
								'foreignKey' => 'project_id',
								'dependent' => false
			),
			'Timeclock' => array('className' => 'Timeclock',
								'foreignKey' => 'project_id',
								'dependent' => false
			),
			'Version' => array('className' => 'Version',
								'foreignKey' => 'project_id',
								'dependent' => false
			)
	);
	
	function userProjects($userId = null, $groupId = null) {
		if ($groupId == 1) {
			$conditions = array(
				'conditions' => array('is_active' => 1)
			);
		} else {
			$conditions = array(
				'conditions' => array('is_active' => 1, 'client_id' => $userId)
			);
		}
		
		$projects = $this->find('all', $conditions);
		
		if ($projects) {
			return $projects;
		} else {
			return;
		}
	}
}
?>