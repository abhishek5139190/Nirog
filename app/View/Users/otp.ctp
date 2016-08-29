<main class="o-content position-rel_40"> 
	<div class="container">
	  <div class="register-box">
		<div class="col-md-5 register-left">
			<img src="<?php echo IMG_URL . 'register1.jpg'; ?>">
		</div>
		<div class="col-md-7 register-right">
				<div class="box margin-top80">
				<h2 class="heading">
					<div class="left">Join as a Doctor/Clinic</div>
					
				</h2>
				<h3 class="doc-name">Hi! <span>Dr. <?php echo $userDetail['User']['first_name']; ?></span></h3>
                                   <form action="otp" method="post">
				<ul class="register-list">
                                 
					<li  style="width:100%;">
						<label>
							<p style="margin:0px; float:left;">Please Enter the OTP Send to <?php echo $userDetail['User']['mobile_no']; ?><span></span></p>
<!--							<p style="margin:0px; float:right; color:#2faedd"><a href="#">Resend OTP</a></p>-->
						</label>
						<input type="text" name="data[User][token]" placeholder="Enter OTP">
					</li>
					<button type="submit" class="button-otp">Submit</button>
				</ul>
                                   </form>
				</div>
		</div>
	  </div>			
	</div>
  </main>
