<?php echo $form->create('Milestone');?>
<div class="reset"></div>

	<div class="labels">
		<?php echo $this->element('box/top', array('type'=>'title')); ?>
			<strong>Name</strong>
		<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
		<?php echo $this->element('box/top', array('type'=>'body')); ?>
			Enter a name for this milestone.
		<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	</div>
	<?php echo $this->element('box/top', array('type'=>'body',)); ?>
		<?php echo $form->input('name', array('class'=>'form', 'label'=>'')); ?>
	<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	<div class="reset"></div>

	<div class="labels">
		<?php echo $this->element('box/top', array('type'=>'title')); ?>
			<strong>Codename</strong>
		<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
		<?php echo $this->element('box/top', array('type'=>'body')); ?>
			Enter a codename for this milestone.
		<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	</div>
	<?php echo $this->element('box/top', array('type'=>'body',)); ?>
		<?php echo $form->input('codename', array('class'=>'form', 'label'=>'')); ?>
	<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	<div class="reset"></div>

	<div class="labels">
		<?php echo $this->element('box/top', array('type'=>'title')); ?>
			<strong>Description</strong>
		<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
		<?php echo $this->element('box/top', array('type'=>'body')); ?>
			Enter a description for this milestone.
		<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	</div>
	<?php echo $this->element('box/top', array('type'=>'body',)); ?>
		<?php echo $form->input('description', array('class'=>'form', 'label'=>'')); ?>
	<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	<div class="reset"></div>

	<div class="labels">
		<?php echo $this->element('box/top', array('type'=>'title')); ?>
			<strong>Owner</strong>
		<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
		<?php echo $this->element('box/top', array('type'=>'body')); ?>
			Select an owner for this milestone.
		<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	</div>
	<?php echo $this->element('box/top', array('type'=>'body',)); ?>
		<?php echo $form->input('owner_id', array('class'=>'form', 'label'=>'')); ?>
	<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	<div class="reset"></div>

	<div class="labels">
		<?php echo $this->element('box/top', array('type'=>'title')); ?>
			<strong>Project</strong>
		<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
		<?php echo $this->element('box/top', array('type'=>'body')); ?>
			Select a project for this milestone.
		<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	</div>
	<?php echo $this->element('box/top', array('type'=>'body',)); ?>
		<?php echo $form->input('project_id', array('class'=>'form', 'label'=>'')); ?>
	<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	<div class="reset"></div>

	<div class="labels">
		<?php echo $this->element('box/top', array('type'=>'title')); ?>
			<strong>Due</strong>
		<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
		<?php echo $this->element('box/top', array('type'=>'body')); ?>
			Select a due date for this milestone.
		<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	</div>
	<?php echo $this->element('box/top', array('type'=>'body',)); ?>
		<?php echo $form->input('due', array('class'=>'form', 'label'=>'')); ?>
	<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	<div class="reset"></div>
<?php echo $form->end('Submit');?>