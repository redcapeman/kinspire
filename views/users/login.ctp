<?php if  ($session->check('Message.auth')) $session->flash('auth'); ?>

<?php echo $form->create('User', array('action' => 'login')); ?>

<?php echo $this->element('cboxtop'); ?>
	<?php
		echo $form->input('username', array('class'=>'form'));
	?>
<?php echo $this->element('cboxbottom'); ?>

<?php echo $this->element('cboxtop'); ?>
	<?php
		echo $form->input('password', array('class'=>'form'));
	?>
<?php echo $this->element('cboxbottom'); ?>

<?php echo $form->end('Login'); ?>