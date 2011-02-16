<div class="productreturns view">
<h2><?php  __('Productreturn');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productreturn['Productreturn']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Vendor'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($productreturn['Vendor']['name'], array('controller' => 'vendors', 'action' => 'view', $productreturn['Vendor']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fmc Return No'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productreturn['Productreturn']['fmc_return_no']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Date'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productreturn['Productreturn']['date']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Serial'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productreturn['Productreturn']['serial']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Reason'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productreturn['Productreturn']['reason']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Rma'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productreturn['Productreturn']['rma']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ponumber'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productreturn['Productreturn']['ponumber']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Job'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($productreturn['Job']['name'], array('controller' => 'jobs', 'action' => 'view', $productreturn['Job']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Credit'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productreturn['Productreturn']['credit']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Credit Received'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productreturn['Productreturn']['credit_received']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Product Returned'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productreturn['Productreturn']['product_returned']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Closed'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productreturn['Productreturn']['closed']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Comments'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productreturn['Productreturn']['comments']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Productreturn', true), array('action' => 'edit', $productreturn['Productreturn']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Productreturn', true), array('action' => 'delete', $productreturn['Productreturn']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $productreturn['Productreturn']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Productreturns', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Productreturn', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Vendors', true), array('controller' => 'vendors', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Vendor', true), array('controller' => 'vendors', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Jobs', true), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Job', true), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Parts', true), array('controller' => 'parts', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Part', true), array('controller' => 'parts', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Parts');?></h3>
	<?php if (!empty($productreturn['Part'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Vendor Id'); ?></th>
		<th><?php __('Manufacturer Id'); ?></th>
		<th><?php __('Partcategory Id'); ?></th>
		<th><?php __('Partsubcategory Id'); ?></th>
		<th><?php __('Deviceid'); ?></th>
		<th><?php __('Partnumber'); ?></th>
		<th><?php __('Description'); ?></th>
		<th><?php __('Price'); ?></th>
		<th><?php __('Materialcost'); ?></th>
		<th><?php __('Specpath'); ?></th>
		<th><?php __('Guidepath'); ?></th>
		<th><?php __('Type'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($productreturn['Part'] as $part):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $part['id'];?></td>
			<td><?php echo $part['vendor_id'];?></td>
			<td><?php echo $part['manufacturer_id'];?></td>
			<td><?php echo $part['partcategory_id'];?></td>
			<td><?php echo $part['partsubcategory_id'];?></td>
			<td><?php echo $part['deviceid'];?></td>
			<td><?php echo $part['partnumber'];?></td>
			<td><?php echo $part['description'];?></td>
			<td><?php echo $part['price'];?></td>
			<td><?php echo $part['materialcost'];?></td>
			<td><?php echo $part['specpath'];?></td>
			<td><?php echo $part['guidepath'];?></td>
			<td><?php echo $part['type'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'parts', 'action' => 'view', $part['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'parts', 'action' => 'edit', $part['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'parts', 'action' => 'delete', $part['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $part['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Part', true), array('controller' => 'parts', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
