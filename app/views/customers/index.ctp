<div class="customers index">
<h2><?php __('Customers');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('company_id');?></th>
	<th><?php echo $paginator->sort('name');?></th>
	<th><?php echo $paginator->sort('address1');?></th>
	<th><?php echo $paginator->sort('address2');?></th>
	<th><?php echo $paginator->sort('city');?></th>
	<th><?php echo $paginator->sort('state');?></th>
	<th><?php echo $paginator->sort('zip');?></th>
	<th><?php echo $paginator->sort('country');?></th>
	<th><?php echo $paginator->sort('phone');?></th>
	<th><?php echo $paginator->sort('fax');?></th>
	<th><?php echo $paginator->sort('url');?></th>
	<th><?php echo $paginator->sort('description');?></th>
	<th><?php echo $paginator->sort('short_description');?></th>
	<th><?php echo $paginator->sort('created_date');?></th>
	<th><?php echo $paginator->sort('updated_date');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($customers as $customer):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $customer['Customer']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($customer['Company']['name'], array('controller' => 'companies', 'action' => 'view', $customer['Company']['id'])); ?>
		</td>
		<td>
			<?php echo $customer['Customer']['name']; ?>
		</td>
		<td>
			<?php echo $customer['Customer']['address1']; ?>
		</td>
		<td>
			<?php echo $customer['Customer']['address2']; ?>
		</td>
		<td>
			<?php echo $customer['Customer']['city']; ?>
		</td>
		<td>
			<?php echo $customer['Customer']['state']; ?>
		</td>
		<td>
			<?php echo $customer['Customer']['zip']; ?>
		</td>
		<td>
			<?php echo $customer['Customer']['country']; ?>
		</td>
		<td>
			<?php echo $customer['Customer']['phone']; ?>
		</td>
		<td>
			<?php echo $customer['Customer']['fax']; ?>
		</td>
		<td>
			<?php echo $customer['Customer']['url']; ?>
		</td>
		<td>
			<?php echo $customer['Customer']['description']; ?>
		</td>
		<td>
			<?php echo $customer['Customer']['short_description']; ?>
		</td>
		<td>
			<?php echo $customer['Customer']['created_date']; ?>
		</td>
		<td>
			<?php echo $customer['Customer']['updated_date']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $customer['Customer']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $customer['Customer']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $customer['Customer']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $customer['Customer']['id'])); ?>
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
		<li><?php echo $html->link(__('New Customer', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Companies', true), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Company', true), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Jobs', true), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Job', true), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Opportunities', true), array('controller' => 'opportunities', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Opportunity', true), array('controller' => 'opportunities', 'action' => 'add')); ?> </li>
	</ul>
</div>