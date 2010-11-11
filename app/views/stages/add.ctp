<div class="stages form">
<?php echo $form->create('Stage');?>
	<fieldset>
 		<legend><?php __('Add Stage');?></legend>
	<?php
		echo $form->input('name');
		echo $form->input('description');
		echo $form->input('probability');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Stages', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Opportunities', true), array('controller' => 'opportunities', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Opportunity', true), array('controller' => 'opportunities', 'action' => 'add')); ?> </li>
	</ul>
</div>