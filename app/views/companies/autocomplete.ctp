<ul>
 <?php foreach($results as $company): ?>
     <li><?php echo '<a href="companies/view/'.$company['Company']['id'].'">'.$company['Company']['name'].'</a>'; ?></li>
 <?php endforeach; ?>
</ul> 