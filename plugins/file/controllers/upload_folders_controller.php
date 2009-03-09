<?php
/*
 * UploadFolder File Controller Class
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
class UploadFoldersController extends FileAppController {
	var $name = 'UploadFolders';
	var $helpers = array('Tree');
	
	//temporary only until we can add the acos to the main DB
	function beforeFilter(){
		$this->Auth->allow('*');	
	}
        
    function index() {      
        $stuff = $this->UploadFolder->find('all', 
     				array('fields' => array('name', 'id', 'lft', 'rght'), 'order' => 'lft ASC'));
		$this->set('stuff', $stuff); 
		$files = $this->UploadFolder->Upload->find('all');
		$this->set(compact('files'));
    }
    
    function files($id = null){
		$this->UploadFolder->recursive = 0;
		$this->set('uploads', $this->paginate('Upload', array('upload_folder_id' => $id)));
	}
        
    function add() {
		if (!empty($this->data)) {
			$this->UploadFolder->create();
			if ($this->UploadFolder->save($this->data)) {
				$this->flash('saved', 'index');
				} else {
				$this->flash('failed');
					}
		}
		$folders = $this->UploadFolder->generatetreelist(null, null, null, '--');
		$this->set(compact('folders'));
	}
	
	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Id', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->UploadFolder->save($this->data)) {
				$this->Session->setFlash(__('Folder has been Saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Error while saving folder. Please try again', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->UploadFolder->read(null, $id);
		}
		$folders = $this->UploadFolder->generatetreelist(null, null, null, '--');
		$this->set(compact('folders'));			
	}
	
	function delete($id = null) {
		if (!$id) {
			$this->flash('invalid', 'index');
		}
		if ($this->UploadFolder->del($id)) {
			$this->flash('deleted', 'index');
		}
	}
}
?>
