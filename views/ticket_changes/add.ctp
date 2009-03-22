<?php echo $form->create('TicketChange', array('action'=>'add'));?>
	<?php
echo $this->element('box/top', array('type'=>'body'));
		echo $form->input('ticket_id', array('class'=>'form', 'label'=>null));
echo $this->element('box/bottom', array('type'=>'body'));
echo $this->element('box/top', array('type'=>'body'));
		echo $form->input('user_id', array('class'=>'form', 'label'=>null));
echo $this->element('box/bottom', array('type'=>'body'));
echo $this->element('box/top', array('type'=>'body'));
		echo $form->input('description', array('class'=>'form', 'label'=>null));
echo $this->element('box/bottom', array('type'=>'body'));
echo $this->element('box/top', array('type'=>'body'));
		echo $form->input('resolution', array('class'=>'form', 'label'=>null));
echo $this->element('box/bottom', array('type'=>'body'));
echo $this->element('box/top', array('type'=>'body'));
		echo $form->input('Ticket.owner_id', array('class'=>'form', 'label'=>null));
echo $this->element('box/bottom', array('type'=>'body'));
echo $this->element('box/top', array('type'=>'body'));
		echo $form->input('type_id', array('class'=>'form', 'label'=>null));
echo $this->element('box/bottom', array('type'=>'body'));
echo $this->element('box/top', array('type'=>'body'));
		echo $form->input('element_id', array('class'=>'form', 'label'=>null));
echo $this->element('box/bottom', array('type'=>'body'));
echo $this->element('box/top', array('type'=>'body'));
		echo $form->input('severity_id', array('class'=>'form', 'label'=>null));
echo $this->element('box/bottom', array('type'=>'body'));
echo $this->element('box/top', array('type'=>'body'));
		echo $form->input('priority_id', array('class'=>'form', 'label'=>null));
echo $this->element('box/bottom', array('type'=>'body'));
echo $this->element('box/top', array('type'=>'body'));
		echo $form->input('version_id', array('class'=>'form', 'label'=>null));
echo $this->element('box/bottom', array('type'=>'body'));
echo $this->element('box/top', array('type'=>'body'));
		echo $form->input('milestone_id', array('class'=>'form', 'label'=>null));
echo $this->element('box/bottom', array('type'=>'body'));
echo $this->element('box/top', array('type'=>'body'));
		echo $form->input('status_id', array('class'=>'form', 'label'=>null));
echo $this->element('box/bottom', array('type'=>'body'));
echo $this->element('box/top', array('type'=>'body'));
	if ($this->data['TicketChange']['due']) {
		echo $form->input('is_due', array('type'=>'checkbox', 'checked'=>'true', 'class'=>'form', 'label'=>null));
	} else {
		echo $form->input('is_due', array('type'=>'checkbox', 'class'=>'form', 'label'=>null));
	}
echo $this->element('box/bottom', array('type'=>'body'));
echo $this->element('box/top', array('type'=>'body'));
		echo $form->input('due', array('class'=>'form', 'label'=>null));
echo $this->element('box/bottom', array('type'=>'body'));
echo $this->element('box/top', array('type'=>'body'));
	if ($this->data['TicketChange']['completed']) {
		echo $form->input('is_completed', array('type'=>'checkbox', 'checked'=>'true', 'class'=>'form', 'label'=>null));
	} else {
		echo $form->input('is_completed', array('type'=>'checkbox', 'class'=>'form', 'label'=>null));
	}
echo $this->element('box/bottom', array('type'=>'body'));
echo $this->element('box/top', array('type'=>'body'));
		echo $form->input('completed', array('class'=>'form', 'label'=>null));
echo $this->element('box/bottom', array('type'=>'body'));
	?>
<?php echo $form->end('Submit');?>
