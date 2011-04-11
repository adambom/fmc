<table cellpadding="0" cellspacing="0">
	<thead>
		<th>Job Number</th>
		<th>Customer</th>	
		<th>Job Name</th>
	</thead>
	<tbody>
		<?php foreach ($jobs as $job): ?>
			<td><?php echo $job['Job']['jobnumber']; ?></td>
			<td><?php echo $job['Company']['name']; ?></td>
			<td><?php echo $job['Job']['name']; ?></td>
		<?php endforeach; ?>
	</tbody>
</table>