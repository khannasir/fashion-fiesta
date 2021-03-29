<!--Include Header File -->					
<?php include('header.php');?>
	

<div class="container">
	<div class="row">
		<div class="col-lg-6 col-md-6" style="margin-bottom:20px;">
			<center><h3>CONTACT US</h3></center>
					<form action="" method="post" name="form1">

					      	<!--Customer name-->
					      	<div class="form-group input-group">
					        	<label for="name" class="sr-only">Name</label>
					        	<span class="input-group-addon">
					        		<i class="fa fa-user"></i>
					        	</span>
					        	<input type="text" class="form-control input-lg" name="name" placeholder="Enter Name" required>
					        </div>
					        <!--customer email-->
					        <div class="form-group input-group">
					        	<label for="email" class="sr-only">E-Mail</label>
					        	<span class="input-group-addon">
					        		<i class="fa fa-envelope"></i>
					        	</span>
					        	<input type="email" class="form-control input-lg" name="email" placeholder="Enter Email" required>
					        </div>
					        <!--Customer mobileno-->
					        <div class="form-group input-group">
					        	<label for="mobileno" class="sr-only">Mobile No</label>
					        	<span class="input-group-addon">
					        		<i class="fa fa-phone"></i>
					        	</span>
					        	<input type="number" class="form-control input-lg" name="mobileno" placeholder="Enter Mobile Number" pattern="{0-9}[10]"required>
					        </div>
					        <!--Customer Message-->
							<div class="form-group input-group">
								<label for="msg" class="sr-only">Message</label>
								<span class="input-group-addon">
									<i class="fa fa-envelope"></i>
								</span>
								<textarea class="form-control input-lg" name="msg" placeholder="Your Message" required></textarea>
							</div>	

					      <!--Modal footer-->	
					     <div class="modal-footer" style="text-align: center;">
       						 <button type="submit" class="btn btn-lg" name="contact" style="width: 100px;">Send</button><br>
       					</div> 
       					</form><!--valiadte form end here-->
       	</div>	
       	
       	<div class="col-lg-6 col-md-6 text-center">
       		<h3>Or You Can Contact Us On -</h3>
       		<h4><i class="fa fa-phone"></i> &nbsp <strong>+91-9008898770</strong></h4>
       		<h4><i class="fa fa-envelope"></i> &nbsp <strong>info.lifestyle@gmail.com</strong></h4>
       	</div>			
    </div>   						 
</div>       						 
<!--Include Footer File Here--->
<?php include('footer.php');?>       						 