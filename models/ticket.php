<?php
class Ticket extends AppModel {

	var $name = 'Ticket';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
			'Project' => array('className' => 'Project',
								'foreignKey' => 'project_id'
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
			'Owner' => array('className' => 'User',
								'foreignKey' => 'owner_id'
			),
			'Reporter' => array('className' => 'User',
								'foreignKey' => 'reporter_id'
			),
			'Version' => array('className' => 'Version',
								'foreignKey' => 'version_id'
			),
			'Milestone' => array('className' => 'Milestone',
								'foreignKey' => 'milestone_id'
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