<div class="oders form">
<?php echo $this->Form->create('Oder'); ?>
	<fieldset>
		<legend><?php echo __('Add Oder'); ?></legend>
	<?php
		echo $this->Form->input('company_id');
		echo $this->Form->input('packet_id');
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

		<li><?php echo $this->Html->link(__('List Oders'), array('action' => 'index')); ?></li>
	</ul>
</div>
