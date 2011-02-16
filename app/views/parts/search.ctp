<?php $paginator->options(array('url' =>  array($q))); ?>
<div class="parts index">
<h2><?php __('Parts');?></h2>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New Part', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Companies', true), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Company', true), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Part Categories', true), array('controller' => 'partcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Part Category', true), array('controller' => 'partcategories', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Part Subcategories', true), array('controller' => 'partsubcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Part Subcategory', true), array('controller' => 'partsubcategories', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Product Returns', true), array('controller' => 'productreturns', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Product Return', true), array('controller' => 'productreturns', 'action' => 'add')); ?> </li>
	</ul>
</div>
<?php
echo $form->create("Part", array('action' => 'search'));
echo $form->input("q", array('label' => 'Search for', 'value'=>$q));
echo $form->end("Search");
?>
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
	<th><?php echo $paginator->sort('Category', 'partcategory_id');?></th>
	<th><?php echo $paginator->sort('Subcategory', 'partsubcategory_id');?></th>
	<th><?php echo $paginator->sort('Device ID', 'deviceid');?></th>
	<th><?php echo $paginator->sort('Part Number', 'partnumber');?></th>
	<th><?php echo $paginator->sort('description');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($results as $part):
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
			<?php echo $html->link($part['Vendor']['name'], array('controller' => 'companies', 'action' => 'view', $part['Vendor']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($part['Manufacturer']['name'], array('controller' => 'companies', 'action' => 'view', $part['Manufacturer']['id'])); ?>
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
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $part['Part']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $part['Part']['id'], $q)); ?>
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
		<li><?php echo $html->link(__('List Companies', true), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Company', true), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Part Categories', true), array('controller' => 'partcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Part Category', true), array('controller' => 'partcategories', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Part Subcategories', true), array('controller' => 'partsubcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Part Subcategory', true), array('controller' => 'partsubcategories', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Product Returns', true), array('controller' => 'productreturns', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Product Return', true), array('controller' => 'productreturns', 'action' => 'add')); ?> </li>
	</ul>
</div>