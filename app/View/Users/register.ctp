 

<main class="o-content position-rel_40"> 
	<div class="container">
            <?php if ($loged == false) { ?>
	  <div class="register-box">
		<div class="col-md-5 register-left">
			<img src="<?php echo IMG_URL . 'register1.jpg'; ?>" alt="register" >
		</div>
		<div class="col-md-7 register-right">
				<div class="box">
				<h2 class="heading">
					<div class="left">Join as a Doctor</div>
					<div class="right">Not a Doctor?</div>
				</h2>
                                    <?php echo $this->Session->flash(); ?>
                                    <?php echo $this->Form->create('User', array('id' => 'register', 'novalidate' => 'true', 'url' => array('controller' => 'Users', 'action' => 'register'), "inputDefaults" => array("maxlength" => "100", "legend" => false, "label" => false, "div" => false, "required" => false))); ?> 
				<ul class="register-list">
					<li>
						<label>First Name</label>
	<?php echo $this->Form->input('User.first_name', array('type' => 'text', 'id' => 'first_name', 'class' => "input-block-level txtfield required", 'minlength' => 3, 'maxlength' => 60, 'autocomplete' => "off", "placeholder" => "First Name",'tabindex' => '1',"label" => false)); ?>
    
					</li>
					
					<li>
						<label>Last Name</label>
						<?php echo $this->Form->input('User.last_name', array('type' => 'text', 'id' => 'lastName', 'class' => "input-block-level txtfield required", 'minlength' => 3, 'maxlength' => 60, 'autocomplete' => "off", "placeholder" => "Last Name",'tabindex' => '1',"label" => false)); ?>
					</li>
					<li style="width:100%;">
						<label>Gender</label>
							<div class="gender-reg">
								<div class="one">
                                                                    <input value="male" name="data[User][gender]" id="radio" class="radio-custom" checked="checked" type="radio">
									<label for="radio" class="radio-custom-label"></label>
								</div>
								<div class="two">Male</div>
							</div>
							<div class="gender-reg">
								<div class="one">
									<input value="female" name="data[User][gender]" id="radio1" class="radio-custom"  type="radio">
									<label for="radio1" class="radio-custom-label"></label>
								</div>
								<div class="two">Female</div>
							</div>
					</li>
					<li>
						<label>Mobile Number</label>
						<?php echo $this->Form->input('User.mobile_no', array('type' => 'text', 'id' => 'mobile', 'class' => "input-block-level txtfield number required", 'minlength' => 10, 'maxlength' => 12, 'autocomplete' => "off", "placeholder" => "Mobile number",'tabindex' => '4',"label" => false)); ?>
       
					</li>
					<li>
						<label>E-Mail Address</label>
						<?php echo $this->Form->input('User.email', array('type' => 'email', 'id' => 'username', 'class' => "input-block-level txtfield required", 'autocomplete' => "off", "placeholder" => "Username - Email",'tabindex' => '3',"label" => false)); ?>	
        
					</li>
					<li style="width:100%;">
						<label>Create Password</label>
						<?php echo $this->Form->input('User.password', array('type' => 'password', 'id' => 'passwrd', 'class' => "input-block-level txtfield required", 'minlength' => 6, 'maxlength' => 20, 'autocomplete' => "off", "placeholder" => "Password",'tabindex' => '5',"label" => false)); ?>

					</li>
					<li  style="width:100%;">
						<label>Confirm Password</label>
						<?php echo $this->Form->input('User.cnfpassword', array('type' => 'password', 'id' => 'cnfpassword', 'class' => "input-block-level txtfield required", 'minlength' => 6, 'maxlength' => 20, 'autocomplete' => "off", "placeholder" => "Confirm Password",'tabindex' => '6',"label" => false)); ?> 
  
					</li>
                                        <input name="data[User][user_type]" type="hidden" value="1">
					<button type="submit" class="button-otp">Send OTP</button>
					<div class="register-terms">
						<p>By Signing up, you agree to</p>
						<a href="#">terms & conditons</a>
					</div>
				</ul>
                                    <?php echo $this->Form->end(); ?>
				</div>
		</div>
	  </div>
            <?php }else{?>
            <div class="right" style="margin-top: 100px;">Yor already logedin  <li><a href="<?php echo $this->Html->url(array('controller' => 'Users', 'action' => 'logout')); ?>" class="active">Logout</a></li> </div>
  <?php } ?>
	</div>
  </main>

    <script>
    $(document).ready(function () {
       $("#register").validate({
            rules: {
                "data[User][cnfpassword]": {
                    required: true,
                    equalTo: "#passwrd"
                },
            },
            messages: {
                "data[User][cnfpassword]": {equalTo: "Confirm password does not match."}
            }
			
        });
    });
  </script>