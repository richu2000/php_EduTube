<html>
<head>
		<?php include_once("topscripts.php"); ?>
		<script src="<?php echo base_url('Resources/Admin/')?>vendor/modernizr/modernizr.js"></script>
		<script src="<?php echo base_url('Resources/Admin/')?>master/style-switcher/style.switcher.localstorage.js"></script>
</head>

<body>
	<section class="body">
		<!-- start: header -->
		<?php include_once("header.php"); ?>
		<!-- end: header -->
		<div class="inner-wrapper">
			<!-- start: sidebar -->

			<aside id="sidebar-left" class="sidebar-left">
				<?php include_once("nav.php"); ?>
			</aside>

			<!-- end: sidebar -->
			<section role="main" class="content-body">
				<header class="page-header">
					<h2>Profile</h2>
				</header>

				<!-- start: page -->
				<div class="inner-wrapper">
					<section role="main" class="content-body">
						
						<div class="row">
							
							<div class="col-lg-4 col-xl-3 mb-4 mb-xl-0">
								<section class="card">
									<div class="card-body">
										<div class="thumb-info mb-3">
											<img src="<?php echo base_url('Resources/Admin/')?>img/%21logged-user.jpg" class="rounded img-fluid" alt="John Doe">
											<div class="thumb-info-title">
												<span class="thumb-info-inner">John Doe</span>
												<span class="thumb-info-type">CEO</span>
											</div>
										</div>
									</div>
								</section>
							</div>

							<div class="col-lg-8 col-xl-6">
								<ul class="nav nav-tabs tabs-primary">
									<li class="nav-item">
										<a class="nav-link" href="#edit" data-toggle="tab">Edit</a>
									</li>
								</ul>
								<div class="tab-content">
									<div id="edit" class="tab-pane active">

										<form class="p-3" method="post" action="<?php echo site_url("admin/admin/EditDetails"); ?>" >

											<h4 class="mb-3">Personal Information</h4>
											<div class="form-row mb-4">
												<div class="form-group col">
													<label for="inputAddress">Username</label>
													<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" value="<?php echo $userinfo[0]->Username; ?>" name="txtUname">
												</div>
											</div>

											<hr class="dotted tall">

											<h4 class="mb-3">Change Password</h4>
											<div class="form-row">
												<div class="form-group col-md-6">
													<label for="inputPassword4">New Password</label>
													<input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="txtnwpwd">
												</div>
												<div class="form-group col-md-6 border-top-0 pt-0">
													<label for="inputPassword5">Confirm Password</label>
													<input type="password" class="form-control" id="inputPassword5" placeholder="Password" name="txtrepwd">
												</div>
											    <?php  if(isset($pwderr))
											      {
				      							?>
										            <div class="form-group has-feedback">
										              <p style="color: red"><?php echo $pwderr;?></p>
										      		</div>
				    							<?php 
				    							  } 
				    							?>
											</div>

											<div class="form-row">
												<div class="col-md-12 text-right mt-3">
													<button class="btn btn-primary modal-confirm">Save</button>
												</div>
											</div>

										</form>
									</div>
								</div>
							</div>

						</div>
					</section>
				</div>
			
			</section>				
		</div>
	</section>
	<?php include_once("bottomscripts.php"); ?>
</body>
</html>