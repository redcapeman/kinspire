<?php
class TaskCommentsController extends AppController {

	var $name = 'TaskComments';
	var $helpers = array('Html', 'Form');

	function add($taskId = null) {
		if (!$taskId && empty($this->data)) {
			$this->flash('noid', 'index');
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
		$tasks = $this->TaskComment->Task->find('list', array('conditions' => array('id' => array($this->data['TaskComment']['task_id']))));
		$users = $this->TaskComment->User->find('list', array('fields'=>array('username'), 'conditions' => array('id' => array($this->Auth->user('id')))));
		$this->set(compact('tasks', 'users'));
	}
}
?>
