<div class="employerQuota index">
	<h2><?php echo __('Employer Quota'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('employer_id'); ?></th>
			<th><?php echo $this->Paginator->sort('priority'); ?></th>
			<th><?php echo $this->Paginator->sort('quota'); ?></th>
			<th><?php echo $this->Paginator->sort('disable_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('creator'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modifier'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($employerQuota as $employerQuotum): ?>
	<tr>
		<td><?php echo h($employerQuotum['EmployerQuotum']['id']); ?>&nbsp;</td>
		<td><?php echo h($employerQuotum['EmployerQuotum']['employer_id']); ?>&nbsp;</td>
		<td><?php echo h($employerQuotum['EmployerQuotum']['priority']); ?>&nbsp;</td>
		<td><?php echo h($employerQuotum['EmployerQuotum']['quota']); ?>&nbsp;</td>
		<td><?php echo h($employerQuotum['EmployerQuotum']['disable_flag']); ?>&nbsp;</td>
		<td><?php echo h($employerQuotum['EmployerQuotum']['creator']); ?>&nbsp;</td>
		<td><?php echo h($employerQuotum['EmployerQuotum']['created']); ?>&nbsp;</td>
		<td><?php echo h($employerQuotum['EmployerQuotum']['modifier']); ?>&nbsp;</td>
		<td><?php echo h($employerQuotum['EmployerQuotum']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $employerQuotum['EmployerQuotum']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $employerQuotum['EmployerQuotum']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $employerQuotum['EmployerQuotum']['id']), array(), __('Are you sure you want to delete # %s?', $employerQuotum['EmployerQuotum']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Employer Quotum'), array('action' => 'add')); ?></li>
	</ul>
</div>
