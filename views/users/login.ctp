<?php if  ($session->check('Message.auth')) $session->flash('auth'); ?>

<?php echo $form->create('User', array('action' => 'login')); ?>

<?php echo $this->element('box/top', array('type'=>'body')); ?>
	<?php
		echo $form->input('username', array('class'=>'form'));
	?>
<?php echo $this->element('box/bottom', array('type'=>'body')); ?>

<?php echo $this->element('box/top', array('type'=>'body')); ?>
	<?php
		echo $form->input('password', array('class'=>'form'));
	?>
<?php echo $this->element('box/bottom', array('type'=>'body')); ?>

<?php echo $form->end('Login'); ?>