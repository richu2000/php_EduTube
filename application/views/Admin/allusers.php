





<?php $title="view all users"?>
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
						  
						    <section class="content-header">
						      <h1>
						  		<?php echo $title;?>
						      </h1>
						    </section>
				<section class="content">
				    <div class="box">
				      <div class="box-body">
				        <table class="table table-striped">
				          <thead>
				           <tr>
				              <th>userID</th>
				              <th>Username</th>
				              <th>Firstname</th>
				              <th>Lastname</th>
				              <th>Gender</th>
				              <th>MobileNo</th>
				              <th>Address</th>
				              <th>CityID</th>				                            
				              <th>email</th>
				              <th>Status</th>
				              <!-- <th>Playlist</th> -->
				           </tr> 
				          </thead>
				          <tbody>
				            <?php 
				            foreach ($users as $u) {
								 ?>
				              <tr>
				                <td><?php echo $u->userID?></td>
				                <td><?php echo $u->Username?></td>   
				                <td><?php echo $u->firstName?></td>
				                <td><?php echo $u->lastName?></td>                                             
				                <td><?php echo $u->Gender?></td>
				                <td><?php echo $u->mobileNo?></td>
				                <td><?php echo $u->Address?></td>   
				                <td><?php echo $u->cityID?></td>
				                <td><?php echo $u->Email?></td>
				                <td><?php echo $u->Status?></td>
				                <!-- <td><?php echo $p->playlistName?></td>                                              -->
				              </tr>
				              <?php
				            }
				            ?>
				          </tbody>
				        </table>
				      </div>
				    </div>
   			   </section>
						</div>

						<div class="col-xl-3">						
						</div>
					</div>

				</section>				
			</div>
		</section>
		<?php include_once("bottomscripts.php"); ?>
	</body>
</html>