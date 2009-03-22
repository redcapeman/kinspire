<?php
class Upload extends AppModel {
	var $name = 'Upload';
	
	var $belongsTo = array(
		'TaskComment' => array(
							'counterCache' => 'upload_count',
							'dependent' => false
						)
		);
}
?>
