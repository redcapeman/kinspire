<?php echo $form->create('Ticket');?>
	<?php
echo $this->element('box/top', array('type'=>'body'));
		echo $form->input('title', array('class'=>'form', 'label'=>null));
echo $this->element('box/bottom', array('type'=>'body'));
		echo $form->input('id', array('type'=>'hidden'));
	?>
<?php echo $form->end('Submit');?>