<?php session_start(); 
include "../navbarwWthoutSearch.php" 
?>
<div style="clear:both"></div>
				
			
			<div class="table-responsive"><br><h3>Order Details</h3><br>
				<table class="table table-bordered">
					<tr>
						<th width="40%">Item Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
						<th width="5%">Action</th>
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td>$ <?php echo $values["item_price"]; ?></td>
						<td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td><a href="single.php?action=delete&r_id=<?php echo $_GET["r_id"];?>&code=<?php echo $values["item_code"];?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right">$ <?php echo number_format($total, 2); ?></td>
						<!--order-->
                        <form action="" method="post">
						
						</form>
						
					</tr>
					
					
					<?php
					}
					?>
                    </table>
					
				</div>
				</div>
				
				<div>
				    <h2>  Select Your Payment Method </h2>
					</br><td align="rignt"><input type="submit" name="CashOnDelivery" style="margin-top:5px;" class="btn btn-success" value="Cash On Delivery" /></td>
					<td align="right"><a href="payment.php"><input type="submit" name="OnlinePayment" style="margin-top:5px;" class="btn btn-danger" value="Online Payment" /></a></td>
				</div>	
			