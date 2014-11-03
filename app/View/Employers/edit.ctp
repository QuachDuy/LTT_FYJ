<div class="employers form">
<?php echo $this->Form->create('Employer'); ?>
	<fieldset>
		<legend><?php echo __('Edit Employer'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('password');
		echo $this->Form->input('company_id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Employer.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Employer.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Employers'), array('action' => 'index')); ?></li>
	</ul>
</div>
