<div class="partsubcategories index">
<h2><?php __('Partsubcategories');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('partcategory_id');?></th>
	<th><?php echo $paginator->sort('name');?></th>
	<th><?php echo $paginator->sort('description');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($partsubcategories as $partsubcategory):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $partsubcategory['Partsubcategory']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($partsubcategory['Partcategory']['name'], array('controller' => 'partcategories', 'action' => 'view', $partsubcategory['Partcategory']['id'])); ?>
		</td>
		<td>
			<?php echo $partsubcategory['Partsubcategory']['name']; ?>
		</td>
		<td>
			<?php echo $partsubcategory['Partsubcategory']['description']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $partsubcategory['Partsubcategory']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $partsubcategory['Partsubcategory']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $partsubcategory['Partsubcategory']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $partsubcategory['Partsubcategory']['id'])); ?>
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
		<li><?php echo $html->link(__('New Partsubcategory', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Partcategories', true), array('controller' => 'partcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Partcategory', true), array('controller' => 'partcategories', 'action' => 'add')); ?> </li>
	</ul>
</div>