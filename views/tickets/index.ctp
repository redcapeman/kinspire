<?php echo $this->element('pagination_links'); ?>
<?php echo $this->element('cboxtop'); ?>	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $paginator->sort('id');?></th>
			<th><?php echo $paginator->sort('title');?></th>
			<th><?php echo $paginator->sort('project_id');?></th>
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
			<?php echo $ticket['Project']['name']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('Update', true), array('controller'=>'ticket_changes', 'action'=>'add', $ticket['Ticket']['id'])); ?>
			<?php echo $html->link(__('View', true), array('action'=>'view', $ticket['Ticket']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $ticket['Ticket']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
<?php echo $this->element('cboxbottom'); ?>
<?php echo $this->element('pagination_links'); ?>