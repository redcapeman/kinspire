<?php echo $form->create('Priority');?>
	<?php
echo $this->element('box/top', array('type'=>'body'));
		echo $form->input('name', array('class'=>'form', 'label'=>null));
echo $this->element('box/bottom', array('type'=>'body'));
echo $this->element('box/top', array('type'=>'body'));
		echo $form->input('order', array('class'=>'form', 'label'=>null));
echo $this->element('box/bottom', array('type'=>'body'));
echo $this->element('box/top', array('type'=>'body'));
		echo $form->input('icon_id', array('class'=>'form', 'label'=>null));
		echo $html->link('View Icons', '/img/icons/index_abc.png', array('target'=>'_blank'));
echo $this->element('box/bottom', array('type'=>'body'));
	?>
<?php echo $form->end('Submit');?>
