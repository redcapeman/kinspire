<?php echo $this->element('pagination_links'); ?>
<?php echo $this->element('cboxtop'); ?>	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $paginator->sort('id');?></th>
			<th><?php echo $paginator->sort('title');?></th>
			<th><?php echo $paginator->sort('project_id');?></th>
			<th>Type</th>
			<th>Element</th>
			<th>Severity</th>
			<th>Priority</th>
			<th>Version</th>
			<th>Milestone</th>
			<th>Status</th>
			<?php if ($session->read('Auth.User.group_id') == 1) : ?>
				<th class="actions"><?php __('Actions');?></th>
			<?php endif; ?>
	</tr>
	<?php
	$i = 0;
	foreach ($tickets as $ticket):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
		
		$ticketChange = null;
		foreach ($ticket['TicketChange'] as $ticketChange) {
			if ($ticketChange['is_active']) {
				break;
			}
		}
	?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $ticket['Ticket']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($ticket['Ticket']['title'], array('controller'=>'ticket_changes', 'action'=>'add', $ticket['Ticket']['id'])); ?>
		</td>
		<td>
			<?php echo $ticket['Project']['name']; ?>
		</td>
		<td>
			<?php if(isset($ticketChange['type_id'])): ?>
				<?php echo $types[$ticketChange['type_id']]; ?>
			<?php endif; ?>
		</td>
		<td>
			<?php if(isset($ticketChange['element_id'])): ?>
				<?php echo $elements[$ticketChange['element_id']]; ?>
			<?php endif; ?>
		</td>
		<td>
			<?php if(isset($ticketChange['severity_id'])): ?>
				<?php echo $severities[$ticketChange['severity_id']]; ?>
			<?php endif; ?>
		</td>
		<td>
			<?php if(isset($ticketChange['priority_id'])): ?>
				<?php echo $priorities[$ticketChange['priority_id']]; ?>
			<?php endif; ?>
		</td>
		<td>
			<?php if(isset($ticketChange['version_id'])): ?>
				<?php echo $versions[$ticketChange['version_id']]; ?>
			<?php endif; ?>
		</td>
		<td>
			<?php if(isset($ticketChange['milestone_id'])): ?>
				<?php echo $milestones[$ticketChange['milestone_id']]; ?>
			<?php endif; ?>
		</td>
		<td>
			<?php if(isset($ticketChange['status_id'])): ?>
				<?php echo $statuses[$ticketChange['status_id']]; ?>
			<?php endif; ?>
		</td>
		<?php if ($session->read('Auth.User.group_id') == 1) : ?>
			<td class="actions">
				<?php echo $html->link(__('Update', true), array('controller'=>'ticket_changes', 'action'=>'add', $ticket['Ticket']['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('action'=>'edit', $ticket['Ticket']['id'])); ?>
			</td>
		<?php endif; ?>
	</tr>
<?php endforeach; ?>
	</table>
<?php echo $this->element('cboxbottom'); ?>
<?php echo $this->element('pagination_links'); ?>
