<div class="conpanies form">
<?php echo $this->Form->create('Conpany'); ?>
	<fieldset>
		<legend><?php echo __('Add Conpany'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('address');
		echo $this->Form->input('description');
		echo $this->Form->input('size_id');
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

		<li><?php echo $this->Html->link(__('List Conpanies'), array('action' => 'index')); ?></li>
	</ul>
</div>
