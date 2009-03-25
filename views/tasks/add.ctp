<?php echo $form->create('Task');?>
<div class="reset"></div>

	<div class="labels">
		<?php echo $this->element('box/top', array('type'=>'title')); ?>
			<strong>Project</strong>
		<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
		<?php echo $this->element('box/top', array('type'=>'body')); ?>
			Select a project for this task.
		<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	</div>
	<?php echo $this->element('box/top', array('type'=>'body',)); ?>
		<?php echo $form->input('project_id', array('class'=>'form', 'label'=>'')); ?>
	<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	<div class="reset"></div>
	
	<div class="labels">
		<?php echo $this->element('box/top', array('type'=>'title')); ?>
			<strong>Reporter</strong>
		<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
		<?php echo $this->element('box/top', array('type'=>'body')); ?>
			The name of the user reporting this task.
		<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	</div>
	<?php echo $this->element('box/top', array('type'=>'body',)); ?>
		<?php echo $form->input('reporter_id', array('class'=>'form', 'label'=>'')); ?>
	<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	<div class="reset"></div>
	
	<div class="labels">
		<?php echo $this->element('box/top', array('type'=>'title')); ?>
			<strong>Title</strong>
		<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
		<?php echo $this->element('box/top', array('type'=>'body')); ?>
			Enter a title for this task.
		<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	</div>
	<?php echo $this->element('box/top', array('type'=>'body',)); ?>
		<?php echo $form->input('title', array('class'=>'form', 'label'=>'')); ?>
	<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	<div class="reset"></div>
	
	<div class="labels">
		<?php echo $this->element('box/top', array('type'=>'title')); ?>
			<strong>Description</strong>
		<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
		<?php echo $this->element('box/top', array('type'=>'body')); ?>
			Enter a description for this task.
		<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	</div>
	<?php echo $this->element('box/top', array('type'=>'body',)); ?>
		<?php echo $form->input('TaskChange.0.description', array('class'=>'form', 'label'=>'')); ?>
	<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	<div class="reset"></div>
	
	<div class="labels">
		<?php echo $this->element('box/top', array('type'=>'title')); ?>
			<strong>Type</strong>
		<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
		<?php echo $this->element('box/top', array('type'=>'body')); ?>
			Select a task type.
		<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	</div>
	<?php echo $this->element('box/top', array('type'=>'body',)); ?>
		<?php echo $form->input('TaskChange.0.type_id', array('class'=>'form', 'label'=>'')); ?>
	<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	<div class="reset"></div>
	
	<div class="labels">
		<?php echo $this->element('box/top', array('type'=>'title')); ?>
			<strong>Severity</strong>
		<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
		<?php echo $this->element('box/top', array('type'=>'body')); ?>
			Select a task severity.
		<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	</div>
	<?php echo $this->element('box/top', array('type'=>'body',)); ?>
		<?php echo $form->input('TaskChange.0.severity_id', array('class'=>'form', 'label'=>'')); ?>
	<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	<div class="reset"></div>
	
	<div class="labels">
		<?php echo $this->element('box/top', array('type'=>'title')); ?>
			<strong>Priority</strong>
		<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
		<?php echo $this->element('box/top', array('type'=>'body')); ?>
			Select a task priority.
		<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	</div>
	<?php echo $this->element('box/top', array('type'=>'body',)); ?>
		<?php echo $form->input('TaskChange.0.priority_id', array('class'=>'form', 'label'=>'')); ?>
	<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	<div class="reset"></div>
	
	<div class="labels">
		<?php echo $this->element('box/top', array('type'=>'title')); ?>
			<strong>Status</strong>
		<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
		<?php echo $this->element('box/top', array('type'=>'body')); ?>
			Select a task status.
		<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	</div>
	<?php echo $this->element('box/top', array('type'=>'body',)); ?>
		<?php echo $form->input('TaskChange.0.status_id', array('class'=>'form', 'label'=>'')); ?>
	<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	<div class="reset"></div>
	
	<div class="labels">
		<?php echo $this->element('box/top', array('type'=>'title')); ?>
			<strong>Element</strong>
		<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
		<?php echo $this->element('box/top', array('type'=>'body')); ?>
			Select a project element.
		<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	</div>
	<?php echo $this->element('box/top', array('type'=>'body',)); ?>
		<?php echo $form->input('TaskChange.0.element_id', array('class'=>'form', 'label'=>'')); ?>
	<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	<div class="reset"></div>
	
	<div class="labels">
		<?php echo $this->element('box/top', array('type'=>'title')); ?>
			<strong>Version</strong>
		<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
		<?php echo $this->element('box/top', array('type'=>'body')); ?>
			Select a project version.
		<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	</div>
	<?php echo $this->element('box/top', array('type'=>'body',)); ?>
		<?php echo $form->input('TaskChange.0.version_id', array('class'=>'form', 'label'=>'')); ?>
	<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	<div class="reset"></div>
	
	<div class="labels">
		<?php echo $this->element('box/top', array('type'=>'title')); ?>
			<strong>Milestone</strong>
		<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
		<?php echo $this->element('box/top', array('type'=>'body')); ?>
			Select a project milestone.
		<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	</div>
	<?php echo $this->element('box/top', array('type'=>'body',)); ?>
		<?php echo $form->input('TaskChange.0.milestone_id', array('class'=>'form', 'label'=>'')); ?>
	<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	<div class="reset"></div>
	
	<div class="labels">
		<?php echo $this->element('box/top', array('type'=>'title')); ?>
			<strong>Has a Due Date?</strong>
		<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
		<?php echo $this->element('box/top', array('type'=>'body')); ?>
			Check this box to assign the due date below.
		<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	</div>
	<?php echo $this->element('box/top', array('type'=>'body',)); ?>
		<?php echo $form->input('is_due', array('type'=>'checkbox', 'class'=>'form', 'label'=>'')); ?>
	<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	<div class="reset"></div>
	
	<div class="labels">
		<?php echo $this->element('box/top', array('type'=>'title')); ?>
			<strong>Milestone</strong>
		<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
		<?php echo $this->element('box/top', array('type'=>'body')); ?>
			Select a due date if applicable.
		<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	</div>
	<?php echo $this->element('box/top', array('type'=>'body',)); ?>
		<?php echo $form->input('TaskChange.0.due', array('class'=>'form', 'label'=>'')); ?>
	<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	<div class="reset"></div>

<?php echo $form->end('Submit');?>
