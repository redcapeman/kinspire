<?php echo $this->element('pagination_links'); ?>
<?php echo $this->element('cboxtop'); ?>	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $paginator->sort('id');?></th>
			<th><?php echo $paginator->sort('user_id');?></th>
			<th><?php echo $paginator->sort('project_id');?></th>
			<th><?php echo $paginator->sort('milestone_id');?></th>
			<th><?php echo $paginator->sort('element_id');?></th>
			<th><?php echo $paginator->sort('clocked_in');?></th>
			<th><?php echo $paginator->sort('clocked_out');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($timeclocks as $timeclock):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $timeclock['Timeclock']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($timeclock['User']['username'], array('controller'=> 'users', 'action'=>'view', $timeclock['User']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($timeclock['Project']['name'], array('controller'=> 'projects', 'action'=>'view', $timeclock['Project']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($timeclock['Milestone']['name'], array('controller'=> 'milestones', 'action'=>'view', $timeclock['Milestone']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($timeclock['Element']['name'], array('controller'=> 'elements', 'action'=>'view', $timeclock['Element']['id'])); ?>
		</td>
		<td>
			<?php echo $timeclock['Timeclock']['clocked_in']; ?>
		</td>
		<td>
			<?php echo $timeclock['Timeclock']['clocked_out']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $timeclock['Timeclock']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $timeclock['Timeclock']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $timeclock['Timeclock']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
<?php echo $this->element('cboxbottom'); ?>
<?php echo $this->element('pagination_links'); ?>