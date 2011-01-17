<div class="parts form">
<?php echo $form->create('Part');?>
	<fieldset>
 		<legend><?php __('Edit Part');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('vendor_id');
		echo $form->input('manufacturer_id');
		echo $form->input('partcategory_id', array('label' => 'Category'));
		echo $form->input('partsubcategory_id', array('label' => 'Subcategory'));
		echo $form->input('deviceid', array('label' => 'Device ID'));
		echo $form->input('partnumber', array('label' => 'Part Number'));
		echo $form->input('description');
		echo $form->input('price');
		echo $form->input('materialcost');
		echo $form->input('specpath');
		echo $form->input('guidepath');
		echo $form->input('type');
		echo $form->input('Productreturn');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Part.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Part.id'))); ?></li>
		<li><?php echo $html->link(__('List Parts', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Companies', true), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Company', true), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Part Categories', true), array('controller' => 'partcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Part Category', true), array('controller' => 'partcategories', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Part Subcategories', true), array('controller' => 'partsubcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Part Subcategory', true), array('controller' => 'partsubcategories', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Product Returns', true), array('controller' => 'productreturns', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Product Return', true), array('controller' => 'productreturns', 'action' => 'add')); ?> </li>
	</ul>
</div>