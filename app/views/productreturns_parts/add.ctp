<div class="productreturnsParts form">
<?php echo $form->create('ProductreturnsPart');?>
	<fieldset>
 		<legend><?php __('Add ProductreturnsPart');?></legend>
	<?php
		echo $form->input('productreturn_id');
		echo $form->input('part_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List ProductreturnsParts', true), array('action' => 'index'));?></li>
	</ul>
</div>