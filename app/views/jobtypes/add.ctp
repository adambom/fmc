<div class="jobtypes form">
<?php echo $form->create('Jobtype');?>
	<fieldset>
 		<legend><?php __('Add Jobtype');?></legend>
	<?php
		echo $form->input('name');
		echo $form->input('description');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Jobtypes', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Jobs', true), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Job', true), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
	</ul>
</div>