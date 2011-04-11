<?php $i = 1; ?>
<ul>
 <?php foreach($results as $employee): ?>
     <li <?php if($i==1){echo "class='first'";} ?>><?php echo '<a href="/fmc/employees/view/'.$employee['Employee']['id'].'">'.$employee['Employee']['fname'].' '.$employee['Employee']['lname'].'</a>'; ?></li>
	 <?php $i++; ?>
 <?php endforeach; ?>
</ul> 
