<div class="left leftnav">
	<?php echo $this->element('box/top', array('type'=>'title','size'=>'small')); ?>
		<div align="center">
			<h3 class="pagetitle">Welcome <?php echo $session->read('Auth.User.username'); ?></h3>
			<?php if (!$session->read('Auth.User.id')) {$loginLink = 'login';} else {$loginLink = 'logout';} ?>
			<h3>[ <?php echo $html->link(__($loginLink, true), array('controller'=> 'users', 'action'=>$loginLink, 'plugin'=>null)); ?> ]</h3>
			<?php if (isset($OpenTimeclocks)) : ?>
				<h3>[ <?php echo $html->link(__('Clock Out', true), array('controller'=> 'timeclocks', 'action'=>'out', 'plugin'=>null)); ?> ]</h3>
			<?php endif; ?>
		</div>
	<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
	
	<?php if ($session->read('Auth.User.id')) : ?>
		<?php if (isset($userEvents)):?>
				<? foreach($userEvents as $event):?>
						<? 
						$i = 0;
						$count = count($event['Event']);
						?>
				<?php echo $this->element('box/top', array('type'=>'title','size'=>'small')); ?>
				<div align="center">
					<h3 class="pagetitle">Upcoming Events</h3></li>
				</div>
				<?php echo $this->element('box/bottom', array('type'=>'title')); ?>	
				<?php echo $this->element('box/top', array('type'=>'body','size'=>'small')); ?>
				<div class="leftnav">
					<ul>
						<?php for ($i = 0; $i <= $count - 1; $i++) { 
							?>
							<li><?php if($event['Event'][$i]['alert_date'] == date('Y-m-j')):?>
					 			<? echo $html->link($event['Event'][$i]['name'], array('controller' => 'events', 'action' => 'view', $event['Event'][$i]['id'] )); ?><br />
				 			</li>
				 			<li><small><?php echo date('jS F, Y h:i a', strtotime($event['Event'][$i]['event_date']));?></small></li>
				 			<?php endif;?>
				 			<?}?>
				<? endforeach;?>
					</ul>
				<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
				</div>
			<?php endif;?>
	<?php endif;?>
	
	<?php if ($session->read('Auth.User.id')) : ?>
		<?php if (isset($UserProjects)) : ?>
			<?php echo $this->element('box/top', array('type'=>'title','size'=>'small')); ?>
				<div align="center">
					<h3 class="pagetitle">Projects</h3>
				</div>
			<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
			
			<?php echo $this->element('box/top', array('type'=>'body','size'=>'small')); ?>
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
			<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
		<?php endif; ?>
	<?php endif; ?>
</div>
