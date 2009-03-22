<?php
    echo $form->create( array( 'url' => '/groups/security/'.$this->data['Group']['id'] ) );  

    foreach ( $acoTree as $item ) {
    
        // id
        $aco_id = str_replace( "_", "", $item );
        
        // record details
        $acoRecord = array();
        $selected = '';
        
        foreach ( $acoRecords as $aco ) {
        
            if ( $aco['Aco']['id'] == $aco_id ) {
                $acoRecord = $aco; 
                
                // check whether its been selected
                $aroRecords = $aco['Aro'];
                
                foreach ( $aroRecords as $aro ) {
                
                    if ( $aro[ 'alias' ] == $current_alias ) {
                        
                        if (    ( $aro[ 'Permission' ][ '_create' ] == 1 ) &&
                                ( $aro[ 'Permission' ][ '_read' ] == 1 ) &&
                                ( $aro[ 'Permission' ][ '_update' ] == 1 ) &&
                                ( $aro[ 'Permission' ][ '_delete' ] == 1 )
                            ) {
                            $selected = 'allow';
                            break;
                        }
                        else {
                            $selected = 'deny';
                            break;
                        }
                    }
                }
                
                break;
            }
        }
        
        // levels
        $pattern = '/_/';
        $matches = preg_match($pattern, $item);     
        echo str_repeat( ' ', $matches*3 );

         echo $this->element('box/top', array('type'=>'body'));  
         
echo $acoRecord['Aco']['model'].' : '.$acoRecord['Aco']['alias'];
        //echo $this->element('box/bottom', array('type'=>'body'));
        $inflect = new Inflector();
        if ( $inflect->pluralize( $acoRecord['Aco']['model'] ) != $acoRecord['Aco']['alias'] ) {
        	//echo $this->element('box/top', array('type'=>'body'));
            echo $form->radio(  'Group.SecurityAccess.'.$aco_id,
                                array(  'allow' => '&nbsp;Allow',
                                        'deny' => '&nbsp;Deny' ),
                                array( 'default' => $selected,
                                        'legend' => false
                                        )
                                );
                                 
        }
		  
        echo $this->element('box/bottom', array('type'=>'body'));
        
    }
            echo '<br />';
    echo $form->hidden( 'Group.id', array('value' => $this->data['Group']['id'] ));
        
    echo $form->end( array( 'label' => 'Submit', 'div' => false ) );
?>

</p>
