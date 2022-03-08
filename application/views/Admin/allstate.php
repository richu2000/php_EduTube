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
				
				<aside id="sidebar-left" class="sidebar-left">
					<?php include_once("nav.php"); ?>
				</aside>
				
				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Profile</h2>
					</header>

					
					<div class="row">
						<div class="col-lg-4 col-xl-3 mb-4 mb-xl-0">
						  <div class="content-wrapper">
                <section class="content">
                  <a href="<?php echo site_url('admin/country/loadAddstate/'.$countryID)?>" class="btn btn-primary">Add States</a>
                  <div class="box">
                    <div class="box-body">
                      <table class="table table-striped">
                        <thead>
                         <tr>
                          <th>stateID</th>
                          <th>stateName</th>     
                          <th>Country Name</th>
                          <th>Delete</th>
                          <th>Update</th>
                          <th>view all cities</th>
                         </tr> 
                        </thead>
                        <tbody>
                          <?php 
                          foreach ($states as $c)
                          {
                          ?>
                            <tr>
                              <td><?php echo $c->stateID?></td>
                              <td><?php echo $c->stateName?></td>
                              <td><?php echo $c->countryName?></td>
                              <td><a href="<?php echo site_url("admin/country/removestate/$c->stateID/$c->countryID");?>">Delete state</a></td>
                              <td><a href="<?php echo site_url("admin/country/loadEditstate/$c->stateID/$c->countryID");?>">update state</a></td>
                              <td><a href="<?php echo site_url('admin/country/loadAllcitiesBystateID/'.$c->stateID);?>">view all cities</a></td>
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
					  </div>
          </div>
				</section>				
			</div>
		</section>
		<?php include_once("bottomscripts.php"); ?>
	</body>
</html>