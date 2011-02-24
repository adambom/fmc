<div class="productreturns index">
<h2><?php __('Productreturns');?></h2>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New Productreturn', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Companies', true), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Company', true), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Jobs', true), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Job', true), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Parts', true), array('controller' => 'parts', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Part', true), array('controller' => 'parts', 'action' => 'add')); ?> </li>
	</ul>
</div>
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
	<th><?php echo $paginator->sort('fmc_return_no');?></th>
	<th><?php echo $paginator->sort('date');?></th>
	<th><?php echo $paginator->sort('job_id');?></th>
	<th><?php echo $paginator->sort('credit');?></th>
	<th><?php echo $paginator->sort('closed');?></th>
	<th><?php echo $paginator->sort('comments');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($productreturns as $productreturn):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $productreturn['Productreturn']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($productreturn['Vendor']['name'], array('controller' => 'vendors', 'action' => 'view', $productreturn['Vendor']['id'])); ?>
		</td>
		<td>
			<?php echo $productreturn['Productreturn']['fmc_return_no']; ?>
		</td>
		<td>
			<?php echo $productreturn['Productreturn']['date']; ?>
		</td>
		<td>
			<?php echo $html->link($productreturn['Job']['name'], array('controller' => 'jobs', 'action' => 'view', $productreturn['Job']['id'])); ?>
		</td>
		<td>
			<?php echo $productreturn['Productreturn']['credit']; ?>
		</td>
		<td>
			<?php echo $productreturn['Productreturn']['closed']; ?>
		</td>
		<td>
			<?php echo $productreturn['Productreturn']['comments']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $productreturn['Productreturn']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $productreturn['Productreturn']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $productreturn['Productreturn']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $productreturn['Productreturn']['id'])); ?>
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
		<li><?php echo $html->link(__('New Productreturn', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Companies', true), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Company', true), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Jobs', true), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Job', true), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Parts', true), array('controller' => 'parts', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Part', true), array('controller' => 'parts', 'action' => 'add')); ?> </li>
	</ul>
</div>