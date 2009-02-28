<?php
class Type extends AppModel {

	var $name = 'Type';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
			'TicketChange' => array('className' => 'TicketChange',
								'foreignKey' => 'type_id',
								'dependent' => false
			)
	);

}
?>