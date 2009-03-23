<?php
foreach ($task['TaskChange'] as $taskChange) {
	if ($taskChange['is_active']) {
		break;
	}
}
?>

<?php if ($task['Task']['id']): ?>
	<?php echo $this->element('box/top', array('type'=>'title','size'=>'medium','locale'=>'left')); ?>
		Id
	<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
	<?php echo $this->element('box/top', array('type'=>'body')); ?>
		<?php echo $task['Task']['id']; ?>
	<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	<div class="reset"></div>
<?php endif; ?>
<?php if ($task['Task']['title']): ?>
	<?php echo $this->element('box/top', array('type'=>'title','size'=>'medium','locale'=>'left')); ?>
		Title
	<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
	<?php echo $this->element('box/top', array('type'=>'body')); ?>
		<?php echo $task['Task']['title']; ?>
	<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	<div class="reset"></div>
<?php endif; ?>
<?php if (isset($taskChange['description'])): ?>
	<?php echo $this->element('box/top', array('type'=>'title','size'=>'medium','locale'=>'left')); ?>
		Description
	<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
	<?php echo $this->element('box/top', array('type'=>'body')); ?>
		<?php echo $taskChange['description']; ?>
	<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	<div class="reset"></div>
<?php endif; ?>
<?php if (isset($taskChange['resolution'])): ?>
	<?php echo $this->element('box/top', array('type'=>'title','size'=>'medium','locale'=>'left')); ?>
		Resolution
	<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
	<?php echo $this->element('box/top', array('type'=>'body')); ?>
		<?php echo $taskChange['resolution']; ?>
	<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	<div class="reset"></div>
<?php endif; ?>
<?php if ($task['Task']['created']): ?>
	<?php echo $this->element('box/top', array('type'=>'title','size'=>'medium','locale'=>'left')); ?>
		Created
	<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
	<?php echo $this->element('box/top', array('type'=>'body')); ?>
		<?php echo $task['Task']['created']; ?>
	<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	<div class="reset"></div>
<?php endif; ?>
<?php if (isset($taskChange['due'])): ?>
	<?php echo $this->element('box/top', array('type'=>'title','size'=>'medium','locale'=>'left')); ?>
		Due
	<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
	<?php echo $this->element('box/top', array('type'=>'body')); ?>
		<?php echo $taskChange['due']; ?>
	<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	<div class="reset"></div>
<?php endif; ?>
<?php if ($task['Task']['updated']): ?>
	<?php echo $this->element('box/top', array('type'=>'title','size'=>'medium','locale'=>'left')); ?>
		Updated
	<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
	<?php echo $this->element('box/top', array('type'=>'body')); ?>
		<?php echo $task['Task']['updated']; ?>
	<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	<div class="reset"></div>
<?php endif; ?>
<?php if (isset($taskChange['completed'])): ?>
	<?php echo $this->element('box/top', array('type'=>'title','size'=>'medium','locale'=>'left')); ?>
		Completed
	<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
	<?php echo $this->element('box/top', array('type'=>'body')); ?>
		<?php echo $taskChange['completed']; ?>
	<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	<div class="reset"></div>
<?php endif; ?>
<?php if ($task['Task']['is_open']): ?>
	<?php echo $this->element('box/top', array('type'=>'title','size'=>'medium','locale'=>'left')); ?>
		Is Open
	<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
	<?php echo $this->element('box/top', array('type'=>'body')); ?>
		<?php echo $task['Task']['is_open']; ?>
	<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	<div class="reset"></div>
<?php endif; ?>
<?php if ($task['Project']['name']): ?>
	<?php echo $this->element('box/top', array('type'=>'title','size'=>'medium','locale'=>'left')); ?>
		Project
	<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
	<?php echo $this->element('box/top', array('type'=>'body')); ?>
		<?php echo $task['Project']['name']; ?>
	<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
<?php endif; ?>
<?php if (isset($taskChange['Type']['name'])): ?>
	<?php echo $this->element('box/top', array('type'=>'title','size'=>'medium','locale'=>'left')); ?>
		Type
	<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
	<?php echo $this->element('box/top', array('type'=>'body')); ?>
		<?php echo $taskChange['Type']['name']; ?>
	<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
