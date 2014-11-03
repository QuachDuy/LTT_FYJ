<div class="employerQuota form">
<?php echo $this->Form->create('EmployerQuotum'); ?>
	<fieldset>
		<legend><?php echo __('Add Employer Quotum'); ?></legend>
	<?php
		echo $this->Form->input('employer_id');
		echo $this->Form->input('priority');
		echo $this->Form->input('quota');
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

		<li><?php echo $this->Html->link(__('List Employer Quota'), array('action' => 'index')); ?></li>
	</ul>
</div>
