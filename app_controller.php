<?php
class AppController extends Controller {
    
    //var $components = array('Acl', 'Auth', 'DebugKit.Toolbar');
    var $components = array('Acl', 'Auth');

    function beforeFilter() {
        $this->Auth->authorize = 'actions';
		//$this->Auth->enabled = false;
        $this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
        $this->Auth->loginRedirect = array('controller' => 'users', 'action' => 'view', $this->Auth->user('id'));
        $this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login');
        $this->Auth->loginError = 'Sorry, the information you have entered is incorrect.';
		//$this->Auth->allowedActions = array('display', 'login', 'logout');
		$this->Auth->allowedActions = array('*');
		
		if ($this->Auth->user()) {
			$openTimeclocks = ClassRegistry::init('Timeclock');
			$openTimeclocks = $openTimeclocks->openTimeclocks($this->Auth->user('id'));
			$this->set('OpenTimeclocks', $openTimeclocks);
			$userProjects = ClassRegistry::init('Project');
			$userProjects = $userProjects->userProjects($this->Auth->user('id'));
			$this->set('UserProjects', $userProjects);
        } else {
        	$this->Session->write('Auth.User.username', 'Guest');
        }
		
		$this->pageTitle = Inflector::humanize($this->params['controller']) . ' : ' . Inflector::humanize($this->params['action']);
    }
	
	function afterFilter() {
	}
	
	function flash($message, $url)
	{
		$controllerName = Inflector::humanize(Inflector::singularize($this->params['controller']));
		
		if ($url == 'dashboard') {
			$url = array('controller'=>'users', 'action'=>'view', $this->Auth->user('id'));
		} elseif ($url == 'index') {
			$url = array('action'=>'index');
		}
		
		switch ($message) {
			case 'saved':
				$message = 'The ' . $controllerName . ' has been saved.';
				break;
			case 'deleted':
				$message = 'The ' . $controllerName . ' has been deleted.';
				break;
			case 'failed':
				$message = 'The ' . $controllerName . ' could not be saved. Please try again';
				break;
			case 'invalid':
				$message = 'Invalid ' . $controllerName . '.';
				break;
			case 'noid':
				$message = 'Invalid ID.';
				break;
		}
		
		$this->Session->setFlash($message);
		if (!empty($url)) {
			$this->redirect($url);
		}
	}
}
?>