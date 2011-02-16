<div class="locations view">
<h2><?php  __('Location');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $location['Location']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $location['Location']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Address1'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $location['Location']['address1']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Address2'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $location['Location']['address2']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('City'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $location['Location']['city']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('State'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $location['Location']['state']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Zip'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $location['Location']['zip']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Phone'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $location['Location']['phone']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Location', true), array('action' => 'edit', $location['Location']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Location', true), array('action' => 'delete', $location['Location']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $location['Location']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Locations', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Location', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Jobs', true), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Job', true), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Jobs');?></h3>
	<?php if (!empty($location['Job'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Customer'); ?></th>
		<th><?php __('Location'); ?></th>
		<th><?php __('Job Type'); ?></th>
		<th><?php __('Job Category'); ?></th>
		<th><?php __('Job Number'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Date'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($location['Job'] as $job):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $job['id'];?></td>
			<td><?php if($job['Company']['name']){echo $job['Company']['name'];} ?></td>
			<td><?php if($job['Location']['name']){echo $job['Location']['name'];} ?></td>
			<td><?php if($job['Jobtype']['name']){echo $job['Jobtype']['name'];} ?></td>
			<td><?php if($job['Jobcategory']){echo $job['Jobcategory']['name'];} ?></td>
			<td><?php echo $job['jobnumber'];?></td>
			<td><?php echo $job['name'];?></td>
			<td><?php echo $job['date'];?></td>
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
