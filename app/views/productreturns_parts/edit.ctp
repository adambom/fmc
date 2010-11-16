<div class="productreturnsParts form">
<?php echo $form->create('ProductreturnsPart');?>
	<fieldset>
 		<legend><?php __('Edit ProductreturnsPart');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('productreturn_id');
		echo $form->input('part_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('ProductreturnsPart.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('ProductreturnsPart.id'))); ?></li>
		<li><?php echo $html->link(__('List ProductreturnsParts', true), array('action' => 'index'));?></li>
	</ul>
</div>