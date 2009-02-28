<?php
class Element extends AppModel {

	var $name = 'Element';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
			'Project' => array('className' => 'Project',
								'foreignKey' => 'project_id'
			),
			'Owner' => array('className' => 'User',
								'foreignKey' => 'owner_id'
			)
	);

	var $hasMany = array(
			'TicketChange' => array('className' => 'TicketChange',
								'foreignKey' => 'element_id',
								'dependent' => false
			),
			'Timeclock' => array('className' => 'Timeclock',
								'foreignKey' => 'element_id',
								'dependent' => false
			)
	);

}
?>