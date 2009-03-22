<?php	
/*
 * Calendar Helper Class
 * 
 * PHP versions 4 and 5
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright		ExqSoft, http://www.exqsoft.com
 * @package			kinpire
 * @subpackage		kinspire.plugins.file.views.helpers
 * @from 			John Elliott http://www.flipflops.org
 * @license			http://www.opensource.org/licenses/mit-license.php The MIT License
 */
 
class CalendarHelper extends Helper
{
 
	var $helpers = array('Html', 'Form');
 
/**
* Generates a Calendar for the specified by the month and year params and populates it with the content of the data array
*
* @param $year string
* @param $month string
* @param $data array
* @param $base_url
* @return string - HTML code to display calendar in view
*
*/
 
function calendar($year = '', $month = '', $data = '', $base_url ='')
	{
	$str = '';
	$month_list = array('january', 'febuary', 'march', 'april', 'may', 'june', 'july', 'august', 'september', 'october', 'november', 'december');
	$day_list = array('Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun');
	$day = 1;
	$today = 0;
 
	if($year == '' || $month == '') { // just use current yeear & month
		$year = date('Y');
		$month = date('M');
	}
 
 
 
	$flag = 0;
 
	for($i = 0; $i < 12; $i++) {
		if(strtolower($month) == $month_list[$i]) {
			if(intval($year) != 0) {
				$flag = 1;
				$month_num = $i + 1;
				break;
			}
		}
	}
 
 
	if($flag == 0) {
		$year = date('Y');
		$month = date('F');
		$month_num = date('m');
	}
 
	$next_year = $year;
	$prev_year = $year;
 
	$next_month = intval($month_num) + 1;
	$prev_month = intval($month_num) - 1;
 
	if($next_month == 13) {
		$next_month = 'january';
		$next_year = intval($year) + 1;
	} else {
		$next_month = $month_list[$next_month -1];
	}
 
	if($prev_month == 0) {
		$prev_month = 'december';
		$prev_year = intval($year) - 1;
	} else {
		$prev_month = $month_list[$prev_month - 1];
	}
 
	if($year == date('Y') && strtolower($month) == strtolower(date('F'))) {	
	// set the flag that shows todays date but only in the current month - not past or future...
		$today = date('j');
	}
 
	$days_in_month = date("t", mktime(0, 0, 0, $month_num, 1, $year));
 
	$first_day_in_month = date('D', mktime(0,0,0, $month_num, 1, $year)); 
 
	$str .= '<table class="calendar">';
 
	$str .= '<thead>';
 
	$str .= '<tr><th class="cell-prev">';
 
	$str .= $this->Html->link(__('prev', true), 'index/' . $prev_year . '/' . $prev_month); 
 
	$str .= '</th><th colspan="5">' . ucfirst($month) . ' ' . $year . '</th><th class="cell-next">';
 
	$str .= $this->Html->link(__('next', true), 'index/' . $next_year . '/' . $next_month); 
 
	$str .= '</th></tr>';
 
	$str .= '<tr>';
 
		for($i = 0; $i < 7;$i++) {
				$str .= '<th class="cell-header">' . $day_list[$i] . '</th>';
		}
 
	$str .= '</tr>';
 
	$str .= '</thead>';
 
	$str .= '<tbody>';
 
	while($day <= $days_in_month) {
		$str .= '<tr>';
 
		for($i = 0; $i < 7; $i ++) {
 
			$cell = '&nbsp;';
 
			if(isset($data[$day])) {
				$cell = $data[$day];
			}
 
			$class = '';
 
			if($i > 4) {
				$class = ' class="cell-weekend" ';
			}
 
			if($day == $today) {
				$class = ' class="cell-today" ';
			}
 
			if(($first_day_in_month == $day_list[$i] || $day > 1) && ($day <= $days_in_month)) {
				$str .= '<td ' . $class . '><div class="cell-number">' . $day . '</div><div class="cell-data">' . $cell . '</div></td>';
				$day++;
			} else {
				$str .= '<td ' . $class . '>&nbsp;</td>';
			}
		}
		$str .= '</tr>';
		}
 
	$str .= '</tbody>';
 
	$str .= '</table>';
 
	return $str;
	}
}	
 
?>
