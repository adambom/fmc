<?php $paginator->options(array('url' =>  array($q))); ?>
<script type="text/javascript">
	$(document).ready(function () {
		$('.tbl_select').change(function () {
			if($(this).val() != '') {
				id = $(this).attr('id').replace('stage', "");
				stage = $(this).val()
				$.post('/fmc/opportunities/change_stage/'+id+'/'+stage, function(success) {
					if(success) {
						$('#ajax_result').html('The opportunity stage was succesfully updated');
					} else {
						$('#ajax_result').html('The opportunity status could not be updated');
					}
					$('#ajax_result').slideDown('fast');
				});
			}
		});
	});
</script>
<div class="opportunities index">
<h2><?php __('Opportunities');?></h2>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New Opportunity', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Companies', true), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Company', true), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Job Categories', true), array('controller' => 'jobcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Job Category', true), array('controller' => 'jobcategories', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Stages', true), array('controller' => 'stages', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Stage', true), array('controller' => 'stages', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('Open Opportunities Report', true), array('controller' => 'opportunities', 'action' => 'open_opportunities')); ?> </li>
	</ul>
</div>
<div id="ajax_result"></div>
<form method="post" class="search" action="/fmc/opportunities/search">
	<table class="searchHolder">
		<tr>
			<td><input name="data[Opportunity][q]" type="text" class="search" rel="opportunities" value="" id="OpportunityQ" autocomplete="off" autocorrect="off"></td>
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
<ul class="sort_links">
	<li>View Opportunities by Status: </li>
	<li><?php echo $html->link('All Opportunities', array('controller'=>'opportunities', 'action'=>'index')); ?></li>
	<li><?php echo $html->link('Open', array('controller'=>'opportunities', 'action'=>'view_open')); ?></li>
	<li><?php echo $html->link('Closed', array('controller'=>'opportunities', 'action'=>'view_closed')); ?></li>
</ul>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('Customer', 'company_id');?></th>
	<th><?php echo $paginator->sort('Job Category', 'jobcategory_id');?></th>
	<th><?php echo $paginator->sort('stage_id');?></th>
	<th><?php echo $paginator->sort('name');?></th>
	<th><?php echo $paginator->sort('Short Description', 'shortdescription');?></th>
	<th><?php echo $paginator->sort('owner');?></th>
	<th><?php echo $paginator->sort('amount');?></th>
	<th><?php echo $paginator->sort('Date Created', 'createddate');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($results as $opportunity):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $opportunity['Opportunity']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($opportunity['Company']['name'], array('controller' => 'companies', 'action' => 'view', $opportunity['Company']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($opportunity['Jobcategory']['name'], array('controller' => 'jobcategories', 'action' => 'view', $opportunity['Jobcategory']['id'])); ?>
		</td>
		<td>
			<?php echo $form->select('stage'.$opportunity['Opportunity']['id'], $stages, $opportunity['Stage']['id'], array('class'=>'tbl_select'), false); ?>
		</td>
		<td>
			<?php echo $opportunity['Opportunity']['name']; ?>
		</td>
		<td>
			<?php echo $opportunity['Opportunity']['shortdescription']; ?>
		</td>
		<td>
			<?php echo $opportunity['Opportunity']['owner']; ?>
		</td>
		<td>
			<?php echo $opportunity['Opportunity']['amount']; ?>
		</td>
		<td>
			<?php echo $time->format($format = "d-m-Y", $opportunity['Opportunity']['createddate']); ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $opportunity['Opportunity']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $opportunity['Opportunity']['id'], $q)); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $opportunity['Opportunity']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $opportunity['Opportunity']['id'])); ?>
			<?php echo $html->link(__('Convert to Job', true), array('controller'=>'jobs', 'action' => 'convert', $opportunity['Opportunity']['id'], $opportunity['Opportunity']['company_id'], $opportunity['Opportunity']['jobcategory_id'], $opportunity['Opportunity']['name'])); ?>
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
		<li><?php echo $html->link(__('New Opportunity', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Customers', true), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Customer', true), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Jobcategories', true), array('controller' => 'jobcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Jobcategory', true), array('controller' => 'jobcategories', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Stages', true), array('controller' => 'stages', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Stage', true), array('controller' => 'stages', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('Open Opportunities Report', true), array('controller' => 'opportunities', 'action' => 'open_opportunities')); ?> </li>
	</ul>
</div>