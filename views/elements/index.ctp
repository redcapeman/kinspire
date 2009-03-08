<?php echo $this->element('pagination_links'); ?>
<?php echo $this->element('cboxtop'); ?>	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $paginator->sort('id');?></th>
			<th><?php echo $paginator->sort('name');?></th>
			<th><?php echo $paginator->sort('project_id');?></th>
			<th><?php echo $paginator->sort('owner_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($elements as $element):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $element['Element']['id']; ?>
		</td>
		<td>
			<?php echo $element['Element']['name']; ?>
		</td>
		<td>
			<?php echo $html->link($element['Project']['name'], array('controller'=> 'projects', 'action'=>'view', $element['Project']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($element['Owner']['username'], array('controller'=> 'users', 'action'=>'view', $element['Owner']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $element['Element']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $element['Element']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $element['Element']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
<?php echo $this->element('cboxbottom'); ?>
<?php echo $this->element('pagination_links'); ?>
