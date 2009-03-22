<?php echo $form->create('Project');?>
	<?php
echo $this->element('box/top', array('type'=>'body'));
		echo $form->input('name', array('class'=>'form', 'label'=>null));
echo $this->element('box/bottom', array('type'=>'body'));
echo $this->element('box/top', array('type'=>'body'));
		echo $form->input('description', array('class'=>'form', 'label'=>null));
echo $this->element('box/bottom', array('type'=>'body'));
echo $this->element('box/top', array('type'=>'body'));
		echo $form->input('client_id', array('class'=>'form', 'label'=>null));
echo $this->element('box/bottom', array('type'=>'body'));
echo $this->element('box/top', array('type'=>'body'));
		echo $form->input('owner_id', array('class'=>'form', 'label'=>null));
echo $this->element('box/bottom', array('type'=>'body'));
echo $this->element('box/top', array('type'=>'body'));
		echo $form->input('is_active', array('class'=>'form', 'label'=>null));
echo $this->element('box/bottom', array('type'=>'body'));
		echo $form->input('id');
	?>
<?php echo $form->end('Submit');?>
