<?php $paginator->options(array('url' =>  array($q))); ?>
<?php // app/views/companies/search.ctp ?> 
<h2><?php __('Companies');?></h2>
<?php  
    echo $form->create("Company",array('action' => 'search')); 
    echo $form->input("q", array('label' => 'Search for', 'value'=>$q)); 
    echo $form->end("Search"); 
?> 
<p>
<?php
	echo $paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
?></p>
<table> 
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('name');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>

<!-- Here's where we loop through our $results array, printing out post info --> 
<?php foreach ($results as $company): ?> 
    <tr> 
        <td><?php echo $company['Company']['id']; ?></td> 
        <td> 
            <?php echo $html->link($company['Company']['name'],'/companies/view/'.$company['Company']['id']);?> 
                </td> 
                <td> 
            <?php echo $html->link( 
                'Delete',  
                "/companies/delete/{$company['Company']['id']}",  
                null,  
                'Are you sure?' 
            )?> 
            <?php echo $html->link('Edit', '/companies/edit/'.$company['Company']['id'].'/'.$q);?> 
        </td> 
    </tr> 
<?php endforeach; ?> 
</table> 
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
