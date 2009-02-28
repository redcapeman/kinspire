<div class="right">
	<?php if ($user['Group']['name']): ?>
		<?php echo $this->element('yboxsmallrighttop'); ?>
			Group
		<?php echo $this->element('yboxbottom'); ?>
		<?php echo $this->element('cboxsmallrighttop'); ?>
			<?php echo $user['Group']['name']; ?>
		<?php echo $this->element('cboxbottom'); ?>
	<?php endif; ?>
</div>

<div class="nullbox">
<?php if ($user['User']['id']): ?>
	<?php echo $this->element('yboxmediumtop'); ?>
		Id
	<?php echo $this->element('yboxbottom'); ?>
	<?php echo $this->element('cboxmediumtop'); ?>
		<?php echo $user['User']['id']; ?>
	<?php echo $this->element('cboxbottom'); ?>
	<div class="reset"></div>
<?php endif; ?>
<?php if ($user['User']['name']): ?>
	<?php echo $this->element('yboxmediumtop'); ?>
		Name
	<?php echo $this->element('yboxbottom'); ?>
	<?php echo $this->element('cboxmediumtop'); ?>
		<?php echo $user['User']['name']; ?>
	<?php echo $this->element('cboxbottom'); ?>
	<div class="reset"></div>
<?php endif; ?>
<?php if ($user['User']['username']): ?>
	<?php echo $this->element('yboxmediumtop'); ?>
		Username
	<?php echo $this->element('yboxbottom'); ?>
	<?php echo $this->element('cboxmediumtop'); ?>
		<?php echo $user['User']['username']; ?>
	<?php echo $this->element('cboxbottom'); ?>
	<div class="reset"></div>
<?php endif; ?>
<?php if ($user['User']['created']): ?>
	<?php echo $this->element('yboxmediumtop'); ?>
		Created
	<?php echo $this->element('yboxbottom'); ?>
	<?php echo $this->element('cboxmediumtop'); ?>
		<?php echo $user['User']['created']; ?>
	<?php echo $this->element('cboxbottom'); ?>
	<div class="reset"></div>
<?php endif; ?>
<?php if ($user['User']['updated']): ?>
	<?php echo $this->element('yboxmediumtop'); ?>
		Updated
	<?php echo $this->element('yboxbottom'); ?>
	<?php echo $this->element('cboxmediumtop'); ?>
		<?php echo $user['User']['updated']; ?>
	<?php echo $this->element('cboxbottom'); ?>
	<div class="reset"></div>
<?php endif; ?>
</div>