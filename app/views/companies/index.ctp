<div class="companies index">
<h2><?php __('Companies');?></h2>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New Company', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Employees', true), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Employee', true), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>
<span>
<form method="post" class="search" action="/fmc/companies/search">
	<table class="searchHolder">
		<tr>
			<td><input name="data[Company][q]" type="text" class="search" value="" id="CompanyQ" autocomplete="off" autocorrect="off"></td>
			<td>
				<div class="submit">
					<input type="submit" value="Search">
				</div>
			</td>
		</tr>
	</table>
	<div id="results_holder"><ul>

      <li class="first"><a href="companies/view/2">Ademco - Honeywell</a></li>

      <li><a href="companies/view/684">Concord Academy</a></li>

      <li><a href="companies/view/752">Innovation Academy Charter School</a></li>

      <li><a href="companies/view/688">Massachusetts Maritime Academy</a></li>

      <li><a href="companies/view/1130">Notre Dame Academy</a></li>

      <li><a href="companies/view/328">Stadelman Electric</a></li>

      <li><a href="companies/view/396">Zade Co.</a></li>

 </ul> </div>
</form>
</span>

<p class="result_summary">
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('name');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($companies as $company):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $company['Company']['id']; ?>
		</td>
		<td>
			<?php echo $company['Company']['name']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $company['Company']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $company['Company']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $company['Company']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $company['Company']['id'])); ?>
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
		<li><?php echo $html->link(__('New Company', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Employees', true), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Employee', true), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>
