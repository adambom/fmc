<?php $i = 1; ?>
<ul>
 <?php foreach($results as $opportunity): ?>
     <li <?php if($i==1){echo "class='first'";} ?>><?php echo '<a href="/fmc/opportunities/view/'.$opportunity['Opportunity']['id'].'">'.$opportunity['Company']['name'].' - '.$opportunity['Opportunity']['name'].'</a>'; ?></li>
	 <?php $i++; ?>
 <?php endforeach; ?>
</ul> 
