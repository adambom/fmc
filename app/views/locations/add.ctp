<div class="locations form">
<?php echo $form->create('Location');?>
	<fieldset>
 		<legend><?php __('Add Location');?></legend>
	<?php
		echo $form->input('name');
		echo $form->input('description');
		echo $form->input('address1');
		echo $form->input('address2');
		echo $form->input('city');
		echo $form->input('state');
		echo $form->input('zip');
		echo $form->input('phone');
		echo $form->input('Job');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Locations', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Jobs', true), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Job', true), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
	</ul>
</div>