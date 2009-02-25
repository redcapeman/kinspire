<?php echo $this->element('pagination_links'); ?>
<?php echo $this->element('cboxtop'); ?>	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $paginator->sort('id');?></th>
			<th><?php echo $paginator->sort('title');?></th>
			<th><?php echo $paginator->sort('project_id');?></th>
			<th><?php echo $paginator->sort('type_id');?></th>
			<th><?php echo $paginator->sort('element_id');?></th>
			<th><?php echo $paginator->sort('severity_id');?></th>
			<th><?php echo $paginator->sort('priority_id');?></th>
			<th><?php echo $paginator->sort('milestone_id');?></th>
			<th><?php echo $paginator->sort('status_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($tickets as $ticket):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $ticket['Ticket']['id']; ?>
		</td>
		<td>
			<?php echo $ticket['Ticket']['title']; ?>
		</td>
		<td>
			<?php echo $html->link($ticket['Project']['name'], array('controller'=> 'projects', 'action'=>'view', $ticket['Project']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($ticket['Type']['name'], array('controller'=> 'types', 'action'=>'view', $ticket['Type']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($ticket['Element']['name'], array('controller'=> 'elements', 'action'=>'view', $ticket['Element']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($ticket['Severity']['name'], array('controller'=> 'severities', 'action'=>'view', $ticket['Severity']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($ticket['Priority']['name'], array('controller'=> 'priorities', 'action'=>'view', $ticket['Priority']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($ticket['Milestone']['name'], array('controller'=> 'milestones', 'action'=>'view', $ticket['Milestone']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($ticket['Status']['name'], array('controller'=> 'statuses', 'action'=>'view', $ticket['Status']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $ticket['Ticket']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $ticket['Ticket']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $ticket['Ticket']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ticket['Ticket']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
<?php echo $this->element('cboxbottom'); ?>
<?php echo $this->element('pagination_links'); ?>