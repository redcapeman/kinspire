<?php
class TicketComment extends AppModel {

	var $name = 'TicketComment';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
			'Ticket' => array('className' => 'Ticket',
								'foreignKey' => 'ticket_id'
			),
			'User' => array('className' => 'User',
								'foreignKey' => 'user_id'
			)
	);
	
	var $hasMany = array('Upload');
}
?>
