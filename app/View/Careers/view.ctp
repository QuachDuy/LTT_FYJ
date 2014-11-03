<div class="careers view">
<h2><?php echo __('Career'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($career['Career']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($career['Career']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Disable Flag'); ?></dt>
		<dd>
			<?php echo h($career['Career']['disable_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creator'); ?></dt>
		<dd>
			<?php echo h($career['Career']['creator']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($career['Career']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updater'); ?></dt>
		<dd>
			<?php echo h($career['Career']['updater']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($career['Career']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Career'), array('action' => 'edit', $career['Career']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Career'), array('action' => 'delete', $career['Career']['id']), array(), __('Are you sure you want to delete # %s?', $career['Career']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Careers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Career'), array('action' => 'add')); ?> </li>
	</ul>
</div>
