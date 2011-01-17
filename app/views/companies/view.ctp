<div class="companies view">
<h2><?php  __('Company');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $company['Company']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $company['Company']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Company', true), array('action' => 'edit', $company['Company']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Company', true), array('action' => 'delete', $company['Company']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $company['Company']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Companies', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Company', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Employees', true), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Employee', true), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>

<div class="related">
	<h3><?php __('Employees at this Company');?></h3>
	<?php if (!empty($company['Employee'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('First Name'); ?></th>
		<th><?php __('Last Name'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Address'); ?></th>
		<th><?php __('City'); ?></th>
		<th><?php __('State'); ?></th>
		<th><?php __('Zip'); ?></th>
		<th><?php __('Country'); ?></th>
		<th><?php __('Phone'); ?></th>
		<th><?php __('Fax'); ?></th>
		<th><?php __('Home Phone'); ?></th>
		<th><?php __('Cell'); ?></th>
		<th><?php __('Pager'); ?></th>
		<th><?php __('Type'); ?></th>
		<th><?php __('Email'); ?></th>
		<th><?php __('Url'); ?></th>
		<th><?php __('Misc'); ?></th>
		<th><?php __('Notes'); ?></th>
		<th><?php __('Newsletter'); ?></th>
		<th><?php __('Xmas'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($company['Employee'] as $employee):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $employee['id'];?></td>
			<td><?php echo $employee['fname'];?></td>
			<td><?php echo $employee['lname'];?></td>
			<td><?php echo $employee['title'];?></td>
			<?php
				$address = $employee['address1'];
				if($employee['address2'] != '') {
					$address = $employee['address1'].'<br>'.$employee['address2'];
				}
				if ($employee['address3'] != '') {
					$address = $address.'<br>'.$employee['address3'];
				}
			?>
			<td><?php echo $address; ?></td>
			<td><?php echo $employee['city'];?></td>
			<td><?php echo $employee['state'];?></td>
			<td><?php echo $employee['zip'];?></td>
			<td><?php echo $employee['country'];?></td>
			<td><?php echo $employee['phone'];?></td>
			<td><?php echo $employee['fax'];?></td>
			<td><?php echo $employee['home_phone'];?></td>
			<td><?php echo $employee['cell'];?></td>
			<td><?php echo $employee['pager'];?></td>
			<td><?php echo $employee['type'];?></td>
			<td><?php echo $employee['email'];?></td>
			<td><?php echo $employee['url'];?></td>
			<td><?php echo $employee['misc'];?></td>
			<td><?php echo $employee['notes'];?></td>
			<td><?php echo $employee['newsletter'];?></td>
			<td><?php echo $employee['xmas'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'employees', 'action' => 'view', $employee['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'employees', 'action' => 'edit', $employee['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'employees', 'action' => 'delete', $employee['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $employee['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Employee', true), array('controller' => 'employees', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
