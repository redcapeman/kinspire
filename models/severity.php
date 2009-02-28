<?php
class Severity extends AppModel {

	var $name = 'Severity';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
			'TicketChange' => array('className' => 'TicketChange',
								'foreignKey' => 'severity_id',
								'dependent' => false
			)
	);

}
?>