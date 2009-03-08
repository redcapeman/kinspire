<?php echo $this->element('pagination_links'); ?>
<?php echo $this->element('cboxtop'); ?>	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $paginator->sort('id');?></th>
			<th><?php echo $paginator->sort('name');?></th>
			<th><?php echo $paginator->sort('client_id');?></th>
			<th><?php echo $paginator->sort('owner_id');?></th>
			<th><?php echo $paginator->sort('is_active');?></th>
			<th><?php echo $paginator->sort('created');?></th>
			<?php if ($session->read('Auth.User.group_id') == 1) : ?>
				<th class="actions"><?php __('Actions');?></th>
			<?php endif; ?>
	</tr>
	<?php
	$i = 0;
	foreach ($projects as $project):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $project['Project']['id']; ?>
		</td>
		<td>
			<?php echo $project['Project']['name']; ?>
		</td>
		<td>
			<?php echo $html->link($project['Client']['username'], array('controller'=> 'users', 'action'=>'view', $project['Client']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($project['Owner']['username'], array('controller'=> 'users', 'action'=>'view', $project['Owner']['id'])); ?>
		</td>
		<td>
			<?php echo $project['Project']['is_active']; ?>
		</td>
		<td>
			<?php echo $project['Project']['created']; ?>
		</td>
		<?php if ($session->read('Auth.User.group_id') == 1) : ?>
			<td class="actions">
				<?php echo $html->link(__('Edit', true), array('action'=>'edit', $project['Project']['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('action'=>'delete', $project['Project']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $project['Project']['id'])); ?>
			</td>
		<?php endif; ?>
	</tr>
<?php endforeach; ?>
	</table>
<?php echo $this->element('cboxbottom'); ?>
<?php echo $this->element('pagination_links'); ?>
<?php if ($session->read('Auth.User.group_id') == 1) : ?>
	<div id="toolbar">
		<ul>
			<li><div align="center"><?php echo $html->link('New Project', array('action'=>'add'), array('id'=>'tb-button', 'class'=>'tb-normal')); ?></div></li>
		</ul>
	</div>
<?php endif; ?>