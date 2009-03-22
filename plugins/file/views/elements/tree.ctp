<?php echo $this->element('box/top', array('type'=>'body')); ?>
<?php
extract ($data);
	echo $UploadFolder['name'];
	echo '&nbsp;&nbsp;-&nbsp;';
	echo $html->link(__('delete', true), array('action' => 'delete', $UploadFolder['id'])); 
	echo '&nbsp;|&nbsp;';
	echo $html->link(__('edit', true), array('action' => 'edit', $UploadFolder['id']));
	echo '&nbsp;|&nbsp;';
	echo $html->link(__('files', true), array('action' => 'files', $UploadFolder['id']));
?>
<?php echo $this->element('box/bottom', array('type'=>'body')); ?>

