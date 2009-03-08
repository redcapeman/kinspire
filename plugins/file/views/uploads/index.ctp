<?php echo $this->element('pagination_links'); ?>
<?php echo $this->element('cboxtop'); ?>	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $paginator->sort('id');?></th>
			<th><?php echo $paginator->sort('name');?></th>
			<th><?php echo $paginator->sort('folder');?></th>
			<th><?php echo $paginator->sort('created');?></th>
			<th><?php echo $paginator->sort('updated');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($uploads as $upload):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $upload['Upload']['id']; ?>
		</td>
		<td>
			<?php echo $upload['Upload']['name']; ?>
		</td>
		<td>
			<?php echo $upload['UploadFolder']['name']; ?>
		</td>
		<td>
			<?php echo $upload['Upload']['created']; ?>
		</td>
		<td>
			<?php echo $upload['Upload']['updated']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('Download', true), array('action'=>'download', $upload['Upload']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $upload['Upload']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $upload['Upload']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $upload['Upload']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
<?php echo $this->element('cboxbottom'); ?>
<?php echo $this->element('pagination_links'); ?>
<div id="toolbar">
	<ul>
		<li><div align="center"><?php echo $html->link('New Upload', array('action'=>'add'), array('id'=>'tb-button', 'class'=>'tb-normal')); ?></div></li>
	</ul>
</div>
