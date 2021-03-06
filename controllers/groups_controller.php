<?php
class GroupsController extends AppController {

	var $name = 'Groups';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->Group->recursive = 0;
		$this->set('groups', $this->paginate());
	}

	function add() {
		if (!empty($this->data)) {
			$this->Group->create();
			if ($this->Group->save($this->data)) {
				$this->flash('saved', 'index');
			} else {
				$this->flash('failed');
			}
		}
        // for the group parent listing	   
        $groups = $this->Group->find('list');
        $this->set( 'parents', $groups );
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->flash('invalid', 'index');
		}
		if (!empty($this->data)) {
			if ($this->Group->save($this->data)) {
				$this->flash('saved', 'index');
			} else {
				$this->flash('failed');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Group->read(null, $id);
		}
		// for the parent group
        $groups = $this->Group->find('list');
        $this->set( 'parents', $groups );
	}

	function delete($id = null) {
		if (!$id) {
			$this->flash('invalid', 'index');
		}
		if ($this->Group->del($id)) {
			$this->flash('deleted', 'index');
		}
	}
}
?>
