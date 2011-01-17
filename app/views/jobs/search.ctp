<div class="jobs index">
<h2><?php __('Jobs');?></h2>
<?php
echo $form->create("Job", array('action' => 'search'));
echo $form->input("q", array('label' => 'Search for'));
echo $form->end("Search");
?>

<table cellpadding="0" cellspacing="0">
<tr>
	<th>Id</th>
	<th>Customer</th>
	<th>Location</th>
	<th>Job Type</th>
	<th>Job Category</th>
	<th>Job Number</th>
	<th>Name</th>
	<th>Date Created</th>
	<th>Status</th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($results as $job):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $job['Job']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($job['Company']['name'], array('controller' => 'companies', 'action' => 'view', $job['Company']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($job['Location']['name'], array('controller' => 'locations', 'action' => 'view', $job['Location']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($job['Jobtype']['name'], array('controller' => 'jobtypes', 'action' => 'view', $job['Jobtype']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($job['Jobcategory']['name'], array('controller' => 'jobcategories', 'action' => 'view', $job['Jobcategory']['id'])); ?>
		</td>
		<td>
			<?php echo $job['Job']['jobnumber']; ?>
		</td>
		<td>
			<?php echo $job['Job']['name']; ?>
		</td>
		<td>
			<?php echo $job['Job']['date']; ?>
		</td>
		<td>
			<?php echo $job['Job']['status']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $job['Job']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $job['Job']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $job['Job']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $job['Job']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New Job', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Customers', true), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Customer', true), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Locations', true), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Location', true), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Jobtypes', true), array('controller' => 'jobtypes', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Jobtype', true), array('controller' => 'jobtypes', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Jobcategories', true), array('controller' => 'jobcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Jobcategory', true), array('controller' => 'jobcategories', 'action' => 'add')); ?> </li>
	</ul>
</div>