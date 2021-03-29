<?php 
$servername="localhost";
$username="root"; 
$password="";
$db="lifestyle_db";
$conn=mysqli_connect($servername,$username,$password,$db);
if(!$conn){
	echo "<h3>Database Connection Problem !!!</h3>". "<br>";
}
?>