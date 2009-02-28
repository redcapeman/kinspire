<?php
class Priority extends AppModel {

	var $name = 'Priority';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
			'TicketChange' => array('className' => 'TicketChange',
								'foreignKey' => 'priority_id',
								'dependent' => false
			)
	);

}
?>