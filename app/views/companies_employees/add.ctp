<div class="companiesEmployees form">
<?php echo $form->create('CompaniesEmployee');?>
	<fieldset>
 		<legend><?php __('Add CompaniesEmployee');?></legend>
	<?php
		echo $form->input('company_id');
		echo $form->input('employee_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List CompaniesEmployees', true), array('action' => 'index'));?></li>
	</ul>
</div>