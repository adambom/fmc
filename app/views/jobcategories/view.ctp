<div class="jobcategories view">
<h2><?php  __('Jobcategory');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $jobcategory['Jobcategory']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $jobcategory['Jobcategory']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $jobcategory['Jobcategory']['description']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Jobcategory', true), array('action' => 'edit', $jobcategory['Jobcategory']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Jobcategory', true), array('action' => 'delete', $jobcategory['Jobcategory']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $jobcategory['Jobcategory']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Jobcategories', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Jobcategory', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Jobs', true), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Job', true), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Opportunities', true), array('controller' => 'opportunities', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Opportunity', true), array('controller' => 'opportunities', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Jobs');?></h3>
	<?php if (!empty($jobcategory['Job'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Customer Id'); ?></th>
		<th><?php __('Jobtype Id'); ?></th>
		<th><?php __('Jobcategory Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Description'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($jobcategory['Job'] as $job):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $job['id'];?></td>
			<td><?php echo $job['customer_id'];?></td>
			<td><?php echo $job['jobtype_id'];?></td>
			<td><?php echo $job['jobcategory_id'];?></td>
			<td><?php echo $job['name'];?></td>
			<td><?php echo $job['description'];?></td>
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
<div class="related">
	<h3><?php __('Related Opportunities');?></h3>
	<?php if (!empty($jobcategory['Opportunity'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Customer Id'); ?></th>
		<th><?php __('Jobcategory Id'); ?></th>
		<th><?php __('Stage Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Description'); ?></th>
		<th><?php __('Shortdescription'); ?></th>
		<th><?php __('Owner'); ?></th>
		<th><?php __('Leadsource'); ?></th>
		<th><?php __('Amount'); ?></th>
		<th><?php __('Expamount'); ?></th>
		<th><?php __('Forecastedclosedate'); ?></th>
		<th><?php __('Actualclosedate'); ?></th>
		<th><?php __('Nextstep'); ?></th>
		<th><?php __('Customprobability'); ?></th>
		<th><?php __('Createddate'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($jobcategory['Opportunity'] as $opportunity):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $opportunity['id'];?></td>
			<td><?php echo $opportunity['customer_id'];?></td>
			<td><?php echo $opportunity['jobcategory_id'];?></td>
			<td><?php echo $opportunity['stage_id'];?></td>
			<td><?php echo $opportunity['name'];?></td>
			<td><?php echo $opportunity['description'];?></td>
			<td><?php echo $opportunity['shortdescription'];?></td>
			<td><?php echo $opportunity['owner'];?></td>
			<td><?php echo $opportunity['leadsource'];?></td>
			<td><?php echo $opportunity['amount'];?></td>
			<td><?php echo $opportunity['expamount'];?></td>
			<td><?php echo $opportunity['forecastedclosedate'];?></td>
			<td><?php echo $opportunity['actualclosedate'];?></td>
			<td><?php echo $opportunity['nextstep'];?></td>
			<td><?php echo $opportunity['customprobability'];?></td>
			<td><?php echo $opportunity['createddate'];?></td>
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
