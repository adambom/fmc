<div class="jobs form">
<?php echo $form->create('Job');?>
	<fieldset>
 		<legend><?php __('Add Job');?></legend>
	<?php
		echo $form->input('customer_id');
		echo $form->input('jobtype_id');
		echo $form->input('jobcategory_id');
		echo $form->input('name');
		echo $form->input('description');
		echo $form->input('Location');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Jobs', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Customers', true), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Customer', true), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Jobtypes', true), array('controller' => 'jobtypes', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Jobtype', true), array('controller' => 'jobtypes', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Jobcategories', true), array('controller' => 'jobcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Jobcategory', true), array('controller' => 'jobcategories', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Locations', true), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Location', true), array('controller' => 'locations', 'action' => 'add')); ?> </li>
	</ul>
</div>