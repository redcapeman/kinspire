<?php
class UploadFolder extends FileAppModel {
	var $name = 'UploadFolder';
	var $actsAs = array('Tree');
	
	var $hasMany = array('Upload');
}
?>
