<div class="parts form">
<?php echo $form->create('Part');?>
	<fieldset>
 		<legend><?php __('Edit Part');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('vendor_id');
		echo $form->input('manufacturer_id');
		echo $form->input('partcategory_id');
		echo $form->input('name');
		echo $form->input('description');
		echo $form->input('Productreturn');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Part.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Part.id'))); ?></li>
		<li><?php echo $html->link(__('List Parts', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Vendors', true), array('controller' => 'vendors', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Vendor', true), array('controller' => 'vendors', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Manufacturers', true), array('controller' => 'manufacturers', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Manufacturer', true), array('controller' => 'manufacturers', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Partcategories', true), array('controller' => 'partcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Partcategory', true), array('controller' => 'partcategories', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Productreturns', true), array('controller' => 'productreturns', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Productreturn', true), array('controller' => 'productreturns', 'action' => 'add')); ?> </li>
	</ul>
</div>