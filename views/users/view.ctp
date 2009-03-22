<div class="right">
	<?php if ($user['Group']['name']): ?>
		<?php echo $this->element('box/top', array('type'=>'title','size'=>'small','locale'=>'right')); ?>
			Group
		<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
		<?php echo $this->element('box/top', array('type'=>'body','size'=>'small','locale'=>'right')); ?>
			<?php echo $user['Group']['name']; ?>
		<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	<?php endif; ?>
</div>

<div class="nullbox">
<?php if ($user['User']['id']): ?>
	<?php echo $this->element('box/top', array('type'=>'title','size'=>'medium','locale'=>'left')); ?>
		Id
	<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
	<?php echo $this->element('box/top', array('type'=>'body','size'=>'medium','locale'=>'left')); ?>
		<?php echo $user['User']['id']; ?>
	<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	<div class="reset"></div>
<?php endif; ?>
<?php if ($user['User']['name']): ?>
	<?php echo $this->element('box/top', array('type'=>'title','size'=>'medium','locale'=>'left')); ?>
		Name
	<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
	<?php echo $this->element('box/top', array('type'=>'body','size'=>'medium','locale'=>'left')); ?>
		<?php echo $user['User']['name']; ?>
	<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	<div class="reset"></div>
<?php endif; ?>
<?php if ($user['User']['username']): ?>
	<?php echo $this->element('box/top', array('type'=>'title','size'=>'medium','locale'=>'left')); ?>
		Username
	<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
	<?php echo $this->element('box/top', array('type'=>'body','size'=>'medium','locale'=>'left')); ?>
		<?php echo $user['User']['username']; ?>
	<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	<div class="reset"></div>
<?php endif; ?>
<?php if ($user['User']['created']): ?>
	<?php echo $this->element('box/top', array('type'=>'title','size'=>'medium','locale'=>'left')); ?>
		Created
	<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
	<?php echo $this->element('box/top', array('type'=>'body','size'=>'medium','locale'=>'left')); ?>
		<?php echo $user['User']['created']; ?>
	<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	<div class="reset"></div>
<?php endif; ?>
<?php if ($user['User']['updated']): ?>
	<?php echo $this->element('box/top', array('type'=>'title','size'=>'medium','locale'=>'left')); ?>
		Updated
	<?php echo $this->element('box/bottom', array('type'=>'title')); ?>
	<?php echo $this->element('box/top', array('type'=>'body','size'=>'medium','locale'=>'left')); ?>
		<?php echo $user['User']['updated']; ?>
	<?php echo $this->element('box/bottom', array('type'=>'body')); ?>
	<div class="reset"></div>
<?php endif; ?>
</div>
