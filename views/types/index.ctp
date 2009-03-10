<?php echo $this->element('pagination_links'); ?>
<?php echo $this->element('cboxtop'); ?>	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $paginator->sort('id');?></th>
			<th><?php echo $paginator->sort('name');?></th>
			<th><?php echo $paginator->sort('order');?></th>
			<th><?php echo $paginator->sort('icon');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($types as $type):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $type['Type']['id']; ?>
		</td>
		<td>
			<?php echo $type['Type']['name']; ?>
		</td>
		<td>
			<?php echo $type['Type']['order']; ?>
		</td>
		<td>
			<?php echo $html->image('icons/' . $icons[$type['Type']['icon_id']]); ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $type['Type']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $type['Type']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $type['Type']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
<?php echo $this->element('cboxbottom'); ?>
<?php echo $this->element('pagination_links'); ?>
<div id="toolbar">
	<ul>
		<li><div align="center"><?php echo $html->link('New Type', array('action'=>'add'), array('id'=>'tb-button', 'class'=>'tb-normal')); ?></div></li>
	</ul>
</div>