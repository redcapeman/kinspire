<?php echo $form->create('Upload', array('action' => 'add', 'type' => 'file')); ?>
<?php
    echo $this->element('box/top', array('type'=>'body'));
    echo $form->label('Browse File to Upload');
    echo $form->file('File');
    echo $this->element('box/bottom', array('type'=>'body'));
    echo $this->element('box/top', array('type'=>'body'));
    echo $form->input('Folders', array('label'=>null, 'class' => 'form', 'name' => 'data[Upload][upload_folder_id]' ));
    echo $this->element('box/bottom', array('type'=>'body'));
?>
<?php 
	echo $form->submit('Upload');
	echo $form->end();
?>
