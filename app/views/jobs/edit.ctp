<div class="jobs form">
<?php echo $form->create('Job');?>
	<fieldset>
    	<div class="actions">
            <ul>
                <li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Job.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Job.id'))); ?></li>
                <li><?php echo $html->link(__('List Jobs', true), array('action' => 'index'));?></li>
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
 		<legend><?php __('Edit Job');?></legend>
        <div class="submit"><input type="submit" value="Submit"></div>
	<?php
		echo $form->input('id');
		echo $form->input('company_id', array('label'=>'Customer'));
		echo $form->input('location_id');
		echo $form->input('status', array('options'=>$status_options));
		echo $form->input('jobtype_id');
		echo $form->input('jobcategory_id');
		echo $form->input('jobnumber');
		echo $form->input('name');
		echo $form->input('date');
		echo $form->input('ponumber');
		echo $form->input('billed');
		echo $form->input('cost');
		echo $form->input('invoice');
		echo $form->input('taxable');
		echo $form->input('comments');
		echo $form->input('q', array('type'=>'hidden', 'value'=>$q));
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Job.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Job.id'))); ?></li>
		<li><?php echo $html->link(__('List Jobs', true), array('action' => 'index'));?></li>
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