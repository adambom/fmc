<div class="employees index">
<h2><?php __('Contacts');?></h2>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New Contact', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Companies', true), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Company', true), array('controller' => 'companies', 'action' => 'add')); ?> </li>
	</ul>
</div>
<form method="post" class="search" action="/fmc/employees/search">
	<table class="searchHolder">
		<tr>
			<td><input name="data[Employee][q]" type="text" class="search" rel="employees" value="" id="EmployeeQ" autocomplete="off" autocorrect="off"></td>
			<td>
				<div class="submit">
					<input type="submit" value="Search">
				</div>
			</td>
		</tr>
	</table>
	<div id="results_holder"></div>
</form>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('Name', 'Employee.lname');?></th>
	<th><?php echo $paginator->sort('title');?></th>
	<th><?php echo $paginator->sort('company'); ?></th>
	<th><?php echo $paginator->sort('phone');?></th>
	<th><?php echo $paginator->sort('fax');?></th>
	<th><?php echo $paginator->sort('cell');?></th>
	<th><?php echo $paginator->sort('email');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($employees as $employee):
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
			<?php 
				if($employee['Employee']['email']) {
					echo "<a href='mailto:".$employee['Employee']['email']."'>".$employee['Employee']['email']."</a>"; 
				}
			?>
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
<div class="paging">
	<?php echo $paginator->first('<< '.__('first', true), array(), null, array('class'=>'disabled'));?>
 |	<?php echo $paginator->prev('< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
 |	<?php echo $paginator->next(__('next', true).' >', array(), null, array('class' => 'disabled'));?>
 |	<?php echo $paginator->last(__('last', true).' >>', array(), null, array('class'=>'disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New Contact', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Companies', true), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Company', true), array('controller' => 'companies', 'action' => 'add')); ?> </li>
	</ul>
</div>