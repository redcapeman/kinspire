<?php echo $form->create('Event');?>
<?php
		echo $form->input('id', array('type' => 'hidden'));
	echo $this->element('box/top', array('type'=>'body'));
    	echo $form->input('name', array('class' => 'form', 'label' => null));
    echo $this->element('box/bottom', array('type'=>'body'));
    echo $this->element('box/top', array('type'=>'body'));
    	echo $form->input('event_date', array('class' => 'form', 'label' => 'Event Date/Time'));
	echo $this->element('box/bottom', array('type'=>'body'));
	echo $this->element('box/top', array('type'=>'body'));
    	echo $form->input('notes', array('class' => 'form', 'label' => null));
    echo $this->element('box/bottom', array('type'=>'body'));
    echo $this->element('box/top', array('type'=>'body'));
    	echo $form->input('alert_date', array('class' => 'form', 'label' => 'Alert Date'));
	echo $this->element('box/bottom', array('type'=>'body'));
    echo $this->element('box/top', array('type'=>'body'));
    	echo $form->input('User', array('class' => 'form', 'label' => 'Recipients'));
    echo $this->element('box/bottom', array('type'=>'body'));
?>
<? echo $form->end('Submit');?>
