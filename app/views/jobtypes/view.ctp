<div class="jobtypes view">
<h2><?php  __('Jobtype');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $jobtype['Jobtype']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $jobtype['Jobtype']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $jobtype['Jobtype']['description']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Jobtype', true), array('action' => 'edit', $jobtype['Jobtype']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Jobtype', true), array('action' => 'delete', $jobtype['Jobtype']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $jobtype['Jobtype']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Jobtypes', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Jobtype', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Jobs', true), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Job', true), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Jobs');?></h3>
	<?php if (!empty($jobtype['Job'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Customer Id'); ?></th>
		<th><?php __('Location Id'); ?></th>
		<th><?php __('Jobtype Id'); ?></th>
		<th><?php __('Jobcategory Id'); ?></th>
		<th><?php __('Jobnumber'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Date'); ?></th>
		<th><?php __('Customerdescription'); ?></th>
		<th><?php __('Ponumber'); ?></th>
		<th><?php __('Billed'); ?></th>
		<th><?php __('Cost'); ?></th>
		<th><?php __('Status'); ?></th>
		<th><?php __('Invoice'); ?></th>
		<th><?php __('Taxable'); ?></th>
		<th><?php __('Selected'); ?></th>
		<th><?php __('Comments'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($jobtype['Job'] as $job):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $job['id'];?></td>
			<td><?php echo $job['customer_id'];?></td>
			<td><?php echo $job['location_id'];?></td>
			<td><?php echo $job['jobtype_id'];?></td>
			<td><?php echo $job['jobcategory_id'];?></td>
			<td><?php echo $job['jobnumber'];?></td>
			<td><?php echo $job['name'];?></td>
			<td><?php echo $job['date'];?></td>
			<td><?php echo $job['customerdescription'];?></td>
			<td><?php echo $job['ponumber'];?></td>
			<td><?php echo $job['billed'];?></td>
			<td><?php echo $job['cost'];?></td>
			<td><?php echo $job['status'];?></td>
			<td><?php echo $job['invoice'];?></td>
			<td><?php echo $job['taxable'];?></td>
			<td><?php echo $job['selected'];?></td>
			<td><?php echo $job['comments'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'jobs', 'action' => 'view', $job['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'jobs', 'action' => 'edit', $job['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'jobs', 'action' => 'delete', $job['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $job['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Job', true), array('controller' => 'jobs', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
