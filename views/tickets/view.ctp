<?php
foreach ($ticket['TicketChange'] as $ticketChange) {
	if ($ticketChange['is_active']) {
		break;
	}
}
?>
<div class="right">
	<?php if ($ticket['Project']['name']): ?>
		<?php echo $this->element('yboxsmallrighttop'); ?>
			Project
		<?php echo $this->element('yboxbottom'); ?>
		<?php echo $this->element('cboxsmallrighttop'); ?>
			<?php echo $ticket['Project']['name']; ?>
		<?php echo $this->element('cboxbottom'); ?>
	<?php endif; ?>
	<?php if (isset($ticketChange['Type']['name'])): ?>
		<?php echo $this->element('yboxsmallrighttop'); ?>
			Type
		<?php echo $this->element('yboxbottom'); ?>
		<?php echo $this->element('cboxsmallrighttop'); ?>
			<?php echo $ticketChange['Type']['name']; ?>
		<?php echo $this->element('cboxbottom'); ?>
	<?php endif; ?>
	<?php if (isset($ticketChange['Element']['name'])): ?>
		<?php echo $this->element('yboxsmallrighttop'); ?>
			Element
		<?php echo $this->element('yboxbottom'); ?>
		<?php echo $this->element('cboxsmallrighttop'); ?>
			<?php echo $ticketChange['Element']['name']; ?>
		<?php echo $this->element('cboxbottom'); ?>
	<?php endif; ?>
	<?php if (isset($ticketChange['Severity']['name'])): ?>
		<?php echo $this->element('yboxsmallrighttop'); ?>
			Severity
		<?php echo $this->element('yboxbottom'); ?>
		<?php echo $this->element('cboxsmallrighttop'); ?>
			<?php echo $ticketChange['Severity']['name']; ?>
		<?php echo $this->element('cboxbottom'); ?>
	<?php endif; ?>
	<?php if (isset($ticketChange['Priority']['name'])): ?>
		<?php echo $this->element('yboxsmallrighttop'); ?>
			Priority
		<?php echo $this->element('yboxbottom'); ?>
		<?php echo $this->element('cboxsmallrighttop'); ?>
			<?php echo $ticketChange['Priority']['name']; ?>
		<?php echo $this->element('cboxbottom'); ?>
	<?php endif; ?>
	<?php if ($ticket['Owner']['id']): ?>
		<?php echo $this->element('yboxsmallrighttop'); ?>
			Owner
		<?php echo $this->element('yboxbottom'); ?>
		<?php echo $this->element('cboxsmallrighttop'); ?>
			<?php echo $html->link($ticket['Owner']['username'], array('controller'=> 'users', 'action'=>'view', $ticket['Owner']['id'])); ?>
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
	<?php if (isset($ticketChange['Version']['name'])): ?>
		<?php echo $this->element('yboxsmallrighttop'); ?>
			Version
		<?php echo $this->element('yboxbottom'); ?>
		<?php echo $this->element('cboxsmallrighttop'); ?>
			<?php echo $ticketChange['Version']['name']; ?>
		<?php echo $this->element('cboxbottom'); ?>
	<?php endif; ?>
	<?php if (isset($ticketChange['Milestone']['name'])): ?>
		<?php echo $this->element('yboxsmallrighttop'); ?>
			Milestone
		<?php echo $this->element('yboxbottom'); ?>
		<?php echo $this->element('cboxsmallrighttop'); ?>
			<?php echo $ticketChange['Milestone']['name']; ?>
		<?php echo $this->element('cboxbottom'); ?>
	<?php endif; ?>
	<?php if (isset($ticketChange['Status']['name'])): ?>
		<?php echo $this->element('yboxsmallrighttop'); ?>
			Status
		<?php echo $this->element('yboxbottom'); ?>
		<?php echo $this->element('cboxsmallrighttop'); ?>
			<?php echo $ticketChange['Status']['name']; ?>
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
<?php if (isset($ticketChange['description'])): ?>
	<?php echo $this->element('yboxmediumtop'); ?>
		Description
	<?php echo $this->element('yboxbottom'); ?>
	<?php echo $this->element('cboxmediumtop'); ?>
		<?php echo $ticketChange['description']; ?>
	<?php echo $this->element('cboxbottom'); ?>
	<div class="reset"></div>
<?php endif; ?>
<?php if (isset($ticketChange['resolution'])): ?>
	<?php echo $this->element('yboxmediumtop'); ?>
		Resolution
	<?php echo $this->element('yboxbottom'); ?>
	<?php echo $this->element('cboxmediumtop'); ?>
		<?php echo $ticketChange['resolution']; ?>
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
<?php if (isset($ticketChange['due'])): ?>
	<?php echo $this->element('yboxmediumtop'); ?>
		Due
	<?php echo $this->element('yboxbottom'); ?>
	<?php echo $this->element('cboxmediumtop'); ?>
		<?php echo $ticketChange['due']; ?>
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
<?php if (isset($ticketChange['completed'])): ?>
	<?php echo $this->element('yboxmediumtop'); ?>
		Completed
	<?php echo $this->element('yboxbottom'); ?>
	<?php echo $this->element('cboxmediumtop'); ?>
		<?php echo $ticketChange['completed']; ?>
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
<?php if ($session->read('Auth.User.group_id') == 1) : ?>
	<div id="toolbar">
		<ul>
			<li><div align="center"><?php echo $html->link('Update Ticket', array('controller'=>'ticket_changes', 'action'=>'add', $ticket['Ticket']['id']), array('id'=>'tb-button', 'class'=>'tb-normal')); ?></div></li>
		</ul>
	</div>
	<div class="reset"></div>
<?php endif; ?>

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
		<th><?php __('Files'); ?></th>
		<th><?php __('Actions'); ?></th>
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
			<td><?php echo $ticketComment['upload_count'];?></td>
			<td>
			<?php echo $html->link(__('Attachments', true), array('controller' => 'ticket_comments' , 'action' => 'attach', $ticketComment['id']))?>
			</td>
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
