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

function security($id) {
	
        if (!empty($this->data)) {

            // lets get the Aro i.e. the group
            $aro_foreign_key = $this->data['Group']['id'];
            
            $aro = new Aro();
            $aro_record = $aro->findByAlias( 'Group:'.$aro_foreign_key );
            
            $aro_alias = $aro_record['Aro']['alias'];
            $aco_of_aro = $aro_record['Aco'];
            
            // lets run through the security selection
            $sec_access = $this->data['Group']['SecurityAccess'];
            
            $aco = new Aco();
            $inflect = new Inflector();
            
            foreach ( $sec_access as $aco_id => $access_type ) {
                
                $aco_record = $aco->findById( $aco_id );
                
                $model_plural = $inflect->pluralize( $aco_record['Aco']['model'] );
                
                if ( $access_type == 'allow' ) {
                    $this->Acl->allow(  $aro_alias,
                                        $model_plural.'/'.$aco_record[ 'Aco' ][ 'alias' ], '*');
                }
                elseif ( $access_type == 'deny' ) {
                    $this->Acl->deny(   $aro_alias,
                                        $model_plural.'/'.$aco_record[ 'Aco' ][ 'alias' ], '*');
                }
            }
        }	   
	        
        // lets gather the aco selections available	        
        $aco = new Aco();
        
        // list the whole tree
        $aco_tree = $aco->generateTreeList();	
        
        // now get the details of the Aco records
        $aco_records = $aco->find('all');	
        
        $this->set( compact( 'aco_tree', 'aco_records' ) );
        
        $this->set( 'current_alias', $this->Group->name.':'.$this->Group->id );
        
        if (empty($this->data)) {
			$this->data = $this->Group->read(null, $id);
		}
    }

}
?>
