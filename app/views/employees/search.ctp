<div class="employees index">
<h2><?php __('Contacts');?></h2>
<?php
echo $form->create("Employee", array('action' => 'search'));
echo $form->input("q", array('label' => 'Search for'));
echo $form->end("Search");
?>

<table cellpadding="0" cellspacing="0">
<tr>
	<th>Id</th>
	<th>Name</th>
	<th>Title</th>
	<th>Company</th>
	<th>Phone</th>
	<th>Fax</th>
	<th>Cell</th>
	<th>Email</th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($results as $employee):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $employee['Employee']['id']; ?>
		</td>
		<td>
			<?php echo $employee['Employee']['fname'] . ' ' . $employee['Employee']['lname']; ?>
		</td>
		<td>
			<?php echo $employee['Employee']['title']; ?>
		</td>
		<td>
			<?php 
				$n = 1;
				foreach ($employee['Company'] as $company):
					if($n < count($employee['Company'])) {
						echo $company['name'].', ';
					} else {
						echo $company['name'];
					}
					$n++;					
				endforeach;
			?>
		</td>
		<td>
			<?php echo $employee['Employee']['phone']; ?>
		</td>
		<td>
			<?php echo $employee['Employee']['fax']; ?>
		</td>
		<td>
			<?php echo $employee['Employee']['cell']; ?>
		</td>
		<td>
			<?php echo $employee['Employee']['email']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $employee['Employee']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $employee['Employee']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $employee['Employee']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $employee['Employee']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New Contact', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Companies', true), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Company', true), array('controller' => 'companies', 'action' => 'add')); ?> </li>
	</ul>
</div>