<?php include ('connect_db.php');?>

<?php 
	session_start();
	if(!isset($_SESSION["user_name"]))
	{
		echo "<script>alert('Please Login To Access Chechout Page.')</script>";
		echo "<script>window.location = 'index.php'</script>";
	}
?>
<!--Header File-->
<?php include 'profile_header.php'?>

	<!--Breadcrumb Start Here-->
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li><a href="view_cart.php">Cart</a></li>
			<li class="active">Checkout</li>
		</ol>
	</div>	
	<!--Checkout Form-->
<div class="container">
	<h3>Billing Address</h3>
	<div class="row">
		<div class="col-lg-8">
			<form action="" method="POST">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
							<label>First Name:</label>
							<input type="text" name="fname" class="form-control" placeholder="Enter First Name" required>
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="form-group">
						<label>Last Name:</label>
						<input type="text" name="lname" class="form-control" placeholder="Enter Last Name" required>	
						</div>
					</div>
				</div>
				<div class="form-group">
					<label>Email:</label>
					<input type="email" name="email" class="form-control" placeholder="Enter Email" required>
				</div>
				<div class="form-group">
					<label>Address:</label>
					<textarea class="form-control" name="address" placeholder="Enter Your Shipping Address" required></textarea>
				</div>
				<hr style="margin:1rem 0px;border: 1px solid grey">
				<h3>Payment Information</h3>
				<div class="radio">	
					<label><input type="radio" name="radio" checked>Credit</label>
				</div>
				<div class="radio">
					<label><input type="radio" name="radio">Debit</label>
				</div>
				<div class="radio">
					<label><input type="radio" name="radio">Paypal</label>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="form-group">
							<label>Name on card:</label>
							<input type="text" name="name1" class="form-control" placeholder="Enter full name as displayed on card" required>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="form-group">
							<label>Card Number:</label>
							<input type="text" name="cardno" class="form-control" placeholder="Card Number" required>
						</div>
					</div>
				</div>	

				<div class="row">
					<div class="col-lg-3 col-md-3 col-xs-4">
						<div class="form-group">
							<label>Expiry Date:</label>
							<input type="date" name="expdate" class="form-control" required>
						</div>
					</div>
					<div class="col-lg-2 col-xs-4">
						<div class="form-group">
							<label>CVV:</label>
							<input type="text" name="cvv" class="form-control" required>
						</div>
					</div>
				</div><hr style="margin:1rem 0px;border: 1px solid grey">
				<button type="submit" class="btn" style="width:100%;margin-bottom: 40px;">Proceed To Checkout</button>	
			</form>
		</div>

		<div class="col-lg-4">
			
		</div>
	</div>
	
</div>	


<!--Footer File-->
<?php include 'footer.php'?>