<?php echo $this->element('pagination_links'); ?>
<?php echo $this->element('box/top', array('type'=>'body')); ?>	<table cellpadding="0" cellspacing="0">
	<tr>
		<th><?php echo $paginator->sort('id');?></th>
		<th><?php echo $paginator->sort('title');?></th>
		<th><?php echo $paginator->sort('owner');?></th>
		<th>Status</th>
		<th>Severity</th>
		<th>Priority</th>
		<th>Type</th>
		<th>Version</th>
		<th>Milestone</th>
		<?php if ($session->read('Auth.User.group_id') == 1) : ?>
			<th class="actions"><?php __('Actions');?></th>
		<?php endif; ?>
	</tr>
	<?php
	$i = 0;
	foreach ($tasks as $task):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
		
		$taskChange = null;
		foreach ($task['TaskChange'] as $taskChange) {
			if ($taskChange['is_active']) {
				break;
			}
		}
	?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $task['Task']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($task['Task']['title'], array('controller'=>'tasks', 'action'=>'view', $task['Task']['id'])); ?>
		</td>
		<td>
			<?php if(isset($task['Task']['owner_id'])): ?>
				<?php echo $html->link($task['Owner']['username'], array('controller'=> 'users', 'action'=>'view', $task['Owner']['id'])); ?>
			<?php else: ?>
				<?php echo $html->image('icons/status_busy.png'); ?>
			<?php endif; ?>
		</td>
		<td>
			<?php if(isset($taskChange['status_id'])): ?>
				<?php echo $html->image('icons/' . $icons[$statusIcons[$taskChange['status_id']]], array('title'=>$statuses[$taskChange['status_id']])); ?>
			<?php endif; ?>
		</td>
		<td>
			<?php if(isset($taskChange['severity_id'])): ?>
				<?php echo $html->image('icons/' . $icons[$severityIcons[$taskChange['severity_id']]], array('title'=>$severities[$taskChange['severity_id']])); ?>
			<?php endif; ?>
		</td>
		<td>
			<?php if(isset($taskChange['priority_id'])): ?>
				<?php echo $html->image('icons/' . $icons[$priorityIcons[$taskChange['priority_id']]], array('title'=>$priorities[$taskChange['priority_id']])); ?>
			<?php endif; ?>
		</td>
		<td>
			<?php if(isset($taskChange['type_id'])): ?>
				<?php echo $html->image('icons/' . $icons[$typeIcons[$taskChange['type_id']]], array('title'=>$types[$taskChange['type_id']])); ?>
			<?php endif; ?>
		</td>
		<td>
			<?php if(isset($taskChange['version_id'])): ?>
				<?php echo $versions[$taskChange['version_id']]; ?>
			<?php endif; ?>
		</td>
		<td>
			<?php if(isset($taskChange['milestone_id'])): ?>
				<?php echo $milestones[$taskChange['milestone_id']]; ?>
			<?php endif; ?>
		</td>
		<?php if ($session->read('Auth.User.group_id') == 1) : ?>
			<td class="actions">
				<?php echo $html->link(__('Update', true), array('controller'=>'task_changes', 'action'=>'add', $task['Task']['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('action'=>'edit', $task['Task']['id'])); ?>
			</td>
		<?php endif; ?>
	</tr>
<?php endforeach; ?>
	</table>
<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
<?php echo $this->element('pagination_links'); ?>
