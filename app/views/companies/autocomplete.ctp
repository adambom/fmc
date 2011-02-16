<ul>
 <?php foreach($results as $company): ?>
     <li><?php echo '<a href="/companies/view/'.$company['Company']['id'].'">'.$company['Company']['id'].'</a>'; ?></li>
 <?php endforeach; ?>
</ul> 