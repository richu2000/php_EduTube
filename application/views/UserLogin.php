<?php include_once("topscripts.php"); ?>

<center> <h1> Login </h1> </center>


		<div class="login_form">
			<form action="<?php echo site_url('UserLogin/validateLogin')?>" method="post">
				<div class="heading">
					<h3 class="text-center">Login to your account</h3>
					<p class="text-center">Don't have an account? <a class="text-thm" href="<?php echo site_url("UserLogin/loadRegister"); ?>">Sign Up!</a></p>
				</div>

				<div class="row">
					<div class="form-group col-md-4 offset-md-4">
			    	<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email Address" name="txtEmail">
					</div>
				</div>

				<div class="row">
					<div class="form-group col-md-4 offset-md-4">
				    	<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="txtPwd">
					</div>
				</div>


				<div class="row">
					<div class="col-md-4 offset-md-4">
						<?php  if(isset($loginerr))
					    	{
						?>
				            <div class="form-group has-feedback">
				              <p style="color: red"><?php echo $loginerr;?></p>
				      		</div>
						<?php 
						  	} 
						?>
					</div>
				</div>


				<div class="row">
					<div class="form-group custom-control custom-checkbox col-md-4 offset-md-4">
						<input type="checkbox" class="custom-control-input" id="exampleCheck1">
						<a class="tdu btn-fpswd float-right" href="#">Forgot Password?</a>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4 offset-md-4">
						<button type="submit" class="btn btn-log btn-block btn-thm2">Login</button>
					</div>
				</div>
				
			</form>
		</div>
<?php include_once("bottomscripts.php"); ?>