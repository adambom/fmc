<div class="employees form">
<?php echo $form->create('Employee');?>
	<fieldset>
 		<legend><?php __('Add Employee');?></legend>
	<?php
		echo $form->input('fname');
		echo $form->input('lname');
		echo $form->input('phone');
		echo $form->input('email');
		echo $form->input('Company');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Employees', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Companies', true), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Company', true), array('controller' => 'companies', 'action' => 'add')); ?> </li>
	</ul>
</div>