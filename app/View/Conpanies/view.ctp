<div class="conpanies view">
<h2><?php echo __('Conpany'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($conpany['Conpany']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($conpany['Conpany']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($conpany['Conpany']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($conpany['Conpany']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Size Id'); ?></dt>
		<dd>
			<?php echo h($conpany['Conpany']['size_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Disable Flag'); ?></dt>
		<dd>
			<?php echo h($conpany['Conpany']['disable_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creator'); ?></dt>
		<dd>
			<?php echo h($conpany['Conpany']['creator']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($conpany['Conpany']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updater'); ?></dt>
		<dd>
			<?php echo h($conpany['Conpany']['updater']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($conpany['Conpany']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Conpany'), array('action' => 'edit', $conpany['Conpany']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Conpany'), array('action' => 'delete', $conpany['Conpany']['id']), array(), __('Are you sure you want to delete # %s?', $conpany['Conpany']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Conpanies'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conpany'), array('action' => 'add')); ?> </li>
	</ul>
</div>
