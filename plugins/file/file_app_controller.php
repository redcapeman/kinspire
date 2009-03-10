<?php
class FileAppController extends AppController{
	function beforeFilter() {
		$this->Auth->allowedActions = array('*');
	}
}
?>
