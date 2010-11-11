<div class="partsubcategories form">
<?php echo $form->create('Partsubcategory');?>
	<fieldset>
 		<legend><?php __('Edit Partsubcategory');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('partcategory_id');
		echo $form->input('name');
		echo $form->input('description');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Partsubcategory.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Partsubcategory.id'))); ?></li>
		<li><?php echo $html->link(__('List Partsubcategories', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Partcategories', true), array('controller' => 'partcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Partcategory', true), array('controller' => 'partcategories', 'action' => 'add')); ?> </li>
	</ul>
</div>