<?php echo $form->create('Type');?>
	<?php
echo $this->element('cboxtop');
		echo $form->input('name', array('class'=>'form', 'label'=>null));
echo $this->element('cboxbottom');
echo $this->element('cboxtop');
		echo $form->input('order', array('class'=>'form', 'label'=>null));
echo $this->element('cboxbottom');
echo $this->element('cboxtop');
		echo $form->input('icon_id', array('class'=>'form', 'label'=>null));
		echo $html->link('View Icons', '/img/icons/index_abc.png', array('target'=>'_blank'));
echo $this->element('cboxbottom');
		echo $form->input('id');
	?>
<?php echo $form->end('Submit');?>
