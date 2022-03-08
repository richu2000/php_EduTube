<!doctype html>
<html class="fixed">
	
<head>

		<meta charset="UTF-8">

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php echo base_url('Resources/Admin/')?>vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="<?php echo base_url('Resources/Admin/')?>vendor/animate/animate.compat.css">

		<link rel="stylesheet" href="<?php echo base_url('Resources/Admin/')?>vendor/font-awesome/css/all.min.css" />
		<link rel="stylesheet" href="<?php echo base_url('Resources/Admin/')?>vendor/boxicons/css/boxicons.min.css" />
		<link rel="stylesheet" href="<?php echo base_url('Resources/Admin/')?>vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="<?php echo base_url('Resources/Admin/')?>vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />

		<!--(remove-empty-lines-end)-->

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo base_url('Resources/Admin/')?>css/theme.css" />
		<!--(remove-empty-lines-end)-->
		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php echo base_url('Resources/Admin/')?>css/custom.css">
		<!-- Head Libs -->
		<script src="<?php echo base_url('Resources/Admin/')?>vendor/modernizr/modernizr.js"></script>		<script src="master/style-switcher/style.switcher.localstorage.js"></script>
	</head>
	<body>
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
				<a href="https://www.okler.net/" class="logo float-left">
					<img src="<?php echo base_url('Resources/Admin/')?>img/logo.png" height="54" alt="Porto Admin" />
				</a>

				<div class="panel card-sign">
					<div class="card-title-sign mt-3 text-right">
						<h2 class="title text-uppercase font-weight-bold m-0"><i class="bx bx-user-circle mr-1 text-6 position-relative top-5"></i> Sign In</h2>
					</div>
					<div class="card-body">
						<form action="<?php echo site_url('Admin/Login/validateLogin')?>" method="post">
							<div class="form-group mb-3">
								<label>Username</label>
								<div class="input-group">
									<input name="txtuname" type="text" class="form-control form-control-lg" />
									<span class="input-group-append">
										<span class="input-group-text">
											<i class="bx bx-user text-4"></i>
										</span>
									</span>
								</div>
							</div>
							<div class="form-group mb-3">
								<div class="clearfix">
									<label class="float-left">Password</label>
									<a href="pages-recover-password.html" class="float-right">Lost Password?</a>
								</div>
								<div class="input-group">
									<input name="txtpwd" type="password" class="form-control form-control-lg" />
									<span class="input-group-append">
										<span class="input-group-text">
											<i class="bx bx-lock text-4"></i>
										</span>
									</span>
								</div>
							</div>
							    <?php  if(isset($loginerr))
							      {
      							?>
						            <div class="form-group has-feedback">
						              <p style="color: red"><?php echo $loginerr;?></p>
						      		</div>
    							<?php 
    							  } 
    							?>

							<div class="row">
								<div class="col-sm-8">
									<div class="checkbox-custom checkbox-default">
										<input id="RememberMe" name="rememberme" type="checkbox"/>
										<label for="RememberMe">Remember Me</label>
									</div>
								</div>
								<div class="col-sm-4 text-right">
									<button type="submit" class="btn btn-primary mt-2">Sign In</button>
								</div>
							</div>

						</form>
					</div>
				</div>
				<p class="text-center text-muted mt-3 mb-3">&copy; Copyright 2017. All Rights Reserved.</p>
			</div>
		</section>
		<!-- end: page -->
		<!-- Vendor -->
		<script src="<?php echo base_url('Resources/Admin/')?>vendor/jquery/jquery.js"></script>	
		<script src="<?php echo base_url('Resources/Admin/')?>vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="<?php echo base_url('Resources/Admin/')?>vendor/jquery-cookie/jquery.cookie.js"></script>	
		<script src="<?php echo base_url('Resources/Admin/')?>master/style-switcher/style.switcher.js"></script>	
		<script src="<?php echo base_url('Resources/Admin/')?>vendor/popper/umd/popper.min.js"></script>		
		<script src="<?php echo base_url('Resources/Admin/')?>vendor/bootstrap/js/bootstrap.js"></script>	
		<script src="<?php echo base_url('Resources/Admin/')?>vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>	
		<script src="<?php echo base_url('Resources/Admin/')?>vendor/common/common.js"></script>	
		<script src="<?php echo base_url('Resources/Admin/')?>vendor/nanoscroller/nanoscroller.js"></script>	
		<script src="<?php echo base_url('Resources/Admin/')?>vendor/magnific-popup/jquery.magnific-popup.js"></script>
		<script src="<?php echo base_url('Resources/Admin/')?>vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Specific Page Vendor -->


		<!--(remove-empty-lines-end)-->
		
		<!-- Theme Base, Components and Settings -->
		<script src="<?php echo base_url('Resources/Admin/')?>js/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="<?php echo base_url('Resources/Admin/')?>js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="<?php echo base_url('Resources/Admin/')?>js/theme.init.js"></script>
		<!-- Analytics to Track Preview Website -->
				<script>
						  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)		  })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');		  ga('create', 'UA-42715764-8', 'auto');		  ga('send', 'pageview');		</script>
	</body>

<!-- Mirrored from www.okler.net/previews/porto-Admin/3.1.0/pages-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 May 2021 05:25:57 GMT -->
</html>