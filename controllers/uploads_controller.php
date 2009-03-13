<?php
/*
 * Upload File Controller Class
 * 
 * PHP versions 4 and 5
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright		ExqSoft, http://www.exqsoft.com
 * @package			kinpire
 * @subpackage		kinspire.controllers
 * @license			http://www.opensource.org/licenses/mit-license.php The MIT License
 */
class UploadsController extends AppController {
	var $name = 'Uploads';
	var $paginate = array();
	
	//to be remove, temp allow actions
	function beforeFilter() {
		$this->Auth->allow('*');	
	}
    function add($commentId = null) {
        if (!empty($this->data) &&
             is_uploaded_file($this->data['Upload']['File']['tmp_name'])) {
            $fileData = fread(fopen($this->data['Upload']['File']['tmp_name'], "r"),
                                     $this->data['Upload']['File']['size']);

            $this->data['Upload']['name'] = $this->data['Upload']['File']['name'];
            $this->data['Upload']['type'] = $this->data['Upload']['File']['type'];
            $this->data['Upload']['size'] = $this->data['Upload']['File']['size'];

            if($this->Upload->save($this->data)) {
				$this->Session->setFlash(__('Upload successful', true));
				$this->flash('saved', array('controller'=>'ticket_comments', 'action'=>'attach', $this->data['Upload']['ticket_comment_id']));
			} else {
				$this->Session->setFlash(__('Error on upload. Please try again.'));	
			}
    	}
    	
    	$this->redirect(array('controller' => 'ticket_comments', 'action' => 'attach', $this->data['Upload']['ticket_comment_id']));
    }
}

?>
