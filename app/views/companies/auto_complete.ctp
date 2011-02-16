<ul>
 <?php foreach($companies as $company): ?>
     <li><?php echo $form->link($post['Company']['name'], array('controller'=>'companies', 'action'=>'view')); ?></li>
 <?php endforeach; ?>
</ul> 