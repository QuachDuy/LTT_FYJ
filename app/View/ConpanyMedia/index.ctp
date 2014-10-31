<div class="conpanyMedia index">
	<h2><?php echo __('Conpany Media'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('company_id'); ?></th>
			<th><?php echo $this->Paginator->sort('path'); ?></th>
			<th><?php echo $this->Paginator->sort('type'); ?></th>
			<th><?php echo $this->Paginator->sort('disable_flag'); ?></th>
			<th><?php echo $this->Paginator->sort('creator'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updater'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($conpanyMedia as $conpanyMedia): ?>
	<tr>
		<td><?php echo h($conpanyMedia['ConpanyMedia']['id']); ?>&nbsp;</td>
		<td><?php echo h($conpanyMedia['ConpanyMedia']['company_id']); ?>&nbsp;</td>
		<td><?php echo h($conpanyMedia['ConpanyMedia']['path']); ?>&nbsp;</td>
		<td><?php echo h($conpanyMedia['ConpanyMedia']['type']); ?>&nbsp;</td>
		<td><?php echo h($conpanyMedia['ConpanyMedia']['disable_flag']); ?>&nbsp;</td>
		<td><?php echo h($conpanyMedia['ConpanyMedia']['creator']); ?>&nbsp;</td>
		<td><?php echo h($conpanyMedia['ConpanyMedia']['created']); ?>&nbsp;</td>
		<td><?php echo h($conpanyMedia['ConpanyMedia']['updater']); ?>&nbsp;</td>
		<td><?php echo h($conpanyMedia['ConpanyMedia']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $conpanyMedia['ConpanyMedia']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $conpanyMedia['ConpanyMedia']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $conpanyMedia['ConpanyMedia']['id']), array(), __('Are you sure you want to delete # %s?', $conpanyMedia['ConpanyMedia']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Conpany Media'), array('action' => 'add')); ?></li>
	</ul>
</div>
