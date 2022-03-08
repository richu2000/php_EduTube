<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from grandetest.com/theme/edumy-html/page-my-setting.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 May 2021 05:35:24 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- css file -->
<?php include_once("topscripts.php"); ?>

<!-- Title -->
<title>EduTube - LMS Online Education Course & School HTML Template</title>
<!-- Favicon -->
<link href="<?php echo base_url('Resources/User/')?>images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="<?php echo base_url('Resources/User/')?>images/favicon.ico" sizes="128x128" rel="shortcut icon" />

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="wrapper">

	<!-- Main Header Nav -->
	<?php include_once("manageProfileHeader.php"); ?>

	<!-- Main Header Nav For Mobile -->

	<!-- Our Dashbord Sidebar -->
	<?php include_once("manageProfileNav.php"); ?>

	<!-- Our Dashbord -->

	<div class="our-dashbord dashbord">
		<div class="dashboard_main_content">
			<div class="container-fluid">
				<div class="main_content_container">
					<div class="row">
						<div class="col-sm-12 col-lg-8 col-xl-12">
							<div class="row">
								<div class="col-lg-12">

									<nav class="breadcrumb_widgets" aria-label="breadcrumb mb30">
										<h4 class="title float-left">User Profile</h4>
									</nav>
								</div>
								<div class="col-lg-12">
									<div class="my_course_content_container">
										<form method="post" action="<?php echo site_url("User/EditUserDetails/".$_SESSION['uid']); ?>" enctype="multipart/form-data">
										<div class="my_setting_content mb30">
											<div class="my_setting_content_header">
												<div class="my_sch_title">
													<h4 class="m0">Personal Details</h4>
												</div>
											</div>
											<div class="row my_setting_content_details pb0">
												
												<!-- image -->
												<div class="col-xl-3">
													<div class="wrap-custom-file">
														<img src="<?php echo base_url("Resources/User video/images/").$userinfo[0]->userImage; ?>" height="150" width="100"/>
													</div>
													Update Image &nbsp;&nbsp;&nbsp;<input type="file" name="img">
												</div>

												<div class="col-xl-10">
													<div class="row">
														<div class="col-xl-6">

															<div class="my_profile_setting_input form-group">
														    	<label for="formGroupExampleInput1">First Name</label>
														    	<input type="text" name="txtFname" class="form-control" id="formGroupExampleInput1" value="<?php echo $userinfo[0]->firstName; ?>">
															</div>

															<div class="my_profile_setting_input form-group">
														    	<label for="formGroupExampleInput1">User Name</label>
														    	<input type="text" name="txtUname" class="form-control" id="formGroupExampleInput1" value="<?php echo $userinfo[0]->Username; ?>">
															</div>
														</div>
														<div class="col-xl-6">
															<div class="my_profile_setting_input form-group">
														    	<label for="formGroupExampleInput3">Last Name</label>
														    	<input type="text" name="txtLname" class="form-control" id="formGroupExampleInput3" value="<?php echo $userinfo[0]->lastName; ?>">
															</div>
															<div class="my_profile_setting_input form-group">
														    	<label for="exampleInputPhone">Phone</label>
														    	<input type="text" class="form-control" name="txtMob" id="exampleInputPhone" aria-describedby="phoneNumber" value="<?php echo $userinfo[0]->mobileNo; ?>">
															</div>
														</div>
													</div>
												</div>

												<div class="col-xl-10">
													<div class="row">
														<div class="col-xl-6">

															<div class="my_profile_setting_input form-group">
														    	<label for="formGroupExampleInput1">Gender</label><br>
														    	<input type="radio" value="Male" name="gender" <?php if($userinfo[0]->Gender == "Male")  echo "Checked"?>> Male&nbsp;&nbsp;&nbsp;
														    	<input type="radio" value="Female" name="gender" <?php if($userinfo[0]->Gender == "Female")  echo "Checked"?>> Female
															</div>
														</div>
														<div class="col-xl-6">
															<div class="my_profile_setting_input form-group">
														    	<label for="formGroupExampleInput3">Email</label>
														    	<input type="text" name="txtEmail" class="form-control" id="formGroupExampleInput3" value="<?php echo $userinfo[0]->Email; ?>">
															</div>
															<div class="my_profile_setting_input form-group">
														    	<label for="exampleInputPhone">City</label>&nbsp;
														    	<select name="city">
														    		<option> --Select city-- </option>
														    			<?php 
														    				foreach ($c as $city)
														    				{
														    			?>
														    					<option value="<?php echo $city->cityID ?>" <?php if($userinfo[0]->cityID == $city->cityID)  echo "Selected"?>> <?php echo $city->cityName; ?> </option>
														    			<?php		
														    				}
														    			?>
														    	</select>
															</div>
														</div>
													</div>
												</div>

												<div class="col-lg-12">
													<div class="my_resume_textarea">
														<div class="form-group">
														    <label for="exampleFormControlTextarea1">Bio</label>
														    <textarea class="form-control" id="exampleFormControlTextarea1" rows="7" name="Bio"><?php echo $userinfo[0]->Bio; ?></textarea>
														</div>
													</div>
												</div>

												<div class="col-lg-12">
													<div class="my_resume_textarea">
														<div class="form-group">
														    <label for="exampleFormControlTextarea1">Address</label>
														    <textarea class="form-control" id="exampleFormControlTextarea1" rows="7" name="Address"><?php echo $userinfo[0]->Address; ?></textarea>
														</div>
													</div>
												</div>
											</div>
											<div class="my_setting_content_header style2">
												<div class="my_sch_title">
													<h4 class="m0">Change password</h4>
												</div>
											</div>
											<div class="row my_setting_content_details pb0">
												<div class="col-xl-6">
													<div class="password_change_form">
															<div class="form-group">
														    	<label for="exampleInputPassword2">New Password</label>
														    	<input type="password" class="form-control" id="exampleInputPassword2" name="txtPwd">
															</div>
															<div class="form-group">
														    	<label for="exampleInputPassword3">Confirm Password</label>
														    	<input type="password" class="form-control mb0" id="exampleInputPassword3" name="txtCpwd">
															</div>
														
													</div>
												</div>
											</div>
											<button type="submit" class="btn btn-log btn-block btn-thm2">Update details</button>
											</form>
										</div>
									</div>
								</div>
							</div>
							<div class="row mt10 mb50">
								<div class="col-lg-12">
									<div class="copyright-widget text-center">
										<p class="color-black2">Copyright EduTube © 2019. All Rights Reserved.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<a class="scrollToHome" href="#"><i class="flaticon-up-arrow-1"></i></a>
<a class="dn" id="countdown" href="#"></a>
</div>
<!-- Wrapper End -->

<?php include_once("bottomscripts.php"); ?>

</body>

<!-- Mirrored from grandetest.com/theme/edumy-html/page-my-setting.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 May 2021 05:35:25 GMT -->
</html>