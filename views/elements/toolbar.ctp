<!-- toolbar -->

<div id="toolbar" class="toolbar">
	<ul>
		<li><div align="center"><?php echo $html->link('New User', array('controller'=> 'users', 'action'=>'add'), array('id'=>'tb-button', 'class'=>'tb-selected')); ?></div></li>
		<li><div align="center"><?php echo $html->link('New Project', array('controller'=> 'projects', 'action'=>'add'), array('id'=>'tb-button', 'class'=>'tb-selected')); ?></div></li>
		<li><div align="center"><?php echo $html->link('Elements', array('controller'=> 'elements', 'action'=>'index'), array('id'=>'tb-button', 'class'=>'tb-normal')); ?></div></li>
		<li><div align="center"><?php echo $html->link('Groups', array('controller'=> 'groups', 'action'=>'index'), array('id'=>'tb-button', 'class'=>'tb-normal')); ?></div></li>
		<li><div align="center"><?php echo $html->link('Milestones', array('controller'=> 'milestones', 'action'=>'index'), array('id'=>'tb-button', 'class'=>'tb-normal')); ?></div></li>
		<li><div align="center"><?php echo $html->link('Priorities', array('controller'=> 'priorities', 'action'=>'index'), array('id'=>'tb-button', 'class'=>'tb-normal')); ?></div></li>
		<li><div align="center"><?php echo $html->link('Projects', array('controller'=> 'projects', 'action'=>'index'), array('id'=>'tb-button', 'class'=>'tb-normal')); ?></div></li>
		<li><div align="center"><?php echo $html->link('Severities', array('controller'=> 'severities', 'action'=>'index'), array('id'=>'tb-button', 'class'=>'tb-normal')); ?></div></li>
		<li><div align="center"><?php echo $html->link('Statuses', array('controller'=> 'statuses', 'action'=>'index'), array('id'=>'tb-button', 'class'=>'tb-normal')); ?></div></li>
		<li><div align="center"><?php echo $html->link('Tickets', array('controller'=> 'tickets', 'action'=>'index'), array('id'=>'tb-button', 'class'=>'tb-normal')); ?></div></li>
		<li><div align="center"><?php echo $html->link('Timeclocks', array('controller'=> 'timeclocks', 'action'=>'index'), array('id'=>'tb-button', 'class'=>'tb-normal')); ?></div></li>
		<li><div align="center"><?php echo $html->link('Types', array('controller'=> 'types', 'action'=>'index'), array('id'=>'tb-button', 'class'=>'tb-normal')); ?></div></li>
		<li><div align="center"><?php echo $html->link('Users', array('controller'=> 'users', 'action'=>'index'), array('id'=>'tb-button', 'class'=>'tb-normal')); ?></div></li>
		<li><div align="center"><?php echo $html->link('Versions', array('controller'=> 'versions', 'action'=>'index'), array('id'=>'tb-button', 'class'=>'tb-normal')); ?></div></li>
		<li><div align="center"><a id="tb-button" class="tb-disabled"></a></div></li>
		<li><div align="center"><a id="tb-button" class="tb-disabled"></a></div></li>
	</ul>
</div>