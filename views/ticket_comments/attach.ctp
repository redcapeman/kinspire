<?php echo $form->create('Upload', array('action' => 'add', 'type' => 'file')); ?>
<?php
    echo $this->element('box/top', array('type'=>'body'));
    echo $form->label('Browse File to Attach');
    echo $form->file('File');
    echo $form->input('ticket_comment_id', array('type' => 'hidden', 'value' => $id));
    echo $this->element('box/bottom', array('type'=>'body'));
?>
<?php 
	echo $form->submit('Upload');
	echo $form->end();
?>
<?php
if(empty($files)){
?>
<table cellpadding="0" cellspacing="0">
	<tr>
	<th><?php echo __('Id', true); ?></th>
	<th><?php echo __('Name', true); ?></th>
	<th><?php echo __('Actions', true); ?></th>
	</tr>
	<tr>
		<td colspan="3"><?php echo __('No File Attachement', true); ?></td>
	</tr>
</table>
<?php
	} else {
?>
<?php echo $this->element('box/top', array('type'=>'body')); ?><table cellpadding="0" cellspacing="0">
	<tr>
	<th><?php echo __('Id', true); ?></th>
	<th><?php echo __('Name', true); ?></th>
	<th><?php echo __('Actions', true); ?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($files as $file):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $file['Upload']['id']; ?>
		</td>
		<td>
			<?php echo $file['Upload']['name']; ?>
		</td>
		<?php if ($session->read('Auth.User.group_id') == 1) : ?>
			<td class="actions">
			<?php echo $html->link(__('Download', true), array('plugin' => 'file', 'controller' => 'uploads', 'action'=>'download', $file['Upload']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('plugin' => 'file', 'controller' => 'uploads', 'action'=>'delete', $file['Upload']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $file['Upload']['id'])); ?>
			</td>
		<?php endif; ?>
	</tr>
<?php endforeach; } ?>
	</table>
<?php echo $this->element('box/bottom', array('type'=>'body')); ?>  
