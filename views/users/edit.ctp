<?php echo $form->create('User');?>
	<?php
echo $this->element('cboxtop');
		echo $form->input('name', array('class'=>'form', 'label'=>null));
echo $this->element('cboxbottom');
echo $this->element('cboxtop');
		echo $form->input('username', array('class'=>'form', 'label'=>null));
echo $this->element('cboxbottom');
echo $this->element('cboxtop');
    	echo $form->input('new_password',  array('class' => 'form', 'type' => 'password', 'size' => '20', 'label' => null) );
echo $this->element('cboxbottom');
echo $this->element('cboxtop');
    	echo $form->input('confirm_password',  array('class' => 'form', 'type' => 'password', 'size' => '20', 'label' => null) );
echo $this->element('cboxbottom');
echo $this->element('cboxtop');
		echo $form->input('group_id', array('class'=>'form', 'label'=>null));
echo $this->element('cboxbottom');
		echo $form->input('id');
	?>
<?php echo $form->end('Submit');?>
