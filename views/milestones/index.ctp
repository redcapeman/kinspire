<?php echo $this->element('pagination_links'); ?>
<?php echo $this->element('cboxtop'); ?>	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $paginator->sort('id');?></th>
			<th><?php echo $paginator->sort('name');?></th>
			<th><?php echo $paginator->sort('codename');?></th>
			<th><?php echo $paginator->sort('owner_id');?></th>
			<th><?php echo $paginator->sort('project_id');?></th>
			<th><?php echo $paginator->sort('due');?></th>
			<th><?php echo $paginator->sort('completed');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($milestones as $milestone):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $milestone['Milestone']['id']; ?>
		</td>
		<td>
			<?php echo $milestone['Milestone']['name']; ?>
		</td>
		<td>
			<?php echo $milestone['Milestone']['codename']; ?>
		</td>
		<td>
			<?php echo $html->link($milestone['Owner']['username'], array('controller'=> 'users', 'action'=>'view', $milestone['Owner']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($milestone['Project']['name'], array('controller'=> 'projects', 'action'=>'view', $milestone['Project']['id'])); ?>
		</td>
		<td>
			<?php echo $milestone['Milestone']['due']; ?>
		</td>
		<td>
			<?php echo $milestone['Milestone']['completed']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('Complete', true), array('action'=>'complete', $milestone['Milestone']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $milestone['Milestone']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $milestone['Milestone']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $milestone['Milestone']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
<?php echo $this->element('cboxbottom'); ?>
<?php echo $this->element('pagination_links'); ?>