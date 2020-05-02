<?php
include ("navbar.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	
</head>
<body>

	<table width="1024" align="center" bgcolor="Green"> 
	<tr align="center">
		<td colspan="10"><h2>Your Orders details:</h2></td>
	</tr>
<tr align="center" bgcolor="red">
	    
	    <th>Order Number</th>
	    <th>Email</th>
		<th>Order Details</th>
		<th>Quantity</th>
		<th>Order Date</th>
		<th>Status</th>
	</tr>
<?php 
	include("server.php");
	$get_order = 'SELECT * FROM `users` WHERE 1';
	$run_order = mysqli_query($db, $get_order); 
	$i = 0;
	while ($row_order=mysqli_fetch_array($run_order)){
		$order_id = $row_order['id'];
		$email=$row_order['email'];
		$order_details=$row_order['order_details'];
        $qty = $row_order['Quantity'];
		$order_date = $row_order['order_date'];
		$status = $row_order['status'];
		$i++;
	?>
	<tr align="center">
		<td><?php echo $i;?></td>
		<td><?php echo $email;?></td>
		<td><?php echo $order_details;?></td>
        <td><?php echo $qty;?></td>
		<td><?php echo $order_date;?></td>
		<td><?php echo $status;?></td>
	</tr>
<?php } ?>
</table>
</body>
</html>