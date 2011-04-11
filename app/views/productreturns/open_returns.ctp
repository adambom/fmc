<div id="info">
	<label for="company">Search for a job</label>
	<input id="job" />
	<div id="results_holder"></div>
	<div id="actions"><a href="/fmc/productreturns/open_returns/">View All Open Returns</a> | <a href="/fmc/productreturns/">Back to Product Returns	</a> | <a href="javascript: window.print()">Print Report</a></div>
</div>
<table cellpadding="0" cellspacing="0">
	<thead>
		<th>Return Number</th>
		<th>Date</th>
		<th>Vendor</th>
		<th>Item</th>
		<th>PO Number</th>
		<th>RMA Number</th>
		<th>Reason for Return</th>
	</thead>
	<tbody>
		<?php foreach ($productreturns as $productreturn): ?>
			<tr>
				<td><?php echo $productreturn['Productreturn']['fmc_return_no']; ?></td>
				<td><?php echo $productreturn['Productreturn']['date']; ?></td>
				<td><?php echo $productreturn['Vendor']['name']; ?></td>
				<td><?php echo $productreturn['Part'][0]['partnumber']; ?></td>
				<td><?php echo $productreturn['Productreturn']['ponumber']; ?></td>
				<td><?php echo $productreturn['Productreturn']['rma']; ?></td>
				<td><?php echo $productreturn['Productreturn']['comments']; ?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<script type="text/javascript">
	$(document).ready(function(){
		$("#job").keyup(function(){
			$('#results_holder').hide();
			if($(this).val().length > 2) {
				$.get('/~Adam/fmc/jobs/autocomplete_for_open_returns/'+$(this).val(), function(results) {
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