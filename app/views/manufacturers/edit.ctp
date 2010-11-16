<div class="manufacturers form">
<?php echo $form->create('Manufacturer');?>
	<fieldset>
 		<legend><?php __('Edit Manufacturer');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('company_id');
		echo $form->input('name');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Manufacturer.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Manufacturer.id'))); ?></li>
		<li><?php echo $html->link(__('List Manufacturers', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Companies', true), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Company', true), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Parts', true), array('controller' => 'parts', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Part', true), array('controller' => 'parts', 'action' => 'add')); ?> </li>
	</ul>
</div>