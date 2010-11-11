<div class="partcategories form">
<?php echo $form->create('Partcategory');?>
	<fieldset>
 		<legend><?php __('Add Partcategory');?></legend>
	<?php
		echo $form->input('name');
		echo $form->input('description');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Partcategories', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Parts', true), array('controller' => 'parts', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Part', true), array('controller' => 'parts', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Partsubcategories', true), array('controller' => 'partsubcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Partsubcategory', true), array('controller' => 'partsubcategories', 'action' => 'add')); ?> </li>
	</ul>
</div>