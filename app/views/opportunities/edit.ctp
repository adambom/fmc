<script type="text/javascript">
	$(document).ready(function() {
		$("#indicate_na").click(function() {
			if($(this).val() == 1) {
				// checkbox is checked
				$("#close_dates *").attr('disabled', false);
				$(this).val(0);
			} else {
				// checkbox is unchecked
				$("#close_dates *").attr('disabled', true);
				$("#close_dates select").val("NULL");
				$(this).val(1);
			}
		})
	});
</script>
<div class="opportunities form">
<?php echo $form->create('Opportunity');?>
	<fieldset>
	<?php echo $form->input('id'); ?>
    	<div class="actions">
            <ul>
                <li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Opportunity.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Opportunity.id'))); ?></li>
                <li><?php echo $html->link(__('List Opportunities', true), array('action' => 'index'));?></li>
                <li><?php echo $html->link(__('List Companies', true), array('controller' => 'companies', 'action' => 'index')); ?> </li>
                <li><?php echo $html->link(__('New Company', true), array('controller' => 'companies', 'action' => 'add')); ?> </li>
                <li><?php echo $html->link(__('List Opportunity Categories', true), array('controller' => 'jobcategories', 'action' => 'index')); ?> </li>
                <li><?php echo $html->link(__('New Opportunity Category', true), array('controller' => 'jobcategories', 'action' => 'add')); ?> </li>
                <li><?php echo $html->link(__('List Stages', true), array('controller' => 'stages', 'action' => 'index')); ?> </li>
                <li><?php echo $html->link(__('New Stage', true), array('controller' => 'stages', 'action' => 'add')); ?> </li>
            </ul>
        </div>
 		<legend><?php __('Edit Opportunity');?></legend>
        <div class="submit"><input type="submit" value="Submit"></div>
		<table class="add_form">
			<tr>
				<td><?php echo $form->input('company_id', array('label'=>'Customer')); ?></td>
				<td><?php echo $form->input('jobcategory_id', array('label'=>'Category')); ?></td>
				<td><?php echo $form->input('stage_id'); ?></td>
			</tr>
			<tr>
				<td colspan=2><?php echo $form->input('name'); ?></td>
				<td><?php echo $form->input('owner'); ?></td>
			</tr>
			<tr>
				<td><?php echo $form->input('description'); ?></td>
				<td id="close_dates">
					<?php echo $form->input('forecastedclosedate', array('label'=>'Forecasted Close Date')); ?>
					<?php echo $form->input('actualclosedate', array('label'=>'Actual Close Date')); ?>
				</td>
				<td><label for="indicate_na">Close Dates N/A</label><input type="checkbox" id="indicate_na"></td>
			</tr>
			<tr>
				<td><?php echo $form->input('shortdescription', array('label'=>'Short Description')); ?></td>
				<td><?php echo $form->input('leadsource', array('label'=>'Lead Source')); ?></td>
				<td><?php echo $form->input('nextstep', array('label'=>'Next Step')); ?></td>
			</tr>
			<tr>
				<td><?php echo $form->input('amount'); ?></td>
				<td><?php echo $form->input('expamount', array('label'=>'Expected Amount')); ?></td>
				<td><?php echo $form->input('customprobability', array('label'=>'Custom Probability')); ?></td>
			</tr>
			<tr>
				<td><?php echo $form->input('Vendor'); ?></td>
				<td><?php echo $form->input('createddate', array('label'=>'Date Created')); ?></td>
			</tr>
			<?php echo $form->input('q', array('type'=>'hidden', 'value'=>$q)); ?>
		</table>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Opportunity.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Opportunity.id'))); ?></li>
		<li><?php echo $html->link(__('List Opportunities', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Companies', true), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Company', true), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Opportunity Categories', true), array('controller' => 'jobcategories', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Opportunity Category', true), array('controller' => 'jobcategories', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Stages', true), array('controller' => 'stages', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Stage', true), array('controller' => 'stages', 'action' => 'add')); ?> </li>
	</ul>
</div>