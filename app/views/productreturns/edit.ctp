<div class="productreturns form">
<?php echo $form->create('Productreturn');?>
	<fieldset>
 		<legend><?php __('Edit Productreturn');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('vendor_id');
		echo $form->input('fmc_return_no');
		echo $form->input('date');
		echo $form->input('serial');
		echo $form->input('reason');
		echo $form->input('rma');
		echo $form->input('ponumber');
		echo $form->input('job_id');
		echo $form->input('credit');
		echo $form->input('credit_received');
		echo $form->input('product_returned');
		echo $form->input('closed');
		echo $form->input('comments');
		//print_r($parts);
		$options = array();
		foreach($parts as $part) {
			array_push($options, $part['Part']['id']);
			$options[$part['Part']['id']] = $part['Part']['deviceid'];
		}
		
		$print_r($options);
		//echo $form->input('Part');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Productreturn.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Productreturn.id'))); ?></li>
		<li><?php echo $html->link(__('List Productreturns', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Vendors', true), array('controller' => 'vendors', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Vendor', true), array('controller' => 'vendors', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Jobs', true), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Job', true), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Parts', true), array('controller' => 'parts', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Part', true), array('controller' => 'parts', 'action' => 'add')); ?> </li>
	</ul>
</div>