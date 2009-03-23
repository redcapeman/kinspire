<?php echo $form->create('User');?>
<div class="reset"></div>

	<div class="labels">
		<?php echo $this->element('box/top', array('type'=>'title')); ?>
			<strong>Name</strong>
		<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
		<?php echo $this->element('box/top', array('type'=>'body')); ?>
			Enter a name for this user.
		<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	</div>
	<?php echo $this->element('box/top', array('type'=>'body',)); ?>
		<?php echo $form->input('name', array('class'=>'form', 'label'=>'')); ?>
	<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	<div class="reset"></div>

	<div class="labels">
		<?php echo $this->element('box/top', array('type'=>'title')); ?>
			<strong>Username</strong>
		<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
		<?php echo $this->element('box/top', array('type'=>'body')); ?>
			Enter a username for this user.
		<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	</div>
	<?php echo $this->element('box/top', array('type'=>'body',)); ?>
		<?php echo $form->input('username', array('class'=>'form', 'label'=>'')); ?>
	<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	<div class="reset"></div>

	<div class="labels">
		<?php echo $this->element('box/top', array('type'=>'title')); ?>
			<strong>New Password</strong>
		<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
		<?php echo $this->element('box/top', array('type'=>'body')); ?>
			Enter a password for this user.
		<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	</div>
	<?php echo $this->element('box/top', array('type'=>'body',)); ?>
		<?php echo $form->input('new_password',  array('class' => 'form', 'type' => 'password', 'size' => '20', 'label' =>'') ); ?>
	<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	<div class="reset"></div>

	<div class="labels">
		<?php echo $this->element('box/top', array('type'=>'title')); ?>
			<strong>Confirmation Password</strong>
		<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
		<?php echo $this->element('box/top', array('type'=>'body')); ?>
			Re-Enter the password for this user for confirmation.
		<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	</div>
	<?php echo $this->element('box/top', array('type'=>'body',)); ?>
		<?php echo $form->input('confirm_password',  array('class' => 'form', 'type' => 'password', 'size' => '20', 'label' =>'') ); ?>
	<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	<div class="reset"></div>

	<div class="labels">
		<?php echo $this->element('box/top', array('type'=>'title')); ?>
			<strong>Group</strong>
		<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
		<?php echo $this->element('box/top', array('type'=>'body')); ?>
			Select a group for this user.
		<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	</div>
	<?php echo $this->element('box/top', array('type'=>'body',)); ?>
		<?php echo $form->input('group_id', array('class'=>'form', 'label'=>'')); ?>
	<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	<div class="reset"></div>
<?php echo $form->end('Submit');?>