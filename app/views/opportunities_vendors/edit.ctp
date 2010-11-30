<div class="opportunitiesVendors form">
<?php echo $form->create('OpportunitiesVendor');?>
	<fieldset>
 		<legend><?php __('Edit OpportunitiesVendor');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('opportunity_id');
		echo $form->input('vendor_id');
		echo $form->input('primary');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('OpportunitiesVendor.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('OpportunitiesVendor.id'))); ?></li>
		<li><?php echo $html->link(__('List OpportunitiesVendors', true), array('action' => 'index'));?></li>
	</ul>
</div>