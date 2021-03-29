<?php
 
 include('connect_db.php');

 	if(isset($_POST["login"])) 
 {

 	$useremail = $_POST['useremail'];
 	$password = $_POST['password'];

	$query = "select * from tbl_user_signup where email = '$useremail' and password = '$password' ";
	$result = mysqli_query($conn, $query);
	
	if(!$result)
	{
		echo "Query execution problem !!!";
	}
	if(mysqli_num_rows($result) == 1 )
	{
		session_start();
		$row = mysqli_fetch_array($result);
		$_SESSION["uid"]=$row["id"];
		$_SESSION["user_name"]=$row["name"];
		echo '<script>window.location = "profile.php"</script>';
	}
	else
	{
		
		echo "<script>alert('Wrong Username or Password')</script>";
		echo '<script>window.location = "index.php"</script>';
	}	

	
 }
?>