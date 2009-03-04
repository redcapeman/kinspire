<?php
class UsersController extends AppController {

	var $name = 'Users';
	var $helpers = array('Html', 'Form');

    function login() {
    }
    
    function logout() {
        $this->Session->setFlash('You have successfully logged out.');
        $this->redirect($this->Auth->logout());
    }

	function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->flash('invalid', 'index');
		}
		$this->set('user', $this->User->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->User->create();
			if ($this->User->save($this->data)) {
				$this->flash('saved', 'index');
			} else {
				$this->flash('failed');
			}
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->flash('invalid', 'index');
		}
		if (!empty($this->data)) {
			$this->__convertPasswords();
			if ($this->User->save($this->data)) {
				$this->flash('saved', 'index');
			} else {
				//$this->flash('failed');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->flash('invalid', 'index');
		}
		if ($this->User->del($id)) {
			$this->flash('deleted', 'index');
		}
	}
		
    /**
     * Hash submitted passwords according to the scheme used by the Auth component
	 *
	 * We need to keep a copy of the string submitted by the user, so we can
	 * use built-in validation rules on it.  However, we also need to convert this value
	 * to the hashed string that will be stored in the database.
	 *
	 * @access private
	 * @return null
     *
     */
	function __convertPasswords()
	{
	    if(!empty( $this->data['User']['new_password'] ) ){
            // we still want to validate the value entered in new_passwd
            // so we store the hashed value in a new data field which
            // we will later pass on to the passwd field in an 
            // afterSave() function 
		    $this->data['User']['password'] = $this->Auth->password( $this->data['User']['new_password'] );
		}
	}

}
?>
