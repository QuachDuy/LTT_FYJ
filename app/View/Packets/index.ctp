<div class="packets index">
	<h2><?php echo __('Packets'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('priority'); ?></th>
			<th><?php echo $this->Paginator->sort('quota'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
			<th><?php echo $this->Paginator->sort('disable_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('creator'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modifier'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($packets as $packet): ?>
	<tr>
		<td><?php echo h($packet['Packet']['id']); ?>&nbsp;</td>
		<td><?php echo h($packet['Packet']['name']); ?>&nbsp;</td>
		<td><?php echo h($packet['Packet']['description']); ?>&nbsp;</td>
		<td><?php echo h($packet['Packet']['priority']); ?>&nbsp;</td>
		<td><?php echo h($packet['Packet']['quota']); ?>&nbsp;</td>
		<td><?php echo h($packet['Packet']['price']); ?>&nbsp;</td>
		<td><?php echo h($packet['Packet']['disable_flag']); ?>&nbsp;</td>
		<td><?php echo h($packet['Packet']['creator']); ?>&nbsp;</td>
		<td><?php echo h($packet['Packet']['created']); ?>&nbsp;</td>
		<td><?php echo h($packet['Packet']['modifier']); ?>&nbsp;</td>
		<td><?php echo h($packet['Packet']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $packet['Packet']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $packet['Packet']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $packet['Packet']['id']), array(), __('Are you sure you want to delete # %s?', $packet['Packet']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Packet'), array('action' => 'add')); ?></li>
	</ul>
</div>
