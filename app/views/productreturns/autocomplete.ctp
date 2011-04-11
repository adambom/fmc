<?php $i = 1; ?>
<ul>
 <?php foreach($results as $productreturn): ?>
     <li <?php if($i==1){echo "class='first'";} ?>><?php echo '<a href="/fmc/parts/view/'.$productreturn['Productreturn']['id'].'">'.$productreturn['Job']['name'].'<br>'.$productreturn['Productreturn']['comments'].'</a>'; ?></li>
	 <?php $i++; ?>
 <?php endforeach; ?>
</ul> 
