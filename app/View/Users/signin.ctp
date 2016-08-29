  
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
                                    <?php echo $this->Form->create('User', array('id' => 'signin', 'novalidate' => 'true', 'url' => array('controller' => 'Users', 'action' => 'signin'), "inputDefaults" => array("maxlength" => "100", "legend" => false, "label" => false, "div" => false, "required" => false))); ?> 
				<ul class="register-list">
					<li>
						<label>E-Mail Address</label>
						<?php echo $this->Form->input('User.email', array('type' => 'email', 'id' => 'username', 'class' => "input-block-level txtfield required", 'autocomplete' => "off", "placeholder" => "Username - Email",'tabindex' => '3',"label" => false)); ?>	
        
					</li>
					<li style="width:100%;">
						<label> Password</label>
						<?php echo $this->Form->input('User.password', array('type' => 'password', 'id' => 'passwrd', 'class' => "input-block-level txtfield required", 'minlength' => 6, 'maxlength' => 20, 'autocomplete' => "off", "placeholder" => "Password",'tabindex' => '5',"label" => false)); ?>

					</li>
					
					<button type="submit" class="button-otp">Login</button>
					
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
       $("#signin").validate();
           
    });
  </script>