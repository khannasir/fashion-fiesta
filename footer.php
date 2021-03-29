	
	<!-- Footer Start Here -->
	<div class="container-fluid footer">
		 <div class="row text-center">
		 	<div class="col-sm-4">
		 		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28475.89457335501!2d80.90937438584908!3d26.856269971707107!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfda25508966f%3A0x4108d21ea1854f51!2sQaisar%20Bagh%2C%20Lucknow%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1611642113302!5m2!1sen!2sin" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		 	</div>
		 	<div class="col-sm-4">
		 		<div class="service-logo">
			 		<p><img src="images/icon/original-logo.png">
			 		<b>100% ORIGINAL</b> guarantee for<br> all products at lifestyle.com</p>
			 		<p><img src="images/icon/return-logo.png"> <b>Return within 30days</b> of <br> receiving your order</p>
			 		<p><img src="images/icon/truck-logo.png"> <b>Get free delivery</b> for <br> every order above Rs. 799</p>
		 		</div>
		 	</div>
		 	<div class="col-sm-4 text-center">

		 		<div class="app-store">
			 		<p><b>EXPERIENCE LIFESTYLE APP ON MOBILE</b></p>
			 		<span><a href="https://play.google.com/store/apps"><img src="images/social-icons/google_play.png"></a></span>
			 		<span><a href="#"><img src="images/social-icons/apple_store.png"></a></span>
				</div>

			 	<div class="follow-us">
				 	<p><b>FOLLOW US ON:</b></p>
				 </div>
				 <div class="social-icons">
				 	<span><a href="#"><img src="images/social-icons/facebook-logo.png"></a></span>
				 	<span><a href="#"><img src="images/social-icons/twitter-logo.png"></a></span>
				 	<span><a href="#"><img src="images/social-icons/instagram-logo.png"></a></span>
				 	<span><a href="#"><img src="images/social-icons/youtube-logo.png"></a></span>
				 	<i class="fa fa-chevron-up pull-right" title="To-Top"></i>
		 		</div>
		 	</div>
		 		</div>
		 	</div>
		</div>
	</div>

	<!-- Footer End -->

					<!--Login Modal -->
					<div id="LoginModal" class="modal fade" role="dialog">
					  <div class="modal-dialog">

					    <!-- Modal content-->
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal">&times;</button>
					        <h4 class="modal-title">Sign In</h4>
					      </div>
					      <!--Modal Body-->
					      <form action="user_login.php" method="post">
					      <div class="modal-body">
					      	<!--redirect to user_login.php to validate input values-->
					   
					        <div class="form-group input-group">
					        	<label for="useremail" class="sr-only">Email</label>
					        	<span class="input-group-addon">
					        		<i class="fa fa-user"></i>
					        	</span>
					        	<input type="text" class="form-control" name="useremail" placeholder="Enter Email">
					        </div>
					        <div class="form-group input-group">
					        	<label for="password" class="sr-only">password</label>
					        	<span class="input-group-addon">
					        		<i class="fa fa-lock"></i>
					        	</span>
					        	<input type="password" class="form-control" name="password" placeholder="Enter Password">
					        </div>
					        

					      </div>
					      
					      <!--Modal Body End-->

					      <!--Modal footer-->	
					      <div class="modal-footer" style="text-align: center;">
       						 <button type="submit" class="btn btn-lg" name="login">Login</button><br>
       						 
       						 </form><!--valiadte form end here-->
       						 <span>Don't Have An Acoount?</span><a href="#" data-toggle="modal" data-target="#SignupModal" data-dismiss="modal">Sign-Up Here</a>
       						</div>
      					</div>

					    </div>

					  </div>
					  <!--Login Modal End-->

					

					<!--Sign Up Modal Start-->
					<div id="SignupModal" class="modal fade" role="dialog">
					  <div class="modal-dialog">

					    <!-- Modal content-->
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal">&times;</button>
					        <h4 class="modal-title">Sign Up</h4>
					      </div>
					      <!--Modal Body-->
					      <form action="user_signup.php" method="post" name="form1" onsubmit="return checkSignup()">
					      <div class="modal-body">
					      	<!--redirect to user_signup.php to validate input values-->
					      	<!--user name-->
					       <div class="form-group input-group">
					        	<label for="name" class="sr-only">Name</label>
					        	<span class="input-group-addon">
					        		<i class="fa fa-user"></i>
					        	</span>
					        	<input type="text" class="form-control" name="name" placeholder="Enter Name">
					        </div>
					        <!--user email-->
					        <div class="form-group input-group">
					        	<label for="email" class="sr-only">E-Mail</label>
					        	<span class="input-group-addon">
					        		<i class="fa fa-envelope"></i>
					        	</span>
					        	<input type="email" class="form-control" name="email" placeholder="Enter Email">
					        </div>
					        <!--user mobileno-->
					        <div class="form-group input-group">
					        	<label for="mobileno" class="sr-only">Mobile No</label>
					        	<span class="input-group-addon">
					        		<i class="fa fa-phone"></i>
					        	</span>
					        	<input type="number" class="form-control" name="mobileno" placeholder="Enter Mobile Number">
					        </div>
					        <!--user password-->
					        <div class="form-group input-group">
					        	<label for="password" class="sr-only">Password</label>
					        	<span class="input-group-addon">
					        		<i class="fa fa-lock"></i>
					        	</span>
					        	<input type="password" class="form-control" name="pass" placeholder="Enter Password">
					        </div>
					        <!--confirm user password-->
					        <div class="form-group input-group">
					        	<label for="mobileno" class="sr-only">Confirm Password</label>
					        	<span class="input-group-addon">
					        		<i class="fa fa-lock"></i>
					        	</span>
					        	<input type="password" class="form-control" name="conpass" placeholder="Confirm Password">
					        </div>
					        

					      </div>
	
					      <!--Modal Body End-->

					      <!--Modal footer-->	
					      <div class="modal-footer" style="text-align: center;">
       						 <button type="submit" class="btn btn-lg" name="signup">Sign Up</button><br>
       						 </form><!--valiadte form end here-->
       						 
       						 <span>Already Have An Account?</span><a href="#" data-toggle="modal" data-target="#LoginModal" data-dismiss="modal">Sign-In Here</a><br>
       						 
       						</div>

      					</div>
					    </div>
					</div>    

					  <!--Sign Up Modal End-->

	<!-- GetButton.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+919889432524", // WhatsApp number
            email: "nasirkhan1934@gmail.com", // Email
            call_to_action: "Message us", // Call to action
            button_color: "#ff3399", // Color of button
            position: "left", // Position may be 'right' or 'left'
            order: "whatsapp,email", // Order of buttons
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
	<!-- GetButton.io widget End-->
	
	<!--form validate script-->
	<script src="js/validate_form.js" type="text/javascript"></script>
	
	<script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
   
    <!--jquery cdn animation on scroll-->
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	
	<!--jquery cdn image zoom-->
	<script src="assets/js/jquery.zoom.js"></script>

	<!--SweetAlert Script-->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	
	<!--SweetAlert script-->
	<?php
	 if(isset($_SESSION['status']) && $_SESSION['status']!="")
	 {

	 ?>
	<script>
		swal({
			  title: "<?php echo $_SESSION['status'];?>",
			  icon: "<?php echo $_SESSION['status_code'];?>",
			  button: "Ok",
			});
	</script>

	<?php 
		  
		}
		   unset($_SESSION['status']);
		   unset($_SESSION['status_code']);
		 
	?>


	<!--Preloader script-->
	<script>
        var loader = document.getElementById('preloader');

        function myfunction()
            {
                loader.style.display ='none';   
            }
    </script>
	

	<!--Animate on scroll Script-->
	<script>
  		AOS.init();
	</script>


	<!--Product image zoom script-->
	<script>
		$(document).ready(function(){
			$('#product1').zoom();
		});
	</script>


    <!--Scroll To Top Script-->	
    	<script>
		$('i').click(function(){
			$('html').animate({scrollTop:0},500);

		  });
	</script>


</body>
</html>