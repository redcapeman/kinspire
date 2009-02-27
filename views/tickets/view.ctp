<?php if ($ticket['TicketChange']): ?>
	<?php $currentChange = array_pop($ticket['TicketChange']); ?>
<?php endif; ?>
<div class="right">
	<?php if ($ticket['Project']['name']): ?>
		<?php echo $this->element('yboxsmallrighttop'); ?>
			Project
		<?php echo $this->element('yboxbottom'); ?>
		<?php echo $this->element('cboxsmallrighttop'); ?>
			<?php echo $html->link($ticket['Project']['name'], array('controller'=> 'projects', 'action'=>'view', $ticket['Project']['id'])); ?>
		<?php echo $this->element('cboxbottom'); ?>
	<?php endif; ?>
	<?php if ($ticket['Type']['name']): ?>
		<?php echo $this->element('yboxsmallrighttop'); ?>
			Type
		<?php echo $this->element('yboxbottom'); ?>
		<?php echo $this->element('cboxsmallrighttop'); ?>
			<?php echo $html->link($ticket['Type']['name'], array('controller'=> 'types', 'action'=>'view', $ticket['Type']['id'])); ?>
		<?php echo $this->element('cboxbottom'); ?>
	<?php endif; ?>
	<?php if ($ticket['Element']['name']): ?>
		<?php echo $this->element('yboxsmallrighttop'); ?>
			Element
		<?php echo $this->element('yboxbottom'); ?>
		<?php echo $this->element('cboxsmallrighttop'); ?>
			<?php echo $html->link($ticket['Element']['name'], array('controller'=> 'elements', 'action'=>'view', $ticket['Element']['id'])); ?>
		<?php echo $this->element('cboxbottom'); ?>
	<?php endif; ?>
	<?php if ($ticket['Severity']['name']): ?>
		<?php echo $this->element('yboxsmallrighttop'); ?>
			Severity
		<?php echo $this->element('yboxbottom'); ?>
		<?php echo $this->element('cboxsmallrighttop'); ?>
			<?php echo $html->link($ticket['Severity']['name'], array('controller'=> 'severities', 'action'=>'view', $ticket['Severity']['id'])); ?>
		<?php echo $this->element('cboxbottom'); ?>
	<?php endif; ?>
	<?php if ($ticket['Priority']['name']): ?>
		<?php echo $this->element('yboxsmallrighttop'); ?>
			Priority
		<?php echo $this->element('yboxbottom'); ?>
		<?php echo $this->element('cboxsmallrighttop'); ?>
			<?php echo $html->link($ticket['Priority']['name'], array('controller'=> 'priorities', 'action'=>'view', $ticket['Priority']['id'])); ?>
		<?php echo $this->element('cboxbottom'); ?>
	<?php endif; ?>
	<?php if ($ticket['Owner']['id']): ?>
		<?php echo $this->element('yboxsmallrighttop'); ?>
			Owner
		<?php echo $this->element('yboxbottom'); ?>
		<?php echo $this->element('cboxsmallrighttop'); ?>
			<?php echo $html->link($ticket['Owner']['name'], array('controller'=> 'users', 'action'=>'view', $ticket['Owner']['id'])); ?>
		<?php echo $this->element('cboxbottom'); ?>
	<?php endif; ?>
	<?php if ($ticket['Reporter']['id']): ?>
		<?php echo $this->element('yboxsmallrighttop'); ?>
			Reporter
		<?php echo $this->element('yboxbottom'); ?>
		<?php echo $this->element('cboxsmallrighttop'); ?>
			<?php echo $html->link($ticket['Reporter']['name'], array('controller'=> 'users', 'action'=>'view', $ticket['Reporter']['id'])); ?>
		<?php echo $this->element('cboxbottom'); ?>
	<?php endif; ?>
	<?php if ($ticket['Version']['name']): ?>
		<?php echo $this->element('yboxsmallrighttop'); ?>
			Version
		<?php echo $this->element('yboxbottom'); ?>
		<?php echo $this->element('cboxsmallrighttop'); ?>
			<?php echo $html->link($ticket['Version']['name'], array('controller'=> 'versions', 'action'=>'view', $ticket['Version']['id'])); ?>
		<?php echo $this->element('cboxbottom'); ?>
	<?php endif; ?>
	<?php if ($ticket['Milestone']['name']): ?>
		<?php echo $this->element('yboxsmallrighttop'); ?>
			Milestone
		<?php echo $this->element('yboxbottom'); ?>
		<?php echo $this->element('cboxsmallrighttop'); ?>
			<?php echo $html->link($ticket['Milestone']['name'], array('controller'=> 'milestones', 'action'=>'view', $ticket['Milestone']['id'])); ?>
		<?php echo $this->element('cboxbottom'); ?>
	<?php endif; ?>
</div>
<div class="nullbox">
<?php if ($ticket['Ticket']['id']): ?>
	<?php echo $this->element('yboxmediumtop'); ?>
		Id
	<?php echo $this->element('yboxbottom'); ?>
	<?php echo $this->element('cboxmediumtop'); ?>
		<?php echo $ticket['Ticket']['id']; ?>
	<?php echo $this->element('cboxbottom'); ?>
	<div class="reset"></div>
