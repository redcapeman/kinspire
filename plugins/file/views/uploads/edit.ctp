<?php echo $form->create('Upload'); ?>
<?php
    echo $this->element('box/top', array('type'=>'body'));
    echo $form->input('Folders', array('label'=>null, 'class' => 'form', 'name' => 'data[Upload][upload_folder_id]' ));
    echo $this->element('box/bottom', array('type'=>'body'));
?>
<?php 
	echo $form->end('Submit');;
?>
