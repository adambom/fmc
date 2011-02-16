<div class="stages view">
<h2><?php  __('Stage');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $stage['Stage']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $stage['Stage']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $stage['Stage']['description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Probability'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $stage['Stage']['probability']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Stage', true), array('action' => 'edit', $stage['Stage']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Stage', true), array('action' => 'delete', $stage['Stage']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $stage['Stage']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Stages', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Stage', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Opportunities', true), array('controller' => 'opportunities', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Opportunity', true), array('controller' => 'opportunities', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Opportunities');?></h3>
	<?php if (!empty($stage['Opportunity'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Customer'); ?></th>
		<th><?php __('Job Category'); ?></th>
		<th><?php __('Stage'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Amount'); ?></th>
		<th><?php __('Forecasted Close Date'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($stage['Opportunity'] as $opportunity):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $opportunity['id'];?></td>
			<td><?php if($opportunity['Company']){echo $opportunity['Company']['name'];} ?></td>
			<td><?php if($opportunity['Jobcategory']){echo $opportunity['Jobcategory']['name'];} ?></td>
			<td><?php echo $opportunity['Stage']['name'];?></td>
			<td><?php echo $opportunity['name'];?></td>
			<td><?php echo $opportunity['amount'];?></td>
			<td><?php echo $opportunity['forecastedclosedate'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'opportunities', 'action' => 'view', $opportunity['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'opportunities', 'action' => 'edit', $opportunity['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'opportunities', 'action' => 'delete', $opportunity['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $opportunity['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Opportunity', true), array('controller' => 'opportunities', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
