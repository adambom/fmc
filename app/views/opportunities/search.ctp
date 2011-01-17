<div class="opportunities index">
<h2><?php __('Opportunities');?></h2>
<?php
echo $form->create("Opportunity", array('action' => 'search'));
echo $form->input("q", array('label' => 'Search for'));
echo $form->end("Search");
?>
<table cellpadding="0" cellspacing="0">
<tr>
	<th>Id</th>
	<th>Customer</th>
	<th>Job Category</th>
	<th>Stage</th>
	<th>Name</th>
	<th>Short Description</th>
	<th>Owner</th>
	<th>Amount</th>
	<th>Date Created</th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($results as $opportunity):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $opportunity['Opportunity']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($opportunity['Company']['name'], array('controller' => 'companies', 'action' => 'view', $opportunity['Company']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($opportunity['Jobcategory']['name'], array('controller' => 'jobcategories', 'action' => 'view', $opportunity['Jobcategory']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($opportunity['Stage']['name'], array('controller' => 'stages', 'action' => 'view', $opportunity['Stage']['id'])); ?>
		</td>
		<td>
			<?php echo $opportunity['Opportunity']['name']; ?>
		</td>
		<td>
			<?php echo $opportunity['Opportunity']['shortdescription']; ?>
		</td>
		<td>
			<?php echo $opportunity['Opportunity']['owner']; ?>
		</td>
		<td>
			<?php echo $opportunity['Opportunity']['amount']; ?>
		</td>
		<td>
			<?php echo $opportunity['Opportunity']['createddate']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $opportunity['Opportunity']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $opportunity['Opportunity']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $opportunity['Opportunity']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $opportunity['Opportunity']['id'])); ?>
			<?php echo $html->link(__('Convert to Job', true), array('controller'=>'jobs', 'action' => 'convert', $opportunity['Opportunity']['id'], $opportunity['Opportunity']['company_id'], $opportunity['Opportunity']['jobcategory_id'], $opportunity['Opportunity']['name'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New Opportunity', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Customers', true), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Customer', true), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Jobcategories', true), array('controller' => 'jobcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Jobcategory', true), array('controller' => 'jobcategories', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Stages', true), array('controller' => 'stages', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Stage', true), array('controller' => 'stages', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Vendors', true), array('controller' => 'vendors', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Vendor', true), array('controller' => 'vendors', 'action' => 'add')); ?> </li>
	</ul>
</div>