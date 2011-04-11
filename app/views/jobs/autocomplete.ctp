<?php $i = 1; ?>
<ul>
 <?php foreach($results as $job): ?>
     <li <?php if($i==1){echo "class='first'";} ?>><?php echo '<a href="/fmc/jobs/view/'.$job['Job']['id'].'">'.$job['Job']['jobnumber']." - ".$job['Job']['name'].'</a>'; ?></li>
	 <?php $i++; ?>
 <?php endforeach; ?>
</ul> 
