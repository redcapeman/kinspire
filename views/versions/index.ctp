<?php echo $this->element('pagination_links'); ?>
<?php echo $this->element('cboxtop'); ?>	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $paginator->sort('id');?></th>
			<th><?php echo $paginator->sort('name');?></th>
			<th><?php echo $paginator->sort('owner_id');?></th>
			<th><?php echo $paginator->sort('project_id');?></th>
			<th><?php echo $paginator->sort('created');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($versions as $version):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $version['Version']['id']; ?>
		</td>
		<td>
			<?php echo $version['Version']['name']; ?>
		</td>
		<td>
			<?php echo $html->link($version['Owner']['username'], array('controller'=> 'users', 'action'=>'view', $version['Owner']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($version['Project']['name'], array('controller'=> 'projects', 'action'=>'view', $version['Project']['id'])); ?>
		</td>
		<td>
			<?php echo $version['Version']['created']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $version['Version']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $version['Version']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $version['Version']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
<?php echo $this->element('cboxbottom'); ?>
<?php echo $this->element('pagination_links'); ?>