<ul>
 <?php foreach($results as $company): ?>
     <li><?php echo $form->link($company['Company']['name'], array('controller'=>'companies', 'action'=>'view', $company['Company']['id'])); ?></li>
 <?php endforeach; ?>
</ul> 