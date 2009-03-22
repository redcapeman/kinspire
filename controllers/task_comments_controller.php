<?php
class TaskCommentsController extends AppController {

	var $name = 'TaskComments';
	var $helpers = array('Html', 'Form');
	
	//to be remove, temp allow actions
	function beforeFilter() {
		$this->Auth->allow('*');	
	}

	function add($taskId = null) {
		if (!$taskId && empty($this->data)) {
			//$this->flash('noid', 'index');
			$this->redirect(array('controller' => 'tasks', 'action' => 'index'));
		}
		
		if (!empty($this->data)) {
			$this->TaskComment->create();
			if ($this->TaskComment->save($this->data)) {
				$this->flash('saved', array('controller'=>'tasks', 'action'=>'view', $this->data['TaskComment']['task_id']));
			} else {
				$this->flash('failed');
			}
		}
		$this->data['TaskComment']['task_id'] = $taskId;
		$this->data['TaskComment']['upload_id'] = $taskId;
		$tasks = $this->TaskComment->Task->find('list', array('conditions' => array('id' => array($this->data['TaskComment']['task_id']))));
		$users = $this->TaskComment->User->find('list', array('fields'=>array('username'), 'conditions' => array('id' => array($this->Auth->user('id')))));
		$this->set(compact('tasks', 'users'));
	}
	
	function attach($id = null) {
		$files = $this->TaskComment->Upload->find('all', array('conditions' => array('task_comment_id' => $id)));
		$this->set(compact('files', 'id', 'taskId'));
	}
}
?>
