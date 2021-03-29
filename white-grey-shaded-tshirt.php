<!--Database file-->
<?php
  include ('connect_db.php');
?>

<!--Header File-->
	<?php include('header.php');?>

  <!--Breadcrumb Start Here-->
  <div class="container">
      <ol class="breadcrumb">
        <li><a href="index.php">Home</a></li>
        <li class="active">Men Clothing</li>
      </ol>
  </div> 

	<div class="container">
		<div class="row">
			<div class="col-sm-6 text-center">
        <span class="zoom" id='product1'>
				<img src="images/t-shirt-13.jpg" style="width:350px;height: 450px;" data-aos="zoom-In">
        </span>
			</div>
			<div class="col-sm-6">
				<h3>White Grey Shaded T-Shirt</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p><strong>Rs.350</strong> &nbsp &nbsp<strike>Rs.400</strike></p>
        <p><strong>Size:</strong></p>
				<div class="main-size-div">
          <div class="size-div">
            <button class="shirt-size">S</button>  
          </div>
          <div class="size-div">
            <button class="shirt-size">M</button>  
          </div>
          <div class="size-div">
            <button class="shirt-size1">L</button>  
          </div>
          <div class="size-div">
            <button class="shirt-size2">XL</button>  
          </div>
        </div>
        <div class="row">
          <?php
              $id = $_GET["id"];
              $query ="SELECT * from tbl_product WHERE id = '$id'";
              $result = mysqli_query($conn,$query);
              if(mysqli_num_rows($result)>0)
               {
              while($row=mysqli_fetch_array($result)) 
                {
            ?>
            
					<div class="col-sm-12">
            <form action="view_cart.php?action=add&id=<?php echo $row["id"];?>" method="post">
            <input type="hidden" name="hidden_name" value="<?php echo $row["name"]?>">
            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]?>">
            <strong>Quantity: </strong><input type="number" name="quantity" min="1" max="5"><br>
						<button type="submit" class="btn" name="add_to_cart">Add To Cart &nbsp<span class="glyphicon glyphicon-shopping-cart"></span></button><br>
            </form>
						<button class="btn">Buy Now</button>
					</div>
          <?php 
            }
          }
          ?>
				</div>
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <p>100% Original Products</p>
            <p>Free Delivery on order above Rs. 799</p>
            <p>Pay on delivery might be available</p>
            <p>Easy 15 days returns and exchanges</p>
            <p>Try & Buy might be available</p>
          </div>
        </div>
			</div>
		</div>
		
	</div>

	<!--Related Products-->
	<div class="container-fluid text-center product">
    <h3>Related Products</h3>
          <div class="row text-center">

      <!--Second Product-->
      <?php
        $query="SELECT * FROM tbl_product WHERE id=2";
        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result)>0)
        {
          $row=mysqli_fetch_array($result);
          
        ?>
          <div class="col-md-3 col-sm-6" data-aos="fade-up">
            <form action="view_cart.php?action=add&id=<?php echo $row["id"];?>" method="POST">
                <div class="thumbnail">
              <img src="<?php echo $row["image"]; ?>" class="thumbnail-image" style="cursor: pointer;"
              onclick="document.location.href='navy-blue-white-strip-tshirt.php?id=<?php echo $row["id"];?>'">
              <p><strong><?php echo $row["name"]; ?></strong></p>
              <p><strong>Rs. <?php echo $row["price"]; ?></strong></p>
              <strong>Quantity: &nbsp</strong><input type="number" name="quantity" min="1" max="5" ><br>
              <input type="hidden" name="hidden_name" value="<?php echo $row["name"];?>">
              <input type="hidden" name="hidden_price" value="<?php echo $row["price"];?>">
              <button type="submit" class="btn" name="add_to_cart">Add To Cart &nbsp<span class="glyphicon glyphicon-shopping-cart"></span></button>
            </div> 
            </form> 
          </div>
          

        <?php  
          }
      ?>

      <!--Third Product-->
      <?php
        $query="SELECT * FROM tbl_product WHERE id=3";
        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result)>0)
        {
          $row=mysqli_fetch_array($result);
          
        ?>
          <div class="col-md-3 col-sm-6" data-aos="fade-up">
            <form action="view_cart.php?action=add&id=<?php echo $row["id"];?>" method="POST">
                <div class="thumbnail">
              <img src="<?php echo $row["image"]; ?>" class="thumbnail-image" style="cursor: pointer;"
              onclick="document.location.href='yellow-striped-round-neck-tshirt.php?id=<?php echo $row["id"];?>'">
              <p><strong><?php echo $row["name"]; ?></strong></p>
              <p><strong>Rs. <?php echo $row["price"]; ?></strong></p>
              <strong>Quantity: &nbsp</strong><input type="number" name="quantity" min="1" max="5" ><br>
              <input type="hidden" name="hidden_name" value="<?php echo $row["name"];?>">
              <input type="hidden" name="hidden_price" value="<?php echo $row["price"];?>">
              <button type="submit" class="btn" name="add_to_cart">Add To Cart &nbsp<span class="glyphicon glyphicon-shopping-cart"></span></button>
            </div> 
            </form> 
          </div>
          

        <?php  
          }
      ?>
      <!--Fourth Product-->
      <?php
        $query="SELECT * FROM tbl_product WHERE id=4";
        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result)>0)
        {
          $row=mysqli_fetch_array($result);
          
        ?>
          <div class="col-md-3 col-sm-6" data-aos="fade-up">
            <form action="view_cart.php?action=add&id=<?php echo $row["id"];?>" method="POST">
                <div class="thumbnail">
              <img src="<?php echo $row["image"]; ?>" class="thumbnail-image" style="cursor: pointer;"
              onclick="document.location.href='black-printed-round-neck-tShirt.php?id=<?php echo $row["id"];?>'">
              <p><strong><?php echo $row["name"]; ?></strong></p>
              <p><strong>Rs. <?php echo $row["price"]; ?></strong></p>
              <strong>Quantity: &nbsp</strong><input type="number" name="quantity" min="1" max="5" ><br>
              <input type="hidden" name="hidden_name" value="<?php echo $row["name"];?>">
              <input type="hidden" name="hidden_price" value="<?php echo $row["price"];?>">
              <button type="submit" class="btn" name="add_to_cart">Add To Cart &nbsp<span class="glyphicon glyphicon-shopping-cart"></span></button>
            </div> 
            </form> 
          </div>
          

        <?php  
          }
      ?>

      <!--Fourth Product-->
      <div class="col-md-3 col-sm-6" data-aos="fade-up">
          <div class="thumbnail">
            <img src="images/jeans-1.jpg" class="thumbnail-image">
            <p><strong>Light Pink Formal Shirt</strong></p>
            <p><strong>RS.490</strong></p>
            <strong>Quantity: &nbsp</strong><input type="number" name="quantity" min="1" max="5" ><br>
            <button class="btn">Add To Cart &nbsp<span class="glyphicon glyphicon-shopping-cart"></span></button>
          </div>  
        </div>
    </div>
  </div>

	<?php include('footer.php');?>