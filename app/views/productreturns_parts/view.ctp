<div class="productreturnsParts view">
<h2><?php  __('ProductreturnsPart');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productreturnsPart['ProductreturnsPart']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Productreturn Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productreturnsPart['ProductreturnsPart']['productreturn_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Part Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productreturnsPart['ProductreturnsPart']['part_id']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit ProductreturnsPart', true), array('action' => 'edit', $productreturnsPart['ProductreturnsPart']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete ProductreturnsPart', true), array('action' => 'delete', $productreturnsPart['ProductreturnsPart']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $productreturnsPart['ProductreturnsPart']['id'])); ?> </li>
		<li><?php echo $html->link(__('List ProductreturnsParts', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New ProductreturnsPart', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
