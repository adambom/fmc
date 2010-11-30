<div class="opportunitiesVendors form">
<?php echo $form->create('OpportunitiesVendor');?>
	<fieldset>
 		<legend><?php __('Add OpportunitiesVendor');?></legend>
	<?php
		echo $form->input('opportunity_id');
		echo $form->input('vendor_id');
		echo $form->input('primary');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List OpportunitiesVendors', true), array('action' => 'index'));?></li>
	</ul>
</div>