<?php
class AppController extends Controller {
    
    var $components = array('Acl', 'Auth');
	var $passed = null;

    function beforeFilter() {
        // auth component stuff
		$this->Auth->authorize = 'actions';
		//$this->Auth->enabled = false;
        $this->Auth->loginRedirect = array('controller' => 'projects', 'action' => 'index');
		$this->Auth->allow('logout', 'login', 'display');
		$this->Auth->authError = 'Access Denied. Please contact the administrator.';
		
		// if the user is logged in and see if they have open timeclocks and projects
		if ($this->Auth->user()) {
			if (!empty($this->params['admin']) && $this->Auth->user('group_id') == 1) {
                // Request is for an admin method and using admin routing.
                $this->scaffold = 'admin';
                // Set the layout to admin for various different options and menus
                $this->layout = 'admin';
	        }
			$openTimeclocks = ClassRegistry::init('Timeclock');
			$openTimeclocks = $openTimeclocks->openTimeclocks($this->Auth->user('id'));
			$this->set('OpenTimeclocks', $openTimeclocks);
			$userProjects = ClassRegistry::init('Project');
			$userProjects = $userProjects->userProjects();
			$this->set('UserProjects', $userProjects);
			
			// log the user's actions
			foreach ($this->params['pass'] as $pass) {
				$this->passed .= $pass . ',';
			}
			
			$this->passed = rtrim($this->passed, ",");
			$this->logAction();
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
