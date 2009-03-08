<?php
class Configuration extends AppModel {
    
	var $name = 'Configuration';
    //var $useTable = 'configuration';

    var $validate = array(
		'name' => array(
			'rule' => VALID_NOT_EMPTY,
            'message' => 'FATAL: No variable name specified'
        )
    );

    function load()
    {
        $settings = $this->find('all');

        foreach ($settings as $variable) {
	        Configure::write (
	            'DBC.' . $variable['Configuration']['name'],
	        	$variable['Configuration']['value']
	        );
        }
    }
}
?>