<?php echo $form->create('Version');?>
	<?php
echo $this->element('cboxtop');
		echo $form->input('name', array('class'=>'form', 'label'=>null));
echo $this->element('cboxbottom');
echo $this->element('cboxtop');
		echo $form->input('description', array('class'=>'form', 'label'=>null));
echo $this->element('cboxbottom');
echo $this->element('cboxtop');
		echo $form->input('project_id', array('class'=>'form', 'label'=>null));
echo $this->element('cboxbottom');
	?>
<?php echo $form->end('Submit');?>
