<div id="info">
	<label for="company">Search for a company</label>
	<input id="company" />
	<div id="results_holder"></div>
	<div id="actions"><a href="/fmc/jobs/open_jobs/">View All Open Jobs</a> | <a href="/fmc/jobs/">Back to Jobs</a> | <a href="javascript: window.print()">Print Report</a></div>
</div>
<table cellpadding="0" cellspacing="0">
	<thead>
		<th>Job Number</th>
		<th>Customer</th>	
		<th>Job Name</th>
	</thead>
	<tbody>
		<?php foreach ($jobs as $job): ?>
			<tr>
				<td><?php echo $job['Job']['jobnumber']; ?></td>
				<td><?php echo $job['Company']['name']; ?></td>
				<td><?php echo $job['Job']['name']; ?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<script type="text/javascript">
	$(document).ready(function(){
		$("#company").keyup(function(){
			$('#results_holder').hide();
			if($(this).val().length > 2) {
				$.get('/fmc/companies/autocomplete_for_wip/'+$(this).val(), function(results) {
					$('#results_holder').html(results);
					$('#results_holder').show();
				});
			}
		})
		$(':not(#results_holder, #results_holder *, .search)').click(function() {
			$('#results_holder').hide();
		});
	})
</script>