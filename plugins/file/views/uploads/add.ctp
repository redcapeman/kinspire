<?php echo $form->create('Upload', array('action' => 'add', 'type' => 'file')); ?>
<?php
    echo $this->element('cboxtop');
    echo $form->label('Browse File to Upload');
    echo $form->file('File');
    echo $this->element('cboxbottom');
    echo $this->element('cboxtop');
    echo $form->input('Folders', array('label'=>null, 'class' => 'form', 'name' => 'data[Upload][upload_folder_id]' ));
    echo $this->element('cboxbottom');
?>
<?php 
	echo $form->submit('Upload');
	echo $form->end();
?>
