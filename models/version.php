<?php
class Version extends AppModel {

	var $name = 'Version';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
			'TicketChange' => array('className' => 'TicketChange',
								'foreignKey' => 'version_id',
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