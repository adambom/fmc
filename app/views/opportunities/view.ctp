<div class="opportunities view">
<h2><?php  __('Opportunity');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $opportunity['Opportunity']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Customer'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($opportunity['Customer']['id'], array('controller' => 'customers', 'action' => 'view', $opportunity['Customer']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Jobcategory'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($opportunity['Jobcategory']['name'], array('controller' => 'jobcategories', 'action' => 'view', $opportunity['Jobcategory']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Stage'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($opportunity['Stage']['name'], array('controller' => 'stages', 'action' => 'view', $opportunity['Stage']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $opportunity['Opportunity']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $opportunity['Opportunity']['description']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Opportunity', true), array('action' => 'edit', $opportunity['Opportunity']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Opportunity', true), array('action' => 'delete', $opportunity['Opportunity']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $opportunity['Opportunity']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Opportunities', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Opportunity', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Customers', true), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Customer', true), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Jobcategories', true), array('controller' => 'jobcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Jobcategory', true), array('controller' => 'jobcategories', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Stages', true), array('controller' => 'stages', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Stage', true), array('controller' => 'stages', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Vendors', true), array('controller' => 'vendors', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Vendor', true), array('controller' => 'vendors', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Vendors');?></h3>
	<?php if (!empty($opportunity['Vendor'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Company Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($opportunity['Vendor'] as $vendor):
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
