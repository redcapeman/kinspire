<!-- toolbar -->

<div id="toolbar" class="toolbar">
	<ul>
		<li><div align="center"><?php echo $html->link('Projects', array('controller'=> 'projects', 'action'=>'index', 'plugin'=>null), array('id'=>'tb-button', 'class'=>'tb-normal')); ?></div></li>
		<?php if ($session->read('Auth.User.group_id') == 1) : ?>
			<li><div align="center"><?php echo $html->link('New User', array('controller'=> 'users', 'action'=>'add', 'plugin'=>null), array('id'=>'tb-button', 'class'=>'tb-selected')); ?></div></li>
			<li><div align="center"><?php echo $html->link('New Project', array('controller'=> 'projects', 'action'=>'add', 'plugin'=>null), array('id'=>'tb-button', 'class'=>'tb-selected')); ?></div></li>
			<li><div align="center"><?php echo $html->link('Elements', array('controller'=> 'elements', 'action'=>'index', 'plugin'=>null), array('id'=>'tb-button', 'class'=>'tb-normal')); ?></div></li>
			<li><div align="center"><?php echo $html->link('Groups', array('controller'=> 'groups', 'action'=>'index', 'plugin'=>null), array('id'=>'tb-button', 'class'=>'tb-normal')); ?></div></li>
			<li><div align="center"><?php echo $html->link('Milestones', array('controller'=> 'milestones', 'action'=>'index', 'plugin'=>null), array('id'=>'tb-button', 'class'=>'tb-normal')); ?></div></li>
			<li><div align="center"><?php echo $html->link('Priorities', array('controller'=> 'priorities', 'action'=>'index', 'plugin'=>null), array('id'=>'tb-button', 'class'=>'tb-normal')); ?></div></li>
			<li><div align="center"><?php echo $html->link('Severities', array('controller'=> 'severities', 'action'=>'index', 'plugin'=>null), array('id'=>'tb-button', 'class'=>'tb-normal')); ?></div></li>
			<li><div align="center"><?php echo $html->link('Statuses', array('controller'=> 'statuses', 'action'=>'index', 'plugin'=>null), array('id'=>'tb-button', 'class'=>'tb-normal')); ?></div></li>
			<li><div align="center"><?php echo $html->link('Tasks', array('controller'=> 'tasks', 'action'=>'index', 'plugin'=>null), array('id'=>'tb-button', 'class'=>'tb-normal')); ?></div></li>
			<li><div align="center"><?php echo $html->link('Timeclocks', array('controller'=> 'timeclocks', 'action'=>'index', 'plugin'=>null), array('id'=>'tb-button', 'class'=>'tb-normal')); ?></div></li>
			<li><div align="center"><?php echo $html->link('Types', array('controller'=> 'types', 'action'=>'index', 'plugin'=>null), array('id'=>'tb-button', 'class'=>'tb-normal')); ?></div></li>
			<li><div align="center"><?php echo $html->link('Users', array('controller'=> 'users', 'action'=>'index', 'plugin'=>null), array('id'=>'tb-button', 'class'=>'tb-normal')); ?></div></li>
			<li><div align="center"><?php echo $html->link('Versions', array('controller'=> 'versions', 'action'=>'index', 'plugin'=>null), array('id'=>'tb-button', 'class'=>'tb-normal')); ?></div></li>
			<li><div align="center"><?php echo $html->link('Uploads', array('controller'=> 'file', 'action'=>'uploads', 'plugin'=>null), array('id'=>'tb-button', 'class'=>'tb-normal')); ?></div></li>
			<li><div align="center"><?php echo $html->link('Upload Folders', array('controller'=> 'file', 'action'=>'upload_folders', 'plugin'=>null), array('id'=>'tb-button', 'class'=>'tb-normal')); ?></div></li>
		<?php else : ?>
			<li><div align="center"><a id="tb-button" class="tb-disabled"></a></div></li>
			<li><div align="center"><a id="tb-button" class="tb-disabled"></a></div></li>
			<li><div align="center"><a id="tb-button" class="tb-disabled"></a></div></li>
			<li><div align="center"><a id="tb-button" class="tb-disabled"></a></div></li>
			<li><div align="center"><a id="tb-button" class="tb-disabled"></a></div></li>
			<li><div align="center"><a id="tb-button" class="tb-disabled"></a></div></li>
			<li><div align="center"><a id="tb-button" class="tb-disabled"></a></div></li>
		<?php endif; ?>
	</ul>
</div>