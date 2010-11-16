<div class="companiesEmployees view">
<h2><?php  __('CompaniesEmployee');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $companiesEmployee['CompaniesEmployee']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Company Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $companiesEmployee['CompaniesEmployee']['company_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Employee Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $companiesEmployee['CompaniesEmployee']['employee_id']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit CompaniesEmployee', true), array('action' => 'edit', $companiesEmployee['CompaniesEmployee']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete CompaniesEmployee', true), array('action' => 'delete', $companiesEmployee['CompaniesEmployee']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $companiesEmployee['CompaniesEmployee']['id'])); ?> </li>
		<li><?php echo $html->link(__('List CompaniesEmployees', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New CompaniesEmployee', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
