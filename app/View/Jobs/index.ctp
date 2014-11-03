<div class="jobs index">
	<h2><?php echo __('Jobs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('career_id'); ?></th>
			<th><?php echo $this->Paginator->sort('company_id'); ?></th>
			<th><?php echo $this->Paginator->sort('location_id'); ?></th>
			<th><?php echo $this->Paginator->sort('priority'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('requirement'); ?></th>
			<th><?php echo $this->Paginator->sort('contact'); ?></th>
			<th><?php echo $this->Paginator->sort('start_date'); ?></th>
			<th><?php echo $this->Paginator->sort('end_date'); ?></th>
			<th><?php echo $this->Paginator->sort('disable_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('creator'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updater'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($jobs as $job): ?>
	<tr>
		<td><?php echo h($job['Job']['id']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['title']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['career_id']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['company_id']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['location_id']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['priority']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['description']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['requirement']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['contact']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['start_date']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['end_date']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['disable_flag']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['creator']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['created']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['updater']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $job['Job']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $job['Job']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $job['Job']['id']), array(), __('Are you sure you want to delete # %s?', $job['Job']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Job'), array('action' => 'add')); ?></li>
	</ul>
</div>
