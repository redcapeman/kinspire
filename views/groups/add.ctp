<?php echo $form->create('Group');?>
	<?php
echo $this->element('cboxtop');
		echo $form->input('name', array('class'=>'form', 'label'=>null));
		echo $form->input('parent_id', array( 'empty' => true ));
echo $this->element('cboxbottom');
	?>
<?php echo $form->end('Submit');?>
