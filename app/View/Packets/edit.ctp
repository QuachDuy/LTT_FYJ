<div class="packets form">
<?php echo $this->Form->create('Packet'); ?>
	<fieldset>
		<legend><?php echo __('Edit Packet'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('priority');
		echo $this->Form->input('quota');
		echo $this->Form->input('price');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Packet.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Packet.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Packets'), array('action' => 'index')); ?></li>
	</ul>
</div>
