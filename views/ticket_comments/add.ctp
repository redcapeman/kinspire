<?php echo $form->create('TicketComment');?>
	<?php
echo $this->element('cboxtop');
		echo $form->input('ticket_id', array('class'=>'form', 'label'=>null));
echo $this->element('cboxbottom');
echo $this->element('cboxtop');
		echo $form->input('user_id', array('class'=>'form', 'label'=>null));
echo $this->element('cboxbottom');
echo $this->element('cboxtop');
		echo $form->input('title', array('class'=>'form', 'label'=>null));
echo $this->element('cboxbottom');
echo $this->element('cboxtop');
		echo $form->input('body', array('class'=>'form', 'label'=>null));
echo $this->element('cboxbottom');
	?>
<?php echo $form->end('Submit');?>
