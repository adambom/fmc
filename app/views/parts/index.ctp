<div class="parts index">
<h2><?php __('Parts');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('vendor_id');?></th>
	<th><?php echo $paginator->sort('manufacturer_id');?></th>
	<th><?php echo $paginator->sort('partcategory_id');?></th>
	<th><?php echo $paginator->sort('partsubcategory_id');?></th>
	<th><?php echo $paginator->sort('deviceid');?></th>
	<th><?php echo $paginator->sort('partnumber');?></th>
	<th><?php echo $paginator->sort('description');?></th>
	<th><?php echo $paginator->sort('price');?></th>
	<th><?php echo $paginator->sort('materialcost');?></th>
	<th><?php echo $paginator->sort('specpath');?></th>
	<th><?php echo $paginator->sort('guidepath');?></th>
	<th><?php echo $paginator->sort('type');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($parts as $part):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $part['Part']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($part['Vendor']['name'], array('controller' => 'vendors', 'action' => 'view', $part['Vendor']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($part['Manufacturer']['name'], array('controller' => 'manufacturers', 'action' => 'view', $part['Manufacturer']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($part['Partcategory']['name'], array('controller' => 'partcategories', 'action' => 'view', $part['Partcategory']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($part['Partsubcategory']['name'], array('controller' => 'partsubcategories', 'action' => 'view', $part['Partsubcategory']['id'])); ?>
		</td>
		<td>
			<?php echo $part['Part']['deviceid']; ?>
		</td>
		<td>
			<?php echo $part['Part']['partnumber']; ?>
		</td>
		<td>
			<?php echo $part['Part']['description']; ?>
		</td>
		<td>
			<?php echo $part['Part']['price']; ?>
		</td>
		<td>
			<?php echo $part['Part']['materialcost']; ?>
		</td>
		<td>
			<?php echo $part['Part']['specpath']; ?>
		</td>
		<td>
			<?php echo $part['Part']['guidepath']; ?>
		</td>
		<td>
			<?php echo $part['Part']['type']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $part['Part']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $part['Part']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $part['Part']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $part['Part']['id'])); ?>
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
		<li><?php echo $html->link(__('New Part', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Vendors', true), array('controller' => 'vendors', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Vendor', true), array('controller' => 'vendors', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Manufacturers', true), array('controller' => 'manufacturers', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Manufacturer', true), array('controller' => 'manufacturers', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Partcategories', true), array('controller' => 'partcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Partcategory', true), array('controller' => 'partcategories', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Partsubcategories', true), array('controller' => 'partsubcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Partsubcategory', true), array('controller' => 'partsubcategories', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Productreturns', true), array('controller' => 'productreturns', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Productreturn', true), array('controller' => 'productreturns', 'action' => 'add')); ?> </li>
	</ul>
</div>