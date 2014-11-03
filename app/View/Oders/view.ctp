<div class="oders view">
<h2><?php echo __('Oder'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($oder['Oder']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company Id'); ?></dt>
		<dd>
			<?php echo h($oder['Oder']['company_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Packet Id'); ?></dt>
		<dd>
			<?php echo h($oder['Oder']['packet_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Disable Flag'); ?></dt>
		<dd>
			<?php echo h($oder['Oder']['disable_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creator'); ?></dt>
		<dd>
			<?php echo h($oder['Oder']['creator']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($oder['Oder']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updater'); ?></dt>
		<dd>
			<?php echo h($oder['Oder']['updater']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($oder['Oder']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Oder'), array('action' => 'edit', $oder['Oder']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Oder'), array('action' => 'delete', $oder['Oder']['id']), array(), __('Are you sure you want to delete # %s?', $oder['Oder']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Oders'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Oder'), array('action' => 'add')); ?> </li>
	</ul>
</div>
