<div class="customers form">
<?php echo $form->create('Customer');?>
	<fieldset>
 		<legend><?php __('Add Customer');?></legend>
	<?php
		echo $form->input('company_id');
		echo $form->input('name');
		echo $form->input('address1');
		echo $form->input('address2');
		echo $form->input('city');
		echo $form->input('state');
		echo $form->input('zip');
		echo $form->input('country');
		echo $form->input('phone');
		echo $form->input('fax');
		echo $form->input('url');
		echo $form->input('description');
		echo $form->input('short_description');
		echo $form->input('created_date');
		echo $form->input('updated_date');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Customers', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Companies', true), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Company', true), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Jobs', true), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Job', true), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Opportunities', true), array('controller' => 'opportunities', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Opportunity', true), array('controller' => 'opportunities', 'action' => 'add')); ?> </li>
	</ul>
</div>