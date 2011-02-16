<div class="companies form">
<?php echo $form->create('Company');?>
	<fieldset>
    <div class="actions">
        <ul>
            <li><?php echo $html->link(__('List Companies', true), array('action' => 'index'));?></li>
            <li><?php echo $html->link(__('List Employees', true), array('controller' => 'employees', 'action' => 'index')); ?> </li>
            <li><?php echo $html->link(__('New Employee', true), array('controller' => 'employees', 'action' => 'add')); ?> </li>
        </ul>
    </div>
 		<legend><?php __('Add Company');?></legend>
        <div class="submit"><input type="submit" value="Submit"></div>
	<?php
		echo $form->input('name');
		echo $form->input('Employee');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Companies', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Employees', true), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Employee', true), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>