<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap -->
  <link href="/resources/css/bootstrap.min.css" rel="stylesheet">

	<title>PHP Test</title>
</head>
<body>
	<h1>PHP TEST</h1>
	<h2>Sorted Item List</h2>

	<table class="table table-bordered">
    <thead class="thead-dark">
		<tr>
			<th>Item Type</th>
			<th>Price</th>
		</tr>

    <?php //var_dump($customer_order->getSortedItems());die('hhhh');?>
		<?php foreach ($customer_order->getSortedItems() as $item): ?>
			<tr>
				<td><?php echo $item->getType() ?></td>
				<td><?php echo $item->getPrice() ?></td>
			</tr>
		<?php endforeach; ?>

		<tr style="font-weight: bold;">
			<td>Total</td>
			<td><?php echo $customer_order->getTotalPrice() ?></td>
		</tr>
	</table>

	<h2>Console and controller price together:  <?php echo $console_and_controller->getTotalPrice(); ?> </h2>


</body>
</html>
