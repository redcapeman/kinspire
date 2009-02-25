<?php
class Version extends AppModel {

	var $name = 'Version';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
			'Ticket' => array('className' => 'Ticket',
								'foreignKey' => 'version_id',
								'dependent' => false
			)
	);
	
	var $belongsTo = array(
			'Project' => array('className' => 'Project',
								'foreignKey' => 'project_id'
			)
	);

}
?>