<?php
class User extends AppModel {

	var $name = 'User';
	var $actsAs = array('Acl' => array('requester'));
	
	var $validate = array(
           'new_password' => array(
		       'equalTo' => array(
			       'rule' => array('equalTo', 'confirm_password' ),
				   'message' => 'Please re-enter your password twice so that the values match',
				   'allowEmpty' => true
				   )
				)
        );
	 
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
			'Group' => array('className' => 'Group',
								'foreignKey' => 'group_id'
			)
	);

	var $hasMany = array(
			'Application' => array('className' => 'Project',
								'foreignKey' => 'client_id',
								'dependent' => false
			),
			'Project' => array('className' => 'Project',
								'foreignKey' => 'owner_id',
								'dependent' => false
			),
			'Element' => array('className' => 'Element',
								'foreignKey' => 'owner_id',
								'dependent' => false
			),
			'Ticket' => array('className' => 'Ticket',
								'foreignKey' => 'reporter_id',
								'dependent' => false
			),
			'OwnedTickets' => array('className' => 'Ticket',
								'foreignKey' => 'owner_id',
								'dependent' => false
			),
			'TicketComment' => array('className' => 'TicketComment',
								'foreignKey' => 'user_id',
								'dependent' => false
			),
			'Timeclock' => array('className' => 'Timeclock',
								'foreignKey' => 'user_id',
								'dependent' => false
			),
			'Version' => array('className' => 'Version',
								'foreignKey' => 'owner_id',
								'dependent' => false
			),
			'Milestone' => array('className' => 'Milestone',
								'foreignKey' => 'owner_id',
								'dependent' => false
			)
	);
	
	var $hasAndBelongsToMany = array('Event');
	
  	function afterSave($created) {

  		if($created) {
  		
  		    // its a creation

			$id = $this->getLastInsertID();

			$aro = new Aro();

			$aro->updateAll( array('alias'=>'\'User:'.$id.'\''),
                                array(  'Aro.model'=>'User',
                                        'Aro.foreign_key'=>$id)
			                     );
		}
		else {
		
            // its an edit, we have to update the tree
            $data = $this->read();
            $parent_id = $data['User']['group_id'];

            $aro = new Aro();
            
            $aro_record = $aro->findByAlias( $this->name.':'.$this->id );
            $parent_record = $aro->findByAlias( 'Group:'.$parent_id );
                          
            if ( !empty( $aro_record ) ) {
            
                $parent_id = '0';
                
                if ( !empty( $parent_record ) ) {
                    $parent_id = $parent_record['Aro']['id'];
                }
                
                // just changing parents
                $this->Aro->save( array(
                    'parent_id'		=> $parent_id,
    				'id'			=> $aro_record['Aro']['id']
    			) );
            }    			
        }
        		
		return true;
	}
	
	function beforeSave(){
	    $this->setNewPassword();
		return true;
	}
	
	function parentNode(){
    
        // This should be the alias of the parent $model::$id
        $data = $this->read();

        // This needs to be unique    
        return 'Group:'.$data['User']['group_id'];
    }
    
    /**
	 * sets the password to be equal to the verified value from the temporary password field
	 *
	 * Under AuthComponent, any time a form is submitted with a field name that matches the 
	 * expected password field, it is hashed before any other operation can be done.  This 
	 * prevents the equalTo() rule check from working, so we take the password in a form input
	 * named something else.  Then after verification, but before saving the record, we pass
	 * the hashed value to the correct password field.
	 *
	 * @return boolean TRUE
	 */
	function setNewPassword()
	{
	    if( !empty( $this->data['User']['new_passwd_hash'] ) ){
		    $this->data['User']['password'] = $this->data['User']['new_passwd_hash'];
		}
		return TRUE;
	}

    /**
	 * Overrides core equalTo() to verify that two form fields are equal
	 *
	 * @param array $field contains the name of the primary field and the value of that field
	 * @param string $compare_field contains the name of the field to compare the primary field to
	 * @access public
	 * @return boolean FALSE if the fields do not match TRUE if they do
	 */
	function equalTo( $field=array(), $compare_field=null ) 
	{
		foreach( $field as $key => $value ){
			$v1 = $value;
			$v2 = $this->data[$this->name][ $compare_field ];
            if($v1 !== $v2) {
			    return FALSE;
		    } else {
		       continue;
		    }
		}
		return TRUE;

    }

}
?>
