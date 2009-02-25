<?php
class Priority extends AppModel {

	var $name = 'Priority';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
			'Ticket' => array('className' => 'Ticket',
								'foreignKey' => 'priority_id',
								'dependent' => false
			)
	);

}
?>