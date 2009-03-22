<?php
/*
 * Calendar Event Model Class
 * 
 * PHP versions 4 and 5
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright		ExqSoft, http://www.exqsoft.com
 * @package			kinpire
 * @subpackage		kinspire.plugins.calendar.models
 * @license			http://www.opensource.org/licenses/mit-license.php The MIT License
 */
//retrived User model information
ClassRegistry::init('User');
class Event extends CalendarAppModel{
	var $name = 'Event';
	var $hasAndBelongsToMany = array('User' => array(
					'dependent' => true)
	);	

}
?>
