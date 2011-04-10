<?php $paginator->options(array('url' => $this->passedArgs)); ?>
<script type="text/javascript">
	$(document).ready(function () {
		$('.tbl_select').change(function () {
			if($(this).val() != '') {
				id = $(this).attr('id').replace('status', "");
				status = $(this).val()
				$.post('jobs/change_status/'+id+'/'+status, function(success) {
					if(success) {
						$('#ajax_result').html('The job status was succesfully updated to '+status);
					} else {
						$('#ajax_result').html('The job status could not be updated');
					}
					$('#ajax_result').slideDown('fast');
				});
			}
		});
	});
</script>
<div class="jobs index">
<h2><?php __('Jobs');?></h2>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New Job', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Companies', true), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Company', true), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Locations', true), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Location', true), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Job Types', true), array('controller' => 'jobtypes', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Job Type', true), array('controller' => 'jobtypes', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Job Categories', true), array('controller' => 'jobcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Job Category', true), array('controller' => 'jobcategories', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div id="ajax_result"></div>
<form method="post" class="search" action="/fmc/jobs/search">
	<table class="searchHolder">
		<tr>
			<td><input name="data[Job][q]" type="text" class="search" rel="jobs" value="" id="JobQ" autocomplete="off" autocorrect="off"></td>
			<td>
				<div class="submit">
					<input type="submit" value="Search">
				</div>
			</td>
		</tr>
	</table>
	<div id="results_holder"></div>
</form>
<p style="float:left;">
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<ul class="sort_links">
	<li>View Jobs by Status: </li>
	<li><?php echo $html->link('All Jobs', array('controller'=>'jobs', 'action'=>'index')); ?></li>
	<li><?php echo $html->link('Open', array('controller'=>'jobs', 'action'=>'view_open')); ?></li>
	<li><?php echo $html->link('Closed', array('controller'=>'jobs', 'action'=>'view_closed')); ?></li>
	<li><?php echo $html->link('New', array('controller'=>'jobs', 'action'=>'view_new')); ?></li>
	<li><?php echo $html->link('In Progress', array('controller'=>'jobs', 'action'=>'view_progress')); ?></li>
	<li><?php echo $html->link('Billed', array('controller'=>'jobs', 'action'=>'view_billed')); ?></li>
</ul>

<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('Job Number', 'jobnumber');?></th>	
	<th><?php echo $paginator->sort('customer_id');?></th>
	<th><?php echo $paginator->sort('location_id');?></th>
	<th><?php echo $paginator->sort('Job Type', 'jobtype_id');?></th>
	<th><?php echo $paginator->sort('Job Category', 'jobcategory_id');?></th>	
	<th><?php echo $paginator->sort('name');?></th>
	<th><?php echo $paginator->sort('date');?></th>
	<th><?php echo $paginator->sort('status');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($jobs as $job):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $job['Job']['id']; ?>
		</td>
		<td>
			<?php echo $job['Job']['jobnumber']; ?>
		</td>
		<td>
			<?php echo $html->link($job['Company']['name'], array('controller' => 'companies', 'action' => 'view', $job['Company']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($job['Location']['name'], array('controller' => 'locations', 'action' => 'view', $job['Location']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($job['Jobtype']['name'], array('controller' => 'jobtypes', 'action' => 'view', $job['Jobtype']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($job['Jobcategory']['name'], array('controller' => 'jobcategories', 'action' => 'view', $job['Jobcategory']['id'])); ?>
		</td>		
		<td>
			<?php echo $job['Job']['name']; ?>
		</td>
		<td>
			<?php echo $job['Job']['date']; ?>
		</td>
		<td>
			<?php echo $form->select('status'.$job['Job']['id'], $status_options, $job['Job']['status'], array('class'=>'tbl_select', 'empty'=>false)); ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $job['Job']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $job['Job']['id'])); ?>
			<?php echo $html->link(__('Close', true), array('action' => 'close', $job['Job']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $job['Job']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $job['Job']['id'])); ?>
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
		<li><?php echo $html->link(__('New Job', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Companies', true), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Company', true), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Locations', true), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Location', true), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Job Types', true), array('controller' => 'jobtypes', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Job Type', true), array('controller' => 'jobtypes', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Job Categories', true), array('controller' => 'jobcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Job Category', true), array('controller' => 'jobcategories', 'action' => 'add')); ?> </li>
	</ul>
</div>