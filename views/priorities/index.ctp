<?php echo $this->element('pagination_links'); ?>
<?php echo $this->element('cboxtop'); ?>	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $paginator->sort('id');?></th>
			<th><?php echo $paginator->sort('name');?></th>
			<th><?php echo $paginator->sort('order');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($priorities as $priority):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $priority['Priority']['id']; ?>
		</td>
		<td>
			<?php echo $priority['Priority']['name']; ?>
		</td>
		<td>
			<?php echo $priority['Priority']['order']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $priority['Priority']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $priority['Priority']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $priority['Priority']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
<?php echo $this->element('cboxbottom'); ?>
<?php echo $this->element('pagination_links'); ?>
<div id="toolbar">
	<ul>
		<li><div align="center"><?php echo $html->link('New Priority', array('action'=>'add'), array('id'=>'tb-button', 'class'=>'tb-normal')); ?></div></li>
	</ul>
</div>