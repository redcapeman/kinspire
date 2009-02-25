<?php $paginator->options(array('url' => $this->passedArgs)); ?>

<?php echo $this->element('yboxtop'); ?><p><div align="center">
	<?php
	echo $paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% items out of %count% total.', true)
	));
	?>
</div></p><?php echo $this->element('yboxbottom'); ?>

<?php echo $this->element('cboxtop'); ?><p><div align="center">
	<div class="paging">
		<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $paginator->numbers();?>
		<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class'=>'disabled'));?>
	</div>
</div></p><?php echo $this->element('cboxbottom'); ?>