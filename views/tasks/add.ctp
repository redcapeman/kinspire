<?php echo $form->create('Task');?>
	<?php
echo $this->element('box/top', array('type'=>'body'));
		echo $form->input('project_id', array('class'=>'form', 'label'=>null));
echo $this->element('box/bottom', array('type'=>'body'));
echo $this->element('box/top', array('type'=>'body'));
		echo $form->input('reporter_id', array('class'=>'form', 'label'=>null));
echo $this->element('box/bottom', array('type'=>'body'));
echo $this->element('box/top', array('type'=>'body'));
		echo $form->input('title', array('class'=>'form', 'label'=>null));
echo $this->element('box/bottom', array('type'=>'body'));
echo $this->element('box/top', array('type'=>'body'));
		echo $form->input('TaskChange.0.description', array('class'=>'form', 'label'=>null));
echo $this->element('box/bottom', array('type'=>'body'));
echo $this->element('box/top', array('type'=>'body'));
		echo $form->input('TaskChange.0.type_id', array('class'=>'form', 'label'=>null));
echo $this->element('box/bottom', array('type'=>'body'));
echo $this->element('box/top', array('type'=>'body'));
		echo $form->input('TaskChange.0.element_id', array('class'=>'form', 'label'=>null));
echo $this->element('box/bottom', array('type'=>'body'));
echo $this->element('box/top', array('type'=>'body'));
		echo $form->input('TaskChange.0.severity_id', array('class'=>'form', 'label'=>null));
echo $this->element('box/bottom', array('type'=>'body'));
echo $this->element('box/top', array('type'=>'body'));
		echo $form->input('TaskChange.0.priority_id', array('class'=>'form', 'label'=>null));
echo $this->element('box/bottom', array('type'=>'body'));
echo $this->element('box/top', array('type'=>'body'));
		echo $form->input('TaskChange.0.version_id', array('class'=>'form', 'label'=>null));
echo $this->element('box/bottom', array('type'=>'body'));
echo $this->element('box/top', array('type'=>'body'));
		echo $form->input('TaskChange.0.milestone_id', array('class'=>'form', 'label'=>null));
echo $this->element('box/bottom', array('type'=>'body'));
echo $this->element('box/top', array('type'=>'body'));
		echo $form->input('TaskChange.0.status_id', array('class'=>'form', 'label'=>null));
echo $this->element('box/bottom', array('type'=>'body'));
echo $this->element('box/top', array('type'=>'body'));
		echo $form->input('is_due', array('type'=>'checkbox', 'class'=>'form', 'label'=>null));
echo $this->element('box/bottom', array('type'=>'body'));
echo $this->element('box/top', array('type'=>'body'));
		echo $form->input('TaskChange.0.due', array('class'=>'form', 'label'=>null));
echo $this->element('box/bottom', array('type'=>'body'));
	?>
<?php echo $form->end('Submit');?>
