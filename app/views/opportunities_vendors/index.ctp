<div class="opportunitiesVendors index">
<h2><?php __('OpportunitiesVendors');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('opportunity_id');?></th>
	<th><?php echo $paginator->sort('vendor_id');?></th>
	<th><?php echo $paginator->sort('primary');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($opportunitiesVendors as $opportunitiesVendor):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $opportunitiesVendor['OpportunitiesVendor']['id']; ?>
		</td>
		<td>
			<?php echo $opportunitiesVendor['OpportunitiesVendor']['opportunity_id']; ?>
		</td>
		<td>
			<?php echo $opportunitiesVendor['OpportunitiesVendor']['vendor_id']; ?>
		</td>
		<td>
			<?php echo $opportunitiesVendor['OpportunitiesVendor']['primary']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $opportunitiesVendor['OpportunitiesVendor']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $opportunitiesVendor['OpportunitiesVendor']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $opportunitiesVendor['OpportunitiesVendor']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $opportunitiesVendor['OpportunitiesVendor']['id'])); ?>
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
		<li><?php echo $html->link(__('New OpportunitiesVendor', true), array('action' => 'add')); ?></li>
	</ul>
</div>