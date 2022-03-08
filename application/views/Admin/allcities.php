







<?php $title="All cities"?>
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
          <div class="row">
            <div class="col-lg-4 col-xl-3 mb-4 mb-xl-0">
                 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
<!--     <section class="content-header">
      <h1>
  <?php echo $title;?>
         </h1>
    </section>
 -->
    <!-- Main content -->
    <section class="content">
     <a href="<?php echo site_url('admin/country/loadAddcity/'.$stateID)?>" class="btn btn-primary">Add city </a>
    <div class="box">
      <div class="box-body">
        <!-- <?php print_r($citys); ?> -->
        <table class="table table-striped">
          <thead>
           <tr>
            <th>city ID</th>
            <th>city Name</th>     
            <th>State Name</th>
            <th>Delete</th>
            <th>Update</th>
           </tr> 
          </thead>
          <tbody>
            <?php 
            foreach ($cities as $c) {
              ?>
              <tr>
                <td><?php echo $c->cityID?></td>
                <td><?php echo $c->cityName?></td>
                <td><?php echo $c->stateName?></td>
                <td><a href="<?php echo site_url("admin/country/removecity/$c->cityID/$c->stateID");?>">Delete city</a></td>
                <td><a href="<?php echo site_url("admin/country/loadEditcity/$c->cityID/$c->stateID");?>">update city</a></td>
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
<!-- Mirrored from www.okler.net/previews/porto-admin/3.1.0/pages-user-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 May 2021 05:25:16 GMT -->
</html>