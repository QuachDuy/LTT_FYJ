<div class="employerMedia view">
<h2><?php echo __('Employer Media'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($employerMedia['EmployerMedia']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employer Id'); ?></dt>
		<dd>
			<?php echo h($employerMedia['EmployerMedia']['employer_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Path'); ?></dt>
		<dd>
			<?php echo h($employerMedia['EmployerMedia']['path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($employerMedia['EmployerMedia']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Disable Flag'); ?></dt>
		<dd>
			<?php echo h($employerMedia['EmployerMedia']['disable_flag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creator'); ?></dt>
		<dd>
			<?php echo h($employerMedia['EmployerMedia']['creator']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($employerMedia['EmployerMedia']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modifier'); ?></dt>
		<dd>
			<?php echo h($employerMedia['EmployerMedia']['modifier']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($employerMedia['EmployerMedia']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Employer Media'), array('action' => 'edit', $employerMedia['EmployerMedia']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Employer Media'), array('action' => 'delete', $employerMedia['EmployerMedia']['id']), array(), __('Are you sure you want to delete # %s?', $employerMedia['EmployerMedia']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Employer Media'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employer Media'), array('action' => 'add')); ?> </li>
	</ul>
</div>
