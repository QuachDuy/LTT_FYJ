<div class="conpanies index">
	<h2><?php echo __('Conpanies'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('size_id'); ?></th>
			<th><?php echo $this->Paginator->sort('disable_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('creator'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updater'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($conpanies as $conpany): ?>
	<tr>
		<td><?php echo h($conpany['Conpany']['id']); ?>&nbsp;</td>
		<td><?php echo h($conpany['Conpany']['name']); ?>&nbsp;</td>
		<td><?php echo h($conpany['Conpany']['address']); ?>&nbsp;</td>
		<td><?php echo h($conpany['Conpany']['description']); ?>&nbsp;</td>
		<td><?php echo h($conpany['Conpany']['size_id']); ?>&nbsp;</td>
		<td><?php echo h($conpany['Conpany']['disable_flag']); ?>&nbsp;</td>
		<td><?php echo h($conpany['Conpany']['creator']); ?>&nbsp;</td>
		<td><?php echo h($conpany['Conpany']['created']); ?>&nbsp;</td>
		<td><?php echo h($conpany['Conpany']['updater']); ?>&nbsp;</td>
		<td><?php echo h($conpany['Conpany']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $conpany['Conpany']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $conpany['Conpany']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $conpany['Conpany']['id']), array(), __('Are you sure you want to delete # %s?', $conpany['Conpany']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Conpany'), array('action' => 'add')); ?></li>
	</ul>
</div>
