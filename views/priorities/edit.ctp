<?php echo $form->create('Priority');?>
	<?php
echo $this->element('cboxtop');
		echo $form->input('name', array('class'=>'form', 'label'=>null));
echo $this->element('cboxbottom');
echo $this->element('cboxtop');
		echo $form->input('order', array('class'=>'form', 'label'=>null));
echo $this->element('cboxbottom');
	?>
<?php echo $form->end('Submit');?>
