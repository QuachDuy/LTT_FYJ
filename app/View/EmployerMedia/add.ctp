<div class="employerMedia form">
<?php echo $this->Form->create('EmployerMedia'); ?>
	<fieldset>
		<legend><?php echo __('Add Employer Media'); ?></legend>
	<?php
		echo $this->Form->input('employer_id');
		echo $this->Form->input('path');
		echo $this->Form->input('type');
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

		<li><?php echo $this->Html->link(__('List Employer Media'), array('action' => 'index')); ?></li>
	</ul>
</div>
