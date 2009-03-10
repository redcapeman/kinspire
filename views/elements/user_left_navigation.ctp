<div class="left leftnav">
	<?php echo $this->element('yboxsmalltop'); ?>
		<div align="center">
			<h3 class="pagetitle">Welcome <?php echo $session->read('Auth.User.username'); ?></h3>
			<?php if (!$session->read('Auth.User.id')) {$loginLink = 'login';} else {$loginLink = 'logout';} ?>
			<h3>[ <?php echo $html->link(__($loginLink, true), array('controller'=> 'users', 'action'=>$loginLink, 'plugin'=>null)); ?> ]</h3>
			<?php if (isset($OpenTimeclocks)) : ?>
				<h3>[ <?php echo $html->link(__('Clock Out', true), array('controller'=> 'timeclocks', 'action'=>'out', 'plugin'=>null)); ?> ]</h3>
			<?php endif; ?>
		</div>
	<?php echo $this->element('yboxbottom'); ?>
	
	<?php if ($session->read('Auth.User.id')) : ?>
		<?php if (isset($UserProjects)) : ?>
			<?php echo $this->element('yboxsmalltop'); ?>
				<div align="center">
					<h3 class="pagetitle">Projects</h3>
				</div>
			<?php echo $this->element('yboxbottom'); ?>
			
			<?php echo $this->element('cboxsmalltop'); ?>
				<div class="leftnav">
					<ul>
						<?php foreach($UserProjects as $project) : ?>
							<li><div class="pagetitle"><?php echo $project['Project']['name']; ?></div></li>
							<li><div class="small"><?php echo $html->link('Open Tickets', array('controller'=> 'projects', 'action'=>'tickets', $project['Project']['id'], 'plugin'=>null)); ?> <?php echo $project['Project']['open_ticket_count']; ?> of <?php echo $html->link($project['Project']['ticket_count'], array('controller'=> 'projects', 'action'=>'tickets', $project['Project']['id'], 'all', 'plugin'=>null)); ?></div></li>
							<ul>
								<li><?php echo $html->link(__('My Tickets', true), array('controller'=> 'projects', 'action'=>'tickets', $project['Project']['id'], 'mine', 'plugin'=>null)); ?></li>
								<li><?php echo $html->link(__('New Ticket', true), array('controller'=> 'tickets', 'action'=>'add', $project['Project']['id'], 'plugin'=>null)); ?></li>
								<?php if ($session->read('Auth.User.group_id') == 1) : ?>
									<li><?php echo $html->link(__('New Timeclock', true), array('controller'=> 'timeclocks', 'action'=>'add', $project['Project']['id'], 'plugin'=>null)); ?></li>
								<?php endif; ?>
							</ul>
						<?php endforeach; ?>
					</ul>
				</div>
			<?php echo $this->element('cboxbottom'); ?>
		<?php endif; ?>
	<?php endif; ?>
</div>