<div class="right">
	<?php if ($user['Group']['name']): ?>
		<?php echo $this->element('yboxsmallrighttop'); ?>
			<strong>Group</strong>
		<?php echo $this->element('yboxbottom'); ?>
		<?php echo $this->element('cboxsmallrighttop'); ?>
			<?php echo $html->link($user['Group']['name'], array('controller'=> 'groups', 'action'=>'view', $user['Group']['id'])); ?>
		<?php echo $this->element('cboxbottom'); ?>
	<?php endif; ?>
</div>

<div class="nullbox">
<?php if ($user['User']['id']): ?>
	<?php echo $this->element('yboxmediumtop'); ?>
		<strong>Id</strong>
	<?php echo $this->element('yboxbottom'); ?>
	<?php echo $this->element('cboxmediumtop'); ?>
		<?php echo $user['User']['id']; ?>
	<?php echo $this->element('cboxbottom'); ?>
	<div class="reset"></div>
<?php endif; ?>
<?php if ($user['User']['username']): ?>
	<?php echo $this->element('yboxmediumtop'); ?>
		<strong>Username</strong>
	<?php echo $this->element('yboxbottom'); ?>
	<?php echo $this->element('cboxmediumtop'); ?>
		<?php echo $user['User']['username']; ?>
	<?php echo $this->element('cboxbottom'); ?>
	<div class="reset"></div>
<?php endif; ?>
<?php if ($user['User']['created']): ?>
	<?php echo $this->element('yboxmediumtop'); ?>
		<strong>Created</strong>
	<?php echo $this->element('yboxbottom'); ?>
	<?php echo $this->element('cboxmediumtop'); ?>
		<?php echo $user['User']['created']; ?>
	<?php echo $this->element('cboxbottom'); ?>
	<div class="reset"></div>
<?php endif; ?>
<?php if ($user['User']['updated']): ?>
	<?php echo $this->element('yboxmediumtop'); ?>
		<strong>Updated</strong>
	<?php echo $this->element('yboxbottom'); ?>
	<?php echo $this->element('cboxmediumtop'); ?>
		<?php echo $user['User']['updated']; ?>
	<?php echo $this->element('cboxbottom'); ?>
	<div class="reset"></div>
<?php endif; ?>
</div>