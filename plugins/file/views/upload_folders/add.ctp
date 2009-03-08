<?php echo $form->create('UploadFolder'); ?>
<?php
	echo $this->element('cboxtop');
		echo $form->input('name', array('class' => 'form', 'label' => null));
    echo $this->element('cboxbottom');
    echo $this->element('cboxtop');
    	echo $form->input('Folders', array('label'=> 'Parent Folder' ,'name' => 'data[UploadFolder][parent_id]', 'empty' => '-No Parent-' ));
    echo $this->element('cboxbottom');
?>
<?php 
	echo $form->end('Submit');
?>
