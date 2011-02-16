<script type="text/javascript">
	$(document).ready(function() {
		if($('#PartPart').val()) {
			$.post('../../parts/getDetails/'+$('#PartPart').val(), function(details) {
				details = jQuery.parseJSON(details)
				$('#partInfo #deviceid').html('<label>Device ID:</label> '+details.Part.deviceid);
				$('#partInfo #description').html('<label>Description:</label> '+details.Part.description);
			});
		}
		
		$('#PartPart').bind('change focus', function() {
			$("#PartPart").change(function () {
				$.post('../../parts/getDetails/'+$(this).val(), function(details) {
					details = jQuery.parseJSON(details)
					$('#partInfo #deviceid').html('<label>Device ID:</label> '+details.Part.deviceid);
					$('#partInfo #description').html('<label>Description:</label> '+details.Part.description);
				});
				
			});
		})
	});
</script>

<div class="productreturns form">
<?php echo $form->create('Productreturn');?>
	<fieldset>
    	<div class="actions">
            <ul>
                <li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Productreturn.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Productreturn.id'))); ?></li>
                <li><?php echo $html->link(__('List Productreturns', true), array('action' => 'index'));?></li>
                <li><?php echo $html->link(__('List Companies', true), array('controller' => 'companies', 'action' => 'index')); ?> </li>
                <li><?php echo $html->link(__('New Company', true), array('controller' => 'companies', 'action' => 'add')); ?> </li>
                <li><?php echo $html->link(__('List Jobs', true), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
                <li><?php echo $html->link(__('New Job', true), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
                <li><?php echo $html->link(__('List Parts', true), array('controller' => 'parts', 'action' => 'index')); ?> </li>
                <li><?php echo $html->link(__('New Part', true), array('controller' => 'parts', 'action' => 'add')); ?> </li>
            </ul>
        </div>
 		<legend><?php __('Edit Productreturn');?></legend>
        <div class="submit"><input type="submit" value="Submit"></div>
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
		echo $form->input('Part');
	?>
    	<div id="partInfo"><span id="deviceid"></span> <span id="description"></span></div>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Productreturn.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Productreturn.id'))); ?></li>
		<li><?php echo $html->link(__('List Productreturns', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Companies', true), array('controller' => 'companies', 'action' => 'index')); ?> </li>
        <li><?php echo $html->link(__('New Company', true), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Jobs', true), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Job', true), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Parts', true), array('controller' => 'parts', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Part', true), array('controller' => 'parts', 'action' => 'add')); ?> </li>
	</ul>
</div>