<?php endif; ?>
<?php if ($ticket['Ticket']['title']): ?>
	<?php echo $this->element('yboxmediumtop'); ?>
		Title
	<?php echo $this->element('yboxbottom'); ?>
	<?php echo $this->element('cboxmediumtop'); ?>
		<?php echo $ticket['Ticket']['title']; ?>
	<?php echo $this->element('cboxbottom'); ?>
	<div class="reset"></div>
<?php endif; ?>
<?php if (isset($currentChange['description'])): ?>
	<?php echo $this->element('yboxmediumtop'); ?>
		Description
	<?php echo $this->element('yboxbottom'); ?>
	<?php echo $this->element('cboxmediumtop'); ?>
		<?php echo $currentChange['description']; ?>
	<?php echo $this->element('cboxbottom'); ?>
	<div class="reset"></div>
<?php endif; ?>
<?php if (isset($currentChange['resolution'])): ?>
	<?php echo $this->element('yboxmediumtop'); ?>
		Resolution
	<?php echo $this->element('yboxbottom'); ?>
	<?php echo $this->element('cboxmediumtop'); ?>
		<?php echo $currentChange['resolution']; ?>
	<?php echo $this->element('cboxbottom'); ?>
	<div class="reset"></div>
<?php endif; ?>
<?php if ($ticket['Ticket']['created']): ?>
	<?php echo $this->element('yboxmediumtop'); ?>
		Created
	<?php echo $this->element('yboxbottom'); ?>
	<?php echo $this->element('cboxmediumtop'); ?>
		<?php echo $ticket['Ticket']['created']; ?>
	<?php echo $this->element('cboxbottom'); ?>
	<div class="reset"></div>
<?php endif; ?>
<?php if (isset($currentChange['due'])): ?>
	<?php echo $this->element('yboxmediumtop'); ?>
		Due
	<?php echo $this->element('yboxbottom'); ?>
	<?php echo $this->element('cboxmediumtop'); ?>
		<?php echo $currentChange['due']; ?>
	<?php echo $this->element('cboxbottom'); ?>
	<div class="reset"></div>
<?php endif; ?>
<?php if ($ticket['Ticket']['updated']): ?>
	<?php echo $this->element('yboxmediumtop'); ?>
		Updated
	<?php echo $this->element('yboxbottom'); ?>
	<?php echo $this->element('cboxmediumtop'); ?>
		<?php echo $ticket['Ticket']['updated']; ?>
	<?php echo $this->element('cboxbottom'); ?>
	<div class="reset"></div>
<?php endif; ?>
<?php if (isset($currentChange['completed'])): ?>
	<?php echo $this->element('yboxmediumtop'); ?>
		Completed
	<?php echo $this->element('yboxbottom'); ?>
	<?php echo $this->element('cboxmediumtop'); ?>
		<?php echo $currentChange['completed']; ?>
	<?php echo $this->element('cboxbottom'); ?>
	<div class="reset"></div>
<?php endif; ?>
<?php if ($ticket['Ticket']['is_open']): ?>
	<?php echo $this->element('yboxmediumtop'); ?>
		Is Open
	<?php echo $this->element('yboxbottom'); ?>
	<?php echo $this->element('cboxmediumtop'); ?>
		<?php echo $ticket['Ticket']['is_open']; ?>
	<?php echo $this->element('cboxbottom'); ?>
	<div class="reset"></div>
<?php endif; ?>
<div id="toolbar">
	<ul>
		<li><div align="center"><?php echo $html->link('Description', array('controller'=>'ticket_changes', 'action'=>'add', $ticket['Ticket']['id']), array('id'=>'tb-button', 'class'=>'tb-normal')); ?></div></li>
		<li><div align="center"><?php echo $html->link('Resolution', array('controller'=>'ticket_changes', 'action'=>'add', $ticket['Ticket']['id']), array('id'=>'tb-button', 'class'=>'tb-normal')); ?></div></li>
	</ul>
</div>
<div class="reset"></div>

<?php if (!empty($ticket['TicketComment'])):?>
	<br>
	<?php echo $this->element('yboxtop'); ?>
	<?php __('Comments');?>	<?php echo $this->element('yboxbottom'); ?>
	<?php echo $this->element('cboxtop'); ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Body'); ?></th>
		<th><?php __('Created'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($ticket['TicketComment'] as $ticketComment):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $ticketComment['user_id'];?></td>
			<td><?php echo $ticketComment['title'];?></td>
			<td><?php echo $ticketComment['body'];?></td>
			<td><?php echo $ticketComment['created'];?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php echo $this->element('cboxbottom'); ?>
<?php endif; ?>
<div id="toolbar">
	<ul>
		<li><div align="center"><?php echo $html->link('Add Comment', array('controller'=>'ticket_comments', 'action'=>'add', $ticket['Ticket']['id']), array('id'=>'tb-button', 'class'=>'tb-normal')); ?></div></li>
	</ul>
</div>
</div>