<html>
<head>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<table class="table table-responsive table-striped">
			<thead>
				<th>Paid To</th>
				<th>Date</th>
				<th>Amount</th>
			</thead>
			<tbody>
				<?php foreach($vouchers as $voucher){ ?>
				<tr>
					<td><a href="<?php echo base_url() ?>Hr/voucher/<?=$voucher->id?>"><?php echo $voucher->paid_to?></a></td>
					<td><?php echo date('d-m-Y',strtotime($voucher->created_at));?></td>
					<td><?php echo $voucher->total_amount?></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</body>
</script>
</html>