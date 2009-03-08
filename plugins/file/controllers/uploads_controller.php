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
 * @subpackage		kinspire.plugins.file.controllers
 * @license			http://www.opensource.org/licenses/mit-license.php The MIT License
 */
class UploadsController extends FileAppController {
	var $name = 'Uploads';
	var $paginate = array();
	
	function index(){
		$this->Upload->recursive = 0;
		$this->set('uploads', $this->paginate());;	
	}
	
    function add() {
        if (!empty($this->data) &&
             is_uploaded_file($this->data['Upload']['File']['tmp_name'])) {
            $fileData = fread(fopen($this->data['Upload']['File']['tmp_name'], "r"),
                                     $this->data['Upload']['File']['size']);

            $this->data['Upload']['name'] = $this->data['Upload']['File']['name'];
            $this->data['Upload']['type'] = $this->data['Upload']['File']['type'];
            $this->data['Upload']['size'] = $this->data['Upload']['File']['size'];
            $this->data['Upload']['data'] = $fileData;

            if($this->Upload->save($this->data)) {
				$this->Session->setFlash(__('Upload successful', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Error on upload. Please try again.'));	
			}
    	}
    	    $folders = $this->Upload->UploadFolder->find('list');
			$this->set(compact('folders'));
    }
    
	function delete($id = null) {
		if (!$id) {
			$this->flash('invalid', 'index');
		}
		if ($this->Upload->del($id)) {
			$this->flash('deleted', 'index');
		}
	}
	
	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Id', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Upload->save($this->data)) {
				$this->Session->setFlash(__('Folder has been Saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Error while saving folder. Please try again', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Upload->read(null, $id);
		}
    	    $folders = $this->Upload->UploadFolder->find('list');
			$this->set(compact('folders'));		
	}
    
    function download($id) {
    	Configure::write('debug', 0);
    	$file = $this->Upload->findById($id);
    	header('Content-type: ' . $file['Upload']['type']);
    	header('Content-Disposition: attachment; filename="'.$file['Upload']['name'].'"');
    	echo $file['Upload']['data'];
    	exit();
}

}

?>
