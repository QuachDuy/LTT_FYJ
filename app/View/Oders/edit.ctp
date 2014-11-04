<div class="oders form">
<?php echo $this->Form->create('Oder'); ?>
	<fieldset>
		<legend><?php echo __('Edit Oder'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('employer_id');
		echo $this->Form->input('packet_id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Oder.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Oder.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Oders'), array('action' => 'index')); ?></li>
	</ul>
</div>
