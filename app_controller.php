<?php
class AppController extends Controller {
    
    var $components = array('Acl', 'Auth');
	var $passed = null;
	var $icons = null;

    function beforeFilter() {
        $this->Configuration = ClassRegistry::init('Configuration');
		if (isset($this->Configuration) && !empty($this->Configuration->table)) {
        	$this->Configuration->load();
        }
		
		// auth component stuff
		$this->Auth->authorize = 'actions';
		//$this->Auth->enabled = false;
        $this->Auth->loginRedirect = array('controller' => 'projects', 'action' => 'index');
		$this->Auth->allowedActions = array('logout', 'login', 'display');
		//$this->Auth->allowedActions = array('*');
		$this->Auth->authError = 'Access Denied. Please contact the administrator.';
		$this->Auth->actionPath = 'controllers/';
		
		// if the user is logged in and see if they have open timeclocks and projects
		if ($this->Auth->user()) {
			if (!empty($this->params['admin']) && $this->Auth->user('group_id') == 1) {
                // Request is for an admin method and using admin routing.
                $this->scaffold = 'admin';
                // Set the layout to admin for various different options and menus
                $this->layout = 'admin';
	        }
			$OpenTimeclocks = ClassRegistry::init('Timeclock');
			$OpenTimeclocks = $OpenTimeclocks->openTimeclocks($this->Auth->user('id'));
			$this->set('OpenTimeclocks', $OpenTimeclocks);
			$UserProjects = ClassRegistry::init('Project');
			$UserProjects = $UserProjects->userProjects($this->Auth->user('id'), $this->Auth->user('group_id'));
			$this->set('UserProjects', $UserProjects);
			$icons = ClassRegistry::init('Icon');
			$icons = $icons->find('list');
			$this->icons = $icons;
			$this->set(compact('icons'));
			
			// log the user's actions
			foreach ($this->params['pass'] as $pass) {
				$this->passed .= $pass . ',';
			}
			
			$this->passed = rtrim($this->passed, ",");
			$this->logAction();
        }
		
		//$this->buildAcl();
		
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
	
/**
 * Rebuild the Acl based on the current controllers in the application
 *
 * @return void
 */
    function buildAcl() {
        $log = array();
 
        $aco =& $this->Acl->Aco;
        $root = $aco->node('controllers');
        if (!$root) {
            $aco->create(array('parent_id' => null, 'model' => null, 'alias' => 'controllers'));
            $root = $aco->save();
            $root['Aco']['id'] = $aco->id; 
            $log[] = 'Created Aco node for controllers';
        } else {
            $root = $root[0];
        }   
 
        App::import('Core', 'File');
        $Controllers = Configure::listObjects('controller');
        $appIndex = array_search('App', $Controllers);
        if ($appIndex !== false ) {
            unset($Controllers[$appIndex]);
        }
        $baseMethods = get_class_methods('Controller');
        $baseMethods[] = 'buildAcl';
 
        $Plugins = $this->_get_plugin_controller_names();
        $Controllers = array_merge($Controllers, $Plugins);

        // look at each controller in app/controllers
        foreach ($Controllers as $ctrlName) {
            App::import('Controller', $ctrlName);
            $ctrlclass = $ctrlName . 'Controller';
            $methods = get_class_methods($ctrlclass);
 
            // find / make controller node
            $controllerNode = $aco->node('controllers/'.$ctrlName);
            if (!$controllerNode) {
                $aco->create(array('parent_id' => $root['Aco']['id'], 'model' => null, 'alias' => $ctrlName));
                $controllerNode = $aco->save();
                $controllerNode['Aco']['id'] = $aco->id;
                $log[] = 'Created Aco node for '.$ctrlName;
            } else {
                $controllerNode = $controllerNode[0];
            }
 
            //clean the methods. to remove those in Controller and private actions.
            foreach ($methods as $k => $method) {
                if (strpos($method, '_', 0) === 0) {
                    unset($methods[$k]);
                    continue;
                }
                if (in_array($method, $baseMethods)) {
                    unset($methods[$k]);
                    continue;
                }
                $methodNode = $aco->node('controllers/'.$ctrlName.'/'.$method);
                if (!$methodNode) {
                    $aco->create(array('parent_id' => $controllerNode['Aco']['id'], 'model' => null, 'alias' => $method));
                    $methodNode = $aco->save();
                    $log[] = 'Created Aco node for '. $method;
                }
            }
        }
        debug($log);
    }
	
    /**
     * Get the names of the plugin controllers ...
     * 
     * This function will get an array of the plugin controller names, and
     * also makes sure the controllers are available for us to get the 
     * method names by doing an App::import for each plugin controller.
     *
     * @return array of plugin names.
     *
     */
    function _get_plugin_controller_names(){
        App::import('Core', 'File', 'Folder');
        $paths = Configure::getInstance();
        $folder =& new Folder();
        // Change directory to the plugins
        $folder->cd(APP.'plugins');
        // Get a list of the files that have a file name that ends
        // with controller.php
        $files = $folder->findRecursive('.*_controller\.php');
        // Get the list of plugins
        $Plugins = Configure::listObjects('plugin');

        // Loop through the controllers we found int the plugins directory
        foreach($files as $f => $fileName)
        {
            // Get the base file name
            $file = basename($fileName);

            // Get the controller name
            $file = Inflector::camelize(substr($file, 0, strlen($file)-strlen('_controller.php')));

            // Loop through the plugins
            foreach($Plugins as $pluginName){
                if (preg_match('/^'.$pluginName.'/', $file)){
                    // First get rid of the App controller for the plugin
                    // We do this because the app controller is never called
                    // directly ...
                    if (preg_match('/^'.$pluginName.'App/', $file)){
                        unset($files[$f]);
                    } else {
                                    if (!App::import('Controller', $pluginName.'.'.$file))
                                    {
                                        debug('Error importing '.$file.' for plugin '.$pluginName);
                                    }

                        /// Now prepend the Plugin name ...
                        // This is required to allow us to fetch the method names.
                        $files[$f] = $file;
                    }
                    break;
                }
            }
        }

        return $files;
    }
}
?>
