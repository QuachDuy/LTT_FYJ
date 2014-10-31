<div class="jobs view">
<h2><?php echo __('Job'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($job['Job']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($job['Job']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Career Id'); ?></dt>
		<dd>
			<?php echo h($job['Job']['career_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company Id'); ?></dt>
		<dd>
			<?php echo h($job['Job']['company_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location Id'); ?></dt>
		<dd>
			<?php echo h($job['Job']['location_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Priority'); ?></dt>
		<dd>
			<?php echo h($job['Job']['priority']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($job['Job']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Requirement'); ?></dt>
		<dd>
			<?php echo h($job['Job']['requirement']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact'); ?></dt>
		<dd>
			<?php echo h($job['Job']['contact']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Date'); ?></dt>
		<dd>
			<?php echo h($job['Job']['start_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Date'); ?></dt>
		<dd>
			<?php echo h($job['Job']['end_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Disable Flag'); ?></dt>
		<dd>
			<?php echo h($job['Job']['disable_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creator'); ?></dt>
		<dd>
			<?php echo h($job['Job']['creator']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($job['Job']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updater'); ?></dt>
		<dd>
			<?php echo h($job['Job']['updater']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($job['Job']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Job'), array('action' => 'edit', $job['Job']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Job'), array('action' => 'delete', $job['Job']['id']), array(), __('Are you sure you want to delete # %s?', $job['Job']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Jobs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job'), array('action' => 'add')); ?> </li>
	</ul>
</div>
