<div class="jobs index">
<h2><?php __('Jobs');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('customer_id');?></th>
	<th><?php echo $paginator->sort('jobtype_id');?></th>
	<th><?php echo $paginator->sort('jobcategory_id');?></th>
	<th><?php echo $paginator->sort('name');?></th>
	<th><?php echo $paginator->sort('description');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($jobs as $job):
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
			<?php echo $html->link($job['Customer']['id'], array('controller' => 'customers', 'action' => 'view', $job['Customer']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($job['Jobtype']['name'], array('controller' => 'jobtypes', 'action' => 'view', $job['Jobtype']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($job['Jobcategory']['name'], array('controller' => 'jobcategories', 'action' => 'view', $job['Jobcategory']['id'])); ?>
		</td>
		<td>
			<?php echo $job['Job']['name']; ?>
		</td>
		<td>
			<?php echo $job['Job']['description']; ?>
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
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New Job', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Customers', true), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Customer', true), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Jobtypes', true), array('controller' => 'jobtypes', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Jobtype', true), array('controller' => 'jobtypes', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Jobcategories', true), array('controller' => 'jobcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Jobcategory', true), array('controller' => 'jobcategories', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Locations', true), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Location', true), array('controller' => 'locations', 'action' => 'add')); ?> </li>
	</ul>
</div>