<div class="right">
	<?php if ($event['Event']['name']): ?>
		<?php echo $this->element('yboxsmallrighttop'); ?>
			Event Name
		<?php echo $this->element('yboxbottom'); ?>
		<?php echo $this->element('cboxsmallrighttop'); ?>
			<?php echo $event['Event']['name']; ?>
		<?php echo $this->element('cboxbottom'); ?>
	<?php endif; ?>
</div>

<div class="nullbox">
<?php if ($event['Event']['id']): ?>
	<?php echo $this->element('yboxmediumtop'); ?>
		Id
	<?php echo $this->element('yboxbottom'); ?>
	<?php echo $this->element('cboxmediumtop'); ?>
		<?php echo $event['Event']['id']; ?>
	<?php echo $this->element('cboxbottom'); ?>
	<div class="reset"></div>
<?php endif; ?>
<?php if ($event['Event']['event_date']): ?>
	<?php echo $this->element('yboxmediumtop'); ?>
		Event Date and Time
	<?php echo $this->element('yboxbottom'); ?>
	<?php echo $this->element('cboxmediumtop'); ?>
		<?php echo date('jS F, Y h:i a', strtotime($event['Event']['event_date'])); ?>
	<?php echo $this->element('cboxbottom'); ?>
	<div class="reset"></div>
<?php endif; ?>
<?php if ($event['Event']['notes']): ?>
	<?php echo $this->element('yboxmediumtop'); ?>
		Notes
	<?php echo $this->element('yboxbottom'); ?>
	<?php echo $this->element('cboxmediumtop'); ?>
		<?php echo $event['Event']['notes']; ?>
	<?php echo $this->element('cboxbottom'); ?>
	<div class="reset"></div>
<?php endif; ?>
<?php if ($event['Event']['alert_date']): ?>
	<?php echo $this->element('yboxmediumtop'); ?>
		Alert Date
	<?php echo $this->element('yboxbottom'); ?>
	<?php echo $this->element('cboxmediumtop'); ?>
		<?php echo date('jS F, Y', strtotime($event['Event']['alert_date'])); ?>
	<?php echo $this->element('cboxbottom'); ?>
	<div class="reset"></div>
<?php endif; ?>
	<?php echo $this->element('yboxmediumtop'); ?>
		Recipients
	<?php echo $this->element('yboxbottom'); ?>
	<?php echo $this->element('cboxmediumtop'); ?>
<? foreach($event['User'] as $user):?>
			 <? echo $user['name']; ?><br />
<? endforeach;?>
	<?php echo $this->element('cboxbottom'); ?>
	<div class="reset"></div>
<?php if ($event['Event']['created']): ?>
	<?php echo $this->element('yboxmediumtop'); ?>
		Created
	<?php echo $this->element('yboxbottom'); ?>
	<?php echo $this->element('cboxmediumtop'); ?>
		<?php echo $event['Event']['created']; ?>
	<?php echo $this->element('cboxbottom'); ?>
	<div class="reset"></div>
<?php endif; ?>
<?php if ($event['Event']['updated']): ?>
	<?php echo $this->element('yboxmediumtop'); ?>
		Updated
	<?php echo $this->element('yboxbottom'); ?>
	<?php echo $this->element('cboxmediumtop'); ?>
		<?php echo $event['Event']['updated']; ?>
	<?php echo $this->element('cboxbottom'); ?>
	<div class="reset"></div>
<?php endif; ?>
</div>
<div id="toolbar">
	<ul>
		<li><div align="center"><?php echo $html->link('New Event', array('action'=>'add'), array('id'=>'tb-button', 'class'=>'tb-normal')); ?></div></li>
		<li><div align="center"><?php echo $html->link('Edit Event', array('action'=>'edit', $event['Event']['id']), array('id'=>'tb-button', 'class'=>'tb-normal')); ?></div></li>
		<li><div align="center"><?php echo $html->link('Delete Event', array('action'=>'delete', $event['Event']['id']), array('id'=>'tb-button', 'class'=>'tb-normal'), sprintf(__('Are you sure you want to delete # %s?', true), $event['Event']['id']));?></div></li>
		<li><div align="center"><?php echo $html->link('Calendar', array('action'=>'index'), array('id'=>'tb-button', 'class'=>'tb-normal')); ?></div></li>		
	</ul>
</div>
