<?php
	session_start();
	include 'connect_db.php';

	if(!$_SESSION['auth'])		//if session is empty and someone is trying to access 								welcome page
	{
		echo '<script>window.location = "account.php"</script>';
	}
	else
	{
		echo "Welcome User";
	}

	if(isset($_REQUEST["logout"]))
	{
		session_unset();
		session_destroy();
		echo '<script>window.location = "account.php"</script>';
	}

?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>
	<form>
		<input type="submit" name="logout" value="Logout">
	</form>
</body>
</html>