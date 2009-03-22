<?php echo $form->create('Group');?>
	<?php
echo $this->element('box/top', array('type'=>'body'));
		echo $form->input('name', array('class'=>'form', 'label'=>null));
		echo $form->input('parent_id', array( 'empty' => true ));
echo $this->element('box/bottom', array('type'=>'body'));
	?>
<?php echo $form->end('Submit');?>
