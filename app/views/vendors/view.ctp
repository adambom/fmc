<div class="vendors view">
<h2><?php  __('Vendor');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $vendor['Vendor']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Company'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($vendor['Company']['name'], array('controller' => 'companies', 'action' => 'view', $vendor['Company']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $vendor['Vendor']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Vendor', true), array('action' => 'edit', $vendor['Vendor']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Vendor', true), array('action' => 'delete', $vendor['Vendor']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $vendor['Vendor']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Vendors', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Vendor', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Companies', true), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Company', true), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Parts', true), array('controller' => 'parts', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Part', true), array('controller' => 'parts', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Productreturns', true), array('controller' => 'productreturns', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Productreturn', true), array('controller' => 'productreturns', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Opportunities', true), array('controller' => 'opportunities', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Opportunity', true), array('controller' => 'opportunities', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Parts');?></h3>
	<?php if (!empty($vendor['Part'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Vendor Id'); ?></th>
		<th><?php __('Manufacturer Id'); ?></th>
		<th><?php __('Partcategory Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Description'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($vendor['Part'] as $part):
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
			<td><?php echo $part['name'];?></td>
			<td><?php echo $part['description'];?></td>
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
<div class="related">
	<h3><?php __('Related Productreturns');?></h3>
	<?php if (!empty($vendor['Productreturn'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Vendor Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($vendor['Productreturn'] as $productreturn):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $productreturn['id'];?></td>
			<td><?php echo $productreturn['vendor_id'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'productreturns', 'action' => 'view', $productreturn['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'productreturns', 'action' => 'edit', $productreturn['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'productreturns', 'action' => 'delete', $productreturn['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $productreturn['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Productreturn', true), array('controller' => 'productreturns', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Opportunities');?></h3>
	<?php if (!empty($vendor['Opportunity'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Customer Id'); ?></th>
		<th><?php __('Jobcategory Id'); ?></th>
		<th><?php __('Stage Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Description'); ?></th>
		<th><?php __('Category'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($vendor['Opportunity'] as $opportunity):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $opportunity['id'];?></td>
			<td><?php echo $opportunity['customer_id'];?></td>
			<td><?php echo $opportunity['jobcategory_id'];?></td>
			<td><?php echo $opportunity['stage_id'];?></td>
			<td><?php echo $opportunity['name'];?></td>
			<td><?php echo $opportunity['description'];?></td>
			<td><?php if($opportunity['OpportunitiesVendor']['primary']) {
					echo 'Primary';
					} else {
						echo 'Secondary';
					} ?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'opportunities', 'action' => 'view', $opportunity['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'opportunities', 'action' => 'edit', $opportunity['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'opportunities', 'action' => 'delete', $opportunity['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $opportunity['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Opportunity', true), array('controller' => 'opportunities', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
