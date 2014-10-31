<div class="employerQuota form">
<?php echo $this->Form->create('EmployerQuotum'); ?>
	<fieldset>
		<legend><?php echo __('Edit Employer Quotum'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('employer_id');
		echo $this->Form->input('priority');
		echo $this->Form->input('quota');
		echo $this->Form->input('disable_flag');
		echo $this->Form->input('creator');
		echo $this->Form->input('modifier');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('EmployerQuotum.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('EmployerQuotum.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Employer Quota'), array('action' => 'index')); ?></li>
	</ul>
</div>
