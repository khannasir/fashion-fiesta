<?php
	session_start();
	include('connect_db.php');
	if(!isset($_SESSION["authen"]))
	{
		echo '<script>window.location = "index.php"</script>';
	}

	
?>
<?php include('header.php');?>
<?php include('navbar.php');?>
		
	<!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Add product</li>
                        </ol>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
	<!-- Add Product -->	
	<div class="container">
		<div class="row">
		<div class="col-lg-4 col-md-12">
			<h3>ADD PRODUCT HERE</h3>
			<hr>
		<form action="insert_product.php" method="post" class="form-group" enctype="multipart/form-data">

			<b>ID Of Product: </b><input type="text" name="id" class="form-control">
			<b>Name Of Product: </b><input type="text" name="name" class="form-control">
			<b>Price Of Product: </b><input type="text"  name="price" class="form-control">
			<b>Image Of Product: </b><input type="file" name="productimage" class="form-control" value=""/>
			<input type="submit" name="btn" class="btn btn-primary pull-right" value="Add Product" >
			 
		</form>
		</div>
	</div>
	</div>
		
<?php include('footer.php');?>	
	
