<div class="vendors form">
<?php echo $form->create('Vendor');?>
	<fieldset>
 		<legend><?php __('Edit Vendor');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('company_id');
		echo $form->input('name');
		echo $form->input('Opportunity');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Vendor.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Vendor.id'))); ?></li>
		<li><?php echo $html->link(__('List Vendors', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Companies', true), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Company', true), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Parts', true), array('controller' => 'parts', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Part', true), array('controller' => 'parts', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Productreturns', true), array('controller' => 'productreturns', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Productreturn', true), array('controller' => 'productreturns', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Opportunities', true), array('controller' => 'opportunities', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Opportunity', true), array('controller' => 'opportunities', 'action' => 'add')); ?> </li>
	</ul>
</div>