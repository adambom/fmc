<div class="opportunitiesVendors view">
<h2><?php  __('OpportunitiesVendor');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $opportunitiesVendor['OpportunitiesVendor']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Opportunity Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $opportunitiesVendor['OpportunitiesVendor']['opportunity_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Vendor Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $opportunitiesVendor['OpportunitiesVendor']['vendor_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Primary'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $opportunitiesVendor['OpportunitiesVendor']['primary']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit OpportunitiesVendor', true), array('action' => 'edit', $opportunitiesVendor['OpportunitiesVendor']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete OpportunitiesVendor', true), array('action' => 'delete', $opportunitiesVendor['OpportunitiesVendor']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $opportunitiesVendor['OpportunitiesVendor']['id'])); ?> </li>
		<li><?php echo $html->link(__('List OpportunitiesVendors', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New OpportunitiesVendor', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
