<?php if ($user['Group']['name']): ?>
	<?php echo $this->element('box/top', array('type'=>'body')); ?>
		Group
	<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
	<?php echo $this->element('box/top', array('type'=>'body')); ?>
		<?php echo $user['Group']['name']; ?>
	<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
<?php endif; ?>
<?php if ($user['User']['id']): ?>
	<?php echo $this->element('box/top', array('type'=>'body')); ?>
		Id
	<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
	<?php echo $this->element('box/top', array('type'=>'body','size'=>'medium','locale'=>'left')); ?>
		<?php echo $user['User']['id']; ?>
	<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	<div class="reset"></div>
<?php endif; ?>
<?php if ($user['User']['name']): ?>
	<?php echo $this->element('box/top', array('type'=>'body')); ?>
		Name
	<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
	<?php echo $this->element('box/top', array('type'=>'body','size'=>'medium','locale'=>'left')); ?>
		<?php echo $user['User']['name']; ?>
	<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	<div class="reset"></div>
<?php endif; ?>
<?php if ($user['User']['username']): ?>
	<?php echo $this->element('box/top', array('type'=>'body')); ?>
		Username
	<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
	<?php echo $this->element('box/top', array('type'=>'body','size'=>'medium','locale'=>'left')); ?>
		<?php echo $user['User']['username']; ?>
	<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	<div class="reset"></div>
<?php endif; ?>
<?php if ($user['User']['created']): ?>
	<?php echo $this->element('box/top', array('type'=>'body')); ?>
		Created
	<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
	<?php echo $this->element('box/top', array('type'=>'body','size'=>'medium','locale'=>'left')); ?>
		<?php echo $user['User']['created']; ?>
	<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	<div class="reset"></div>
<?php endif; ?>
<?php if ($user['User']['updated']): ?>
	<?php echo $this->element('box/top', array('type'=>'body')); ?>
		Updated
	<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
	<?php echo $this->element('box/top', array('type'=>'body','size'=>'medium','locale'=>'left')); ?>
		<?php echo $user['User']['updated']; ?>
	<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	<div class="reset"></div>
<?php endif; ?>
