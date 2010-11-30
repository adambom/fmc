<div class="vendors form">
<?php echo $form->create('Vendor');?>
	<fieldset>
 		<legend><?php __('Add Vendor');?></legend>
	<?php
		echo $form->input('company_id');
		echo $form->input('name');
		echo $form->input('contactname');
		echo $form->input('address');
		echo $form->input('city');
		echo $form->input('zip');
		echo $form->input('state');
		echo $form->input('phone');
		echo $form->input('fax');
		echo $form->input('paymentterms');
		echo $form->input('Opportunity');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
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