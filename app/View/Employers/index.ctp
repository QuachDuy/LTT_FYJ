<div class="employers index">
	<h2><?php echo __('Employers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('password'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('size_id'); ?></th>
			<th><?php echo $this->Paginator->sort('disable_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('creator'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modifier'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($employers as $employer): ?>
	<tr>
		<td><?php echo h($employer['Employer']['id']); ?>&nbsp;</td>
		<td><?php echo h($employer['Employer']['name']); ?>&nbsp;</td>
		<td><?php echo h($employer['Employer']['email']); ?>&nbsp;</td>
		<td><?php echo h($employer['Employer']['password']); ?>&nbsp;</td>
		<td><?php echo h($employer['Employer']['address']); ?>&nbsp;</td>
		<td><?php echo h($employer['Employer']['description']); ?>&nbsp;</td>
		<td><?php echo h($employer['Employer']['size_id']); ?>&nbsp;</td>
		<td><?php echo h($employer['Employer']['disable_flag']); ?>&nbsp;</td>
		<td><?php echo h($employer['Employer']['creator']); ?>&nbsp;</td>
		<td><?php echo h($employer['Employer']['created']); ?>&nbsp;</td>
		<td><?php echo h($employer['Employer']['modifier']); ?>&nbsp;</td>
		<td><?php echo h($employer['Employer']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $employer['Employer']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $employer['Employer']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $employer['Employer']['id']), array(), __('Are you sure you want to delete # %s?', $employer['Employer']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Employer'), array('action' => 'add')); ?></li>
	</ul>
</div>
