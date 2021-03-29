<?php
	include 'connect_db.php';


	$a = $_GET['id'];

	$sql = "DELETE FROM tbl_user_signup WHERE id = '$a'";
	$result = mysqli_query($conn,$sql);
	if($result)
	{
		echo '<script>alert("User Data Deleted Susssfully")</script>';
		echo '<script>window.location= "registered_User.php"</script>';
	}
	else
	{
		echo '<script>alert("User Data Could Not Delete")</script>';
		echo '<script>window.location= "registered_User.php"</script>';
	} 
?>
