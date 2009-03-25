<?php echo $form->create('Severity');?>
<div class="reset"></div>

	<div class="labels">
		<?php echo $this->element('box/top', array('type'=>'title')); ?>
			<strong>Name</strong>
		<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
		<?php echo $this->element('box/top', array('type'=>'body')); ?>
			Enter a name for this severity.
		<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	</div>
	<?php echo $this->element('box/top', array('type'=>'body',)); ?>
		<?php echo $form->input('name', array('class'=>'form', 'label'=>'')); ?>
	<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	<div class="reset"></div>

	<div class="labels">
		<?php echo $this->element('box/top', array('type'=>'title')); ?>
			<strong>Name</strong>
		<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
		<?php echo $this->element('box/top', array('type'=>'body')); ?>
			Enter an order for this severity.
		<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	</div>
	<?php echo $this->element('box/top', array('type'=>'body',)); ?>
		<?php echo $form->input('order', array('class'=>'form', 'label'=>'')); ?>
	<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	<div class="reset"></div>

	<div class="labels">
		<?php echo $this->element('box/top', array('type'=>'title')); ?>
			<strong>Icon</strong>
		<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
		<?php echo $this->element('box/top', array('type'=>'body')); ?>
			Select an icon for this severity.<br>
			<?php echo $html->link('View Icons', '/img/icons/index_abc.png', array('target'=>'_blank')); ?>
		<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	</div>
	<?php echo $this->element('box/top', array('type'=>'body',)); ?>
		<?php echo $form->input('icon_id', array('class'=>'form', 'label'=>'')); ?>
	<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	<div class="reset"></div>
<?php echo $form->end('Submit');?>
