<?php echo $form->create('Event');?>
<?php
	echo $this->element('cboxtop');
    	echo $form->input('name', array('class' => 'form', 'label' => null));
    echo $this->element('cboxbottom');
    echo $this->element('cboxtop');
    	echo $form->input('event_date', array('class' => 'form', 'label' => 'Event Date/Time'));
	echo $this->element('cboxbottom');
	echo $this->element('cboxtop');
    	echo $form->input('notes', array('class' => 'form', 'label' => null));
    echo $this->element('cboxbottom');
    echo $this->element('cboxtop');
    	echo $form->input('alert_date', array('class' => 'form', 'label' => 'Alert Date'));
	echo $this->element('cboxbottom');
    echo $this->element('cboxtop');
    	echo $form->input('User', array('class' => 'form', 'label' => 'Recipients'));
    echo $this->element('cboxbottom');
?>
<?=$form->end('Submit');?>
