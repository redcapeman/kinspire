<?php
class Ticket extends AppModel {

	var $name = 'Ticket';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
			'Project' => array('className' => 'Project',
								'foreignKey' => 'project_id',
								'counterCache' => true
			),
			'Reporter' => array('className' => 'User',
								'foreignKey' => 'reporter_id'
			),
			'Owner' => array('className' => 'User',
								'conditions' => 'Project.owner_id = Owner.id',
								'foreignKey' => ''
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
	
	function updateOpenCount($projectId) {
		$conditions = array(
		            'conditions' => array('Ticket.is_open' => 1, 'Ticket.project_id' => $projectId));
	
		$count = $this->find('count', $conditions);
		$this->Project->id = $projectId;
		
		if ($this->Project->saveField('open_ticket_count', $count)) {
			return true;
		}
		
		return;
	}
	
}
?>
