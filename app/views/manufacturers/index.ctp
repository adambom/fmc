<div class="manufacturers index">
<h2><?php __('Manufacturers');?></h2>
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
	<th><?php echo $paginator->sort('type');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($manufacturers as $manufacturer):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $manufacturer['Manufacturer']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($manufacturer['Company']['name'], array('controller' => 'companies', 'action' => 'view', $manufacturer['Company']['id'])); ?>
		</td>
		<td>
			<?php echo $manufacturer['Manufacturer']['name']; ?>
		</td>
		<td>
			<?php echo $manufacturer['Manufacturer']['type']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $manufacturer['Manufacturer']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $manufacturer['Manufacturer']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $manufacturer['Manufacturer']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $manufacturer['Manufacturer']['id'])); ?>
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
		<li><?php echo $html->link(__('New Manufacturer', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Companies', true), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Company', true), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Parts', true), array('controller' => 'parts', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Part', true), array('controller' => 'parts', 'action' => 'add')); ?> </li>
	</ul>
</div>