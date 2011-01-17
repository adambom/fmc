<div class="employees form">
<?php echo $form->create('Employee');?>
	<fieldset>
 		<legend><?php __('Add Contact');?></legend>
	<?php
		echo $form->input('fname', array('label' => 'First Name'));
		echo $form->input('lname', array('label' => 'Last Name'));
		echo $form->input('title');
		echo $form->input('address1', array('label' => 'Address Line 1'));
		echo $form->input('address2', array('label' => 'Address Line 2'));
		echo $form->input('address3', array('label' => 'Address Line 3'));
		echo $form->input('city');
		echo $form->input('state');
		echo $form->input('zip', array('label' => 'Zip Code'));
		echo $form->input('country');
		echo $form->input('phone');
		echo $form->input('fax');
		echo $form->input('home_phone');
		echo $form->input('cell');
		echo $form->input('pager');
		echo $form->input('type');
		echo $form->input('email');
		echo $form->input('url');
		echo $form->input('misc');
		echo $form->input('notes');
		echo $form->input('newsletter');
		echo $form->input('xmas');
		echo $form->input('Company');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Contacts', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Companies', true), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Company', true), array('controller' => 'companies', 'action' => 'add')); ?> </li>
	</ul>
</div>