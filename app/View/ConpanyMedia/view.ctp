<div class="conpanyMedia view">
<h2><?php echo __('Conpany Media'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($conpanyMedia['ConpanyMedia']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company Id'); ?></dt>
		<dd>
			<?php echo h($conpanyMedia['ConpanyMedia']['company_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Path'); ?></dt>
		<dd>
			<?php echo h($conpanyMedia['ConpanyMedia']['path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($conpanyMedia['ConpanyMedia']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Disable Flag'); ?></dt>
		<dd>
			<?php echo h($conpanyMedia['ConpanyMedia']['disable_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creator'); ?></dt>
		<dd>
			<?php echo h($conpanyMedia['ConpanyMedia']['creator']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($conpanyMedia['ConpanyMedia']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updater'); ?></dt>
		<dd>
			<?php echo h($conpanyMedia['ConpanyMedia']['updater']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($conpanyMedia['ConpanyMedia']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Conpany Media'), array('action' => 'edit', $conpanyMedia['ConpanyMedia']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Conpany Media'), array('action' => 'delete', $conpanyMedia['ConpanyMedia']['id']), array(), __('Are you sure you want to delete # %s?', $conpanyMedia['ConpanyMedia']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Conpany Media'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conpany Media'), array('action' => 'add')); ?> </li>
	</ul>
</div>
