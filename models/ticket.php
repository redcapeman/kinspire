<?php
class Ticket extends AppModel {

	var $name = 'Ticket';
	var $actsAs = array('Containable');

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
			'Project' => array('className' => 'Project',
								'foreignKey' => 'project_id'
			),
			'Reporter' => array('className' => 'User',
								'foreignKey' => 'reporter_id'
			)
	);

	var $hasMany = array(
			'TicketChange' => array('className' => 'TicketChange',
								'foreignKey' => 'ticket_id',
								'dependent' => false
			),
			'TicketComment' => array('className' => 'TicketComment',
								'foreignKey' => 'ticket_id',
								'dependent' => false
			)
	);

}
?>