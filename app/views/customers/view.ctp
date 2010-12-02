<div class="customers view">
<h2><?php  __('Customer');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customer['Customer']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Company'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($customer['Company']['name'], array('controller' => 'companies', 'action' => 'view', $customer['Company']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customer['Customer']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Address1'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customer['Customer']['address1']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Address2'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customer['Customer']['address2']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('City'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customer['Customer']['city']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('State'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customer['Customer']['state']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Zip'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customer['Customer']['zip']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Country'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customer['Customer']['country']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Phone'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customer['Customer']['phone']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fax'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customer['Customer']['fax']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Url'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customer['Customer']['url']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customer['Customer']['description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Short Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customer['Customer']['short_description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created Date'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customer['Customer']['created_date']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Updated Date'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customer['Customer']['updated_date']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Customer', true), array('action' => 'edit', $customer['Customer']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Customer', true), array('action' => 'delete', $customer['Customer']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $customer['Customer']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Customers', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Customer', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Companies', true), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Company', true), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Jobs', true), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Job', true), array('controller' => 'jobs', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Opportunities', true), array('controller' => 'opportunities', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Opportunity', true), array('controller' => 'opportunities', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Jobs');?></h3>
	<?php if (!empty($customer['Job'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Customer Id'); ?></th>
		<th><?php __('Location Id'); ?></th>
		<th><?php __('Jobtype Id'); ?></th>
		<th><?php __('Jobcategory Id'); ?></th>
		<th><?php __('Jobnumber'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Date'); ?></th>
		<th><?php __('Customerdescription'); ?></th>
		<th><?php __('Ponumber'); ?></th>
		<th><?php __('Billed'); ?></th>
		<th><?php __('Cost'); ?></th>
		<th><?php __('Status'); ?></th>
		<th><?php __('Invoice'); ?></th>
		<th><?php __('Taxable'); ?></th>
		<th><?php __('Selected'); ?></th>
		<th><?php __('Comments'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($customer['Job'] as $job):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $job['id'];?></td>
			<td><?php echo $job['customer_id'];?></td>
			<td><?php echo $job['location_id'];?></td>
			<td><?php echo $job['jobtype_id'];?></td>
			<td><?php echo $job['jobcategory_id'];?></td>
			<td><?php echo $job['jobnumber'];?></td>
			<td><?php echo $job['name'];?></td>
			<td><?php echo $job['date'];?></td>
			<td><?php echo $job['customerdescription'];?></td>
			<td><?php echo $job['ponumber'];?></td>
			<td><?php echo $job['billed'];?></td>
			<td><?php echo $job['cost'];?></td>
			<td><?php echo $job['status'];?></td>
			<td><?php echo $job['invoice'];?></td>
			<td><?php echo $job['taxable'];?></td>
			<td><?php echo $job['selected'];?></td>
			<td><?php echo $job['comments'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'jobs', 'action' => 'view', $job['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'jobs', 'action' => 'edit', $job['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'jobs', 'action' => 'delete', $job['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $job['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Job', true), array('controller' => 'jobs', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Opportunities');?></h3>
	<?php if (!empty($customer['Opportunity'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Customer Id'); ?></th>
		<th><?php __('Jobcategory Id'); ?></th>
		<th><?php __('Stage Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Description'); ?></th>
		<th><?php __('Shortdescription'); ?></th>
		<th><?php __('Owner'); ?></th>
		<th><?php __('Leadsource'); ?></th>
		<th><?php __('Amount'); ?></th>
		<th><?php __('Expamount'); ?></th>
		<th><?php __('Forecastedclosedate'); ?></th>
		<th><?php __('Actualclosedate'); ?></th>
		<th><?php __('Nextstep'); ?></th>
		<th><?php __('Customprobability'); ?></th>
		<th><?php __('Createddate'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($customer['Opportunity'] as $opportunity):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $opportunity['id'];?></td>
			<td><?php echo $opportunity['customer_id'];?></td>
			<td><?php echo $opportunity['jobcategory_id'];?></td>
			<td><?php echo $opportunity['stage_id'];?></td>
			<td><?php echo $opportunity['name'];?></td>
			<td><?php echo $opportunity['description'];?></td>
			<td><?php echo $opportunity['shortdescription'];?></td>
			<td><?php echo $opportunity['owner'];?></td>
			<td><?php echo $opportunity['leadsource'];?></td>
			<td><?php echo $opportunity['amount'];?></td>
			<td><?php echo $opportunity['expamount'];?></td>
			<td><?php echo $opportunity['forecastedclosedate'];?></td>
			<td><?php echo $opportunity['actualclosedate'];?></td>
			<td><?php echo $opportunity['nextstep'];?></td>
			<td><?php echo $opportunity['customprobability'];?></td>
			<td><?php echo $opportunity['createddate'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'opportunities', 'action' => 'view', $opportunity['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'opportunities', 'action' => 'edit', $opportunity['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'opportunities', 'action' => 'delete', $opportunity['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $opportunity['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Opportunity', true), array('controller' => 'opportunities', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
