<?php
class ProjectsController extends AppController {

	var $name = 'Projects';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Project->recursive = 0;
		$this->set('projects', $this->paginate());
	}

	function add() {
		if (!empty($this->data)) {
			$this->Project->create();
			if ($this->Project->save($this->data)) {
				$this->flash('saved', array('action'=>'view', $this->Project->id));
			} else {
				$this->flash('failed');
			}
		}
		$this->data['Project']['is_active'] = 1;
		$clients = $this->Project->Client->find('list', array('fields'=>array('username')));
		$owners = $this->Project->Owner->find('list', array('fields'=>array('username'), 'conditions' => array('id' => array($this->Auth->user('id')))));
		$this->set(compact('clients', 'owners'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->flash('invalid', 'index');
		}
		if (!empty($this->data)) {
			if ($this->Project->save($this->data)) {
				$this->flash('saved', array('action'=>'view', $this->Project->id));
			} else {
				$this->flash('failed');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Project->read(null, $id);
		}
		$clients = $this->Project->Client->find('list', array('fields'=>array('username')));
		$owners = $this->Project->Owner->find('list', array('fields'=>array('username')));
		$this->set(compact('clients','owners'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->flash('invalid', 'index');
		}
		if ($this->Project->del($id)) {
			$this->flash('deleted', 'index');
		}
	}

}
?>