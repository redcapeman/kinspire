<?php
class Upload extends AppModel {
	var $name = 'Upload';
	
	var $belongsTo = array(
		'TicketComment' => array(
							'counterCache' => 'upload_count',
							'dependent' => false
						)
		);
}
?>
