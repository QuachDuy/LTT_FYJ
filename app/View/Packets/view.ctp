<div class="packets view">
<h2><?php echo __('Packet'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($packet['Packet']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($packet['Packet']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($packet['Packet']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Priority'); ?></dt>
		<dd>
			<?php echo h($packet['Packet']['priority']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quota'); ?></dt>
		<dd>
			<?php echo h($packet['Packet']['quota']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($packet['Packet']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Disable Flag'); ?></dt>
		<dd>
			<?php echo h($packet['Packet']['disable_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creator'); ?></dt>
		<dd>
			<?php echo h($packet['Packet']['creator']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($packet['Packet']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modifier'); ?></dt>
		<dd>
			<?php echo h($packet['Packet']['modifier']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($packet['Packet']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Packet'), array('action' => 'edit', $packet['Packet']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Packet'), array('action' => 'delete', $packet['Packet']['id']), array(), __('Are you sure you want to delete # %s?', $packet['Packet']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Packets'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Packet'), array('action' => 'add')); ?> </li>
	</ul>
</div>
