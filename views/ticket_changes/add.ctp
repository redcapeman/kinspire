<?php echo $form->create('TicketChange', array('action'=>'add'));?>
	<?php
echo $this->element('cboxtop');
		echo $form->input('ticket_id', array('class'=>'form', 'label'=>null));
echo $this->element('cboxbottom');
echo $this->element('cboxtop');
		echo $form->input('user_id', array('class'=>'form', 'label'=>null));
echo $this->element('cboxbottom');
echo $this->element('cboxtop');
		echo $form->input('description', array('class'=>'form', 'label'=>null));
echo $this->element('cboxbottom');
echo $this->element('cboxtop');
		echo $form->input('resolution', array('class'=>'form', 'label'=>null));
echo $this->element('cboxbottom');
echo $this->element('cboxtop');
		echo $form->input('status_id', array('class'=>'form', 'label'=>null));
echo $this->element('cboxbottom');
echo $this->element('cboxtop');
	if ($this->data['TicketChange']['due']) {
		echo $form->input('is_due', array('type'=>'checkbox', 'checked'=>'true', 'class'=>'form', 'label'=>null));
	} else {
		echo $form->input('is_due', array('type'=>'checkbox', 'class'=>'form', 'label'=>null));
	}
echo $this->element('cboxbottom');
echo $this->element('cboxtop');
		echo $form->input('due', array('class'=>'form', 'label'=>null));
echo $this->element('cboxbottom');
echo $this->element('cboxtop');
	if ($this->data['TicketChange']['completed']) {
		echo $form->input('is_completed', array('type'=>'checkbox', 'checked'=>'true', 'class'=>'form', 'label'=>null));
	} else {
		echo $form->input('is_completed', array('type'=>'checkbox', 'class'=>'form', 'label'=>null));
	}
echo $this->element('cboxbottom');
echo $this->element('cboxtop');
		echo $form->input('completed', array('class'=>'form', 'label'=>null));
echo $this->element('cboxbottom');
	?>
<?php echo $form->end('Submit');?>
<?php debug($this->data); ?>
