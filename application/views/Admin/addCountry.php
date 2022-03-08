






<?php $title="Add country"?>
<html>
	<head>
	<?php include_once("topscripts.php"); ?>

		<!-- Head Libs -->
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
					<div class="row">
						<div class="col-lg-4 col-xl-3 mb-4 mb-xl-0">
						 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
  <?php echo $title;?>
         </h1>
    </section>

    <!-- Main content -->
    <section class="content">
 		<div class="row">
 			<div class="col-md-12">
 				     <div class="col-md-12 col-md-offset-3">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add country Form</h3>
            </div>
            <form role="form" method="post" action="<?php echo site_url('admin/country/addcountry');?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Enter country Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="new country" name="txtCountry">
                </div>                
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
            </div>
          </div> </div>
      </section>

    <!-- /.content -->
  </div>
						</div>
						<div class="col-xl-3">
						
						</div>
					</div>
				</section>				
			</div>
		</section>
		<?php include_once("bottomscripts.php"); ?>
	</body>
<!-- Mirrored from www.okler.net/previews/porto-admin/3.1.0/pages-user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 May 2021 05:25:16 GMT -->
</html>