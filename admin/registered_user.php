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
                            <li class="breadcrumb-item active">Registered Customers</li>
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

 <!-- View Registered User --> 
<div class="container">
    <table class="table">
      <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Email</th>
          <th>Mobile No.</th>
          <th>Action</th>
        </tr>
      </thead>

      <tbody>
           <?php
              $query = "SELECT * from tbl_user_signup";
              $result = mysqli_query($conn,$query);
              if(mysqli_num_rows($result)>0)
              {
                while ($row=mysqli_fetch_assoc($result)) 
                {
                
              ?>

              <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['mobileno'];?></td>
                <td><?php echo "<a href='delete_user.php?id=$row[id]' <button class='btn btn-danger'>Remove</button></a>" ?></td>
              </tr>
             
             <?php 
             }  
              }
            
            ?>
        
      </tbody>
    </table>
</div>

<?php include('footer.php');?>
