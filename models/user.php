<?php
class User extends AppModel {

	var $name = 'User';
	var $actsAs = array('Acl' => array('requester'));
	 
	function parentNode() {
	    if (!$this->id && empty($this->data)) {
	        return null;
	    }
	    $data = $this->data;
	    if (empty($this->data)) {
	        $data = $this->read();
	    }
	    if (!$data['User']['group_id']) {
	        return null;
	    }
		
		if ($data['User']['group_id']){
	        return array('Group' => array('id' => $data['User']['group_id']));
	    }
	}

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
			'Group' => array('className' => 'Group',
								'foreignKey' => 'group_id'
			)
	);

	var $hasMany = array(
			'Application' => array('className' => 'Project',
								'foreignKey' => 'client_id',
								'dependent' => false
			),
			'Project' => array('className' => 'Project',
								'foreignKey' => 'owner_id',
								'dependent' => false
			),
			'Element' => array('className' => 'Element',
								'foreignKey' => 'owner_id',
								'dependent' => false
			),
			'Ticket' => array('className' => 'Ticket',
								'foreignKey' => 'owner_id',
								'dependent' => false
			),
			'ReportedTicket' => array('className' => 'Ticket',
								'foreignKey' => 'reporter_id',
								'dependent' => false
			),
			'TicketChange' => array('className' => 'TicketChange',
								'foreignKey' => 'user_id',
								'dependent' => false
			),
			'TicketComment' => array('className' => 'TicketComment',
								'foreignKey' => 'user_id',
								'dependent' => false
			),
			'Timeclock' => array('className' => 'Timeclock',
								'foreignKey' => 'user_id',
								'dependent' => false
			),
			'Version' => array('className' => 'Version',
								'foreignKey' => 'owner_id',
								'dependent' => false
			),
			'Milestone' => array('className' => 'Milestone',
								'foreignKey' => 'owner_id',
								'dependent' => false
			)
	);

}
?>