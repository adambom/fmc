<div class="partsubcategories view">
<h2><?php  __('Part Subcategory');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $partsubcategory['Partsubcategory']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Category'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($partsubcategory['Partcategory']['name'], array('controller' => 'partcategories', 'action' => 'view', $partsubcategory['Partcategory']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $partsubcategory['Partsubcategory']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $partsubcategory['Partsubcategory']['description']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Subcategory', true), array('action' => 'edit', $partsubcategory['Partsubcategory']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Subcategory', true), array('action' => 'delete', $partsubcategory['Partsubcategory']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $partsubcategory['Partsubcategory']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Subcategories', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Subcategory', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Part Categories', true), array('controller' => 'partcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Part Category', true), array('controller' => 'partcategories', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Parts', true), array('controller' => 'parts', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Part', true), array('controller' => 'parts', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Parts');?></h3>
	<?php if (!empty($partsubcategory['Part'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Vendor'); ?></th>
		<th><?php __('Manufacturer'); ?></th>
		<th><?php __('Category'); ?></th>
		<th><?php __('Device ID'); ?></th>
		<th><?php __('Part Number'); ?></th>
		<th><?php __('Description'); ?></th>
		<th><?php __('Price'); ?></th>
		<th><?php __('Material Cost'); ?></th>
		<th><?php __('Type'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($partsubcategory['Part'] as $part):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $part['id'];?></td>
			<td><?php echo $part['Vendor']['name'];?></td>
			<td><?php echo $part['Manufacturer']['name'];?></td>
			<td><?php echo $part['Partcategory']['name'];?></td>
			<td><?php echo $part['deviceid'];?></td>
			<td><?php echo $part['partnumber'];?></td>
			<td><?php echo $part['description'];?></td>
			<td><?php echo $part['price'];?></td>
			<td><?php echo $part['materialcost'];?></td>
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
