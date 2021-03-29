<!DOCTYPE html>
<html lang="en">
<head>
	<title>Online Cloth Store</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body onload="myfunction()">
	<!--Pre Loader Start Here-->
	<div id="preloader">
        
    </div>
	<!-- Header Start Here -->

	<div class="container-fluid text-center header">
		<p>FREE SHIPPING ON ORDERS ABOVE Rs.799</p>
	</div>

	<!--navbar-->
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container col-lg-12 col-md-12 col-sm-12">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index.php" class="navbar-brand">LifeStyle</a>
			</div>
			<div class="collapse navbar-collapse" id="mynavbar">
				<ul class="nav navbar-nav">
					<li><a href="index.php">Home</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories<span class="caret"></span></a>
  						<ul class="dropdown-menu">
    						<li><a href="#">Men Clothing</a></li>
    						<li><a href="#">Women Clothing</a></li>
    						<li><a href="#">Kids Clothing</a></li>
  						</ul>
					</li>
					<li><a href="#contact">Contact</a></li>
					<li><a href="#about us">About Us</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php echo "Hi,".$_SESSION['user_name']; ?></a>
					<ul class="dropdown-menu">
						<li><a href="profile_view_cart.php" style="text-decoration:none; color:blue;"><span class="glyphicon glyphicon-shopping-cart">Cart</a></li>
						<li class="divider"></li>
						<li><a href="#" style="text-decoration:none; color:blue;">Orders</a></li>
						<li class="divider"></li>
						<li><a href="#" style="text-decoration:none; color:blue;">Change Password</a></li>
						<li class="divider"></li>
						<li><a href="logout.php" style="text-decoration:none; color:blue;">Logout</a></li>
					</ul>
				</li>
					<li><a href="view_cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
				</ul>
			</div>

		</div>
	</nav>

	<!-- Header End -->

	
