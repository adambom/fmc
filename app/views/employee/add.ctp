<div class="employee form">
<?php echo $form->create('Employee');?>
	<fieldset>
 		<legend><?php __('Add Employee');?></legend>
	<?php
		echo $form->input('fname');
		echo $form->input('lname');
		echo $form->input('title');
		echo $form->input('address1');
		echo $form->input('address2');
		echo $form->input('address3');
		echo $form->input('city');
		echo $form->input('state');
		echo $form->input('zip');
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
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Employee', true), array('action' => 'index'));?></li>
	</ul>
</div>