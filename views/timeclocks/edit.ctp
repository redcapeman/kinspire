<?php echo $form->create('Timeclock');?>
	<?php
echo $this->element('cboxtop');
		echo $form->input('user_id', array('class'=>'form', 'label'=>null));
echo $this->element('cboxbottom');
echo $this->element('cboxtop');
		echo $form->input('project_id', array('class'=>'form', 'label'=>null));
echo $this->element('cboxbottom');
echo $this->element('cboxtop');
		echo $form->input('milestone_id', array('class'=>'form', 'label'=>null));
echo $this->element('cboxbottom');
echo $this->element('cboxtop');
		echo $form->input('element_id', array('class'=>'form', 'label'=>null));
echo $this->element('cboxbottom');
echo $this->element('cboxtop');
		echo $form->input('clocked_in', array('class'=>'form', 'label'=>null));
echo $this->element('cboxbottom');
echo $this->element('cboxtop');
		echo $form->input('clocked_out', array('class'=>'form', 'label'=>null));
echo $this->element('cboxbottom');
	?>
<?php echo $form->end('Submit');?>
