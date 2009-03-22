<?php echo $form->create('TaskComment');?>
	<?php
echo $this->element('box/top', array('type'=>'body'));
		echo $form->input('task_id', array('class'=>'form', 'label'=>null));
echo $this->element('box/bottom', array('type'=>'body'));
echo $this->element('box/top', array('type'=>'body'));
		echo $form->input('user_id', array('class'=>'form', 'label'=>null));
echo $this->element('box/bottom', array('type'=>'body'));
echo $this->element('box/top', array('type'=>'body'));
		echo $form->input('title', array('class'=>'form', 'label'=>null));
echo $this->element('box/bottom', array('type'=>'body'));
echo $this->element('box/top', array('type'=>'body'));
		echo $form->input('body', array('class'=>'form', 'label'=>null));
echo $this->element('box/bottom', array('type'=>'body'));
	?>
<?php echo $form->end('Submit');?>
