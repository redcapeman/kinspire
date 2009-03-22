<?php echo $form->create('UploadFolder'); ?>
<?php
	echo $this->element('box/top', array('type'=>'body'));
		echo $form->input('name', array('class' => 'form', 'label' => null));
    echo $this->element('box/bottom', array('type'=>'body'));
    echo $this->element('box/top', array('type'=>'body'));
    	echo $form->input('Folders', array('label'=> 'Parent Folder' ,'name' => 'data[UploadFolder][parent_id]', 'empty' => '-No Parent-' ));
    echo $this->element('box/bottom', array('type'=>'body'));
?>
<?php 
	echo $form->end('Submit');
?>
