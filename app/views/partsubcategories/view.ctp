<div class="partsubcategories view">
<h2><?php  __('Partsubcategory');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $partsubcategory['Partsubcategory']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Partcategory'); ?></dt>
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
		<li><?php echo $html->link(__('Edit Partsubcategory', true), array('action' => 'edit', $partsubcategory['Partsubcategory']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Partsubcategory', true), array('action' => 'delete', $partsubcategory['Partsubcategory']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $partsubcategory['Partsubcategory']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Partsubcategories', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Partsubcategory', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Partcategories', true), array('controller' => 'partcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Partcategory', true), array('controller' => 'partcategories', 'action' => 'add')); ?> </li>
	</ul>
</div>
