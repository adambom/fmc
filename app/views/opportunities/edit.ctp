<div class="opportunities form">
<?php echo $form->create('Opportunity');?>
	<fieldset>
 		<legend><?php __('Edit Opportunity');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('customer_id');
		echo $form->input('jobcategory_id');
		echo $form->input('stage_id');
		echo $form->input('name');
		echo $form->input('description');
		echo $form->input('Vendor');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Opportunity.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Opportunity.id'))); ?></li>
		<li><?php echo $html->link(__('List Opportunities', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Customers', true), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Customer', true), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Jobcategories', true), array('controller' => 'jobcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Jobcategory', true), array('controller' => 'jobcategories', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Stages', true), array('controller' => 'stages', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Stage', true), array('controller' => 'stages', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Vendors', true), array('controller' => 'vendors', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Vendor', true), array('controller' => 'vendors', 'action' => 'add')); ?> </li>
	</ul>
</div>