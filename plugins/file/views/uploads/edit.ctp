<?php echo $form->create('Upload'); ?>
<?php
    echo $this->element('cboxtop');
    echo $form->input('Folders', array('label'=>null, 'class' => 'form', 'name' => 'data[Upload][upload_folder_id]' ));
    echo $this->element('cboxbottom');
?>
<?php 
	echo $form->end('Submit');;
?>
