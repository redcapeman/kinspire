<?php
class Type extends AppModel {

	var $name = 'Type';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $hasMany = array(
			'TaskChange' => array('className' => 'TaskChange',
								'foreignKey' => 'type_id',
								'dependent' => false
			)
	);

}
?>