<?php $i = 1; ?>
<ul>
 <?php foreach($results as $company): ?>
     <li <?php if($i==1){echo "class='first'";} ?>><?php echo '<a href="companies/view/'.$company['Company']['id'].'">'.$company['Company']['name'].'</a>'; ?></li>
	 <?php $i++; ?>
 <?php endforeach; ?>
</ul> 