<?php endif; ?>
<?php if (isset($taskChange['Element']['name'])): ?>
	<?php echo $this->element('box/top', array('type'=>'title','size'=>'medium','locale'=>'left')); ?>
		Element
	<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
	<?php echo $this->element('box/top', array('type'=>'body')); ?>
		<?php echo $taskChange['Element']['name']; ?>
	<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
<?php endif; ?>
<?php if (isset($taskChange['Severity']['name'])): ?>
	<?php echo $this->element('box/top', array('type'=>'title','size'=>'medium','locale'=>'left')); ?>
		Severity
	<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
	<?php echo $this->element('box/top', array('type'=>'body')); ?>
		<?php echo $taskChange['Severity']['name']; ?>
	<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
<?php endif; ?>
<?php if (isset($taskChange['Priority']['name'])): ?>
	<?php echo $this->element('box/top', array('type'=>'title','size'=>'medium','locale'=>'left')); ?>
		Priority
	<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
	<?php echo $this->element('box/top', array('type'=>'body')); ?>
		<?php echo $taskChange['Priority']['name']; ?>
	<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
<?php endif; ?>
<?php if ($task['Owner']['id']): ?>
	<?php echo $this->element('box/top', array('type'=>'title','size'=>'medium','locale'=>'left')); ?>
		Owner
	<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
	<?php echo $this->element('box/top', array('type'=>'body')); ?>
		<?php echo $html->link($task['Owner']['username'], array('controller'=> 'users', 'action'=>'view', $task['Owner']['id'])); ?>
	<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
<?php endif; ?>
<?php if ($task['Reporter']['id']): ?>
	<?php echo $this->element('box/top', array('type'=>'title','size'=>'medium','locale'=>'left')); ?>
		Reporter
	<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
	<?php echo $this->element('box/top', array('type'=>'body')); ?>
		<?php echo $html->link($task['Reporter']['name'], array('controller'=> 'users', 'action'=>'view', $task['Reporter']['id'])); ?>
	<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
<?php endif; ?>
<?php if (isset($taskChange['Version']['name'])): ?>
	<?php echo $this->element('box/top', array('type'=>'title','size'=>'medium','locale'=>'left')); ?>
		Version
	<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
	<?php echo $this->element('box/top', array('type'=>'body')); ?>
		<?php echo $taskChange['Version']['name']; ?>
	<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
<?php endif; ?>
<?php if (isset($taskChange['Milestone']['name'])): ?>
	<?php echo $this->element('box/top', array('type'=>'title','size'=>'medium','locale'=>'left')); ?>
		Milestone
	<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
	<?php echo $this->element('box/top', array('type'=>'body')); ?>
		<?php echo $taskChange['Milestone']['name']; ?>
	<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
<?php endif; ?>
<?php if (isset($taskChange['Status']['name'])): ?>
	<?php echo $this->element('box/top', array('type'=>'title','size'=>'medium','locale'=>'left')); ?>
		Status
	<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
	<?php echo $this->element('box/top', array('type'=>'body')); ?>
		<?php echo $taskChange['Status']['name']; ?>
	<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
<?php endif; ?>
<?php if ($session->read('Auth.User.group_id') == 1) : ?>
	<div id="toolbar">
		<ul>
			<li><div align="center"><?php echo $html->link('Update Task', array('controller'=>'task_changes', 'action'=>'add', $task['Task']['id']), array('id'=>'tb-button', 'class'=>'tb-normal')); ?></div></li>
		</ul>
	</div>
	<div class="reset"></div>
<?php endif; ?>

<?php if (!empty($task['TaskComment'])):?>
	<br>
	<?php echo $this->element('box/top', array('type'=>'title')); ?>
	<?php __('Comments');?>	<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
	<?php echo $this->element('box/top', array('type'=>'body')); ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Body'); ?></th>
		<th><?php __('Created'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($task['TaskComment'] as $taskComment):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $taskComment['user_id'];?></td>
			<td><?php echo $taskComment['title'];?></td>
			<td><?php echo $taskComment['body'];?></td>
			<td><?php echo $taskComment['created'];?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
<?php endif; ?>
<div id="toolbar">
	<ul>
		<li><div align="center"><?php echo $html->link('Add Comment', array('controller'=>'task_comments', 'action'=>'add', $task['Task']['id']), array('id'=>'tb-button', 'class'=>'tb-normal')); ?></div></li>
	</ul>
</div>
