<div class="jobs form">
<?php echo $form->create('Job');?>
	<fieldset>
 		<legend><?php __('Convert Opportunity to Job');?></legend>
	<?php
		echo $form->input('company_id', array('label'=>'Customer', 'value'=>$company_id));
		echo $form->input('location_id');
		echo $form->input('status', array('value'=>'New', 'options'=>$status_options));
		echo $form->input('jobtype_id', array('label'=>'Job Type'));
		echo $form->input('jobcategory_id', array('label'=>'Job Category', 'value'=>$jobcategory_id));
		echo $form->input('jobnumber');
		echo $form->input('name', array('value'=>$name));
		echo $form->input('date');
		echo $form->input('ponumber');
		echo $form->input('billed');
		echo $form->input('cost');
		echo $form->input('invoice');
		echo $form->input('taxable');
		echo $form->input('comments');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<?php echo $name; ?>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Jobs', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Companies', true), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Companies', true), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Locations', true), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Location', true), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Job Types', true), array('controller' => 'jobtypes', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Job Type', true), array('controller' => 'jobtypes', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Job Categories', true), array('controller' => 'jobcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Job Category', true), array('controller' => 'jobcategories', 'action' => 'add')); ?> </li>
	</ul>
</div>