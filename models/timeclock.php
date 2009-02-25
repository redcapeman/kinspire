<?php
class Timeclock extends AppModel {

	var $name = 'Timeclock';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
			'Project' => array('className' => 'Project',
								'foreignKey' => 'project_id'
			),
			'User' => array('className' => 'User',
								'foreignKey' => 'user_id'
			),
			'Milestone' => array('className' => 'Milestone',
								'foreignKey' => 'milestone_id'
			),
			'Element' => array('className' => 'Element',
								'foreignKey' => 'element_id'
			)
	);

	function out($userId = null) {
		if ($userId) {
			$this->updateAll(
			    array('clocked_out' => "'" . date('Y-m-d H:i:s') . "'"),
			    array('user_id' => $userId, 'clocked_out' => null)
			);
			
			return true;
		} else {
			return false;
		}
	}
	
	function openTimeclocks($userId) {
		$conditions = array(
			'conditions' => array('user_id' => $userId, 'clocked_out' => null)
		);
		
		$count = $this->find('count', $conditions);
		
		if ($count > 0) {
			return true;
		} else {
			return;
		}
	}
}
?>