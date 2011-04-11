<div id="info">
	<label for="company">Search for a company</label>
	<input id="company" />
	<div id="results_holder"></div>
	<div id="actions"><a href="/fmc/opportunities/open_opportunities/">View All Open Opportunities</a> | <a href="/fmc/opportunities/">Back to Opportunities</a> | <a href="javascript: window.print()">Print Report</a></div>
</div>
<table cellpadding="0" cellspacing="0">
	<thead>
		<th>Stage</th>
		<th>Created Date</th>	
		<th>Name</th>
		<th>Customer Name</th>
		<th>Amount</th>
		<th>Next Step</th>
	</thead>
	<tbody>
		<?php foreach ($opportunities as $opportunity): ?>
			<tr>
				<td><?php echo $opportunity['Stage']['name']; ?></td>
				<td><?php echo $opportunity['Opportunity']['createddate']; ?></td>
				<td><?php echo $opportunity['Opportunity']['name']; ?></td>
				<td><?php echo $opportunity['Company']['name']; ?></td>
				<td><?php echo $opportunity['Opportunity']['amount']; ?></td>
				<td><?php echo $opportunity['Opportunity']['nextstep']; ?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<script type="text/javascript">
	$(document).ready(function(){
		$("#company").keyup(function(){
			$('#results_holder').hide();
			if($(this).val().length > 2) {
				$.get('/fmc/companies/autocomplete_for_open_opps/'+$(this).val(), function(results) {
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