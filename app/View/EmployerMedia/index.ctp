<div class="employerMedia index">
	<h2><?php echo __('Employer Media'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('employer_id'); ?></th>
			<th><?php echo $this->Paginator->sort('path'); ?></th>
			<th><?php echo $this->Paginator->sort('type'); ?></th>
			<th><?php echo $this->Paginator->sort('disable_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('creator'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modifier'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($employerMedia as $employerMedia): ?>
	<tr>
		<td><?php echo h($employerMedia['EmployerMedia']['id']); ?>&nbsp;</td>
		<td><?php echo h($employerMedia['EmployerMedia']['employer_id']); ?>&nbsp;</td>
		<td><?php echo h($employerMedia['EmployerMedia']['path']); ?>&nbsp;</td>
		<td><?php echo h($employerMedia['EmployerMedia']['type']); ?>&nbsp;</td>
		<td><?php echo h($employerMedia['EmployerMedia']['disable_flag']); ?>&nbsp;</td>
		<td><?php echo h($employerMedia['EmployerMedia']['creator']); ?>&nbsp;</td>
		<td><?php echo h($employerMedia['EmployerMedia']['created']); ?>&nbsp;</td>
		<td><?php echo h($employerMedia['EmployerMedia']['modifier']); ?>&nbsp;</td>
		<td><?php echo h($employerMedia['EmployerMedia']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $employerMedia['EmployerMedia']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $employerMedia['EmployerMedia']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $employerMedia['EmployerMedia']['id']), array(), __('Are you sure you want to delete # %s?', $employerMedia['EmployerMedia']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Employer Media'), array('action' => 'add')); ?></li>
	</ul>
</div>
