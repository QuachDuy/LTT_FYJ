<div class="employerQuota view">
<h2><?php echo __('Employer Quotum'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($employerQuotum['EmployerQuotum']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employer Id'); ?></dt>
		<dd>
			<?php echo h($employerQuotum['EmployerQuotum']['employer_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Priority'); ?></dt>
		<dd>
			<?php echo h($employerQuotum['EmployerQuotum']['priority']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quota'); ?></dt>
		<dd>
			<?php echo h($employerQuotum['EmployerQuotum']['quota']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Disable Flag'); ?></dt>
		<dd>
			<?php echo h($employerQuotum['EmployerQuotum']['disable_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creator'); ?></dt>
		<dd>
			<?php echo h($employerQuotum['EmployerQuotum']['creator']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($employerQuotum['EmployerQuotum']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updater'); ?></dt>
		<dd>
			<?php echo h($employerQuotum['EmployerQuotum']['updater']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($employerQuotum['EmployerQuotum']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Employer Quotum'), array('action' => 'edit', $employerQuotum['EmployerQuotum']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Employer Quotum'), array('action' => 'delete', $employerQuotum['EmployerQuotum']['id']), array(), __('Are you sure you want to delete # %s?', $employerQuotum['EmployerQuotum']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Employer Quota'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employer Quotum'), array('action' => 'add')); ?> </li>
	</ul>
</div>
