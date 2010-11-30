<div class="opportunities index">
<h2><?php __('Opportunities');?></h2>
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
	<th><?php echo $paginator->sort('jobcategory_id');?></th>
	<th><?php echo $paginator->sort('stage_id');?></th>
	<th><?php echo $paginator->sort('name');?></th>
	<th><?php echo $paginator->sort('description');?></th>
	<th><?php echo $paginator->sort('shortdescription');?></th>
	<th><?php echo $paginator->sort('owner');?></th>
	<th><?php echo $paginator->sort('leadsource');?></th>
	<th><?php echo $paginator->sort('amount');?></th>
	<th><?php echo $paginator->sort('expamount');?></th>
	<th><?php echo $paginator->sort('forecastedclosedate');?></th>
	<th><?php echo $paginator->sort('actualclosedate');?></th>
	<th><?php echo $paginator->sort('nextstep');?></th>
	<th><?php echo $paginator->sort('customprobability');?></th>
	<th><?php echo $paginator->sort('createddate');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($opportunities as $opportunity):
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
			<?php echo $html->link($opportunity['Customer']['name'], array('controller' => 'customers', 'action' => 'view', $opportunity['Customer']['id'])); ?>
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
			<?php echo $opportunity['Opportunity']['description']; ?>
		</td>
		<td>
			<?php echo $opportunity['Opportunity']['shortdescription']; ?>
		</td>
		<td>
			<?php echo $opportunity['Opportunity']['owner']; ?>
		</td>
		<td>
			<?php echo $opportunity['Opportunity']['leadsource']; ?>
		</td>
		<td>
			<?php echo $opportunity['Opportunity']['amount']; ?>
		</td>
		<td>
			<?php echo $opportunity['Opportunity']['expamount']; ?>
		</td>
		<td>
			<?php echo $opportunity['Opportunity']['forecastedclosedate']; ?>
		</td>
		<td>
			<?php echo $opportunity['Opportunity']['actualclosedate']; ?>
		</td>
		<td>
			<?php echo $opportunity['Opportunity']['nextstep']; ?>
		</td>
		<td>
			<?php echo $opportunity['Opportunity']['customprobability']; ?>
		</td>
		<td>
			<?php echo $opportunity['Opportunity']['createddate']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $opportunity['Opportunity']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $opportunity['Opportunity']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $opportunity['Opportunity']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $opportunity['Opportunity']['id'])); ?>
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