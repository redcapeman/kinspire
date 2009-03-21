<?php
/*
 * Calendar Events File Controller Class
 * 
 * PHP versions 4 and 5
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright		ExqSoft, http://www.exqsoft.com
 * @package			kinpire
 * @subpackage		kinspire.plugins.calendar.controllers
 * @license			http://www.opensource.org/licenses/mit-license.php The MIT License
 */
class EventsController extends CalendarAppController {
	var $name = 'Events';
	//var $uses = array('Event.User');
	
	var $helpers = array('Html', 'Form', 'Calendar');
	
	//to be remove
	function beforeFilter() {
		$this->Auth->allow('*');	
	}
 
	/**
	* the idea is that the calendar helper itself is purely a shell
	* the calendar will just display whatever is sent to it
	* anything you want to do to it is put togthere here in the controller or in a component when I get around to writing it
	*
	* @param $year string
	* @param $month string
	*
	**/
 
	function index($year = null, $month = null) {
 
		$this->Event->recursive = 0;
 
		$month_list = array('january', 'febuary', 'march', 'april', 'may', 'june', 'july', 'august', 'september', 'october', 'november', 'december');
		$day_list = array('Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun');
		$base_url = $this->webroot . 'events/calendar'; // NOT not used in the current helper version but used in the data array
		$view_base_url = $this->webroot. 'calendar/events';
 
		$data = null;
 
		if(!$year || !$month) {
			$year = date('Y');
			$month = date('M');
			$month_num = date('n');
			$item = null;
		}
 
		$flag = 0;
 
		for($i = 0; $i < 12; $i++) { // check the month is valid if set
			if(strtolower($month) == $month_list[$i]) {
				if(intval($year) != 0) {
					$flag = 1;
					$month_num = $i + 1;
					$month_name = $month_list[$i];
					break;
				}
			}
		}
 
		if($flag == 0) { // if no date set, then use the default values
			$year = date('Y');
			$month = date('M');
			$month_name = date('F');
			$month_num = date('m');
		}
 
		$fields = array('id', 'name', 'DAY(event_date) AS event_day');
 
		$var = $this->Event->findAll('MONTH(Event.event_date) = ' . $month_num . ' AND YEAR(Event.event_date) = ' . $year, $fields, 'Event.event_date ASC');
 
		/**
		* loop through the returned data and build an array of 'events' that is passes to the view
		* array key is the day of month 
		*
		*/
 
		foreach($var as $v) {
 
			if(isset($v[0]['event_day'])) {
 
				$day = $v[0]['event_day'];
 
				if(isset($data[$day])) {
					$data[$day] .= '<br /><a href="' . $view_base_url . '/view/' . $v['Event']['id'] . '">' . $v['Event']['name'] . '</a>';
				} else {
					$data[$day] = '<a href="' . $view_base_url . '/view/' . $v['Event']['id'] . '">' . $v['Event']['name'] . '</a>';
				}
			}
		}
 
		$this->set('year', $year);
		$this->set('month', $month);
		$this->set('base_url', $base_url);
		$this->set('data', $data);
 
	}

	function add() {
      if (!empty($this->data)) {
          $this->Event->create();
          if ($this->Event->save($this->data)) {
        	 $this->Session->setFlash(__('The Calendar Event has been saved' , true));
                   $this->redirect(array('action'=>'index'));
          } else {
             $this->Session->setFlash(__('The Calendar Event could not be saved. Please, try again.', true));
              }
       }
       $users = $this->Event->User->find('list');
       $this->set(compact('users'));
    }

	function edit($id=null) {
		if (!$id && empty($this->data)) {
	        $this->Session->setFlash(__('Invalid Calendar Event', true));
	        $this->redirect(array('action'=>'index'));
		}
     
		if (!empty($this->data)) {
       		if ($this->CalendarEvent->save($this->data)) {
               $this->Session->setFlash(__('The Calendar Event has been saved', true));
               $this->redirect(array('action'=>'index'));
       	} else {
              $this->Session->setFlash(__('The Calendar Event could not be saved. Please, try again.', true));
	         }
       	}
    	if (empty($this->data)) {
       		$this->data = $this->Event->read(null, $id);
        }
       
       $users = $this->Event->User->find('list');
       $this->set(compact('users'));
        
 	}
 	
 	function view($id = null) {
		if (!$id) {
			$this->flash('invalid', 'index');
		}
		$this->set('event', $this->Event->read(null, $id));
	}
	/**
	 * Action for deleting events
	 * @access - private
	 * @var $id = event.id
	**/
	function delete($id = null) {
		// if $id is invalid
		if (!$id) {
			// display error message
			$this->Session->setFlash(__('Invalid id for Event', true));
			$this->redirect(array('action'=>'index'));
		// if event $id is valid then delete post
		} elseif ($this->Event->del($id)) {
			// display delete message upon success
			$this->Session->setFlash(__('Event deleted', true));
			$this->redirect(array('action'=>'index'));
		// if $id is invalid or cannot delete the event
		} else {
			// display message
		 	$this->Session->setFlash(__('Invalid Event', true));
			// redirect
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>
