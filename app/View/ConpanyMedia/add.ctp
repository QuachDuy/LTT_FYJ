<div class="conpanyMedia form">
<?php echo $this->Form->create('ConpanyMedia'); ?>
	<fieldset>
		<legend><?php echo __('Add Conpany Media'); ?></legend>
	<?php
		echo $this->Form->input('company_id');
		echo $this->Form->input('path');
		echo $this->Form->input('type');
		echo $this->Form->input('disable_flag');
		echo $this->Form->input('creator');
		echo $this->Form->input('updater');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Conpany Media'), array('action' => 'index')); ?></li>
	</ul>
</div>
