<?php include_once("topscripts.php"); ?>

<center> <h1> Register </h1> </center>
  	
			<div class="heading">
				<h3 class="text-center">Create New Account</h3>
				<p class="text-center">Have an account? <a class="text-thm" href="<?php echo site_url("UserLogin/loadLogin"); ?>">Login</a></p>
			</div>
			<br><br>
			<form action="<?php echo site_url("UserLogin/addUser"); ?>" method="post" enctype="multipart/form-data">
				<div class="row">
				<div class="form-group col-md-4 offset-md-4">
			    	<input type="text" class="form-control" id="exampleInputName1" placeholder="First name" name="txtFname" required>
				</div>
				</div>

				<div class="row">
				<div class="form-group col-md-4 offset-md-4">
			    	<input type="text" class="form-control" id="exampleInputName1" placeholder="Last name" name="txtLname" required>
				</div>
				</div>

				<div class="row">
				<div class="form-group col-md-4 offset-md-4">
			    	<input type="text" class="form-control" id="exampleInputName1" placeholder="Username" name="txtUname" required>
				</div>
				</div>

				<div class="row">
				<div class="form-group col-md-4 offset-md-4">
			    	Bio<br>
			    	<textarea name="Bio" rows="5" cols="50" placeholder="Bio">  </textarea>
				</div>
				</div>

				<div class="row">
				<div class="form-group col-md-4 offset-md-4">
			    	Select Image &nbsp;&nbsp;&nbsp; <input type="file" name="img" required>
				</div>
				</div>

				<div class="row">
				<div class="form-group col-md-4 offset-md-4">
			    	Gender&nbsp;&nbsp;&nbsp;&nbsp;
			    	<input type="radio" class="" name="gender" value="Male"> Male &nbsp;&nbsp;
			    	<input type="radio" class="" name="gender" value="Female"> Female
				</div>
				</div>

				<div class="row">
				<div class="form-group col-md-4 offset-md-4">
			    	<input type="text" class="form-control" id="exampleInputName1" placeholder="Mobile number" name="txtMob" required>
				</div>
				</div>

				<div class="row">
				<div class="form-group col-md-4 offset-md-4">
			    	Address<br>
			    	<textarea name="Address" rows="5" cols="50" placeholder="Address">  </textarea>
				</div>
				</div>

				<div class="row">
				<div class="form-group col-md-4 offset-md-4">
			    	City &nbsp;&nbsp;&nbsp;
			    	<select name="city">
			    		<option> --Select city-- </option>
			    			<?php 
			    				foreach ($city as $c)
			    				{
			    			?>
			    					<option value="<?php echo $c->cityID ?>"> <?php echo $c->cityName; ?> </option>
			    			<?php		
			    				}
			    			?>
			    	</select>
				</div>
				</div>

				<div class="row">
				<div class="form-group col-md-4 offset-md-4">
			    	<input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email Address" name="txtEmail" required>
				</div>
				</div>

				<div class="row">
				<div class="form-group col-md-4 offset-md-4">
			    	<input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" name="txtPwd" required>
				</div>
				</div>

				<div class="row">
				<div class="form-group col-md-4 offset-md-4">
			    	<input type="password" class="form-control" id="exampleInputPassword3" placeholder="Confirm Password" name="txtCpwd" required>
				</div>
				</div>

				<br>

				<div class="row">
				<div class="col-md-4 offset-md-4">
				<button type="submit" class="btn btn-log btn-block btn-thm2">Register</button>
				</div>
				</div>
				
			</form>
<?php include_once("bottomscripts.php"); ?>