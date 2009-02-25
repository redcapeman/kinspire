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
	foreach ($severities as $severity):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $severity['Severity']['id']; ?>
		</td>
		<td>
			<?php echo $severity['Severity']['name']; ?>
		</td>
		<td>
			<?php echo $severity['Severity']['order']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $severity['Severity']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $severity['Severity']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $severity['Severity']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
<?php echo $this->element('cboxbottom'); ?>
<?php echo $this->element('pagination_links'); ?>
<div id="toolbar">
	<ul>
		<li><div align="center"><?php echo $html->link('New Severity', array('action'=>'add'), array('id'=>'tb-button', 'class'=>'tb-normal')); ?></div></li>
	</ul>
</div>