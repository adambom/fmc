<div class="employees form">
<?php echo $form->create('Employee');?>
	<fieldset>
    <div class="actions">
        <ul>
            <li><?php echo $html->link(__('List Contacts', true), array('action' => 'index'));?></li>
            <li><?php echo $html->link(__('List Companies', true), array('controller' => 'companies', 'action' => 'index')); ?> </li>
            <li><?php echo $html->link(__('New Company', true), array('controller' => 'companies', 'action' => 'add')); ?> </li>
        </ul>
    </div>
 		<legend><?php __('Add Contact');?></legend>
        <div class="submit"><input type="submit" value="Submit"></div>
		<table class="add_form">
			<tr>
				<td colspan=1><?php echo $form->input('title'); ?></td>
				<td colspan=2><?php echo $form->input('fname', array('label' => 'First Name')); ?></td>
				<td colspan=2><?php echo $form->input('lname', array('label' => 'Last Name')); ?></td>
			<tr>
			<tr>
				<td colspan=2><?php echo $form->input('address1', array('label' => 'Address Line 1')); ?></td>
				<td colspan=2><?php echo $form->input('address2', array('label' => 'Address Line 2')); ?></td>
				<td><?php echo $form->input('address3', array('label' => 'Address Line 3')); ?></td>
			</tr>
			<tr>
				<td colspan=2><?php echo $form->input('city'); ?></td>
				<td><?php echo $form->input('state'); ?></td>
				<td><?php echo $form->input('zip', array('label' => 'Zip Code')); ?></td>
				<td><?php echo $form->input('country'); ?></td>
			<tr>
			<tr>
				<td><?php echo $form->input('phone'); ?></td>
				<td><?php echo $form->input('fax'); ?></td>
				<td><?php echo $form->input('home_phone'); ?></td>
				<td><?php echo $form->input('cell'); ?></td>
				<td><?php echo $form->input('pager'); ?></td>
			<tr>
			<tr>
				<td colspan=2><?php echo $form->input('email'); ?></td>
				<td colspan=2><?php echo $form->input('url'); ?></td>
			</tr>
			<tr>
				<td colspan=3><?php echo $form->input('misc'); ?></td>
				<td><?php echo $form->input('xmas', array('type'=>'checkbox')); ?></td>
				<td><?php echo $form->input('newsletter', array('type'=>'checkbox')); ?></td>
			</tr>
			<tr>
				<td colspan=2><?php echo $form->input('Company'); ?></td>
				<td colspan=3><?php echo $form->input('notes'); ?></td>
			</tr>
		</table>
	<?php
		/*echo $form->input('fname', array('label' => 'First Name'));
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
		echo $form->input('email');
		echo $form->input('url');
		echo $form->input('misc');
		echo $form->input('notes');
		echo $form->input('newsletter', array('type'=>'checkbox'));
		echo $form->input('xmas', array('type'=>'checkbox'));
		echo $form->input('Company');*/
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