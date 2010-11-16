<div class="jobsLocations form">
<?php echo $form->create('JobsLocation');?>
	<fieldset>
 		<legend><?php __('Edit JobsLocation');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('job_id');
		echo $form->input('location_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('JobsLocation.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('JobsLocation.id'))); ?></li>
		<li><?php echo $html->link(__('List JobsLocations', true), array('action' => 'index'));?></li>
	</ul>
</div>