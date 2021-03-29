<?php
	include('connect_db.php');

	if(isset($_REQUEST['signin']))
	{
		
		$username = $_REQUEST["username"];
		$password = $_REQUEST["password"];

		$query = "select username , password from tbl_admin where username = '$username' and password = '$password'";
		$result=mysqli_query($conn, $query);
		if(!$result){
			echo "Query execution problem !!";
		}
		if(mysqli_num_rows($result) == 1)
		{
			session_start();
			$_SESSION["authen"] = $username;
			header('location:dashboard.php');
		}
		else{
			$msg = "Username Or Password is incorrect !!!!";
			// echo "<script>alert('username or password is incorrect !!!')</script>";
			echo "<script>window.location('index.php')</script>";
		}

	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin LogIn Page</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="css-2/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css-2/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Epilogue&display=swap" rel="stylesheet">
</head>
<body>
		 <div class="container">
		 	<div class="row">
		 		<div class="login-form">
					<h3><center><b>ADMIN</b></center></h3>
					
					<?php if(isset($msg)){
							echo"<p class='text-danger'>".$msg."</p>";
							}
						?>
					<form action="#" class="form-group" method="post" name="form1">
						<input type="text" name="username" id="username" class="form-control" placeholder="Username"><br>
						<input type="password" name="password" id="password" class="form-control" placeholder="Password"><br>
						<button class="btn btn-primary btn-lg btn-block" name="signin">Log In</button>
					</form>
				</div>
			</div>	
		 </div>

				
	



	<!--Check validation through Javascript-->
	<!--<script>
		function checkValidation()
		{
			attempt = 3;
			var username = document.getElementById("username").value;
			var password = document.getElementById("password").value;

			if(username == "admin" && password == "password")
			{

				$_SESSION["authen"] = 'true';

				window.location = "dashboard.php";
				return false;

			}
			else
			{
				alert("Wrong Username or Password");
				window.location = "index.php";
				return false;
				
				//attempt --;
				//alert("You have left " +attempt+ "attempt" );
				//if(attempt == 0)
				//{
				//	document.getElementById("username").disabled = true;
				//	document.getElementById("password").disabled = true;
				//	document.getElementById("signin").disabled = true;
				//	return false;
				//}
				}
			}
	</script>-->

</body>
</html>