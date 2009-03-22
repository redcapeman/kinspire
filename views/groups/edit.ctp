<?php echo $form->create('Group');?>
	<?php
echo $this->element('box/top', array('type'=>'body'));
		echo $form->input('name', array('class'=>'form', 'label'=>null));
echo $this->element('box/bottom', array('type'=>'body'));
		echo $form->input('id');
	?>
<?php echo $form->end('Submit');?>
