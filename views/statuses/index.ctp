<?php echo $this->element('pagination_links'); ?>
<?php echo $this->element('box/top', array('type'=>'body')); ?>	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $paginator->sort('id');?></th>
			<th><?php echo $paginator->sort('name');?></th>
			<th><?php echo $paginator->sort('order');?></th>
			<th><?php echo $paginator->sort('icon');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($statuses as $status):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $status['Status']['id']; ?>
		</td>
		<td>
			<?php echo $status['Status']['name']; ?>
		</td>
		<td>
			<?php echo $status['Status']['order']; ?>
		</td>
		<td>
			<?php echo $html->image('icons/' . $icons[$status['Status']['icon_id']]); ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $status['Status']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $status['Status']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $status['Status']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
<?php echo $this->element('pagination_links'); ?>
<div id="toolbar">
	<ul>
		<li><div align="center"><?php echo $html->link('New Status', array('action'=>'add'), array('id'=>'tb-button', 'class'=>'tb-normal')); ?></div></li>
	</ul>
</div>