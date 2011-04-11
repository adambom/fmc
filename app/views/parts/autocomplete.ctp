<?php $i = 1; ?>
<ul>
 <?php foreach($results as $part): ?>
     <li <?php if($i==1){echo "class='first'";} ?>><?php echo '<a href="/fmc/parts/view/'.$part['Part']['id'].'">'.$part['Part']['partnumber'].' - '.$part['Part']['description'].'</a>'; ?></li>
	 <?php $i++; ?>
 <?php endforeach; ?>
</ul> 
