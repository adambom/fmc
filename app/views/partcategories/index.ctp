<div class="partcategories index">
<h2><?php __('Part Categories');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('name');?></th>
	<th><?php echo $paginator->sort('description');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($partcategories as $partcategory):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $partcategory['Partcategory']['id']; ?>
		</td>
		<td>
			<?php echo $partcategory['Partcategory']['name']; ?>
		</td>
		<td>
			<?php echo $partcategory['Partcategory']['description']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $partcategory['Partcategory']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $partcategory['Partcategory']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $partcategory['Partcategory']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $partcategory['Partcategory']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $paginator->first('<< '.__('first', true), array(), null, array('class'=>'disabled'));?>
 |	<?php echo $paginator->prev('< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
 |	<?php echo $paginator->next(__('next', true).' >', array(), null, array('class' => 'disabled'));?>
 |	<?php echo $paginator->last(__('last', true).' >>', array(), null, array('class'=>'disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New Part Category', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Parts', true), array('controller' => 'parts', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Part', true), array('controller' => 'parts', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Part Subcategories', true), array('controller' => 'partsubcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Part Subcategory', true), array('controller' => 'partsubcategories', 'action' => 'add')); ?> </li>
	</ul>
</div>