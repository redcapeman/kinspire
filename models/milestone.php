<?php
class Milestone extends AppModel {

	var $name = 'Milestone';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
			'TicketChange' => array('className' => 'TicketChange',
								'foreignKey' => 'milestone_id',
								'dependent' => false
			),
			'Timeclock' => array('className' => 'Timeclock',
								'foreignKey' => 'milestone_id',
								'dependent' => false
			)
	);
	
	var $belongsTo = array(
			'Project' => array('className' => 'Project',
								'foreignKey' => 'project_id'
			),
			'Owner' => array('className' => 'User',
								'foreignKey' => 'owner_id'
			)
	);

}
?>