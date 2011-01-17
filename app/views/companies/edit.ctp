<div class="companies form">
<?php echo $form->create('Company');?>
	<fieldset>
 		<legend><?php __('Edit Company');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('name');
		echo $form->input('Employee');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Company.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Company.id'))); ?></li>
		<li><?php echo $html->link(__('List Companies', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Employees', true), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Employee', true), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>