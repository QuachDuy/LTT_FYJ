<div class="oders index">
	<h2><?php echo __('Oders'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('company_id'); ?></th>
			<th><?php echo $this->Paginator->sort('packet_id'); ?></th>
			<th><?php echo $this->Paginator->sort('disable_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('creator'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updater'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($oders as $oder): ?>
	<tr>
		<td><?php echo h($oder['Oder']['id']); ?>&nbsp;</td>
		<td><?php echo h($oder['Oder']['company_id']); ?>&nbsp;</td>
		<td><?php echo h($oder['Oder']['packet_id']); ?>&nbsp;</td>
		<td><?php echo h($oder['Oder']['disable_flag']); ?>&nbsp;</td>
		<td><?php echo h($oder['Oder']['creator']); ?>&nbsp;</td>
		<td><?php echo h($oder['Oder']['created']); ?>&nbsp;</td>
		<td><?php echo h($oder['Oder']['updater']); ?>&nbsp;</td>
		<td><?php echo h($oder['Oder']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $oder['Oder']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $oder['Oder']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $oder['Oder']['id']), array(), __('Are you sure you want to delete # %s?', $oder['Oder']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Oder'), array('action' => 'add')); ?></li>
	</ul>
</div>
