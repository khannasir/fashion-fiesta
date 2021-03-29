<?php
  include ('connect_db.php');

  /*If any user already login then it will redirect to profile.php*/
  session_start();
  if(isset($_SESSION["user_name"]))
  {
    header("location:profile.php");
  }
?>
	
  <!--Header file-->
	 <?php include('header.php');?>


	<!--Banner Section-->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner mybanner">
    <div class="item active">
   		<img src="images/banner-img-2.jpg" style="object-fit: cover;">
    </div>

    <div class="item">
      <img src="images/banner-img-14.jpg" style="object-fit: cover;">
    </div>

    <div class="item">
      <img src="images/banner-img-8.jpg" style="object-fit: cover;">
    </div>
  </div>

  <!-- Left and right controls-->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>	
<!--Banner Section End Here-->

<!--About Services Section-->
<div class="services">
  <div class="container-fluid text-center">
    <div class="row">
        <div class="col-lg-4 col-sm-4 col-xs-4 ">
          <i class="fa fa-truck icons"></i><span>Free Shipping</span>
        </div>
        <div class="col-lg-4  col-sm-4 col-xs-4">
          <i class="fa fa-inr icons"></i><span>Friendly Prices</span>
        </div>
        <div class="col-lg-4 col-sm-4 col-xs-4">
          <i class="fa fa-clock icons"></i><span>Always On Time</span>
        </div>
    </div>
    </div>
  </div>
<!--About Services Section-->

  <!--Featured Products Section-->
  <div class="container-fluid text-center product">
    <h3>Featured Products</h3>

      <div class="row text-center">
        
      <!--First Product-->
      <?php
        $query="SELECT * FROM tbl_product WHERE id=1";
        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result)>0)
        {
          $row=mysqli_fetch_array($result);
          
        ?>
          <div class="col-md-3 col-sm-6" data-aos="fade-up">
            <form action="view_cart.php?action=add&id=<?php echo $row["id"];?>" method="POST">
                <div class="thumbnail">
              <img src="<?php echo $row["image"]; ?>" class="thumbnail-image" style="cursor: pointer;"
              onclick="document.location.href='white-grey-shaded-tshirt.php?id=<?php echo $row["id"];?>'">
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
    </div>
    
</div>
<!--Featured Products Section End-->

<!--Formal Collection Section-->
  <div class="container-fluid text-center product">
    <h3>Formal Collection</h3>
    <div class="row text-center">
        <div class="col-md-3 col-sm-6" data-aos="fade-up">
          <div class="thumbnail">
            <img src="images/Formal-shirt-1.jpg" class="thumbnail-image">
            <p><strong>Formal Shirt</strong></p>
            <p><strong>RS.550</strong></p>
            <button class="btn">Add To Cart &nbsp<span class="glyphicon glyphicon-shopping-cart"></span></button>
          </div>  
        </div>
        <div class="col-md-3 col-sm-6" data-aos="fade-up">
          <div class="thumbnail">
            <img src="images/Formal-shirt-6.jpg" class="thumbnail-image">
            <p><strong>White Formal Shirt</strong></p>
            <p><strong>RS.450</strong></p>
            <button class="btn">Add To Cart &nbsp<span class="glyphicon glyphicon-shopping-cart"></span></button>
          </div>  
        </div>
        <div class="col-md-3 col-sm-6" data-aos="fade-up">
          <div class="thumbnail">
            <img src="images/Formal-shirt-7.jpg" class="thumbnail-image">
            <p><strong>Light Pink Formal Shirt</strong></p>
            <p><strong>RS.490</strong></p>
            <button class="btn">Add To Cart &nbsp<span class="glyphicon glyphicon-shopping-cart"></span></button>
          </div>  
        </div>
        <div class="col-md-3 col-sm-6" data-aos="fade-up">
          <div class="thumbnail">
            <img src="images/Formal-blazer-1.jpg" class="thumbnail-image">
            <p><strong>Formal Blazer</strong></p>
            <p><strong>Rs.599</strong></p>
            <button class="btn">Add To Cart &nbsp<span class="glyphicon glyphicon-shopping-cart"></span></button>
          </div>  
        </div>
    </div>
  </div>
    
    <!--Formal Collection Section-->
  <div class="container-fluid text-center product">
    <h3>Winter Collection</h3>
    <div class="row text-center">
        <div class="col-md-3 col-sm-6" data-aos="fade-up">
          <div class="thumbnail">
            <img src="images/jacket-9.jpg" class="thumbnail-image">
            <p><strong>Formal Shirt</strong></p>
            <p><strong>RS.550</strong></p>
            <button class="btn">Add To Cart &nbsp<span class="glyphicon glyphicon-shopping-cart"></span></button>
          </div>  
        </div>
        <div class="col-md-3 col-sm-6" data-aos="fade-up">
          <div class="thumbnail">
            <img src="images/hoodie-8.jpg" class="thumbnail-image">
            <p><strong>White Formal Shirt</strong></p>
            <p><strong>RS.450</strong></p>
            <button class="btn">Add To Cart &nbsp<span class="glyphicon glyphicon-shopping-cart"></span></button>
          </div>  
        </div>
        <div class="col-md-3 col-sm-6" data-aos="fade-up">
          <div class="thumbnail">
            <img src="images/jacket-8.jpg" class="thumbnail-image">
            <p><strong>Light Pink Formal Shirt</strong></p>
            <p><strong>RS.490</strong></p>
            <button class="btn">Add To Cart &nbsp<span class="glyphicon glyphicon-shopping-cart"></span></button>
          </div>  
        </div>
        <div class="col-md-3 col-sm-6" data-aos="fade-up">
          <div class="thumbnail">
            <img src="images/jacket-4.jpg" class="thumbnail-image">
            <p><strong>Formal Blazer</strong></p>
            <p><strong>Rs.599</strong></p>
            <button class="btn">Add To Cart &nbsp<span class="glyphicon glyphicon-shopping-cart"></span></button>
          </div>  
        </div>
    </div>
  </div>
    

    <!--Cutomer Feedback Section-->
    <div class="container-fluid text-center" data-aos="fade-up">
        <h1>What Our Customer Say</h1>
        <div class="carousel slide text-center" data-ride="carousel" id="mycarousel">
          <!--indicators-->
          <ol class="carousel-indicators">
            <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
            <li data-target="#mycarousel" data-slide-to="1" ></li>
            <li data-target="#mycarousel" data-slide-to="2" ></li>
          </ol>
          <!--Wrapper for slides-->
          <div class="carousel-inner" role="list-box">
              <div class="item active">
                <h4><b>"This is the best Online Cloth Store.I'm completly satisfied."</b><br><span style="font-style: normal">Ayan Khan</span></h4>
              </div>
              <div class="item">
                <h4><b>"The collection at Lifestyle is just awesome."</b><br><span style="font-style: normal">Rahul Singh</span></h4>
              </div>
              <div class="item">
                <h4><b>"The payment process is so easy that makes shopping at Lifestyle better."</b><br><span style="font-style: normal">John</span></h4>
              </div>
          </div>

          <a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" area-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" area-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
        </div>
    </div>
    

  

  <!--Footer file-->
  <?php include('footer.php');?>