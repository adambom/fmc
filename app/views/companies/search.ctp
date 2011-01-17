<?php // app/views/companies/search.ctp ?> 
<h1>Companies</h1> 
<?php  
    echo $form->create("Company",array('action' => 'search')); 
    echo $form->input("q", array('label' => 'Search for')); 
    echo $form->end("Search"); 
?> 
<p><?php echo $html->link("Add Company", "/companies/add"); ?> 
<table> 
    <tr> 
        <th>Id</th> 
        <th>Title</th> 
        <th>Action</th>  
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
            <?php echo $html->link('Edit', '/companies/edit/'.$company['Company']['id']);?> 
        </td> 
    </tr> 
<?php endforeach; ?> 
</table> 
