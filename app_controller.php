<?php
class AppController extends Controller {
    
    var $components = array('Acl', 'Auth');
	var $passed = null;

    function beforeFilter() {
        // auth component stuff
		$this->Auth->authorize = 'actions';
		//$this->Auth->enabled = false;
        $this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
        $this->Auth->loginRedirect = array('controller' => 'projects', 'action' => 'index');
        $this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login');
        $this->Auth->loginError = 'Sorry, the information you have entered is incorrect.';
		//$this->Auth->allowedActions = array('display', 'login', 'logout');
		$this->Auth->allowedActions = array('*');
		
		// if the user is logged in and see if they have open timeclocks and projects
		if ($this->Auth->user('id')) {
			$openTimeclocks = ClassRegistry::init('Timeclock');
			$openTimeclocks = $openTimeclocks->openTimeclocks($this->Auth->user('id'));
			$this->set('OpenTimeclocks', $openTimeclocks);
			$userProjects = ClassRegistry::init('Project');
			$userProjects = $userProjects->userProjects($this->Auth->user('id'));
			$this->set('UserProjects', $userProjects);
			//nextversion
			
			// log the user's actions
			foreach ($this->params['pass'] as $pass) {
				$this->passed .= $pass . ',';
			}
			
			$this->passed = rtrim($this->passed, ",");
			$this->logAction();
        } else {
        	// if they are not logged in set some default info
			$this->Session->write('Auth.User.username', 'Guest');
        }
		
		// set our default page title into our view based off the current controller name
		$this->pageTitle = Inflector::humanize($this->params['controller']) . ' : ' . Inflector::humanize($this->params['action']);
    }
	
	// this function tracks our user's actions
	function logAction ()
	{
		// prepare the data variable
		$this->data['ActionLog']['user_id'] = $this->Auth->user('id');
		$this->data['ActionLog']['controller'] = $this->params['controller'];
		$this->data['ActionLog']['action'] = $this->params['action'];
		$this->data['ActionLog']['params'] = $this->passed;
		
		// insert new log
		$actionLog = ClassRegistry::init('ActionLog');
		$actionLog->create();
		$actionLog->save($this->data);
		
		unset($this->data['ActionLog']);
	}
	
	function afterFilter() {
	}
	
	// our custom flash function that makes life easier
	function flash($message, $url)
	{
		$controllerName = Inflector::humanize(Inflector::singularize($this->params['controller']));
		
		if ($url == 'dashboard') {
			$url = array('controller'=>'projects', 'action'=>'index');
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