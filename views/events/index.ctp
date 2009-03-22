<?php 
 
	echo $calendar->calendar($year, $month, $data, $base_url);
 
?>
<div id="toolbar">
	<ul>
		<li><div align="center"><?php echo $html->link('New Event', array('action'=>'add'), array('id'=>'tb-button', 'class'=>'tb-normal')); ?></div></li>
	</ul>
</div>
