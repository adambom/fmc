<div class="companies view">
<h2><?php  __('Company');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $company['Company']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $company['Company']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Company', true), array('action' => 'edit', $company['Company']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Company', true), array('action' => 'delete', $company['Company']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $company['Company']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Companies', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Company', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Customers', true), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Customer', true), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Manufacturers', true), array('controller' => 'manufacturers', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Manufacturer', true), array('controller' => 'manufacturers', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Vendors', true), array('controller' => 'vendors', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Vendor', true), array('controller' => 'vendors', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Employees', true), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Employee', true), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Customers');?></h3>
	<?php if (!empty($company['Customer'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Company Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($company['Customer'] as $customer):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $customer['id'];?></td>
			<td><?php echo $customer['company_id'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'customers', 'action' => 'view', $customer['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'customers', 'action' => 'edit', $customer['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'customers', 'action' => 'delete', $customer['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $customer['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Customer', true), array('controller' => 'customers', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Manufacturers');?></h3>
	<?php if (!empty($company['Manufacturer'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Company Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($company['Manufacturer'] as $manufacturer):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $manufacturer['id'];?></td>
			<td><?php echo $manufacturer['company_id'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'manufacturers', 'action' => 'view', $manufacturer['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'manufacturers', 'action' => 'edit', $manufacturer['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'manufacturers', 'action' => 'delete', $manufacturer['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $manufacturer['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Manufacturer', true), array('controller' => 'manufacturers', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Vendors');?></h3>
	<?php if (!empty($company['Vendor'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Company Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($company['Vendor'] as $vendor):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $vendor['id'];?></td>
			<td><?php echo $vendor['company_id'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'vendors', 'action' => 'view', $vendor['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'vendors', 'action' => 'edit', $vendor['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'vendors', 'action' => 'delete', $vendor['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $vendor['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Vendor', true), array('controller' => 'vendors', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Employees');?></h3>
	<?php if (!empty($company['Employee'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Fname'); ?></th>
		<th><?php __('Lname'); ?></th>
		<th><?php __('Phone'); ?></th>
		<th><?php __('Email'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($company['Employee'] as $employee):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $employee['id'];?></td>
			<td><?php echo $employee['fname'];?></td>
			<td><?php echo $employee['lname'];?></td>
			<td><?php echo $employee['phone'];?></td>
			<td><?php echo $employee['email'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'employees', 'action' => 'view', $employee['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'employees', 'action' => 'edit', $employee['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'employees', 'action' => 'delete', $employee['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $employee['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Employee', true), array('controller' => 'employees', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
