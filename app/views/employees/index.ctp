<div class="employees index">
<h2><?php __('Employees');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('fname');?></th>
	<th><?php echo $paginator->sort('lname');?></th>
	<th><?php echo $paginator->sort('title');?></th>
	<th><?php echo $paginator->sort('address1');?></th>
	<th><?php echo $paginator->sort('address2');?></th>
	<th><?php echo $paginator->sort('address3');?></th>
	<th><?php echo $paginator->sort('city');?></th>
	<th><?php echo $paginator->sort('state');?></th>
	<th><?php echo $paginator->sort('zip');?></th>
	<th><?php echo $paginator->sort('country');?></th>
	<th><?php echo $paginator->sort('phone');?></th>
	<th><?php echo $paginator->sort('fax');?></th>
	<th><?php echo $paginator->sort('home_phone');?></th>
	<th><?php echo $paginator->sort('cell');?></th>
	<th><?php echo $paginator->sort('pager');?></th>
	<th><?php echo $paginator->sort('type');?></th>
	<th><?php echo $paginator->sort('email');?></th>
	<th><?php echo $paginator->sort('url');?></th>
	<th><?php echo $paginator->sort('misc');?></th>
	<th><?php echo $paginator->sort('notes');?></th>
	<th><?php echo $paginator->sort('newsletter');?></th>
	<th><?php echo $paginator->sort('xmas');?></th>
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
			<?php echo $employee['Employee']['fname']; ?>
		</td>
		<td>
			<?php echo $employee['Employee']['lname']; ?>
		</td>
		<td>
			<?php echo $employee['Employee']['title']; ?>
		</td>
		<td>
			<?php echo $employee['Employee']['address1']; ?>
		</td>
		<td>
			<?php echo $employee['Employee']['address2']; ?>
		</td>
		<td>
			<?php echo $employee['Employee']['address3']; ?>
		</td>
		<td>
			<?php echo $employee['Employee']['city']; ?>
		</td>
		<td>
			<?php echo $employee['Employee']['state']; ?>
		</td>
		<td>
			<?php echo $employee['Employee']['zip']; ?>
		</td>
		<td>
			<?php echo $employee['Employee']['country']; ?>
		</td>
		<td>
			<?php echo $employee['Employee']['phone']; ?>
		</td>
		<td>
			<?php echo $employee['Employee']['fax']; ?>
		</td>
		<td>
			<?php echo $employee['Employee']['home_phone']; ?>
		</td>
		<td>
			<?php echo $employee['Employee']['cell']; ?>
		</td>
		<td>
			<?php echo $employee['Employee']['pager']; ?>
		</td>
		<td>
			<?php echo $employee['Employee']['type']; ?>
		</td>
		<td>
			<?php echo $employee['Employee']['email']; ?>
		</td>
		<td>
			<?php echo $employee['Employee']['url']; ?>
		</td>
		<td>
			<?php echo $employee['Employee']['misc']; ?>
		</td>
		<td>
			<?php echo $employee['Employee']['notes']; ?>
		</td>
		<td>
			<?php echo $employee['Employee']['newsletter']; ?>
		</td>
		<td>
			<?php echo $employee['Employee']['xmas']; ?>
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
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New Employee', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Companies', true), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Company', true), array('controller' => 'companies', 'action' => 'add')); ?> </li>
	</ul>
</div>