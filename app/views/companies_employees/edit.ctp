<div class="companiesEmployees form">
<?php echo $form->create('CompaniesEmployee');?>
	<fieldset>
 		<legend><?php __('Edit CompaniesEmployee');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('company_id');
		echo $form->input('employee_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('CompaniesEmployee.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('CompaniesEmployee.id'))); ?></li>
		<li><?php echo $html->link(__('List CompaniesEmployees', true), array('action' => 'index'));?></li>
	</ul>
</div>