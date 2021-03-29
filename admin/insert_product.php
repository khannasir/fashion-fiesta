<?php
include 'connect_db.php';

	if(isset($_POST["btn"])){
		
		$id=$_POST['id'];
		$name=$_POST['name'];
		$price=$_POST['price'];
		$imagename=$_FILES['productimage']['name'];
		$tmpname=$_FILES['productimage']['tmp_name'];
		$folder="uploaded_images/".$imagename;
		move_uploaded_file($tmpname,$folder);
		$sql="insert into tbl_product(id,name,price,image) values('$id','$name','$price','$folder')";
		$result=mysqli_query($conn,$sql);
		if (!$result) {
			echo"Product could not insert !!";
		}
	}	

	header('location:add_product.php');	

	
?>
