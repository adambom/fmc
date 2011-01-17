<div class="opportunities form">
<?php echo $form->create('Opportunity');?>
	<fieldset>
 		<legend><?php __('Edit Opportunity');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('company_id', array('label'=>'Customer'));
		echo $form->input('jobcategory_id', array('label'=>'Category'));
		echo $form->input('stage_id');
		echo $form->input('name');
		echo $form->input('description');
		echo $form->input('shortdescription', array('label'=>'Short Description'));
		echo $form->input('owner');
		echo $form->input('leadsource', array('label'=>'Lead Source'));
		echo $form->input('amount');
		echo $form->input('expamount', array('label'=>'Expected Amount'));
		echo $form->input('forecastedclosedate', array('label'=>'Forecasted Close Date'));
		echo $form->input('actualclosedate', array('label'=>'Actual Close Date'));
		echo $form->input('nextstep', array('label'=>'Next Step'));
		echo $form->input('customprobability', array('label'=>'Custom Probability'));
		echo $form->input('createddate', array('label'=>'Date Created'));
		echo $form->input('Vendor');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Opportunity.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Opportunity.id'))); ?></li>
		<li><?php echo $html->link(__('List Opportunities', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Companies', true), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Company', true), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Opportunity Categories', true), array('controller' => 'jobcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Opportunity Category', true), array('controller' => 'jobcategories', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Stages', true), array('controller' => 'stages', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Stage', true), array('controller' => 'stages', 'action' => 'add')); ?> </li>
	</ul>
</div>