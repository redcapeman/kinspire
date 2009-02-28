<?php echo $form->create('Ticket');?>
	<?php
echo $this->element('cboxtop');
		echo $form->input('title', array('class'=>'form', 'label'=>null));
echo $this->element('cboxbottom');
		echo $form->input('id', array('type'=>'hidden'));
	?>
<?php echo $form->end('Submit');?>