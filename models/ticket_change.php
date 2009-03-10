<?php
class TicketChange extends AppModel {

	var $name = 'TicketChange';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
			'Ticket' => array('className' => 'Ticket',
								'foreignKey' => 'ticket_id'
			),
			'User' => array('className' => 'User',
								'foreignKey' => 'user_id'
			),
			'Status' => array('className' => 'Status',
								'foreignKey' => 'status_id'
			),
			'Type' => array('className' => 'Type',
								'foreignKey' => 'type_id'
			),
			'Element' => array('className' => 'Element',
								'foreignKey' => 'element_id'
			),
			'Severity' => array('className' => 'Severity',
								'foreignKey' => 'severity_id'
			),
			'Priority' => array('className' => 'Priority',
								'foreignKey' => 'priority_id'
			),
			'Version' => array('className' => 'Version',
								'foreignKey' => 'version_id'
			),
			'Milestone' => array('className' => 'Milestone',
								'foreignKey' => 'milestone_id'
			)
	);

}
?>