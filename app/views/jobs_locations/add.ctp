<div class="jobsLocations form">
<?php echo $form->create('JobsLocation');?>
	<fieldset>
 		<legend><?php __('Add JobsLocation');?></legend>
	<?php
		echo $form->input('job_id');
		echo $form->input('location_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List JobsLocations', true), array('action' => 'index'));?></li>
	</ul>
</div>