<div class="jobtypes form">
<?php echo $form->create('Jobtype');?>
	<fieldset>
 		<legend><?php __('Edit Jobtype');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('name');
		echo $form->input('description');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Jobtype.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Jobtype.id'))); ?></li>
		<li><?php echo $html->link(__('List Jobtypes', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Jobs', true), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Job', true), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
	</ul>
</div>