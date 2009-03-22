<?php
class TaskComment extends AppModel {

	var $name = 'TaskComment';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
			'Task' => array('className' => 'Task',
								'foreignKey' => 'task_id'
			),
			'User' => array('className' => 'User',
								'foreignKey' => 'user_id'
			)
	);
	
	var $hasMany = array('Upload');
}
?>
