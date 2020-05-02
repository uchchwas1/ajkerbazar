<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>
	<table width="770" align="center" bgcolor="pink"> 
	<tr align="center">
		<td colspan="6"><h2>Your Orders details:</h2></td>
	</tr>
<tr align="center" bgcolor="skyblue">
		<th>Order Number</th>
		<th>Quantity</th>
		<th>Order Date</th>
		<th>Status</th>
	</tr>
<?php 
	include("CMS/signup/server.php");
	$get_order = "SELECT * FROM `users` WHERE order_details;";
	$run_order = mysqli_query($db, $get_order); 
	$i = 0;
	while ($row_order=mysqli_fetch_array($run_order)){
		$order_id = $row_order[''];
		$qty = $row_order['Quantity'];
		$order_date = $row_order['order_date'];
		$status = $row_order['status'];
		$i++;
	?>

	<tr align="center">
		<td><?php echo $i;?></td>
		<td><?php echo $qty;?></td>
		<td><?php echo $order_date;?></td>
		<td><?php echo $status;?></td>
	</tr>
	<?php } ?>

</table>
</body>
</html>