<div class="partcategories view">
<h2><?php  __('Partcategory');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $partcategory['Partcategory']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $partcategory['Partcategory']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $partcategory['Partcategory']['description']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Partcategory', true), array('action' => 'edit', $partcategory['Partcategory']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Partcategory', true), array('action' => 'delete', $partcategory['Partcategory']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $partcategory['Partcategory']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Partcategories', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Partcategory', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Parts', true), array('controller' => 'parts', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Part', true), array('controller' => 'parts', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Partsubcategories', true), array('controller' => 'partsubcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Partsubcategory', true), array('controller' => 'partsubcategories', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Parts');?></h3>
	<?php if (!empty($partcategory['Part'])):?>
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
		foreach ($partcategory['Part'] as $part):
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
	<h3><?php __('Related Partsubcategories');?></h3>
	<?php if (!empty($partcategory['Partsubcategory'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Partcategory Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Description'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($partcategory['Partsubcategory'] as $partsubcategory):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $partsubcategory['id'];?></td>
			<td><?php echo $partsubcategory['partcategory_id'];?></td>
			<td><?php echo $partsubcategory['name'];?></td>
			<td><?php echo $partsubcategory['description'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'partsubcategories', 'action' => 'view', $partsubcategory['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'partsubcategories', 'action' => 'edit', $partsubcategory['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'partsubcategories', 'action' => 'delete', $partsubcategory['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $partsubcategory['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Partsubcategory', true), array('controller' => 'partsubcategories', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
