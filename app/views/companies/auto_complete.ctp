<ul>
 <?php foreach($results as $company): ?>
     <li><?php echo $form->link($company['Company']['name'], array('controller'=>'companies', 'action'=>'view')); ?></li>
 <?php endforeach; ?>
</ul> 