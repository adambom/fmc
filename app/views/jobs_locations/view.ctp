<div class="jobsLocations view">
<h2><?php  __('JobsLocation');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $jobsLocation['JobsLocation']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Job Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $jobsLocation['JobsLocation']['job_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Location Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $jobsLocation['JobsLocation']['location_id']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit JobsLocation', true), array('action' => 'edit', $jobsLocation['JobsLocation']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete JobsLocation', true), array('action' => 'delete', $jobsLocation['JobsLocation']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $jobsLocation['JobsLocation']['id'])); ?> </li>
		<li><?php echo $html->link(__('List JobsLocations', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New JobsLocation', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
