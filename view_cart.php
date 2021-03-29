<?php
	include ('connect_db.php');

	/*If any user already login then it will redirect to profile.php*/
  session_start();
  if(isset($_SESSION["user_name"]))
  {
    header("location:profile_view_cart.php");
  }
	
	/*Header file*/
	include('header.php');

	if (isset($_POST["add_to_cart"]))
	{
		
		if(isset($_SESSION["shopping_cart"]))
		{
			$product_array_id = array_column($_SESSION["shopping_cart"], "product_id");

			if(!in_array($_GET["id"], $product_array_id))
			{
				if(!$_POST["quantity"]=="")
				{

					$count = count($_SESSION["shopping_cart"]);

					$product_array = array(
					'product_id' => $_GET["id"],
					'product_name' => $_POST["hidden_name"],
					'product_price' => $_POST["hidden_price"],
					'product_quantity' => $_POST["quantity"]
					 );
					$_SESSION["shopping_cart"][$count] = $product_array;
				}
				else
				{
					$_SESSION["status"] = "Please Select Product Qunatity !!";
					$_SESSION['status_code'] = "info";
					header("location:index.php");
				}
			}
			else
			{
				$_SESSION['status'] = "Product Already Added!!";
				$_SESSION['status_code'] = "info";
				header("location:index.php");
			}
		}
		else
		{
			$product_array = array(
				'product_id' => $_GET["id"],
				'product_name' => $_POST["hidden_name"],
				'product_price' => $_POST["hidden_price"],
				'product_quantity' => $_POST["quantity"]
				 );
			
			$_SESSION["shopping_cart"][0] = $product_array;
		}

			$_SESSION['status'] = "Product Added To Cart !!";
			$_SESSION['status_code'] = "success";
			header("location:index.php");

			
	}

	
	if (isset($_GET["action"]))
	 {
		if($_GET["action"] == "delete")	
		{
			foreach ($_SESSION["shopping_cart"] as $key => $value) 
			{
				
				if($value["product_id"] == $_GET["id"])
				{
					unset($_SESSION["shopping_cart"][$key]);
					$_SESSION['status'] = "Product Removed !!";
					$_SESSION['status_code'] = "success";
					header("location:view_cart.php");
				}
			}
		}
	}	
?>
	<!--Breadcurmb Start Here-->
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">cart</li>
		</ol>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<table class="table">
					<thead>
						<!-- <th>S.No</th> -->
						<th>Product Name</th>
						<th>Product Price</th>
						<th>Quantity</th>
						<th>Total</th>
						<th>Action</th>
					</thead>
					<tbody>
						<?php
							if(!empty($_SESSION["shopping_cart"]))
							{

								$total = 0;
								foreach ($_SESSION["shopping_cart"] as $key => $value)
								{
						?>
							<tr>
								<!-- <td><?php echo $value["product_id"];?></td> -->
								<td><?php echo $value["product_name"];?></td>
								<td><i class="fa fa-inr" aria-hidden="true"></i><?php echo $value["product_price"];?></td>
								<td><?php echo $value["product_quantity"];?></td>
								<td><i class="fa fa-inr" aria-hidden="true"></i><?php echo number_format($value["product_price"] * $value["product_quantity"], 2);?></td>
								<td><a href="view_cart.php?action=delete&id=<?php echo $value["product_id"];?>"><button type="submit" class="btn">Remove</button></a></td>
							</tr>			
						<?php			
								$total = $total + ($value["product_price"] * $value["product_quantity"]);
							}
						}
						else{
							echo "<h3>Your Cart Is Empty !!</h3>";
						}

						?>
					</tbody>
				</table>
			</div>

			<?php if(isset($total)):?>

			<div class="col-lg-4">
				<h3><center>Order Details</center></h3>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-xs-6">
						<p>Total Items</p>
						<p>Price</p>
						<p>Discount</p><hr>
						<p><strong>Total Amount</strong>
					</div>
					<div class="col-lg-6 col-md-6 col-xs-6">
						<p><?php echo count($_SESSION["shopping_cart"]);?></p>
						<p><i class="fa fa-inr" aria-hidden="true"></i><?php echo number_format($total,2);?></p>
						<p><i class="fa fa-inr" aria-hidden="true"></i>0.00</p><hr>
						<p><strong><i class="fa fa-inr" aria-hidden="true"></i><?php echo number_format($total,2);?></strong></p>
					</div>
				</div>
				<center><a href="checkout.php" class="btn" style="width: 100%;">PLACE ORDER</a></center>
			</div>

			<?php endif;?>
		</div>
	</div>
	<div class="container" style="height: 18vh;">
		
	</div>
	<!--Footer Start Here-->
	<?php include('footer.php');?>